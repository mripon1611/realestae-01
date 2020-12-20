<?php
session_start();

$user_id=$_SESSION['user_id'];

echo "<script>window.alert('$user_id');</script>";

$conn=mysqli_connect('localhost','root','','dbms');
$sql="select user_name,user_address,user_phone_number from users where user_id='aripon';";
$records=mysqli_query($conn,$sql);

?>


<!DOCTYPE html>

<html>

	<head>
		<title>Profile2</title>
        <link rel="icon" href="bg.png">
		<style>
			*{	margin: 0;
				padding: 0;
			}
			body{
				background-color: lightblue;
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
        
		<table border="0" width="100%" height="650px">
            <tr> 
                <td><a href="userHome.php"><input type="button" value="HOME"></a>
                    <a href="User_buyer.php"><input type="button" value="BUYER"></a>
		            <a href="userProfile2.php"><input type="button" value="PROILE"></a>
		            <a href="addDetails.php"><input type="button" value="ADD"></a>
                    <a href="userHome.php"><input type="button" value="STATUS"></a>
                </td>
                <td align="right"><a href="main.php"><input type="button" value="Log out"></a></td>
            </tr>
            <tr>
                <td colspan="2"><font size=7pt color="#AA0000"><center>SR Corporation</center></font></td>
            </tr>
            <tr height="170px">
                <td width="25%">
                    <table border="1" width="80%" height="100%">
                        <tr>
                            <td><center><img src="bg2.png"></center></td>
                        </tr>
                    </table>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="right"><a href="#"><input type="button" value="Change Photo"></a></td>
                <td>&nbsp;</td>
            </tr>
            <?php
                while($user=mysqli_fetch_assoc($records)){
            ?>
                   <tr>
                
                        <td align="right">Name:</td>
                        <td><?php echo $user['user_name'];?></td>
                    </tr> 
                    <tr>
                
                        <td align="right">Address:</td>
                        <td><?php echo $user['user_address'];?></td>
                    </tr> 
                    <tr>
                
                        <td align="right">Contact:</td>
                        <td><?php echo $user['user_phone_number'];?></td>
                    </tr> 
            <?php
                }
             ?>
            
           
            <tr>
                <td>&nbsp;</td>
                <td align="right"><a href="#"><input type="button" value="Edit Profile"></a></td>
            </tr>
            <tr>
                <td colspan="2"><center>Copy Right</center></td>
            </tr>
        </table>
		
	</body>

</html>

		
        