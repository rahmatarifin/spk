<div class="col-12">
	<div class="card">
		<div class="card-head">
			<strong>Data</strong>Alternatif
		</div>
		<div class="card-body">
			<form action="<?php echo base_url('index.php/alter/tambah'); ?>" method="post">
				<div class="row form-group">
					<div class="col-md-3">
						<label>Id Alternatif</label>
					</div>
					<div class="col-md-3">
						<input type="text" name="id_alternatif" class="form-control" value="<?php echo $cod; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-3">
						<label>Nama</label>
					</div>
					<div class="col-md-3">
						<input type="text" name="nama" class="form-control">
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
						<th>Id</th>
						<th>Nama</th>
						<th>No. WA</th>
						<th width="300">Aksi</th>
					</tr>
				</thead>
				<tbody align="center">
					<tr>
						<?php $no = 1; foreach($alt as $x) { ?>
							<td><? echo $no; $no++; ?></td>
							<td><?php echo $x->id_alternatif; ?></td>
							<td><?php echo $x->nama; ?></td>
							<td><?php echo $x->no_wa; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/alter/f_edit/<?php echo $x->id_alternatif; ?>"><button class="btn btn-sm btn-secondary">Edit</button></a>&nbsp; &nbsp;<a href="<?php echo base_url(); ?>index.php/alter/hapus/<?php echo $x->id_alternatif; ?>"><button class="btn btn-sm btn-danger">Hapus</button></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/nilai/pe_alter/<?php echo $x->id_alternatif; ?>"><button class="btn btn-sm btn-primary">Tambah Nilai</button></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>