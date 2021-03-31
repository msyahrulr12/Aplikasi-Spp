<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login() //petugas
	{
		$this->load->view('auth/login');
	}

	public function login_siswa() //siswa
	{
		$this->load->view('auth/login_siswa');
	}

    public function doLogin()
	{
		// validation
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) { // error
			// redirect to login page
			// redirect('Auth/login');
			$this->load->view('auth/login');
		}

		$checkLogin = $this->Mymodel->get_where('petugas', [
			'username' => $_POST['username'],
			'password' => md5($_POST['password']),
		]);

		if ($checkLogin) {
			$data_user = $checkLogin[0];
			$data_user['login'] = true;
			// set data user to userdata/session
			$this->session->set_userdata($data_user);
			// set flash message
			$this->session->set_flashdata('message', [
				'status' => 'success',
				'data' => 'Berhasil login!',
				'alert' => 'success'
			]);
			// redirect to dashboard
			redirect("Home");
		} else {
			// set flash message
			$this->session->set_flashdata('message', [
				'status' => 'error',
				'data' => 'Username atau passsword salah!',
				'alert' => 'danger'
			]);
			// redirect to login page
			redirect("Auth/login");
		}
	}

	public function doLoginSiswa()
	{
		$checkLogin = $this->Mymodel->get_where('siswa', [
			'username' => $_POST['username'],
			'password' => md5($_POST['password']),
		]);

		if ($checkLogin) {
			$data_user = $checkLogin[0];
			$data_user['login'] = true;
			$data_user['level'] = "siswa";
			$this->session->set_userdata($data_user);
			redirect("Home/indexSiswa");
		} else {
			echo "Login gagal";
		}
	}

	public function logout()
	{
		$loginPage = $this->session->userdata('level') == 'siswa' ? '_siswa' : '';
		$this->session->sess_destroy();
		redirect('Auth/login'.$loginPage);
	}
}
