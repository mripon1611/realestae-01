<?php
session_start();

$user_id=$_SESSION['user_id'];

$r_id="";
$r_name="";
$area="";
$spc="";
$max_amnt="";

if(isset($_POST['r_id'])){
	$r_id=$_POST['r_id'];
}
if(isset($_POST['r_name'])){
	$r_name=$_POST['r_name'];
}
if(isset($_POST['area'])){
	$area=$_POST['area'];
}
if(isset($_POST['spc'])){
	$spc=$_POST['spc'];
}

if(isset($_POST['amnt'])){
	$max_amnt=$_POST['amnt'];
}

$conn=mysqli_connect('localhost','root','','dbms');
if($conn){
	$sql="INSERT INTO requests VALUES ('',$r_id,'$r_name','$area',$max_amnt,$spc,'$user_id');";
	
	if(!mysqli_query($conn,$sql)){
        echo "<script>window.alert('failed');</script>";
        echo "<script>location.assign('RequestPage.php');</script>";
	}
	else{
        echo "<script>window.alert('your request is saved');</script>";
		echo "<script>location.assign('User_buyer.php');</script>";
			
	}


}


?>