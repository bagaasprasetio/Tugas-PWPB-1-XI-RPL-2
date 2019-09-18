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
					<li><a href="anggota.php">Anggota</a></li>
					<li><a href="rumus.php" class="current">Rumus</a></li>
					<li><a href="form.php">Formulir</a></li>
				</ul>
			</nav>
		</div>
	</center>

			<?php
			$nama_bangunan1 = "Kubus";
			$rumus_luas_kubus = "6 x (sisi x sisi)";
			$rumus_keliling_kubus = "Rusuk x Rusuk x Rusuk";
			$gambar = "img/cube.gif";

			$nama_bangunan2 = "Bola";
			$rumus_luas_bola = "4 x π x r2";
			$rumus_volume_bola = "4/3 x π x r3";
			$gambar2 = "img/balls.gif";

			$nama_bangunan3 = "Tabung";
			$rumus_luas_tabung ="(2 x π x r x r) + (π x d x t)";
			$rumus_volume_tabung ="π x r x r x t";
			$gambar3 = "img/tabung.gif";

			$nama_bangunan4 = "Kerucut";
			$rumus_luas_kerucut = "(π x r2) + (π x r x s)";
			$rumus_volume_kerucut = "1/3 x π x r2 x t";
			$gambar4 = "img/kerucut.gif";

			$nama_bangunan5 = "Limas Segitiga";
			$rumus_luas_limassegitiga = "Luas alas + Luas selubung limas";
			$rumus_volume_limassegitiga = "1/3 x Luas alas x Tinggi";
			$gambar5 = "img/limassegitiga.gif";

			$nama_bangunan6 = "Limas Segiempat";
			$rumus_luas_limassegiempat = "Luas alas + Luas selubung limas";
			$rumus_volume_limassegiempat = "1/3 x Luas alas x Tinggi";
			$gambar6 = "img/limassegiempat.gif";
			?>
			
			<center>
			<div id="box3">
				<img class="bangun" src="<?= $gambar ?>">
				<br>
				<?php
				echo "$nama_bangunan1 <br> <br>";
				echo "Luas : $rumus_luas_kubus <br>";
				echo "Volume : $rumus_keliling_kubus <br>";
				?>
			</div>

			<div id="box9">
			<img class="bangun" src="<?= $gambar2 ?>">
			<br>
				<?php
				echo "$nama_bangunan2 <br> <br>";
				echo "Luas : $rumus_luas_bola <br>";
				echo "Volume : $rumus_volume_bola <br>";
				?>
			</div>
			
			<div id="box10">
			<img class="bangun" src="<?= $gambar3 ?>">
			<br>
				<?php
				echo "$nama_bangunan3 <br> <br>";
				echo "Luas : $rumus_luas_tabung <br>";
				echo "Volume : $rumus_volume_tabung <br>";
				?>
			</div>
			
			<div id="box10">
			<img class="bangun" src="<?= $gambar4 ?>">
			<br>
				<?php
				echo "$nama_bangunan4 <br> <br>";
				echo "Luas : $rumus_luas_kerucut <br>";
				echo "Volume : $rumus_volume_kerucut <br>";
				?>
			</div>

			<div id="box10">
			<img class="bangun" src="<?= $gambar5 ?>">
			<br>
				<?php
				echo "$nama_bangunan5 <br> <br>";
				echo "Luas : $rumus_luas_limassegitiga <br>";
				echo "Volume : $rumus_volume_limassegitiga <br>";
				?>
			</div>

			<div id="box10">
			<img class="bangun" src="<?= $gambar6 ?>">
			<br>
				<?php
				echo "$nama_bangunan6 <br> <br>";
				echo "Luas : $rumus_luas_limassegiempat <br>";
				echo "Volume : $rumus_volume_limassegiempat <br>";
				?>
			</div>

</header>
</center>
</body>
<footer>
	<br>
	<p>2019 Made with Kelompok 3 ❤❤</p>
</footer>
</html>