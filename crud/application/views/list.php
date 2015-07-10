<html>
<head>
	
<body>
		
	<h2> List Buku Tamu </h2>
	<hr>

	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Pesan</th>
			<th>Aksi</th>
		</tr>

		<?php
		if(!empty($dataTamu)):
			$no=1;
			foreach ($dataTamu as $dataTamu):
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $dataTamu['nama'];?></td>
			<td><?php echo $dataTamu['email'];?></td>
			<td><?php echo substr($dataTamu['pesan'],0,20);?></td>
			<td>
				<a href="<?php echo site_url('web/detail/'.$dataTamu['buku_id']);?>">
					Lihat
				</a> | 
				<a href="<?php echo site_url('web/ubah/'.$dataTamu['buku_id']);?>">
					Ubah
				</a> | 
				<a href="<?php echo site_url('web/hapus/'.$dataTamu['buku_id']);?>">
					Hapus
				</a>
			</td>
		</tr>
		<?php
			$no++;
			endforeach;
		endif;
		?>
	</table>


	<br>
	<h2>Tambah Data</h2>
	<hr>
	<form action="" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email"></td>
		</tr>

		<tr>
			<td>Pesan</td>
			<td>:</td>
			<td><textarea name="pesan"></textarea></td>
		</tr>

		<tr>
			<td colspan="3">
				<center>
					<input type="submit" name="simpan" value="Simpan">
				</center>
			</td>
		</tr>
		
	</table>
	</form>

</body>

</head>
</html>