<div class="col-12">
	<div class="card">
		<div class="card-head">
			<strong>Data</strong>Nilai
		</div>
		<div class="card-body">
			<?php foreach($nilai as $ai) { ?>
			<form action="<?php echo base_url('index.php/nilai/update'); ?>" method="post">
				<div class="row form-group">
					<div class="col-md-3">
						<label>ID Alternatif</label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="id_alternatif" disabled>
							<option value="<?php echo $ai->id_alternatif; ?>"><?php echo $ai->nama; ?></option>
							
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-3">
						<label>ID Kriteria</label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="id_kriteria" disabled>
							<option value="<?php echo $ai->id_kriteria ?>"><?php echo $ai->nama_kriteria ?></option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-3">
						<label>Nilai</label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="nilai">
							<option value="<? echo $ai->nilai; ?>"><? echo $ai->nilai; ?></option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<div class="col-md-3">
						<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
					</div>
				</div>
			</form>
		<? } ?>
		</div>
	</div>
</div>