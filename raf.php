 
//validation//

 y = x[currentTab].getElementsByTagName("input",);
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }



          echo "<script> alert('your are success full register now you are login')</script>";
<style>
/*--------------------side bar--------------*/
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 190px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:lightcyan;
  overflow-x: hidden;
  padding-top: 25px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 190px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
/*----------------form----------------*/

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid ;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}





.contain {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

   <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                           
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    
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
        </header><br><br><br><br><br>

<div class="sidebar">
   
        <a href="#">
          <img src="../images\logo.png" alt="logo" >
        </a><br><br>
   <?php
   $uid=$_GET['user'];
   $id_o=$_GET['uid'];   
  echo'<a href="order.php?uid='.$id_o.'&user='.$uid.'""><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="empadmin.php?uid='.$id_o.'&user='.$uid.'"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="../logout.php"><i class="fa fa-fw fa-envelope"></i>logout</a>';
  ?>
</div>


     
          <!-- End Search Popap -->
          <center>
   <section class="htc__product__details pt--120 pb--100 bg__white main">
   
  
   <!----echo'
    <tr>
      <th></th>
      <td>'.$o_row['e_name'].'</td>
      <td>'.$o_row['e_desc'].'</td>
      <td>'.$o_row['e_price'].'</td>
      

      <td><input type="submit" name="approve" class="btn btn-warning" value="update"></td>
     
    </tr>';
    
   } 
 }
  ?>
 

  </tbody>
</table>
 </div></div>
</form>---->

<div class="contain">
  <form action="/action_page.php">
    <div class="row">

        <?php
  

if(isset($uid)){
  $cid=$_GET['user'];
  $id_o=$_GET['uid'];
  $qu="select * from empdetail where empdetail.e_uid='$cid' ";
  $re=mysqli_query($con,$qu);

  while($o_row = mysqli_fetch_assoc($re)) {
      
  

    echo'  <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname"  value='.$o_row['e_name'].'>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">price</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname"  value='.$o_row['e_price'].'>
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="lname">price</label>
      </div>
      <div class="col-75">
        <textarea cols=15 rows=5  value='.$o_row['e_desc'].' style="background-color:#fff;"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" value='.$o_row['e_desc'].' cols=15 rows=5  style="background-color:#fff; " ></textarea>
      </div>
    </div>
   
    
    
    <center class="mt-4">
      <input type="submit" value="Submit" class="btn btn-warning" >
    </center>

  
         ';
}
}
  ?>
  </form>
</div>


</section></center>
</div>







  <div class="modal-body">
          <?php
$id=$_GET['id'];
$uid=$_GET['uid'];
$_SESSION['id']=$id;

$qq="select * from reg where id = $uid";
$rr=mysqli_query($con,$qq);
$roow=mysqli_fetch_array($rr);
?>


<div class="container">
 
   <h1>Fill Detail</h1><br><br>
      <!-- One "tab" for each step in the form: -->
<form  action="order_process.php" method="post">
<div class="row">
    <div class="tab col-md-12">
     <label>name</label>
     <input type="text" name="name"  class="form-control" value="<?php echo $roow['name']?>" readonly>

     <label>phone number</label>
     <input type="text" name="mnum" placeholder="enter your mobile number" class="form-control" required><br>
     <textarea rows="8" cols="11" name="add"  placeholder="Address" class="form-control" ></textarea><br>
     <select class="form-control col-6" name="city" style="margin-right: 10px;">
      <option>vadodara</option>
     </select>
     <input  name="pin"  class="form-control col-5" placeholder="pin code"><br><br>
    
    <label>where you require work</label>
    <input type="text" name="req" placeholder="At home , company , other....." class="form-control" required>
  </div>

</div>
</form>


        <div class="modal-footer">
          <?php echo' <a href=order_process.php?id='.$id.'&uid='.$uid.' class="btn btn-info" name="confirm">comfirm</a>';?>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          

        </div>

      </div>
      
    





 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>

     <?php
  $uid=$_GET['uid'];
  
        $sq = "select * from orderdetail where o_id = $uid";
         $a_r =mysqli_query($con,$sq);
         $o_row = mysqli_fetch_assoc($a_r); 
 
       echo '
 <form  action="" method="post">
        <div class="modal-body">
            <div class="col-md-12">
                <div class="form-group">
                    <label>name</label>
                    <input type="text" name="name"  class="form-control" value='.$o_row['name'].'>

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>phone number</label>
                    <input type="tel" name="phone" class="form-control"value='.$o_row['phone'].'>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>address</label>
                    <textarea class="form-control" cols="14" rows="5" name="add" value='.$o_row['address'].'></textarea>
                </div>
            </div>
           
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>city</label>
                    <select name="city" class="form-control">
                        <option>'.$o_row['city'].'</option>
                        
                    </select>
                </div>
            </div>
             <div class="col-md-6 pull-right">
                <div class="form-group">
                    <label>pin</label>
                    <input type="text" name="pin" class="form-control" value='.$o_row['pin'].'>
                </div>
            </div>
        </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>where you work require</label>
                    <input type="text" name="req" class="form-control" value='.$o_row['o_time'].'>
                </div>
            </div>
        </div>
        <div class="modal-footer">
             <button type="submit" class="btn btn-primary" name="confirm">confirm</button>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
         
        </div>
    </form>

    ';


?>

    </div>
  </div>
</div>



