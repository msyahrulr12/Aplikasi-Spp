<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('login') != true) {
            redirect('Auth/login');
        }

        if ($this->session->userdata('level') != 'admin') {
            redirect('Auth/logout');
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
        $petugas = $this->Mymodel->read('petugas');

        // push breadcrumb
        array_push($this->breadcrumbs, 
            [
                'name' => 'petugas',
                'link' => 'Petugas'
            ]
        );

        $this->load->view('layouts/header', ['petugas' => $petugas, 'breadcrumbs' => $this->breadcrumbs]);
		$this->load->view('petugas/index', ['petugas' => $petugas]);
        $this->load->view('layouts/footer', ['petugas' => $petugas]);
	}

    public function create_petugas()
    {
        // push breadcrumb
        array_push($this->breadcrumbs, 
            [
                'name' => 'petugas',
                'link' => 'Petugas'
            ],
            [
                'name' => 'create',
                'link' => false
            ],
        );

        $this->load->view('layouts/header', ['breadcrumbs' => $this->breadcrumbs]);
        $this->load->view('petugas/create');
        $this->load->view('layouts/footer');
    }

    public function do_create_petugas()
    {
        $_POST['password'] = md5($_POST['password']);
        $data = $_POST;
        $res = $this->Mymodel->create_tb('petugas', $data);

        if ($res > 0) {
            redirect("petugas");
        } else {
            echo "Gagal";
        }
    }

    public function update_petugas($id_petugas)
    {
        $petugas = $this->Mymodel->get_where('petugas', ["id_petugas" => $id_petugas])[0];
        
        // push breadcrumb
        array_push($this->breadcrumbs, 
            [
                'name' => 'petugas',
                'link' => 'Petugas'
            ],
            [
                'name' => 'create',
                'link' => false
            ],
        );

        $this->load->view('layouts/header', ['petugas' => $petugas, 'breadcrumbs' => $this->breadcrumbs]);
        $this->load->view('petugas/update', ['petugas' => $petugas]);
        $this->load->view('layouts/footer', ['petugas' => $petugas]);
    }

    public function do_update_petugas()
    {
        $data = $_POST;

        $where = ["id_petugas" => $data['id_petugas']];
        $res = $this->Mymodel->update_tb('petugas', $data, $where);

        if ($res > 0) {
            // jika ada data password di post, arahkan ke profile
            redirect("Petugas");
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

        $where = ["id_petugas" => $data['id_petugas']];
        $res = $this->Mymodel->update_tb('petugas', $data, $where);

        if ($res > 0) {
            $data['login'] = true;
            // update data session
            $this->session->set_userdata($data);
            // jika ada data password di post, arahkan ke profile
            redirect("Home/profile");
        } else {
            echo "Gagal";
        }
    }

    public function delete_petugas($id_petugas)
    {
        $where = ["id_petugas" => $id_petugas];
        $res = $this->Mymodel->delete_tb('petugas', $where);
        
        if ($res > 0) {
            redirect("petugas");
        } else {
            echo "Gagal";
        }
    }
}
