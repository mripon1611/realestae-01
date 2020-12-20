<?php
session_start();
$D_ID="";
if(isset($_POST['p_id'])){
    $D_ID=$_POST['p_id'];
}

if(isset($_GET['type'])){
	$type=$_GET['type'];
    
}

echo "<script>window.alert('$type');</script>";
if($type=="add"){
    $conn=mysqli_connect('localhost','root','','dbms');
    $sql="UPDATE plot_details SET CHECK_VALIDITI='VALID' WHERE DETAILS_ID=$D_ID;";
    if(mysqli_query($conn,$sql)){
        echo"<script>location.assign('RequestToBroker.php')</script>";
    }
}
else{
    $conn=mysqli_connect('localhost','root','','dbms');
    $sql="UPDATE plot_details SET CHECK_VALIDITI='SKIP' WHERE DETAILS_ID=$D_ID;";
    if(mysqli_query($conn,$sql)){
        echo"<script>location.assign('RequestToBroker.php')</script>";
    }
}


?>