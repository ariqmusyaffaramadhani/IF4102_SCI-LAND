<?php

class Peminjam extends CI_Controller {
    // public function __construct() {
    //     parent::__construct();
    //     $this->load->model('')
    // }

    public function index() {
        $this->load->view('akunPeminjam');
    }

    public function listBuku() {
        $this->load->view('daftarBuku');
    }

    public function loginAdmin() {
        $this->load->view('login_admin');
    }
}
?>