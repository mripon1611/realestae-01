<?php
session_start();

$user_id=$_SESSION['user_id'];

$conn=mysqli_connect('localhost','root','','dbms');




if($conn){
    if(isset($_POST['Upload'])){
        $picName=$_FILES["imagefile"]["name"];
        $picTmpName=$_FILES["imagefile"]["tmp_name"];
        $folder="Upload/";
        move_uploaded_file($picTmpName,$folder.$picName);
    
    
        $sql="UPDATE users SET U_PHOTO='$picName' WHERE USER_ID='$user_id';";
        
        $qry=mysqli_query($conn,$sql);
        
        if($qry){
            echo "<script>window.alert('success');</script>";
	       echo "<script>location.assign('userProfile.php');</script>";
        }
        
	    
    }
}

?>