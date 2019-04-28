<?php

class admin_model extends CI_Model{
    
    public function __construct()
    {
        $this->table = 'login';

        parent::__construct();
    }
    function tampil_data()
    {    
        return $this->db->get('login');
    }
    function jumlah_data(){
        $query=$this->db->get($this->table);

        return $query->num_rows();
    }
    function input_data($data){
        $this->db->insert($this->table, $data);
    }
    function spesifik_data($kode_user){
        $query = $this->db->get_where($this->table,array('kode_user'=> $kode_user));
        return $query->row();
    }
    function update_data($data, $kode_user){
        $this->db->where('kode_user', $kode_user);
        $this->db->update($this->table, $data);
    }
    function hapus_data($kode_user){
        $this->db->where('kode_user',$kode_user);
        $this->db->delete($this->table);
    }
}