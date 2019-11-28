<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="<?php echo site_url('pjmController'); ?>">
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
    <?php $dataAkun = $this->session->userdata('sessPjm'); ?>
    <h2 style="margin-left: 30px">Selamat Datang, <?php echo $dataAkun['namaPjm']; ?>!</h2>
</body>
</html>
