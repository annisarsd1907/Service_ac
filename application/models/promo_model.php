<?php

class promo_model extends CI_Model{
    
    public function __construct()
    {
        $this->table ='promo';

        parent::__construct();
    }
    function tampil_data()
    {    
        return $this->db->get('promo');
    }
    function jumlah_data(){
        $this->db->insert('promo', $data);
        $query=$this->db->get($this->table);

        return $query->num_rows();
    }
    function input_data($data){
        $this->db->insert($this->table, $data);
    }
    function spesifik_data($kondisi){
        $this->db->from('promo');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }
    function update_data($data, $kondisi)
    {
        $this->db->update('promo',$data,$kondisi);
      return TRUE;
    }
    function ganti_data($data, $id){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
    function hapus_data($id){
        $this->db->where('id',$id);
        $this->db->from('promo');
        $result = $this->db->get('');

        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function delete_gambar($where){
        $this->db->where($where);
        $this->db->delete('promo');
        return TRUE;
    }

}