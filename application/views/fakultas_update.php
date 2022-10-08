<!--$data_fakultas_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('fakultas/update_submit/' . $data_fakultas_single['id']); ?>">
	<table class="table table-borderless table-responsive">
		<tr>
			<td>ID</td>
			<!--$data_fakultas_single['id'] : menampilkan data fakultas yang dipilih dari database -->
			<td><input type="text" name="id" value="<?php echo $data_fakultas_single['id']; ?>" required="" class="form-control form-control"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<!--$data_fakultas_single['nama'] : menampilkan data fakultas yang dipilih dari database -->
			<td><input type="text" name="nama" value="<?php echo $data_fakultas_single['nama']; ?>" required="" class="form-control form-control"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>