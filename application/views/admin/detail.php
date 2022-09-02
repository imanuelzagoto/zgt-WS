<div class="content-wrapper">
	<section class="content">
		<h4>DETAIL DATA BARANG</h4>

		<table class="table">
			<tr>
				<th>Nama Produk</th>
				<td><?php echo $detail->nama_brg ?></td>
			</tr>

			<tr>
				<th>Keterangan</th>
				<td><?php echo $detail->keterangan ?></td>
			</tr>

			<tr>
				<th>Kategori</th>
				<td><?php echo $detail->kategori ?></td>
			</tr>

			<tr>
				<th>Harga</th>
				<td><?php echo $detail->harga ?></td>
			</tr>

			<tr>
				<th>Stok</th>
				<td><?php echo $detail->stock ?></td>
			</tr>

		</table>

		<a href="<?php echo base_url('admin/data_barang/index'); ?>" class="btn btn-primary">Kembali</a>
	</section>
</div>