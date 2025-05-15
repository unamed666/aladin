<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/login.css">
</head>




<body>

	
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
	

  <div class="signin">
    <div class="back-img">
      <div class="sign-in-text">
        
        <h2  class="active" >Sign In </h2>
        
      </div><!--/.sign-in-text-->
      <div class="layer">
      </div><!--/.layer-->
      <p class="point">&#9650;</p>
    </div><!--/.back-img-->
    <div class="form-section">
     
      <form action="#">
        <!--Email-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <p class="mdl-textfield__error">Masukan username</p>

          <input class="mdl-textfield__input" type="text"name="username" placeholder="Username">
          
        </div>
       
        <!--Password-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <p class="mdl-textfield__error">Masukan password</p>
          <input class="mdl-textfield__input" type="password" name="password" placeholder="Password">
          
          
        </div>
        <br/>
        
        <!--CheckBox--
        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
        <span class="keep-text mdl-checkbox__label">Keep me Signed In</span>-->
       <p><a href="<?php echo base_url(); ?>">kembali ke menu utama</a></p>
      </label>
      </form>
    </div><!--/.form-section-->
    
    
    <button type="submit" class="sign-in-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored" value="Login">
      <div class ="submit"><b>Masuk</b></div> 
	</button>
	<!--/button-->
 </div><!--/.signin-->
</body>
</html>