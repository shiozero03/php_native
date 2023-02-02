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

	session_start();
	if (!isset($_SESSION['id'])) {
    ?>
		<script type="text/javascript">
			alert('Anda harus login terlebih dahulu');
			document.location.href = '../'
		</script>
	<?php
  	}

	if(isset($_POST['update-admin'])){
		$id = $_POST['id'];
		$cekuser = mysqli_query($conn, "SELECT * FROM user WHERE id = '".$id."' ");
		$nama = $_POST['nama'];
		$name = $_POST['username'];
		$pass = $_POST['password'];
		
		$fetchuser = mysqli_fetch_assoc($cekuser);

		if($fetchuser['password'] == $pass){
			$result = mysqli_query($conn, "UPDATE user SET nama = '".$nama."', username = '".$name."' WHERE id = '".$id."'");
			?>
				<script type="text/javascript">
					swal({
					    title: "Berhasil Diupdate!",
					    text: "Data Admin Telah Diupdate!",
					    icon: "success"
					}).then(function() {
					    window.location = "../admin/data-admin.php";
					});
				</script>
			<?php
		} else {
			$result = mysqli_query($conn, "UPDATE user SET nama = '".$nama."', username = '".$name."', password = '".md5($pass)."' WHERE id = '".$id."'");
			?>
				<script type="text/javascript">
					swal({
					    title: "Berhasil Diupdate!",
					    text: "Data Admin Telah Diupdate!",
					    icon: "success"
					}).then(function() {
					    window.location = "../admin/data-admin.php";
					});
				</script>
			<?php
		}
	} elseif(isset($_POST['update-kader'])){
		$id = $_POST['id'];
		$cekuser = mysqli_query($conn, "SELECT * FROM user WHERE id = '".$id."' ");

		$name = $_POST['username'];
		$nama = $_POST['nama'];
		$pass = $_POST['password'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$telp = $_POST['telp'];

		$fetchuser = mysqli_fetch_assoc($cekuser);

		if($fetchuser['password'] == $pass){
			$result = mysqli_query($conn, "UPDATE user SET nama = '".$nama."', username = '".$name."', alamat = '".$alamat."', umur = '".$umur."', telp = '".$telp."' WHERE id = '".$id."'");
			?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Diupdate!",
				    text: "Data Kader Telah Diupdate!",
				    icon: "success"
				}).then(function() {
				    window.location = "../admin/data-kader.php";
				});
			</script>
			<?php
		} else {
			$result = mysqli_query($conn, "UPDATE user SET nama = '".$nama."', username = '".$name."', password = '".$pass."', alamat = '".$alamat."', umur = '".$umur."', telp = '".$telp."' WHERE id = '".$id."'");
			?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Diupdate!",
				    text: "Data Kader Telah Diupdate!",
				    icon: "success"
				}).then(function() {
				    window.location = "../admin/data-kader.php";
				});
			</script>
			<?php
		}
	} elseif(isset($_POST['update-ibu-hamil'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$telp = $_POST['telp'];
		$usia = $_POST['usia_kandungan'];

		$result = mysqli_query($conn, "UPDATE ibu_hamil SET nama = '".$nama."', alamat = '".$alamat."', umur = '".$umur."', telp = '".$telp."', usia_kandungan = '".$usia."' WHERE id = '".$id."'");
		?>
		<script type="text/javascript">
			swal({
			    title: "Berhasil Diupdate!",
			    text: "Data Ibu Hamil Telah Diupdate!",
			    icon: "success"
			}).then(function() {
			    window.location = "../kader/data-ibu-hamil.php";
			});
		</script>
		<?php
	} elseif(isset($_POST['update-balita'])){
		$id = $_POST['id'];

		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];
		$nama_ayah = $_POST['nama_ayah'];
		$nama_ibu = $_POST['nama_ibu'];

		mysqli_query($conn, "UPDATE balita SET nama = '".$nama."', jenis_kelamin = '".$jenis_kelamin."', tanggal_lahir = '".$tanggal_lahir."', alamat = '".$alamat."', nama_ayah = '".$nama_ayah."', nama_ibu = '".$nama_ibu."' WHERE id = '".$id."'");
		?>
		<script type="text/javascript">
			swal({
			    title: "Berhasil Diupdate!",
			    text: "Data Balita Telah Diupdate!",
			    icon: "success"
			}).then(function() {
			    window.location = "../kader/data-balita.php";
			});
		</script>
		<?php
	} elseif(isset($_POST['imunisasi'])){
		$id = $_POST['id'];
		$hb_0 = $_POST['hb_0'];
		$bcg = $_POST['bcg'];
		$polio = $_POST['polio'];
		$dpt_hb_hib_1 = $_POST['dpt_hb_hib_1'];
		$polio_2 = $_POST['polio_2'];
		$dpt_hb_hib_2 = $_POST['dpt_hb_hib_2'];
		$polio_3 = $_POST['polio_3'];
		$dpt_hb_hib_3 = $_POST['dpt_hb_hib_3'];
		$polio_4 = $_POST['polio_4'];
		$ipv = $_POST['ipv'];
		$campak = $_POST['campak'];
		$dpt_hb_hib_lanjutan = $_POST['dpt_hb_hib_lanjutan'];
		$campak_lanjutan = $_POST['campak_lanjutan'];
		$cekimun = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_imunisasi WHERE id_balita = $id"));
		if($cekimun > 0){
			$queryimun = "UPDATE data_imunisasi SET hb_0 = '".$hb_0."', bcg = '".$bcg."', polio = '".$polio."', dpt_hb_hib_1 = '".$dpt_hb_hib_1."', polio_2 = '".$polio_2."', dpt_hb_hib_2 = '".$dpt_hb_hib_2."', polio_3 = '".$polio_3."', dpt_hb_hib_3 = '".$dpt_hb_hib_3."', polio_4 = '".$polio_4."', ipv = '".$ipv."', campak = '".$campak."', dpt_hb_hib_lanjutan = '".$dpt_hb_hib_lanjutan."', campak_lanjutan = '".$campak_lanjutan."' WHERE id_balita = ".$id;

		} else {
			$created_at = date("Y-m-d H:i:s");
			$queryimun = "INSERT INTO data_imunisasi(id_balita, hb_0, bcg, polio, dpt_hb_hib_1, polio_2, dpt_hb_hib_2, polio_3, dpt_hb_hib_3, polio_4, ipv, campak, dpt_hb_hib_lanjutan, campak_lanjutan, created_at) VALUES('".$id."', '".$hb_0."', '".$bcg."', '".$polio."', '".$dpt_hb_hib_1."', '".$polio_2."', '".$dpt_hb_hib_2."', '".$polio_3."', '".$dpt_hb_hib_3."', '".$polio_4."', '".$ipv."', '".$campak."', '".$dpt_hb_hib_lanjutan."', '".$campak_lanjutan."', '".$created_at."')";
		}

		mysqli_query($conn, $queryimun);
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Diupdate!",
				    text: "Data Imunisasi Telah Diupdate!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-imunisasi-balita.php";
				});
			</script>
		<?php
	} elseif(isset($_POST['update-ukuran'])){
		$id = $_POST['id'];
		$berat = $_POST['berat'];
		$tinggi = $_POST['tinggi'];
		$kepala = $_POST['kepala'];
		mysqli_query($conn, "UPDATE data_pengukuran SET berat = '".$berat."', tinggi = '".$tinggi."', kepala = '".$kepala."' WHERE id = '".$id."'");
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Diupdate!",
				    text: "Data Pengukuran Balita Telah Diupdate!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-pengukuran-balita.php";
				});
			</script>
		<?php
	} elseif(isset($_POST['update-vitamin'])){
		$id = $_POST['id'];
		$nama_vitamin = $_POST['nama_vitamin'];
		mysqli_query($conn, "UPDATE data_vitamin SET nama_vitamin = '".$nama_vitamin."' WHERE id = '".$id."'");
		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Diupdate!",
				    text: "Data vitamin Balita Telah Diupdate!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-vitamin-balita.php";
				});
			</script>
		<?php
	} elseif(isset($_POST['update-profil'])){
		$id = $_POST['id'];
		$cekuser = mysqli_query($conn, "SELECT * FROM user WHERE id = '".$id."' ");

		$name = $_POST['username'];
		$nama = $_POST['nama'];
		$pass = $_POST['password'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$telp = $_POST['telp'];

		$fetchuser = mysqli_fetch_assoc($cekuser);

		if($fetchuser['password'] == $pass){
			$result = mysqli_query($conn, "UPDATE user SET nama = '".$nama."', username = '".$name."', alamat = '".$alamat."', umur = '".$umur."', telp = '".$telp."' WHERE id = '".$id."'");
			?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Diupdate!",
				    text: "Data Anda Telah Diupdate!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader";
				});
			</script>
			<?php
		} else {
			$result = mysqli_query($conn, "UPDATE user SET nama = '".$nama."', username = '".$name."', password = '".$pass."', alamat = '".$alamat."', umur = '".$umur."', telp = '".$telp."' WHERE id = '".$id."'");
			?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Diupdate!",
				    text: "Data Anda Telah Diupdate!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader";
				});
			</script>
			<?php
		}
	} else {
		?>
			<script type="text/javascript">
				window.location = "../";
			</script>
		<?php
	}

?>


</body>
</html>