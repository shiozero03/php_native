<?php
	include_once('../config/config.php');
	session_start();
	if (!isset($_SESSION['id'])) {
    ?>
		<script type="text/javascript">
			alert('Anda harus login terlebih dahulu');
			document.location.href = '../'
		</script>
	<?php
  	}
	if(isset($_GET['cekid'])){
		$adminview = mysqli_query($conn, "SELECT * FROM user WHERE id = '".$_GET['cekid']."'");
		$cekadmin = mysqli_fetch_assoc($adminview);
		header("Content-type:text/html; charset=UTF-8");
		header("Content-type:application/json");
		echo json_encode($cekadmin, JSON_PRETTY_PRINT);
	}elseif(isset($_GET['balitacekid'])){
		$balitaview = mysqli_query($conn, "SELECT * FROM balita WHERE id = '".$_GET['balitacekid']."'");
		$cekbalita = mysqli_fetch_assoc($balitaview);
		header("Content-type:text/html; charset=UTF-8");
		header("Content-type:application/json");
		echo json_encode($cekbalita, JSON_PRETTY_PRINT);
	}elseif(isset($_GET['cekidibuhamil'])){
		$ibuhamilview = mysqli_query($conn, "SELECT * FROM ibu_hamil WHERE id = '".$_GET['cekidibuhamil']."'");
		$cekibuhamil = mysqli_fetch_assoc($ibuhamilview);
		header("Content-type:text/html; charset=UTF-8");
		header("Content-type:application/json");
		echo json_encode($cekibuhamil, JSON_PRETTY_PRINT);
	}elseif(isset($_GET['ukurancekid'])){
		$ukuranview = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id = '".$_GET['ukurancekid']."'");
		$cekukuran = mysqli_fetch_assoc($ukuranview);
		header("Content-type:text/html; charset=UTF-8");
		header("Content-type:application/json");
		echo json_encode($cekukuran, JSON_PRETTY_PRINT);
	}elseif(isset($_GET['vitamincekid'])){
		$vitaminview = mysqli_query($conn, "SELECT * FROM data_vitamin WHERE id = '".$_GET['vitamincekid']."'");
		$cekvitamin = mysqli_fetch_assoc($vitaminview);
		header("Content-type:text/html; charset=UTF-8");
		header("Content-type:application/json");
		echo json_encode($cekvitamin, JSON_PRETTY_PRINT);
	}elseif(isset($_GET['vitamincuscekid'])){
		$vitaminview = mysqli_query($conn, "SELECT uk.id_balita, uk.id, uk.nama_vitamin, uk.tanggal, uk.bulan, uk.tahun, bal.nama FROM data_vitamin as uk JOIN balita as bal ON uk.id_balita = bal.id WHERE uk.id = '".$_GET['vitamincuscekid']."'");
		$cekvitamin = mysqli_fetch_assoc($vitaminview);
		header("Content-type:text/html; charset=UTF-8");
		header("Content-type:application/json");
		echo json_encode($cekvitamin, JSON_PRETTY_PRINT);
	}elseif(isset($_GET['ukurancuscekid'])){
		$vitaminview = mysqli_query($conn, "SELECT uk.id_balita, uk.id, uk.berat, uk.tinggi, uk.kepala, uk.tanggal, uk.bulan, uk.tahun, bal.nama FROM data_pengukuran as uk JOIN balita as bal ON uk.id_balita = bal.id WHERE uk.id = '".$_GET['ukurancuscekid']."'");
		$cekvitamin = mysqli_fetch_assoc($vitaminview);
		header("Content-type:text/html; charset=UTF-8");
		header("Content-type:application/json");
		echo json_encode($cekvitamin, JSON_PRETTY_PRINT);
	}

?>