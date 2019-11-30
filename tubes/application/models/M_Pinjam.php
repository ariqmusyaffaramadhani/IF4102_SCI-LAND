<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pinjam extends CI_Model {
    public function addPinjam($data) {
        $this->db->insert('peminjaman',$data);
    }
}