<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Informasi Posyandu</title>

  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php 
	include_once('../config/config.php');

	if(isset($_GET['id-admin'])){
		$deleteuser = mysqli_query($conn, "DELETE FROM user WHERE id = '".$_GET['id-admin']."' ");
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Dihapus !",
				    text: "Data admin berhasil dihapus!",
				    icon: "success"
				}).then(function() {
				    window.location = "../admin/data-admin.php";
				});
			</script>
		<?php
	} elseif(isset($_GET['id-kader'])){
		$deleteuser = mysqli_query($conn, "DELETE FROM user WHERE id = '".$_GET['id-kader']."' ");
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Dihapus !",
				    text: "Data kader berhasil dihapus!",
				    icon: "success"
				}).then(function() {
				    window.location = "../admin/data-kader.php";
				});
			</script>
		<?php
	} elseif(isset($_GET['id-ibu-hamil'])){
		$deleteuser = mysqli_query($conn, "DELETE FROM ibu_hamil WHERE id = '".$_GET['id-ibu-hamil']."' ");
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Dihapus !",
				    text: "Data ibu hamil berhasil dihapus!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-ibu-hamil.php";
				});
			</script>
		<?php
	} elseif(isset($_GET['id-balita'])){
		mysqli_query($conn, "DELETE FROM balita WHERE id = '".$_GET['id-balita']."' ");
		mysqli_query($conn, "DELETE FROM data_imunisasi WHERE id_balita = '".$_GET['id-balita']."' ");
		mysqli_query($conn, "DELETE FROM data_pengukuran WHERE id_balita = '".$_GET['id-balita']."' ");
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Dihapus !",
				    text: "Data balita berhasil dihapus!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-balita.php";
				});
			</script>
		<?php
	} elseif(isset($_GET['id-pengukuran'])){
		mysqli_query($conn, "DELETE FROM data_pengukuran WHERE id = '".$_GET['id-pengukuran']."' ");
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Dihapus !",
				    text: "Data pengukuran balita berhasil dihapus!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-pengukuran-balita.php";
				});
			</script>
		<?php
	} elseif(isset($_GET['id-vitamin'])){
		mysqli_query($conn, "DELETE FROM data_vitamin WHERE id = '".$_GET['id-vitamin']."' ");
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Dihapus !",
				    text: "Data vitamin balita berhasil dihapus!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-vitamin-balita.php";
				});
			</script>
		<?php
	} else{
		?>
			<script type="text/javascript">
				window.location = "../";
			</script>
		<?php
	}

?>


</body>
</html>