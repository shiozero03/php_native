<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Data Pengukuran Balita</h4>
    </div>
  </div>
</div>
<hr class="border-primary border" style="margin-bottom: 0">
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Pengukuran Balita Datatable</h5>
      <a class="mt-2 btn btn-info text-white" href="view-data-pengukuran-balita-bulan-ini.php">
        <i class="fas me-2 fa-calendar-plus"></i> Lihat Data Bulan Ini
      </a>
      <a class="mt-2 btn btn-success text-white" onclick="openModal()" style="cursor:pointer;">
        <i class="fas fa-download"></i> Ekspor Excel
      </a><br><br>
      <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
          <thead>
            <tr class="bg-warning">
              <th><b>No</b></th>
              <th><b>Nama</b></th>
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
              <td><?= date('d-m-Y', strtotime($blt['tanggal_lahir'])) ?></td>
              <td><?= $blt['nama_ayah'] ?></td>
              <td><?= $blt['nama_ibu'] ?></td>
              <td>
                <a class="btn btn-secondary m-1" href="view-data-pengukuran-balita.php?idbalita=<?= $blt['id'] ?>"><i class="fas fa-eye"></i> Lihat Data</a>
                <button class="btn btn-info m-1" onclick="viewData(<?= $blt['id'] ?>)"><i class="fas fa-plus-square"></i> Tambah Data Bulan Ini</button>
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
          <h1 class="modal-title fs-5" id="adddataLabel">Tambah data Pengukuran Balita</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
        </div>
        <div class="modal-body" id="editmodal">
          <form action="../function/add-data.php" method="post">
            <div class="form-group">
              <label>Nama Bayi</label>
              <input readonly type="hidden" name="id" class="form-control" placeholder="Gunakan tanda titik untuk mengganti tanda koma" id="idbalita">
              <input readonly type="text" name="nama" class="form-control" placeholder="Gunakan tanda titik untuk mengganti tanda koma" id="nama">
            </div>
            <div class="form-group">
              <label>Tanggal Posyandu *</label>
              <input required type="date" name="tanggal" class="form-control" placeholder="Gunakan tanda titik untuk mengganti tanda koma" aria-describedby="tanggal">
            </div>
            <div class="form-group">
              <label>Berat Badan *</label>
              <div class="input-group">
                <input required type="text" name="berat_badan" class="form-control" placeholder="Gunakan tanda titik untuk mengganti tanda koma" aria-describedby="berat_badan">
                <div class="input-group-append">
                  <span class="input-group-text" id="berat_badan">Kg</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Tinggi Badan *</label>
              <div class="input-group">
                <input required type="text" name="tinggi_badan" class="form-control" placeholder="Gunakan tanda titik untuk mengganti tanda koma" aria-describedby="tinggi_badan">
                <div class="input-group-append">
                  <span class="input-group-text" id="tinggi_badan">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Lingkar Kepala *</label>
              <div class="input-group">
                <input required type="text" name="linkar_kepala" class="form-control" placeholder="Gunakan tanda titik untuk mengganti tanda koma" aria-describedby="linkar_kepala">
                <div class="input-group-append">
                  <span class="input-group-text" id="linkar_kepala">cm</span>
                </div>
              </div>
            </div>
            
            <div class="text-center mt-3"></div>
            <button type="submit" class="btn btn-info" name="add-ukuran">Simpan</button>
            <div class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close" >Close</div>
          </form>
        </div>
      </div>  
  </div>
</div>

<div class="modal fade" id="cekdata" tabindex="-1" aria-labelledby="cekdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="cekdataLabel">Pilih Bulan dan Tahun</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
        </div>
        <div class="modal-body" id="editmodal">
          <form action="../function/export-excel.php" method="post" target="__blank">
            <div class="form-group">
              <label>Pilih Bulan</label>
              <select class="form-control" placeholder="Gunakan tanda titik untuk mengganti tanda koma" name="bulan">
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
            <div class="form-group">
              <label>Masukkan Tahun</label>
              <input type="number" name="tahun" class="form-control" placeholder="Gunakan tanda titik untuk mengganti tanda koma" required>
            </div>
            <div class="text-center mt-3"></div>
            <button type="submit" class="btn btn-info" name="ekspor-ukuran">Ekspor</button>
            <div class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Close</div>
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
  function viewData(id){
    var editmodal = $('#editmodal')
    $.ajax({
        url : '../function/show-data.php?balitacekid='+id,
        method: 'GET',
        success: function(data) {
          document.getElementById('idbalita').value = data.id
          document.getElementById('nama').value = data.nama
          $('#adddata').modal('show');
        }
    })
  }
  function openModal(){
    $('#cekdata').modal('show')
  }
</script>

<?php include('template/footer.php'); ?>
