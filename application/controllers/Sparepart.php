<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Sparepart extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Sparepart"));
        }
        
        $this->load->model('sparepart_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $jasa = $this->sparepart_model->tampil_data();
        $data['sparepart'] = $jasa;
        $this->load->view('sparepart/index',$data);
    }

    public function tambah(){ 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('sparepart/tambah');
        }else {
            redirect(base_url("Sparepart"));
        }
    }

    public function simpan(){
        $data = array(
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga'),

        );
        $this->sparepart_model->input_data($data);
        redirect('Sparepart');
    }

    public function edit($id){
        if ($this->session->userdata('level') == "admin") {
            $data['sparepart']= $this->sparepart_model->spesifik_data($id); 
            $this->load->view('sparepart/edit',$data);
        }else {
            redirect(base_url("Sparepart"));
        }
    }

    public function update(){
        $id =$this->input->post('id');
        $data=array(
                'jenis' => $this->input->post('jenis'),
                'harga' => $this->input->post('harga'),
        );
        $this->sparepart_model->update_data($data, $id);
        redirect('Sparepart');
    }
    function hapus($id){
        if ($this->session->userdata('level') == "admin") {
            $this->sparepart_model->hapus_data($id);
            redirect('sparepart');
        }else {
            redirect(base_url("Sparepart"));
        }
    }
    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}