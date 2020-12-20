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
        <title>Search</title>
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
            .src{
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
		            <a href="addDetails.php"><input class="bb" type="button" value="ADD"></a>
                </td>
                <td width="8%">    
                    <a href="Status.php"><input class="bb" type="button" value="STATUS"></a>
                </td>
                <td width="8%">    
                    <a href="Search.php"><input class="src" type="button" value="SEARCH"></a>
                </td>
                <td width="32%">&nbsp;</td>
                <td align="right" class="uid"><?php echo $user_id;?>/</td>
                
                <td align="left"><a href="logout.php"><input class="bb" type="button" value="LOG OUT"></a></td>
                  
                
            </tr>
        </table>
        
        <table border="0" width="100%" height="570px">
            <form action="findSearch.php" method="post">
                 <tr>
                    <td colspan="3"  height="120px"></td>
                </tr>
                <tr>
                    <td align="center" colspan="3" height="30px"><font size="5pt">Region:</font></td>
                </tr>
                <tr>
                    <td colspan="3" align="center" height="20px"><input type="text" class="form-control" placeholder="Mirpur" name="region" ></td>
                </tr>
                <tr>
                    <td align="center" colspan="3"  height="40px"><font size="5pt">Amounts(BDT):</font></td>
                </tr>
                <tr>
                    <td width="50%" align="right" height="20px">From:<input type="text" class="form-control" placeholder="0" name="lamnt" ></td>
                    <td width="8"  height="20px"></td>
                    <td align="left"  height="20px">To:<input type="text" class="form-control" placeholder="100000000" name="uamnt" ></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"  height="80px"><input type="submit" value="SEARCH"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
            </form>
           
            
        </table>
    </body>
</html>