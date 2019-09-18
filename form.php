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
					<li><a href="rumus.php">Rumus</a></li>
					<li><a href="form.php" class="current">Formulir</a></li>
				</ul>
			</nav>
		</div>
	</center>

<center>
	<div id="box2">
	<h2>DATA IDENTITAS PESERTA DIDIK BARU</h2>
	<h2>TAHUN AJARAN 2019/2020</h2>
	<hr>
<form name="biodata" action="" method="POST">
	Nama Lengkap:
	<input type="text" name="nmlngkp" maxlength="40">
	<br>
	<br>
	Nama Panggilan : 
	<input type="text" name="nmpangg" maxlength="10">
	<br>
	<br>
	Jenis Kelamin : 
	<input type="radio" name="jkel" value="Laki-Laki"> Laki-Laki
	<input type="radio" name="jkel" value="Perempuan"> Perempuan
	<br>
	<br>
	NISN :
	<input type="number" name="nisn" maxlength="10">
	<br>
	<br>
	NIK :
	<input type="number" name="nik" maxlength="16">
	<br>
	<br>
	Tempat Dan Tanggal Lahir :
	<input type="text" name="tempat" placeholder="Tempat"> <input type="date" name="tanggal" placeholder="Tanggal Lahir">
	<br>
	<br>
	Asal Sekolah :
	<input type="text" name="aslsklh">
	<br>
	<br>
	Nomor SKHUN :
	<input type="number" name="skhun">
	<br>
	<br>
	Tanggal di terima disekolah ini :
	<input type="date" name="tglsekolah">
	<br>
	<br>
	Jika Pindahan Sebutkan Alasan Pindahan Ke sekolah ini :
	<textarea name="alasan" cols="20" rows="10"></textarea>
	<br>
	<br>
	Agama :<br>
	<input type="radio" name="agama" value="Islam">Islam
	<input type="radio" name="agama" value="Kristen">Kristen
	<input type="radio" name="agama" value="Buddha">Buddha
	<input type="radio" name="agama" value="Hindu">Hindu
	<input type="radio" name="agama" value="Katolik">Katolik
	<input type="radio" name="agama" value="Konghucu">Konghucu
	<br>
	<br>
	Alamat :
	<textarea name="alamat" cols="20" rows="5"></textarea>
	<br>
	<br>
	Tinggal Bersama :
	<br>
	<input type="radio" name="tgglbersama" value="Orangtua">Orang Tua
	<input type="radio" name="tgglbersama" value="Wali">Wali
	<br>
	<br>
	Transportasi Ke Sekolah :
	<br>
	<input type="radio" name="transport" value="Motor">Motor <br>
	<input type="radio" name="transport" value="Mobil">Mobil <br>
	<input type="radio" name="transport" value="Angkot">Angkot <br>
	<input type="radio" name="transport" value="Bus">Bus <br>
	<input type="radio" name="transport" value="Ojek">Ojek <br>
	<br>
	Nomor Telepon :
	<input type="number" name="notelp">
	<br>
	<br>
	No.HP :
	<input type="number" name="nohp">
	<br>
	<br>
	Nomor KPS (Kartu Perlindungan Sosial) bagi yang memiliki :
	<input type="number" name="nokps">
	<br>
	<br>
	Data Ayah Kandung 
	<br>
	Nama : <input type="name" name="nmayah"><br>
	Tahun Lahir : <input type="date" name="thnlahirayah"><br>
	Pendidikan : <input type="text" name="pndkayah"><br>
	Pekerjaan : <input type="text" name="pkrjnayah"><br>
	Penghasilan Perbulan :
	<select name="gajiayah">
		<option selected="selected">---Pilih Disini---</option>
		<option value="Rp1.000.000 - <=3.000.000">Rp1.000.000 - <=3.000.000</option>
		<option value="Rp3.000.000 - <=Rp5.000.000">Rp3.000.000 - <=Rp5.000.000</option>
		<option value="Rp5.000.000 - <=Rp10.000.000">Rp5.000.000 - <=Rp10.000.000</option>
		<option value=">Rp10.000.000">>Rp10.000.000</option>
	</select>
	<br>
	<br>
	Data Ibu Kandung :
	<br> 
	Nama : <input type="name" name="nmibu"><br>
	Tahun Lahir : <input type="date" name="thnlahiribu"><br>
	Pendidikan : <input type="text" name="pndkibu"><br>
	Pekerjaan : <input type="text" name="pkrjnibu"><br>
	Penghasilan Perbulan :
	<select name="gajiibu">
		<option selected="selected">---Pilih Disini---</option>
		<option value="Rp1.000.000 - <=3.000.000">Rp1.000.000 - <=3.000.000</option>
		<option value="Rp3.000.000 - <=Rp5.000.000">Rp3.000.000 - <=Rp5.000.000</option>
		<option value="Rp5.000.000 - <=Rp10.000.000">Rp5.000.000 - <=Rp10.000.000</option>
		<option value=">Rp10.000.000">>Rp10.000.000</option>
	</select>
	<br>
	<br>
	<input id="tombol" type="submit" name="submit" value="Kirim Datamu!"> 
	<input id="tombol" type="reset" name="reset" value="Hapus Biodata mu">
</form>
</div>
</center>
<br>
<br>

<p><center>Isi Formulir diatas ya, biar kami bisa tau informasi tentang kamu... <br> Kalau sudah diisi, nanti data mu akan muncul didalam kotak dibawah ini..</p></center>
<br>
<br>
<div class="box">
<?php
	if (isset($_POST['submit'])) {
		echo "Informasi Tentang ". $_POST['nmlngkp'];
		echo "<br> Nama Lengkap : ".$_POST['nmlngkp'];
		echo "<br> Nama Panggilan : ".$_POST['nmpangg'];
		echo "<br> Jenis Kelamin : ".$_POST['jkel'];
		echo "<br> NISN : ".$_POST['nisn'];
		echo "<br> NIK : ".$_POST['nik'];
		echo "<br> TTL : ".$_POST['tempat'] .$_POST['tanggal'];
		echo "<br> Asal Sekolah : ".$_POST['aslsklh'];
		echo "<br> Nomor SKHUN : ".$_POST['skhun'];
		echo "<br> Diterima disekolah ini pada tanggal : ".$_POST['tglsekolah'];
		echo "<br> Alasan mengapa pindah kesekolah ini : ".$_POST['alasan'];
		echo "<br> Agama : ".$_POST['agama'];
		echo "<br> Alamat Rumah : ".$_POST['alamat'];
		echo "<br> Tinggal bersama : ".$_POST['tgglbersama'];
		echo "<br> Transportasi yang dinaiki kesekolah : ".$_POST['transport'];
		echo "<br> Nomor Telepon : ".$_POST['notelp'];
		echo "<br> Nomor HP : ".$_POST['nohp'];
		echo "<br> Nomor KPS : ".$_POST['nokps'];

		echo "<br>";
		echo "<br> Informasi Orang Tua dari ananda  ". $_POST['nmlngkp'];
		echo "<br> Nama Ayah : ". $_POST['nmayah'];
		echo "<br> Tahun lahir Ayah : ". $_POST['thnlahirayah'];
		echo "<br> Pendidikan Ayah : ". $_POST['pndkayah'];
		echo "<br> Pekerjann Ayah : ". $_POST['pkrjnayah'];
		echo "<br> Penghasilan Ayah Perbulan : ". $_POST['gajiayah'];

		echo "<br> Nama Ibu : ". $_POST['nmibu'];
		echo "<br> Tahun lahir Ibu : ". $_POST['thnlahiribu'];
		echo "<br> Pendidikan Ibu : ". $_POST['pndkibu'];
		echo "<br> Pekerjann Ibu : ". $_POST['pkrjnibu'];
		echo "<br> Penghasilan Ibu Perbulan : ". $_POST['gajiibu'];
	}
?>
</div>
</center>

 

