<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('login') != true) {
            redirect('Auth/login');
        }
    }
	
	public function index()
	{
		// pembayaran
		$query = "SELECT COUNT(id_pembayaran) as count FROM pembayaran";
		$pembayaran = $this->Mymodel->query($query)[0]['count'];

		// siswa
		$query = "SELECT COUNT(nisn) as count FROM siswa";
		$siswa = $this->Mymodel->query($query)[0]['count'];

		// kelas
		$query = "SELECT COUNT(id_kelas) as count FROM kelas";
		$kelas = $this->Mymodel->query($query)[0]['count'];

		// petugas
		$query = "SELECT COUNT(id_petugas) as count FROM petugas";
		$petugas = $this->Mymodel->query($query)[0]['count'];

		// breadcrumb
		$breadcrumbs = [
			[
				'name' => 'Dashboard',
				'link' => false
			]
		];

        $this->load->view('layouts/header', [
			'pembayaran' => $pembayaran,
			'siswa' => $siswa,
			'kelas' => $kelas,
			'petugas' => $petugas,
			'breadcrumbs' => $breadcrumbs
		]);
		$this->load->view('index', [
			'pembayaran' => $pembayaran,
			'siswa' => $siswa,
			'kelas' => $kelas,
			'petugas' => $petugas
		]);
        $this->load->view('layouts/footer', [
			'pembayaran' => $pembayaran,
			'siswa' => $siswa,
			'kelas' => $kelas,
			'petugas' => $petugas
		]);
	}

	public function profile()
	{
		$profile = $this->Mymodel->get_where('petugas', [
			'id_petugas' => $this->session->userdata('id_petugas')
		])[0];
		
		$this->load->view('layouts/header', ['profile' => $profile]);
		$this->load->view('profile', ['profile' => $profile]);
        $this->load->view('layouts/footer', ['profile' => $profile]);
	}

	public function indexSiswa()
	{
		// pembayaran
		$query = "SELECT COUNT(id_pembayaran) as count FROM pembayaran WHERE nisn = ".'"'.$this->session->userdata('nisn').'"';
		$pembayaran = $this->Mymodel->query($query)[0]['count'];

		$this->load->view('layouts/header', [
			'pembayaran' => $pembayaran
		]);
		$this->load->view('index_siswa', [
			'pembayaran' => $pembayaran
		]);
        $this->load->view('layouts/footer', [
			'pembayaran' => $pembayaran
		]);
	}

	public function profileSiswa()
	{
		$profile = $this->Mymodel->get_where('siswa', [
			'nisn' => $this->session->userdata('nisn')
		])[0];
		
		$this->load->view('layouts/header', ['profile' => $profile]);
		$this->load->view('profile_siswa', ['profile' => $profile]);
        $this->load->view('layouts/footer', ['profile' => $profile]);
	}
}
