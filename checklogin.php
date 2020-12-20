<?php

if(isset($_GET['type'])){
	$type=$_GET['type'];
	



}
if($type==="user"){
	$userfname="";
	$upassword="";

	if( isset($_POST['uname']) ){
		$userfname=$_POST['uname'];
	}

	if( isset($_POST['pass']) ){
		$upassword=$_POST['pass'];
	}

	///database connection
	try{
		$conn = new PDO("mysql:host=localhost;dbname=dbms;","root","");
	}
	catch(PDOException $err){
		echo "<script>window.alert('db connection error');</script>";
		echo "<script>location.assign('signin.php');</script>";
	}

		$sqlquery="SELECT * FROM users WHERE user_id='$userfname' AND user_password='$upassword'";

			$object=$conn->query($sqlquery);
			if($object->rowCount()==1){
                
                session_start();
                $_SESSION['user_id']=$userfname;
                $_SESSION['user_password']=$upassword;
                
				echo "<script>location.assign('userHome.php');</script>";
			}
			else{
				echo "<script>location.assign('signin.php');</script>";
			}
}
if($type==="broker"){
	$userfname="";
	$upassword="";

	if( isset($_POST['uname']) ){
		$userfname=$_POST['uname'];
	}

	if( isset($_POST['pass']) ){
		$upassword=$_POST['pass'];
	}

	///database connection
	try{
		$conn = new PDO("mysql:host=localhost;dbname=dbms;","root","");
	}
	catch(PDOException $err){
		echo "<script>window.alert('db connection error');</script>";
		echo "<script>location.assign('signin.php');</script>";
	}

		$sqlquery="SELECT * FROM broker WHERE broker_id='$userfname' AND b_password='$upassword'";

			$object=$conn->query($sqlquery);
			if($object->rowCount()==1){
                 session_start();
                $_SESSION['broker_id']=$userfname;
                
                
				echo "<script>location.assign('brokerHome.php');</script>";
			}
			else{
				echo "<script>location.assign('signin.php');</script>";
			}
}
?>