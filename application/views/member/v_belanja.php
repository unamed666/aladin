<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/register.css">
		<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
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
    <!-- CDN Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/07323268fb.js"></script>
</head>
	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Home Page
			</div>
			<div class="card-body">
				<h1>Selamat Datang <?php echo $this->session->userdata('nama_m'); ?></h1>
				<hr/>
				<a href="<?php echo base_url(); ?>index.php/login_m/logout" class="btn btn-primary btn-lg btn-block">Logout</a>

			</div>
		</div>
	</div>
	<div class="container">
        <br><br>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="table-responsive">
                    <h3 class="text-center">Daftar Produk</h3>
                    <br>
                    <?php
                    foreach ($barang as $row) {
                        echo ' <div class="col-md-4 text-center" style="padding: 20px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; ">
                        <img src="' . base_url() . 'img/' . $row->gambar_b . '" alt="" class="img-thumbnail" /> <br>
                        <h4>' . $row->nama_b . '</h4>
                        <h3 class="text-danger">' . $row->harga_b . '</h3>
                        <input type="number" name="quantity" class="form-control quantity" id="' . $row->id_b . '" placeholder="jumlah">
                        <button type="button" name="add_cart" class="btn btn-success mt-2 add_cart" data-productname="' . $row->nama_b . '" data-price="' . $row->harga_b . '" data-productid="' . $row->id_b . '"><i class="fa fa-cart-plus"></i> Tambah</button>
                        </div>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div id="cart_detail">
                    <h3 class="text-center">Keranjang kosong</h3>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $(".add_cart").click(function() {
            var id_b = $(this).data("productid");
            var nama_b = $(this).data("productname");
            var harga_b = $(this).data("price");
            var quantity = $('#' + id_b).val(); // ambil value inputan dari id yg dipilih

            //cek jika quantity = 0
            if (quantity != '' && quantity > 0) {
                //jika quantity lebih dari 0, request dengan ajax
                $.ajax({
                    url: "<?= base_url(); ?>belanja/add",
                    method: "POST",
                    //kirim data ke server
                    data: {
                        id_b: id_b,
                        nama_b: nama_b,
                        harga_b: harga_b,
                        quantity: quantity
                    },
                    //jika berhasil
                    success: function(data) {
                        alert("Produk telah ditambahkan ke keranjang!");
                        $("#cart_detail").html(data);
                        $("#" + id_b).val('');
                    }
                });
            } else {
                alert("Silahkan masukkan quantity!");
            }
        });
        // load data
        $("#cart_detail").load("<?= base_url(); ?>belanja/load");

        //request remove product dari keranjang
        $(document).on('click', '.remove_inventory', function() {
            var row_id = $(this).attr("id");
            if (confirm("apakah kamu mau hapus item ini?")) {
                $.ajax({
                    url: "<?= base_url(); ?>belanja/remove",
                    method: "POST",
                    data: {
                        row_id: row_id
                    },
                    success: function(data) {
                        alert("product dihapus dari keranjang belanja");
                        $("#cart_detail").html(data);
                    }
                });
            } else {
                return false;
            }
        });

        // request kosongkan keranjang
        $(document).on("click", "#clear_cart", function() {
            if (confirm("Anda mau mengosongkan keranjang?")) {
                $.ajax({
                    url: "<?= base_url(); ?>belanja/clear_cart",
                    success: function(data) {
                        alert("belanja telah kosong!");
                        $("#cart_detail").html(data);
                    }
                });
            } else {
                return false;
            }
        });
         // request beli keranjang
         $(document).on("click", "#buy_cart", function() {
            if (confirm("Beli di keranjang?")) {
                $.ajax({
                    url: "<?= base_url(); ?>belanja/buy_cart",
                    success: function(data) {
                        alert("belanja telah kosong!");
                        $("#cart_detail").html(data);
                    }
                });
            } else {
                return false;
            }
        });
    });
</script>

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
</html>
	</body>
</html>