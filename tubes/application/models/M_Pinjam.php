<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pinjam extends CI_Model {

    public function redStock($id_buku){
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->where('id_buku',$id_buku);
    $query = $this->db->get();
    $data = $query->row_array();
    $stock = $data['stock'];
    $stock = $stock - 1;
    
    $this->db->where('id_buku',$id_buku);
    $this->db->set('stock',$stock);
    $this->db->update('buku');

    }
    
    
    public function addPinjam($data) {


        $this->db->insert('peminjaman',$data);
    }
    
    public function cekPinjam($id,$email) {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->where('id_buku',$id);
        $this->db->where('emailPjm',$email);
        $this->db->where('status',"1");
        $qry = $this->db->get();
        return $qry->row_array();

    }

    public function getbukujoin($email){
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('buku','peminjaman.id_buku = buku.id_buku ');
    $this->db->where('status','1');
    $this->db->where('emailPjm',$email);

    $query = $this->db->get();
    return $query->result_array();
    }

}