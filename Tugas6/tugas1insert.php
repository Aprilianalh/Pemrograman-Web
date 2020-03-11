<?php

include 'koneksi.php';

$sql = "INSERT INTO buku_tamu (nama,email,isi)
VALUES('Hanum', 'Hanum@gmail.com', 'Apa kabar?')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
}	else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>