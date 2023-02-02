<?php
	include "../templateuser/header.php";
?>
<style type="text/css">
	.profil{
		font-size: 24px;
	}
</style>
<div class="profil bg-white p-3">
	<div class="float-start">
		<i class="fas fa-user-circle"></i> Zero
	</div>
	<div class="float-end">
		<a href="../" onclick="alert('Anda berhasil logout')"><i class="fas fa-right-from-bracket text-danger"></i></a>
	</div>
	<div class="clearfix"></div>
</div>
<?php
	include "../templateuser/footer.php";
?>