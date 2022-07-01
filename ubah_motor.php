<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
    <div class="container" style="margin-top:0px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <?php extract($motor);?>
              <div class="card-header">
                Ubah Data Mobil
              </div>
              <div class="card-body">
                <form action="<?php echo base_url('Motor_c/update/')?><?php echo $id;?>" method="POST">
                  <div class="form-group">
                    <label>Nama Penyewa:</label>
                    <input type="text" name="penyewa" class="form-control" value= " <?php echo $penyewa; ?>">
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
                    <label>Nama Mobil</label>
                    <input type="text" name="tipe_motor" class="form-control" value= "<?php echo $tipe_motor; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nomor Polisi</label>
                    <input type="text" name="nopol" class="form-control" value= "<?php echo $nopol; ?>">
                  </div>
                  <div class="form-group">
                    <label>Lama Sewa</label>
                    <input type="text" name="lama_sewa" class="form-control" value= "<?php echo $lama_sewa; ?>">
                  </div>
                  <div class="form-group">
                    <label>Biaya Sewa</label>
                    <input type="text" name="biaya_sewa" class="form-control" value= "<?php echo $biaya_sewa; ?>">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value= "<?php echo $keterangan; ?>">
                  </div>
                  <button type="submit"  class="btn btn-primary">Ubah</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</html>