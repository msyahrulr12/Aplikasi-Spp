<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Spp extends CI_Controller {

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
				'name' => 'Kelas',
				'link' => 'Kelas'
            ]
        ];
    }
	public function index()
    {
        $spp = $this->Mymodel->read('spp');

        $this->load->view('layouts/header', ['spp' => $spp, 'breadcrumbs' => $this->breadcrumbs]);
        $this->load->view('spp/index', ['spp' => $spp]);
        $this->load->view('layouts/footer', ['spp' => $spp]);
    }

    public function create_spp()
    {
        // push breadcrumb
        array_push($this->breadcrumbs, [
            'name' => 'create',
            'link' => false
        ]);

        $this->load->view('layouts/header', ['breadcrumbs' => $this->breadcrumbs]);
        $this->load->view('spp/create');
        $this->load->view('layouts/footer');
    }

    public function do_create_spp()
    {
        $data = $_POST;
        $res = $this->Mymodel->create_tb('spp', $data);

        if ($res > 0) {
            redirect("spp");
        } else {
            echo "Gagal";
        }
    }

    public function update_spp($id_spp)
    {
        $data = $this->Mymodel->get_where("spp", ['id_spp' => $id_spp])[0];

        // push breadcrumb
        array_push($this->breadcrumbs, [
            'name' => 'update',
            'link' => false
        ]);

        $this->load->view('layouts/header', [
            'data' => $data,
            'breadcrumbs' => $this->breadcrumbs
        ]);
        $this->load->view('spp/update', [
            'data' => $data
        ]);
        $this->load->view('layouts/footer', [
            'data' => $data
        ]);
    }

    public function do_update_spp()
    {
        $data = $_POST;
        $where = ["id_spp" => $data['id_spp']];
        $res = $this->Mymodel->update_tb('spp', $data, $where);

        if ($res > 0) {
            redirect("spp");
        } else {
            echo "Gagal";
        }
    }

    public function delete_spp($id_spp)
    {
        $where = ["id_spp" => $id_spp];
        $res = $this->Mymodel->delete_tb('spp', $where);
        
        if ($res > 0) {
            redirect("spp");
        } else {
            echo "Gagal";
        }
    }
}				