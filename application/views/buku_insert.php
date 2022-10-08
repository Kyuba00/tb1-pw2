<h1><?php echo $judul ?></h1>


<form method="post" action="<?php echo site_url('buku/insert_submit/'); ?>">
	<table class="table table-borderless table-responsive">
		<tr>
			<td>ID</td>
			<td><input class="form-control form-control" type="text" name="id" value="" required=""></td>
		</tr>
		<tr>
			<td>Kategori Buku</td>
			<td>
				<select name="kategori_buku_id" class="custom-select">
					<option selected>Open this select menu</option>
					<?php foreach ($data_kategori_buku as $kategori_buku) : ?>
						<option value="<?php echo $kategori_buku['id']; ?>">
							<?php echo $kategori_buku['nama']; ?>
						</option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input class="form-control form-control" type="text" name="judul" value="" required=""></td>
		</tr>
		<tr>
			<td>Stok Tersedia</td>
			<td><input class="form-control form-control" type="text" name="stok_tersedia" value=""></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input class="btn btn-primary" type="submit" name="submit" value="Simpan"></td>
		</tr>
	</table>
</form>