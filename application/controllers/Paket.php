<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Paket extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Paket"));
        }
        
        $this->load->model('paket_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $paket = $this->paket_model->tampil_data();
        $data['paket'] = $paket;
        $this->load->view('paket/index',$data);
    }

    public function tambah(){ 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('paket/tambah');
        }else {
            redirect(base_url("Paket"));
        }
    }

    public function simpan(){
        $data = array(
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga'),

        );
        $this->paket_model->input_data($data);
        redirect('Paket');
    }

    public function edit($id){
        if ($this->session->userdata('level') == "admin") {
            $data['paket']= $this->paket_model->spesifik_data($id); 
            $this->load->view('paket/edit',$data);
        }else {
            redirect(base_url("Paket"));
        }
    }

    public function update(){
        $id =$this->input->post('id');
        $data=array(
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga'),
        );
        $this->paket_model->update_data($data, $id);
        redirect('Paket');
    }
    function hapus($id){
        if ($this->session->userdata('level') == "admin") {
            $this->paket_model->hapus_data($id);
            redirect('Paket');
        }else {
            redirect(base_url("Paket"));
        }
    }
    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}