<?php  
$con=mysqli_connect("localhost","root","","helper");
session_start();

?>

<?php
if (isset($_POST['update'])) {
	 $uid=$_GET['user'];
    $id_o=$_GET['uid']; 
	$nam=$_POST["name"];

	$desc=$_POST["desc"];
	$price=$_POST["price"];


	$update_q="UPDATE empdetail,reg,subcat set e_name='$nam',e_desc='$desc',e_price='$price' where reg.id=$id_o and empdetail.e_uid=reg.email and empdetail.e_cat=subcat.s_id ";
	$update_r=mysqli_query($con,$update_q);

	if ($update_r) {
		$_SESSION['update']="profile update successfully";
		header("location:empadmin.php?uid=$id_o&user=$uid");
	}else{
		echo "error";
	}


}
?>