<?php

session_start();
$user_id=$_SESSION['user_id'];
if($user_id!= true){
    echo "<script>location.assign('signin.php');</script>";
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
            h1{
				color: green;
				text-align: center;
			}
        </style>
        
	</head>

	<body>
		
        
        <table border="0" width="100%" height="25px">
            <tr> 
                <td width="10%" ><img src="logo3.jpg" width="102%" height="50px"></td>
                <td width="8%"><a href="userHome.php"><input class="home" type="button" value="HOME"></a>
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
                    <a href="Status.php"><input class="bb" type="button" value="STATUS"></a>
                </td>
                <td width="8%">    
                    <a href="Search.php"><input class="bb" type="button" value="SEARCH"></a>
                </td>
                <td width="32%">&nbsp;</td>
                <td align="right" class="uid"><?php echo $user_id;?>/</td>
                
                <td align="left"><a href="logout.php"><input class="bb" type="button" value="LOG OUT"></a></td>
                  
                
            </tr>
        </table>
        
        <h1>Successfully your account is created!!!</h1>
	</body>

</html>