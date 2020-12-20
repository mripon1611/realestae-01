<?php
session_start();

$user_id=$_SESSION['user_id'];

if($user_id == true){
    $conn=mysqli_connect('localhost','root','','dbms');
    $sql="select user_name,user_address,user_phone_number,user_email,u_photo,user_password from users where user_id='$user_id';";
    $records=mysqli_query($conn,$sql);
}
else{
    header('location:signin.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
        <link rel="icon" href="logo.jpg">
        <style>
			*{	margin: 0;
				padding: 0;
			}
			body{
				background-image: url("wp.jpg");
				background-repeat: no-repeat;
				background-size: cover;
			}
			nav{
				width: 100%;
				height: 40px;
				background-color: #fff;
			}
			nav ul{
				float: right;
			}
			nav ul li{
				float: right;
				List-style: none;
			}
			nav ul li{
				display: block;
				font-family: arial;
				color: #222;
				font-size: 14px;
				padding: 12px 14px;
			}
		</style>
    </head>
    <body>
        
        <form action="UpdateProfile2.php" method="post">
			<?php
                while($user=mysqli_fetch_assoc($records)){
                    
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div align="center">Address:</div>
            <div align="center">    
                <input type="text" class="form-control" placeholder="Address" value="<?php echo $user['user_address'];?>" name="user_address" />
			</div>
            <br>
            <br>
           
            <div align="center">Email:</div>
            <div align="center"><input type="email" class="form-control" placeholder="Email" value="<?php echo $user['user_email'];?>" name="user_email" />
			</div>
            <br>
            <br>
        
            <div align="center">Phone Number:</div>
			<div align="center"><input type="text" class="form-control" placeholder="Phone Number" value="<?php echo             $user['user_phone_number'];?>" name="user_phone_number"/>
			</div>
            <br>
            <br>
           
            <div align="center">Password:</div>
            <div align="center">
				<input type="password" class="form-control" placeholder="Password" value="<?php echo $user['user_password'];?>" name="user_password" />
			</div>
            <br>
            <div align="center"><input type="submit" value="Save Change"></div>
			
            <?php
                }
             ?>

		</form>
    </body>
</html>