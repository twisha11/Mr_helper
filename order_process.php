<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();
?>

<?php
    $id=$_GET['id'];
    $uid=$_GET['uid'];
	$nm=$_POST['name'];
	$mnum=$_POST['phone'];
	$add =$_POST['add'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
	$req=$_POST['req'];
    
if(isset($_POST['confirm']))
{
	$o_qu="insert into orderdetail (name,phone,address,city,pin,o_time,o_eid,u_id) values ('$nm','$mnum','$add','$city','$pin','$req','$id','$uid')";
	$o_re = mysqli_query($con,$o_qu);

	if ($o_re) {
		echo"done";
		$_SESSION['confirm']="your order is scussesfull complet";
		header("location:product-details.php?id=$id&uid=$uid");
		
	}else {
		echo "error";
	}
}


?>