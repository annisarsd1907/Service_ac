<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Layanan extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Layanan"));
        }
        
        $this->load->model('layanan_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $layanan = $this->layanan_model->tampil_data();
        $data['layanan'] = $layanan;
        $this->load->view('layanan/index',$data);
    }

    public function tambah(){ 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('layanan/tambah');
        }else {
            redirect(base_url("Layanan"));
        }
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
        $this->layanan_model->input_data($data);
        redirect('Layanan');
    }

    public function edit($No){
        if ($this->session->userdata('level') == "admin") {
            $data['layanan']= $this->layanan_model->spesifik_data($No); 
            $this->load->view('layanan/edit',$data);
        }else {
            redirect(base_url("Layanan"));
        }
    }

    public function update(){
        $No =$this->input->post('No');
        $data=array(
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
        $this->layanan_model->update_data($data, $No);
        redirect('Layanan');
    }
    function hapus($No){
        if ($this->session->userdata('level') == "admin") {
            $this->layanan_model->hapus_data($No);
            redirect('layanan');
        }else {
            redirect(base_url("Layanan"));
        }
    }
    function hapus_data($No){
        $this->db->where('No', $No);
        $this->db->delete($this->table);
    }
}