<?php 
 
class login_model extends CI_Model{	


	function cek_login($username){
		return $this->db->get_where('login', ['username' => $username]);
	}
}