<?php

  class C_Buku extends CI_Controller  {
    public function __construct() {
      parent::__construct();
      $this->load->model('M_Buku');
      $this->load->model('M_Pinjam');
    }

    public function index(){
        // $data['judul'] = 'Daftar Buku Tersedia';
        $data['list_buku']=$this->M_Buku->get_all();
        // $this->load->view('headerPjm',$data);
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

    public function konfPinjam($id_buku) {
      $data['buku'] = $this->M_Buku->get_buku($id_buku);
      $this->load->view('konfPeminjaman',$data);
    }

    public function pinjam($data){
      // $data = array(
      //   "emailPjm" => $this->input->post('emailPjm',true),
      //   "id_buku" => $this->input->post('id_buku',true),
      //   "tgl_pinjam" => $this->input->post('tgl_pinjam',true),
      //   "tgl_kembali" => $this->input->post('tgl_kembali',true),
      //   "status" => "1"
      // );
      $this->M_Pinjam->addPinjam($data);
    }

  }

  ?>
