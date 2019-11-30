<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
    <title>Laporan Peminjaman</title>
    <style media="screen">
      body { background-color: #E2F0F1; }
      .atas { height: 100px; background-color: #00A8A8; width: 60%; padding-top: 15px; margin-left: 20%; margin-top: 50px;}
      h1 { color: white; font-family: serif; }
      td { color: #13326D;}
      img { padding-left: 100px;}
      button { background-color: #00A8A8; color: white; border-radius: 3px; padding: 5px; width: 70px;
              height: 45px; font-size: 10px; }
      button:hover { cursor: pointer; background-color: #13326D; }
      nav { background-color: #008B8B; }
      a { color: white;}
      .middle { border : solid 2px white; padding-top : 30px; padding-left : 30px; padding-right : 30px; padding-bottom : 10px;
         margin-left: 20%; width: 60%; background-color: white; }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="<?php echo site_url('pjmController'); ?>">
           <img src="<?php echo base_url(); ?>src/logo.png" style="width: 40px; margin-top: -14px;">
        </a>
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo site_url('pjmController') ?>">Home</a></li>
          <li class="active"><a href="<?php echo site_url('C_Buku') ?>">Daftar Buku</a></li>
          <li class="active"><a href="<?php echo site_url('pjmController/cariBuku'); ?>">Pencarian Buku</a></li>
          <li class="active"><a href="<?php echo site_url('pjmController/pageProfil'); ?>">Profil</a></li>
          <li class="active"><a href="<?php echo site_url('pjmController/logout'); ?>">Keluar</a></li>
        </ul>
    </nav>
    <div class="atas">
      <h1><center><b> KONFIRMASI PEMINJAMAN </b> </center></h1>
    </div>
    <?php $dataAkun = $this->session->userdata('sessPjm'); ?>
      <div class="middle">
        <div>
          <form class="form-horizontal" action="" method="post">
            <div class="form-group">
              <label class="control-label col-sm-4" for="nama">Nama : </label>
              <label class="col-sm-5"> <?php echo $dataAkun['namaPjm']; ?> </label>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="nama">E-mail : </label>
              <label class="col-sm-5"> <?php echo $dataAkun['emailPjm']; ?> </label>
            </div>
           <div class="form-group">
             <label class="control-label col-sm-4" for="nama">Buku yang dipinjam : </label>
             <label class="col-sm-5"> <?php echo $buku['judul'] ?> </label>
           </div>
           <div class="form-group">
             <label class="control-label col-sm-4" for="nama">Tanggal dipinjam : </label>
             <label class="col-sm-5"> <?php echo $today=date("l".", "."d-m-Y"); ?> </label>
           </div>
           <div class="form-group">
             <label class="control-label col-sm-4" for="nama">Tanggal dikembalikan : </label>
             <label class="col-sm-5"> 
             <input type="text">
             <?php $back=strtotime("+7 days",strtotime($today)); 
             echo $last=date("l".", "."d-m-Y",$back); ?> </input> </label>
           </div>
           <div class="form-group">
             <label class="control-label col-sm-4" for="nama">Kode Peminjaman : </label>
             <label class="col-sm-5"> <?php echo $idPinjam=rand(1,100);  ?> </label>
           </div>
           <div class="form-group">
             <div class="col-sm-7">

             </div>
             <button class="col-sm-2" type="button" name="button">Halaman <br> Awal</button>
             
         </div>
         </form>
      </div>

  </body>
</html>
