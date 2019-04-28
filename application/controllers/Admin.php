<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Admin"));
        }

        $this->load->model('admin_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        if ($this->session->userdata('level') == "admin") {
            $admin = $this->admin_model->tampil_data();
            $data['login'] = $admin;
            $this->load->view('admin/index', $data);
        }else {
            redirect(base_url("Login"));
        }
    }

    public function tambah()
    { 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('admin/tambah');
        }else {
            redirect(base_url("Login"));
        }
    }

    public function simpan(){
        $data = array(
            'username' => $this->input->post('username'),
            'password'=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'level'=> $this->input->post('level'),

        );
        $this->admin_model->input_data($data);
        redirect('Admin');
    }

    public function edit($kode_user)
    {
        if ($this->session->userdata('level') == "admin") {
            $data['login']= $this->admin_model->spesifik_data($kode_user);
            $this->load->view('admin/edit',$data);
        }else {
            redirect(base_url("Login"));
        }
    }

    public function update(){
        $kode_user =$this->input->post('kode_user');
        $data=array(
            'username' => $this->input->post('username'),
            'password'=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'level'=> $this->input->post('level'),
        );
        $this->admin_model->update_data($data, $kode_user);
        redirect('Admin');
    }
    function hapus($kode_user)
    {
        if ($this->session->userdata('level') == "admin") {
            $this->admin_model->hapus_data($kode_user);
            redirect('Admin');
        }else {
            redirect(base_url("Login"));
        }
    }
    function hapus_data($kode_user){
        $this->db->where('kode_user', $kode_user);
        $this->db->delete($this->table);
    }
}