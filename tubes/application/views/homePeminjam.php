<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="">
            <img src="src/logo.png" style="width: 40px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pjmController/listBuku') ?>">Daftar Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>">Pencarian Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pjmController/editAkun'); ?>">Edit Profil</a>
            </li>
        </ul>
    </nav>
</body>
</html>