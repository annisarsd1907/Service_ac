<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Register extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() { 
        $login = $this->db->get('login')->result();
        $this->response(array("result"=>$login, 200));
    }

    function index_post() {
        $data = array(
                'username' => $this->post('username'),
                'password' => $this->post('password'),
                'nama_lengkap' => $this->post('nama_lengkap'),
                'level' => $this->post('level'));
        $insert = $this->db->insert('login', $data);
        $this->response($insert, 200);
    }

}
?>