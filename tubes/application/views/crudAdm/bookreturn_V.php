<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
    $dat = "3.jpg";
?>
    <div class="container-fluid">

        <!-- search bar -->
        <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-9" style="padding-left: 25%;" >
            <center>
            <form method="POST" action="<?= base_url('crud_book_C/retbookV'); ?>" enctype="multipart/form-data" accept-charset="UTF-8">
            
            <div class="input-group mb-3">
                <input type="email" class="form-control" id="remail" name="remail" placeholder="Email Peminjam" aria-label="Cari ID" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="search" name="search">Cari</button>

                    </div>
            </div>

            </form>  
            <?= $this->session->flashdata('message');?>  
            </center>
            </div>
        </div>

        <div class="row">
            <table class="table table-hover" style="margin : 2px 5px 2px 5px ; border-radius: 5px;">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- foreach here -->
                    <?php if($books[0]['judul']){ ?>

                    <?php foreach($books as $book): ?>
                    <tr>
                    <td style="width: 10%;"> <img id="pic" width="100%" height="30%" src="<?= base_url('images/').$book['imgpath'] ?>" style="object-fit: contain;"></td>
                    <td class="align-middle"> <?= $book['judul']  ?> </td>
                    <td class="align-middle"> <?= $book['tgl_pinjam']  ?> </td>
                    <td class="align-middle"> <?= $book['tgl_kembali']  ?> </td>
                    <td class="align-middle"> 
                        <form action="#">
                            <button class="btn btn-success"  type="submit"> Kembalikan </button>
                        </form>    
                    </td>

                    
                    
                    </tr>
                    <?php endforeach ?>
                    <?php }
                    
                    else { ?>
                

                            <tr>
                            <td colspan="5" align="center">not found</td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>