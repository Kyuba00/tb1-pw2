<form method="post" action="<?php echo site_url('kategori_buku/insert_submit/'); ?>">
	<table class="table table-borderless table-responsive">
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" value="" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>