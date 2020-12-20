<?php
    session_start();
    $broker_id=$_SESSION['broker_id'];

    $address="";
    $email="";
    $phone="";
    $pass="";
    
    if( isset($_POST['b_address']) ){
	   $address=$_POST['b_address'];
    }
    if( isset($_POST['b_email']) ){
	   $email=$_POST['b_email'];
    }
    if( isset($_POST['b_phone_number']) ){
	   $phone=$_POST['b_phone_number'];
    }
    if( isset($_POST['b_password']) ){
	   $pass=$_POST['b_password'];
    }
    $conn=mysqli_connect('localhost','root','','dbms');

if($conn){
    
	
	$sql="UPDATE  broker SET b_ADDRESS='$address',b_email='$email',b_phone_number='$phone',b_PASSWORD='$pass'
            WHERE broker_id='$broker_id';";
	if(!mysqli_query($conn,$sql)){
        
        echo "<script>location.assign('editBrokerProfile.php');</script>";
	}
	   else{
		  echo "<script>location.assign('Brokerprofile.php');</script>";
	   }
    }
?>