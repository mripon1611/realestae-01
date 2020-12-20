<?php
    session_start();
    $user_id=$_SESSION['user_id'];

    $address="";
    $email="";
    $phone="";
    $pass="";
    
    if( isset($_POST['user_address']) ){
	   $address=$_POST['user_address'];
    }
    if( isset($_POST['user_email']) ){
	   $email=$_POST['user_email'];
    }
    if( isset($_POST['user_phone_number']) ){
	   $phone=$_POST['user_phone_number'];
    }
    if( isset($_POST['user_password']) ){
	   $pass=$_POST['user_password'];
    }
    $conn=mysqli_connect('localhost','root','','dbms');

if($conn){
    
	
	$sql="UPDATE  users SET USER_ADDRESS='$address',user_email='$email',user_phone_number='$phone',USER_PASSWORD='$pass'
            WHERE USER_ID='$user_id';";
	if(!mysqli_query($conn,$sql)){
        
        echo "<script>location.assign('editprofile.php');</script>";
	}
	   else{
		  echo "<script>location.assign('userProfile.php');</script>";
	   }
    }
?>