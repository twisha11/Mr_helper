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
                                <a href="#">
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
                                   echo '<li><a href="index.php?id='.$uid .'">home</a></li>';
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
<center><h1><b>YOUR order detail</b></h1></center><hr>
<div class="container-fluid">
 <div class="row">

<table class="table table-hover col-md-5">
    <thead class="bg-danger">
    <tr>
      <th>id</th>
      <th>employee name</th>
      <th>category</th>
      <th>price</th>
      <th>date</th>
      <th>status</th>
      <th>cancle</th>
      <th>your detail</th>
   </tr>
  </thead>
  <tbody>
  <?php
  
   $uid=$_GET['uid']; 
  
   
    $o_q="select * from orderdetail,empdetail,subcat where  orderdetail.u_id=$uid and empdetail.e_id=orderdetail.o_eid and subcat.s_id=empdetail.e_cat";
    $runn=mysqli_query($con,$o_q);
while($orow = mysqli_fetch_array($runn)){
    echo'
    <tr>
      <td>'.$orow['o_id'].'</td>
      <td>'.$orow['e_name'].'</td>
      <td>'.$orow['s_nm'].'</td>
      <td>'.$orow['e_price'].'</td>
      <td>'.$orow['date'].'</td>
      <td style="color:green;" >'.$orow['status'].'</td>
      <form action="" method="post">
         <input type="hidden" class="btn btn-danger" name="id" value='.$orow["o_id"].' >
         <td><input type="submit" class="btn btn-info" value="your-detail" name="view" ></td>
        
      </form>
      <td><a href="o_delete.php?d_id='.$orow['o_id'].'&uid='.$uid.' &id=" class="btn btn-dark">order cancle</a></td>
    
      
    </tr>';
    
  }
 
  ?>
   </tbody>
</table> 


<?php 
        if (isset($_REQUEST['view'])) {
        $sq = "select * from orderdetail where o_id ={$_REQUEST['id']} ";
        $a_r =mysqli_query($con,$sq);
        $a_row = mysqli_fetch_assoc($a_r);
        }
        ?>

<div id="myDIV" class=" col-md-5 pull-right">
   
      <div class=" jumbotron ">
        <?php echo' <form action="" method="post">';?>
              <h3 class="text-center"><b>order detail</b></h3>
              <div class="form-group">
                <label>Request id</label>
                <input type="text" name="" class="form-control" value="<?php if(isset($a_row['o_id'])) echo $a_row['o_id']; ?>">
                
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php if(isset($a_row['o_id'])) echo $a_row['name']; ?>" >
                
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control " value="<?php if(isset($a_row['o_id'])) echo $a_row['address']; ?>" name="address" style="padding-bottom: 50px; padding-top: 20px;">
                
              </div>



              <div class="form-row">
              <div class="form-group col-md-5"  >
                <label>city</label>
                <input type="text" name="id" class="form-control"  value="<?php if(isset($a_row['o_id'])) echo $a_row['city']; ?>">
                
              </div>
              <div class="form-group col-md-5">
                <label>pin</label>
                <input type="text" name="id" class="form-control"  value="<?php if(isset($a_row['o_id'])) echo $a_row['pin']; ?>"  >
                
              </div>
            
            </div>

              <div  class="form-row">
              <div class="form-group col-md-6">
                <label>phone no</label>
                <input type="text" name="id" class="form-control" value="<?php if(isset($a_row['o_id'])) echo $a_row['phone']; ?>"  >
                
              </div>
              <div class="form-group col-md-6">
                <label>place</label>
                <input type="text" name="id" class="form-control" value="<?php if(isset($a_row['o_id'])) echo $a_row['o_time']; ?>" >
                
              </div>
            </div>
             
            <br>
            <center>
             <div class="form-group " >
                
                <input type="submit" name="approve" value="update" class=" btn btn-success" >
                
                
             </div>
         </center>
              
    </form>
            
  </div>

</div>

</div>
</div>
</section>

 



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