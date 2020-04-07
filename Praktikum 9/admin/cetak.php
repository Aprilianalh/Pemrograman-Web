<?php
include 'koneksi.inc.php';
$sql="SELECT Nama, Jkel, Email, Alamat, Kota, Pesan from kontak order by Nama;";

$qry = mysqli_query($conn, $sql) or die("Proses cetak gagal");

echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>";
$no=1;

while($hasil=mysqli_fetch_row($qry)){

echo "<tr>
<td>$no</td>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
</tr>";
$no++;
}
echo "</table>";
?>
<a href="index.php"> Kembali </a>