<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>

  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Data KMS Balita</h4>
      </div>
    </div>
  </div>
  <hr class="border-primary border" style="margin-bottom: 0">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">KMS Datatable</h5>
        <br>
        <div class="table-responsive">
          <table id="zero_config" class="table table-striped table-bordered">
            <thead>
              <tr class="bg-warning">
                <th><b>No</b></th>
                <th><b>Nama</b></th>
                <th><b>Jenis Kelamin</b></th>
                <th><b>Tanggal Lahir</b></th>
                <th><b>Nama Ayah</b></th>
                <th><b>Nama Ibu</b></th>
                <th><b>Aksi</b></th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; while($blt = mysqli_fetch_assoc($balita)){ ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $blt['nama'] ?></td>
                <td><?= $blt['jenis_kelamin'] ?></td>
                <td><?= date('d-m-Y', strtotime($blt['tanggal_lahir'])) ?></td>
                <td><?= $blt['nama_ayah'] ?></td>
                <td><?= $blt['nama_ibu'] ?></td>
                <td>
                  <a class="btn m-1 btn-info" href="view-data-kms-balita.php?balitaid=<?= $blt['id'] ?>"><i class="fas fa-eye"></i> Lihat KMS</a>
                  <a class="btn btn-success text-white m-1" target="__blank" href="../function/export-excel.php?export-kms=<?= $blt['id'] ?>"><i class="fas fa-download"></i> Expor Excel</a>
                </td>
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
