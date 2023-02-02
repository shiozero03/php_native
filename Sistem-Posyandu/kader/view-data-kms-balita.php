<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>
  <script type="text/javascript">
    document.getElementById('kmsbalita').classList.add('selected');
  </script>
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Data KMS Balita</h4>
      </div>
    </div>
  </div>
  <?php
    $setuskms = mysqli_query($conn, "SELECT * FROM balita WHERE id = ".$_GET['balitaid']);
    $getuskms = mysqli_fetch_assoc($setuskms);

    $setukkms1 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=1");
    $setukkms2 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=2");
    $setukkms3 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=3");
    $setukkms4 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=4");
    $setukkms5 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=5");
    $setukkms6 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=6");
    $setukkms7 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=7");
    $setukkms8 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=8");
    $setukkms9 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=9");
    $setukkms10 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=10");
    $setukkms11 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=11");
    $setukkms12 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=12");
    $setukkms13 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=13");
    $setukkms14 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=14");
    $setukkms15 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=15");
    $setukkms16 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=16");
    $setukkms17 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=17");
    $setukkms18 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=18");
    $setukkms19 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=19");
    $setukkms20 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=20");
    $setukkms21 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=21");
    $setukkms22 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=22");
    $setukkms23 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=23");
    $setukkms24 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=24");
    $setukkms25 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=25");
    $setukkms26 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=26");
    $setukkms27 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=27");
    $setukkms28 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=28");
    $setukkms29 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=29");
    $setukkms30 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=30");
    $setukkms31 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=31");
    $setukkms32 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=32");
    $setukkms33 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=33");
    $setukkms34 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=34");
    $setukkms35 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=35");
    $setukkms36 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=36");
    $setukkms37 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=37");
    $setukkms38 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=38");
    $setukkms39 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=39");
    $setukkms40 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=40");
    $setukkms41 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=41");
    $setukkms42 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=42");
    $setukkms43 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=43");
    $setukkms44 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=44");
    $setukkms45 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=45");
    $setukkms46 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=46");
    $setukkms47 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=47");
    $setukkms48 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=48");
    $setukkms49 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=49");
    $setukkms50 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=50");
    $setukkms51 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=51");
    $setukkms52 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=52");
    $setukkms53 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=53");
    $setukkms54 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=54");
    $setukkms55 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=55");
    $setukkms56 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=56");
    $setukkms57 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=57");
    $setukkms58 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=58");
    $setukkms59 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=59");
    $setukkms60 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['balitaid']." AND bulan_ke=60");
    $getukkms1 = mysqli_fetch_assoc($setukkms1);
    $getukkms2 = mysqli_fetch_assoc($setukkms2);
    $getukkms3 = mysqli_fetch_assoc($setukkms3);
    $getukkms4 = mysqli_fetch_assoc($setukkms4);
    $getukkms5 = mysqli_fetch_assoc($setukkms5);
    $getukkms6 = mysqli_fetch_assoc($setukkms6);
    $getukkms7 = mysqli_fetch_assoc($setukkms7);
    $getukkms8 = mysqli_fetch_assoc($setukkms8);
    $getukkms9 = mysqli_fetch_assoc($setukkms9);
    $getukkms10 = mysqli_fetch_assoc($setukkms10);
    $getukkms11 = mysqli_fetch_assoc($setukkms11);
    $getukkms12 = mysqli_fetch_assoc($setukkms12);
    $getukkms13 = mysqli_fetch_assoc($setukkms13);
    $getukkms14 = mysqli_fetch_assoc($setukkms14);
    $getukkms15 = mysqli_fetch_assoc($setukkms15);
    $getukkms16 = mysqli_fetch_assoc($setukkms16);
    $getukkms17 = mysqli_fetch_assoc($setukkms17);
    $getukkms18 = mysqli_fetch_assoc($setukkms18);
    $getukkms19 = mysqli_fetch_assoc($setukkms19);
    $getukkms20 = mysqli_fetch_assoc($setukkms20);
    $getukkms21 = mysqli_fetch_assoc($setukkms21);
    $getukkms22 = mysqli_fetch_assoc($setukkms22);
    $getukkms23 = mysqli_fetch_assoc($setukkms23);
    $getukkms24 = mysqli_fetch_assoc($setukkms24);
    $getukkms25 = mysqli_fetch_assoc($setukkms25);
    $getukkms26 = mysqli_fetch_assoc($setukkms26);
    $getukkms27 = mysqli_fetch_assoc($setukkms27);
    $getukkms28 = mysqli_fetch_assoc($setukkms28);
    $getukkms29 = mysqli_fetch_assoc($setukkms29);
    $getukkms30 = mysqli_fetch_assoc($setukkms30);
    $getukkms31 = mysqli_fetch_assoc($setukkms31);
    $getukkms32 = mysqli_fetch_assoc($setukkms32);
    $getukkms33 = mysqli_fetch_assoc($setukkms33);
    $getukkms34 = mysqli_fetch_assoc($setukkms34);
    $getukkms35 = mysqli_fetch_assoc($setukkms35);
    $getukkms36 = mysqli_fetch_assoc($setukkms36);
    $getukkms37 = mysqli_fetch_assoc($setukkms37);
    $getukkms38 = mysqli_fetch_assoc($setukkms38);
    $getukkms39 = mysqli_fetch_assoc($setukkms39);
    $getukkms40 = mysqli_fetch_assoc($setukkms40);
    $getukkms41 = mysqli_fetch_assoc($setukkms41);
    $getukkms42 = mysqli_fetch_assoc($setukkms42);
    $getukkms43 = mysqli_fetch_assoc($setukkms43);
    $getukkms44 = mysqli_fetch_assoc($setukkms44);
    $getukkms45 = mysqli_fetch_assoc($setukkms45);
    $getukkms46 = mysqli_fetch_assoc($setukkms46);
    $getukkms47 = mysqli_fetch_assoc($setukkms47);
    $getukkms48 = mysqli_fetch_assoc($setukkms48);
    $getukkms49 = mysqli_fetch_assoc($setukkms49);
    $getukkms50 = mysqli_fetch_assoc($setukkms50);
    $getukkms51 = mysqli_fetch_assoc($setukkms51);
    $getukkms52 = mysqli_fetch_assoc($setukkms52);
    $getukkms53 = mysqli_fetch_assoc($setukkms53);
    $getukkms54 = mysqli_fetch_assoc($setukkms54);
    $getukkms55 = mysqli_fetch_assoc($setukkms55);
    $getukkms56 = mysqli_fetch_assoc($setukkms56);
    $getukkms57 = mysqli_fetch_assoc($setukkms57);
    $getukkms58 = mysqli_fetch_assoc($setukkms58);
    $getukkms59 = mysqli_fetch_assoc($setukkms59);
    $getukkms60 = mysqli_fetch_assoc($setukkms60);

  ?>
  <div class="inputcek" style="display: none;">
    <input type="" name="" value="<?= $getukkms1['berat'] ?>" id="bulanke1">
    <input type="" name="" value="<?= $getukkms2['berat'] ?>" id="bulanke2">
    <input type="" name="" value="<?= $getukkms3['berat'] ?>" id="bulanke3">
    <input type="" name="" value="<?= $getukkms4['berat'] ?>" id="bulanke4">
    <input type="" name="" value="<?= $getukkms5['berat'] ?>" id="bulanke5">
    <input type="" name="" value="<?= $getukkms6['berat'] ?>" id="bulanke6">
    <input type="" name="" value="<?= $getukkms7['berat'] ?>" id="bulanke7">
    <input type="" name="" value="<?= $getukkms8['berat'] ?>" id="bulanke8">
    <input type="" name="" value="<?= $getukkms9['berat'] ?>" id="bulanke9">
    <input type="" name="" value="<?= $getukkms10['berat'] ?>" id="bulanke10">
    <input type="" name="" value="<?= $getukkms11['berat'] ?>" id="bulanke11">
    <input type="" name="" value="<?= $getukkms12['berat'] ?>" id="bulanke12">
    <input type="" name="" value="<?= $getukkms13['berat'] ?>" id="bulanke13">
    <input type="" name="" value="<?= $getukkms14['berat'] ?>" id="bulanke14">
    <input type="" name="" value="<?= $getukkms15['berat'] ?>" id="bulanke15">
    <input type="" name="" value="<?= $getukkms16['berat'] ?>" id="bulanke16">
    <input type="" name="" value="<?= $getukkms17['berat'] ?>" id="bulanke17">
    <input type="" name="" value="<?= $getukkms18['berat'] ?>" id="bulanke18">
    <input type="" name="" value="<?= $getukkms19['berat'] ?>" id="bulanke19">
    <input type="" name="" value="<?= $getukkms20['berat'] ?>" id="bulanke30">
    <input type="" name="" value="<?= $getukkms21['berat'] ?>" id="bulanke21">
    <input type="" name="" value="<?= $getukkms22['berat'] ?>" id="bulanke22">
    <input type="" name="" value="<?= $getukkms23['berat'] ?>" id="bulanke23">
    <input type="" name="" value="<?= $getukkms24['berat'] ?>" id="bulanke24">
    <input type="" name="" value="<?= $getukkms25['berat'] ?>" id="bulanke25">
    <input type="" name="" value="<?= $getukkms26['berat'] ?>" id="bulanke26">
    <input type="" name="" value="<?= $getukkms27['berat'] ?>" id="bulanke27">
    <input type="" name="" value="<?= $getukkms28['berat'] ?>" id="bulanke28">
    <input type="" name="" value="<?= $getukkms29['berat'] ?>" id="bulanke29">
    <input type="" name="" value="<?= $getukkms30['berat'] ?>" id="bulanke20">
    <input type="" name="" value="<?= $getukkms31['berat'] ?>" id="bulanke31">
    <input type="" name="" value="<?= $getukkms32['berat'] ?>" id="bulanke32">
    <input type="" name="" value="<?= $getukkms33['berat'] ?>" id="bulanke33">
    <input type="" name="" value="<?= $getukkms34['berat'] ?>" id="bulanke34">
    <input type="" name="" value="<?= $getukkms35['berat'] ?>" id="bulanke35">
    <input type="" name="" value="<?= $getukkms36['berat'] ?>" id="bulanke36">
    <input type="" name="" value="<?= $getukkms37['berat'] ?>" id="bulanke37">
    <input type="" name="" value="<?= $getukkms38['berat'] ?>" id="bulanke38">
    <input type="" name="" value="<?= $getukkms39['berat'] ?>" id="bulanke39">
    <input type="" name="" value="<?= $getukkms40['berat'] ?>" id="bulanke40">
    <input type="" name="" value="<?= $getukkms41['berat'] ?>" id="bulanke41">
    <input type="" name="" value="<?= $getukkms42['berat'] ?>" id="bulanke42">
    <input type="" name="" value="<?= $getukkms43['berat'] ?>" id="bulanke43">
    <input type="" name="" value="<?= $getukkms44['berat'] ?>" id="bulanke44">
    <input type="" name="" value="<?= $getukkms45['berat'] ?>" id="bulanke45">
    <input type="" name="" value="<?= $getukkms46['berat'] ?>" id="bulanke46">
    <input type="" name="" value="<?= $getukkms47['berat'] ?>" id="bulanke47">
    <input type="" name="" value="<?= $getukkms48['berat'] ?>" id="bulanke48">
    <input type="" name="" value="<?= $getukkms49['berat'] ?>" id="bulanke49">
    <input type="" name="" value="<?= $getukkms50['berat'] ?>" id="bulanke50">
    <input type="" name="" value="<?= $getukkms51['berat'] ?>" id="bulanke51">
    <input type="" name="" value="<?= $getukkms52['berat'] ?>" id="bulanke52">
    <input type="" name="" value="<?= $getukkms53['berat'] ?>" id="bulanke53">
    <input type="" name="" value="<?= $getukkms54['berat'] ?>" id="bulanke54">
    <input type="" name="" value="<?= $getukkms55['berat'] ?>" id="bulanke55">
    <input type="" name="" value="<?= $getukkms56['berat'] ?>" id="bulanke56">
    <input type="" name="" value="<?= $getukkms57['berat'] ?>" id="bulanke57">
    <input type="" name="" value="<?= $getukkms58['berat'] ?>" id="bulanke58">
    <input type="" name="" value="<?= $getukkms59['berat'] ?>" id="bulanke59">
    <input type="" name="" value="<?= $getukkms60['berat'] ?>" id="bulanke60">
  </div>
  <hr class="border-primary border" style="margin-bottom: 0">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">KMS <?= $getuskms['nama'] ?></h5>
        <input type="hidden" name="" id="namabalita" value="<?= $getuskms['nama'] ?>">
        <a class="mt-2 btn btn-info text-white float-md-start" href="data-kms-balita.php">
          <i class="fas fa-arrow-circle-left me-2"></i> Kembali
        </a>
        <a class="btn btn-success text-white mt-2 ms-2" target="__blank" href="../function/export-excel.php?export-kms=<?= $getuskms['id'] ?>">
          <i class="fas fa-download"></i> Export Excel
        </a>
        <a class="btn btn-danger text-white mt-2 ms-2" target="__blank" onclick="downloadPDF()">
          <i class="fas fa-print"></i> Expor PDF
        </a>
        <br><br><br>
      <?php if($getuskms['jenis_kelamin'] == 'Laki - Laki'){ ?>
        <div class="text-center border border-dark">
          <div class="bg-info text-white pt-4 pb-2 border-dark border-bottom border-5">
            <div class="border border-white float-md-start col-md-3 ms-md-3">
              <h1 style="font-size: 70px;">KMS</h1>
              <p style="margin-top: -15px; font-weight: bold;">KARTU MENUJU SEHAT</p>
              <hr style="margin-top: -15px">
              <p style="margin-top: -15px;"><em>Untuk Laki - Laki</em></p>
            </div>
            <div class="float-md-start col-md-8 ms-md-3">
              <table class="table text-start text-white">
                <tr>
                  <th width="25%"><b>Nama</b></th>
                  <td> : <?= $getuskms['nama'] ?></td>
                </tr>
                <tr>
                  <th><b>Tanggal Lahir</b></th>
                  <td> : <?= $getuskms['tanggal_lahir'] ?></td>
                </tr>
              </table>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="bg-white p-2" style="white-space: nowrap; overflow-x: scroll;">
            <div style="width: 1200px;" class="text-center">
             <canvas id="myChart" style="height: 1500px"></canvas>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="text-center border border-dark">
          <div class="bg-danger text-white pt-4 pb-2 border-dark border-bottom border-5">
            <div class="border border-white float-md-start col-md-3 ms-md-3">
              <h1 style="font-size: 70px;">KMS</h1>
              <p style="margin-top: -15px; font-weight: bold;">KARTU MENUJU SEHAT</p>
              <hr style="margin-top: -15px">
              <p style="margin-top: -15px;"><em>Untuk Perempuan</em></p>
            </div>
            <div class="float-md-start col-md-8 ms-md-3">
              <table class="table text-start text-white">
                <tr>
                  <th width="25%"><b>Nama</b></th>
                  <td> : <?= $getuskms['nama'] ?></td>
                </tr>
                <tr>
                  <th><b>Tanggal Lahir</b></th>
                  <td> : <?= $getuskms['tanggal_lahir'] ?></td>
                </tr>
              </table>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="bg-white p-2" style="white-space: nowrap; overflow-x: scroll;">
            <div style="width: 1200px;" class="text-center">
             <canvas id="myChart" style="height: 1500px"></canvas>
            </div>
          </div>
        </div>
      <?php } ?>       
      </div>
    </div>
  </div>
  <div id="content-1" class="d-none">
    <h1 style="font-size: 85px;">KMS</h1>
  </div>
  <div id="content-2" class="d-none">
    <p style="margin-top: -30px; font-weight: bold;">KARTU MENUJU SEHAT</p>
  </div>
  <div id="content-3" class="d-none">
    <h3><b>Nama</b></h3><h3><b>Tanggal Lahir</b></h3>
  </div>
  <div id="content-4" class="d-none">
    <h3><b>: <?= $getuskms['nama'] ?></b></h3><h3><b>: <?= date('d/m/Y', strtotime($getuskms['tanggal_lahir'])) ?></b></h3>
  </div>
  
<?php include ('template/script.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.min.js" integrity="sha512-hA0/Bv8+ywjnycIbT0xuCWB1sRgOzPmksIv4Qfvqv0DOKP02jSor8oHuIKpweUCsxiWGIl+QaV0E82mPQ7/gyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>

<script type="text/javascript">
  var dt1 = document.getElementById('bulanke1').value
  var dt2 = document.getElementById('bulanke2').value
  var dt3 = document.getElementById('bulanke3').value
  var dt4 = document.getElementById('bulanke4').value
  var dt5 = document.getElementById('bulanke5').value
  var dt6 = document.getElementById('bulanke6').value
  var dt7 = document.getElementById('bulanke7').value
  var dt8 = document.getElementById('bulanke8').value
  var dt9 = document.getElementById('bulanke9').value
  var dt10 = document.getElementById('bulanke10').value
  var dt11 = document.getElementById('bulanke11').value
  var dt12 = document.getElementById('bulanke12').value
  var dt13 = document.getElementById('bulanke13').value
  var dt14 = document.getElementById('bulanke14').value
  var dt15 = document.getElementById('bulanke15').value
  var dt16 = document.getElementById('bulanke16').value
  var dt17 = document.getElementById('bulanke17').value
  var dt18 = document.getElementById('bulanke18').value
  var dt19 = document.getElementById('bulanke19').value
  var dt20 = document.getElementById('bulanke20').value
  var dt21 = document.getElementById('bulanke21').value
  var dt22 = document.getElementById('bulanke22').value
  var dt23 = document.getElementById('bulanke23').value
  var dt24 = document.getElementById('bulanke24').value
  var dt25 = document.getElementById('bulanke25').value
  var dt26 = document.getElementById('bulanke26').value
  var dt27 = document.getElementById('bulanke27').value
  var dt28 = document.getElementById('bulanke28').value
  var dt29 = document.getElementById('bulanke29').value
  var dt30 = document.getElementById('bulanke30').value
  var dt31 = document.getElementById('bulanke31').value
  var dt32 = document.getElementById('bulanke32').value
  var dt33 = document.getElementById('bulanke33').value
  var dt34 = document.getElementById('bulanke34').value
  var dt35 = document.getElementById('bulanke35').value
  var dt36 = document.getElementById('bulanke36').value
  var dt37 = document.getElementById('bulanke37').value
  var dt38 = document.getElementById('bulanke38').value
  var dt39 = document.getElementById('bulanke39').value
  var dt40 = document.getElementById('bulanke40').value
  var dt41 = document.getElementById('bulanke41').value
  var dt42 = document.getElementById('bulanke42').value
  var dt43 = document.getElementById('bulanke43').value
  var dt44 = document.getElementById('bulanke44').value
  var dt45 = document.getElementById('bulanke45').value
  var dt46 = document.getElementById('bulanke46').value
  var dt47 = document.getElementById('bulanke47').value
  var dt48 = document.getElementById('bulanke48').value
  var dt49 = document.getElementById('bulanke49').value
  var dt50 = document.getElementById('bulanke50').value
  var dt51 = document.getElementById('bulanke51').value
  var dt52 = document.getElementById('bulanke52').value
  var dt53 = document.getElementById('bulanke53').value
  var dt54 = document.getElementById('bulanke54').value
  var dt55 = document.getElementById('bulanke55').value
  var dt56 = document.getElementById('bulanke56').value
  var dt57 = document.getElementById('bulanke57').value
  var dt58 = document.getElementById('bulanke58').value
  var dt59 = document.getElementById('bulanke59').value
  var dt60 = document.getElementById('bulanke60').value
</script>
<script type="text/javascript">

  const barChartData = {
    labels: [
      0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
      11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
      21, 22, 23, 24, 25, 26, 27, 28, 29, 30,
      31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
      41, 42, 43, 44, 45, 46, 47, 48, 49, 50,
      51, 52, 53, 54, 55, 56, 57, 58, 59, 60
    ],
    datasets: [
      {
        label: "Batas Atas Grafik Kuning",
        backgroundColor: "yellow",
        borderColor: "yellow",
        borderWidth: .5,
        data:[
          4.9, 6.2, 7.5, 8.5, 9.3, 9.9, 10.5, 11, 11.4,11.8, 12.2,
          12.6, 12.9, 13.3, 13.6, 13.9, 14.2, 14.6, 14.9, 15.2, 15.5,
          15.8, 16.1, 16.4, 16.6, 17, 17.3, 17.5, 17.9, 18.2, 18.5,
          18.8, 19.1, 19.5, 19.8, 20.1, 20.4, 20.8, 21.1, 21.4, 21.8,
          22.1, 22.4, 22.8, 23.1, 23.4, 23.8, 24.1, 24.5, 24.8, 25.1,
          25.5, 25.8, 26.2, 26.5, 26.8, 27.2, 27.5, 27.9, 28.2, 28.5
        ]
      },
      {
        label: "Batas Atas Hijau Muda & Batas Bawah Kuning",
        backgroundColor: "lightgreen",
        borderColor: "lightgreen",
        borderWidth: .5,
        data: [
          4.5, 5.5, 6.6, 7.5, 8.3, 8.9, 9.4, 9.8, 10.2, 10.6, 10.9,
          11.3, 11.6, 11.9, 12.1, 12.4, 12.7, 13, 13.2, 13.5, 13.8,
          14.1, 14.4, 14.6, 14.9, 15.1, 15.4, 15.6, 15.9, 16.2, 16.5,
          16.79, 17.05, 17.3, 17.6, 17.9, 18.15, 18.4, 18.7, 19, 19.3,
          19.6, 19.85, 20.1, 20.4, 20.7, 21, 21.2, 21.5, 21.7, 22,
          22.4, 22.65, 22.9, 23.2, 23.5, 23.8, 24.1, 24.3, 24.6, 24.9
        ]
      },
      {
        label: "Batas Atas Hijau Tua & Batas Bawah Hijau Muda",
        backgroundColor: "green",
        borderColor: "green",
        borderWidth: .5,
        data: [
          3.8, 4.9, 5.9, 6.7, 7.3, 7.8, 8.3, 8.7, 9.05, 9.3, 9.6,
          9.8, 10.1, 10.4, 10.6, 10.9, 11.15, 11.4, 11.6, 11.9, 12.1,
          12.3, 12.6, 12.8, 13, 13.3, 13.5, 13.7, 13.9, 14.2, 14.4,
          14.6, 14.9, 15.1, 15.3, 15.5, 15.8, 16, 16.2, 16.5, 16.7,
          17, 17.2, 17.4, 17.6, 17.85, 18.1, 18.3, 18.5, 18.8, 19,
          19.2, 19.4, 19.7, 19.9, 20.1, 20.4, 20.6, 20.9, 21.1, 21.3
        ]
      },
      {
        label: "Garis Tengah Hijau",
        backgroundColor: "green",
        borderColor: "green",
        borderWidth: .5,
        data: [
          3.3, 4.3, 5.1, 5.8, 6.5, 6.9, 7.4, 7.7, 8, 8.2, 8.5,
          8.7, 9, 9.2, 9.4, 9.6, 9.8, 10, 10.2, 10.4, 10.6,
          10.8, 11, 11.3, 11.5, 11.65, 11.85, 12.1, 12.2, 12.4, 12.6,
          12.8, 13, 13.2, 13.4, 13.6, 13.8, 14, 14.2, 14.4, 14.6,
          14.8, 15, 15.15, 15.32, 15.5, 15.7, 15.9, 16.1, 16.35, 16.45,
          16.6, 16.8, 17, 17.1, 17.3, 17.5, 17.65, 17.8, 18, 18.1
        ]
      },
      {
        label: "Batas Atas Hijau Muda & Batas Bawah Hijau Tua",
        backgroundColor: "green",
        borderColor: "green",
        borderWidth: .5,
        data: [
          2.8, 3.7, 4.5, 5.2, 5.7, 6.1, 6.5, 6.8, 7.1, 7.3, 7.5,
          7.8, 8, 8.2, 8.4, 8.55, 8.7, 8.9, 9.1, 9.3, 9.5,
          9.65, 9.8, 10, 10.2, 10.37, 10.53, 10.7, 10.85, 11, 11.2,
          11.34, 11.5, 11.7, 11.85, 12, 12.2, 12.3, 12.5, 12.6, 12.75,
          12.9, 13.1, 13.25, 13.4, 13.55, 13.7, 13.83, 14, 14.2, 14.3,
          14.5, 14.6, 14.8, 14.9, 15.1, 15.2, 15.4, 15.55, 15.7, 15.8
        ]
      },
      {
        label: "Batas Atas Kuning & Batas Bawah Hijau Muda",
        backgroundColor: "lightgreen",
        borderColor: "lightgreen",
        borderWidth: .5,
        data: [
          2.8, 3.2, 3.9, 4.5, 5.1, 5.4, 5.8, 6, 6.3, 6.5, 6.7,
          6.9, 7.1, 7.3, 7.5, 7.6, 7.8, 8, 8.1, 8.3, 8.4,
          8.6, 8.7, 8.9, 9, 9.2, 9.35, 9.5, 9.65, 9.85, 9.9,
          10.1, 10.2, 10.35, 10.5, 10.6, 10.79, 10.9, 11, 11.15, 11.3,
          11.4, 11.55, 11.7, 11.79, 11.9, 12.1, 12.2, 12.3, 12.42, 12.55,
          12.7, 12.8, 12.9, 13, 13.1, 13.3, 13.4, 13.5, 13.6, 13.8
        ]
      },
      {
        label: "Batas Bawah Grafik Kuning",
        backgroundColor: "yellow",
        borderColor: "yellow",
        borderWidth: .5,
        data: [
          2, 2.7, 3.4, 4, 4.4, 4.8, 5.2, 5.4, 5.6, 5.8, 6,
          6.1, 6.3, 6.4, 6.6, 6.8, 6.9, 7.05, 7.2, 7.4, 7.5,
          7.65, 7.8, 7.9, 8, 8.2, 8.3, 8.4, 8.5, 8.7, 8.8,
          8.9, 9, 9.2, 9.3, 9.4, 9.5, 9.7, 9.8, 9.9, 10,
          10.1, 10.2, 10.3, 10.5, 10.6, 10.7, 10.8, 10.9, 11, 11.1,
          11.2, 11.3, 11.4, 11.5, 11.6, 11.7, 11.8, 11.9, 12, 12.01
        ]
      },
      {
        label: "Data Berat Badan",
        backgroundColor: "black",
        borderColor: "black",
        borderWidth: 0.1,
        data: [
          dt1,dt1,dt2,dt3,dt4,dt5,dt6,dt7,dt8,dt9,dt10,
          dt11,dt12,dt13,dt14,dt15,dt16,dt17,dt18,dt19,dt20,
          dt21,dt22,dt23,dt24,dt25,dt26,dt27,dt28,dt29,dt30,
          dt31,dt32,dt33,dt34,dt35,dt36,dt37,dt38,dt39,dt40,
          dt41,dt42,dt43,dt44,dt45,dt46,dt47,dt48,dt49,dt50,
          dt51,dt52,dt53,dt54,dt55,dt56,dt57,dt58,dt59,dt60,
        ]
      }
    ]
  };
  const bgColor = {
    id: 'bgColor',
    beforeDraw: (chart, options) => {
      const { ctx, width, height } = chart;
      ctx.fillStyle = 'white';
      ctx.fillRect(0, 0, width, height);
      ctx.restore();
    }
  }
  const config = {
    type: 'line',
    data: barChartData,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      plugins: {
        bgColor: {
          backgroundColor: 'white'
        }
      }
    },
    plugins: [bgColor]
  };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );


  var nbal = document.getElementById('namabalita').value
  var specialElementHandlers = {
        '#editor': function (element, renderer) {
        return true;
    }
  };
  function downloadPDF(){
      const canvas = document.getElementById('myChart');
      const canvasImage = canvas.toDataURL('image/jpeg', 1.0);
      // console.log(canvasImage);

      let pdf = new jsPDF('landscape');
      pdf.fromHTML(document.getElementById('content-1').innerHTML, 35, 0, {
        'width': 170,
        'elementHandlers': specialElementHandlers
      });
      pdf.fromHTML(document.getElementById('content-2').innerHTML, 35, 15, {
        'width': 60,
        'elementHandlers': specialElementHandlers
      });
      pdf.fromHTML(document.getElementById('content-3').innerHTML, 100, 15, {
        'width': 60,
        'elementHandlers': specialElementHandlers
      });
      pdf.fromHTML(document.getElementById('content-4').innerHTML, 145, 15, {
        'width': 60,
        'elementHandlers': specialElementHandlers
      });
      pdf.setFontSize(20);
      pdf.addImage(canvasImage, 'JPEG', 15, 45, 270, 150);
      pdf.save('KMS '+nbal+'.pdf');
    }
</script>

<?php include('template/footer.php'); ?>
