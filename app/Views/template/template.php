<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $title ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>


<body>
	<div class="main-container d-flex">
		<div class="sidebar p-3 text-black bg-light" style="width: 250px; height: 100vh ; position: fixed; bottom:0">
			<a href="<?= base_url('home') ?>" class="p-2 mt-2 mb-4 text-black text-decoration-none d-flex ">
				<span class="fs-4">InstaApp</span>
			</a>

			<ul class="nav flex-column mt-4 d">
				<li class="nav-item">
					<a href="<?= base_url('home') ?>" class="btn btn-light nav-link text-black mb-2 p-2" aria-current="page" style="text-align: left; font-size: 12pt;">
						<i class="bi bi-house-door me-2" style="font-size: 18pt;"></i>
						Beranda
					</a>
				</li>
				<li>
					<a href="<?= base_url('home/soon') ?>" class="btn btn-light nav-link text-black mb-2 p-2" style="text-align: left; font-size: 12pt;">
						<i class="bi bi-search me-2" style="font-size: 18pt;"></i>
						Cari
					</a>
				</li>
				<li>
					<a href="<?= base_url('home/soon') ?>" class="btn btn-light nav-link text-black mb-2 p-2" style="text-align: left; font-size: 12pt;">
						<i class=" bi bi-compass me-2" style="font-size: 18pt;"></i>
						Jelajahi
					</a>
				</li>
				<li>
					<a href="<?= base_url('home/soon') ?>" class="btn btn-light nav-link text-black mb-2 p-2" style="text-align: left; font-size: 12pt;">
						<i class=" bi bi-messenger me-2" style="font-size: 18pt;"></i>
						Pesan
					</a>
				</li>
				<li>
					<a href="<?= base_url('soon') ?>" class="btn btn-light nav-link text-black mb-2 p-2" style="text-align: left; font-size: 12pt;">
						<i class=" bi bi-bell me-2" style="font-size: 18pt;"></i>
						Notifikasi
					</a>
				</li>
				<li>
					<a href="<?= base_url('home/unggah') ?>" class="btn btn-light nav-link text-black mb-2 p-2" style="text-align: left; font-size: 12pt;">
						<i class=" bi bi-plus-square me-2" style="font-size: 18pt;"></i>
						Buat
					</a>
				</li>
				<li>
					<a href="<?= base_url('home/soon') ?>" class="btn btn-light nav-link text-black mb-2 p-2" style="text-align: left; font-size: 12pt;">
						<i class=" bi bi-person-circle me-2" style="font-size: 18pt;"></i>
						Profile
					</a>
				</li>
			</ul>
		</div>

		<main class="main" style="padding-left: 260px;">
			<?= $this->renderSection('content') ?>
		</main>

	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


</html>