<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Android extends CI_Controller {

    function __construct(){
        parent::__construct();
         if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Android"));
        }

        $this->load->model('android_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('form_validation'); 
    }
    
    public function index()
    {
        $android = $this->android_model->tampil_data();
        $data['android'] = $android;
        $this->load->view('android/index',$data);
    }

    public function tambah(){ 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('android/tambah');
        }else {
            redirect(base_url("Android"));
        }
    }

    public function simpan()
    {
        $id = $this->input->post('id');

        $config['upload_path'] = './assets/image/android';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array('id' => $id,
                        'gambar' => $gambar['file_name'],
                    );
                $this->android_model->input_data($data);
                redirect('Android/index');
            }else {
              die("gagal upload");
            }
        }else {
          echo "tidak masuk";
        }
    }

 public function edit($id){
        if ($this->session->userdata('level') == "admin") {
            $kondisi = array('id' => $id );
            $data['android'] = $this->android_model->spesifik_data($kondisi);
            $this->load->view('android/edit',$data);
        }else {
            redirect(base_url("Android"));
        }
    }

    public function update(){
        $id   = $this->input->post('id');

        $path = './assets/image/android/';
        $kondisi = array('id' => $id );

        $config['upload_path'] = './assets/image/android';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array('id' => $id,
                        'gambar' => $gambar['file_name'],
                    );
                @unlink($path.$this->input->post('ganti_gambar'));
                $this->android_model->update_data($data,$kondisi);
                redirect('Android/index');
            }else {
              die("gagal update");
            }
        }elseif ($id =$this->input->post('id')) {
                $data=array(
                'id' => $this->input->post('id'),
                'gambar' => $this->input->post('gambar'),
                );
                $this->android_model->ganti_data($data, $id);
                redirect('Android/index');
        }else {
          echo "tidak masuk";
        }
  }
    
    function hapus($id){
        $data = $this->android_model->hapus_data($id);

        $path = './assets/image/android/';
        @unlink($path.$data->gambar);
        if ($this->android_model->delete_gambar($id) == TRUE) {
            $where = array('id' => $id );
            $this->android_model->delete_gambar($where);
        }
            redirect('Android');
    }
    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }     
}