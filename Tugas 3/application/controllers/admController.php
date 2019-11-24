<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pjmController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('homeAdmin');
    }

    public function listBuku() {
        $this->load->view('daftarBuku');
    }

    public function regisAdmin() {
        $this->form_validation->set_rules('namaAdm','Nama','required');
        $this->form_validation->set_rules('emailAdm','Alamat','required');
        $this->form_validation->set_rules('alamatAdm','Email','required');
        $this->form_validation->set_rules('passAdm','Password','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('regisAdmin');
        } else {
            $this->adminModel->addAdmin();
            redirect('admController');
        }
    }

    public function loginAdmin() {

    }

}
?>