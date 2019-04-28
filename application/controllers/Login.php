<?php

class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('login_model');
 
	}
 
	function index(){
		$this->load->view('login/index');
	}
 
	function aksi_login(){
		if(isset($_POST['login'])){
			$username = $this->input->post('username');
			$cek = $this->login_model->cek_login($username);
			$hasil = count($cek);
			if ($cek -> num_rows() > 0 ) {
				$password = $this->input->post('password');
				if (password_verify($password, $cek->row()->password)) {
					$data_session = array(
						'username' => $username,
						'status' => "login",
						'level' => "admin"
					);

					$this->session->set_userdata($data_session);
					if ($this->session->userdata('level') === 'admin') {
						redirect('Layanan');
					}
				} else {
					redirect('Login');
				}
			} else if ($cek -> num_rows() > 0 ) {
				$password = $this->input->post('password');
				if (password_verify($password, $cek->row()->password)) {
					$data_session = array(
						'username' => $username,
						'status' => "login"
					);

					$this->session->set_userdata($data_session);
					if ($this->session->userdata('level') === 'operator') {
						redirect('Layanan');
					}
				} else {
					redirect('Login');
				}
			} else if ($cek -> num_rows() > 0 ) {
				$password = $this->input->post('password');
				if (password_verify($password, $cek->row()->password)) {
					$data_session = array(
						'username' => $username,
						'status' => "login"
					);

					$this->session->set_userdata($data_session);
					if ($this->session->userdata('level') === 'user') {
						redirect('User');
					}
				} else {
					redirect('Login');
				}
			} else {
				redirect('Login');
			}
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}

}