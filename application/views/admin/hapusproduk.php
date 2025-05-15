<?php 

$ambil = $koneksi->query("SELECT * FROM tbl_produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM tbl_produk WHERE id_produk='$_GET[id]'");

echo "<script>alert ('data telah dihapus');</script>";
echo "<script>location='admin?halaman=produk';</script>";