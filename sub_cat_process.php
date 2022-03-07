<?php
session_start();
$con=mysqli_connect("localhost","root","","helper");



?>

<?php

if (!empty($_POST)) {
   extract($_POST);
   $_SESSION['error'] = array();

   if (empty($scat)) {
   	$_SESSION['error'][]="please enter category name";
   	header("location:sub_cat.php");
   } else {
    $image_name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name,"img/$image_name");
  
     $q="insert into subcat (s_nm,s_cat,s_img) values ('$scat','$cat','$image_name')";

     mysqli_query($con,$q);

     $_SESSION['done']="category sucessfully add";
     header("location:sub_cat.php");
   }
   





}else{
	header("location:admin.php");
}


?>s