<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pjmController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('pjmModel');
    }

    public function index() {
        $this->load->view('login');
    }

    public function home() {
        $this->load->view('homePeminjam');
    }

    public function pageRegis() {
        $this->load->view('regisPeminjam');
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

    public function loginPeminjam() {
        $this->form_validation->set_rules('emailPjm','email','required');
        $this->form_validation->set_rules('passPjm','password','required');
        $dataPjm = $this->input->post('emailPjm');

        if ($this->form_validation->run()) {
            $dataPjm = $this->pjmModel->getPeminjamByEmail($emailPjm);
            // cari akun sesuai email
            if ($emailAsli) {
                $passPjm = $this->input->post('passPjm');
                // pass benar
                if ($dataPjm['passPjm'] == $passPjm) {
                    $sess_data = array(
                        'namaPjm' => $data['namaPjm'],
                        'emailPjm' => $data['emailPjm'],
                        'alamatPjm' => $data['alamatPjm'],
                        'passPjm' => $data['passPjm']
                    );
                    $this->session->set_userdata('datasessPjm',$sess_data);
                    redirect('homePeminjam');
                }
                // pass salah
                else {
                    redirect('login');
                }
            }
            // email salah
            else {
                redirect('login');
            }
        }
        else {
            $this->load->view('pjmController');
        }
    }
}
?>