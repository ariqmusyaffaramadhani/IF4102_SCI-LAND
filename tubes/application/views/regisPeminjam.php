<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Peminjam</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/regis.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
</head>
<body>
    <div class="form">
<<<<<<< HEAD
        <form action="<?php echo site_url('pjmController/regisPeminjam'); ?>" method="POST">
=======
        <form action="<?php echo site_url('pjmController/regisPeminjam') ?>" method="POST">
>>>>>>> 58ce9b95feb21ce6b4c13f1588d2c7d596dce606
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="namaPjm">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="textarea" name="alamatPjm">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="emailPjm">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name="passPjm">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
