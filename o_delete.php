<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();

?>

<?php
$id=$_GET['id'];
$uid=$_GET['uid'];

  if (isset($_GET['d_id'])) {
      $d_id=$_GET['d_id'];
      $d_q="delete from orderdetail where o_id=$d_id";
      $d_r=mysqli_query($con,$d_q);
      if ($d_r) {
          echo "<script> alert('order cancel ')</script>";
          header("location:yrorder.php?uid=$uid&id=$id");
      }else{
        echo"error";
      }
  }

  ?>