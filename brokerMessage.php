<?php
session_start();

$broker_id=$_SESSION['broker_id'];
if($broker_id == false){
    header('location:http:signin.php');
}

?>

<!DOCTYPE html>

<html>

	<head>
		<title>Message</title>
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
            .msg{
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
		            <a href="BrokerProfile.php"><input class="bb" type="button" value="PROFILE"></a>
                </td>
                <td width="10%">
		            <a href="RequestToBroker.php"><input class="bb" type="button" value="REQUEST"></a>
                </td>
                <td width="10%">    
                    <a href="brokerMessage.php"><input class="msg" type="button" value="MESSAGE"></a>
                </td>
                <td width="40%">&nbsp;</td>
                <td align="right" class="uid"><?php echo $broker_id;?>/</td>
                
                <td align="left"><a href="logout.php"><input class="bb" type="button" value="LOG OUT"></a></td>
                  
                
            </tr>
        </table>
        broker message
	</body>

</html>