<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GALLERYKU-UKK</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary m-2">
		<div class="container">
			<a class="navbar-brand" href="index.php">GALLERY ELECTRA </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
				<div class="navbar-nav me-auto">
				</div>
				<a href="register.php" class="btn btn-outline-primary m-1">DAFTAR</a>
				<a href="login.php" class="btn btn-outline-success m-1">MASUK</a>
				<a href="profil.php" class="btn btn-outline-danger m-1">PROFIL SAYA</a>
			</div>
		</div>
	</nav>

	<!-- carousel -->
	<div class="container mt-3">
		<div id="carouselExample" class="carousel slide">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="assets/image/wallpaperflare.com_wallpaper (3).jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="assets/image/wallpaperflare.com_wallpaper (6).jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="assets/image/wallpaperflare.com_wallpaper (7).jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
			<p>&copy; GALLERY ELECTRA </P>
		</footer>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>