<!DOCTYPE html>
<html>
<head>
	<title>Hitung Jumlah Huruf Vokal</title>
</head>
<body>
	<h1>Hitung Jumlah Huruf Vokal</h1>
	<form method="POST">
		<p>Masukkan huruf:</p>
		<input type="text" name="huruf">
		<p>Pilih jenis huruf vokal:</p>
		<input type="radio" name="jenis_vokal" value="a">a<br>
		<input type="radio" name="jenis_vokal" value="i">i<br>
		<input type="radio" name="jenis_vokal" value="u">u<br>
		<input type="radio" name="jenis_vokal" value="e">e<br>
		<input type="radio" name="jenis_vokal" value="o">o<br>
		<br>
		<input type="submit" value="Hitung">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$huruf = $_POST["huruf"];
		$jenis_vokal = $_POST["jenis_vokal"];

		// Menghitung jumlah huruf vokal dengan strlen()
		$jumlah_vokal = 0;
		for ($i = 0; $i < strlen($huruf); $i++) {
			if (strtolower($huruf[$i]) == strtolower($jenis_vokal)) {
				$jumlah_vokal++;
			}
		}

		echo "<p>Jumlah huruf vokal '".$jenis_vokal."' dalam huruf '".$huruf."' adalah ".$jumlah_vokal.".</p>";
	}
	?>
</body>
</html>