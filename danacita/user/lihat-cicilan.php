<?php
	$status = $_GET['status'];
	include "../templateuser/header.php";
?>
<div class="top-next-payment p-3 rounded">
	<a href="?page=cicilan-aktif" ><i class="fas fa-arrow-left"></i></a>
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
<div class="bg-white mt-2 rounded p-3 ringkasan-pembayaran">
	<h6><strong>Ringkasan Pembayaran bulanan</strong></h6>
	<hr style="margin:0">
	<?php if($status == 'disetujui') : ?>
		<small><strong><em>Berjalan : 3 bulan</em></strong></small>
		<table class="table">
			<tr>
				<td>Status Pembiayaan</td>
				<td class="text-end"><button type="button" class="bg-success border-0 py-1 text-white px-2 rounded">Disetujui</button></td>
			</tr>
			<tr>
				<td>Total Pengajuan</td>
				<td class="text-end">Rp 3.968.000</td>
			</tr>
			<tr>
				<td>Durasi pembayaran yang diajukan</td>
				<td class="text-end">6 bulan</td>
			</tr>
			<tr>
				<td>Tagihan per bulan</td>
				<td class="text-end">Rp 700.000</td>
			</tr>
			<tr>
				<td>Sudah dibayar</td>
				<td class="text-end">Rp 2.100.000</td>
			</tr>
			<tr>
				<td>Sisa Tagihan</td>
				<td class="text-end">Rp 2.100.000</td>
			</tr>
			<tr>
				<td class="text-center">
					<button data-bs-toggle="modal" data-bs-target="#riwayat" class="bg-success border-0 px-3 py-2 rounded text-white">Riwayat Pembayaran</button>
				</td>
				<td class="text-center">
					<button data-bs-toggle="modal" data-bs-target="#sisa" class="bg-primary border-0 px-3 py-2 rounded text-white">Bayar sisa tagihan</button>
				</td>
			</tr>
		</table>
	<?php elseif($status == 'diproses') : ?>
		<small><strong><em>Belum Berjalan</em></strong></small>
		<table class="table">
			<tr>
				<td>Status Pembiayaan</td>
				<td class="text-end"><button type="button" class="bg-primary border-0 py-1 text-white px-2 rounded">Diproses</button></td>
			</tr>
			<tr>
				<td>Total Pengajuan</td>
				<td class="text-end">Rp 3.968.000</td>
			</tr>
			<tr>
				<td>Durasi pembayaran yang diajukan</td>
				<td class="text-end">6 bulan</td>
			</tr>
			<tr>
				<td>Tagihan per bulan</td>
				<td class="text-end">Rp 700.000</td>
			</tr>
		</table>
	<?php elseif($status == 'ditolak') : ?>
		<small><strong><em>Belum Berjalan</em></strong></small>
		<table class="table">
			<tr>
				<td>Status Pembiayaan</td>
				<td class="text-end"><button type="button" class="bg-danger border-0 py-1 text-white px-2 rounded">Ditolak</button></td>
			</tr>
			<tr>
				<td>Total Pengajuan</td>
				<td class="text-end">Rp 3.968.000</td>
			</tr>
			<tr>
				<td>Durasi pembayaran yang diajukan</td>
				<td class="text-end">6 bulan</td>
			</tr>
		</table>
	<?php elseif($status == 'draft') : ?>
		<small><strong><em>Belum Diajukan</em></strong></small>
		<table class="table">
			<tr>
				<td>Status Pembiayaan</td>
				<td class="text-end"><button type="button" class="bg-secondary border-0 py-1 text-white px-2 rounded">Draft</button></td>
			</tr>
			<tr>
				<td>Total Pengajuan</td>
				<td class="text-end">Rp 3.968.000</td>
			</tr>
			<tr>
				<td>Durasi pembayaran yang diajukan</td>
				<td class="text-end">6 bulan</td>
			</tr>
			<tr>
				<td>Tagihan per bulan</td>
				<td class="text-end">Rp 700.000</td>
			</tr>
			<tr>
				<td colspan="2" class="text-center"><a class="btn btn-primary" href="#" onclick="alert('Berhasil diajukan')">Ajukan Sekarang</a></td>
			</tr>
		</table>
	<?php endif ?>
</div>
<div class="modal fade" id="riwayat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Riwayat Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body row">
        <div class="border p-3 rounded pembayaran-cek col-5 ms-3 mt-3 me-2">
        	<h5>Pembayaran 1</h5>
        	<small>31 Desember 2022 13:02 WIB</small>
        	<p>Total Bayar : <b>Rp 700.000</b></p>
        </div>
        <div class="border p-3 rounded pembayaran-cek col-5 ms-4 mt-3 me-2">
        	<h5>Pembayaran 2</h5>
        	<small>31 Januari 2023 21:02 WIB</small>
        	<p>Total Bayar : <b>Rp 700.000</b></p>
        </div>
        <div class="border p-3 rounded pembayaran-cek col-5 ms-3 mt-3 me-2">
        	<h5>Pembayaran 3</h5>
        	<small>28 Februari 2023 10:09 WIB</small>
        	<p>Total Bayar : <b>Rp 700.000</b></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="sisa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Bayar Sisa Tagihan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	Pilih Metode Pembayaran
      	<hr>
      	<div class="border rounded p-3 mb-2">
	        <a href="?page=bayar-tagihan&code=<?= $_GET['code'] ?>&metode=bri" class="pembayaran-cek">
	        	<img src="../assets/images/bri.png" width="20%">
	        </a>
	    </div>
	    <div class="border rounded p-3 mb-2">
	        <a href="?page=bayar-tagihan&code=<?= $_GET['code'] ?>&metode=bni" class="pembayaran-cek">
	        	<img src="../assets/images/bni.png" width="20%">
	        </a>
	    </div>
	    <div class="border rounded p-3 mb-2">
	        <a href="?page=bayar-tagihan&code=<?= $_GET['code'] ?>&metode=mandiri" class="pembayaran-cek">
	        	<img src="../assets/images/mandiri.png" width="20%">
	        </a>
	    </div>
	    <div class="border rounded p-3 mb-2">
	        <a href="?page=bayar-tagihan&code=<?= $_GET['code'] ?>&metode=btn" class="pembayaran-cek">
	        	<img src="../assets/images/btn.png" width="20%">
	        </a>
	    </div>
	    <div class="border rounded p-3 mb-2">
	        <a href="?page=bayar-tagihan&code=<?= $_GET['code'] ?>&metode=bca" class="pembayaran-cek">
	        	<img src="../assets/images/bca.png" width="20%">
	        </a>
	    </div>
	    <div class="border rounded p-3 mb-2">
	        <a href="?page=bayar-tagihan&code=<?= $_GET['code'] ?>&metode=alfa" class="pembayaran-cek">
	        	<img src="../assets/images/alfa.png" width="20%">
	        </a>
	    </div>
	    <div class="border rounded p-3 mb-2">
	        <a href="?page=bayar-tagihan&code=<?= $_GET['code'] ?>&metode=alfa" class="pembayaran-cek">
	        	<img src="../assets/images/alfamidi.jpg" width="20%">
	        </a>
	    </div>
	    <div class="border rounded p-3 mb-2">
	        <a href="?page=bayar-tagihan&code=<?= $_GET['code'] ?>&metode=alfa" class="pembayaran-cek">
	        	<img src="../assets/images/indomaret.png" width="20%">
	        </a>
	    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
	include "../templateuser/footer.php";
?>