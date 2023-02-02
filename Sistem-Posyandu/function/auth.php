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
	error_reporting(0);
 
  	session_start();

	if(isset($_POST['login'])){
		$name = $_POST['username'];
		$cekuser = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username = '".$name."' "));

		if($cekuser > 0){	
			$pass = $_POST['password'];
			$user = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$name."' ");

			while($us = mysqli_fetch_assoc($user)){
				if(md5($pass) == $us['password']){
					if($us['role'] == 0){
						$_SESSION['id'] = $us['id'];
						?>
							<script type="text/javascript">
								swal({
								    title: "Berhasil Login!",
								    text: "Anda login sebagai admin !",
								    icon: "success"
								}).then(function() {
								    window.location = "../admin/";
								});
							</script>
						<?php
					} else {
						$_SESSION['id'] = $us['id'];
						?>
							<script type="text/javascript">
								swal({
								    title: "Berhasil Login!",
								    text: "Anda login sebagai kader !",
								    icon: "success"
								}).then(function() {
								    window.location = "../kader/";
								});
							</script>
						<?php
					}
				} else {
					?>
						<script type="text/javascript">
							swal({
							    title: "Gagal Login!",
							    text: "Username atau Password Salah !",
							    icon: "error"
							}).then(function() {
							    window.location = "../";
							});
						</script>
					<?php
				}
			}
		} else{
			?>
                <script type="text/javascript">
                    swal({
                        title: "Gagal Login!",
                        text: "Username atau Password Salah !",
                        icon: "error"
                    }).then(function() {
                        window.location = "../";
                    });
                </script>
            <?php
		}
	} else{
		?>
			<script type="text/javascript">
				window.location = "../";
			</script>
		<?php
	}

	if($_GET['logoutId']){
		session_start();
		session_destroy();
 
		header("Location: ../");
	}

?>


</body>
</html>
