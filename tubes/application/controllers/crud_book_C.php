<?php

  class crud_book_C extends CI_Controller  {
    public function __construct() {
      parent::__construct();
      $this->load->model('M_Buku');
    }

    public function index(){
      //$data['detail_buku']=$this->Buku_M->get_all();
      echo "ini index  crud";
      
    }

    public function addBookV(){
      $data['title'] = "Tambah Data Buku";
      $this->load->view('crudAdm/header', $data);  
      $this->load->view('crudAdm/addBook_V');
    }


    public function addBook(){
      $img = "default.jpeg";
      $data = [
        "id_buku" => $this->input->post('vidbook',true),
        "judul" => $this->input->post('vjudul',true),
        "penulis" => $this->input->post('vpenulis',true),
        "penerbit" => $this->input->post('vpenerbit',true),
        "jhal" => $this->input->post('vjhal',true),
        "stock" => $this->input->post('vstock',true),
        "sinopsis" => $this->input->post('vsinopsis',true),
        "imgpath" => $img
      ];

      $this->M_Buku->addBuku($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert" style="width=30px;">
			<b>Tambah buku sukses!</b>
      </div>');
      
      redirect("crud_book_C/addBookV");
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
