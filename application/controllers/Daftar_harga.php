<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Daftar_harga extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Daftar_harga"));
        }
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $this->load->view('daftar_harga/index');
    }
}