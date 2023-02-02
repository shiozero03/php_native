<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>

<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Data Admin</h4>
      <div class="ms-auto text-end">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../kader">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Admin
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<hr class="border-primary border" style="margin-bottom: 0">
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Admin Datatable</h5>
      <button class="mt-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#adddata">
        <i class="fas fa-plus-square"></i> Tambah Admin
      </button>
      <a class="mt-2 btn btn-success text-white" target="__blank" href="../function/export-excel.php?export-admin=1">
        <i class="fas fa-download"></i> Ekspor Excel
      </a><br><br>
      <div class="table-responsive">
        <table
          id="zero_config"
          class="table table-striped table-bordered"
        >
          <thead>
            <tr class="bg-warning">
              <th><b>No</b></th>
              <th><b>Nama</b></th>
              <th><b>Username</b></th>
              <th><b>Aksi</b></th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; while($adm = mysqli_fetch_assoc($admin)){ ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $adm['nama'] ?></td>
              <td><?= $adm['username'] ?></td>
              <td>
                <button class="btn mt-2 btn-info" onclick="viewData(<?= $adm['id'] ?>)"><i class="fas fa-edit"></i></button>
                <button class="btn mt-2 btn-danger" onclick="deleteData(<?= $adm['id'] ?>)"><i class="fas fa-trash"></i></button>
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
          <h1 class="modal-title fs-5" id="adddataLabel">Tambah Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
        </div>
        <div class="modal-body">
          <form action="../function/add-data.php" method="post">
            <div class="form-group">
              <label>Nama *</label>
              <input required type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
              <label>Username *</label>
              <input required type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label>Password *</label>
              <input required type="password" name="password" class="form-control">
            </div>
            <div class="text-center mt-3"></div>
            <button type="submit" class="btn btn-info" name="add-admin">Simpan</button>
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
          <h1 class="modal-title fs-5" id="editdataLabel">Update Data Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
        </div>
        <div class="modal-body" id="editmodal">
          <form action="../function/update-data.php" method="post">
            <div class="form-group">
              <input required type="hidden" name="id" class="form-control" value="">
            </div>
            <div class="form-group">
              <label>Nama *</label>
              <input required type="text" name="nama" class="form-control" value="">
            </div>
            <div class="form-group">
              <label>Username *</label>
              <input required type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label>Password *</label>
              <input required type="password" name="password" class="form-control">
            </div>
            <div class="text-center mt-3"></div>
            <button type="submit" class="btn btn-info" name="update-admin">Simpan</button>
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
        window.location = '../function/delete-data.php?id-admin='+id;
      }
    });
  }

  function viewData(id){
    var editmodal = $('#editmodal')
    $.ajax({
        url : '../function/show-data.php?cekid='+id,
        method: 'GET',
        success: function(data) {
          $(editmodal).find('input[name="id"]').val(data.id)
          $(editmodal).find('input[name="nama"]').val(data.nama)
          $(editmodal).find('input[name="username"]').val(data.username)
          $(editmodal).find('input[name="password"]').val(data.password)

          $('#editdata').modal('show');
        }
    })
  }
</script>

<?php include('template/footer.php'); ?>
