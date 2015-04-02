<section>
	<h2>Daftar tempat makan</h2>
	<?php echo anchor('admin/tempatmakan/edit', '<i class="glyphicon glyphicon-plus"></i> Tambahkan tempat makan'); ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama Restoran</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
<?php if(count($tempatmakan)): foreach($tempatmakan as $resto): ?>	
		<tr>
			<td><?php echo anchor('admin/tempatmakan/edit/' . $resto->id, $resto->NamaResto); ?></td>
			<td><?php echo btn_edit('admin/tempatmakan/edit/' . $resto->id); ?></td>
			<td><?php echo btn_delete('admin/tempatmakan/delete/' . $resto->id); ?></td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">Kami tidak menemukan adanya tempat makan</td>
		</tr>
<?php endif; ?>	
		</tbody>
	</table>
</section>