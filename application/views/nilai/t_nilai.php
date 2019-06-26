<div class="col-12">
	<div class="card">
		<div class="card-head">
			<strong>Data</strong>Nilai
		</div>
		<div class="card-body">
			<form action="<?php echo base_url('index.php/nilai/tambah'); ?>" method="post">
				<div class="row form-group">
					<div class="col-md-3">
						<label>ID Alternatif</label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="id_alternatif">
							<?php foreach($alter as $u){
								echo "<option value=".$u->id_alternatif.">".$u->nama."</option>";
							} ?>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-3">
						<label>ID Kriteria</label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="id_kriteria">
							<?php foreach($krt as $y){
								echo "<option value=".$y->id_kriteria.">".$y->nama_kriteria."</option>";
							} ?>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-3">
						<label>Nilai</label>
					</div>
					<div class="col-md-3">
						<select class="form-control" name="nilai">
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
			<hr>
			<table class="table table-bordered">
				<thead align="center">
					<tr>
						<th>No. </th>
						<th>ID Nilai</th>
						<th>ID Alternatif</th>
						<th>Nama Alternatif</th>
						<th>ID Kriteria</th>
						<th>Kriteria</th>
						<th>Nilai</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody align="center">
					<tr>
						<?php $no = 1; foreach($alt as $x) { ?>
							<td><? echo $no; $no++; ?></td>
							<td><?php echo $x->id_nilai; ?></td>
							<td><?php echo $x->id_alternatif; ?></td>
							<td><?php echo $x->nama; ?></td>
							<td><?php echo $x->id_kriteria; ?></td>
							<td><?php echo $x->nama_kriteria; ?></td>
							<td><?php echo $x->nilai; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/nilai/edit/<?php echo $x->id_nilai; ?>">Edit</a>&nbsp; &nbsp;<a href="<?php echo base_url(); ?>index.php/nilai/hapus/<?php echo $x->id_nilai; ?>">Hapus</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>