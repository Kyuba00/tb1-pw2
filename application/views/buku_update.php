<h1><?php echo $judul ?></h1>

<!--$data_buku_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('buku/update_submit/' . $data_buku_single['id']); ?>">
	<table class="table table-borderless table-responsive">
		<tr>
			<td>ID</td>
			<td><input class="form-control form-control" type="text" name="id" value="<?php echo $data_buku_single['id']; ?>" required=""></td>
		</tr>
		<tr>
			<td>Kategori Buku</td>
			<!--$data_buku_single['nama'] : menampilkan data kota yang dipilih dari database -->
			<td>
				<select name="kategori_buku_id" class="custom-select">
					<?php foreach ($data_kategori_buku as $kategori_buku) : ?>
						<?php if ($kategori_buku['id'] == $data_buku_single['kategori_buku_id']) : ?>
							<option value="<?php echo $kategori_buku['id']; ?>" selected><?php echo $kategori_buku['nama']; ?></option>
						<?php else : ?>
							<option value="<?php echo $kategori_buku['id']; ?>"><?php echo $kategori_buku['nama']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input class="form-control form-control" type="text" name="judul" value="<?php echo $data_buku_single['judul']; ?>" required=""></td>
		</tr>
		<tr>
			<td>Stok Tersedia</td>
			<td><input class="form-control form-control" type="text" name="stok_tersedia" value="<?php echo $data_buku_single['stok_tersedia']; ?>"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>