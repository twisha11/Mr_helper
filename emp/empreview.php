<?php  
$con=mysqli_connect("localhost","root","","helper");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    
    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="..'css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="../css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="../style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="..css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Modernizr JS -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".wish-icon i").click(function(){
            $(this).toggleClass("fa-heart fa-heart-o");
        });
    }); 
 </script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-dark fixed-top bg-light flex-md-nowrap shadow">
   <a href="#" class=" col-sm-3" style="float: left; margin-right: 75%; padding-bottom:10px;"> <img src="../images\logo.png" alt="logo" class="col-md-8"></a>
  </nav>  
<div class="container-fluid"  >
    <div class="row" >
        <nav class="col-sm-2 bg-light sidebar py-5" style="height: 650px; ">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                       <?php
   $uid=$_GET['user'];
   $id_o=$_GET['uid'];   
  echo'
                    <li class="nav-item"><a href="order.php?uid='.$id_o.'&user='.$uid.'"" class="nav-link"><i class="fa fa-fw fa-home"></i>REQUEST</a> </li>
                    <li class="nav-item"> <a href="empadmin.php?uid='.$id_o.'&user='.$uid.'" class="nav-link"><i class="fa fa-fw fa-wrench"></i>My Profile</a></li>
                    <li class="nav-item"> <a href="empreview.php?uid='.$id_o.'&user='.$uid.'" class="nav-link"><i class="fa fa-fw fa-envelope"></i>Review</a></li>
                    <li class="nav-item"> <a href="dash.php?uid='.$id_o.'&user='.$uid.'" class="nav-link"><i class="fa fa-fw fa-envelope"></i>Change password</a></li>
                    <li class="nav-item"> <a href="../logout.php" class="nav-link"><i class="fa fa-fw fa-user"></i>Logout</a></li>';?>

                
                </ul>
                
            </div>
        </nav>



        <div class="col-sm-6">
          <?php
           $cid=$_GET['user'];
         $id_o=$_GET['uid'];
          $qu="select * from empdetail,review where review.r_pid=empdetail.e_id && empdetail.e_uid='$cid' ";
          $re=mysqli_query($con,$qu);

           while ($o_row = mysqli_fetch_assoc($re)) 
           {
             echo '<div class="card">
                     <div class="card-header">
                     <h3>Name:'.$o_row['r_nm'].'</h3>

                     </div>
                     <div class="card-body">
                      
                       <h5 class="card-title"><b>Request email:</b>'.$o_row['r_email'].'</h5>
                       <h4 class="card-title"><b>comment:</b>'.$o_row['r_msg'].'</h4>
                      
                       <div class=float-right>
                       <form action="" method="post">
                       
                      
                       </form>
                       </div>
                     </div>


                  </div><br>';
           }


          ?>

       


        </div>

      
        
       


    </div>
    
</div>

     









    <!-- jquery latest version -->
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Framework js -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="../js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="../js/main.js"></script>
    <script >
        // optional
        $('#blogCarousel').carousel({
                interval: 5000
        });
    </script>
</body>
</html>