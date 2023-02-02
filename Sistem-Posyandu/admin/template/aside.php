<aside class="left-sidebar" data-sidebarbg="skin5">
  <div class="scroll-sidebar">
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="pt-4">
        <li class="sidebar-item" id="dashboard">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../admin" aria-expanded="false" >
            <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data-admin.php" aria-expanded="false">
            <i class="fas fa-user-secret"></i><span class="hide-menu">Data Admin </span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="data-kader.php" aria-expanded="false">
            <i class="fas fa-user-md"></i><span class="hide-menu">Data Kader </span>
          </a>
        </li>
        <li class="sidebar-item">
          <a onclick="logoutData(<?= $id ?>)" style="cursor: pointer;" class="sidebar-link w-100 btn btn-danger d-flex align-items-center text-white">
            <i class="fa fa-power-off font-20 me-2"></i><span class="hide-menu">Logout</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<div class="page-wrapper">