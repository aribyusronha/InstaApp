<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>

<?php
foreach ($feed as $f) {
?>

	<div class="card" style="margin-top: 50px;margin-left: 300px;">
		<div class="col">
			<div class="row pb-2" style="width: 472px; height: 58px;">
				<div class="card-body d-flex align-item-center">
					<i class=" bi bi-person-circle me-2" style="font-size: 18pt;"></i>
					<span class="align-self-center"><?= $f->username ?></span>
					<i class=" bi bi-dot align-self-center" style="font-size: 18pt;"></i>
					<div class="text-muted align-self-center">
						8jam lalu
					</div>
				</div>
			</div>
			<div class="row-auto">
				<img src="/img/<?= ($f->gambar == null ? "null" : $f->gambar) ?>" class="img-fluid" alt="foto feed" style="width: 470px ;height: 352px;">
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-2">
						<i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

					</div>
					<div class="col-2">
						<a href="#komen/<?= $f->id ?>">
							<i class="bi bi-chat" style="font-size: 18pt;"></i>
						</a>
					</div>
					<div class="col-2">
						<i class="bi bi-share" style="font-size: 18pt;"></i>
					</div>
					<div class="col-2 d-flex ms-auto">
						<i class="bi bi-bookmark" style="font-size: 18pt;"></i>
					</div>
				</div>


				<div class="row">
					<div class="col">
						<div class="text-muted">Caption :</div>
						<h5 class="card-title" style="margin-bottom: 10px;">
							<?= $f->caption ?>
						</h5>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="text-muted">komentar :</div>
						<p>
							<i class=" bi bi-person-circle me-2" style="font-size: 18pt;"></i>
							<span class="align-self-center">Nama Akun</span> "komentar netizen1"
						</p>
						<p>
							<i class=" bi bi-person-circle me-2" style="font-size: 18pt;"></i>
							<span class="align-self-center">Nama Akun</span> "komentar netizen2"
						</p>
					</div>
				</div>
			</div>
			<div class="card-footer bg-light">
				<form action="home/komen" method="post">
					<div class="input-group mb-3">
						<button class="btn btn-outline-secondary" type="button">
							<i class="bi bi-emoji-smile"></i>
						</button>
						<input id="komen/<?= $f->id ?>" name="komen" type="text" class="form-control" placeholder="Komentar" aria-label="Example text with two button addons">
						<button class="btn btn-link" type="submit">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php
}
?>

<?= $this->endSection() ?>