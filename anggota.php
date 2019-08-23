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
					<li><a href="rumus.php">Rumus</a></li>
				</ul>
			</nav>
		</div>

			<?php
			$nama_bagas = "Bagas Prasetio";
			$ttl_bagas = "Tanggerang, 17 April 2003";
			$umur_bagas = 16;
			$tinggi_bagas = 164;

			$nama_tasya = "Natasya Aprilia Ananda";
			$ttl_tasya = "Bogor, 19 April 2003";
			$umur_tasya = 16;
			$tinggi_tasya = 156;

			$nama_fhirli ="Siti Fhirli Handayani";
			$ttl_fhirli = "Sumedang, 22 September 2003";
			$umur_fhirli = 15;
			$tinggi_fhirli = 155;

			$rata_rata = ($tinggi_bagas + $tinggi_tasya + $tinggi_fhirli) / 3;
			?>

			<div class="box">
				<img src="bagas.png">
				<?php
				echo "$nama_bagas <br> <br>";
				echo "Tempat Tanggal Lahir : $ttl_bagas <br>";
				echo "Umur : $umur_bagas Tahun <br>";
				echo "Tinggi : $tinggi_bagas CM <br>";
				?>
			</div>

			<div class="box">
			<img src="tahel.png">
				<?php
				echo "$nama_tasya <br> <br>";
				echo "Tempat Tanggal Lahir : $ttl_tasya <br>";
				echo "Umur : $umur_tasya Tahun <br>";
				echo "Tinggi : $tinggi_tasya CM <br>";
				?>
			</div>
			
			<div class="box">
			<img src="ily.png">
				<?php
				echo "$nama_fhirli <br> <br>";
				echo "Tempat Tanggal Lahir : $ttl_fhirli <br>";
				echo "Umur : $umur_fhirli Tahun <br>";
				echo "Tinggi : $tinggi_fhirli CM <br>";
				?>
			</div>
			
			<div id="box">
				<p>
					Rata - Rata Tinggi Kami Adalah = <?php echo printf("%.2f", $rata_rata) ?>
				</p>
			</div>

</header>
</center>
</body>
</html>