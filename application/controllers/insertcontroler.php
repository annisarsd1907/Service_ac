<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insertcontroler extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('insertmodel');
	}

	function index(){
		$this->load->view('insertview');
	}

	function proses_insert(){
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' => $this->input->post('level')
			];
			$insert = $this->insertmodel->insert($data);
			if ($insert) {
				echo "Registrasi Berhasil";
			} else {
				echo "Terjadi Kesalahan Saat Registrasi";
			}
	}

}