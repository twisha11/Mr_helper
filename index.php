<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();
if (isset($_GET['id'])) {
    $id=$_GET['id'];
     }
     else{
        $id=0;
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
                                    <img src="images\logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    <li class="drop" ><a href="index.php">Home</a>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    
                                </ul>
                            </nav>

                            
                            
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">  
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block"><span class="ti-search"></span></li>
                                <?php
                                if (isset($_SESSION['log'])) {
                                    
                                     echo'<li><a href="logout.php" class="btn btn-info"><span class="ti-user"></span> logout</a></li>
                                          <li><a href="yrorder.php?uid='.$id.'" ><span class="ti-shopping-cart"></span> </a></li>

                                     ';
                                     
                                    
                                }else{
                                    echo'<li><a href="login-register.php" class="btn btn-info"><span class="ti-user"></span> login</a></li>';
                                          
                                
                                 }

                                 
                              
                                ?>
                                
                                
                                
                               
                            </ul>
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
                                <form action="search.php" method="post">
                                    <input placeholder="Search here... " type="text" name="search">
                                    <button type="submit" name="submitsearch"></button>
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
          
       </div>
        <!-- Start Slider Area -->
        <div class="slider__container slider--one">
            <div class="slider__activation__wrap owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url('images/lABOR12.jpg') no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>mr.Helper<span class="text--theme">welcome</span></h1>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="cart.html"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url('images/y.jpg') no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>welcome<span class="text--theme"></span></h1>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="cart.html">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>


<?php

$tab_query = "SELECT * FROM category  id";
$tab_r = mysqli_query($con,$tab_query);
$tab_menu = '';
$tab_content = '';
$count = 0;


while ($row = mysqli_fetch_array($tab_r)) 
{
  if ($count == 0) 
  {
   $tab_menu .='<li class="active"><a href="#'.$row["id"].'" data-toggle="tab">'.$row["cat_name"].'</a></li>'; 

   $tab_content .= '<div id="'.$row["id"].'" class="tab-pane fade in active"> ';  
  }
  else
  {
  $tab_menu .='<li><a href="#'.$row["id"].'" data-toggle="tab">'.$row["cat_name"].'</a></li>';  

  $tab_content .= '<div id="'.$row["id"].'" class="tab-pane fade">'; 

  }

  $product_q = " select * from subcat where s_cat = '".$row["id"]."'";
  $product_r = mysqli_query($con,$product_q);

  while ($sub_row = mysqli_fetch_array($product_r)) 
  {
    
     $tab_content .= ' <div class="col-md-3" style="margin-bottom:36px;">
     <img src="img/'.$sub_row["s_img"].'" class="img-responsive img-thumbnail" />;
      <br><br>
     <center><a href="list.php?id='.$sub_row['s_id'].'&cat='.$sub_row['s_nm'].'&uid='.$id.'"><button class="btn btn-defult ">'.$sub_row["s_nm"].'</button></a></center>

     </div>';

  }
  $tab_content .= '<div style="clear:both"></div></div>';
  $count++;
}
?>

<br><br>
<div class="container">
   <b><u> <h2 align="center">CATEGORY</h2></u></b><br>

    <ul class="nav nav-tabs" >
     <?php  echo $tab_menu; ?>
    </ul>
    <br><br>
    <div class="tab-content">
    <?php  echo $tab_content ?>
    </div>

    
</div>


</div>
   <center> <h2>New services</h2></center><br><br>

        <div class="container">
        <div class="row">
        <?php
          $qr="select * from empdetail order by rand() LIMIT 0,4";
          $rs=mysqli_query($con,$qr);

        while ($l_row=mysqli_fetch_assoc($rs)) 
        {
            echo'
                  <div class="col-md-3 pull-right ">
                      <a href="product-details.php?id='.$l_row['e_id'].'&uid='.$id.'">
                      <img src="pic/'.$l_row['image'].'" style="width: 250px; height: 250px;"></a>
                       <center><h2><b>'.$l_row['e_name'].'</b></h2>
                       <p>RS:-'.$l_row['e_price'].'</p>
                      </center>
                    </div>

                 '; 


        }  

        ?>
       
</div>
 </div>
<!-- End Single Product -->

        <!-- Start Footer Area -->
        <footer class="htc__foooter__area" style="background: rgba(0, 0, 0, 0) url('images/bg.jfif') no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-8 col-lg-4 col-sm-8">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="index.php">
                                    <img src="images\logo.png" alt="footer logo">
                                </a>
                            </div>
                            <div class="footer__details">
                                <p>Get discount with notified about the latest news and updates.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                   
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget contact__us">
                            <h2 class="ft__title">Contact Us</h2>
                            <div class="footer__inner">
                                <p> F3 AB2  <br> diploma building ,NTC. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-2 lg-offset-1 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Follow Us</h2>
                            <ul class="social__icon">
                                <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p>CREATED FOR PROJECT .</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="index.php">Home</a></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
   




    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Framework js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
    <script >
        // optional
        $('#blogCarousel').carousel({
                interval: 5000
        });
    </script>

</body>

</html>