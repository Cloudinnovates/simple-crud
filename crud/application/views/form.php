<html>
<head>
	
<body>
	<h2>Ubah Data <?php echo $dataTamu['nama'];?></h2>
	<hr>
	<form action="" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $dataTamu['nama'];?>"></td>
		</tr>

		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?php echo $dataTamu['email'];?>"></td>
		</tr>

		<tr>
			<td>Pesan</td>
			<td>:</td>
			<td><textarea name="pesan"><?php echo $dataTamu['pesan'];?></textarea></td>
		</tr>

		<tr>
			<td colspan="3">
				<center>
					<input type="submit" name="ubah" value="Ubah">
				</center>
			</td>
		</tr>
		
	</table>
	</form>

</body>

</head>
</html>