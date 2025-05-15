<h2>Detail Pelanggan</h2>
<?php  
$ambil = $koneksi->query("SELECT * FROM member 
	WHERE member.username_m='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

<h3>
<strong><?php echo $detail['nama_m']; ?></strong> <br>
<p>
   Username : <?php echo $detail['username_m']; ?> <br>
    No.Telepon : <?php echo $detail['notelp_m']; ?> <br>
    Alamat : <?php echo $detail['alamat_m']; ?>  <br>
</p>
</h3>


