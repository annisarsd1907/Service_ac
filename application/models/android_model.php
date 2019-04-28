<?php

class android_model extends CI_Model{
    
    public function __construct()
    {
        $this->table ='android';

        parent::__construct();
    }
    function tampil_data()
    {    
        return $this->db->get('android');
    }
    function jumlah_data(){
        $this->db->insert('android', $data);
        $query=$this->db->get($this->table);

        return $query->num_rows();
    }
    function input_data($data){
        $this->db->insert($this->table, $data);
    }
    function spesifik_data($kondisi){
        $this->db->from('android');
        $this->db->where($kondisi);
        $query = $this->db->get();
        return $query->row();
    }
    function update_data($data, $kondisi)
    {
        $this->db->update('android',$data,$kondisi);
      return TRUE;
    }
    function ganti_data($data, $id){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
    function hapus_data($id){
        $this->db->where('id',$id);
        $this->db->from('android');
        $result = $this->db->get('');

        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function delete_gambar($where){
        $this->db->where($where);
        $this->db->delete('android');
        return TRUE;
    }

}