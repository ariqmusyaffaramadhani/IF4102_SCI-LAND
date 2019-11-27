<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Admin</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/regis.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style media="screen">
  body { background-color: #E2F0F1; }
  .atas { height: 100px;
        background-color: #00A8A8;
        width: 60%;
        padding-top: 12px;
        margin-left: 20%;
        margin-top: 50px;}
  button { background-color: #00A8A8;
           color: white;
           border-radius: 3px;
           padding: 5px;
           width: 60px;
           height: 35px;
           font-size: 10px; }
  button:hover { cursor: pointer;
                 background-color: #13326D; }
  #alamat { height: 30px; }
  .middle { border : solid 2px white;
           padding-top : 30px;
           padding-left : 30px;
           padding-right : 30px;
           padding-bottom : 10px;
           margin-left: 20%;
           width: 60%;
          background-color: white; }
  h1 { color : white; }
</style>
<body>
  <div class="atas">
    <h1><center>REGISTRASI</center</h1>
  </div>
  <div class="middle">
    <form class="form-horizontal" action="<?php echo site_url('admController/regisAdmin'); ?>" method="post" class="regis">
      <div class="form-group">
        <label class="control-label col-sm-3" for="namaAdm">Nama Lengkap :</label>
        <div class="col-sm-6">
          <input type="namaAdm" class="form-control" id="namaAdm" placeholder="Nama Lengkap" name="namaAdm">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="emailAdm">Email :</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" id="emailAdm" placeholder="Enter email" name="emailAdm">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="alamat">Alamat :</label>
        <div class="col-sm-6">
          <textarea type="text" class="form-control" id="alamatAdm" name="alamatAdm" placeholder="Alamat"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="passAdm">Password :</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" id="passAdm" placeholder="Enter password" name="passAdm">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button>Submit</button>
        </div>
      </div>
    </form>
  </div>
  </body>
</html>
