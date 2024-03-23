<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galeri Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-transparent ">
		<div class="container text-white ">
			<a class="navbar-brand text-white fw-bold" href="index.php"> Galeri Foto</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
				<div class="navbar-nav me-auto">
					<a href="home.php" class="nav-link text-white fw-medium">Home</a>
					<a href="album.php" class="nav-link text-white fw-medium">Album</a>
					<a href="foto.php" class="nav-link text-white fw-medium">Foto</a>
				</div>

				<a href="../config/aksi_logout.php" class="btn btn-outline-dark fw-medium m-1">Keluar</a>
			</div>
		</div>
	</nav>

	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-6 d-none d-lg-block">
				<img src="assets/image/gallery.png" alt="" style='margin-top:-5rem;'>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-body bg-light">
						<div class="text-center">
							<h5>Login Aplikasi</h5>
						</div>
						<form action="config/aksi-login.php" method="POST">
							<label class="form-label">Username</label>
							<input type="text" name="username" class="form-control" required>
							<label class="form-label">Password</label>
							<input type="password" name="password" class="form-control" required>
							<div class="d-grid mt-2">
								<button class="btn btn-primary" type="submit" name="kirim">MASUK</button>
							</div>
						</form>
						<hr>
						<p>Belum punya akun? <a href="register.php">Daftar disini!</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
		<p>&copy; GALLERY ELECTRA</p>
	</footer>


	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>