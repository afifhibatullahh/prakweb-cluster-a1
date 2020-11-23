<?php 
	
	function factorial($value)
	{		
		$sum = 1;
		for ($i=1; $i <= $value; $i++) { 
			$sum = $sum * $i;
		}
		return $sum;
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>tugas1</title>
</head>
<body>

	<form method="post">
		<label for="value">input nilai</label>
		<input type="text" name="value">
		<button type="submit" name="submit">factorial</button>
	</form>

	<?php 
		if (isset($_POST['submit'])) {
			$bil = $_POST['value'];
			$hasil = factorial($bil);
			echo "factorial dari $bil adalah $hasil";
		}
	 ?>

</body>
</html>