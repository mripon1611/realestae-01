<?php

$userid="";
$upassword="";
$userfname="";
$accounttype="";
$address="";
$email="";
$phonenumber="";

if( isset($_POST['user_id']) ){
	$userid=$_POST['user_id'];
}

if( isset($_POST['user_password']) ){
	$upassword=$_POST['user_password'];
}
if( isset($_POST['user_name']) ){
	$userfname=$_POST['user_name'];
}

if( isset($_POST['user_category']) ){
	$accounttype=$_POST['user_category'];
}
if( isset($_POST['user_address']) ){
	$address=$_POST['user_address'];
}

if( isset($_POST['user_email']) ){
	$email=$_POST['user_email'];
}
if( isset($_POST['user_phone_number']) ){
	$phonenumber=$_POST['user_phone_number'];
}
$conn=mysqli_connect('localhost','root','','dbms');

if($conn){
    session_start();
    $_SESSION['user_id']=$userid;
	
	$sql="INSERT INTO users 
 	VALUES ('','$userid','$userfname','$email','$address','$accounttype','$upassword','','$phonenumber');";
	if(!mysqli_query($conn,$sql)){
		echo "<script>location.assign('signup.php');</script>";
	}
	else{
		echo "<script>location.assign('U_home.php');</script>";
	}
}


?>