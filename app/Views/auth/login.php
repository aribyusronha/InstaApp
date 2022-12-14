<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<title>Bootstrap demo</title>
</head>

<body>
	<div class="container mt-3">
		<div class="row d-flex justify-content-center">
			<div class="col-9">
				<div class="row m-4 d-flex justify-content-center">
					<div class="col-lg-5 col-sm-0">
						<img src="/img/assets/login-asset3.png" class="img-thumbnail" alt="Instagram web">
						<img src="/img/assets/login-asset.jpg" class="img-thumbnail" alt="Instagram web">
						<img src="/img/assets/login-asset2.jpg" class="img-thumbnail" alt="Instagram web">
					</div>
					<div class="col-lg-5 col-sm-12">
						<div class="row-8">
							<div class="card p-3">
								<h1 class="d-flex justify-content-center p-4">InstaApp</h1>
								<form action="<?= base_url('home') ?>" method="post">
									<div class="mb-2 mx-3">
										<input type="email" class="form-control rounded-1 form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
									</div>
									<div class="mb-3 mx-3">
										<input type="password" class="form-control rounded-1 form-control-sm" id="exampleInputPassword1" placeholder="Password">
									</div>
									<div class="d-grid mb-3 mx-3">
										<button class="btn btn-primary btn-sm" type="submit">Masuk</button>
									</div>
								</form>
								<div class="row mt-1 mx-1 d-flex justify-content-center">
									<div class="col-5">
										<hr>
									</div>
									<div class="col-2 d-flex justify-content-center text-muted">ATAU</div>
									<div class="col-5">
										<hr>
									</div>
								</div>

								<button type="button" class="btn text-primary d-flex justify-content-center align-middle mx-3">
									<i class="bi bi-facebook mx-2"></i>
									Masuk Dengan Facebook
								</button>

								<a href="" class="btn btn-sm mt-2" style="font-size: 10pt;">Lupa Kata Sandi?</a>
							</div>
						</div>
						<div class="row-2">
							<div class="card mt-2 pt-3">
								<div class="d-flex justify-content-center">
									<p>Tidak Punya Akun? <a href="<?= base_url('auth/register') ?>" style="text-decoration: none;">Buat Akun</a></p>
								</div>

							</div>
						</div>

						<div class="row-2">
							<p class="pt-3" style="text-align: center;">Dapatkan Aplikasi</p>
							<div class="d-flex justify-content-center">
								<a href="https://l.instagram.com/?u=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.instagram.android%26referrer%3Dutm_source%253Dinstagramweb%2526utm_campaign%253DsignupPage%2526ig_mid%253D4312EEAE-1723-4F17-BB36-098346A278BE%2526utm_content%253Dlo%2526utm_medium%253Dbadge&e=AT3kIc6tW0jGntH3_BoYUfoZ8KlQSxR1_gu4NG280tfjYTXWor2go9lHyM5nZzwMLVGM4Eq7aJv_cobBV-0pNt5ZRzy8XZwfNpSqMd25ARFfyR-0omN3wTj29lBsibs3KNuv5hSwfOugzSfleA26H4SEDQet3QBpEk7hZw" type="button btn-sm" class="btn btn-dark pt-3 mx-3">
									<p>
										<ion-icon name="logo-google-playstore"></ion-icon>
										Playstore
									</p>
								</a>
								<a href="ms-windows-store://pdp/?productid=9nblggh5l9xt&referrer=appbadge&source=www.instagram.com&mode=mini&pos=0%2C0%2C1920%2C1020" type="button btn-sm" class="btn btn-dark pt-3 mx-3 d">
									<p>
										<ion-icon name="logo-microsoft"></ion-icon>
										Microsoft
									</p>
								</a>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>