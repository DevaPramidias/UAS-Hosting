<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Cetak</title>
  <style type="text/css">
  </style>
</head>
<body>
	<h1>Data Motor ForYourRent</h1>
  <hr>
	<table class="table"  width="100%">
	<thead>
		<tr>
			<th style="text-align:center">NO</th>
            <th style="text-align:center">NAMA PENYEWA</th>
            <th style="text-align:center">TANGGAL LAHIR</th>
            <th style="text-align:center">ALAMAT</th>
            <th style="text-align:center">NIK</th>
            <th style="text-align:center">TIPE MOTOR</th>
            <th style="text-align:center">NOMOR POLISI</th>
            <th style="text-align:center">BIAYA SEWA</th>
            <th style="text-align:center">KETERANGAN</th>
		</tr>
	</thead>
	<tbody>
		<?php
                    foreach($Motor as $user){
                   ?>
                <tr>
                  <td><?php echo $user->id; ?></td>
                  <td><?php echo $user->penyewa; ?></td>
                  <td><?php echo $user->tanggal_lahir; ?></td>
                  <td><?php echo $user->alamat; ?></td>
                  <td><?php echo $user->nik; ?></td>
                  <td><?php echo $user->tipe_motor; ?></td>
                  <td><?php echo $user->nopol; ?></td>
                  <td><?php echo $user->lama_sewa; ?></td>
                  <td><?php echo $user->biaya_sewa; ?></td>
                </tr>
            <?php } ?>
	</tbody>
</table>
</body>

</html>