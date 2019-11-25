<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
</head>
<body>
    <form action="<?= site_url('admController/regisAdmin') ?>" method="POST">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="namaAdm">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamatAdm">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="emailAdm">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="passAdm">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
</body>
</html>