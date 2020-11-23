<?php 

require 'proses.php';

	if (isset($_POST["tambah"])){

		if (tambah($_POST)>0) {
			echo "<script>alert('Data berhasil ditambahkan!');</script>";
		}

		else {
			echo "<script>alert('Data gagal ditambahkan!');</script>";
		}

	}

	if (isset($_POST["delete"])) {
		if (delete($_POST)>0){
			echo "<script>alert('Data berhasil dihapus!');
			</script>";
		}else{
			echo "<script>alert('Data tidak berhasil dihapus!');
			</script>";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>data mahasiswa</title>
</head>
<body>
	<h1>DATA MAHASISWA PENS</h1>
	<hr><hr>
	<h1>TAMBAH DATA</h1>
	<form method="post" action="" enctype="multipart/form-data">
		<label for="nrp">NRP:</label>
		<input type="text" name="nrp" id="nrp"><br>
		<label for="nama">Nama:</label>
		<input type="text" name="nama" id="nama"><br>
		<label for="namaFoto">Foto:</label>
		<input type="text" name="namaFoto" id="namaFoto">
		<input type="file" name="foto" id="foto"><br>
		<select name="id_jur">
			<option hidden="">Pilih Jurusan</option>
			<option value="1">Telekomunikasi</option>
			<option value="2">Teknik Informatika</option>
			<option value="3">Matematika</option>
			<option value="4">Kimia</option>
		</select><br><br><br>
		<button type="submit" name="tambah">tambah Data</button><br><br>
	</form>

	<hr><hr>
	<h1>SEARCH DATA</h1>

	<form action="" method="post">
		<label for="cari">Nama:</label>
		<input type="text" name="keyword" id="cari" placeholder="pencarian">
		<button type="submit" name="caridata">Cari Data</button><br><br>	
	</form>
	<?php $i=1; ?>	
	<?php if (isset($_POST["caridata"])) : ?>
		 <?php 
		 		$result = cari($_POST['keyword']); 
		 	?>

			 <table border="1" cellspacing="0" cellpadding="10">
			 	<tr>
			 		<th>No.</th>
			 		<th>NRP</th>
			 		<th>Nama</th>
			 		<th>Foto</th>
			 		<th>Jurusan</th>
			 	</tr>

			 	<?php while ($row = mysqli_fetch_array($result)) :?>
			 	<tr>
			 		<td><?= $i++; ?></td>
			 		<td><?= $row['nrp'];?></td>
			 		<td><?= $row['nama'];?></td>
			 		<td><img src="images/<?= $row['foto'];?>" width = "50"></td>
			 		<td><?php 
			 				if ($row['id_jur'] == '1') {
			 						echo "Telekomunikasi";
			 				}elseif ($row['id_jur'] == '2') {
			 					echo "Teknik Informatika";
			 				}elseif ($row['id_jur'] == '3') {
			 					echo "Matematika";
			 				}elseif ($row['id_jur'] == '4') {
			 					echo "Kimia";
			 				}
			 		?></td>
			 	</tr>
			 <?php endwhile; ?>
			 </table>

	<?php endif; ?>
	<hr><hr>
	<h1>DELETE DATA</h1>

	<form action="" method="post">	
		<label for="delete">NRP:</label>
		<input type="text" name="del" id="delete">
		<button type="submit" name="delete" onclick="return confirm('yakin menghapus data ?');">Delete Data</button><br>
	</form>

</body>
</html>