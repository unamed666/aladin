<title>Sukses</title>
<h2>Proses Pemesanan Berhasil</h2>


<?php $koneksi = new mysqli("localhost","root","","aladin");?>
<?php $ambil = $koneksi->query("SELECT * from tbl_order INNER JOIN member ON tbl_order.pelanggan=member.username_m order by tbl_order.id DESC ");
?>
<?php $detail = $ambil->fetch_assoc();?>
<div class="kotak2">
    <center><h3>Nomor pesanan adalah</h3></center>

    <h2><?php echo $detail['id']?></h2>
    <?php $total = $detail['id']?>


    <table class="table">
    <thead>
		<tr>
            <th>Nomor</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Jumlah</th>
            <th>Total</th>
		</tr>
	</thead>
	<tbody>
        <?php $nomor=1?>
        
        <?php $ambil = $koneksi->query("SELECT * FROM tbl_order 
JOIN member ON tbl_order.pelanggan=member.username_m
JOIN tbl_detail_order ON tbl_order.id=tbl_detail_order.order_id 
JOIN tbl_produk ON tbl_detail_order.produk=tbl_produk.id_produk
WHERE tbl_order.id='$total'");
        while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
            <td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga'];  ?></td>
			<td><?php echo $pecah['qty']; ?></td>
			<td><?php echo $pecah['hargat']; ?></td>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
        </tbody>
        </table>

        
<?php  
$ambil = $koneksi->query("SELECT sum(hargat) AS totalcount FROM tbl_order 
JOIN member ON tbl_order.pelanggan=member.username_m
JOIN tbl_detail_order ON tbl_order.id=tbl_detail_order.order_id 
JOIN tbl_produk ON tbl_detail_order.produk=tbl_produk.id_produk
	WHERE tbl_detail_order.order_id='$total'");
    $detail2 = $ambil->fetch_assoc();
?>
<h5 align="right"><b>Jumlah Total:</b> Rp. <?php echo $detail2['totalcount'];?> </h5>

<p>Silahkan konfirmasi Pembelian</p>
<a style="display:normal;background-color:black" class="btn btn-primary btn-outline-primary" href="https://api.whatsapp.com/send?phone=6285157062244&text=%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%0ANomor%20Pesanan%3D<?php echo $detail['id']?>%0A%0A
<?php  
$ambil = $koneksi->query("SELECT * FROM tbl_order 
JOIN member ON tbl_order.pelanggan=member.username_m
JOIN tbl_detail_order ON tbl_order.id=tbl_detail_order.order_id 
JOIN tbl_produk ON tbl_detail_order.produk=tbl_produk.id_produk
	WHERE tbl_detail_order.order_id='$total'");
$detail = $ambil->fetch_assoc();
?>
Nama%20%3A%20<?php echo $detail['nama_m'];?>%0ANo.HP%20%3A%20<?php echo $detail['notelp_m'];?>%0AAlamat%20%3A%20<?php echo $detail['alamat_m'];?>%0A%0APesanan%20%3A%0A%0ANo.%20Nama%20Makanan%20-%20Harga%20-%20Jumlah%20-%20Total%0A
<?php $nomor=1?>
<?php $ambil2 = $koneksi->query("SELECT * FROM tbl_order 
JOIN member ON tbl_order.pelanggan=member.username_m
JOIN tbl_detail_order ON tbl_order.id=tbl_detail_order.order_id 
JOIN tbl_produk ON tbl_detail_order.produk=tbl_produk.id_produk
WHERE tbl_order.id='$total'");
        while($pecah=$ambil2->fetch_assoc()){ ?><?php echo $nomor; ?>. 
<?php echo $pecah['nama_produk']; ?> - 
<?php echo $pecah['harga'];  ?> - 
<?php echo $pecah['qty']; ?> - 
<?php echo $pecah['hargat']; ?>%0A
<?php $nomor++; ?>
<?php } ?>
<?php  
$ambil = $koneksi->query("SELECT sum(hargat) AS totalcount FROM tbl_order 
JOIN member ON tbl_order.pelanggan=member.username_m
JOIN tbl_detail_order ON tbl_order.id=tbl_detail_order.order_id 
JOIN tbl_produk ON tbl_detail_order.produk=tbl_produk.id_produk
WHERE tbl_detail_order.order_id='$total'");
$detail = $ambil->fetch_assoc();
?>
%0ATotal%20harga%3A%20Rp. <?php echo $detail['totalcount'];?>%0A%0A
==============================">Konfirmasi</a>

</div>