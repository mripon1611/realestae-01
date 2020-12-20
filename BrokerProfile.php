<?php
session_start();

$broker_id=$_SESSION['broker_id'];

if($broker_id == true){
    $conn=mysqli_connect('localhost','root','','dbms');
    $sql="select broker_name,b_address,b_phone_number,b_email,photo from broker where broker_id='$broker_id';";
    $records=mysqli_query($conn,$sql);
}
else{
    header('location:http:signin.php');
}
    
?>


<!DOCTYPE html>

<html>

	<head>
		<title>Profile</title>
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
            .uid{
                background-color: transparent;
                border: none;
                color: orange;
            }
            .profile{
                background-color: transparent;
                border: none;
                color: pink;
            }
            .bb{
                background-color: transparent;
                border: none;
                color: orange;
            }
            .bb:hover{
                color: pink;
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
        
       <table border="0" width="100%" height="25px">
            <tr> 
                <td width="10%" ><img src="logo3.jpg" width="102%" height="50px"></td>
                <td width="10%"><a href="brokerHome.php"><input class="bb" type="button" value="HOME"></a>
                </td>
                
                <td width="10%">
		            <a href="BrokerProfile.php"><input class="profile" type="button" value="PROFILE"></a>
                </td>
                <td width="10%">
		            <a href="RequestToBroker.php"><input class="bb" type="button" value="REQUEST"></a>
                </td>
                <td width="10%">    
                    <a href="brokerMessage.php"><input class="bb" type="button" value="MESSAGE"></a>
                </td>
                
                <td width="40%">&nbsp;</td>
                <td align="right" class="uid"><?php echo $broker_id;?>/</td>
                
                <td align="left"><a href="logout.php"><input class="bb" type="button" value="LOG OUT"></a></td>
                  
                
            </tr>
        </table>
        
        
        <table border="0" width="80%" height="570px"  align="right"> 
            
           
            <?php
                while($user=mysqli_fetch_assoc($records)){
                $photo=$user['photo']; 
            ?>
                     <tr height="170px">
                        <td width="25%">
                            <table border="1" width="80%" height="100%">
                                <tr>
                                    
                                    
                                    <td><img src="Upload/<?php echo $photo; ?>" height="170px" width="188px"></td>
                                </tr>
                            </table>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="right"><a href="brimagefile.php"><input type="button" value="Change Photo"></a></td>
                        <td>&nbsp;</td>
                    </tr>
            
                   <tr>
                
                        <td align="right"><h1>Name:</h1></td>
                        <td><h1><?php echo $user['broker_name'];?></h1></td>
                    </tr> 
                    <tr>
                
                        <td align="right"><h1>Address:</h1></td>
                        <td><h1><?php echo $user['b_address'];?></h1></td>
                        
                    </tr> 
                    <tr>
                
                        <td align="right"><h1>Contact:</h1></td>
                        <td ><h1><?php echo $user['b_phone_number'];?></h1></td>
                        
                    </tr> 
                    <tr>
                
                        <td align="right"><h1>Email:</h1></td>
                        <td><h1><?php echo $user['b_email'];?></h1></td>
                        
                    </tr> 
            <?php
                }
             ?>
            
           
            <tr>
                <td>&nbsp;</td>
                <td align="right"><a href="editBrokerProfile.php"><input type="button" value="Edit Profile"></a></td>
            </tr>
            <tr>
                <td colspan="2"><center>Copy Right</center></td>
            </tr>
            
        </table>
		
	</body>

</html>

		
        