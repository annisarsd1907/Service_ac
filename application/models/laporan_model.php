<?php

class laporan_model extends CI_Model{
    
    public function __construct()
    {
        $this->table = 'laporan';

        parent::__construct();
    }
    function get_relasi(){
        $this->db->select(['a.nama_pelanggan', 'a.layanan', 'a.No', 'b.id', 'b.nama_petugas', 'b.telepon', 'b.deskripsi', 'b.status']);
        $this->db->from('laporan b');
        $this->db->join('layanan a', 'a.No = b.No', 'left');
        $this->db->order_by('nama_pelanggan', 'layanan', 'asc');
        $return = $this->db->get('');
        return $return->result();
    }
    function tampil_data()
    {    
        return $this->db->get('laporan');
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