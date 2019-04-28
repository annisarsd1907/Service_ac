<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Pesan extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Pesan"));
        }
        
        $this->load->model('pesan_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $pesan = $this->pesan_model->tampil_data();
        $data['pesan'] = $pesan;
        $this->load->view('pesan/index',$data);
    }

    public function tambah(){ 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('pesan/tambah');
        }else {
            redirect(base_url("Pesan"));
        }
    }

    public function simpan(){
        $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'judul' => $this->input->post('judul'),
                'jumlah_pesan' => $this->input->post('jumlah_pesan'),

        );
        $this->pesan_model->input_data($data);
        redirect('Pesan');
    }

    public function edit($id){
        if ($this->session->userdata('level') == "admin") {
            $data['pesan']= $this->pesan_model->spesifik_data($id); 
            $this->load->view('pesan/edit',$data);
        }else {
            redirect(base_url("Pesan"));
        }
    }

    public function update(){
        $id =$this->input->post('id');
        $data=array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'judul' => $this->input->post('judul'),
                'jumlah_pesan' => $this->input->post('jumlah_pesan'),
        );
        $this->pesan_model->update_data($data, $id);
        redirect('Pesan');
    }
    function hapus($id){
        if ($this->session->userdata('level') == "admin") {
            $this->pesan_model->hapus_data($id);
            redirect('Pesan');
        }else {
            redirect(base_url("Pesan"));
        }
    }
    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}