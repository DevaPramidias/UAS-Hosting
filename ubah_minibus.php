<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
    <div class="container" style="margin-top:0px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <?php extract($minibus);?>
              <div class="card-header">
                Ubah Data Mobil
              </div>
              <div class="card-body">
                <form action="<?php echo base_url('Minibus_c/update/')?><?php echo $id;?>" method="POST">
                  <div class="form-group">
                    <label>Nama Penyewa:</label>
                    <input type="text" name="nama_penyewa" class="form-control" value= " <?php echo $nama_penyewa; ?>">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahi:r</label>
                    <input type="text" name="tanggal_lahir" class="form-control" value= "<?php echo $tanggal_lahir; ?>">
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
                    <label>Nama Minibus</label>
                    <input type="text" name="tipe" class="form-control" value= "<?php echo $tipe; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nomor Polisi</label>
                    <input type="text" name="nomor_polisi" class="form-control" value= "<?php echo $nomor_polisi; ?>">
                  </div>
                  <div class="form-group">
                    <label>Lama Sewa</label>
                    <input type="text" name="lama_sewa" class="form-control" value= "<?php echo $lama_sewa; ?>">
                  </div>
                  <div class="form-group">
                    <label>Biaya Sewa</label>
                    <input type="text" name="biaya_sewa" class="form-control" value= "<?php echo $biaya_sewa; ?>">
                  </div>
                  <button type="submit"  class="btn btn-primary">Ubah</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</html>