<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();

if (isset($_POST['submit'])) {
    
	$file='';
    $file_tmp='';
    $location="pic/";
    $data='';
    $uid=$_GET['id'];
	$name = $_POST['name'];
	$sel = $_POST['cat'];
	$des = $_POST['desc'];
	$price = $_POST['price'];
	$image_name=time()."_".$_FILES['image']['name'];
	$tmp_name=$_FILES['image']['tmp_name'];

	move_uploaded_file($tmp_name,"../pic/$image_name");

	$q = "insert into empdetail (e_name,e_cat,e_desc,e_price,image,e_uid) values ('$name','$sel','$des','$price','$image_name','$uid')";

	$run = mysqli_query($con,$q);

	if ($run) {
	       echo "<script> alert('your are success full register now you are login')</script>";
	        header("location:../login-register.php");
		$_SESSION['done'] = "done successful";
	}else{
		echo "error";
	}
}

?>