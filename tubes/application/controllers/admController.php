<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admModel');
    }

    public function index() {
        $this->load->view('regisAdmin');
    }

    public function home() {
        $this->load->view('homeAdmin');
    }
    public function listBuku() {
        $this->load->view('daftarBuku');
    }

    public function editAkun() {
        $this->load->view('ekunAdmin');
    }

    public function regisAdmin() {
        $this->form_validation->set_rules('namaAdm','Nama','required');
        $this->form_validation->set_rules('emailAdm','Alamat','required');
        $this->form_validation->set_rules('alamatAdm','Email','required');
        $this->form_validation->set_rules('passAdm','Password','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('regisAdmin');
        } else {
            $this->admModel->addAdmin();
            redirect('admController/home');
        }
    }

    public function loginAdmin() {
        $this->form_validation->set_rules('emailAdm','email','required');
        $this->form_validation->set_rules('passAdm','password','required');
        $dataAdm = $this->input->post('emailAdm');

        if ($this->form_validation->run()) {
            $dataAdm = $this->AdmModel->getAdminByEmail($emailAdm);
            // cari akun sesuai email
            if ($emailAsli) {
                $passAdm = $this->input->post('passAdm');
                // pass benar
                if ($dataAdm['passAdm'] == $passAdm) {
                    $sess_data = array(
                        'namaAdm' => $data['namaAdm'],
                        'emailAdm' => $data['emailAdm'],
                        'alamatAdm' => $data['alamatAdm'],
                        'passAdm' => $data['passAdm']
                    );
                    $this->session->set_userdata('datasessAdm',$sess_data);
                    redirect('admController');
                }
                // pass salah
                else {
                    redirect('pjmController');
                }
            }
            // email salah
            else {
                redirect('pjmController');
            }
        }
        else {
            $this->load->view('pjmController');
        }
    }
}
?>