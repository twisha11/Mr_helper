<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();
if (!isset($_SESSION['emp'])) {
    echo '<div class="alert alert-warning col-lg-8">already register</div>';
   header('location:login-register.php');
}else {
    $sid=$_SESSION['emp'];
}


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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="../css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="../css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="../style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="../css/responsive.css">
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
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="../images\logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    <li class="drop" ><a href="#">your detail</a>
                                    </li>
                                    <li><a href="#">your order</a></li>
                                </ul>
                            </nav>

                            
                            
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">  
                            <ul class="menu-extra">

                               
                                <li><a href="login-register.php"><span class="ti-user"></span></a></li>
                                                              
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
    
        <!-- End Header Style -->
        
        
    <br><br><br><br><br><br>




    <section >
        <div class="container" style="border: 2px solid; " >
        <div class="row" >
            
            <div class="col-md-6" style="margin-left: 30%;" >
             
                <?php 
                $query_s="select * from ereg where id_e='$sid'";
                $run_s=mysqli_query($con,$query_s);
                $row_s = mysqli_fetch_array($run_s);
                $uid = $row_s['id_e'];
                $user=$_GET['uid'];

               echo '<form action="emp_process.php?uid='.$uid.'&id='.$user.'" method="post" enctype="multipart/form-data">';?>
                   
                <h2><b>FILL DETAIL OF EMPLOYEE</b></h2>
                <hr>
               <?php
                 if (isset($_SESSION['done'])) {
                     echo '<font color="green">'.$_SESSION['done'].'</font>';
                     unset($_SESSION['done']);
                 }



               ?>


                <br>

                <label>Profile image</label>
                <input type="file" name="image" class="form-control" style="border-radius: 20%; width: 30%;height: 70%;  ">
                <label>Enter name</label>
                <input type="text" name="name" class="form-control" required autocomplete="off"><br>
                 <label>select your work</label>
                <select name="cat" class="form-control" style="height:35px;">

                    <?php

                    $qu = "select * from category ";
                    $run=mysqli_query($con,$qu);
                    while ($row=mysqli_fetch_assoc($run)) 
                    {
                     
                     echo '<optgroup label="'.$row['cat_name'].'">';
                     
                     $scat="select * from subcat where s_cat=".$row['id'];
                     $scatres=mysqli_query($con,$scat);

                     while($scatrow=mysqli_fetch_assoc($scatres)){
                     echo '<option value="'.$scatrow['s_id'].'">'.$scatrow['s_nm'].'</option>';

                      }
                     echo '</optgroup>';  
                    }



                    ?>
                </select><br>

                <label>describe your full detail</label>
                <textarea class="form-control" name="desc" rows="4" cols="13" required> </textarea><br>

                <label>price</label>
                <input type="text" name="price" class="form-control" required autocomplete="off"><br>

                <br>
               <input type="submit" name="submit" class="btn btn-danger" id="myBtn">
           
                </form>
            </div>

        </div>
        </div>


    </section>


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