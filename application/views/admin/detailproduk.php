<h2>Detail Produk</h2>
<?php  
$ambil = $koneksi->query("SELECT * FROM tbl_produk JOIN tbl_kategori ON tbl_produk.kategori=tbl_kategori.id
	WHERE tbl_produk.id_produk='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?> 

<h3>
<strong><?php echo $detail['nama_produk']; ?></strong> <br>
<p>
	Harga : Rp.<?php echo $detail['harga']; ?> <br>
    Kategori : <?php echo $detail['nama_kategori']; ?> <br>
    Deskripsi : <?php echo $detail['deskripsi']; ?>  <br>
    <img src="<?=base_url()?>assets/images/<?php echo $detail['gambar'];?>" width="300">
</p>
</h3>


