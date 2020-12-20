<?php
session_start();

$user_id=$_SESSION['user_id'];
if($user_id == false){
    header('location:signin.php');
}

?>

<!DOCTYPE html>

<html>

	<head>
		<title>Add details</title>
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
            .add{
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
                <td width="10%" ><img src="logo3.jpg" width="100%" height="50px"></td>
                <td width="8%"><a href="userHome.php"><input class="bb" type="button" value="HOME"></a>
                </td>
                <td width="8%">
                    <a href="User_buyer.php"><input class="bb" type="button" value="BUYER"></a>
                </td>
                <td width="8%">
		            <a href="userProfile.php"><input class="bb" type="button" value="PROFILE"></a>
                </td>
                <td width="8%">
		            <a href="addDetails.php"><input class="add" type="button" value="ADD"></a>
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
		<br>
        <br>
        <br>
        <br>
        <p><font size=6pt color="lightgreen"><center>Add land details</center></font></p>
        
		<form action="Details.php" method="post">
			<div align="center">
				<input type="text"  class="form-control" placeholder="Region ID" name="region_id" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="Area" name="area" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="land apace in katha" name="space" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="RS Number" name="rsnumber" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="CS Number" name="csnumber" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="Land Price" name="landprice" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="UserID" name="user_id" required=""/>
			</div>
            <br>
            <div align="center"><input type="submit" value="Submit"></div>
			

		</form>	

	</body>

</html>