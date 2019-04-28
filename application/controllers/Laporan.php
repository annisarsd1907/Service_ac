<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Laporan"));
        }
        
        $this->load->model('laporan_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $laporan = $this->laporan_model->get_relasi();
        $data['laporan'] = $laporan;
        $this->load->view('laporan/index',$data);
    }

    public function tambah(){ 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('laporan/tambah');
        }else {
            redirect(base_url("Laporan"));
        }
    }

    public function simpan(){
        $data = array(
                'nama_petugas' => $this->input->post('nama_petugas'),
                'telepon' => $this->input->post('telepon'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => $this->input->post('status'),
                'No' => $this->input->post('No'),

        );
        $this->laporan_model->input_data($data);
        redirect('Laporan');
    }

    public function edit($id){
        if ($this->session->userdata('level') == "admin") {
            $data['laporan']= $this->laporan_model->spesifik_data($id); 
            $this->load->view('laporan/edit',$data);
        }else {
            redirect(base_url("Laporan"));
        }
    }

    public function update(){
        $id =$this->input->post('id');
        $data=array(
                'nama_petugas' => $this->input->post('nama_petugas'),
                'telepon' => $this->input->post('telepon'),
                'deskripsi' => $this->input->post('deskripsi'),
                'status' => $this->input->post('status'),
                'No' => $this->input->post('No'),
        );
        $this->laporan_model->update_data($data, $id);
        redirect('Laporan');
    }
    function hapus($id){
        if ($this->session->userdata('level') == "admin") {
            $this->laporan_model->hapus_data($id);
            redirect('Laporan');
        }else {
            redirect(base_url("Laporan"));
        }
    }
    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}