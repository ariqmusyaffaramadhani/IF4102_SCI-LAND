<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    body { 
        background-color: #E2F0F1;
    }

    nav {
        background-color: #00A8A8;
        height: 50px;
        margin-bottom: 20px;
    }

    nav a {
        text-decoration: none;
        margin: 10px;
        color: white;
        font-size: 20px;
    }

    nav a:hover {
        cursor: pointer;
        color: gray;
    }

    .atas { 
        height: 100px;
        background-color: #00A8A8;
        width: 60%;
        padding-top: 3px;
        margin-left: 20%;
        margin-top: 5px;
    }

    input[type=text] {
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

    input[type=text]:hover {
        outline: none;
        border-bottom : 3px solid #13326D;
    }

    .profil button {
        background-color: #00A8A8;
        color: white;
        border-radius: 5px;
        padding: 5px;
        width: 100px;
        height: 50px;
        font-size: 15px;
        margin-top: 25px;
    }

    .profil button:hover {
        cursor: pointer;
        background-color: #13326D;
    }

    .profil {
        margin-top: 5%;
    }
    button {
        background-color: #00A8A8;
        color: white;
        border-radius: 5px;
        padding: 5px;
        width: 200px;
        height: 100px;
        font-size: 25px;
        margin-top: 25px;
    }



    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="">
            <img src="<?php echo base_url();?>src/logo.png" style="width: 40px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admController/editAkun'); ?>">Home</a>
            </li>
            
            <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('admController/editAkun'); ?>">Edit Profil</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        
        <div style="background-color: #cce6ff; width: 50%; margin-left: 25%;">
            <!-- form here -->
            <form method="POST" action="controller_here" accept-charset="UTF-8">
                <div class="form-group" style="padding-top: 8%;">
                    <input type="text" class="form-control" id="idbook" placeholder="ID" style="margin-left: 10%; width: 81%;">
                </div>
                
                <div class="form-group" style="padding-top: 2%;">
                    <input type="text" class="form-control" id="judul" placeholder="Judul" style="margin-left: 10%; width: 81%;">
                </div>
                
                <div class="form-group" style="padding-top: 2%;">
                    <input type="text" class="form-control" id="penulis" placeholder="Penulis" style="margin-left: 10%; width: 81%;">
                </div>

                <div class="form-group" style="padding-top: 2%;">
                    <input type="text" class="form-control" id="penerbit" placeholder="Penerbit" style="margin-left: 10%; width: 81%;">
                </div>
                
                <div class="form-group" style="padding-top: 2%;">
                    <input type="number" class="form-control" id="jhal" placeholder="Jumlah Halaman" style="margin-left: 10%; width: 81%;">
                </div>

                <div class="form-group" style="padding-top: 2%;">
                    <input type="number" class="form-control" id="stock" placeholder="Jumlah Ketersediaan" style="margin-left: 10%; width: 81%;">
                </div>

                
                <div class="form-group" style="padding-top: 2%;">
                    <label for="exampleFormControlFile1" style="margin-left: 10%;"s>Sinopsis</label>
                    <textarea class="form-control" id="sinopsis" rows="7" style="margin-left: 10%; width: 80%;"></textarea>
                </div>

                <div class="form-group" style="padding-top: 2%;">
                        <label for="exampleFormControlFile1" style="margin-left: 10%;"s>Cover Buku</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" style="margin-left: 10%;">
                </div>
                <div style="padding-bottom: 2%;">
                    <button type="reset" class="btn btn-secondary" style="width: 15%; height: 8%; margin-left: 10%;">Reset</button>
                    <button type="submit" class="btn btn-primary" style="width: 15%; height: 8%; margin-left: 4%;">Submit</button>
                </div>
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>