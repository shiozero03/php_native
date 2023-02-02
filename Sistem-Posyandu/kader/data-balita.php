<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>

  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Data Balita</h4>
      </div>
    </div>
  </div>
  <hr class="border-primary border" style="margin-bottom: 0">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Balita Datatable</h5>
        <button class="mt-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#adddata">
          <i class="fas fa-plus-square"></i> Tambah Balita
        </button>
        <a class="mt-2 btn btn-success text-white" target="__blank" href="../function/export-excel.php?export-balita=1">
          <i class="fas fa-download"></i> Ekspor Excel
        </a><br><br>
        <div class="table-responsive">
          <table id="zero_config" class="table table-striped table-bordered">
            <thead>
              <tr class="bg-warning">
                <th><b>No</b></th>
                <th><b>Nama</b></th>
                <th><b>Jenis Kelamin</b></th>
                <th><b>Tanggal Lahir</b></th>
                <th><b>Alamat</b></th>
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
                <td><?= $blt['alamat'] ?></td>
                <td><?= $blt['nama_ayah'] ?></td>
                <td><?= $blt['nama_ibu'] ?></td>
                <td>
                  <button class="btn m-1 btn-info" onclick="viewData(<?= $blt['id'] ?>)"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-danger m-1" onclick="deleteData(<?= $blt['id'] ?>)"><i class="fas fa-trash"></i></button>
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
            <h1 class="modal-title fs-5" id="adddataLabel">Tambah Balita</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
          </div>
          <div class="modal-body">
            <form action="../function/add-data.php" method="post">
              <div class="form-group">
                <label>Nama Bayi *</label>
                <input required type="text" name="nama" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin Balita *</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="Laki - Laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir Balita *</label>
                <input required type="date" name="tanggal_lahir" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat Balita</label>
                <textarea name="alamat" class="form-control" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label>Nama Ayah *</label>
                <input required type="text" name="nama_ayah" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Ibu *</label>
                <input required type="text" name="nama_ibu" class="form-control">
              </div>
              <div class="text-center mt-3"></div>
              <button type="submit" class="btn btn-info" name="add-balita">Simpan</button>
              <div class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close" >Close</div>
            </form>
          </div>
        </div>  
    </div>
  </div>
  <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="editdataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="editdataLabel">Update Balita</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
          </div>
          <div class="modal-body" id="editmodal">
            <form action="../function/update-data.php" method="post">
              <div class="form-group">
                <label>Nama Bayi *</label>
                <input required type="hidden" name="id" id="idbalita" class="form-control">
                <input required type="text" name="nama" id="nama" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin Balita *</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                  <option value="Laki - Laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir Balita *</label>
                <input required type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat Balita</label>
                <textarea name="alamat" class="form-control" id="alamat" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label>Nama Ayah *</label>
                <input required type="text" id="nama_ayah" name="nama_ayah" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Ibu *</label>
                <input required type="text" id="nama_ibu" name="nama_ibu" class="form-control">
              </div>
              <div class="text-center mt-3"></div>
              <button type="submit" class="btn btn-info" name="update-balita">Simpan</button>
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
        window.location = '../function/delete-data.php?id-balita='+id;
      }
    });
  }
  function viewData(id){
    var editmodal = $('#editmodal')
    $.ajax({
        url : '../function/show-data.php?balitacekid='+id,
        method: 'GET',
        success: function(data) {
          document.getElementById("idbalita").value = data.id
          document.getElementById("nama").value = data.nama
          document.getElementById("jenis_kelamin").value = data.jenis_kelamin
          document.getElementById("tanggal_lahir").value = data.tanggal_lahir
          document.getElementById("alamat").value = data.alamat
          document.getElementById("nama_ayah").value = data.nama_ayah
          document.getElementById("nama_ibu").value = data.nama_ibu

          $('#editdata').modal('show');
        }
    })
  }
</script>

<?php include('template/footer.php'); ?>
