<?php
	if (isset($_GET['error']))
	{
		$error=$_GET['error'];
}
	else
	{
		$error="";
}
	$pesan="";
		if ($error=="variabel_belum_diset")
{
	$pesan="<h3> Maaf, anda harus mengakses halaman ini dari Tugas1.php </h3> ";
}
	if($error=="nama_kosong")
{
	$pesan="<h3> Maaf, anda harus mengisi nama </h3>";
	}
	if($error=="email_kosong")
{
	$pesan="<h3> Maaf, anda harus mengisi email</h3> ";
}
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Form Login </title>
</head>
<body>
	<h2> Form Login </h2>
<?php
echo $pesan;
?>

<form action="tugas2.php" method="get">
Nama: <input type="text" name="nama" />
	<br />
E-Mail: <input type="text" name="email" />
	<br />
<input type="submit" value="Submit" >
</form>
</body>
</html>