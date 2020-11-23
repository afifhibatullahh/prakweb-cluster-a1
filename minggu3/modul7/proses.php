<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

	function tambah($data){
		global $conn;
		# code...
		$nrp = $data['nrp'];
		$nama = $data['nama'];
		$id_jur = $data['id_jur'];
		$namaFoto = $data['namaFoto'];

		//upload foto
		$ext = ['jpg','jpeg','png'];
		$foto = $_FILES['foto']['name'];
		$temp = explode(".", $foto);
		$extFoto = strtolower(end($temp));
		echo "$extFoto";
		if (!in_array($extFoto,$ext)) {
			echo "<script>
					alert('anda tidak mengupload gambar!');
					</script>";
					return false;
		}

    	$newfilename = $namaFoto . '.' . end($temp);
    	move_uploaded_file($_FILES["foto"]["tmp_name"], "images/" . $newfilename);


		$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$newfilename','$id_jur')";

		$result = mysqli_query($conn, $query);	
		return $result;
	}

	function cari($data){
		global $conn;

		$query = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nama LIKE '%".$data."%'");

		return $query;
	}

	function delete($data){
		global $conn;
		$nrp = $data['del'];

		mysqli_query($conn, "DELETE FROM mahasiswa WHERE nrp = $nrp");

		return mysqli_affected_rows($conn);;
	}


 ?>