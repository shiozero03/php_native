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

  $adminnumber = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE role = 0"));
  $kadernumber = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE role = 1"));
  $balitanumber = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM balita"));
  
  $admin = mysqli_query($conn, "SELECT * FROM user WHERE role = 0 ORDER BY nama ASC");
  $kader = mysqli_query($conn, "SELECT * FROM user WHERE role = 1 ORDER BY nama ASC");

  $nama = mysqli_query($conn, "SELECT * FROM user WHERE id = $id ");
  while($cek = mysqli_fetch_assoc($nama)){
    if($cek['role'] == 1){
      header("Location: ../kader/");
    }

    $name = $cek['nama'];
  }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="pos pelayanan terpadu, posyandu" />
  <meta name="description" content="Sistem informasi posyandu yang berisikan data balita"/>
  <meta name="author" content="Zero">
  <meta name="robots" content="noindex,nofollow" />

  <title>Sistem Informasi Posyandu - Admin</title>

  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <link href="../dist/css/style.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css"/>
  <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>
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
                
                <a class="dropdown-item text-center" href="#">
                  <i class="mdi mdi-account me-1 ms-1"></i> <?= $name; ?>
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