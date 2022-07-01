<!DOCTYPE html>
<html lang="en">
  <head >
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>ForYour Rent</title>
       <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
  </head>
  <body>
    <div class="container" style="margin-top:0px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <?php extract($rentalmobil);?>
              <div class="card-header">
                Ubah Data Mobil
              </div>
              <div class="card-body">
                <form action="<?php echo base_url('Rentalmobil/update/')?><?php echo $idmobil;?>" method="POST">
                  <div class="form-group">
                    <label>Nama Penyewa:</label>
                    <input type="text" name="namapenyewa" class="form-control" value= " <?php echo $namapenyewa; ?>">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahi:r</label>
                    <input type="text" name="tanggallahir" class="form-control" value= "<?php echo $tanggallahir; ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value= "<?php echo $alamat; ?>">
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" value= "<?php echo $nik; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Mobil</label>
                    <input type="text" name="namamobil" class="form-control" value= "<?php echo $namamobil; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nomor Polisi</label>
                    <input type="text" name="nomorpolisi" class="form-control" value= "<?php echo $nomorpolisi; ?>">
                  </div>
                  <div class="form-group">
                    <label>Lama Sewa</label>
                    <input type="text" name="lamasewa" class="form-control" value= "<?php echo $lamasewa; ?>">
                  </div>
                  <div class="form-group">
                    <label>Biaya Sewa</label>
                    <input type="text" name="biayasewa" class="form-control" value= "<?php echo $biayasewa; ?>">
                  </div>
                  <button type="submit"  class="btn btn-primary">Ubah</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>