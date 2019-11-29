<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
    <style media="screen">
        button { background-color: #00A8A8; color: white; border-radius: 5px; padding: 5px; width: 200px;
                 height: 100px; font-size: 25px; margin-top: 25px; }
        nav { background-color: #008B8B; }
        a { color: white;}
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm">
      <a class="navbar-brand" href="<?php echo site_url('pjmController'); ?>">
          <img src="<?php echo base_url(); ?>src/logo.png" style="width: 40px">
      </a>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="active"><a href="<?php echo site_url('pjmController/listBuku') ?>">UbahProfil</a></li>
      </ul>
  </nav>
    <div>
    <center>
        <a href="<?php echo site_url('crud_book_C/addBookV'); ?>"><button>Tambah</button></a> <br>
        <a href="<?php echo site_url('crud_book_C'); ?>"><button>Ubah</button></a> <br>
        <a href="<?php echo site_url('crud_book_C'); ?>"><button>Hapus</button></a> <br>
        <a href="<?php echo site_url('crud_book_C/viewbookV'); ?>"><button>Daftar Buku</button></a>
    </center>
    </div>
</body>
</html>
