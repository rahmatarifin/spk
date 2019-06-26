<div class="col-12">
	<div class="card">
		<div class="card-head">
			<strong>Data</strong>Kriteria
		</div>
		<div class="card-body">
			<form action="<?php echo base_url('index.php/krt/tambah'); ?>" method="post">
				<div class="row form-group">
		<div class="col-md-3">
			<label>Nama</label>
		</div>
		<div class="col-md-3">
			<input type="text" name="nama" class="form-control">
		</div>
		<div class="col-md-3">
			<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</div></div>
			</form>
			<hr>
			<table class="table table-bordered">
				<thead align="center">
					<tr>
						<th>No. </th>
						<th>Id Kriteria</th>
						<th>Nama Kriteria</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody align="center">
					<tr>
						<?php $no = 1; foreach($krt as $x) { ?>
							<td><? echo $no; $no++; ?></td>
							<td><?php echo $x->id_kriteria; ?></td>
							<td><?php echo $x->nama_kriteria; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/krt/edit/<?php echo $x->id_kriteria; ?>">Edit</a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/krt/hapus/<?php echo $x->id_kriteria; ?>">Hapus</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>