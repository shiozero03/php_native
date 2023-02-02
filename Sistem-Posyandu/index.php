<?php 
 
	include 'config/config.php';
 
	error_reporting(0);
 
	session_start();
 
	if (isset($_SESSION['id'])) {
		$id = $_SESSION['id'];
		$cekid = mysqli_query($conn, "SELECT * FROM user WHERE id = $id ");
		while($cek = mysqli_fetch_assoc($cekid)){
			if($cek['role'] == 0){
	 			header("Location: admin/");
			} else{
				header("Location: kader/");
			}
		}
	}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="pos pelayanan terpadu, posyandu" />
  <meta name="description" content="Sistem informasi posyandu yang berisikan data balita"/>
  <meta name="author" content="Zero">
  <meta name="robots" content="noindex,nofollow" />

  <title>Sistem Informasi Posyandu</title>

  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png" />
  <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <link href="dist/css/style.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css"/>
  <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div class="top-top">
    <div class="bg-info pt-3 pb-2 pe-3 ps-3">
      <div class="container-fluid">
        <div class="float-start text-md-start text-center col-md-6 col-12 text-white">
          <h4>SISTEM INFORMASI POS PELAYANAN TERPADU</h4>
        </div>
        <div class="clearfix d-md-none"></div>
        <hr class="d-md-none" style="margin: 0 0 10px 0; border: 2px solid black">
        <div class="float-start text-md-end text-center col-md-6 col-12 text-white">
          <h4><span id="tanggal_date"></span> | <span id="hours_jam"></span></h4>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <style type="text/css">
      @media screen and (min-width: 767.5px){
        .login-form{
          margin: 5% 20%;
        }
      }
      @media screen and (max-width: 767.5px){
        .login-form{
          margin: 5% auto;
        }
      }
    </style>
  	<div class="bg-info text-white p-5 login-form" style="border-radius: 10px;">
  		<h1 class="text-center">LOGIN</h1>
  		<hr>
  		<form action="function/auth.php" method="post">
  			<div class="form-group">
  				<label><h4>Username</h4></label>
  				<input type="text" name="username" required class="form-control">
  			</div>
  			<div class="form-group">
  				<label><h4>Password</h4></label>
  				<input id="password" type="password" name="password" required class="form-control">
  			</div>
  			<div class="form-group">
  				<label>
  					<input  onclick="lihatPw()" type="checkbox" name=""> Lihat Password
  				</label>
  			</div>
  			<div class="form-group">
  				<input type="submit" name="login" value="Login" class="btn btn-danger w-100">
  			</div>
  		</form>
  	</div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/extra-libs/sparkline/sparkline.js"></script>
  <script src="dist/js/waves.js"></script>
  <script src="dist/js/sidebarmenu.js"></script>
  <script src="dist/js/custom.min.js"></script>
  <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
  <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
  <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
  <script src="assets/libs/flot/excanvas.js"></script>
  <script src="assets/libs/flot/jquery.flot.js"></script>
  <script src="assets/libs/flot/jquery.flot.pie.js"></script>
  <script src="assets/libs/flot/jquery.flot.time.js"></script>
  <script src="assets/libs/flot/jquery.flot.stack.js"></script>
  <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
  <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="dist/js/pages/chart/chart-page-init.js"></script>
  <script type="text/javascript">
    window.setTimeout("waktu()", 1000);
    function waktu(){
      const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
      var waktu = new Date();
      setTimeout("waktu()", 1000);
      document.getElementById('tanggal_date').innerHTML = days[waktu.getDay()]+', '+waktu.getDate()+' '+months[waktu.getMonth()]+' '+waktu.getFullYear()
      document.getElementById('hours_jam').innerHTML = waktu.getHours()+' : '+waktu.getMinutes()+' : '+waktu.getSeconds()+' WIB'
    }
  	function lihatPw(){
  			console.log(document.getElementById('password').type)
  		if(document.getElementById('password').type === 'password'){
  			document.getElementById('password').type = 'text'
  		} else {
  			document.getElementById('password').type = 'password'
  		}
  	}
  </script>
</body>
</html>