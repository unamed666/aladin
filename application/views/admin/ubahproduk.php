<h2>Ubah Produk</h2>

<?php 
$ambil = $koneksi->query ("SELECT * FROM tbl_produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk'];?>">
	</div>
	<div class="form-group">
		<label>Harga Produk</label>
		<input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga'];?>">
	</div>
	<div class="form-group">
		<label>Tipe Produk</label>
		<input type="number" name="tipe" class="form-control" value="<?php echo $pecah['kategori'];?>">
	</div>
	<div class="form-group">
		<img src="<?=base_url()?>assets/images/<?php echo $pecah['gambar'];?>" width="300">
		</div>
	<div class="form-group">
		<label>Ganti foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<div class="form-group">
		<label>Deskripsi Produk</label>
		<textarea name="deskripsi" class="form-control" rows="10">
			<?php echo $pecah['deskripsi'];?> </textarea> 
	</div>
	<button class="btn btn-success btn-lg btn-block" name="ubah">Ubah</button>
	<button class="btn btn-danger btn-lg" name="kembali">kembali</button>
</form>

<?php

if (isset($_POST['ubah'])) 
{
	$namafoto=$_FILES['foto']['name'];
	$lokasifoto=$_FILES['foto']['tmp_name'];
	
	
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto,"assets/images/$namafoto");
	
 	$koneksi->query("UPDATE tbl_produk SET nama_produk='$_POST[nama]',harga='$_POST[harga]',kategori='$_POST[tipe]',gambar='$namafoto',deskripsi='$_POST[deskripsi]'
		 WHERE id_produk='$_GET[id]'");
	}
	else{
		$koneksi->query("UPDATE tbl_produk SET nama_produk='$_POST[nama]',harga='$_POST[harga]',kategori='$_POST[tipe]',deskripsi='$_POST[deskripsi]'
		WHERE id_produk='$_GET[id]'");	
	}
	echo "<script>alert ('data telah diubah');</script>";
	echo "<script>location='admin?halaman=produk';</script>";
 }

 elseif (isset($_POST['kembali'])) 
 {
	echo "<script>location='<?=base_url()?>admin?halaman=produk';</script>";
 }
		  
  
 
 

 	
 ?>