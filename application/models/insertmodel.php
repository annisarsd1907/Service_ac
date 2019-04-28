<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insertmodel extends CI_Model{

	function insert($data){
		return $this->db->insert('login', $data);
	}
}