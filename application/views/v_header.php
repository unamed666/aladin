<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <link rel="icon" href="<?=base_url()?>/img/logoaladin2.png" type="img/png">
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
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url()?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?=base_url()?>css/style.css">
  </head>
  <body>
  <div class="site-wrap">
      
      <nav class="site-menu">
        <div class="site-menu-inner">
          <ul class="list-unstyled">
            <li><a href="<?=base_url()?>">Home</a></li>
            <li><a href="<?=base_url('aladin/menu')?>">Menu</a></li>
            <li><a href="https://goo.gl/maps/RW5BTyVVPv9V4dMH9">Lokasi</a></li>
            <li class="active"><a href="<?=base_url('shopping')?>">Pesan Sekarang</a></li>
            <li><a href="<?=base_url()?>aladin/about">Tentang Kami</a></li>
            <li><a href="https://api.whatsapp.com/send?phone=6285157062244">Kontak</a></li>
            <li><a href="<?=base_url()?>login">Admin</a></li>
          </ul>
        </div>
      </nav>

      <header class="site-header">
        <div class="row align-items-center">
          <div class="col-5 col-md-3">
             <ul class="list-unstyled social">
              <li><a href="https://web.facebook.com/people/Aladin-Dramaga/100058405014488/"><span class="fa fa-facebook"></span></a></li>
              <li><a href="https://www.instagram.com/aladindramaga/"><span class="fa fa-instagram"></span></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=6285157062244"><span class="fa fa-whatsapp"></span></a></li>
            </ul>
          </div>
          <div class="col-2 col-md-6 text-center">
            <a href="<?=base_url()?>"><img  class="sitelogo" style="text-outline: 10px 10px #000000;width:200%;max-width:100px;height:auto;"src="<?=base_url()?>img/logoaladin2.png"></a>
          </div>
          <div class="col-5 col-md-3 text-right menu-burger-wrap">
            <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>

          </div>
        </div>
       
      </header> <!-- site-header -->
      
      <div class="main-wrap">
        <div class="cover_1 cover_sm">
          <div class="img_bg" style="background-image: url(<?=base_url()?>img/makanan3-2.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7" data-aos="fade-up">
                  <h2 class="heading"><p style="text-align:center;text-outline: 10px 10px #000000;text-shadow:-1px -1px 0 #000,2px -2px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;"><?php echo $judul ?></p></h2>
                  <p class="lead"> <p style="color:white;text-align:center"><?php echo $alamat ?></p>
</p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .cover_1 -->

</body>
</html>
