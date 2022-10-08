<!--link tambah data-->
<a href="<?php echo site_url('buku/insert'); ?>" class="btn btn-primary">
	<i class="fa fa-plus"> Tambah</i>
</a>
<a href="<?php echo site_url('buku/data_export'); ?>" class="btn btn-outline-info" style="float: right;">
	<i class="fas fa-download">Export Excel</i>
</a>
<br /><br />

<table class="table table-table-responsive-xl">
	<thead class="table-dark">
		<tr>
			<th>ID</th>
			<th>Kategori Buku</th>
			<th>Judul</th>
			<th>Stok Tersedia</th>
			<th>Cover</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_buku as $buku) : ?>
			<tr>
				<td><?php echo $buku['id']; ?></td>
				<td><?php echo $buku['nama_kategori_buku']; ?></td>
				<td><?php echo $buku['judul']; ?></td>
				<td><?php echo number_format($buku['stok_tersedia']); ?></td>
				<td><img src="<?php echo base_url() . 'upload_folder/' . $buku['cover']; ?>" width="100" /></td>
				<td>
					<a href="<?php echo site_url('buku/update/' . $buku['id']); ?>" class="btn btn-secondary">
						Ubah
					</a>

					<a href="<?php echo site_url('buku/delete/' . $buku['id']); ?>" class="btn btn-danger">
						Hapus
					</a>

					<a href="<?php echo site_url('buku/upload/' . $buku['id']); ?>" class="btn btn-success">
						Upload
					</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>