<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="">
            <img src="<?php echo base_url(); ?>src/logo.png" style="width: 40px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="">1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Edit Profil</a>
            </li>
        </ul>
    </nav>
    <div class="profil">
        <h1><center>Edit Profil</center></h1>
        <form method="post" action="">
            <input id="namaAdm" type="text" name="nama" placeholder="Nama"><br>
            <input id="emailAdm" type="text" name="email" placeholder="Email"><br>
            <input id="almtAdm" type="text" name="alamat" placeholder="Alamat"><br>
        </form>
        <center>
            <button style="margin-right: 40px;">Batal</button>
            <button>Simpan</button>
        </center>
    </div>
</body>
</html>