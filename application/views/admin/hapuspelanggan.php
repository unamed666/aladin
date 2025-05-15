<?php 

$ambil = $koneksi->query("SELECT * FROM member WHERE username_m='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM member WHERE username_m='$_GET[id]'");
?>

<?php 

$ambil = $koneksi->query("SELECT * FROM member WHERE username_m='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$koneksi->query("DELETE FROM member WHERE username_m='$_GET[id]'");

echo "<script>alert ('data telah dihapus');</script>";
echo "<script>location='admin?halaman=pelanggan';</script>";
?>