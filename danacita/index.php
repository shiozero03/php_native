<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/mystyle/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/mystyle/css/intro.css">
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<title>Intro | Danacita</title>
</head>
<body>
	<div class="content">
		<div class="opening position-relative">
			<div class="slide-1-welcome" id="welcome-1">
				<div class="version position-fixed">
					version 1.1.0
				</div>
				<div class="welcome text-center">
					<h5><strong>Selamat Datang di Danacita</strong></h5>
					<p>Perjalanan pendidikanmu dimulai dari sini</p>
					<img src="assets/images/welcome.png" class="wel"><br><br><br>
				</div>
				<div class="bottom-opening position-fixed text-center">
					<div class="toggle-slide">
						<i id="toggle-1" class="fas fa-circle text-primary"></i>
						<i onclick="next()" id="toggle-2" class="fas fa-circle text-secondary"></i>
					</div>
					<button onclick="next()" class="next-button btn">Selanjutnya</button>
				</div>
			</div>
			<div class="slide-2-welcome d-none" id="welcome-2">
				<div class="version position-fixed">
					version 1.1.0
				</div>
				<div class="back-button position-fixed">
					<i onclick="back()" class="fas fa-arrow-left"></i>
				</div>
				<div class="welcome text-center">
					<h5><strong>Solusi cerdas pembiayaan<br>pendidikan</strong></h5>
					<p>Danacita menyediakan berbagai periode <br>pembiayaan mulai dari 6 bulan hingga 24 bulan</p>
					<img src="assets/images/welcome-2.png" class="wel"><br><br><br><br><br><br>
				</div>
				<div class="bottom-opening position-fixed text-center">
					<div class="toggle-slide">
						<i onclick="back()" id="toggle-1" class="fas fa-circle text-secondary"></i>
						<i id="toggle-2" class="fas fa-circle text-primary"></i>
					</div>
					<a onclick="login()" class="go-login-button btn">Log in</a>
					<a onclick="daftar()" class="go-daftar-button btn">Daftar</a>
				</div>
			</div>
			<div class="slide-3-welcome d-none" id="login">
				<a onclick="daftar()" class="version position-fixed text-decoration-none">
					<b>Daftar</b>
				</a>
				<div class="back-button position-fixed">
					<i onclick="back2()" class="fas fa-arrow-left"></i>
				</div>
				<div class="welcome text-center">
					<img src="assets/images/logo-danacita.png" class="logdaf" width="30%">
					<h5><strong>Selamat datang kembali di<br>Danacita</strong></h5>
					<p>Masukkan nomor ponsel dan kata sandi.</p>
					<form action="php/auth.php" method="post">
						<div class="form-group position-relative">
							<label><strong>Nomor ponsel</strong></label>
							<div class="position-absolute plus62 rounded py-1 px-2">+62</div>
							<input required name="nomorponsel" type="number" class="form-control mt-2 numberphone" placeholder="Nomor ponsel" />
						</div><br>
						<div class="form-group position-relative">
							<label><strong>Kata sandi</strong></label>
							<div class="position-absolute eye62 rounded py-1 px-2">
								<i id="showpw" class="fas fa-eye-slash"></i>
							</div>
							<input required name="password" id="passcek" type="password" class="form-control mt-2 password" placeholder="Kata sandi" />
						</div><br><br>
						<button class="btn w-100 button-login" name="masuk">Masuk</button>
					</form>
				</div>
			</div>
			<div class="slide-4-welcome d-none" id="daftar">
				<div class="version position-fixed">
					<a onclick="login()" class=" text-decoration-none">
						<b>Masuk</b>
					</a>
				</div>
				<div class="back-button position-fixed">
					<i onclick="back2()" class="fas fa-arrow-left"></i>
				</div>
				<div class="welcome welcome-daftar text-center">
					<img src="assets/images/logo-danacita.png" class="logdaf" width="30%">
					<h5><strong>Buat akun</strong></h5>
					<p>Pastikan nomor ponsel aktif dan kata sandi sesuai kriteria.</p>
					<form action="php/auth.php" method="post">
						<div class="form-group position-relative">
							<label><strong>Nama Depan</strong></label>
							<input required name="namadepan" type="text" class="form-control mt-2 regis-form" placeholder="Nama Depan" />
						</div><br>
						<div class="form-group position-relative">
							<label><strong>Nama Belakang</strong></label>
							<input required name="namabelakang" type="text" class="form-control mt-2 regis-form" placeholder="Nama Belakang" />
						</div><br>
						<div class="form-group position-relative">
							<label><strong>Alamat Email</strong></label>
							<div class="position-absolute plus62 rounded py-1 px-2"><i class="fas fa-envelope"></i></div>
							<input required name="email" type="email" class="form-control mt-2 numberphone" placeholder="Alamat Email" />
						</div><br>
						<div class="form-group position-relative">
							<label><strong>Nomor ponsel</strong></label>
							<div class="position-absolute plus62 rounded py-1 px-2">+62</div>
							<input required name="nomorponsel" type="number" class="form-control mt-2 numberphone" placeholder="Nomor ponsel" />
						</div><br>
						<div class="form-group position-relative">
							<label><strong>Institusi Pendidikan</strong></label>
							<div class="position-absolute eye62 rounded py-1 px-2">
								<i class="fas fa-search"></i>
							</div>
							<input required name="institusi" type="text" class="form-control mt-2 password" placeholder="Institusi Pendidikan" />
						</div><br>
						<div class="form-group position-relative">
							<label><strong>Buat Kata sandi</strong></label>
							<div class="position-absolute eye62 rounded py-1 px-2">
								<i id="showpwcreate" class="fas fa-eye-slash"></i>
							</div>
							<input required name="password" id="passcekcreate" type="password" class="form-control mt-2 password" placeholder="Kata sandi" />
						</div><br>
						<div class="form-group position-relative">
							<label><strong>Konfirmasi Kata sandi</strong></label>
							<div class="position-absolute eye62 rounded py-1 px-2">
								<i id="showpwconfirm" class="fas fa-eye-slash"></i>
							</div>
							<input required name="password" id="passcekconfirm" type="password" class="form-control mt-2 password" placeholder="Kata sandi" />
						</div><br><br>
						<button class="btn w-100 button-login" name="daftar">Daftar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/mystyle/js/intro.js"></script>
</body>
</html>