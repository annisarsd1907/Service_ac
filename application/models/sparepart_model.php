<?php

class sparepart_model extends CI_Model{
    
    public function __construct()
    {
        $this->table = 'sparepart';

        parent::__construct();
    }
    function tampil_data()
    {    
        return $this->db->get('sparepart');
    }
    function jumlah_data(){
        $query=$this->db->get($this->table);

        return $query->num_rows();
    }
    function input_data($data){
        $this->db->insert($this->table, $data);
    }
    function spesifik_data($id){
        $query = $this->db->get_where($this->table,array('id'=> $id));
        return $query->row();
    }
    function update_data($data, $id){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
    function hapus_data($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }
}