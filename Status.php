<?php

session_start();
$user_id=$_SESSION['user_id'];

if($user_id == true){
    $conn=mysqli_connect('localhost','root','','dbms');
    $sql="SELECT area,land_space,region_id,cs_numbr,rs_numbr,land_price, CASE WHEN CHECK_VALIDITI='VALID' THEN 'Added' ELSE 'Pending' END as 'status' FROM  plot_details WHERE l_status<>'sold' and USER_ID='$user_id';";
    $records=mysqli_query($conn,$sql);
}
else{
    header('location:signin.php');
}
?>

<!DOCTYPE html>

<html>

	<head>
		<title>Status</title>
        <link rel="icon" href="logo.jpg">
		<style>
			*{	margin: 0;
				padding: 0;
			}
            body{
				background-image: url(wp.jpg);
				background-size: cover;
			}
            .uid{
                background-color: transparent;
                border: none;
                color: orange;
            }
            .sts{
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
                <td width="8%"><a href="userHome.php"><input class="bb" type="button" value="HOME"></a>
                </td>
                <td width="8%">
                    <a href="User_buyer.php"><input class="bb" type="button" value="BUYER"></a>
                </td>
                <td width="8%">
		            <a href="userProfile.php"><input class="bb" type="button" value="PROFILE"></a>
                </td>
                <td width="8%">
		            <a href="addDetails.php"><input class="bb" type="button" value="ADD"></a>
                </td>
                <td width="8%">    
                    <a href="Status.php"><input class="sts" type="button" value="STATUS"></a>
                </td>
                <td width="8%">    
                    <a href="Search.php"><input class="bb" type="button" value="SEARCH"></a>
                </td>
                <td width="32%">&nbsp;</td>
                <td align="right" class="uid"><?php echo $user_id;?>/</td>
                
                <td align="left"><a href="logout.php"><input class="bb" type="button" value="LOG OUT"></a></td>
                  
                
            </tr>
        </table>
        
        <table border="0" width="100%" height="62px">
            
            <?php 
                $var=1;
                while($user=mysqli_fetch_assoc($records)){
            ?>
            <tr>
                <td colspan="2"><font size=6pt color="#AA0000"><center><?php echo" <h2>$var.</h2>";?></center></td>
            </tr>
            <tr>
                <td align="center"><h3>Land Details:</h3>
                    <table border="0" width="100%" height="62px">
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Region Id:</td>
                            <td><?php echo $user['region_id'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Area:</td>
                            <td><?php echo $user['area'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Space:</td>
                            <td><?php echo $user['land_space'];?></td>
                            
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">RS Number:</td>
                            <td><?php echo $user['rs_numbr'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">CS Number:</td>
                            <td><?php echo $user['cs_numbr'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Price:</td>
                            <td><?php echo $user['land_price'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left"><font size=5pt color="lightgreen">Status:</font></td>
                            <td><?php echo $user['status'];?></td>
                        </tr>
                    </table>
                </td>
                <td>&nbsp;</td>
                
            </tr>
            
            <?php
                $var+=1;
            }
            ?>
        </table>
		
	</body>

</html>