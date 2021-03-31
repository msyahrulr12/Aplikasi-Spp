<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

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
        $kelas = $this->Mymodel->read('kelas');

        // push breadcrumb
        array_push($this->breadcrumbs, 
            [
                'name' => 'kelas',
                'link' => 'Kelas'
            ]
        );

        $this->load->view('layouts/header', ['kelas' => $kelas, 'breadcrumbs' => $this->breadcrumbs]);
		$this->load->view('kelas/index', ['kelas' => $kelas]);
        $this->load->view('layouts/footer', ['kelas' => $kelas]);
	}

    public function create_kelas()
    {
        // push breadcrumb
        array_push($this->breadcrumbs, 
            [
                'name' => 'kelas',
                'link' => 'Kelas'
            ],
            [
                'name' => 'create',
                'link' => false
            ]
        );

        $this->load->view('layouts/header', ['breadcrumbs' => $this->breadcrumbs]);
        $this->load->view('kelas/create');
        $this->load->view('layouts/footer');
    }

    public function do_create_kelas()
    {
        $data = $_POST;
        $res = $this->Mymodel->create_tb('kelas', $data);

        if ($res > 0) {
            redirect("Kelas");
        } else {
            echo "Gagal";
        }
    }

    public function update_kelas($id_kelas)
    {
        $kelas = $this->Mymodel->get_where('kelas', ["id_kelas" => $id_kelas])[0];
        // push breadcrumb
        array_push($this->breadcrumbs, 
            [
                'name' => 'kelas',
                'link' => 'Kelas'
            ],
            [
                'name' => 'update',
                'link' => false
            ]
        );

        $this->load->view('layouts/header', ['kelas' => $kelas, 'breadcrumbs' => $this->breadcrumbs]);
        $this->load->view('kelas/update', ['kelas' => $kelas]);
        $this->load->view('layouts/footer', ['kelas' => $kelas]);
    }

    public function do_update_kelas()
    {
        $data = $_POST;
        $where = ["id_kelas" => $data['id_kelas']];
        $res = $this->Mymodel->update_tb('kelas', $data, $where);

        if ($res > 0) {
            redirect("Kelas");
        } else {
            echo "Gagal";
        }
    }

    public function delete_kelas($id_kelas)
    {
        $where = ["id_kelas" => $id_kelas];
        $res = $this->Mymodel->delete_tb('kelas', $where);
        
        if ($res > 0) {
            redirect("Kelas");
        } else {
            echo "Gagal";
        }
    }
}
