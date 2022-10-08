<h1><?php echo $judul ?></h1>

<!--$data_mahasiswa_single['nim'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda nim yang akan diupdate) -->
<form method="post" action="<?php echo site_url('mahasiswa/update_submit/' . $data_mahasiswa_single['nim']); ?>">
	<table class="table table-borderless table-responsive">
		<tr>
			<td>NIM</td>
			<!--$data_mahasiswa_single['nim'] : menampilkan data mahasiswa yang dipilih dari database -->
			<td><input type="text" name="nim" value="<?php echo $data_mahasiswa_single['nim']; ?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $data_mahasiswa_single['nama']; ?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<!--$data_mahasiswa_single['nama'] : menampilkan data mahasiswa yang dipilih dari database -->
			<td>
				<select name="fakultas_id" class="custom-select">
					<?php foreach ($data_fakultas as $fakultas) : ?>
						<?php if ($fakultas['id'] == $data_mahasiswa_single['fakultas_id']) : ?>
							<option value="<?php echo $fakultas['id']; ?>" selected><?php echo $fakultas['nama']; ?></option>
						<?php else : ?>
							<option value="<?php echo $fakultas['id']; ?>"><?php echo $fakultas['nama']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td class="custom-control custom-radio">
				<input type="radio" name="gender" value="Pria">Pria &emsp;
				<input type="radio" name="gender" value="Wanita">Wanita
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>