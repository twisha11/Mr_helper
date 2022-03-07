<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();
session_destroy();
header("location:index.php")
?>