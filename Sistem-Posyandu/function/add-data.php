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
	if(isset($_POST['add-admin'])){
		$name = $_POST['username'];
		$cekuser = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username = '".$name."' "));

		if($cekuser > 0){	
			?>
				<script type="text/javascript">
					swal({
					    title: "Gagal Ditambahkan!",
					    text: "Username Telah Digunakan!",
					    icon: "error"
					}).then(function() {
					    window.location = "../admin/data-admin.php";
					});
				</script>
			<?php
		} else{
			$nama = $_POST['nama'];
			$pass = md5($_POST['password']);
			$date = date("Y-m-d H:i:s");
			$result = mysqli_query($conn, "INSERT INTO user(nama, username, password, role, created_at) values('".$nama."', '".$name."', '".$pass."', '0', '".$date."')");

			if($name == '' || $pass == ''){
				?>
					<script type="text/javascript">
						swal({
						    title: "Gagal Ditambahkan!",
						    text: "Username atau Password tidak boleh kosong!",
						    icon: "error"
						}).then(function() {
						    window.location = "../admin/data-admin.php";
						});
					</script>
				<?php
			}else{
				if($result){

					?>
					<script type="text/javascript">
						swal({
						    title: "Berhasil Ditambahkan!",
						    text: "Data Admin Telah Ditambahkan!",
						    icon: "success"
						}).then(function() {
						    window.location = "../admin/data-admin.php";
						});
					</script>
					<?php
				} else {
					?>
					<script type="text/javascript">
						swal({
						    title: "Gagal Ditambahkan!",
						    text: "Data Admin Gagal Ditambahkan!",
						    icon: "error"
						}).then(function() {
						    window.location = "../admin/data-admin.php";
						});
					</script>
					<?php
				}
				mysqli_close($conn);
			}
		}
	} elseif(isset($_POST['add-kader'])){
		$name = $_POST['username'];
		$cekuser = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username = '".$name."' "));

		if($cekuser > 0){	
			?>
				<script type="text/javascript">
					swal({
					    title: "Gagal Ditambahkan!",
					    text: "Username Telah Digunakan!",
					    icon: "error"
					}).then(function() {
					    window.location = "../admin/data-kader.php";
					});
				</script>
			<?php
		} else{
			$nama = $_POST['nama'];
			$pass = md5($_POST['password']);
			$alamat = $_POST['alamat'];
			$umur = $_POST['umur'];
			$telp = $_POST['telp'];
			$date = date("Y-m-d H:i:s");
			$result = mysqli_query($conn, "INSERT INTO user(nama, username, password, alamat, umur, telp, role, created_at) values('".$nama."', '".$name."', '".$pass."', '".$alamat."', '".$umur."', '".$telp."', '1', '".$date."')");

			if($result){

				?>
				<script type="text/javascript">
					swal({
					    title: "Berhasil Ditambahkan!",
					    text: "Data Kader Telah Ditambahkan!",
					    icon: "success"
					}).then(function() {
					    window.location = "../admin/data-kader.php";
					});
				</script>
				<?php
			} else {
				?>
				<script type="text/javascript">
					swal({
					    title: "Gagal Ditambahkan!",
					    text: "Data Kader Gagal Ditambahkan!",
					    icon: "error"
					}).then(function() {
					    window.location = "../admin/data-kader.php";
					});
				</script>
				<?php
			}
			mysqli_close($conn);
		}
	} elseif(isset($_POST['add-balita'])){
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];
		$nama_ayah = $_POST['nama_ayah'];
		$nama_ibu = $_POST['nama_ibu'];
		$date = date("Y-m-d H:i:s");

		$result = mysqli_query($conn, "INSERT INTO balita(nama, jenis_kelamin, tanggal_lahir, alamat, nama_ayah, nama_ibu, created_at) values('".$nama."', '".$jenis_kelamin."', '".$tanggal_lahir."', '".$alamat."', '".$nama_ayah."', '".$nama_ibu."', '".$date."')");

		if($result){

			?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Ditambahkan!",
				    text: "Data Balita Telah Ditambahkan!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-balita.php";
				});
			</script>
			<?php
		} else {
			?>
			<script type="text/javascript">
				swal({
				    title: "Gagal Ditambahkan!",
				    text: "Data Balita Gagal Ditambahkan!",
				    icon: "error"
				}).then(function() {
				    window.location = "../kader/data-balita.php";
				});
			</script>
			<?php
		}
		mysqli_close($conn);
	} elseif(isset($_POST['add-ibu-hamil'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$telp = $_POST['telp'];
		$usia = $_POST['usia_kandungan'];
		$date = date("Y-m-d H:i:s");

		$query = "INSERT INTO ibu_hamil(nama, alamat, umur, telp, usia_kandungan, created_at) values('".$nama."', '".$alamat."', '".$umur."', '".$telp."', '".$usia."', '".$date."')";
		$result = mysqli_query($conn, $query);

		if($result){

			?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Ditambahkan!",
				    text: "Data Ibu Hamil Telah Ditambahkan!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-ibu-hamil.php";
				});
			</script>
			<?php
		} else {
			?>
			<script type="text/javascript">
				swal({
				    title: "Gagal Ditambahkan!",
				    text: "Data Ibu Hamil Gagal Ditambahkan!",
				    icon: "error"
				}).then(function() {
				    window.location = "../kader/data-ibu-hamil.php";
				});
			</script>
			<?php
		}
		mysqli_close($conn);
	} elseif(isset($_POST['add-ukuran'])){
		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
		$berat_badan = $_POST['berat_badan'];
		$tinggi_badan = $_POST['tinggi_badan'];
		$linkar_kepala = $_POST['linkar_kepala'];
		$date = date("Y-m-d H:i:s");
		$tgl = date('d', strtotime($tanggal));
		$month = date('M', strtotime($tanggal));
		$tahun = date('Y', strtotime($tanggal));

		$cekus = mysqli_query($conn, "SELECT * FROM balita WHERE id = ".$id);
		$pasus = mysqli_fetch_assoc($cekus);
		$countMF = date('m', strtotime($pasus['tanggal_lahir']));
		$countML = date('m', strtotime($tanggal));
		$countYF = date('Y', strtotime($pasus['tanggal_lahir']));
		$countYL = date('Y', strtotime($tanggal));

		if($countML >= $countMF){
			$rentangY = $countYL - $countYF;
			$rentangM = $countML - $countMF;
		} else{
			$rentangY = $countYL - $countYF - 1;
			$rentangM = (12 - $countMF) + $countML;
		}
		$bulan_ke = (($rentangY * 12) + $rentangM);

		if($month == 'Jan'){ $bulan = 'Januari'; }
		elseif($month == 'Feb'){ $bulan = 'Februari'; }
		elseif($month == 'Mar'){ $bulan = 'Maret'; }
		elseif($month == 'Apr'){ $bulan = 'April'; }
		elseif($month == 'May'){ $bulan = 'Mei'; }
		elseif($month == 'Jun'){ $bulan = 'Juni'; }
		elseif($month == 'Jul'){ $bulan = 'Juli'; }
		elseif($month == 'Feb'){ $bulan = 'Februari'; }
		elseif($month == 'Aug'){ $bulan = 'Agustus'; }
		elseif($month == 'Sep'){ $bulan = 'September'; }
		elseif($month == 'Oct'){ $bulan = 'Oktober'; }
		elseif($month == 'Nov'){ $bulan = 'November'; }
		elseif($month == 'Dec'){ $bulan = 'Desember'; }

		$result = mysqli_query($conn, "INSERT INTO data_pengukuran(id_balita, tanggal, bulan, tahun, berat, tinggi, kepala, bulan_ke, created_at) values('".$id."', '".$tgl."', '".$bulan."', '".$tahun."', '".$berat_badan."', '".$tinggi_badan."', '".$linkar_kepala."', '".$bulan_ke."', '".$date."')");

		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Ditambahkan!",
				    text: "Data Pengukuran Telah Ditambahkan!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-pengukuran-balita.php";
				});
			</script>
		<?php

		mysqli_close($conn);
	} elseif(isset($_POST['add-vitamin'])){
		$id = $_POST['id'];
		$tanggal = $_POST['tanggal'];
		$nama_vitamin = $_POST['nama_vitamin'];
		$date = date("Y-m-d H:i:s");
		$tgl = date('d', strtotime($tanggal));
		$month = date('M', strtotime($tanggal));
		$tahun = date('Y', strtotime($tanggal));

		// echo date('d', strtotime($tanggal));

		if($month == 'Jan'){ $bulan = 'Januari'; }
		elseif($month == 'Feb'){ $bulan = 'Februari'; }
		elseif($month == 'Mar'){ $bulan = 'Maret'; }
		elseif($month == 'Apr'){ $bulan = 'April'; }
		elseif($month == 'May'){ $bulan = 'Mei'; }
		elseif($month == 'Jun'){ $bulan = 'Juni'; }
		elseif($month == 'Jul'){ $bulan = 'Juli'; }
		elseif($month == 'Feb'){ $bulan = 'Februari'; }
		elseif($month == 'Aug'){ $bulan = 'Agustus'; }
		elseif($month == 'Sep'){ $bulan = 'September'; }
		elseif($month == 'Oct'){ $bulan = 'Oktober'; }
		elseif($month == 'Nov'){ $bulan = 'November'; }
		elseif($month == 'Dec'){ $bulan = 'Desember'; }

		$result = mysqli_query($conn, "INSERT INTO data_vitamin(id_balita, tanggal, bulan, tahun, nama_vitamin, created_at) values('".$id."', '".$tgl."', '".$bulan."', '".$tahun."', '".$nama_vitamin."', '".$date."')");

		?>
			<script type="text/javascript">
				swal({
				    title: "Berhasil Ditambahkan!",
				    text: "Data Vitamin Telah Ditambahkan!",
				    icon: "success"
				}).then(function() {
				    window.location = "../kader/data-vitamin-balita.php";
				});
			</script>
		<?php

		mysqli_close($conn);
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