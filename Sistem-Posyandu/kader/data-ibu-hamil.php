<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>

  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Data Ibu Hamil</h4>
      </div>
    </div>
  </div>
  <hr class="border-primary border" style="margin-bottom: 0">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ibu Hamil Datatable</h5>
        <button class="mt-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#adddata">
          <i class="fas fa-plus-square"></i> Tambah Ibu Hamil
        </button>
        <a class="mt-2 btn btn-success text-white" target="__blank" href="../function/export-excel.php?export-ibu-hamil=1">
          <i class="fas fa-download"></i> Ekspor Excel
        </a><br><br>
        <div class="table-responsive">
          <table id="zero_config" class="table table-striped table-bordered">
            <thead>
              <tr class="bg-warning">
                <th><b>No</b></th>
                <th><b>Nama</b></th>
                <th><b>Alamat</b></th>
                <th><b>Umur</b></th>
                <th><b>No. Telepon</b></th>
                <th><b>Usia Kandungan</b></th>
                <th><b>Aksi</b></th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; while($ibham = mysqli_fetch_assoc($ibuhamil)){ ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $ibham['nama'] ?></td>
                <td><?= $ibham['alamat'] ?></td>
                <td><?= $ibham['umur'] ?> tahun</td>
                <td><?= $ibham['telp'] ?></td>
                <td><?= $ibham['usia_kandungan'] ?> bulan</td>
                <td>
                  <button class="btn m-1 btn-info" onclick="viewData(<?= $ibham['id'] ?>)"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-danger m-1" onclick="deleteData(<?= $ibham['id'] ?>)"><i class="fas fa-trash"></i></button>
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
            <h1 class="modal-title fs-5" id="adddataLabel">Tambah Ibu Hamil</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
          </div>
          <div class="modal-body">
            <form action="../function/add-data.php" method="post">
              <div class="form-group">
                <label>Nama *</label>
                <input required type="text" name="nama" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat *</label>
                <textarea required name="alamat" class="form-control" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label>Umur (tahun) *</label>
                <input required type="number" name="umur" class="form-control">
              </div>
              <div class="form-group">
                <label>No. Telepon </label>
                <input type="number" name="telp" class="form-control">
              </div>
              <div class="form-group">
                <label>Usia Kandungan (bulan)*</label>
                <input required type="number" name="usia_kandungan" max="10" class="form-control">
              </div>
              <div class="text-center mt-3"></div>
              <button type="submit" class="btn btn-info" name="add-ibu-hamil">Simpan</button>
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
            <h1 class="modal-title fs-5" id="editdataLabel">Update Ibu Hamil</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
          </div>
          <div class="modal-body" id="editmodal">
            <form action="../function/update-data.php" method="post">
              <div class="form-group">
                <input required type="hidden" name="id" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama *</label>
                <input required type="text" name="nama" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat *</label>
                <textarea required name="alamat" class="form-control" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label>Umur (tahun)*</label>
                <input required type="number" name="umur" class="form-control">
              </div>
              <div class="form-group">
                <label>No. Telepon </label>
                <input type="number" name="telp" class="form-control">
              </div>
              <div class="form-group">
                <label>Usia Kandungan (bulan)*</label>
                <input required type="number" name="usia_kandungan" max="10" class="form-control">
              </div>
              <div class="text-center mt-3"></div>
              <button type="submit" class="btn btn-info" name="update-ibu-hamil">Simpan</button>
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
        window.location = '../function/delete-data.php?id-ibu-hamil='+id;
      }
    });
  }
  function viewData(id){
    var editmodal = $('#editmodal')
    $.ajax({
        url : '../function/show-data.php?cekidibuhamil='+id,
        method: 'GET',
        success: function(data) {
          $(editmodal).find('input[name="id"]').val(data.id)
          $(editmodal).find('input[name="nama"]').val(data.nama)
          $(editmodal).find('textarea[name="alamat"]').val(data.alamat)
          $(editmodal).find('input[name="umur"]').val(data.umur)
          $(editmodal).find('input[name="telp"]').val(data.telp)
          $(editmodal).find('input[name="usia_kandungan"]').val(data.usia_kandungan)

          $('#editdata').modal('show');
        }
    })
  }
</script>

<?php include('template/footer.php'); ?>
