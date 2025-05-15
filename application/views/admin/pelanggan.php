<h2>Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1?>
		<?php $ambil=$koneksi->query("SELECT * FROM member"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_m']; ?></td>
			<td><?php echo $pecah['notelp_m']; ?></td>
			<td><?php echo $pecah['alamat_m']; ?></td>
			<td>
				<a href="<?=base_url()?>admin?halaman=detailpelanggan&id=<?php echo $pecah['username_m']; ?>" class="btn btn-info ">detail</a>
				<button  class="btn btn-danger " onclick="myFunction()">hapus</button>
<script>
function myFunction() {
  var txt;
  if (confirm("Apakah anda yakin?")) {
    window.location.href="<?=base_url()?>admin?halaman=hapuspelanggan&id=<?php echo $pecah['username_m']; ?>";
  } else {
    txt = "Dibatalkan";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
