<h2>Data Pembelian</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Nomor Antrian</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Alamat</th>
			<th>Aksi</th>
			
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_order 
		JOIN member ON tbl_order.pelanggan=member.username_m
		ORDER BY tbl_order.id DESC"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id']; ?></td>
			<td><?php echo $pecah['nama_m'];  ?></td>
			<td><?php echo $pecah['tanggal']; ?></td>
			<td><?php echo $pecah['alamat_m']; ?></td>
			<td>
				<a href="<?=base_url()?>admin?halaman=detailpembelian&id=<?php echo $pecah['id']; ?>" class="btn btn-info">detail</a>
				<a href="<?=base_url()?>admin?halaman=hapuspembelian&id=<?php echo $pecah ['id']; ?>" class="btn btn-danger">hapus</a>
			</td>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>