<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();

?>
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
                                    <?php 
                                     $uid=$_GET['uid'];
                                   echo ' <li><a href="detail.php?uid='.$uid .'">update your detail</a></li>';
                                    ?>
                                </ul>
                            </nav>

                            
                            
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">  
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block"><span class="ti-search"></span></li>
                                <?php
                                if (isset($_SESSION['log'])) {
                                    
                                     echo'<li><a href="logout.php" class="btn btn-info"><span class="ti-user"></span> logout</a></li>';
                                     
                                    
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
</div>








<section class="htc__product__details pt--120 pb--100 bg__white">
    <center><h1><b>YOUR order is succesful</b></h1></center>
    <hr>
            <div class="container">
                <div class="row">

                    <table class="table table-hover">
  <thead class="bg-danger">
    <tr>
      <th>id</th>
      <th>employee name</th>
      <th>category</th>
      <th>price</th>
      <th>status</th>
      <th>cancle</th>
      
      

    </tr>
  </thead>
  <tbody>
  <?php
   $id=$_GET['id'];
   $uid=$_GET['uid']; 
  
   
   $o_q="select * from orderdetail,empdetail,subcat where  orderdetail.u_id=$uid and empdetail.e_id=orderdetail.o_eid and subcat.s_id=empdetail.e_cat";
    $runn=mysqli_query($con,$o_q);
    while($orow = mysqli_fetch_array($runn)) {
    echo'
    <tr>
      <td>'.$orow['o_id'].'</td>
      <td>'.$orow['e_name'].'</td>
      <td>'.$orow['s_nm'].'</td>
      <td>'.$orow['e_price'].'</td>
      <td>'.$orow['status'].'</td>
      <td><a href="o_delete.php?d_id='.$orow['o_id'].'&uid='.$uid.' &id='.$id.'" class="btn btn-danger">order cancle</a></td>
      
      
      
    </tr>';
    
   } 
 
  ?>
  
   </tbody>
</table>

<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">your order is successful submited</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <?php
   $id=$_GET['id'];  
    $o_qe="select * from empdetail,subcat where empdetail.e_cat=subcat.s_id and empdetail.e_id=$id and orderdetail.u_id=$uid";
    $rnn=mysqli_query($con,$o_q);
    while ($roww = mysqli_fetch_array($rnn)) {
        ?>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h2><u>detail</u></h2><br><br>
                     
                            <h2>name:</h2>
                            <p><?php echo $roww['e_name'];?></p><br>

                            <h2>category:</h2>
                            <p><?php echo $roww['s_nm'];?></p><br>

                            <h2>price:</h2>
                            <p><?php echo $roww['e_price'];?></p><br>

        </div>
    <?php }?>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
           
<!----------
                    echo'<div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="product__details__container">
                            <div class="product__big__images">
                                
                                   
                                        <h2><u>custmore id</u></h2><br><br>
                                         <h2>mobile-number:</h2>
                                          <p></p><br>

                                        <h2>Address:</h2>
                                        <p></p><br>

                                        <h2>pic code:</h2>
                                        <p></p><br>

                                        <h2>you requirment:</h2>
                                        <p></p><br>

                                        <h2>your availabel time:</h2>
                                        <p></p><br>


                                       
                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 smt-30 xmt-30">
                        <div class="htc__product__details__inner">
                    
    
                            <h2><u>employee detail</u></h2><br><br>
                     
                            <h2>name:</h2>
                            <p></p><br>

                            <h2>category:</h2>
                            <p>'.$orow['s_nm'].'</p><br>

                            <h2>price:</h2>
                            <p>'.$orow['e_price'].'</p><br>

                           
                      
                    </div>
                    </div>

                        ';
                    } 
                      
                    ?> 

                    <button class="btn btn-info" name="update">update</button>
                </div>
            </div>
        </section>
        ------>












        <!-- Start Footer Area -->
        <footer class="htc__foooter__area" style="background: rgba(0, 0, 0, 0) url('images/bg.jfif') no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="index.html">
                                    <img src="images\logo.png" alt="footer logo">
                                </a>
                            </div>
                            <div class="footer__details">
                                <p>Get  discount with notified about the latest news and updates.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6 smb-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Newsletter</h2>
                            <div class="newsletter__form">
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                </div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>        
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
                                    <li><a href="index.html">Home</a></li>
                                    
                                    <li><a href="contact.html">Contact Us</a></li>
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

</body>

</html>