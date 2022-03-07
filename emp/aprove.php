<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();



?>


  <?php
  if (isset($_POST['approve'])) {
    $status="approve";
    $m_id=$_POST['mid'];
    $date=$_POST['date'];
     
    $sql="UPDATE orderdetail set status='$status',date='$date' where o_id='$m_id' ";
    $res=mysqli_query($con,$sql);
    if ($res) {

       $uid=$_GET['user'];
       $id_o=$_GET['uid'];
       $_SESSION['approve']="this work is approve";
     echo "<script> alert('approve work')</script>";
    header("location:order.php?uid=$id_o&user=$uid");
    }else{
      echo "<script> alert('error')</script>";
    }
  
  }
  ?>
  