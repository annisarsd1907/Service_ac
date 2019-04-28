<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Daftarhargauser extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel/jasamodel');
        $this->load->model('usermodel/sparepartmodel');
        $this->load->model('usermodel/freonmodel');
        $this->load->model('usermodel/paketmodel');
        $this->load->model('promo_model');
        $this->load->helper('url'); 
    }
    
    public function index()
    {
        $daftarhargauser = $this->jasamodel->tampil_data();
        $data['jasa'] = $daftarhargauser;
        $this->load->view('user/daftarharga/jasa/index',$data);
    }

    public function sparepart()
    {
        $daftarhargauser = $this->sparepartmodel->tampil_data();
        $data['sparepart'] = $daftarhargauser;
        $this->load->view('user/daftarharga/sparepart/index',$data);
    }

    public function freon()
    {
        $daftarhargauser = $this->freonmodel->tampil_data();
        $data['freon'] = $daftarhargauser;
        $this->load->view('user/daftarharga/freon/index',$data);
    }

    public function paket()
    {
        $daftarhargauser = $this->paketmodel->tampil_data();
        $data['paket'] = $daftarhargauser;
        $this->load->view('user/daftarharga/paket/index',$data);
    }

    public function promo()
    {
        $daftarhargauser = $this->promo_model->tampil_data();
        $data['promo'] = $daftarhargauser;
        $this->load->view('user/promo/index',$data);
    }
 }