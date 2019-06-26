<div class="col-12">
	<div class="card">
		<div class="card-head">
			<strong>Data</strong>Alternatif
		</div>
		<div class="card-body">
			<?php foreach($alt as $al) { ?>
			<form action="<?php echo base_url('index.php/alter/edit'); ?>" method="post">
				<div class="row form-group">
					<div class="col-md-2">
						<label>Id Alternatif</label>
					</div>
					<div class="col-md-3">
						<input type="text" name="id_alternatif" class="form-control" value="<?php echo $al->id_alternatif; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-2">
						<label>Nama</label>
					</div>
					<div class="col-md-3">
						<input type="text" name="nama" class="form-control" value="<? echo $al->nama; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<button type="submit" class="btn btn-primary btn-md">Simpan</button>
					</div>
				</div>
			</form>
		<? } ?>
		</div>
	</div>
</div>