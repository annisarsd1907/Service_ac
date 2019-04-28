<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Promo extends CI_Controller {

    function __construct(){
        parent::__construct();
         if ($this->session->userdata('status') !="login") {
            # code...
            redirect(base_url("Promo"));
        }

        $this->load->model('promo_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('form_validation'); 
    }
    
    public function index()
    {
        $promo = $this->promo_model->tampil_data();
        $data['promo'] = $promo;
        $this->load->view('promo/index',$data);
    }

    public function tambah(){ 
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('promo/tambah');
        }else {
            redirect(base_url("Promo"));
        }
    }

    public function simpan()
    {
        $judul = $this->input->post('judul');
        $harga = $this->input->post('harga');
        $syarat = $this->input->post('syarat');

        $config['upload_path'] = './assets/image/upload';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array('judul' => $judul,
                        'harga' => $harga,
                        'syarat' => $syarat,
                        'gambar' => $gambar['file_name'],
                    );
                $this->promo_model->input_data($data);
                redirect('Promo/index');
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
            $data['promo'] = $this->promo_model->spesifik_data($kondisi);
            $this->load->view('promo/edit',$data);
        }else {
            redirect(base_url("Promo"));
        }
    }

    public function update(){
        $id   = $this->input->post('id');
        $judul = $this->input->post('judul');
        $harga = $this->input->post('harga');
        $syarat = $this->input->post('syarat');

        $path = './assets/image/upload/';
        $kondisi = array('id' => $id );

        $config['upload_path'] = './assets/image/upload';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel
        $config['file_name'] = $_FILES['gambar']['name'];

        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $gambar = $this->upload->data();
                $data = array('judul' => $judul,
                        'harga' => $harga,
                        'syarat' => $syarat,
                        'gambar' => $gambar['file_name'],
                    );
                @unlink($path.$this->input->post('ganti_gambar'));
                $this->promo_model->update_data($data,$kondisi);
                redirect('Promo/index');
            }else {
              die("gagal update");
            }
        }elseif ($id =$this->input->post('id')) {
                $data=array(
                'judul' => $this->input->post('judul'),
                'harga' => $this->input->post('harga'),
                'syarat' => $this->input->post('syarat'),
                'gambar' => $this->input->post('gambar'),
                );
                $this->promo_model->ganti_data($data, $id);
                redirect('Promo/index');
        }else {
          echo "tidak masuk";
        }
  }
    
    function hapus($id){
        $data = $this->promo_model->hapus_data($id);

        $path = './assets/image/upload/';
        @unlink($path.$data->gambar);
        if ($this->promo_model->delete_gambar($id) == TRUE) {
            $where = array('id' => $id );
            $this->promo_model->delete_gambar($where);
        }
            redirect('Promo');
    }
    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }     
}