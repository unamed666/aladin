<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>

	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>

	<div class="form-group">
		<label>Tipe barang</label>
		<input type="number" class="form-control" name="tipe">
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea> 
	</div>

	<div class="form-group">
	<label>foto</label>
	<input type="file" class="form-control" name="foto">
	</div>

	<button class="btn btn-success btn-lg btn-block" name="save">Simpan</button>
</form>

<?php
if (isset($_POST['save'])) 
{
	$nama=$_FILES['foto']['name'];
	$lokasi=$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi,"assets/images/".$nama);

 	$koneksi->query("INSERT INTO tbl_produk (nama_produk, harga, kategori, gambar, deskripsi)
 		VALUES ('$_POST[nama]', '$_POST[harga]', '$_POST[tipe]','$nama', '$_POST[deskripsi]')");

 	echo "<div class='alert alert-into'>Data Tersimpan</div>";
 	echo "<meta http-equiv='refresh' content='l;url=<?=base_url()?>admin?halaman=produk'>";
 } 
 ?>