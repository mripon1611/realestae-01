<?php
session_start();

$broker_id=$_SESSION['broker_id'];

$conn=mysqli_connect('localhost','root','','dbms');




if($conn){
    if(isset($_POST['Upload'])){
        $picName=$_FILES["imagefile"]["name"];
        $picTmpName=$_FILES["imagefile"]["tmp_name"];
        $folder="Upload/";
        move_uploaded_file($picTmpName,$folder.$picName);
    
    
        $sql="UPDATE broker SET PHOTO='$picName' WHERE BROKER_ID='$broker_id';";
        
        $qry=mysqli_query($conn,$sql);
        
        if($qry){
            echo "<script>window.alert('success');</script>";
	       echo "<script>location.assign('brokerProfile.php');</script>";
        }
        
	    
    }
}

?>