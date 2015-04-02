<h3><?php echo empty($tempatmakan->id) ?
'Masukkan tempat makan baru' : 'Edit tempat makan ' . $tempatmakan->NamaResto; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Nama Restoran</td>
		<td><?php echo form_input('NamaResto', set_value('Nama Restoran', $tempatmakan->NamaResto)); ?></td>
	</tr>
        <tr>
		<td>Alamat Restoran</td>
		<td><?php echo form_input('AlamatResto', set_value('Alamat Restoran', $tempatmakan->AlamatResto)); ?></td>
	</tr>
	<tr>
		<td>Nomor Telepon Restoran</td>
		<td><?php echo form_input('NomorResto', set_value('Nomor Telepon Restora', $tempatmakan->NomorResto)); ?></td>
	</tr>
	<tr>
		<td>Email Restoran</td>
                <td><?php echo form_input('EmailResto', set_value('Email Restoran', $tempatmakan->EmailResto)); ?></td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>
