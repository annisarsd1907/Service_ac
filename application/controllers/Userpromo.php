<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Userpromo extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('pesan_model');
        $this->load->model('promo_model');
        $this->load->helper('url'); 
        $this->load->library('recaptcha');
    }
    
    public function index()
    {
        $this->load->view('user/promo/index');
        
    }

    public function tambah($id)
    {
        $kondisi = array('id' => $id ); 
        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
            'promo'  => $this->promo_model->spesifik_data($kondisi),
        );
        $this->load->view('user/promo/pesan', $data);
    }

    public function simpan(){
        $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'judul' => $this->input->post('judul'),
                'jumlah_pesan' => $this->input->post('jumlah_pesan'),

        );

        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                $this->pesan_model->input_data($data);
                redirect('Berhasil');
            }
        }
    }
}