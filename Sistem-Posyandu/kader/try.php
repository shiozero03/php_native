<?php
include('../config/config.php');
require_once("../libs/dompdf2/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"select * from balita");
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Kelas</th>
 <th>Alamat</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $no++;
}
 $html = '
 	<html>
 	<body>
 		<div style="background-color: blue">
 			hello
      		<div>
        		<canvas id="densityChart" style="height: 500px; width: 100%;"></canvas>
    	  	</div>
  	  	</div>
  	  	<script>
  	  		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
  	  		const densityCanvas = document.getElementById("densityChart");

			Chart.defaults.font.size = 14;
			Chart.defaults.color = "black";

			let densityData = {
			    label: "Banyak Data Anak Yang Datang ke Posyandu",
			    data: [1,2,3,4,5,6,1,2,3,4,5,6]
			};

			let barChart = new Chart(densityCanvas, {
			    type: "bar",
			    data: {
			      	labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Des"],
			      	datasets: [densityData]
			    }
			});
  	  	</script>
  	</body>
 	</html>
 ';
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_siswa.pdf', array('Attachment'=>0));
?>