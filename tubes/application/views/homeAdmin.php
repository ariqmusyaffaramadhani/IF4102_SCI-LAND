<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/css/bootstrap.min.css">
    <style>
        button {
            background-color: #00A8A8;
            color: white;
            border-radius: 5px;
            padding: 5px;
            width: 200px;
            height: 100px;
            font-size: 25px;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="">
            <img src="<?php echo base_url();?>src/logo.png" style="width: 40px">
        </a>
        <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admController/listBuku') ?>">Daftar Buku</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admController/editAkun'); ?>">Edit Profil</a>
            </li>
        </ul>
    </nav>
    <div>
    <center>
        <a href=""><button>Tambah</button></a> <br>
        <a href=""><button>Ubah</button></a> <br>
        <a href=""><button>Hapus</button></a>
    </center>
    </div>
</body>
</html>
