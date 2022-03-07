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

</head>
<body>
  <nav class="navbar navbar-dark fixed-top bg-light flex-md-nowrap shadow">
   <a href="#" class=" col-sm-3" style="float: left; margin-right: 75%; padding-bottom:15px;"> <img src="../images\logo.png" alt="logo" class="col-md-6"></a>
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
        <?php
     
                 ?>

        <?php 
       $uid=$_GET['user'];
    $id_o=$_GET['uid'];  
        $sq = "select * from empdetail,reg,subcat,category where reg.id=$id_o and empdetail.e_uid=reg.email and empdetail.e_cat=subcat.s_id and subcat.s_cat=category.id";
        $a_r =mysqli_query($con,$sq);
        $o_row = mysqli_fetch_assoc($a_r);
        
    

         echo'<div class="col-sm-4 jumbotron bg-light ml-4 " style="height:350px; ">
            <form action="detail-update.php?uid='.$id_o.'&user='.$uid.'" method="post">
              <h3 class="text-center"><b>Main detail</b></h3>
              <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                
               </div>
              </div>
              </div>
               <div class="form-group ">
                <label>your name</label>
                <input type="text" name="" class="form-control" value='.$o_row['email'].' readonly>
              </div>

  



              <div class="form-row">
              <div class="form-group col-md-6"  >
                <label>main category</label>
                <input type="text" name="" class="form-control"  value='.$o_row['cat_name'].' readonly>
                
              </div>
              <div class="form-group col-md-6">
                <label>subcategory</label>
                <input type="text" name="" class="form-control" value='.$o_row['s_nm'].' readonly>
                
              </div>
              
            </div>

            
              
              
            </form>

            <center>
             <div >
               <h6 style="color:green;"> only read this information</h6>


              </div>
              </center>
              
            
          </div>';?>




    


   
 <?php 
       $uid=$_GET['user'];
    $id_o=$_GET['uid'];  
        $sq = "select * from empdetail,reg,subcat where reg.id=$id_o and empdetail.e_uid=reg.email and empdetail.e_cat=subcat.s_id";
        $a_r =mysqli_query($con,$sq);
        $o_row = mysqli_fetch_assoc($a_r);
        
      

         echo'<div class="col-md-5 jumbotron bg-light ml-4 ">
            <form action="detail-update.php?uid='.$id_o.'&user='.$uid.'" method="post">
              <h3 class="text-center"><b>Profile detail</b></h3>
               
               



              
              <div class="row">
              <div class="col-md-5">
                <div class="form-group ">
                <img src="../pic/'.$o_row['image'].'" style="width:700px; height: 200px;">
               </div>
              </div>
              </div>
               <div class="form-group ">
                <label>your name</label>
                <input type="text" name="name" class="form-control" value='.$o_row['e_name'].'>
              </div>
              
             
             
              <div class="form-group">
                <label>description</label>
                <textarea class="form-control " rows=5 name="desc">'.$o_row['e_desc'].'</textarea>
                
              </div>



              <div class="form-row">
              <div class="form-group col-md-6"  >
                <label>price</label>
                <input type="text" name="price" class="form-control"  value='.$o_row['e_price'].'>
                
              </div>
              <div class="form-group col-md-6">
           
               
              </div>
                
              
              
            </div>
             
           

            

            ';?>
             <?php
                 if (isset($_SESSION['update'])) {
                   echo' <div class="alert alert-warning col-md-8 ml-5 mt-2">'.$_SESSION['update'].'</div>';
                     unset($_SESSION['update']);
                 }
            ?>
            <br><br> <br><br>
             <center>
             <div class="form-group " >
                
                <input type="submit" value="update" name="update" class=" btn btn-success" >
               
                
              </div>
              </center>
              
            </form>
            
          </div>

  
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