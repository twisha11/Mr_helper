<?php
session_start();
$con = mysqli_connect('localhost','root','','helper');

$nem = $_POST['name'];
$mail = $_POST['email'];
$psw = $_POST['pass'];
$cpsw = $_POST['confpass'];
$role = $_POST['role'];

$query = "select * from reg where email='$mail' && id ";

$run  = mysqli_query($con,$query); 
 $row = mysqli_fetch_array($run);
$num = mysqli_num_rows($run);


if ($num == 1) {
	echo "username already taken";
}else{
	$reg = "insert into reg (name,email,password,prepassword,role) values ('$nem','$mail','$psw','$cpsw','$role')";
  mysqli_query($con,$reg);
 
     
      $idd = $row['id'];
      
	if ($role=='admin') {
	      
	   header("location:index.php?id=$idd"); 
	}elseif ($role=='employee') {
		      $_SESSION['emp']=$mail;
              $ide=$_SESSION['emp'];
	
	    header("location:emp/employee.php?uid=$ide");
	}
	$_SESSION['log']=true;
	
     
	
		
	    
 
	  
	

		
	
}




?>