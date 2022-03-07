
<?php
session_start();
$con = mysqli_connect('localhost','root','','helper');


$mail = $_POST['email'];
$psw = $_POST['password'];



$query = "select * from reg where email='$mail' && password ='$psw' && id ";

 
   
$run  = mysqli_query($con,$query);
$row = mysqli_fetch_array($run);
$num = mysqli_num_rows($run);



if ($num == 1) {
     $role = $row['role'];
      $idd = $row['id'];
      $_SESSION['mail']=$mail;
	if ($role=='admin') {
		 
	   header("location:index.php?id=$idd"); 
	}elseif ($role=='employee') {
		
        $u_id=$_SESSION['mail'];
		header("location:emp/order.php?uid=$idd&user=$u_id");
	}
	$_SESSION['log']=true;
	
}else{

	$_SESSION['wrong']="Inccorect password";
	header("location:login-register.php");
	echo "error";
}



?>