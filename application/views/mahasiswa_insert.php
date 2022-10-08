<h1><?php echo $judul ?></h1>


<form method="post" action="<?php echo site_url('mahasiswa/insert_submit/'); ?>">
	<table class="table table-borderless table-responsive">
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" value="" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<!--$data_mahasiswa_single['nama'] : menampilkan data mahasiswa yang dipilih dari database -->
			<td>
				<select name="fakultas_id" class="custom-select">
					<option selected>Open this select menu</option>
					<?php foreach ($data_fakultas as $fakultas) : ?>
						<option value="<?php echo $fakultas['id']; ?>">
							<?php echo $fakultas['nama']; ?>
						</option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td class="custom-control custom-radio">
				<input type="radio" name="gender" value="Pria"> Pria &emsp;
				<input type="radio" name="gender" value="Wanita"> Wanita
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>