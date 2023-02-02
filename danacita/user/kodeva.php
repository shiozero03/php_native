<?php
	include "../templateuser/header.php";
?>
<div class="top-next-payment p-3 rounded">
	<a href="?page=lihat-cicilan&code=<?= $_GET['code'] ?>&status=disetujui" ><i class="fas fa-arrow-left"></i></a>
	<br><br>
	<div class="d-flex align-items-center text-top-cover">
		<div class="me-3">
			<i class="fas fa-cash-register text-white rounded-circle p-2"></i>
		</div>
		<div class="text-top">
			<strong>Lanjutkan Pembayaran</strong><br>
			<small>Kode Referensi : <b><?= $_GET['code'] ?></b></small>
		</div>
	</div>
</div>
<div class="bg-white mt-2 rounded p-3 ringkasan-pembayaran text-center">
	<small>Total tagihan anda : Rp 700.000</small><br>
	<small>Batas Waktu Kode VA : </small><br>
	<b><p id="demo"></p></b>
	<?php if($_GET['metode'] == 'bri') { ?>
		<div>
			<h6><strong>Kode BRIVA Anda</strong></h6>
			<hr style="margin:0">
			<h3><strong>8091837817364208</strong></h3>
			<small><em>Silahkan bayar jumlah tagihan anda dengan kode briva diatas</em></small>
		</div>
	<?php } elseif($_GET['metode'] == 'bni') { ?>
		<div>
			<h6><strong>Kode BNI Virtual Account Anda</strong></h6>
			<hr style="margin:0">
			<h3><strong>8091837817364208</strong></h3>
			<small><em>Silahkan bayar jumlah tagihan anda dengan kode briva diatas</em></small>
		</div>
	<?php } elseif($_GET['metode'] == 'mandiri') { ?>
		<div>
			<h6><strong>Kode Mandiri Virtual Account Anda</strong></h6>
			<hr style="margin:0">
			<h3><strong>8091837817364208</strong></h3>
			<small><em>Silahkan bayar jumlah tagihan anda dengan kode va diatas</em></small>
		</div>
	<?php } elseif($_GET['metode'] == 'btn') { ?>
		<div>
			<h6><strong>Kode BTN Virtual Account Anda</strong></h6>
			<hr style="margin:0">
			<h3><strong>8091837817364208</strong></h3>
			<small><em>Silahkan bayar jumlah tagihan anda dengan kode va diatas</em></small>
		</div>
	<?php } elseif($_GET['metode'] == 'bca') { ?>
		<div>
			<h6><strong>Kode BCA Virtual Account Anda</strong></h6>
			<hr style="margin:0">
			<h3><strong>8091837817364208</strong></h3>
			<small><em>Silahkan bayar jumlah tagihan anda dengan kode va diatas</em></small>
		</div>
	<?php } elseif($_GET['metode'] == 'alfa') { ?>
		<div>
			<h6><strong>Kode Virtual Account Anda</strong></h6>
			<hr style="margin:0">
			<h3><strong>8091837817364208</strong></h3>
			<small>Serahkan kode ke kasir alfamart/alfamidi/indomaret untuk melakukan pembayaran</small><br>
			<small><em>Silahkan bayar jumlah tagihan anda dengan kode va diatas</em></small>
		</div>
	<?php } else{
		header('location: ?page=404');
	} ?>
	<br>
	<a href="#" class="bg-primary text-white text-decoration-none py-2 px-3 rounded">Sudah Membayar ?</a>

</div><br><br>
<script type="text/javascript" src="../assets/mystyle/js/timer.js"></script>
<?php
	include "../templateuser/footer.php";
?>