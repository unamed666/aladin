<!doctype html>
<html lang="en">
<head>
    <title>Aladin</title>
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
        <div class="section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center"  data-aos="fade-up">
                <h2 class="text order-1 order-md-2"> PESAN SEKARANG</h2>
                
                <p><a  id="buttonA" style="display:normal;background-color:black" class="btn btn-primary btn-outline-primary" onclick="document.getElementById('buttonB').style.display = 'inline';document.getElementById('button1').style.display = 'block';document.getElementById('button2').style.display = 'block';this.style.display = 'none'">Pesan disini</a></p>

                <p><a id="buttonB" style="display:none;background-color:black" class="btn btn-primary btn-outline-primary" onclick="document.getElementById('buttonA').style.display = 'inline';document.getElementById('button1').style.display = 'none';document.getElementById('button2').style.display = 'none';this.style.display = 'none'">Pesan disini</a></p>

                <a id="button1" style="display:none" href="<?=base_url()?>login_m"> <button style="background-color:black" class="btn btn-primary btn-outline-primary" >Masuk</button> </a>
                <p> </p>
                <a id="button2" style="display:none" href="<?=base_url()?>register"> <button style="background-color:black" class="btn btn-primary btn-outline-primary" >Daftar</button> </a>
                <p> </p>
              </div>
            </div>
          </div>
        </div> <!-- .section -->
        
       

      
      

      
      

 
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
  </body>
</html>