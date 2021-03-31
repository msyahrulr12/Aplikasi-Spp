<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    // define breadcrumb variable
    protected $breadcrumbs;

	public function __construct()
    {
        parent::__construct();

        // check login
        if ($this->session->userdata('login') != true) {
            redirect('Auth/login');
        }

        // breadcrumb
        $this->breadcrumbs = [
            [
				'name' => 'Dashboard',
				'link' => 'Home'
            ]
        ];
    }

    public function index()
    {
        if ($this->session->userdata('level') == 'siswa') {
            redirect('Home/indexSiswa');
        }

        $query = "SELECT pembayaran.*, siswa.nama, kelas.nama_kelas, kelas.kompetensi_keahlian, spp.tahun, spp.nominal, spp.nominal_latin FROM pembayaran";
        $query .= " INNER JOIN siswa ON pembayaran.nisn = siswa.nisn";
        $query .= " INNER JOIN spp ON pembayaran.id_spp = spp.id_spp";
        $query .= " INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
        $query .= " ORDER BY pembayaran.id_pembayaran DESC";

        // pembayaran
        $pembayaran = $this->Mymodel->query($query);

        // push breadcrumb
        array_push($this->breadcrumbs, [
            'name' => 'Pembayaran',
            'link' => false
        ]);

        $this->load->view('layouts/header', [
            'breadcrumbs' => $this->breadcrumbs,
            'pembayaran' => $pembayaran
        ]);
		$this->load->view('pembayaran/index', [
            'pembayaran' => $pembayaran
        ]);
        $this->load->view('layouts/footer', [
            'pembayaran' => $pembayaran
        ]);
    }

    public function indexSiswa()
    {
        $query = "SELECT pembayaran.*, siswa.nama, kelas.nama_kelas, kelas.kompetensi_keahlian, spp.tahun, spp.nominal, spp.nominal_latin FROM pembayaran";
        $query .= " INNER JOIN siswa ON pembayaran.nisn = siswa.nisn";
        $query .= " INNER JOIN spp ON pembayaran.id_spp = spp.id_spp";
        $query .= " INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
        $query .= " WHERE siswa.nisn = '".$this->session->userdata('nisn')."'";
        $query .= " ORDER BY pembayaran.id_pembayaran DESC";

        $pembayaran = $this->Mymodel->query($query);

        // push breadcrumb
        array_push($this->breadcrumbs, [
            'name' => 'Pembayaran',
            'link' => false
        ]);

        $this->load->view('layouts/header', [
            'breadcrumbs' => $this->breadcrumbs,
            'pembayaran' => $pembayaran
        ]);
		$this->load->view('pembayaran/index', [
            'pembayaran' => $pembayaran
        ]);
        $this->load->view('layouts/footer', [
            'pembayaran' => $pembayaran
        ]);
    }

	public function create_pembayaran()
	{
        if ($this->session->userdata('level') == 'siswa') {
            redirect('Home/indexSiswa');
        }

        // siswa
        $siswa = $this->Mymodel->read('siswa');
        // spp
        $spp = $this->Mymodel->read('spp');
        // push breadcrumb
        array_push($this->breadcrumbs, [
            'name' => 'Pembayaran',
            'link' => 'Pembayaran'
        ], [
            'name' => 'create',
            'link' => false
        ]);

        // load view
        $this->load->view('layouts/header', [
            'breadcrumbs' => $this->breadcrumbs,
            'siswa' => $siswa,
            'spp' => $spp
        ]);
		$this->load->view('pembayaran/create', [
            'siswa' => $siswa,
            'spp' => $spp
        ]);
        $this->load->view('layouts/footer', [
            'siswa' => $siswa,
            'spp' => $spp
        ]);
	}

    public function detailPembayaran()
    {
        if ($this->session->userdata('level') == 'siswa') {
            redirect('Home/indexSiswa');
        }

        $nisn = $_POST['nisn'];
        $id_spp = $_POST['id_spp'];
        $jumlah_bayar = $_POST['jumlah_bayar'];

        $query = "SELECT siswa.*, kelas.nama_kelas, kelas.kompetensi_keahlian FROM siswa";
        $query .= " INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
        $query .= " WHERE siswa.nisn = '".$nisn."'";
        
        // siswa
        $siswa = $this->Mymodel->query($query)[0];
        // spp
        $spp = $this->Mymodel->get_where("spp", ['id_spp' => $id_spp])[0];
        // push breadcrumb
        array_push($this->breadcrumbs, [
            'name' => 'Pembayaran',
            'link' => 'Pembayaran'
        ], [
            'name' => 'Detail',
            'link' => false
        ]);
        
        $this->load->view('layouts/header', [
            'breadcrumbs' => $this->breadcrumbs,
            'siswa' => $siswa,
            'spp' => $spp,
            'jumlah_bayar' => $jumlah_bayar
        ]);
		$this->load->view('pembayaran/detail', [
            'siswa' => $siswa,
            'spp' => $spp,
            'jumlah_bayar' => $jumlah_bayar
        ]);
        $this->load->view('layouts/footer', [
            'siswa' => $siswa,
            'spp' => $spp,
            'jumlah_bayar' => $jumlah_bayar
        ]);
    }

    public function cekKwitansi($id_pembayaran)
    {
        if ($this->session->userdata('level') == 'siswa') {
            redirect('Home/indexSiswa');
        }

        $query = "SELECT pembayaran.*, siswa.nama, kelas.nama_kelas, kelas.kompetensi_keahlian, spp.tahun, spp.nominal, spp.nominal_latin FROM pembayaran";
        $query .= " INNER JOIN siswa ON pembayaran.nisn = siswa.nisn";
        $query .= " INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
        $query .= " INNER JOIN spp ON pembayaran.id_spp = spp.id_spp";
        $query .= " WHERE pembayaran.id_pembayaran = ".$id_pembayaran;
        
        $data_pembayaran = $this->Mymodel->query($query)[0];
        
        $this->load->view('layouts/header', [
            'breadcrumbs' => $this->breadcrumbs,
            'data_pembayaran' => $data_pembayaran,
        ]);
		$this->load->view('pembayaran/kwitansi', [
            'data_pembayaran' => $data_pembayaran,
        ]);
        $this->load->view('layouts/footer', [
            'data_pembayaran' => $data_pembayaran,
        ]);
    }

    public function cetakKwitansi($id_pembayaran)
    {
        if ($this->session->userdata('level') == 'siswa') {
            redirect('Home/indexSiswa');
        }

        $query = "SELECT pembayaran.*, siswa.nama, kelas.nama_kelas, kelas.kompetensi_keahlian, spp.bulan, spp.tahun, spp.nominal, spp.nominal_latin FROM pembayaran";
        $query .= " INNER JOIN siswa ON pembayaran.nisn = siswa.nisn";
        $query .= " INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
        $query .= " INNER JOIN spp ON pembayaran.id_spp = spp.id_spp";
        $query .= " WHERE pembayaran.id_pembayaran = ".$id_pembayaran;
        
        $data_pembayaran = $this->Mymodel->query($query)[0];
        
		$this->load->view('pembayaran/cetak_kwitansi', [
            'data_pembayaran' => $data_pembayaran,
            'jumlah_bayar' => $_POST['jumlah_bayar'],
        ]);
    }

	public function do_create_pembayaran()
	{
        if ($this->session->userdata('level') == 'siswa') {
            redirect('Home/indexSiswa');
        }

		$data = $_POST;
        
        $res = $this->Mymodel->create_tb('pembayaran', $data);

        if ($res > 0) {
            redirect("Pembayaran");
        } else {
            echo "Gagal";
        }
	}
}
