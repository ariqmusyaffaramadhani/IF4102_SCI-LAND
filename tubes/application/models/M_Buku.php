<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class M_Buku extends CI_Model {
    public function get_all(){
      return $this->db->get('detail_buku')->result();
    }
    public function get_buku_keyword(){
      // $keyword = $this->input->post('keyword',true);
      // $this->db->select('*');
      // $this->db->from('detail_buku');
      // $this->db->like('judul_buku',$keyword);
      // //
      // // $query = $this->db->get();
      return $this->db->get()->result_array();
    }

    

  }

 ?>
