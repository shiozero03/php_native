<aside class="left-sidebar" data-sidebarbg="skin5">
  <div class="scroll-sidebar">
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="pt-4">
        <li class="sidebar-item" id="dashboard">
          <a class="sidebar-link waves-effect waves-dark" href="../kader" aria-expanded="false" >
            <i class="mdi me-2 mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark" href="data-kader.php" aria-expanded="false">
            <i class="fas me-2 fa-user-md"></i><span class="hide-menu">Data Kader </span>
          </a>
        </li>
        <!-- <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="mdi mdi-face"></i><span class="hide-menu">Balita </span>
          </a>
          <ul aria-expanded="false" class="collapse first-level"> -->
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="data-balita.php" aria-expanded="false">
                <i class="mdi mdi-face me-2"></i><span class="hide-menu">Data Balita </span>
              </a>
            </li>
            <li id="pengukuranbalita" class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="data-pengukuran-balita.php" aria-expanded="false">
                <i class="me-2 fas fa-balance-scale"></i><span class="hide-menu"> Pengukuran Balita </span>
              </a>
            </li>
            <li id="vitaminbalita" class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="data-vitamin-balita.php" aria-expanded="false">
                <i class="me-2 fas fa-medkit"></i><span class="hide-menu"> Pemberian Vitamin </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="data-imunisasi-balita.php" aria-expanded="false">
                <i class="me-2 fas fa-universal-access"></i><span class="hide-menu"> Pemberian Imunisasi </span>
              </a>
            </li>
            <li id="kmsbalita" class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="data-kms-balita.php" aria-expanded="false">
                <i class="me-2 fas fa-newspaper"></i><span class="hide-menu"> KMS Balita </span>
              </a>
            </li>
          <!-- </ul>
        </li> -->
        <!-- <li class="sidebar-item">
          <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="me-2 fas fa-user-plus"></i><span class="hide-menu">Ibu Hamil </span>
          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="data-ibu-hamil.php" aria-expanded="false">
                <i class="me-2 fas fa-file-archive"></i><span class="hide-menu">Data Ibu Hamil </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="data-pengukuran-ibu-hamil.php" aria-expanded="false">
                <i class="me-2 fas fa-balance-scale"></i><span class="hide-menu"> Pengukuran Ibu Hamil</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="data-suplemen-ibu-hamil.php" aria-expanded="false">
                <i class="me-2 fas fa-medkit"></i><span class="hide-menu"> Pemberian Suplemen </span>
              </a>
            </li>
          </ul>
        </li> -->
        <li class="sidebar-item">
          <a onclick="logoutData(<?= $id ?>)" class=" sidebar-link w-100 btn btn-danger d-flex align-items-center text-white">
            <i class="fa fa-power-off font-20 me-2"></i><span class="hide-menu">Logout</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<div class="page-wrapper">