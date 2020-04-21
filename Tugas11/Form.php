<?php
include 'koneksi.php';
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Tanggal Pendaftaran');
$sheet->setCellValue('C1', 'Nama');
$sheet->setCellValue('D1', 'Jenis Kelamin');
$sheet->setCellValue('E1', 'NISN');
$sheet->setCellValue('F1', 'NIK');
$sheet->setCellValue('G1', 'Tempat Lahir');
$sheet->setCellValue('H1', 'Tanggal Lahir');
$sheet->setCellValue('I1', 'No. Akte');
$sheet->setCellValue('J1', 'Agama');
$sheet->setCellValue('K1', 'Kewarganegaraan');
$sheet->setCellValue('L1', 'Berkebutuhan Khusus');
$sheet->setCellValue('M1', 'Alamat');
$sheet->setCellValue('N1', 'RT');
$sheet->setCellValue('O1', 'RW');
$sheet->setCellValue('P1', 'Dusun');
$sheet->setCellValue('Q1', 'Desa');
$sheet->setCellValue('R1', 'Kecamatan');
$sheet->setCellValue('S1', 'Kode Pos');
$sheet->setCellValue('T1', 'Lintang');
$sheet->setCellValue('U1', 'Bujur');
$sheet->setCellValue('V1', 'Tempat Tinggal');
$sheet->setCellValue('W1', 'Moda Transportasi');
$sheet->setCellValue('X1', 'Nomor KKS');
$sheet->setCellValue('Y1', 'Anak Ke');
$sheet->setCellValue('Z1', 'KPS/KPH');
$sheet->setCellValue('A2', 'No. KPS/KPH');

$query = mysqli_query($con, "select * from formulir");
$i = 2;
$id = 1;
while ($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A' .$i, $id++);
	$sheet->setCellValue('B' .$i, $row['tanggal']);
	$sheet->setCellValue('C' .$i, $row['nama']);
	$sheet->setCellValue('D' .$i, $row['jkel']);
	$sheet->setCellValue('E' .$i, $row['nisn']);
	$sheet->setCellValue('F' .$i, $row['nik']);
	$sheet->setCellValue('G' .$i, $row['tempat']);
	$sheet->setCellValue('H' .$i, $row['tl']);
	$sheet->setCellValue('I' .$i, $row['akte']);
	$sheet->setCellValue('J' .$i, $row['agama']);
	$sheet->setCellValue('K' .$i, $row['kwn']);
	$sheet->setCellValue('L' .$i, $row['bk']);
	$sheet->setCellValue('M' .$i, $row['al']);
	$sheet->setCellValue('N' .$i, $row['rt']);
	$sheet->setCellValue('O' .$i, $row['rw']);
	$sheet->setCellValue('P' .$i, $row['dusun']);
	$sheet->setCellValue('Q' .$i, $row['kelurahan']);
	$sheet->setCellValue('R' .$i, $row['kecamatan']);
	$sheet->setCellValue('S' .$i, $row['kdpos']);
	$sheet->setCellValue('T' .$i, $row['lintang']);
	$sheet->setCellValue('U' .$i, $row['bujur']);
	$sheet->setCellValue('V' .$i, $row['tt']);
	$sheet->setCellValue('W' .$i, $row['transportasi']);
	$sheet->setCellValue('X' .$i, $row['nokks']);
	$sheet->setCellValue('Y' .$i, $row['anakke']);
	$sheet->setCellValue('Z' .$i, $row['kps']);
	$sheet->setCellValue('AA' .$i, $row['nokps']);
	$i++;
}

$styleArray = [
				'borders' => [
					'allBorders' => [
						'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
					],
				],
			];
$i = $i - 1;
$sheet->getStyle('A1:AA' .$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('FORMULIR PESERTA DIDIK.xlsx');
?>

<!DOCTYPE html>
<html>

<head>
	<title> FORMULIR PESERTA DIDIK </title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		h3 {
			font-family: times new roman;
			text-align: center;
			background-color: #FF6633;
			color: #FFFFFF;
			padding-left: 10px;
			padding-top: 30px;
			padding-bottom: 30px;
		}

		body {
			padding-left: 80px;
			padding-right: 80px;
		}

		h5 {
			font-family: times new roman;
			padding-left: 10px;
			padding-top: 3px;
			padding-bottom: 3px;
			background-color: #3333FF;
			color: #FFFFFF;
		}

		.tanggal {
			font-family: times new roman;
			font-size: 17px;
		}

		.input {
			font-size: 18px;
		}

		.tombol {
			font-size: 25px;
			font-family: times new roman;
			background-color: #3333FF;
			color: #FFFFFF;
		}

		.error {
			color: #FF0000;
		}
	</style>
</head>
<h3> FORMULIR PESERTA DIDIK </h3>

<body>

	<?php
	$error_nama = "";
	$error_jkel = "";
	$error_nisn = "";
	$error_nik = "";
	$error_tempat = "";
	$error_tl = "";
	$error_akte = "";
	$error_agama = "";
	$error_kwn = "";
	$error_negara = "";
	$error_bk = "";
	$error_al = "";
	$error_rt = "";
	$error_rw = "";
	$error_dusun = "";
	$error_kelurahan = "";
	$error_kecamatan = "";
	$error_kdpos = "";
	$error_lintang = "";
	$error_bujur = "";
	$error_tt = "";
	$error_transportasi = "";
	$error_nokks = "";
	$error_anakke = "";
	$error_kps = "";
	$error_nokps = "";
	$error_tanggal = "";

	$nama = "";
	$jkel = "";
	$nisn = "";
	$nik = "";
	$tempat = "";
	$tl = "";
	$akte = "";
	$agama = "";
	$kwn = "";
	$negara = "";
	$bk = "";
	$al = "";
	$rt = "";
	$rw = "";
	$dusun = "";
	$tanggal = "";
	$kelurahan = "";
	$kecamatan = "";
	$kdpos = "";
	$lintang = "";
	$bujur = "";
	$tt = "";
	$transportasi = "";
	$nokks = "";
	$anakke = "";
	$kps = "";
	$nokps = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["tanggal"])) {
			$error_tanggal = "diperlukan";
		} else {
			$tanggal = test_input($_POST["tanggal"]);
		}

		if (empty($_POST["nama"])) {
			$error_nama = "diperlukan";
		} else {
			$nama = test_input($_POST["nama"]);
		}

		if (empty($_POST["jkel"])) {
			$error_jkel = "diperlukan";
		} else {
			$jkel = test_input($_POST["jkel"]);
		}

		if (empty($_POST["nisn"])) {
			$error_nisn = "diperlukan";
		} else {
			$nisn = test_input($_POST["nisn"]);
		}

		if (empty($_POST["nik"])) {
			$error_nik = "diperlukan";
		} else {
			$nik = test_input($_POST["nik"]);
		}

		if (empty($_POST["tempat"])) {
			$error_tempat = "diperlukan";
		} else {
			$tempat = test_input($_POST["tempat"]);
		}

		if (empty($_POST["tl"])) {
			$error_tl = "diperlukan";
		} else {
			$tl = test_input($_POST["tl"]);
		}

		if (empty($_POST["akte"])) {
			$error_akte = "diperlukan";
		} else {
			$akte = test_input($_POST["akte"]);
		}

		if (empty($_POST["agama"])) {
			$error_agama = "diperlukan";
		} else {
			$agama = test_input($_POST["agama"]);
		}

		if (empty($_POST["kwn"])) {
			$error_kwn = "diperlukan";
		} else {
			$kwn = test_input($_POST["kwn"]);
		}

		if (empty($_POST["negara"])) {
			$error_negara = "diperlukan";
		} else {
			$negara = test_input($_POST["negara"]);
		}

		if (empty($_POST["bk"])) {
			$error_bk = "diperlukan";
		} else {
			$bk = test_input($_POST["bk"]);
		}

		if (empty($_POST["al"])) {
			$error_al = "diperlukan";
		} else {
			$al = test_input($_POST["al"]);
		}

		if (empty($_POST["rt"])) {
			$error_rt = "diperlukan";
		} else {
			$rt = test_input($_POST["rt"]);
		}

		if (empty($_POST["rw"])) {
			$error_rw = "diperlukan";
		} else {
			$rw = test_input($_POST["rw"]);
		}

		if (empty($_POST["dusun"])) {
			$error_dusun = "diperlukan";
		} else {
			$dusun = test_input($_POST["dusun"]);
		}

		if (empty($_POST["kelurahan"])) {
			$error_kelurahan = "diperlukan";
		} else {
			$kelurahan = test_input($_POST["kelurahan"]);
		}

		if (empty($_POST["kecamatan"])) {
			$error_kecamatan = "diperlukan";
		} else {
			$kecamatan = test_input($_POST["kecamatan"]);
		}

		if (empty($_POST["kdpos"])) {
			$error_kdpos = "diperlukan";
		} else {
			$kdpos = test_input($_POST["kdpos"]);
		}

		if (empty($_POST["lintang"])) {
			$error_lintang = "diperlukan";
		} else {
			$lintang = test_input($_POST["lintang"]);
		}

		if (empty($_POST["bujur"])) {
			$error_bujur = "diperlukan";
		} else {
			$bujur = test_input($_POST["bujur"]);
		}

		if (empty($_POST["tt"])) {
			$error_tt = "diperlukan";
		} else {
			$tt = test_input($_POST["tt"]);
		}

		if (empty($_POST["transportasi"])) {
			$error_transportasi = "diperlukan";
		} else {
			$transportasi = test_input($_POST["transportasi"]);
		}

		if (empty($_POST["nokks"])) {
			$error_nokks = "diperlukan";
		} else {
			$nokks = test_input($_POST["nokks"]);
		}

		if (empty($_POST["anakke"])) {
			$error_anakke = "diperlukan";
		} else {
			$anakke = test_input($_POST["anakke"]);
		}

		if (empty($_POST["kps"])) {
			$error_kps = "diperlukan";
		} else {
			$kps = test_input($_POST["kps"]);
		}

		if (empty($_POST["nokps"])) {
			$error_nokps = "diperlukan";
		} else {
			$nokps = test_input($_POST["nokps"]);
		}
	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

	<table border="4" width="250" align="right">
		<form>
			<td style="text-align: center;"><b> F-PD </b></td>
		</form>
	</table>
	<br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<table>
			<tr>
				<td width="30"></td>
				<td> Tanggal </td>
				<td width="10"></td>
				<td width="10"> : </td>
				<td>
					<input class="tanggal" type="date" name="tanggal" value="<?= $tanggal ?>">
					<span class="error"> *<?php echo $error_tanggal; ?> </span>
				</td>
			</tr>
		</table>
		<h5> DATA PRIBADI </h5>
		<table>
			<tr>
				<td width="30" align="center"> 1. </td>
				<td> Nama Lengkap </td>
				<td width="30"></td>
				<td width="30"> : </td>
				<td>
					<input class="input" type="text" name="nama" size="30" value="<?= $nama; ?>">
					<span class="error"> *<?php echo $error_nama; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 2. </td>
				<td> Jenis Kelamin </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input type="radio" name="jkel" value="L"> Laki-Laki
					<input type="radio" name="jkel" value="P"> Perempuan
					<span class="error"> *<?php echo $error_jkel; ?> </span>
			</tr>
			<tr>
				<td width="30" align="center"> 3. </td>
				<td> NISN </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="nisn" size="30">
					<span class="error"> *<?php echo $error_nisn; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 4. </td>
				<td> NIK / No. KITAS (Untuk WNA) </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="nik" size="30">
					<span class="error"> *<?php echo $error_nik; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 5. </td>
				<td> Tempat Lahir </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="tempat">
					<span class="error"> *<?php echo $error_tempat; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 6. </td>
				<td> Tanggal Lahir </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="tanggal" type="date" name="tl" size="20">
					<span class="error"> *<?php echo $error_tl; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 7. </td>
				<td> No Registrasi Akte Lahir </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="akte">
					<span class="error"> *<?php echo $error_akte; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 8. </td>
				<td> Agama & Kepercayaan </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="agama">
					<span class="error"> *<?php echo $error_agama; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 9. </td>
				<td> Kewarganegaraan </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input type="radio" name="kwn" value="wni"> Indonesia (WNI)
					<input type="radio" name="kwn" value="wna"> Asing (WNA)
					<span class="error"> *<?php echo $error_kwn; ?> </span>
				</td>
				<td> Nama Negara </td>
				<td width="20"></td>
				<td>
					<input class="input" type="text" name="negara" size="30">
				</td>
			</tr>
			<tr>
				<td width="40" align="center"> 10. </td>
				<td> Berkebutuhan Khusus </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="bk">
					<span class="error"> *<?php echo $error_bk; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 11. </td>
				<td> Alamat Jalan </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="al">
					<span class="error"> *<?php echo $error_al; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 12. </td>
				<td> RT </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="rt" size="2">
					<span class="error"> *<?php echo $error_rt; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 13. </td>
				<td> RW </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="rw" size="2">
					<span class="error"> *<?php echo $error_rw; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 14. </td>
				<td> Nama Dusun </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="dusun" size="30">
					<span class="error"> *<?php echo $error_dusun; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 15. </td>
				<td> Nama Kelurahan/Desa </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="kelurahan" size="30">
					<span class="error"> *<?php echo $error_kelurahan; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 16. </td>
				<td> Kecamatan </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="kecamatan" size="30">
					<span class="error"> *<?php echo $error_kecamatan; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 17. </td>
				<td> Kode Pos </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="kdpos" size="7">
					<span class="error"> *<?php echo $error_kdpos; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 18. </td>
				<td> Lintang </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="lintang" size="30">
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 19. </td>
				<td> Bujur </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="bujur" size="30">
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 20. </td>
				<td> Tempat Tinggal </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="tt" size="40">
					<span class="error"> *<?php echo $error_tt; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 21. </td>
				<td> Moda Transportasi </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="transportasi" size="30">
					<span class="error"> *<?php echo $error_transportasi; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 22. </td>
				<td> Nomor KKS (Kartu Keluarga Sejahtera) </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="nokks" size="30">
					<span class="error"> *<?php echo $error_nokks; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 23. </td>
				<td> Anak Ke Berapa (Berdasarkan KK) </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="anakke" size="2">
					<span class="error"> *<?php echo $error_anakke; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 24. </td>
				<td> Penerima KPS/PKH </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input type="radio" name="kps" value="ya"> Ya
					<input type="radio" name="kps" value="tidak"> Tidak
					<span class="error"> *<?php echo $error_kps; ?> </span>
				</td>
			</tr>
			<tr>
				<td width="30" align="center"> 25. </td>
				<td> No KPS/PKH (Apabila Menerima) </td>
				<td width="30"></td>
				<td> : </td>
				<td>
					<input class="input" type="text" name="nokps" size="30">
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<input class="tombol" type="submit">
				</td>
			</tr>
		</table>
	</form>
</body>


</html>
<?php
if (!empty($tanggal) && !empty($nama) && !empty($jkel) && !empty($nisn) && !empty($nik) && !empty($tempat) && !empty($tl) && !empty($akte) && !empty($agama) && !empty($kwn) && !empty($bk) && !empty($al) && !empty($rt) && !empty($rw) && !empty($dusun) && !empty($kelurahan) && !empty($kecamatan) && !empty($kdpos) && !empty($tt) && !empty($transportasi) && !empty($nokks) && !empty($anakke) && !empty($kps)) {



	$query = "INSERT INTO formulir(tanggal, nama, jkel, nisn, nik, tempat, tl, akte, agama, kwn, negara, bk, al, rt, rw, dusun, kelurahan, kecamatan, kdpos, lintang, bujur, tt, transportasi, nokks, anakke, kps, nokps) VALUES ('$tanggal','$nama','$jkel','$nisn','$nik','$tempat','$tl','$akte','$agama','$kwn','$negara','$bk','$al','$rt','$rw','$dusun','$kelurahan','$kecamatan','$kdpos','$lintang','$bujur','$tt','$transportasi','$nokks','$anakke','$kps','$nokps')";

	$sql = mysqli_query($con, $query);
	if ($sql) {
		echo "sukses";
	} else {
		echo "gagal diinput";
	}
}
?>