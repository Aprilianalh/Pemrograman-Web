<?php
if (isset($_GET['nama']) AND isset($_GET['email']))
{
$nama=$_GET['nama'];
$email=$_GET['email'];
$nama=htmlspecialchars($nama);
$email=strip_tags($email);
}
else
{
header("Location:form.php?error=variabel_belum_diset");
}
if(empty($nama))
{
header("Location:form.php?error=nama_kosong");
}
else
{
if (empty($email))
{
header("Location:form.php?error=email_kosong");
}
else
{
echo " Welcome $nama <br>
Your email address is $email <br>";
}
}
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('now');
echo $date->format('d-m-Y & H:i:s');
?>