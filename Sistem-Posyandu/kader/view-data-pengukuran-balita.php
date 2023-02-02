<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>
<script type="text/javascript">
  document.getElementById('pengukuranbalita').classList.add('selected');
</script>
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Data Pengukuran Balita</h4>
    </div>
  </div>
</div>
<hr class="border-primary border" style="margin-bottom: 0">
<?php
$getid = $_GET['idbalita'];
$queinfo = mysqli_query($conn, "SELECT * FROM balita WHERE id = ".$getid);
$blt = mysqli_fetch_assoc($queinfo);
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Pengukuran <?= $blt['nama'] ?> Datatable</h5>
      <a class="mt-2 btn btn-info text-white" href="data-pengukuran-balita.php">
        <i class="fas fa-arrow-circle-left me-2"></i> Kembali
      </a><br><br>
      <table class="table table-bordered">
        <tr>
          <th><b>Nama</b></th>
          <td>: <?= $blt['nama'] ?></td>
        </tr>
        <tr>
          <th><b>Jenis Kelamin</b></th>
          <td>: <?= $blt['jenis_kelamin'] ?></td>
        </tr>
        <tr>
          <th><b>Tanggal Lahir</b></th>
          <td>: <?= $blt['tanggal_lahir'] ?></td>
        </tr>
      </table>

      <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
          <thead>
            <tr class="bg-warning">
              <th><b>No</b></th>
              <th><b>Tanggal Posyandu</b></th>
              <th><b>Berat Badan</b></th>
              <th><b>Tinggi Badan</b></th>
              <th><b>Lingkar Kepala</b></th>
              <th><b>Aksi</b></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $queryuk = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$getid." ORDER BY created_at DESC ");
              while($parsquery = mysqli_fetch_assoc($queryuk)){
              $no=1;
            ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $parsquery['tanggal'] ?> <?= $parsquery['bulan'] ?> <?= $parsquery['tahun'] ?></td>
                <td><?= $parsquery['berat'] ?> Kg</td>
                <td><?= $parsquery['tinggi'] ?> cm</td>
                <td><?= $parsquery['kepala'] ?> cm</td>
                <td>
                  <button class="btn btn-info m-1" onclick="viewData(<?= $parsquery['id'] ?>)"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-danger m-1" onclick="deleteData(<?= $parsquery['id'] ?>)"><i class="fas fa-trash"></i></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="adddata" tabindex="-1" aria-labelledby="adddataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="adddataLabel">Update data Pengukuran Balita</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
        </div>
        <div class="modal-body" id="editmodal">
          <form action="../function/update-data.php" method="post">
            <div class="form-group">
              <label>Nama Bayi</label>
              <input readonly type="hidden" id="idbalita" name="id" class="form-control">
              <input readonly type="text" name="nama" class="form-control" value="<?= $blt['nama'] ?>">
            </div>
            <div class="form-group">
              <label>Tanggal Posyandu</label>
              <input readonly type="text" id="tanggal" name="tanggal" class="form-control">
            </div>
            <div class="form-group">
              <label>Berat Badan *</label>
              <div class="input-group">
                <input required type="text" id="berat" name="berat" class="form-control" aria-describedby="berat_badan">
                <div class="input-group-append">
                  <span class="input-group-text" id="berat_badan">Kg</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Tinggi Badan *</label>
              <div class="input-group">
                <input required type="text" id="tinggi" name="tinggi" class="form-control" aria-describedby="tinggi_badan">
                <div class="input-group-append">
                  <span class="input-group-text" id="tinggi_badan">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Lingkar Kepala *</label>
              <div class="input-group">
                <input required type="text" id="kepala" name="kepala" class="form-control" aria-describedby="linkar_kepala">
                <div class="input-group-append">
                  <span class="input-group-text" id="linkar_kepala">cm</span>
                </div>
              </div>
            </div>
            
            <div class="text-center mt-3"></div>
            <button type="submit" class="btn btn-info" name="update-ukuran">Simpan</button>
            <div class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close" >Close</div>
          </form>
        </div>
      </div>  
  </div>
</div>

<?php include ('template/script.php'); ?>

<script type="text/javascript">
  $("#zero_config").DataTable();
</script>

<script type="text/javascript">
  function deleteData(id){
    swal({
      title: "Ingin menghapus data ?",
      text: "Setelah mengklik OK, data akan terhapus",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = '../function/delete-data.php?id-pengukuran='+id;
      }
    });
  }
  function viewData(id){
    var editmodal = $('#editmodal')
    $.ajax({
        url : '../function/show-data.php?ukurancekid='+id,
        method: 'GET',
        success: function(data) {
          document.getElementById("idbalita").value = id
          document.getElementById("tanggal").value = data.tanggal+' '+data.bulan+' '+data.tahun
          document.getElementById("berat").value = data.berat
          document.getElementById("tinggi").value = data.tinggi
          document.getElementById("kepala").value = data.kepala

          $('#adddata').modal('show');
        }
    })
  }
</script>

<?php include('template/footer.php'); ?>