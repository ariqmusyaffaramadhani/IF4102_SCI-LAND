<?php
defined('BASEPATH') OR exit('No direct script allowed');

class admModel extends CI_Model {
    public function addAdmin() {
        $data = [
            "namaAdm" => $this->input->post('namaAdm',true),
            "emailAdm" => $this->input->post('emailAdm',true),
            "alamatAdm" => $this->input->post('alamatAdm',true),
            "passAdm" => $this->input->post('passAdm',true)
        ];

        $this->db->insert('admin',$data);
    }

    public function getAdmin($emailAdm) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('emailAdm',$emailAdm);
        $query = $this->db->get();
        return $query->row_array();
    }
}

?>