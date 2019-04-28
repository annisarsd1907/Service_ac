<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Jasa extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Jasa"));
        }
        
        $this->load->model('jasa_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $jasa = $this->jasa_model->tampil_data();
        $data['jasa'] = $jasa;
        $this->load->view('jasa/index',$data);
    }

    public function tambah(){ 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('jasa/tambah');
        }else {
            redirect(base_url("Jasa"));
        }
    }

    public function simpan(){
        $data = array(
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga'),

        );
        $this->jasa_model->input_data($data);
        redirect('Jasa');
    }

    public function edit($id){
        if ($this->session->userdata('level') == "admin") {
            $data['jasa']= $this->jasa_model->spesifik_data($id); 
            $this->load->view('jasa/edit',$data);
        }else {
            redirect(base_url("Jasa"));
        }
    }

    public function update(){
        $id =$this->input->post('id');
        $data=array(
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga'),
        );
        $this->jasa_model->update_data($data, $id);
        redirect('Jasa');
    }
    function hapus($id){
        if ($this->session->userdata('level') == "admin") {
            $this->jasa_model->hapus_data($id);
            redirect('Jasa');
        }else {
            redirect(base_url("Jasa"));
        }
    }
    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}