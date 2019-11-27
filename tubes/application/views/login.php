<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="src/style.css"> -->
    <link rel="stylesheet" type="text/css" href="src/css/bootstrap.min.css">
    <script src="src/js/bootstrap.js"></script>
    <style media="screen">
      body { background-color: #E2F0F1; }
      button { background-color: #00A8A8;
               color: white;
               border-radius: 3px;
               padding: 5px;
               width: 60px;
               height: 35px;
               font-size: 10px; }
      button:hover { cursor: pointer;
                     background-color: #13326D; }
    </style>
</head>
<body>
    <ul class="nav nav-tabs">
      <button onclick="peminjam()">Peminjam</div>
      <button onclick="admin()">Admin</div>
        <!-- <li class="active"><a data-toggle="tab" href="#peminjam" onclick="peminjam()">Peminjam</a></li>
        <li><a data-toggle="tab" href="#admin" onclick="admin()">Admin</a></li> -->
    </ul>
    <div class="tab-content">
        <div id="peminjam" class="tab-pane fade in active">
            <form action="<?php site_url('pjmController/loginPeminjam') ?>" method="POST">
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
        <div id="admin" class="tab-pane fade">
            <form action="<?php site_url('admController/loginAdmin') ?>" method="POST">
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
            <button href="<?php echo site_url('pjmController/pageRegis') ?>"><p>Daftar</p></button>
        </div>


    </div>

    <script type="text/javascript">
      function home(){
        document.getElementById('peminjam').style.display = "none";
        document.getElementById('admin').style.display = "none";
      }
      function peminjam(){
        document.getElementById('peminjam').style.display = "block";
        document.getElementById('admin').style.display = "none";
      }

      function admin(){
        document.getElementById('admin').style.display = "block";
        document.getElementById('peminjam').style.display = "none";
      }

    </script>
</body>
</html>
