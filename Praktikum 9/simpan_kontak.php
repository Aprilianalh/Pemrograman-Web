<?php
include 'admin/koneksi.inc.php';
$vnama=$_POST['nama'];
$vjkel=$_POST['jk'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

$sql="INSERT INTO kontak set Nama='$vnama', Jkel='$vjkel', Email='$vemail', Alamat='$valamat', Kota='$vkota', Pesan='$vpesan'";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close();

header("location:admin/cetak.php");