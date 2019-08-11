<!DOCTYPE html>
<html>
<head>
	<title>Tugas PWPB</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
		<header>
			<h1 class="judul">Pemrograman Web Dan Perangkat Bergerak</h1>
			<center>
				<div id="box">
			<nav>
				<ul>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="anggota.php">Anggota</a></li>
				</ul>
			</nav>
		</div>

			<?php
			$nama_bagas = "Bagas Prasetio";
			$umur_bagas = 16;
			$tinggi_bagas = 164;

			$nama_tasya = "Natasya Aprilia Ananda";
			$umur_tasya = 16;
			$tinggi_tasya = 156;

			$nama_fhirli ="Siti Fhirli Handayani";
			$umur_fhirli = 15;
			$tinggi_fhirli = 155;

			$rata_rata = ($tinggi_bagas + $tinggi_tasya + $tinggi_fhirli) / 3;
			?>

			<div class="box">
				<img src="bagas.png">
				<br>
				<?php
				echo "$nama_bagas <br> <br>";
				echo "Umur : $umur_bagas Tahun <br>";
				echo "Tinggi : $tinggi_bagas CM <br>";
				?>
			</div>

			<div class="box">
			<img src="tahel.png">
				<?php
				echo "<br>";
				echo "$nama_tasya <br> <br>";
				echo "Umur : $umur_tasya Tahun <br>";
				echo "Tinggi : $tinggi_tasya CM <br>";
				?>
			</div>
			
			<div class="box">
			<img src="ily.png">
				<?php
				echo "<br>";
				echo "$nama_fhirli <br> <br>";
				echo "Umur : $umur_fhirli Tahun <br>";
				echo "Tinggi : $tinggi_fhirli CM <br>";
				?>
			</div>
			
			<div id="box">
				<?php
				echo "Rata - Rata Tinggi Kami Adalah : $rata_rata";
				?>
			</div>

</header>
</center>
</body>
</html>