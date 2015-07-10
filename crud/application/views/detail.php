<html>
<head>
	
<body>
		
	<h2> Detail Tamu <?php echo $dataTamu['nama'];?></h2>
	<hr>

	<table>
		<tr>
			<td>No</td>
			<td>:</td>
			<td><?php echo $dataTamu['buku_id'];?></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $dataTamu['nama'];?></td>
		</tr>

		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $dataTamu['email'];?></td>
		</tr>

		<tr>
			<td>Pesan</td>
			<td>:</td>
			<td><?php echo $dataTamu['pesan'];?></td>
		</tr>

		<tr>
			<td colspan="3">
				<center>
					<a href="<?php echo site_url('web');?>">
						Back
					</a>
				</center>
			</td>
		</tr>
		
	</table>

</body>

</head>
</html>