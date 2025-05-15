<h2>Detail Pembelian</h2>
<?php  
$ambil = $koneksi->query("SELECT * FROM tbl_order 
JOIN member ON tbl_order.pelanggan=member.username_m
JOIN tbl_detail_order ON tbl_order.id=tbl_detail_order.order_id 
JOIN tbl_produk ON tbl_detail_order.produk=tbl_produk.id_produk
	WHERE tbl_detail_order.order_id='$_GET[id]'");
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

<table class="table table-bordered">
	<thead>
		<tr>
            <th>Nomor</th>
			<th>Nama Barang</th>
			<th>Harga</th>
			<th>Kuantitas</th>
            <th>Jumlah</th>
            <th>Detail Produk</th>
			
		</tr>
	</thead>
	<tbody>
        <?php $nomor=1?>
        
        <?php $ambil = $koneksi->query("SELECT * FROM tbl_order 
JOIN member ON tbl_order.pelanggan=member.username_m
JOIN tbl_detail_order ON tbl_order.id=tbl_detail_order.order_id 
JOIN tbl_produk ON tbl_detail_order.produk=tbl_produk.id_produk
	WHERE tbl_order.id='$_GET[id]'");
        while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
            <td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga'];  ?></td>
			<td><?php echo $pecah['qty']; ?></td>
			<td><?php echo $pecah['hargat']; ?></td>
			<td>
				<a href="<?=base_url()?>admin?halaman=detailproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-info">detail</a>
			</td>
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
	WHERE tbl_detail_order.order_id='$_GET[id]'");
    $detail = $ambil->fetch_assoc();
?>
<p align="right">Jumlah Total: Rp. <?php echo $detail['totalcount'];?>       </p>

