<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
    $dat = "3.jpg";
?>
    <div class="container-fluid">
        <?= $this->session->flashdata('message');?>

        <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-12" >
                <center>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="vpenerbit" name="vpenerbit" placeholder="Penerbit" style="margin-left: 10%; width: 81%;">
                            </div>
                            <div class="col-md-2">btn</div>
                        </div>

                    </div>
                </center>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2" style="margin-left: 5%;">
                <img width="100%" height="100%" src="<?= base_url('images/').$dat ?>" style="object-fit: contain;">
            </div>
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row" style="background-color: #cce6ff; border-radius: 5px;">
                        <div class="col-md-6"> ini </div>
                        <div class="col-md-6"> wadidaw </div>
                    </div>
                </div>

            </div>
            
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>