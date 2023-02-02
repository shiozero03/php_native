<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>
<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Data Imunisasi Balita</h4>
    </div>
  </div>
</div>
<hr class="border-primary border" style="margin-bottom: 0">
<?php
  if(isset($_GET['idbalita'])){
    $idget = $_GET['idbalita'];
    $customque = "SELECT * FROM data_imunisasi as datai JOIN balita as blt ON datai.id_balita = blt.id WHERE blt.id = ".$idget;
    $passque = mysqli_num_rows(mysqli_query($conn, $customque));
    if($passque == 0){
      ?>
        <script type="text/javascript">
          swal({
            title: "No Data !",
            text: "Data imunisasi belum ada !",
            icon: "error"
          }).then(function() {
            window.location = 'data-imunisasi-balita.php';
          });
        </script>
      <?php
    } else {
      $queinfo = mysqli_query($conn, "SELECT * FROM balita WHERE id = ".$idget);
      $blt = mysqli_fetch_assoc($queinfo);

      ?>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Imunisasi <?= $blt['nama'] ?></h5>
            <a class="mt-2 btn btn-info text-white" href="data-imunisasi-balita.php">
              <i class="fas fa-arrow-circle-left me-2"></i> Kembali
            </a><br><br>
            <div style="white-space: nowrap; overflow-x: scroll;">
              <table class="table table-striped table-bordered text-center">
                <thead>
                  <tr class="bg-warning">
                    <th><b>No</b></th>
                    <th><b>Nama</b></th>
                    <th><b>HB 0 (0 - 24 Jam)</b></th>
                    <th><b>BCG</b></th>
                    <th><b>Polio</b></th>
                    <th><b>DT-HB-Hib 1</b></th>
                    <th><b>Polio 2</b></th>
                    <th><b>DT-HB-Hib 2</b></th>
                    <th><b>Polio 3</b></th>
                    <th><b>DT-HB-Hib 3</b></th>
                    <th><b>Polio 4</b></th>
                    <th><b>IPV</b></th>
                    <th><b>Campak</b></th>
                    <th><b>DPT-HB-Hib Lanjutan</b></th>
                    <th><b>Campak Lanjutan</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <form action="../function/update-data.php" method="post">
                      <td>1</td>
                      <td><?= $blt['nama'] ?> <input type="hidden" name="id" class="form-control" value="<?= $blt['id'] ?>"></td>
                      <?php
                        $customque = "SELECT * FROM data_imunisasi WHERE id_balita = ".$blt['id'];
                        $passque = mysqli_query($conn, $customque);
                        $passcek = mysqli_fetch_assoc($passque)
                      ?>
                      <td>
                        <?php
                          if($passcek['hb_0'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['hb_0']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['bcg'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['bcg']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['polio'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['polio']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['dpt_hb_hib_1'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['dpt_hb_hib_1']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['polio_2'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['polio_2']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['dpt_hb_hib_2'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['dpt_hb_hib_2']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['polio_3'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['polio_3']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['dpt_hb_hib_3'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['dpt_hb_hib_3']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['polio_4'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['polio_4']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['ipv'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['ipv']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['campak'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['campak']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['dpt_hb_hib_lanjutan'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['dpt_hb_hib_lanjutan']));
                          }
                        ?>
                      </td>
                      <td>
                        <?php
                          if($passcek['campak_lanjutan'] == '0000-00-00'){
                            echo "<i class='text-danger'>Belum Imunisasi</i>";
                          } else {
                            echo date('d M Y', strtotime($passcek['campak_lanjutan']));
                          }
                        ?>
                      </td>
                    </form>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
?>
<?php
    }
  } elseif(isset($_GET['update-imunisasi'])) {
    $idget = $_GET['update-imunisasi'];
    $queinfo = mysqli_query($conn, "SELECT * FROM balita WHERE id = $idget");
    $blt = mysqli_fetch_assoc($queinfo);
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Imunisasi Balita Datatable <?= $passque ?></h5>
      <a class="mt-2 btn btn-info text-white" href="data-imunisasi-balita.php">
        <i class="fas fa-arrow-circle-left me-2"></i> Kembali
      </a><br><br>
      <div style="white-space: nowrap; overflow-x: scroll;">
        <table class="table table-striped table-bordered text-center">
          <thead>
            <tr class="bg-warning">
              <th><b>No</b></th>
              <th><b>Nama</b></th>
              <th><b>HB 0 (0 - 24 Jam)</b></th>
              <th><b>BCG</b></th>
              <th><b>Polio</b></th>
              <th><b>DT-HB-Hib 1</b></th>
              <th><b>Polio 2</b></th>
              <th><b>DT-HB-Hib 2</b></th>
              <th><b>Polio 3</b></th>
              <th><b>DT-HB-Hib 3</b></th>
              <th><b>Polio 4</b></th>
              <th><b>IPV</b></th>
              <th><b>Campak</b></th>
              <th><b>DPT-HB-Hib Lanjutan</b></th>
              <th><b>Campak Lanjutan</b></th>
              <th><b>Aksi</b></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <form action="../function/update-data.php" method="post">
                <td>1</td>
                <td><?= $blt['nama'] ?> <input type="hidden" name="id" class="form-control" value="<?= $blt['id'] ?>"></td>
                <?php
                  $customque = "SELECT * FROM data_imunisasi WHERE id_balita = ".$blt['id'];
                  $passque = mysqli_query($conn, $customque);
                  $passcek = mysqli_fetch_assoc($passque)
                ?>
                <td><input type="date" name=" hb_0" class="form-control" value="<?= $passcek['hb_0'] ?>"></td>
                <td><input type="date" name=" bcg" value="<?= $passcek['bcg'] ?>" class="form-control"></td>
                <td><input type="date" name=" polio" value="<?= $passcek['polio'] ?>" class="form-control"></td>
                <td><input type="date" name=" dpt_hb_hib_1" value="<?= $passcek['dpt_hb_hib_1'] ?>" class="form-control"></td>
                <td><input type="date" name=" polio_2" value="<?= $passcek['polio_2'] ?>" class="form-control"></td>
                <td><input type="date" name=" dpt_hb_hib_2" value="<?= $passcek['dpt_hb_hib_2'] ?>" class="form-control"></td>
                <td><input type="date" name=" polio_3" value="<?= $passcek['polio_3'] ?>" class="form-control"></td>
                <td><input type="date" name=" dpt_hb_hib_3" value="<?= $passcek['dpt_hb_hib_3'] ?>" class="form-control"></td>
                <td><input type="date" name=" polio_4" value="<?= $passcek['polio_4'] ?>" class="form-control"></td>
                <td><input type="date" name=" ipv" value="<?= $passcek['ipv'] ?>" class="form-control"></td>
                <td><input type="date" name=" campak" value="<?= $passcek['campak'] ?>" class="form-control"></td>
                <td><input type="date" name=" dpt_hb_hib_lanjutan" value="<?= $passcek['dpt_hb_hib_lanjutan'] ?>" class="form-control"></td>
                <td><input type="date" name=" campak_lanjutan" value="<?= $passcek['campak_lanjutan'] ?>" class="form-control"></td>
                <td>
                  <button class="btn btn-info" name="imunisasi">Simpan</button>
                </td>
              </form>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
  } else {
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Imunisasi Balita Datatable</h5>
      <a class="mt-2 btn btn-success text-white" target="__blank" href="../function/export-excel.php?export-imunisasi-balita=1">
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
                <a class="btn btn-secondary m-1" href="data-imunisasi-balita.php?idbalita=<?= $blt['id'] ?>"><i class="fas fa-eye"></i> Lihat Imunisasi</a>
                <a class="btn m-1 btn-info" href="data-imunisasi-balita.php?update-imunisasi=<?= $blt['id'] ?>"><i class="fas fa-edit"></i> Update Imunisasi</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
  }
  include ('template/script.php');
?>

<script type="text/javascript">
  $("#zero_config").DataTable();
</script>

<?php include('template/footer.php'); ?>
