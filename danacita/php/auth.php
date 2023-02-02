<?php

	if(isset($_POST['masuk'])){
		echo "<script>
				alert('Berhasil login')
				window.location.href='../user?page=beranda'
			</script>";
	} elseif(isset($_POST['daftar'])){
		echo "<script>
				alert('Berhasil daftar')
				window.location.href='../'
			</script>";
	}

?>