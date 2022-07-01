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
    <div class="container" style="margin-top: 0px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tambah Data Mobil
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>Rentalmobil/insert" method="post">
                <div class="form-group">
                  <label>Nama Penyewa</label>
                  <input type="text" name="namapenyewa" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="text" name="tanggallahir" class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                 <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" name="nik" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama Mobil</label>
                  <input type="text" name="namamobil" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nomor Polisi</label>
                  <input type="text" name="nomorpolisi" class="form-control">
                </div>
                <div class="form-group">
                  <label>Lama Sewa</label>
                  <input type="text" name="lamasewa" class="form-control">
                </div>
                <div class="form-group">
                  <label>Biaya Sewa</label>
                  <input type="text" name="biayasewa" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>