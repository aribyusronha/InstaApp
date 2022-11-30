<?= $this->extend('template/template') ?>
<?= $this->section('content') ?>

<div class="container" style="margin-top: 100px;margin-left: 300px;">
	<div class="card ">
		<div class="col">
			<form action="<?= base_url('home/upload') ?>" method="POST" enctype="multipart/form-data">
				<div class="p-4 row">
					<div class="col-6">
						<div class="mb-3">
							<input type="hidden" name="id" value="<?= $id ?>">
							<label for="gambar" class="form-label">pilih gambar</label>
							<input class="form-control" type="file" id="gambar" name="gambar">
						</div>
						<div class="mb-3">
							<label for="caption" class="form-label">Caption</label>
							<textarea class="form-control" type="text-area" id="caption" name="caption" rows='3'></textarea>
						</div>
						<button type="submit" class="btn btn-light mt-3">Upload</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>

<?= $this->endSection() ?>