<?php
  
  include_once('../config/config.php');
  error_reporting(0);
 
  session_start();
  if (!isset($_SESSION['id'])) {
      ?>
      <script type="text/javascript">
        alert('Anda harus login terlebih dahulu');
        document.location.href = '../'
      </script>
      <?php
  }

  $id = $_SESSION['id'];

  $kadernumber = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE role = 1"));
  $balitanumber = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM balita"));
  $ibuhamilnumber = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ibu_hamil"));

  $kader = mysqli_query($conn, "SELECT * FROM user WHERE role = 1 ORDER BY nama ASC");

  $nama = mysqli_query($conn, "SELECT * FROM user WHERE id = $id ");
  $balita = mysqli_query($conn, "SELECT * FROM balita ORDER BY tanggal_lahir DESC ");
  $ibuhamil = mysqli_query($conn, "SELECT * FROM ibu_hamil ORDER BY updated_at DESC ");

  while($cek = mysqli_fetch_assoc($nama)){
    if($cek['role'] == 0){
      header("Location: ../admin/");
    }

    $name = $cek['nama'];
    $username = $cek['username'];
    $password = $cek['password'];
    $alamat = $cek['alamat'];
    $umur = $cek['umur'];
    $telp = $cek['telp'];
  }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />

  <title>Sistem Informasi Posyandu - Kader</title>

  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <link href="../dist/css/style.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css"/>
  <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>

  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">      
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a class="navbar-brand" href="../kader">
            <b class="logo-icon ps-2">
              <img src="../assets/images/favicon.png" alt="homepage" class="light-logo" width="25" />
            </b>
            <span class="logo-text ms-2">
              <b>POSYANDU</b>
            </span>
          </a>
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)" >
            <i class="ti-menu ti-close"></i>
          </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a
                class="nav-link sidebartoggler waves-effect waves-light"
                href="javascript:void(0)"
                data-sidebartype="mini-sidebar"
                ><i class="mdi mdi-menu font-24"></i
              ></a>
            </li>
          </ul>
          <ul class="navbar-nav float-end">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"/>
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-center" data-bs-toggle="modal" data-bs-target="#profildata" style="cursor: pointer;">
                  <i class="mdi mdi-account me-1 ms-1"></i> <?= $name ?>
                </a>
                <a class="dropdown-item text-danger text-center" onclick="logoutData(<?= $id ?>)" style="cursor: pointer;">
                  <i class="fa fa-power-off me-1 ms-1"></i> Logout
                </a>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="modal fade" id="profildata" tabindex="-1" aria-labelledby="profildataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="profildataLabel">Data Profil</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
          </div>
          <div class="modal-body" id="editmodal">
            <form action="../function/update-data.php" method="post">
              <div class="form-group">
                <input required type="text" name="id" class="form-control" value="<?= $id ?>">
              </div>
              <div class="form-group">
                <label>Nama *</label>
                <input required type="text" name="nama" class="form-control" value="<?= $name ?>">
              </div>
              <div class="form-group">
                <label>Username *</label>
                <input required type="text" name="username" class="form-control" value="<?= $username ?>">
              </div>
              <div class="form-group">
                <label>Password *</label>
                <input required type="password" name="password" class="form-control" value="<?= $password ?>">
              </div>
              <div class="form-group">
                <label>Alamat *</label>
                <textarea required name="alamat" class="form-control" rows="5"><?= $alamat ?></textarea>
              </div>
              <div class="form-group">
                <label>Umur *</label>
                <input required type="number" name="umur" class="form-control" value="<?= $umur ?>">
              </div>
              <div class="form-group">
                <label>No. Telepon </label>
                <input type="number" name="telp" class="form-control" value="<?= $telp ?>">
              </div>
              <div class="text-center mt-3"></div>
              <button type="submit" class="btn btn-info" name="update-profil">Simpan</button>
              <div class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close" >Close</div>
            </form>
          </div>
        </div>  
    </div>
  </div>