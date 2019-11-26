<?php

  class crud_book_C extends CI_Controller  {
    public function __construct() {
      parent::__construct();
      $this->load->model('M_Buku');
    }

    public function index(){
        //$data['detail_buku']=$this->Buku_M->get_all();
        $this->load->view('crudAdm/addBook_V');
    }

    public function view(){
      $this->load->view('halPencarian');
    }
    public function search(){
      // $keyword = $this->input->post('keyword');
      $data=$this->M_Buku->get_buku_keyword();
      $this->load->view('lapPencarian',$data);

    }

  }

  ?>
