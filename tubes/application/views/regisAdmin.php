<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/regis.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
</head>
<body>
    <center>
    <div>
    <form action="<?php echo site_url('admController/regisAdmin'); ?>" method="post" class="regis">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="namaAdm"></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><input type="text" name="alamatAdm"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="emailAdm"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="passAdm"></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
    </div>
</center>
</body>
</html>