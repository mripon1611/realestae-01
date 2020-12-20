<?php
session_start();

$broker_id=$_SESSION['broker_id'];

if($broker_id == true){
    $conn=mysqli_connect('localhost','root','','dbms');  
    $sql="SELECT R.REGION_NAME,P.AREA,P.LAND_SPACE,P.RS_NUMBR,P.CS_NUMBR,P.LAND_PRICE,U.USER_NAME,U.USER_EMAIL,B.b_type
    FROM plot_details P JOIN region R ON(P.REGION_ID=R.REGION_ID) JOIN broker B ON(B.BROKER_ID=R.BROKER_ID)
    JOIN users U ON(P.USER_ID=U.USER_ID ) WHERE P.CHECK_VALIDITI='VALID' AND R.BROKER_ID='$broker_id';";
    $records=mysqli_query($conn,$sql);
}
else{
    header('location:http:signin.php');
}

?>


<!DOCTYPE html>

<html>

	<head>
		<title>Home Page</title>
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
            .home{
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
                <td width="10%"><a href="brokerHome.php"><input class="home" type="button" value="HOME"></a>
                </td>
                
                <td width="10%">
		            <a href="BrokerProfile.php"><input class="bb" type="button" value="PROFILE"></a>
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
        
        <table border="0" width="100%" height="62px">
            
            <?php 
                $var=1;
                while($user=mysqli_fetch_assoc($records)){
                   
            ?>
            
            <tr>
                <td colspan="2"><font size=5pt color="#AA0000"><center><?php echo" <h2>$var.</h2>";?></center></td>
            </tr>
            <tr>
                
                <td align="center"><h3>Land Details:</h3>
                    <table border="0" width="100%" height="62px">
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Region Name:</td>
                            <td><?php echo $user['REGION_NAME'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Area:</td>
                            <td><?php echo $user['AREA'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Space:</td>
                            <td><?php echo $user['LAND_SPACE'];?></td>
                            
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">RS Number:</td>
                            <td><?php echo $user['RS_NUMBR'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">CS Number:</td>
                            <td><?php echo $user['CS_NUMBR'];?></td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Price:</td>
                            <td><?php echo $user['LAND_PRICE'];?></td>
                        </tr>
                    </table>
                </td>
                <td>&nbsp;</td>
                
            </tr>
            <tr>
                <td align="center"><h3>Owner:</h3>
                    <table border="0" width="100%" height="62px">
                        <tr><td width="50%">&nbsp; </td>
                            <td width="10%" align="left">Name:</td>
                            <td><?php echo $user['USER_NAME'];?></td>
                        </tr>
                        
                        <tr><td width="50%">&nbsp; </td>
                            <td width="10%" align="left">Email:</td>
                            <td><?php echo $user['USER_EMAIL'];?></td>
                        </tr>
                        
                        <tr><td colspan="3"> &nbsp;</td>
                        </tr>
                        <tr><td colspan="3"> &nbsp;</td>
                            
                        </tr>
                        <tr><td colspan="3">&nbsp; </td>
                            
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