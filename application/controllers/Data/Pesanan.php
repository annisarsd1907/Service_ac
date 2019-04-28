<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Pesanan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() { 
        $pesan = $this->db->get('pesan')->result();
        $this->response(array("result"=>$pesan, 200));
    }

    function index_post() {
        $data = array(
                'nama' => $this->post('nama'),
                'alamat' => $this->post('alamat'),
                'telepon' => $this->post('telepon'),
                'judul' => $this->post('judul'),
                'jumlah_pesan' => $this->post('jumlah_pesan'));
        $insert = $this->db->insert('pesan', $data);
        $this->response($insert, 200);
    }

}
?>