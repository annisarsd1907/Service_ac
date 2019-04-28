<?php

class layanan_model extends CI_Model{
    
    public function __construct()
    {
        $this->table = 'layanan';

        parent::__construct();
    }
    function tampil_data()
    {    
        return $this->db->get('layanan');
    }
    function jumlah_data(){
        $query=$this->db->get($this->table);

        return $query->num_rows();
    }
    function input_data($data){
        $this->db->insert($this->table, $data);
    }
    function spesifik_data($No){
        $query = $this->db->get_where($this->table,array('No'=> $No));
        return $query->row();
    }
    function update_data($data, $No){
        $this->db->where('No', $No);
        $this->db->update($this->table, $data);
    }
    function hapus_data($No){
        $this->db->where('No',$No);
        $this->db->delete($this->table);
    }
}