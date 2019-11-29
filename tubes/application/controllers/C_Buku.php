<?php

  class C_Buku extends CI_Controller  {
    public function __construct() {
      parent::__construct();
      $this->load->model('M_Buku');
    }

    public function index(){
        $data['list_buku']=$this->M_Buku->get_all();
        $this->load->view('daftarBuku',$data);
    }

    public function view(){
      $this->load->view('halPencarian');
    }

    public function search(){
      // $keyword = $this->input->post('keyword');
      $data['list_buku']=$this->M_Buku->get_buku_keyword();
      $this->load->view('daftarBuku',$data);
    }

    public function detailBuku($id_buku){
      $data['detail'] = $this->M_Buku->get_buku($id_buku);
      $this->load->view('detailBuku',$data);
    }

  }

  ?>
