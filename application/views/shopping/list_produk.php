
 <title>Belanja</title>
<a href="<?php echo base_url(); ?>index.php/login_m/logout" style="display:normal;background-color:black" class="btn btn-primary btn-outline-primary">Logout</a>
			</div>
<h2>Daftar Produk</h2>
<?php
	foreach ($produk as $row) {
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak">
              <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf-8">
                <a href="#"><img class="img-thumbnail" src="<?php echo base_url() . 'assets/images/'.$row['gambar']; ?>"/></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $row['nama_produk'];?></a>
                  </h4>
                  <h5>Rp. <?php echo number_format($row['harga'],0,",",".");?></h5>
                  <p class="card-text"><?php echo $row['deskripsi'];?></p>
                </div>
                <div class="card-footer">
                  
                  <input type="hidden" name="id" value="<?php echo $row['id_produk']; ?>" />
                  <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
                  <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                </div>
                </form>
              </div>
            </div>
<?php
	}
?>

       <!-- loader -->
       <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
    <script src="<?=base_url()?>js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?=base_url()?>js/popper.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>js/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap-datepicker.js"></script>
    <script src="<?=base_url()?>js/jquery.timepicker.min.js"></script>
    <script src="<?=base_url()?>js/jquery.stellar.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?=base_url()?>js/aos.js"></script>
    <script src="<?=base_url()?>js/main.js"></script>