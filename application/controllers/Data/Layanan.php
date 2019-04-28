<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Layanan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() { 
        $layanan = $this->db->get('layanan')->result();
        $this->response(array("result"=>$layanan, 200));
    }

    function index_post() {
        $data = array(
                'nama_pelanggan' => $this->post('nama_pelanggan'),
                'telp' => $this->post('telp'),
                'layanan' => $this->post('layanan'),
                'tanggal_service' => $this->post('tanggal_service'),
                'jam_service' => $this->post('jam_service'),
                'jumlah_unit' => $this->post('jumlah_unit'),
                'tipe_ac' => $this->post('tipe_ac'),
                'merk_ac' => $this->post('merk_ac'),
                'tipe_freon' => $this->post('tipe_freon'),
                'memiliki_tangga' => $this->post('memiliki_tangga'),
                'keluhan' => $this->post('keluhan'),
                'alamat' => $this->post('alamat'));
        $insert = $this->db->insert('layanan', $data);
        $this->response($insert, 200);
    }

}
?>