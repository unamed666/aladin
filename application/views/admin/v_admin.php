<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<?php $koneksi = new mysqli("localhost","root","","aladin");?>
	<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a> 
            </div>
           
            <div style="color: white;
padding: 1px 1px -10px 1px;
text-align: center;
font-size: 30px;"> Halaman Admin &nbsp; 

</div>


  <div style="color: white;
padding: 1px 50px 5px 1px;
text-align: right;
font-size: 16px;"> 
<?php echo date('l,d-m-Y');?>
 </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?=base_url()?>img/logoaladin.jpg" class="user-image img-responsive"/>
                    <h2 style="color: white"><?php echo $this->session->userdata("nama"); ?></h2>

					</li>
					
                    <li><a href="<?=base_url()?>admin"><i class="fa fa-desktop fa-3x"></i> Home</a></li>
                    <li><a href="<?=base_url()?>admin?halaman=produk"><i class="fa fa-archive fa-3x"></i> Produk</a></li>
					<li><a href="<?=base_url()?>admin?halaman=pembelian"><i class="fa fa-book fa-3x"></i> Pembelian</a></li>
                    <li><a href="<?=base_url()?>admin?halaman=pelanggan"><i class="fa fa-users fa-3x"></i> Pelanggan</a></li>
                    <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out fa-3x"></i> Logout</a></li>
                
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="produk")
                    {
                        include'produk.php';
                    }
                    elseif ($_GET['halaman']=="pembelian")
                    {
                        include'pembelian.php';
                    }
                    elseif ($_GET['halaman']=="pelanggan") 
                    {
                        include'pelanggan.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include'detail.php';
                    }
                    elseif ($_GET['halaman']=="detailproduk")
                    {
                        include'detailproduk.php';
                    }
                    elseif ($_GET['halaman']=="detailpelanggan")
                    {
                        include'detailpelanggan.php';
                    }
                    elseif ($_GET['halaman']=="tambahproduk") 
                    {
                        include'tambahproduk.php';
                    }
                    elseif ($_GET['halaman']=="tambahpelanggan") 
                    {
                        include'tambahpelanggan.php';
                    }
                    elseif ($_GET['halaman']=="hapusproduk")
                    {
                        include'hapusproduk.php';
                    }
                    elseif ($_GET['halaman']=="hapuspembelian")
                    {
                        include'hapuspembelian.php';
                    }
                    elseif ($_GET['halaman']=="detailpembelian")
                    {
                        include'detailpembelian.php';
                    }
                    elseif ($_GET['halaman']=="hapuspelanggan")
                    {
                        include'hapuspelanggan.php';
                    }
                    elseif ($_GET['halaman']=="ubahproduk") 
                    {
                        include'ubahproduk.php';
                    }
                                   }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

</body>
</html>