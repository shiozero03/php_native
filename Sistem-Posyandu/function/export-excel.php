<?php 
 
	include '../config/config.php';
	$admin = mysqli_query($conn, "SELECT * FROM user WHERE role = 0");
	$kader = mysqli_query($conn, "SELECT * FROM user WHERE role = 1");
	$balita = mysqli_query($conn, "SELECT * FROM balita ORDER BY tanggal_lahir DESC ");
	$ibuhamil = mysqli_query($conn, "SELECT * FROM ibu_hamil ORDER BY updated_at DESC ");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Informasi Posyandu</title>
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
	<link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
	<link href="../dist/css/style.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css"/>
	<link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>
</head>
<body>
<?php
header("Content-type: application/vnd-ms-excel");
	if(isset($_GET['export-admin'])){
		header("Content-Disposition: attachment; filename=Data Admin.xls");
		?>
		<table>
			<thead>
				<tr>
            		<th></th>
            		<th colspan="4"></th>
            	</tr>
            	<tr>
            		<th></th>
            		<th colspan="4" style="text-align: center; border: 1px solid black;">
            			<h2><b>Data Admin</b></h2>
            		</th>
            	</tr>
		    	<tr>
			      	<th></th>
			        <th style="text-align: center; border: 1px solid black;"><b>No</b></th>
			        <th style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
			        <th style="text-align: center; border: 1px solid black;"><b>Username</b></th>
			        <th style="text-align: center; border: 1px solid black;"><b>Password</b></th>
		      	</tr>
		    </thead>
		    <tbody>
		      	<?php $no = 1; while($adm = mysqli_fetch_assoc($admin)){ ?>
		      	<tr>
			      	<td></td>
			        <td style="text-align: center; border: 1px solid black;"><?= $no++ ?></td>
			        <td style="text-align: center; border: 1px solid black;"><?= $adm['nama'] ?></td>
			        <td style="text-align: center; border: 1px solid black;"><?= $adm['username'] ?></td>
			        <td style="text-align: center; border: 1px solid black;"><?= $adm['password'] ?></td>
		      	</tr>
		      	<?php } ?>
		    </tbody>
		</table>
		<?php
	} elseif(isset($_GET['export-kader'])){
		header("Content-Disposition: attachment; filename=Data Kader.xls");
		?>
		<table>
            <thead>
            	<tr>
            		<th></th>
            		<th colspan="7"></th>
            	</tr>
            	<tr>
            		<th></th>
            		<th colspan="7" style="text-align: center; border: 1px solid black;">
            			<h2><b>Data Kader</b></h2>
            		</th>
            	</tr>
	            <tr class="bg-warning">
	            	<th></th>
	                <th style="text-align: center; border: 1px solid black;"><b>No</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Username</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Password</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Alamat</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Umur</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>No. Telepon</b></th>
	            </tr>
            </thead>
            <tbody>
              	<?php $no = 1; while($kad = mysqli_fetch_assoc($kader)){ ?>
              	<tr>
	              	<td></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $no++ ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $kad['nama'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $kad['username'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $kad['password'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $kad['alamat'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $kad['umur'] ?> tahun</td>
	                <td style="text-align: center; border: 1px solid black;"><?= $kad['telp'] ?></td>
              	</tr>
              	<?php } ?>
            </tbody>
        </table>
		<?php
	} elseif(isset($_GET['export-balita'])){
		header("Content-Disposition: attachment; filename=Data Balita.xls");
		?>
		<table>
            <thead>
            	<tr>
            		<th></th>
            		<th colspan="7"></th>
            	</tr>
            	<tr>
            		<th></th>
            		<th colspan="7" style="text-align: center; border: 1px solid black;">
            			<h2><b>Data Balita</b></h2>
            		</th>
            	</tr>
	            <tr class="bg-warning">
	            	<th></th>
	                <th style="text-align: center; border: 1px solid black;"><b>No</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Jenis Kelamin</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Tanggal Lahir</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Alamat</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Nama Ayah</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Nama Ibu</b></th>
	            </tr>
            </thead>
            <tbody>
              	<?php $no = 1; while($blt = mysqli_fetch_assoc($balita)){ ?>
              	<tr>
	              	<td></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $no++ ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $blt['nama'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $blt['jenis_kelamin'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= date('d-m-Y', strtotime($blt['tanggal_lahir'])) ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $blt['alamat'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $blt['nama_ayah'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $blt['nama_ibu'] ?></td>
              	</tr>
              	<?php } ?>
            </tbody>
        </table>
		<?php
	} elseif(isset($_GET['export-ibu-hamil'])){
		header("Content-Disposition: attachment; filename=Data Ibu Hamil.xls");
		?>
		<table>
            <thead>
            	<tr>
            		<th></th>
            		<th colspan="6"></th>
            	</tr>
            	<tr>
            		<th></th>
            		<th colspan="6" style="text-align: center; border: 1px solid black;">
            			<h2><b>Data Ibu Hamil</b></h2>
            		</th>
            	</tr>
	            <tr class="bg-warning">
	            	<th></th>
	                <th style="text-align: center; border: 1px solid black;"><b>No</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Alamat</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Umur</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>No. Telepon</b></th>
	                <th style="text-align: center; border: 1px solid black;"><b>Usia Kandungan</b></th>
	            </tr>
            </thead>
            <tbody>
              	<?php $no = 1; while($ibmham = mysqli_fetch_assoc($ibuhamil)){ ?>
              	<tr>
	              	<td></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $no++ ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $ibmham['nama'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $ibmham['alamat'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $ibmham['umur'] ?> tahun</td>
	                <td style="text-align: center; border: 1px solid black;"><?= $ibmham['telp'] ?></td>
	                <td style="text-align: center; border: 1px solid black;"><?= $ibmham['usia_kandungan'] ?> bulan</td>
              	</tr>
              	<?php } ?>
            </tbody>
        </table>
		<?php
	} elseif(isset($_GET['export-imunisasi-balita'])){
		header("Content-Disposition: attachment; filename=Data Imunisasi Balita.xls");
		?>
		<table>
            <thead>
            	<tr>
            		<th></th>
            		<th colspan="7"></th>
            	</tr>
            	<tr>
            		<th></th>
            		<th class="bg-dark text-white" colspan="18" style="text-align: center; border: 1px solid black;">
            			<h2><b>Data Imunisasi</b></h2>
            		</th>
            	</tr>
            	<tr>
            		<th></th>
            		<th colspan="5" style="text-align: center; border: 1px solid black;">
            			<h4><b>Data Balita</b></h4>
            		</th>
            		<th colspan="13" style="text-align: center; border: 1px solid black;">
            			<h4><b>Tanggal Imunisasi</b></h4>
            		</th>
            	</tr>
	            <tr>
	            	<th></th>
	                <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>No</b></th>
	                <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
	                <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Jenis Kelamin</b></th>
	                <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Nama Ayah</b></th>
	                <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Nama Ibu</b></th>
	                <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>HB 0 (0 - 24 Jam)</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>BCG</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Polio</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>DT-HB-Hib 1</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Polio 2</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>DT-HB-Hib 2</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Polio 3</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>DT-HB-Hib 3</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Polio 4</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>IPV</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Campak</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>DPT-HB-Hib Lanjutan</b></th>
                    <th class="bg-warning" style="text-align: center; border: 1px solid black;"><b>Campak Lanjutan</b></th>
	            </tr>
            </thead>
            <tbody>
              	<?php $no = 1; while($blt = mysqli_fetch_assoc($balita)){ ?>
	              	<tr>
		              	<td></td>
		                <td style="text-align: center; border: 1px solid black;"><?= $no++ ?></td>
		                <td style="text-align: center; border: 1px solid black;"><?= $blt['nama'] ?></td>
		                <td style="text-align: center; border: 1px solid black;"><?= $blt['jenis_kelamin'] ?></td>
		                <td style="text-align: center; border: 1px solid black;"><?= $blt['nama_ayah'] ?></td>
		                <td style="text-align: center; border: 1px solid black;"><?= $blt['nama_ibu'] ?></td>
		                <?php
			                $customque = "SELECT * FROM data_imunisasi WHERE id_balita = ".$blt['id'];
		                    $passque = mysqli_query($conn, $customque);
		                    $passcek = mysqli_fetch_assoc($passque);
		                    $countque = mysqli_num_rows($passque);
		                    if(mysqli_num_rows($passque) > 0){
				                ?>
				                <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['hb_0'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['hb_0']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['bcg'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['bcg']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['polio'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['polio']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['dpt_hb_hib_1'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['dpt_hb_hib_1']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['polio_2'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['polio_2']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['dpt_hb_hib_2'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['dpt_hb_hib_2']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['polio_3'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['polio_3']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['dpt_hb_hib_3'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['dpt_hb_hib_3']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['polio_4'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['polio_4']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['ipv'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['ipv']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['campak'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['campak']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['dpt_hb_hib_lanjutan'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['dpt_hb_hib_lanjutan']));
			                          }
			                        ?>
			                    </td>
			                    <td style="text-align: center; border: 1px solid black;">
			                        <?php
			                          if($passcek['campak_lanjutan'] == '0000-00-00'){
			                            echo "<i class='text-danger'>Belum Imunisasi</i>";
			                          } else {
			                            echo date('d M Y', strtotime($passcek['campak_lanjutan']));
			                          }
			                        ?>
			                    </td>
		              			<?php
		              		} else {
		              			?>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<td style="text-align: center; border: 1px solid black;"><i class='text-danger'>Belum Imunisasi</i></td>
		              			<?php
		              		}
		              	?>
	              	</tr>
              	<?php } ?>
            </tbody>
        </table>
		<?php
	} elseif(isset($_GET['export-kms'])){
		$setuskms = mysqli_query($conn, "SELECT * FROM balita WHERE id = ".$_GET['export-kms']);
    	$getuskms = mysqli_fetch_assoc($setuskms);
		header("Content-Disposition: attachment; filename=KMS ".$getuskms['nama'].".xls");

    	$setukkms1 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=1");
	    $setukkms2 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=2");
	    $setukkms3 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=3");
	    $setukkms4 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=4");
	    $setukkms5 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=5");
	    $setukkms6 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=6");
	    $setukkms7 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=7");
	    $setukkms8 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=8");
	    $setukkms9 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=9");
	    $setukkms10 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=10");
	    $setukkms11 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=11");
	    $setukkms12 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=12");
	    $setukkms13 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=13");
	    $setukkms14 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=14");
	    $setukkms15 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=15");
	    $setukkms16 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=16");
	    $setukkms17 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=17");
	    $setukkms18 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=18");
	    $setukkms19 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=19");
	    $setukkms20 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=20");
	    $setukkms21 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=21");
	    $setukkms22 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=22");
	    $setukkms23 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=23");
	    $setukkms24 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=24");
	    $setukkms25 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=25");
	    $setukkms26 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=26");
	    $setukkms27 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=27");
	    $setukkms28 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=28");
	    $setukkms29 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=29");
	    $setukkms30 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=30");
	    $setukkms31 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=31");
	    $setukkms32 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=32");
	    $setukkms33 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=33");
	    $setukkms34 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=34");
	    $setukkms35 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=35");
	    $setukkms36 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=36");
	    $setukkms37 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=37");
	    $setukkms38 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=38");
	    $setukkms39 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=39");
	    $setukkms40 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=40");
	    $setukkms41 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=41");
	    $setukkms42 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=42");
	    $setukkms43 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=43");
	    $setukkms44 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=44");
	    $setukkms45 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=45");
	    $setukkms46 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=46");
	    $setukkms47 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=47");
	    $setukkms48 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=48");
	    $setukkms49 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=49");
	    $setukkms50 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=50");
	    $setukkms51 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=51");
	    $setukkms52 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=52");
	    $setukkms53 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=53");
	    $setukkms54 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=54");
	    $setukkms55 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=55");
	    $setukkms56 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=56");
	    $setukkms57 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=57");
	    $setukkms58 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=58");
	    $setukkms59 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=59");
	    $setukkms60 = mysqli_query($conn, "SELECT * FROM data_pengukuran WHERE id_balita = ".$_GET['export-kms']." AND bulan_ke=60");
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

		print_r($getukkms1);
		?>
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
						<th colspan="64"></th>
					</tr>
				</thead>
				<thead>
					<tr>
						<th></th>
						<th colspan="4" rowspan="3" style="text-align: center; border-right: 1px solid black; border-left: 1px solid black; border-top: 1px solid black;">
							<h1 style="font-size: 70px;">KMS</h1>
						</th>
						<th style="border: 1px solid black;" colspan="59"></th>
					</tr>
					<tr>
						<th></th>
						<th colspan="2"></th>
						<th colspan="3"> <b>Nama</b> </th>
						<th> : </th>
						<td colspan="4" style="text-align: left;"><?= $getuskms['nama'] ?></td>
						<th style="border: 1px solid black;" colspan="49"></th>
					</tr>
					<tr>
						<th></th>
						<th colspan="2"></th>
						<th colspan="3"> <b>Tanggal Lahir</b> </th>
						<th> : </th>
						<td colspan="4" style="text-align: left;"><?= date('d F Y', strtotime($getuskms['tanggal_lahir'])) ?></td>
						<th style="border: 1px solid black;" colspan="49"></th>
					</tr>
					<tr>
						<th></th>
						<th colspan="4" style="text-align: center; border-right: 1px solid black; border-left: 1px solid black; padding: 5px 20px; border-bottom: 1px solid black;">
							<h5>KARTU MENUJU SEHAT</h5>
						</th>
						<th style="border: 1px solid black;" colspan="59"></th>
					</tr>
				</thead>
				<thead>
					<tr>
						<th></th>
						<th style="border: 1px solid black;" colspan="63"></th>
					</tr>
				</thead>
				<thead style="text-align: center;">
					<tr>
						<td></td>
						<th style="border: 1px solid black;" colspan="3"><b>Umur (bln)</b></th>
						<?php for($no = 1; $no<61; $no++) {?>
						<td style="text-align: center ;border: 1px solid black;"><b><?= $no ?></b></td>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<th style="border: 1px solid black;" colspan="3"><b>Berat Badan</b></th>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms1) > 0){echo $getukkms1['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms2) > 0){echo $getukkms2['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms3) > 0){echo $getukkms3['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms4) > 0){echo $getukkms4['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms5) > 0){echo $getukkms5['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms6) > 0){echo $getukkms6['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms7) > 0){echo $getukkms7['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms8) > 0){echo $getukkms8['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms9) > 0){echo $getukkms9['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms10) > 0){echo $getukkms10['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms11) > 0){echo $getukkms11['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms12) > 0){echo $getukkms12['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms13) > 0){echo $getukkms13['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms14) > 0){echo $getukkms14['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms15) > 0){echo $getukkms15['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms16) > 0){echo $getukkms16['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms17) > 0){echo $getukkms17['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms18) > 0){echo $getukkms18['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms19) > 0){echo $getukkms19['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms20) > 0){echo $getukkms20['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms21) > 0){echo $getukkms21['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms22) > 0){echo $getukkms22['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms23) > 0){echo $getukkms23['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms24) > 0){echo $getukkms24['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms25) > 0){echo $getukkms25['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms26) > 0){echo $getukkms26['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms27) > 0){echo $getukkms27['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms28) > 0){echo $getukkms28['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms29) > 0){echo $getukkms29['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms30) > 0){echo $getukkms30['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms31) > 0){echo $getukkms31['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms32) > 0){echo $getukkms32['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms33) > 0){echo $getukkms33['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms34) > 0){echo $getukkms34['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms35) > 0){echo $getukkms35['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms36) > 0){echo $getukkms36['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms37) > 0){echo $getukkms37['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms38) > 0){echo $getukkms38['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms39) > 0){echo $getukkms39['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms40) > 0){echo $getukkms40['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms41) > 0){echo $getukkms41['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms42) > 0){echo $getukkms42['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms43) > 0){echo $getukkms43['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms44) > 0){echo $getukkms44['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms45) > 0){echo $getukkms45['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms46) > 0){echo $getukkms46['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms47) > 0){echo $getukkms47['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms48) > 0){echo $getukkms48['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms49) > 0){echo $getukkms49['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms50) > 0){echo $getukkms50['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms51) > 0){echo $getukkms51['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms52) > 0){echo $getukkms52['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms53) > 0){echo $getukkms53['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms54) > 0){echo $getukkms54['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms55) > 0){echo $getukkms55['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms56) > 0){echo $getukkms56['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms57) > 0){echo $getukkms57['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms58) > 0){echo $getukkms58['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms59) > 0){echo $getukkms59['berat']." Kg"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms60) > 0){echo $getukkms60['berat']." Kg"; } else {echo "";} ?></b></td>
					</tr>
					<tr>
						<td></td>
						<th style="border: 1px solid black;" colspan="3"><b>Tinggi Badan</b></th>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms1) > 0){echo $getukkms1['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms2) > 0){echo $getukkms2['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms3) > 0){echo $getukkms3['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms4) > 0){echo $getukkms4['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms5) > 0){echo $getukkms5['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms6) > 0){echo $getukkms6['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms7) > 0){echo $getukkms7['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms8) > 0){echo $getukkms8['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms9) > 0){echo $getukkms9['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms10) > 0){echo $getukkms10['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms11) > 0){echo $getukkms11['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms12) > 0){echo $getukkms12['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms13) > 0){echo $getukkms13['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms14) > 0){echo $getukkms14['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms15) > 0){echo $getukkms15['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms16) > 0){echo $getukkms16['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms17) > 0){echo $getukkms17['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms18) > 0){echo $getukkms18['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms19) > 0){echo $getukkms19['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms20) > 0){echo $getukkms20['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms21) > 0){echo $getukkms21['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms22) > 0){echo $getukkms22['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms23) > 0){echo $getukkms23['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms24) > 0){echo $getukkms24['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms25) > 0){echo $getukkms25['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms26) > 0){echo $getukkms26['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms27) > 0){echo $getukkms27['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms28) > 0){echo $getukkms28['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms29) > 0){echo $getukkms29['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms30) > 0){echo $getukkms30['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms31) > 0){echo $getukkms31['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms32) > 0){echo $getukkms32['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms33) > 0){echo $getukkms33['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms34) > 0){echo $getukkms34['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms35) > 0){echo $getukkms35['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms36) > 0){echo $getukkms36['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms37) > 0){echo $getukkms37['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms38) > 0){echo $getukkms38['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms39) > 0){echo $getukkms39['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms40) > 0){echo $getukkms40['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms41) > 0){echo $getukkms41['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms42) > 0){echo $getukkms42['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms43) > 0){echo $getukkms43['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms44) > 0){echo $getukkms44['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms45) > 0){echo $getukkms45['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms46) > 0){echo $getukkms46['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms47) > 0){echo $getukkms47['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms48) > 0){echo $getukkms48['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms49) > 0){echo $getukkms49['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms50) > 0){echo $getukkms50['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms51) > 0){echo $getukkms51['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms52) > 0){echo $getukkms52['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms53) > 0){echo $getukkms53['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms54) > 0){echo $getukkms54['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms55) > 0){echo $getukkms55['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms56) > 0){echo $getukkms56['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms57) > 0){echo $getukkms57['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms58) > 0){echo $getukkms58['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms59) > 0){echo $getukkms59['tinggi']." cm"; } else {echo "";} ?></b></td>
						<td style="border: 1px solid black; text-align: center"><b><?php if(mysqli_num_rows($setukkms60) > 0){echo $getukkms60['tinggi']." cm"; } else {echo "";} ?></b></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<th style="border: 1px solid black;" colspan="3"><b>Umur (bln)</b></th>
						<?php for($no = 1; $no<61; $no++) {?>
						<td style="text-align: center ;border: 1px solid black;"><b><?= $no ?></b></td>
						<?php } ?>
					</tr>
				</tfoot>
			</table>
		</div>
		<?php
	}

	if(isset($_POST['ekspor-ukuran'])){
		header("Content-Disposition: attachment; filename=Data Pengukuran Balita.xls");
		$bulan = $_POST['bulan'];
		$tahun = $_POST['tahun'];

		$cekdate = mysqli_query($conn, "SELECT * FROM data_pengukuran as uk JOIN balita as bal ON uk.id_balita = bal.id WHERE uk.bulan = '".$bulan."' AND uk.tahun = ".$tahun);
		if(mysqli_num_rows($cekdate) > 0){
			?>
				<table>
		            <thead>
		            	<tr>
		            		<th></th>
		            		<th colspan="10"></th>
		            	</tr>
		            	<tr>
		            		<th></th>
		            		<th colspan="10" style="text-align: center; border: 1px solid black;">
		            			<h2><b>Data Pengukuran Balita</b></h2>
		            		</th>
		            	</tr>
		            	<tr>
		            		<th></th>
		            		<th colspan="3" style="border-left: 1px solid black;">Periode</th>
		            		<th colspan="7" style="text-align: left; border-right: 1px solid black;">: <?= $bulan ?> <?= $tahun ?></th>
		            	</tr>
		            	<tr>
		            		<th></th>
		            		<th colspan="10" style="border: 1px solid black;"></th>
		            	</tr>
			            <tr>
			            	<th></th>
			                <th style="text-align: center; border: 1px solid black;"><b>No</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Jenis Kelamin</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Tanggal Lahir</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Alamat</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama Ayah</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama Ibu</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Berat Badan</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Tinggi Badan</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Lingkar Kepala</b></th>
			            </tr>
		            </thead>
		            <tbody>
		              	<?php $no = 1; while($cd = mysqli_fetch_assoc($cekdate)){?>
			              	<tr>
				              	<td></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $no++ ?></td>
				                <td style="text-align: left; border: 1px solid black;"><?= $cd['nama'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['jenis_kelamin'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['tanggal_lahir'] ?></td>
				                <td style="text-align: left; border: 1px solid black;"><?= $cd['alamat'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['nama_ayah'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['nama_ibu'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['berat'] ?> Kg</td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['tinggi'] ?> cm</td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['kepala'] ?> cm</td>
			              	</tr>
		              	<?php } ?>
		            </tbody>
		        </table>
			<?php
		} else {
			?>
				<table>
		            <thead>
		            	<tr>
		            		<th></th>
		            		<th colspan="6"></th>
		            	</tr>
		            	<tr>
		            		<th></th>
		            		<th colspan="10" style="text-align: center; border: 1px solid black;">
		            			<h2><b>Data Pengukuran Balita</b></h2>
		            		</th>
		            	</tr>
		            	<tr>
		            		<th></th>
		            		<th colspan="10" style="border: 1px solid black;"></th>
		            	</tr>
			            <tr>
			            	<th></th>
			                <th style="text-align: center; border: 1px solid black;"><b>No</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Jenis Kelamin</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Tanggal Lahir</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Alamat</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama Ayah</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama Ibu</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Berat Badan</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Tinggi Badan</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Lingkar Kepala</b></th>
			            </tr>
		            </thead>
		            <tbody>
		              	<?php $no = 1;?>
		              	<tr>
			              	<td></td>
			                <td colspan="10" style="text-align: center; border: 1px solid black;"><em>No Data</em></td>
		              	</tr>
		            </tbody>
		        </table>
			<?php
		}
	} elseif(isset($_POST['ekspor-vitamin'])){
		header("Content-Disposition: attachment; filename=Data Pemberian Vitamin Balita.xls");
		$bulan = $_POST['bulan'];
		$tahun = $_POST['tahun'];

		$cekdate = mysqli_query($conn, "SELECT * FROM data_vitamin as uk JOIN balita as bal ON uk.id_balita = bal.id WHERE uk.bulan = '".$bulan."' AND uk.tahun = ".$tahun);
		if(mysqli_num_rows($cekdate) > 0){
			while($cd = mysqli_fetch_assoc($cekdate)){
				?>
					<table>
			            <thead>
			            	<tr>
			            		<th></th>
			            		<th colspan="8"></th>
			            	</tr>
			            	<tr>
			            		<th></th>
			            		<th colspan="8" style="text-align: center; border: 1px solid black;">
			            			<h2><b>Data Pemberian Vitamin Balita</b></h2>
			            		</th>
			            	</tr>
			            	<tr>
			            		<th></th>
			            		<th colspan="2" style="border-left: 1px solid black;">Periode</th>
			            		<th colspan="6" style="text-align: left; border-right: 1px solid black;">: <?= $cd['bulan'] ?> <?= $cd['tahun'] ?></th>
			            	</tr>
			            	<tr>
			            		<th></th>
			            		<th colspan="8" style="border: 1px solid black;"></th>
			            	</tr>
				            <tr>
				            	<th></th>
				                <th style="text-align: center; border: 1px solid black;"><b>No</b></th>
				                <th style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
				                <th style="text-align: center; border: 1px solid black;"><b>Jenis Kelamin</b></th>
				                <th style="text-align: center; border: 1px solid black;"><b>Tanggal Lahir</b></th>
				                <th style="text-align: center; border: 1px solid black;"><b>Alamat</b></th>
				                <th style="text-align: center; border: 1px solid black;"><b>Nama Ayah</b></th>
				                <th style="text-align: center; border: 1px solid black;"><b>Nama Ibu</b></th>
				                <th style="text-align: center; border: 1px solid black;"><b>Nama Vitamin</b></th>
				            </tr>
			            </thead>
			            <tbody>
			              	<?php $no = 1;?>
			              	<tr>
				              	<td></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $no++ ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['nama'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['jenis_kelamin'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['tanggal_lahir'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['alamat'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['nama_ayah'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['nama_ibu'] ?></td>
				                <td style="text-align: center; border: 1px solid black;"><?= $cd['nama_vitamin'] ?> </td>
			              	</tr>
			            </tbody>
			        </table>
				<?php
			}
		} else {
			?>
				<table>
		            <thead>
		            	<tr>
		            		<th></th>
		            		<th colspan="8"></th>
		            	</tr>
		            	<tr>
		            		<th></th>
		            		<th colspan="8" style="text-align: center; border: 1px solid black;">
		            			<h2><b>Data Pemberian Vitamin Balita</b></h2>
		            		</th>
		            	</tr>
		            	<tr>
		            		<th></th>
		            		<th colspan="8" style="border: 1px solid black;"></th>
		            	</tr>
			            <tr>
			            	<th></th>
			                <th style="text-align: center; border: 1px solid black;"><b>No</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Jenis Kelamin</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Tanggal Lahir</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Alamat</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama Ayah</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Nama Ibu</b></th>
			                <th style="text-align: center; border: 1px solid black;"><b>Vitamin</b></th>
			            </tr>
		            </thead>
		            <tbody>
		              	<?php $no = 1;?>
		              	<tr>
			              	<td></td>
			                <td colspan="8" style="text-align: center; border: 1px solid black;"><em>No Data</em></td>
		              	</tr>
		            </tbody>
		        </table>
			<?php
		}
	}
?>
</body>
</html>