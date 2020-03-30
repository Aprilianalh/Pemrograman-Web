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
			<ul>
			<h2> PROFIL UKM KARAWITAN "WIDYA GIRI LARAS" </h2>
			<br>
			<p>
				UKM Karawitan "Widya Giri Laras" UPN "Veteran" Jawa Timur terbentuk
				pada tahun 2011 dan mulai disahkan pada tahun 2013. Pernah menjadi
				UKM Karawitan Rampak Kendang, berawal dari acara yang diadakan oleh
				UPN "Veteran" Jawa Timur, sekumpulan mahasiswa dan penjualan UPN
				"Veteran" Jawa Timur dengan arahan dari Bapak Wardianto, S.Sn.  M.M
				ikut serta menjadi pengisi dalam acara tersebut dengan menampilkan
				sajian Rampak Kendang.
			</p>
			<p>
				Akan tetapi seiring berjalannya waktu, UKM Karawitan berganti nama
				menjadi UKM Karawitan "Widya Giri Laras" hingga sekarang.  "Widya"
				memiliki arti pendidikan, ilmu, atau sinau (belajar), "Giri" memiliki
				arti tinggi, gunung, atau tempat yang besar, sedangkan "Laras"
				memiliki makna yang sesuai, sesuai, atau sesuai dengan hal musik yang
				dapat mengandung arti harmoni.  Menganggap nama "Widya Giri Laras"
				mengandung makna belajar memperoleh ilmu setinggi-tinggi dan banyak
				guna mencapai keseimbangan dalam derajat hidup manusia dan
				keselarasan dalam bermusik.
			</p>
			<p>
				UKM Karawitan "Widya Giri Laras" UPN "Veteran" Jawa Timur merupakan
				salah satu organisasi mahasiswa yang mewadahi bakat, minat serta
				kemampuan anggotanya agar tumbuh dan berkembang.  dalam upaya
				melestarikan sekaligus mengembangkan nilai-nilai budaya bangsa
				melalui karya seni pertunjukan.  Organisasi ini juga berusaha
				mewujudkan masyarakat kampus yang merespons terhadap lingkungan
				sosial dan budaya dengan Tri Dharma Perguruan Tinggi.  Musik
				Karawitan "Widya Giri Laras" UPN "Veteran" Jawa Timur beraliran
				klasik dan garapan musik kontemporer maupun campursari.
			</p>
			<br>
			<br>
			<h2> VISI DAN MISI UKM KARAWITAN "WIDYA GIRI LARAS" </h2>
			<br>
			<p>
				VISI
			</p>
			<p>
				Visi UKM Karawitan "Widya Giri Laras" adalah terwujudnya Unit Kegiatan Mahasiswa Karawitan "Widya Giri Laras" sebagai wadah untuk berorganisasi, berkreasi, dan berinovasi karawitan yang berbudi pekerti luhur dibidang kesenian.
			</p>
			<br>
			<p>
				MISI
			</p>
			<p>
				Misi UKM Karawitan "Widya Giri Laras" adalah
				<li>Mewadahi kreativitas budaya anggota Unit Kegiatan Mahasiswa Karawitan "Widya Giri Laras". </li>
				<li>Memaksimalkan fasilitas yang ada di Unit Kegiatan Mahasiswa Karawitan "Widya Giri Laras" Karawitan guna memacu minat dan mengembangkan bakat yang kreatif dan inovatif. </li>
				<li> Memelihara secara berkala fasilitas guna mendukung kreativitas. </li>
				<li> Menjalin hubungan erat antar anggota, lembaga, dan pihak eksternal. </li>
				<li> Mengoptimalkan kinerja dan fungsi kepengurusan dengan perealisasian program. </li>
			</p>
			</ul>
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