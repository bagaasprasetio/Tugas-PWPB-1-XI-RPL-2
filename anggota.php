<!DOCTYPE html>
<html>
<head>
	<title>Tugas PWPB</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<header>
			<div id="box4">
			<h1 class="judul"><center>Pemrograman Web Dan Perangkat Bergerak</center></h1>
			<center>
				<nav>
				<ul>
					<li><a href="index.php" >Beranda</a></li>
					<li><a href="anggota.php" class="current">Anggota</a></li>
					<li><a href="rumus.php">Rumus</a></li>
					<li><a href="form.php">Formulir</a></li>
				</ul>
			</nav>
		</div>
	</center>
	<br>
	<br>

			<?php
			$nama_bagas = "Bagas Prasetio";
			$ttl_bagas = "Tangerang, 17 April 2003";
			$umur_bagas = 16;
			$tinggi_bagas = 164;

			$nama_tasya = "Natasya Aprilia Ananda";
			$ttl_tasya = "Bogor, 19 April 2003";
			$umur_tasya = 16;
			$tinggi_tasya = 156;

			$nama_fhirli ="Siti Fhirli Handayani";
			$ttl_fhirli = "Sumedang, 22 Sept 2003";
			$umur_fhirli = 15;
			$tinggi_fhirli = 155;

			$rata_rata = ($tinggi_bagas + $tinggi_tasya + $tinggi_fhirli) / 3;
			?>

			<center>
			<div id="box6">
				<img class="biodata" src="bagas.png">
				<?php
				echo "$nama_bagas <br> <br>";
				echo "TTL : $ttl_bagas <br>";
				echo "Umur : $umur_bagas Tahun <br>";
				echo "Tinggi : $tinggi_bagas CM <br>";
				?>
			</div>

			<div id="box7">
			<img class="biodata" src="tahel.png">
				<?php
				echo "$nama_tasya <br> <br>";
				echo "TTL : $ttl_tasya <br>";
				echo "Umur : $umur_tasya Tahun <br>";
				echo "Tinggi : $tinggi_tasya CM <br>";
				?>
			</div>
			
			<div id="box8">
			<img class="biodata" src="ily.png">
				<?php
				echo "$nama_fhirli <br> <br>";
				echo "TTL : $ttl_fhirli <br>";
				echo "Umur : $umur_fhirli Tahun <br>";
				echo "Tinggi : $tinggi_fhirli CM <br>";
				?>
			</div>

				<br>
				<br>
				<p>
					Rata - Rata Tinggi Kami Adalah = <?php echo printf("%.1f" , $rata_rata) ?>
				</p>

</header>
</center>
</body>
<footer>
	<br>
	<p>2019 Made with Kelompok 3 ❤</p>
</footer>
</html>