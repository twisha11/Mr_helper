<?php
$con = mysqli_connect("localhost","root","","helper");
session_start();
?>



<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>mr.helper</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="js\jquery-3.3.1.min.js"></script>

   <!--------for validation password--------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
       <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images\logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                
                            </nav>
                            
                            <div class="mobile-menu clearfix d-block d-lg-none">
                                <nav id="mobile_dropdown">
                                  
                                </nav>
                            </div>  
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">  
                            
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
          
        </div>
    

        <!-- End Offset Wrapper -->
<section class="body" style="background: rgba(0, 0, 0, 0) url('images/bg.jfif')center center / cover ;   background-size: cover;
    background-position: center;
    display: block;
    width: 100%;
    height: 100%; ">
       `<div class="container">
       	<div class="login-box">
       	<div class="row">
               


       		<div class="col-md-6 login-left">
       			<h2>login here</h2>
       			<form action="validation.php" method="post">
                <?php
                 if (isset($_SESSION['wrong'])) {
                     echo '<div class="alert alert-warning col-md-8 ml-5 mt-2">'.$_SESSION['wrong'].'</div>';
                     unset($_SESSION['wrong']);
                 }



               ?>

       				<div class="form-group">
       					<label>email</label>
       					<input type="email" name="email" class="form-control" required autocomplete="off">
       				</div>
       				<div class="form-group">
       					<label>password</label>
       					<input type="password" name="password" class="form-control" required>
       				</div>
       				
       				<button type="submit" class="btn btn-primary">login</button>
       			</form>
       			
       		</div>


       		<div class="col-md-6 login-right">
       			<h2>register here</h2>
       			<form action="register.php" method="post" id="form">
       				<div class="form-group">
       					<label>name</label>
       					<input type="text" name="name" class="form-control" id="user" required autocomplete="off">
       				</div>
       				<div class="form-group">
       					<label>email</label>
       					<input type="text" name="email" class="form-control" id="validate" required autocomplete="off">
       				</div>
       				
       				
       				
       				<div class="form-group">
       					<label>password</label>
       					<input type="password" name="pass"  id="pass" class=" form-control" required><br>
                <input type="checkbox" onclick="myFunction()">Show Password

       				</div>
       				<div class="form-group">
       					<label>conform password</label>
       					<input type="password" name="confpass" id="confpass" class=" form-control" required>
                         <div class="form-group">
							<span class="error" style="color:red"></span><br />
						</div>
                         <label>Role</label><br>
                         <input type="radio" name="role" value="admin" required >admin
                         <input type="radio" name="role" value="employee" required>employee<br><br>
                        
       				<input type="submit" id="submit" class="btn btn-primary" value="register">
       			</form>
       		
       		</div>
       		
       	</div>
       	<br><br><br><br>
       </div>
   </div>
  
<script>
		var allowsubmit = false;
		$(function(){
			//on keypress 
			$('#confpass').keyup(function(e){
				//get values 
				var pass = $('#pass').val();
				var confpass = $(this).val();
				
				//check the strings
				if(pass == confpass){
					//if both are same remove the error and allow to submit
					$('.error').text('');
					allowsubmit = true;
				}else{
					//if not matching show error and not allow to submit
					$('.error').text('Password not matching');
					allowsubmit = false;
				}
			});
			
			//jquery form submit
			$('#form').submit(function(){
			
				var pass = $('#pass').val();
				var confpass = $('#confpass').val();
 
				//just to make sure once again during submit
				//if both are true then only allow submit
				if(pass == confpass){
					allowsubmit = true;
				}
				if(allowsubmit){
					return true;
				}else{
					return false;
				}
			});
		});
	</script>



</section>
      </div>
           
   
    <!-- Body main wrapper end -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Framework js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

    <!------show password------>
    <script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</body>

</html>