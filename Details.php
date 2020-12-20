<?php
session_start();

$user_id=$_SESSION['user_id'];

$regionId="";
$area="";
$lSpace="";
$rsNumber="";
$csNumber="";
$lPrice="";
$userId="";
if(isset($_POST['region_id'])){
	$regionId=$_POST['region_id'];
}
if(isset($_POST['area'])){
	$area=$_POST['area'];
}
if(isset($_POST['space'])){
	$lSpace=$_POST['space'];
}
if(isset($_POST['csnumber'])){
	$rsNumber=$_POST['rsnumber'];
}
if(isset($_POST['csnumber'])){
	$csNumber=$_POST['csnumber'];
}
if(isset($_POST['landprice'])){
	$lPrice=$_POST['landprice'];
}
if(isset($_POST['user_id'])){
	$userId=$_POST['user_id'];
}
$conn=mysqli_connect('localhost','root','','dbms');
if($conn){
	$sql="SELECT count(*) as total  FROM region WHERE REGION_ID=$regionId;";
	$result=mysqli_query($conn,$sql);
	$values=mysqli_fetch_assoc($result);
	$rows=$values['total'];
	if($rows=='1'){
		$sqll="INSERT INTO `plot_details`(`id`, `regionId`, `area`, `lspace`, `rsNumber`, `csNumber`, `lPrice`, `userId`)
		VALUES ('','$regionId','$area','$lSpace','$rsNumber','$csNumber','$lPrice','$userId')";
		if(!mysqli_query($conn,$sqll)){
			echo "<script>location.assign('addDetails.php');</script>";
		}
		else{
			$sqlll="INSERT INTO `users_region`(`USER_ID`, `REGION_ID`) VALUES ('$userId','$regionId');";
			mysqli_query($conn,$sqlll);
			echo "<script>window.alert('success');</script>";
			echo "<script>location.assign('Status.php');</script>";
			
		}
		
	}
	else{
		echo "<script>location.assign('addDetails.php');</script>";	
	}


}

?>