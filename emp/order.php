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
        <nav class="col-sm-2 bg-light sidebar py-5  " style="height: 650px; border-radius: 10px; ">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                       <?php
   $uid=$_GET['user'];
   $id_o=$_GET['uid'];   
  echo'
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-fw fa-home"></i>REQUEST</a> </li>
                    <li class="nav-item"> <a href="empadmin.php?uid='.$id_o.'&user='.$uid.'" class="nav-link"><i class="fa fa-fw fa-wrench"></i>My Profile</a></li>
                    <li class="nav-item"> <a href="empreview.php?uid='.$id_o.'&user='.$uid.'" class="nav-link"><i class="fa fa-fw fa-envelope"></i>Review</a></li>
                    <li class="nav-item"> <a href="dash.php?uid='.$id_o.'&user='.$uid.'" class="nav-link"><i class="fa fa-fw fa-envelope"></i>Change password</a></li>
                    <li class="nav-item"> <a href="../logout.php" class="nav-link"><i class="fa fa-fw fa-user"></i>Logout</a></li>';?>

                
                </ul>
                
            </div>
        </nav>



        <div class="col-sm-4">
          <?php
           $cid=$_GET['user'];
         $id_o=$_GET['uid'];
          $qu="select * from orderdetail,empdetail where orderdetail.o_eid=empdetail.e_id && empdetail.e_uid='$cid' ";
          $re=mysqli_query($con,$qu);
           $status="approve";
           

           while ($o_row = mysqli_fetch_assoc($re)) 
           {
            if ($o_row['status']==$status) {
             $_SESSION['status']="⇒ THIS WORK IS APPROVE ⤵🙂";
             echo'<div class="alert alert-success col-md-10 ml-5">'.$_SESSION['status'].'</div><br><Br><br><br>';
           }
             echo '<div class="card">
                     <div class="card-header">
                     <h3>Request ID:'.$o_row['o_id'].'</h3>
                

                      

              

                     </div>
                     <div class="card-body">
                      <h4 class="card-title"><b>Request name:</b>'.$o_row['name'].'</h4>
                       <h4 class="card-title"><b>Request address:</b>'.$o_row['address'].'</h4>
                       <h4 class="card-title"><b>city:</b>'.$o_row['city'].'</h4>
                       <h4 class="card-title"><b>phone no:</b>'.$o_row['phone'].'</h4>
                       <div class=float-right>
                       <form action="" method="post">
                       <input type="hidden" class="btn btn-danger" name="id" value='.$o_row["o_id"].' >
                       <input type="submit" class="btn btn-danger" value="view" name="view" >
                       <input type="submit" class="btn btn-dark" value="close" name="close">
                       </form>
                       </div>
                     </div>


                  </div><br>';

                
           }


          ?>

       


        </div>

        <?php 
        if (isset($_REQUEST['view'])) {
        $sq = "select * from orderdetail where o_id = {$_REQUEST['id']} ";
        $a_r =mysqli_query($con,$sq);
        $a_row = mysqli_fetch_assoc($a_r);
        }

        if (isset($_REQUEST['close'])) {
        $sq = "delete  from orderdetail where o_id = {$_REQUEST['id']} ";
        if($con->query($sq) == TRUE){
          echo '<meta http-equiv="refresh" content="0;URL=?uid='.$id_o.'&user='.$uid.'"/>';

        }else{
          echo'unable to delete';
        }
      }
        
       


         ?>
           <div class="col-sm-5 jumbotron ">
        <?php echo' <form action="aprove.php?uid='.$id_o.'&user='.$uid.'" method="post">';?>
              <h3 class="text-center"><b>order detail</b></h3>
              <div class="form-group">
                <label>Request id</label>
                <input type="text" name="id" class="form-control" value="<?php if(isset($a_row['o_id'])) echo $a_row['o_id']; ?>" readonly>
                
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
              <div class="form-group col-md-4"  >
                <label>city</label>
                <input type="text" name="id" class="form-control"  value="<?php if(isset($a_row['o_id'])) echo $a_row['city']; ?>">
                
              </div>
              <div class="form-group col-md-4">
                <label>pin</label>
                <input type="text" name="id" class="form-control"  value="<?php if(isset($a_row['o_id'])) echo $a_row['pin']; ?>"  >
                
              </div>
              <div class="form-group col-md-4">
                <label>status</label>
                <input type="hidden" name="mid" value="<?php if(isset($a_row['o_id'])) echo $a_row['o_id']; ?>">
                <input type="text" name="id" class="form-control"  style="color:green;" value="<?php if(isset($a_row['o_id'])) echo $a_row['status']; ?>" >
                
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
              <div  class="form-row">
              
              <div class="form-group col-md-6">
                <label>date</label>
                <input type="date" name="date" class="form-control" value="<?php if(isset($a_row['o_id'])) echo $a_row['date']; ?>" >
                
              </div>
            </div>



             <div class="form-group float-right" >
                
                <input type="submit" name="approve" value="approve" class=" btn btn-success" >
                <input type="submit" value="reject" class=" btn btn-dark" >
                
              </div>
              
            </form>
            
          </div>

 
   
  
   <!------ <div class="col-md-6 pull-right">
      <?php
    $uid=$_GET['user'];
   $id_o=$_GET['uid']; 
 echo'<form action="aprove.php?uid='.$id_o.'&user='.$uid.'" method="post">';?>
    <div class="container">
    <div class="row">  
      <h2><b>YOUR ORDER</b></h2><br><br>
  <table class="table table-hover">
  <thead class="bg-danger">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>address</th>
      <th>pin code</th>
      <th>requirment</th>
      <th>phone number</th>
       <th>status</th>
       <th>approve</th>

    </tr>
  </thead>
  <tbody>
  <?php
  

if(isset($uid)){
  $cid=$_GET['user'];
  $id_o=$_GET['uid'];
  $qu="select * from orderdetail,empdetail where orderdetail.o_eid=empdetail.e_id && empdetail.e_uid='$cid' ";
  $re=mysqli_query($con,$qu);

  while ($o_row = mysqli_fetch_assoc($re)) {
      
  
   echo'
    <tr>
      <th>'.$o_row['o_id'].'</th>
      <td>'.$o_row['name'].'</td>
      <td>'.$o_row['address'].'</td>
      <td>'.$o_row['pin'].'</td>
      <td>'.$o_row['wn'].'</td>
      <td>'.$o_row['phone'].'</td>

      <td><a href="#" style="color:green;">'.$o_row['status'].'</a></td>
      <input type="hidden" name="mid" value='.$o_row['o_id'].'>
      <td><input type="submit" name="approve" class="btn btn-warning" value="approve"></td>
     
    </tr>';
    
   } 
 }
  ?>
 

  </tbody>
</table>
 </div></div>
</form>
   </div>----->

       
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