<?php
session_start();
$con=mysqli_connect("localhost","root","","helper");



?>

<?php

if (!empty($_POST)) {
   extract($_POST);
   $_SESSION['error'] = array();

   if (empty($name)) {
   	$_SESSION['error'][]="please enter category name";
   	header("location:admin.php");
    }
    else
    {
      

     $q="insert into category (cat_name) value ('$name')";

     mysqli_query($con,$q);

     $_SESSION['done']="category sucessfully add";
     header("location:admin.php");
   }
   





}else{
	header("location:admin.php");
}


?>