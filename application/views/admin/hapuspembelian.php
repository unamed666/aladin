<?php 
$ambil = $koneksi->query("SELECT * FROM tbl_order WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM tbl_order WHERE id='$_GET[id]'");
?>
<?php 
$ambil = $koneksi->query("SELECT * FROM tbl_detail_order WHERE order_id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM tbl_detail_order WHERE order_id='$_GET[id]'");

echo "<script>alert ('data telah dihapus');</script>";
echo "<script>location='admin?halaman=pembelian';</script>";
?>
