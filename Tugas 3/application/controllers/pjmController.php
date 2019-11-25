<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pjmController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('pjmModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('login');
    }

    public function listBuku() {
        $this->load->view('daftarBuku');
    }

    public function editAkun() {
        $this->load->view('akunPeminjam');
    }

    public function regisPeminjam() {
        $this->form_validation->set_rules('namaPjm','Nama','required');
        $this->form_validation->set_rules('emailPjm','Alamat','required');
        $this->form_validation->set_rules('alamatPjm','Email','required');
        $this->form_validation->set_rules('passPjm','Password','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('regisPeminjam');
        } else {
            $this->pjmModel->addPeminjam();
            redirect('pjmController');
        }
    }
}
?>