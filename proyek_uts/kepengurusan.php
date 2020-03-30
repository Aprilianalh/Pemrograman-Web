<!DOCTYPE html>
<html>
<head>
	<title> UKM Karawitan UPN "Veteran" Jawa Timur </title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<header>
    <div class="header">
    	<img src="upn.png" align="left" width="150" height="150"><img src="wgl.png" align="left" width="150" height="150">
    	<h3 style="color: yellow"> UNIT KEGIATAN MAHASISWA KARAWITAN WIDYA GIRI LARAS </h3>
    	<h3 style="color: yellow"> UNIVERSITAS PEMBANGUNAN NASIONAL "VETERAN" JAWA TIMUR </h3>
    </div>
    <div class="menu">
    	<a href="home.php"> HOME </a>
    	<a href="profil.php"> PROFIL </a>
    	<a href="agenda.php"> AGENDA </a>
    	<a href="kepengurusan.php"> KEPENGURUSAN </a>
    	<a href="hubungikami.php"> HUBUNGI KAMI </a>
    </div>
	</header>
<main>
	<div class="konten">
		<div class="padding_this">
			<h2> BIO KEPENGURUSAN </h2>
			<br>
			<ul>
				<li><a href="bph.php"> Badan Pengurus Harian </a></li>
				<p> Merupakan pengurus inti yang memiliki tugas dan fungsi pengkoordinasian tiap program kerja masing-masing departemen. </p>
				<li><a href="rt.php"> Rumah Tangga </a></li>
				<p> Departemen ini yang mengatur dan mengelola segala yang ada di ruangan karawitan tercinta. </p>
				<li><a href="minba.php"> Minat dan Bakat </a></li>
				<p> Departemen ini yang mewadahi dan mengembangkan minat dan bakat seni khususnya karawitan. </p>
				<li><a href="humas.php"> Hubungan Masyarakat </a></li>
				<p> Departemen ini yang banyak bekerja sama dengan semua perizinan yang berkaitan dengan kegiatan WGL dan memperluas jaringan komunikasi antar UKM baik di dalam kampus maupun diluar kampus. </p>
				<li><a href="kwu.php"> Kewirausahaan </a></li>
				<p> Departemen ini yang mewadahi aktivitas seluruh anggota WGL dalam berwirausaha dan juga merupakan salah satu pemasukan dana untuk WGL. </p>
				<li><a href="kominfo.php"> Komunikasi dan Informasi </a></li>
				<p> Departemen ini yang selalu mantengin sosial media UKM Widya Giri Laras. Selain itu, departemen Kominfo berperan dalam mengkomunikasikan informasi khususnya kepada dulur WGL, seperti publikasi dan dokumentasi kegiatan. </p>
			</ul>
        </div>
		</div>
	</div>
	<div class="info">
		<div class="padding_this">
			<?php
			$tanggal= mktime(date("m"),date("d"),date("Y"));
			echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
			date_default_timezone_set('Asia/Jakarta');
			$jam=date("H:i");
			echo "| Pukul : <b>". $jam." "."</b>";
			$a = date ("H");
			if (($a>=6) && ($a<=11)){
			echo "<b>, Selamat Pagi !!</b>";
			}
			else if(($a>11) && ($a<=15))
			{
			echo ", Selamat Pagi !!";}
			else if (($a>15) && ($a<=18)){
			echo ", Selamat Siang !!";}
			else { echo ", <b> Selamat Malam </b>";}
			?> 
			<br>
			<?php
			$hari	= date("d");
			$bulan	= date ("m");
			$tahun	= date("Y");
			$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
			?>
			<table style="border:2px solid #1E90FF">
  			<tr bgcolor="#ADD8E6">
  				<td align=center><font color="#FF0000">Minggu</font></td>
  				<td align=center>Senin</td>
  				<td align=center>Selasa</td>
  				<td align=center>Rabu</td>
  				<td align=center>Kamis</td>
  				<td align=center>Jumat</td>
  				<td align=center>Sabtu</td>
  			</tr>
  			<?php
			$s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
 
			for ($ds=1;$ds<=$s;$ds++) {
			echo "<td></td>";
			}
 
			for ($d=1;$d<=$jumlahhari;$d++) {
 
			if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
			echo "<tr>"; 
			}
			$warna="#000000";
 
			if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
			echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
			if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
			}
			echo '</table>'; 
			?>
		</div>
	</div>
</main>
  <footer>
    <div class="footer">
        <p align="center" style="color: yellow"> Copyright &copy 2020 | Apriliana Latifah Hanum </p>
        <p><a href="#" style="color: yellow"> BACK TO TOP </a></p>
    </div>
  </footer>
</body>
</html>