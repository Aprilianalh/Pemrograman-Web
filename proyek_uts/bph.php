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
    	<h3 style="color: white"> UNIT KEGIATAN MAHASISWA KARAWITAN WIDYA GIRI LARAS </h3>
    	<h3 style="color: white"> UNIVERSITAS PEMBANGUNAN NASIONAL "VETERAN" JAWA TIMUR </h3>
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
			<h2> BIO KEPENGURUSAN </h2>
			<br>
				<h3> BADAN PENGURUS HARIAN </h3>
				<table style="border-color: #CC0000" border="5" >
					<th> ID_Kepengurusan </th>
					<th> Nama </th>
					<th> Jurusan </th>
					<th> Fakultas </th>
					<th> Angkatan </th>
					<th> Jabatan </th>

					<?php 
					include 'koneksi.php';
					$bph = mysqli_query($con, "SELECT * from bph");
					$no = 1;
					foreach ($bph as $con) : ?>
					
						<tr>
						<td><?php echo $con['ID_Kepengurusan'] ?></td>
						<td><?php echo $con['Nama'] ?></td>
						<td><?php echo $con['Jurusan'] ?></td>
						<td><?php echo $con['Fakultas'] ?></td>
						<td><?php echo $con['Angkatan'] ?></td>
						<td><?php echo $con['Jabatan'] ?></td>
						</tr>
					
					 
					<?php endforeach; ?>
					</table>
			<a href="kepengurusan.php"> Back </a>
			</ul>
        </div>
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