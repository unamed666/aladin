<h2>Detail Pembelian</h2>
<h3>
<?php  
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
	ON pembelian.id_pelanggan=pelanggan.id_pelanggan
	WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>


<strong><?php echo $detail['nama_pelanggan']; ?></strong> <br>
<p>
	<?php echo $detail['tlpn_pelanggan']; ?> <br>
	<?php echo $detail['email_pelanggan']; ?>
</p>

<p>
	Tanggal : <?php echo $detail['tgl_pembelian']; ?> <br>
	Total : <?php echo $detail['total_pembelian']; ?>
</p>
</h3>
