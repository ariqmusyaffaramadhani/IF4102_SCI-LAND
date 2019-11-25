<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="src/style.css"> -->
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
    <script src="src/js/bootstrap.js"></script>
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#peminjam">Peminjam</a></li>
        <li><a data-toggle="tab" href="#admin">Admin</a></li>
    </ul>
    <div class="tab-content">
        <div id="peminjam" class="tab-pane fade in active">
            <form action="<?= site_url('pjmController/loginPeminjam') ?>" method="POST">
                <div class="form-group">
                    <label for="email">Email P:</label>
                    <input type="email" class="form-control" id="emailPjm">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="passPjm">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="tab-pane fade">
            <form action="<?= site_url('admController/loginAdmin') ?>" method="POST">
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
    
    </div>
</body>
</html>