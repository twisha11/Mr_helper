<?php
$con=mysqli_connect("localhost","root","","helper");
session_start();

?>

<?php
if (isset($_POST['submitsearch'])) {
	$search = $_POST['search'];
	$q="select * from subcat,category where s_nm='$search' ";
	$r=mysqli_query($con,$q);
	$row=mysqli_num_rows($r);
	if ($row == 0) {
		echo "no match";
	}else{
		while ($row = mysqli_fetch_array($r)) {
			$id=$row['s_id'];
			$name=$row['s_nm'];
			
			$cat=$row['cat_name'];
           header("location:list.php?id=$id&cat=$cat&uid=0");
		}
		
	}
}
?>


