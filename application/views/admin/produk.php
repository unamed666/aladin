<h2>Data Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Keterangan</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_produk");?>
		<?php while ($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk'];?></td>
			<td><?php echo $pecah['harga'];?></td>
			<td><?php echo $pecah['deskripsi'];?></td>
			<td>
				<img src="<?=base_url()?>assets/images/<?php echo $pecah['gambar'];?>" width="200">
			</td>
			<td>
				<a href="<?=base_url()?>admin?halaman=detailproduk&id=<?php echo $pecah ['id_produk']; ?>" class="btn btn-info btn-lg">detail</a>
				<a href="<?=base_url()?>admin?halaman=ubahproduk&id=<?php echo $pecah ['id_produk']; ?>" class="btn btn-warning btn-lg">ubah</a>
				<a href="<?=base_url()?>admin?halaman=hapusproduk&id=<?php echo $pecah ['id_produk']; ?>" class="btn btn-danger btn-lg">hapus</a>
				
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="<?=base_url()?>admin?halaman=tambahproduk" class="btn btn-primary btn-lg">Tambah Data</a>



