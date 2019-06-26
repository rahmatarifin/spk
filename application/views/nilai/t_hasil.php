<div class="col-12">
	<div class="card">
		<div class="card-head">
			<strong>Data</strong>Alternatif
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead align="center">
					<tr>
						<th>No. </th>
						<th>ID kriteria</th>
						<th>Kriteria</th>
						<th>Max</th>
					</tr>
				</thead>
				<tbody align="center">
					<tr>
						<?php $no = 1;  foreach ($hsl as $hl) {?>
							<td><?php echo $no; $no++; ?></td>
							<td><?php echo $hl->id_kriteria; ?></td>
							<td><?php echo $hl->nama_kriteria; ?></td>
							<td><?php echo $hl->hasil; ?></td>
					</tr>
						<? } ?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>