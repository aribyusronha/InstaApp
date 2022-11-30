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
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-9">
				<div class="row m-4 d-flex justify-content-center">
					<div class="col-lg-5 col-sm-12">
						<div class="row-8">
							<div class="card p-3">
								<h1 class="d-flex justify-content-center p-4">InstaApp</h1>
								<p class="d-flex justify-content-center px-4 text-secondary" style="text-align:center ; font-size: 14pt;">Sign up to see photos and videos from your friends.</p>
								<form action="<?= base_url('home') ?>" method="post">
									<div class="d-flex mx-auto justify-content-center">
										<button type="button" class="btn btn-primary ">
											<i class="bi bi-facebook mx-2"></i>
											Masuk Dengan Facebook
										</button>
									</div>
									<div class="row mt-1 mx-1 d-flex justify-content-center">
										<div class="col-5">
											<hr>
										</div>
										<div class="col-2 d-flex justify-content-center text-muted">ATAU</div>
										<div class="col-5">
											<hr>
										</div>
									</div>

									<div class="mb-2 mx-3">
										<input type="email" class="form-control rounded-1 form-control-sm" id="InputEmail1" aria-describedby="emailHelp" placeholder="Mobile Number or Email Address">
									</div>

									<div class="mb-2 mx-3">
										<input type="text" class="form-control rounded-1 form-control-sm" id="name" placeholder="Fullname">
									</div>

									<div class="mb-2 mx-3">
										<input type="text" class="form-control rounded-1 form-control-sm" id="username" placeholder="Username">
									</div>

									<div class="mb-3 mx-3">
										<input type="password" class="form-control rounded-1 form-control-sm" id="exampleInputPassword1" placeholder="Password">
									</div>


									<p class="text-muted" style="font-size: 10pt ; text-align: center;">
										People who use our service may have uploaded your contact information to Instagram. <b>Learn more</b>
									</p>
									<p class="text-muted mt-2" style="font-size: 10pt ;text-align: center;">
										By signing up, you agree to our <b>Terms, Privacy Policy and Cookies Policy.</b>
									</p>

									<div class="d-grid mb-3 mx-3">
										<button class="btn btn-primary btn-sm" type="submit">Daftar</button>
									</div>
								</form>



							</div>
						</div>
						<div class="row-2">
							<div class="card mt-2 pt-3">
								<div class="d-flex justify-content-center">
									<p>Sudah Punya Akun? <a href="<?= base_url('') ?>" style="text-decoration: none;">Log in</a></p>
								</div>

							</div>
						</div>

						<div class="row-2">
							<p class="pt-3" style="text-align: center;">Dapatkan Aplikasi</p>
							<div class="d-flex justify-content-center">
								<button type="button btn-sm" class="btn btn-dark pt-3 mx-3">
									<p>
										<ion-icon name="logo-google-playstore"></ion-icon>
										Playstore
									</p>
								</button>
								<button type="button btn-sm" class="btn btn-dark pt-3 mx-3 d">
									<p>
										<ion-icon name="logo-microsoft"></ion-icon>
										Microsoft
									</p>
								</button>
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