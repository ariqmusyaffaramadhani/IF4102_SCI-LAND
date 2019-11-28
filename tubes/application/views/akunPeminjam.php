<!DOCTYPE html>
<html>
<head>
    <title>Profil Saya</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <style>
        input {
            margin-left: 30%;
            margin-right: 30%;
            margin-bottom: 5px;
            width: 40%;
            border: none;
            line-height: 50px;
            border-bottom: 3px solid #DDD;
            padding: 10px;
            border-radius : 6px;
        }
        
        input:hover {
            outline: none;
            border-bottom : 3px solid #13326D;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="">
            <img src="<?php echo base_url(); ?>src/logo.png" style="width: 40px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pjmController/listBuku') ?>">Daftar Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pjmController/cariBuku'); ?>">Pencarian Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pjmController/pageEdit'); ?>">Edit Profil</a>
            </li>
        </ul>
    </nav>
    <div class="profil">
        <h1><center>Edit Profil</center></h1>
        <form method="post" action="<?php echo site_url('pjmController/editPeminjam') ?>">
            <input type="text" name="namaPjm" placeholder="Nama"><br>
            <input type="text" name="alamatPjm" placeholder="Alamat"><br>
            <input type="email" name="emailPjm" placeholder="Email"><br>
            <input type="password" name="passPjm" placeholder="Password"><br>
        <center>
            <!-- <button style="margin-right: 40px;" >Batal</button> -->
            <button type="submit">Simpan</button>
        </center>
        </form>
    </div>
</body>
</html>