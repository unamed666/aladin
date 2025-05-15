<!doctype html>
<html lang="en">
<head>
    <title>Form Registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?=base_url()?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url()?>css/jquery.timepicker.css">

    <link rel="stylesheet" href="<?=base_url()?>fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?=base_url()?>fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?=base_url()?>css/style.css">
  </head>
	<body>
	<div class="container">
		<div  class="card">
			<div class="card-header"  >
			</div>
			<div style='background-color:#141315'class="card-body">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				<form method="post" action="<?php echo base_url(); ?>index.php/register/proses">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username"></input>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" class="form-control" name="password" id="password" placeholder="MasukanPassword"></input>
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama"></input>
					<div class="form-group">
						<label for="nohp">No.Handphone</label>
						<input type="number" class="form-control" name="notelp" id="notelp" placeholder="Masukan No.Handphone"></input>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea type="textarea" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat"></textarea>
					</div>
					<button type="submit"class="btn btn-primary btn-outline-primary">Daftar</button>
				</form>
			</div>
		</div>
	</div>		
	
	




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

<script src="<?=base_url()?>js/aos.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

<script src="<?=base_url()?>js/main.js"></script>
	</body>
</html>