<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Buku Tersedia</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">

  <style media="screen">
     body { background-color: #E2F0F1; }
    .atas { height: 100px;
            background-color: #00A8A8;
            width: 60%;
            padding-top: 3px;
            margin-left: 20%;
            margin-top: 5px;}
    #pic { height : 200px;
          width : 190px; }
    table { margin-left : 20%;
            background-color: white;
            width : 60%; }
    td { padding-left : 20px;
         padding-right : 20px; }
    button { background-color: #00A8A8;
            color: white;
            border-radius: 3px;
            padding: 5px;
            width: 70px;
            height: 45px;
            font-size: 10px; }
    button:hover { cursor: pointer;
           background-color: #13326D; }
    h1 {color: white; }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="">
            <img src="<?php echo base_url(); ?>src/logo.png" style="width: 40px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Peminjam/listBuku') ?>">Daftar Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pjmController/cariBuku'); ?>">Pencarian Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pjmController/pageEdit'); ?>">Edit Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pjmController/logout'); ?>">Log Out</a>
            </li>
        </ul>
    </nav>
    <div class="atas">
        <h1><center>Daftar Buku Tersedia</center></h1>
    </div>
    <table>
      <tr>
        <!-- <td> <img id="pic" src="<?php echo base_url();?>src/nkcthi.jpg"></td>
        <td style="font-size:16px;"> <?php echo $buku['judul']; ?> </td>
        <td> <button type="button">Lihat Detail</button> </td> -->
      </tr>
      <center>
    <button type="button" href="<?php echo site_url('pjmController'); ?>">Kembali</button>
    </center>
    </table>
  </body>
</html>
