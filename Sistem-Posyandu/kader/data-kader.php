<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>

<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Data Kader</h4>
    </div>
  </div>
</div>
<hr class="border-primary border" style="margin-bottom: 0">
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Kader Datatable</h5>
      <a class="mt-2 btn btn-success text-white" target="__blank" href="../function/export-excel.php?export-kader=1">
        <i class="fas fa-download"></i> Ekspor Excel
      </a><br><br>
      <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
          <thead>
            <tr class="bg-warning">
              <th><b>No</b></th>
              <th><b>Nama</b></th>
              <th><b>Username</b></th>
              <th><b>Alamat</b></th>
              <th><b>Umur</b></th>
              <th><b>No. Telepon</b></th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; while($kad = mysqli_fetch_assoc($kader)){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $kad['nama'] ?></td>
              <td><?= $kad['username'] ?></td>
              <td><?= $kad['alamat'] ?></td>
              <td><?= $kad['umur'] ?> tahun</td>
              <td><?= $kad['telp'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include ('template/script.php'); ?>

<script type="text/javascript">
  $("#zero_config").DataTable();
</script>

<?php include('template/footer.php'); ?>
