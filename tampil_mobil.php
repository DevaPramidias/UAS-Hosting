<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Cetak</title>
  <style type="text/css">
  </style>
</head>
<body>
	<h1>Data Mobil ForYourRent</h1>
  <hr>
	<table class="table"  width="100%">
	<thead>
		<tr>
			<th style="text-align:center">NO</th>
            <th style="text-align:center">NAMA PENYEWA</th>
            <th style="text-align:center">TANGGAL LAHIR</th>
            <th style="text-align:center">ALAMAT</th>
            <th style="text-align:center">NIK</th>
            <th style="text-align:center">NAMA MOBIL</th>
            <th style="text-align:center">NOMOR POLISI</th>
            <th style="text-align:center">LAMA SEWA</th>
            <th style="text-align:center">BIAYA SEWA</th>
		</tr>
	</thead>
	<tbody>
		<?php
                    foreach($rentalmobil as $user){
                   ?>
                <tr>
                  <td><?php echo $user->idmobil; ?></td>
                  <td><?php echo $user->namapenyewa; ?></td>
                  <td><?php echo $user->tanggallahir; ?></td>
                  <td><?php echo $user->alamat; ?></td>
                  <td><?php echo $user->nik; ?></td>
                  <td><?php echo $user->namamobil; ?></td>
                  <td><?php echo $user->nomorpolisi; ?></td>
                  <td><?php echo $user->lamasewa; ?></td>
                  <td><?php echo $user->biayasewa; ?></td>
                </tr>
            <?php } ?>
	</tbody>
</table>
</body>

</html>