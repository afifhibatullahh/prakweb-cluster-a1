<?php 
	function calculate($length){
		if ($length < 11) {
			$temp = 300 * $length ;
		}elseif ($length < 21) {
			$temp = 500 * $length ;
		}elseif ($length > 20) {
			$temp = 700 * $length ;
			# code...
		}
		return $temp;
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		<label for="nama">input nama</label>
		<input type="text" name="nama"> <br>
		<label>pick color</label>
		<input type="color" name="color" value="#FF0000">
		<input type="submit" name="submit">
	</form>
	<hr>
	<?php 
		if (isset($_POST['submit'])) {
			$name = $_POST['nama'];
			$name_length = strlen($_POST['nama']);
			$color_name = $_POST['color'];
			$hasil = calculate($name_length);
			echo "<p style='color:" . $color_name . ";'> Nama : ". $name . " | Harga total : Rp. " . $hasil . "</p>"  ;
		}
		
	 ?>
</body>
</html>