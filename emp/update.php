<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();



?>
<?php
    if (isset($_POST['update'])) {
     $uid=$_GET['user'];
     $id=$_GET['uid'];
     
     $opass=$_POST['opass'];
     $npass=$_POST['npass'];
     $cpass=$_POST['cpass'];
  $sql="select password from reg where id=$id ";
    $res=mysqli_query($con,$sql);
    $data=mysqli_fetch_row($res);
    if ($data[0] == $opass) {
       
      if ($npass == $cpass) {
         $q="UPDATE reg SET password='$npass',prepassword='$cpass' where id=$id";
         $r=mysqli_query($con,$q);
          echo "<script> alert('password change succsessfully')</script>";
          $_SESSION['change']="your password is succsessfully change";
          header("location:dash.php?uid=$id&user=$uid");
         }
         else 
         {
           echo "<script> alert('new-password and confirm-password note match')</script>";
             $_SESSION['change']="new-password and confirm-password note match";
             header("location:dash.php?uid=$id&user=$uid");
         }
    }
    else
    {
      echo "<script> alert('error')</script>";
        $_SESSION['change']="old password is not match";
        header("location:dash.php?uid=$id&user=$uid");
    }

  
  }



?>