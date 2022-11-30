<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>

<?php
foreach ($feed as $f) {
?>
	<div class="row">
		<div class="col-4" style=" margin-top: 50px;margin-left: 50px;"">
			<div class=" card" style="width: 18rem; height: 20rem;">
			<img src="/img/<?= ($f->gambar == null ? "null" : $f->gambar) ?>" height="190rem" class="card-img-top" alt="...">
			<div class="card-body" style="margin-top: -20px">
				<div class="text-muted">Caption :</div>
				<h5 class="card-title" style="margin-bottom: -10px;">
					<?= $f->caption ?>
				</h5>
			</div>
		</div>
	</div>

<?php
}
?>

<?= $this->endSection() ?>