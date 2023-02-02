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

  $month = date('M');
  $year = date('Y');
  if($month == 'Jan'){ $bulan = 'Januari'; }
  elseif($month == 'Feb'){ $bulan = 'Februari'; }
  elseif($month == 'Mar'){ $bulan = 'Maret'; }
  elseif($month == 'Apr'){ $bulan = 'April'; }
  elseif($month == 'May'){ $bulan = 'Mei'; }
  elseif($month == 'Jun'){ $bulan = 'Juni'; }
  elseif($month == 'Jul'){ $bulan = 'Juli'; }
  elseif($month == 'Feb'){ $bulan = 'Februari'; }
  elseif($month == 'Aug'){ $bulan = 'Agustus'; }
  elseif($month == 'Sep'){ $bulan = 'September'; }
  elseif($month == 'Oct'){ $bulan = 'Oktober'; }
  elseif($month == 'Nov'){ $bulan = 'November'; }
  elseif($month == 'Dec'){ $bulan = 'Desember'; }
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Pengukuran Balita <?= $bulan ?> <?= $year ?> </h5>
      <a class="mt-2 btn btn-info text-white float-md-start" href="data-pengukuran-balita.php">
        <i class="fas fa-arrow-circle-left me-2"></i> Kembali
      </a>
      <form class=" mt-2 ms-2 float-md-start" action="../function/export-excel.php" method="post" target="__blank">
        <input type="hidden" name="bulan" value="<?= $bulan ?>">
        <input type="hidden" name="tahun" value="<?= $year ?>">
        <button class="btn text-white btn-success" name="ekspor-ukuran"><i class="fas me-2 fa-download"></i> Ekspor Excel</button>
      </form>
      <div class="clearfix"></div>
      <br><br>
      <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
          <thead>
            <tr class="bg-warning">
              <th><b>No</b></th>
              <th><b>Nama</b></th>
              <th><b>Tanggal Posyandu</b></th>
              <th><b>Berat Badan</b></th>
              <th><b>Tinggi Badan</b></th>
              <th><b>Lingkar Kepala</b></th>
              <th><b>Aksi</b></th>
            </tr>
          </thead>
          <?php

            $cekdate = mysqli_query($conn, "SELECT uk.id_balita, uk.id, uk.berat, uk.tinggi, uk.kepala, uk.tanggal, uk.bulan, uk.tahun, bal.nama FROM data_pengukuran as uk JOIN balita as bal ON uk.id_balita = bal.id WHERE uk.bulan = '".$bulan."' AND uk.tahun = ".$year);
          ?>
          <tbody>
            <?php $no = 1; while($cd = mysqli_fetch_assoc($cekdate)){ ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $cd['nama'] ?></td>
                <td><?= $cd['tanggal'] ?> <?= $cd['bulan'] ?> <?= $cd['tahun'] ?></td>
                <td><?= $cd['berat'] ?> Kg</td>
                <td><?= $cd['tinggi'] ?> cm</td>
                <td><?= $cd['kepala'] ?> cm</td>
                <td>
                  <button class="btn btn-info m-1" onclick="viewData(<?= $cd['id'] ?>)"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-danger m-1" onclick="deleteData(<?= $cd['id'] ?>)"><i class="fas fa-trash"></i></button>
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
              <input readonly type="text" id="nama" name="nama" class="form-control">
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
        url : '../function/show-data.php?ukurancuscekid='+id,
        method: 'GET',
        success: function(data) {
          document.getElementById("idbalita").value = id
          document.getElementById("nama").value = data.nama
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