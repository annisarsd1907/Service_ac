<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Freon extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Freon"));
        }
        
        $this->load->model('freon_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $freon = $this->freon_model->tampil_data();
        $data['freon'] = $freon;
        $this->load->view('freon/index',$data);
    }

    public function tambah(){
        if ($this->session->userdata('level') == "admin") { 
            $this->load->view('freon/tambah');
        }else {
            redirect(base_url("Freon"));
        }
    }

    public function simpan(){
        $data = array(
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga'),

        );
        $this->freon_model->input_data($data);
        redirect('Freon');
    }

    public function edit($id){
        if ($this->session->userdata('level') == "admin") { 
            $data['freon']= $this->freon_model->spesifik_data($id); 
            $this->load->view('freon/edit',$data);
        }else {
            redirect(base_url("Freon"));
        }
    }

    public function update(){
        $id =$this->input->post('id');
        $data=array(
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga'),
        );
        $this->freon_model->update_data($data, $id);
        redirect('Freon');
    }
    function hapus($id){
        if ($this->session->userdata('level') == "admin") { 
            $this->freon_model->hapus_data($id);
            redirect('Freon');
        }else {
            redirect(base_url("Freon"));
        }
    }
    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}