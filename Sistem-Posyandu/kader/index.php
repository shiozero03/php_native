<?php include('template/header.php') ?>
<?php include('template/aside.php') ?>
<link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
<script type="text/javascript">
  document.getElementById('dashboard').classList.add('selected');
</script>

<div class="page-breadcrumb">
  <div class="row">
    <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Dashboard</h4>
    </div>
  </div>
</div>
<hr class="border-primary border">
<div class="container-fluid">
  <div class="row">
    <div class="float-start col-md-4 col-12">
      <a style="cursor: pointer;">
        <div class="p-2 me-1 ms-1 mb-2 mt-2 bg-warning border border-secondary" style="border-radius: 20px;">
          <h3 class="text-white text-center"><i class="fas fa-calendar-alt text-white me-3"></i>Waktu Hari Ini</h3>
          <hr class="border border-dark" style="margin: 0; border-style: double;">
          <h4 class="text-white text-center mt-2">
            <span id="tanggal_date"></span>
          </h4>
          <h4 class="text-white text-center mt-2">
            <span id="hours_jam"></span>
          </h4>
        </div>
      </a>
      <a href="data-kader.php">
        <div class="p-2 me-1 ms-1 mb-2 mt-2 bg-primary border border-info" style="border-radius: 20px;">
          <h3 class="text-white text-center"><i class="fas fa-id-card text-white me-3"></i>Banyak Kader</h3>
          <hr class="border border-dark" style="margin: 0; border-style: double;">
          <h1 class="text-white text-center"><?= $kadernumber ?></h1>
        </div>
      </a>
      <a href="data-balita.php">
        <div class="p-2 me-1 ms-1 mb-2 mt-2 bg-info border border-primary" style="border-radius: 20px;">
          <h3 class="text-white text-center"><i class="mdi mdi-face text-white me-3"></i>Banyak Balita</h3>
          <hr class="border border-dark" style="margin: 0; border-style: double;">
          <h1 class="text-white text-center"><?= $balitanumber ?></h1>
        </div>
      </a>
      <!-- <a href="data-ibu-hamil.php">
        <div class="p-2 me-1 ms-1 mb-2 mt-2 bg-success border border-secondary" style="border-radius: 20px;">
          <h3 class="text-white text-center"><i class="fas fa-user-plus text-white me-3"></i>Banyak Ibu Hamil</h3>
          <hr class="border border-dark" style="margin: 0; border-style: double;">
          <h1 class="text-white text-center"> $ibuhamilnumber ?></h1>
        </div>
      </a> -->
    </div>
    <div class="float-start col-md-8 col-12">
      <div class="bg-white p-2">
        <canvas id="densityChart" style="height: 500px"></canvas>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="input-type">
      <?php
        $thn = date('Y');
        $jan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Januari' AND tahun = $thn"));
        $feb = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Februari' AND tahun = $thn"));
        $mar = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Maret' AND tahun = $thn"));
        $apr = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'April' AND tahun = $thn"));
        $mei = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Mei' AND tahun = $thn"));
        $jun = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Juni' AND tahun = $thn"));
        $jul = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Juli' AND tahun = $thn"));
        $agu = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Agustus' AND tahun = $thn"));
        $sep = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'September' AND tahun = $thn"));
        $okt = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Oktober' AND tahun = $thn"));
        $nov = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'November' AND tahun = $thn"));
        $des = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE bulan = 'Desember' AND tahun = $thn"));
      ?>
      <input type="hidden" name="tahunsekarang" id="tahunsekarang" value="<?= $thn ?>">
      <input type="hidden" name="jan" id="jan" value="<?= $jan ?>">
      <input type="hidden" name="feb" id="feb" value="<?= $feb ?>">
      <input type="hidden" name="mar" id="mar" value="<?= $mar ?>">
      <input type="hidden" name="apr" id="apr" value="<?= $apr ?>">
      <input type="hidden" name="mei" id="mei" value="<?= $mei ?>">
      <input type="hidden" name="jun" id="jun" value="<?= $jun ?>">
      <input type="hidden" name="jul" id="jul" value="<?= $jul ?>">
      <input type="hidden" name="agu" id="agu" value="<?= $agu ?>">
      <input type="hidden" name="sep" id="sep" value="<?= $sep ?>">
      <input type="hidden" name="okt" id="okt" value="<?= $okt ?>">
      <input type="hidden" name="nov" id="nov" value="<?= $nov ?>">
      <input type="hidden" name="des" id="des" value="<?= $des ?>">
    </div>
  </div>
</div>
<?php include('template/script.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.2.146/pdf.min.js" integrity="sha512-hA0/Bv8+ywjnycIbT0xuCWB1sRgOzPmksIv4Qfvqv0DOKP02jSor8oHuIKpweUCsxiWGIl+QaV0E82mPQ7/gyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>

<script type="text/javascript">
  window.setTimeout("waktu()", 1000);
  function waktu(){
    const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById('tanggal_date').innerHTML = days[waktu.getDay()]+', '+waktu.getDate()+' '+months[waktu.getMonth()]+' '+waktu.getFullYear()
    document.getElementById('hours_jam').innerHTML = waktu.getHours()+' : '+waktu.getMinutes()+' : '+waktu.getSeconds()+' WIB'
  }


  let tahunsekarang = document.getElementById('tahunsekarang').value;
  let jan = document.getElementById('jan').value;
  let feb = document.getElementById('feb').value;
  let mar = document.getElementById('mar').value;
  let apr = document.getElementById('apr').value;
  let mei = document.getElementById('mei').value;
  let jun = document.getElementById('jun').value;
  let jul = document.getElementById('jul').value;
  let agu = document.getElementById('agu').value;
  let sep = document.getElementById('sep').value;
  let okt = document.getElementById('okt').value;
  let nov = document.getElementById('nov').value;
  let des = document.getElementById('des').value;

  const data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Des"],
    datasets: [{
      label: 'Weekly Sales',
      data: [jan, feb, mar, apr, mei, jun, jul, agu, sep, okt, nov, des],
      backgroundColor: [
        'rgba(255, 26, 104, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(0, 0, 0, 0.2)'
      ],
      borderColor: [
        'rgba(255, 26, 104, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(0, 0, 0, 1)'
      ],
      borderWidth: 1
    }]
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
    type: 'bar',
    data,
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
    document.getElementById('densityChart'),
    config
  );
</script>
<?php include('template/footer.php'); ?>