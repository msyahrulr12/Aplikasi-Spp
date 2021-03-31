<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('login') != true) {
            redirect('Auth/login');
        }

        // breadcrumb
        $this->breadcrumbs = [
            [
				'name' => 'dashboard',
				'link' => 'Home'
            ]
        ];
    }
    public function index()
    {
        if ($this->session->userdata('level') != 'admin') {
            redirect('Auth/logout');
        }

        $query = "SELECT siswa.*, kelas.nama_kelas, kelas.kompetensi_keahlian FROM siswa";
        $query .= " INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
        $siswa = $this->Mymodel->query($query);

        array_push($this->breadcrumbs, [
            'name' => 'Pembayaran',
            'link' => 'Pembayaran'
        ], [
            'name' => 'Detail',
            'link' => false
        ]);

        $this->load->view('layouts/header', ['siswa' => $siswa, 'breadcrumbs' => $this->breadcrumbs]);
        $this->load->view('siswa/index', ['siswa' => $siswa]);
        $this->load->view('layouts/footer', ['siswa' => $siswa]);
    }

    public function create_siswa()
    {
        if ($this->session->userdata('level') != 'admin') {
            redirect('Auth/logout');
        }

        $kelas = $this->Mymodel->read("kelas");

        array_push($this->breadcrumbs, [
            'name' => 'create',
            'link' => false
        ]);

        $this->load->view('layouts/header', [
            'kelas' => $kelas,
            'breadcrumbs' => $this->breadcrumbs
        ]);
        $this->load->view('siswa/create', [
            'kelas' => $kelas
        ]);
        $this->load->view('layouts/footer', [
            'kelas' => $kelas
        ]);
    }

    public function do_create_siswa()
    {
        if ($this->session->userdata('level') != 'admin') {
            redirect('Auth/logout');
        }

        $data = $_POST;
        $res = $this->Mymodel->create_tb('siswa', $data);

        if ($res > 0) {
            redirect("siswa");
        } else {
            echo "Gagal";
        }
    }

    public function update_siswa($nisn)
    {
        if ($this->session->userdata('level') != 'admin') {
            redirect('Auth/logout');
        }

        $kelas = $this->Mymodel->read("kelas");
        $data = $this->Mymodel->get_where("siswa", ['nisn' => $nisn])[0];

        array_push($this->breadcrumbs, 
            [
                'name' => 'siswa',
                'link' => 'Siswa'
            ],
            [
                'name' => 'update',
                'link' => false
            ]
        );

        $this->load->view('layouts/header', [
            'data' => $data,
            'kelas' => $kelas,
            'breadcrumbs' => $this->breadcrumbs
        ]);
        $this->load->view('siswa/update', [
            'data' => $data,
            'kelas' => $kelas,
        ]);
        $this->load->view('layouts/footer', [
            'data' => $data,
            'kelas' => $kelas,
        ]);
    }

    public function do_update_siswa()
    {
        if ($this->session->userdata('level') != 'admin') {
            redirect('Auth/logout');
        }

        $data = $_POST;
        $where = ["nisn" => $data['nisn']];
        $res = $this->Mymodel->update_tb('siswa', $data, $where);

        if ($res > 0) {
            redirect("siswa");
        } else {
            echo "Gagal";
        }
    }

    public function delete_siswa($nisn)
    {
        if ($this->session->userdata('level') != 'admin') {
            redirect('Auth/logout');
        }

        $where = ["nisn" => $nisn];
        $res = $this->Mymodel->delete_tb('siswa', $where);
        
        if ($res > 0) {
            redirect("siswa");
        } else {
            echo "Gagal";
        }
    }

    public function update_profile()
    {
        // ubah password
        if ($_POST['old_password'] != '' && $_POST['new_password'] != '' && $_POST['repeat_password'] != '') {
            // cek dengan password yang ada di database
            $checkPassword = $this->Mymodel->get_where('petugas', [
                'password' => md5($_POST['old_password'])
            ]);
            if (!$checkPassword) {
                echo 'Password lama salah!';
                die();
            }
            // cek new password dengan repeat password
            if ($_POST['new_password'] !== $_POST['repeat_password']) {
                echo 'Password baru dengan repeat password berbeda!';
                die();
            }
            $_POST['password'] = md5($_POST['new_password']);
        }
        // unset password jika ada
        if (isset($_POST['old_password'])) {
            unset($_POST['old_password']);
        }
        if (isset($_POST['new_password'])) {
            unset($_POST['new_password']);
        }
        if (isset($_POST['repeat_password'])) {
            unset($_POST['repeat_password']);
        }

        $data = $_POST;

        $where = ["nisn" => $data['nisn']];
        $res = $this->Mymodel->update_tb('siswa', $data, $where);

        if ($res > 0) {
            $data['login'] = true;
            // update data session
            $this->session->set_userdata($data);
            // jika ada data password di post, arahkan ke profile
            redirect("Home/profileSiswa");
        } else {
            echo "Gagal";
        }
    }
}
