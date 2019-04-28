<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url'); 
        $this->load->library('recaptcha');
    }
    
    public function index()
    {
        $this->load->view('user/index');
    }

    public function tambah()
    { 
        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
        );
       $this->load->view('user/tambah', $data);
    }

    public function simpan(){
        $data = array(
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'telp' => $this->input->post('telp'),
                'layanan' => $this->input->post('layanan'),
                'tanggal_service' => $this->input->post('tanggal_service'),
                'jam_service' => $this->input->post('jam_service'),
                'jumlah_unit' => $this->input->post('jumlah_unit'),
                'tipe_ac' => $this->input->post('tipe_ac'),
                'merk_ac' => $this->input->post('merk_ac'),
                'tipe_freon' => $this->input->post('tipe_freon'),
                'memiliki_tangga' => $this->input->post('memiliki_tangga'),
                'keluhan' => $this->input->post('keluhan'),
                'alamat' => $this->input->post('alamat'),

        );

        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                $this->user_model->input_data($data);
                redirect('Berhasil');
            }
        }
    }
}