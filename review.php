<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();
?>

<?php


if (isset($_POST['submit'])) {

$uid=$_GET['uid'];
$name=$_POST['nm'];
$mail=$_POST['email'];
$msd=$_POST['msg'];
$pid=$_POST['pid'];	


$t = time();
$qur="insert into review (r_nm,r_email,r_msg,r_pid,r_time) values ('$name','$mail','$msd','$pid','$t')";

mysqli_query($con,$qur);

header("location:product-details.php?id=$pid&uid=$uid");
}
?>