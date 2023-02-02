<?php
	
	if(!isset($_GET['page'])){
		include '404.php';
	} else{
		if($_GET['page'] == 'beranda'){
			include 'beranda.php';
		} elseif($_GET['page'] == 'cicilan-aktif'){
			include 'cicilan-aktif.php';
		} elseif($_GET['page'] == 'akun'){
			include 'akun.php';
		} elseif($_GET['page'] == 'lihat-cicilan'){
			include 'lihat-cicilan.php';
		} elseif($_GET['page'] == 'bayar-tagihan'){
			include 'kodeva.php';
		} else {
			include '404.php';
		}
	}

?>