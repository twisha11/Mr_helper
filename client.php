<?php
$con = mysqli_connect("localhost","root","","helper");
session_start();

if (isset($_SESSION['log'])) {
     $_SESSION['mail'];
}else{
    header('location:login-register.php');
}
?>
<html>
<!DOCTYPE html>
<html>
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
    
  
 <style>

  /* Hide all steps by default: */
  .tab {
   display: none;
   }

  button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  }

 button:hover {
  opacity: 0.8;
  }
  #prevBtn {
  background-color: #bbbbbb;
   }

   /* Make circles that indicate the steps of the form: */
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
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images\logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                
                            </nav>

                            
                            
                        </div>
                        
                         <div class="col-md-2 col-lg-2 col-6">  
                            <ul class="menu-extra">
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
                        
                        
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
   <br><br><br><br><br>

<?php
$id=$_GET['id'];
$uid=$_GET['uid'];
$_SESSION['id']=$id;
?>


<div class="container"><?php echo '
 <form id="regForm" action="order_process.php?id='.$id.'&uid='.$uid.'" method="post">'?>
   <h1>Fill Detail</h1><br><br>
      <!-- One "tab" for each step in the form: -->
<div class="row">
    <div class="tab col-md-10">
     <label>name</label>
     <input type="text" name="name" placeholder="enter your name" class="form-control" required>

     <label>phone number</label>
     <input type="text" name="mnum" placeholder="enter your mobile number" class="form-control" required>

      <label>when you need service</label>
      <select class="form-control" name="when">
       <option>immediatly</option>
       <option>one day ago</option>
       <option>week ago</option>
       <option>month ago</option>
      </select>

      <br>

     

      <br>

    
    </div> 
</div>
  
     
<div class="row">
   <div class="tab col-md-10">
    
     
     <textarea rows="8" cols="11"  placeholder="Address" class="form-control" name="add"></textarea><br>
     <select class="form-control col-3" name="city" >
      <option>vadodara</option>
     </select>
     <input placeholder="pin code" name="pin"  class="form-control col-3" style="margin-right: 10px;">
    
     <select class="form-control col-4" name="time">
       <option>9:00 AM - 11:00 AM</option>
       <option>12:00 AM - 1:00 PM</option>
       <option>2:00 PM - 5:00 AM</option>
       <option>6:00 PM - 9:00 PM</option>
     </select><br>

   </div>
</div>

<br>

<div style="overflow:auto;" class="row">
    <div style="float:right;">
      <button type="button" class="btn btn-defualt" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">next</button>
    </div>
</div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>

<!-------------form flip script--------->
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

    function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
    }

    function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
    }

    function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
 
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
    }

    function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
    }
</script>
<!----------end--------->
</body>
</html>
