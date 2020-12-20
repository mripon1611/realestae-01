<?php
session_start();

$user_id=$_SESSION['user_id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Result</title>
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
            
            .sb{
                background-color: transparent;
                border-bottom-color: chartreuse;
                color: sienna;
            }
            .sb:hover{
                color: pink;
            }
            
            
        </style>
        
    </head>
    
    <body>
        <table border="0" width="100%" height="25px">
            <tr> 
                <td width="10%" ><img src="logo3.jpg" width="100%" height="50px"></td>
                <td width="10%"><a href="User_buyer.php"><input class="bb" type="button" value="HOME"></a>
                </td>
                <td width="10%">
                    <a href="userHome.php"><input class="bb" type="button" value="SELLER"></a>
                </td>
                <td width="10%">
		            <a href="buyer_profile.php"><input class="bb" type="button" value="PROFILE"></a>
                </td>
                
                <td width="10%">    
                    <a href="Search2.php"><input class="src" type="button" value="SEARCH"></a>
                </td>
                <td width="40%">&nbsp;</td>
                <td align="right" class="uid"><?php echo $user_id;?>/</td>
                
                <td align="left"><a href="logout.php"><input class="bb" type="button" value="LOG OUT"></a></td>
                  
                
            </tr>
        </table>
        
        <table border="0" width="100%" height="600px">
            
            <tr>
                <td width="30%"></td>
                <td width="40%" height="200px">
                    <table border="1" width="100%" height="100%">
                        <tr>
                            <th >Region Id</th>
                            <th>Reion Name</th>
                        </tr>
                        <tr>
                            <td align="center">100</td>
                            <td align="center">Dhanmondi</td>
                        </tr>
                        <tr>
                            <td  align="center">101</td>
                            <td align="center">Badda</td>
                        </tr>
                        <tr>
                            <td  align="center">103</td>
                            <td align="center">Mirpur</td>
                        </tr>
                    
                    </table>
                </td>
                <td width="30%"></td>
            </tr>
            <form action="submitRequest.php" method="post">
            <tr>
                <td align="center" width="100%" height="10px" colspan="3"><h2>Region Id:</h2></td>
            </tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><a><input type="text"  class="form-control" placeholder="100" name="r_id" required=""></a></td>
            </tr>
            <tr><td wight="100%" height="20px" colspan="3"></td></tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><h2>Region Name:</h2></td>
            </tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><a><input type="text"  class="form-control" placeholder="Dhanmondi" name="r_name" required=""></a></td>
            </tr>
            <tr><td wight="100%" height="20px" colspan="2"></td></tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><h2>Area:</h2></td>
            </tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><a><input type="text"  class="form-control" placeholder="Dhanmondi-27" name="area" required=""></a></td>
            </tr>
            <tr><td wight="100%" height="20px" colspan="2"></td></tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><h2>Spaces(katha):</h2></td>
            </tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><a><input type="text"  class="form-control" placeholder="5.7" name="spc" required=""></a></td>
            </tr>
            <tr><td wight="100%" height="20px" colspan="3"></td></tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><h2>Amount(maximum):</h2></td>
            </tr>
            <tr>
                <td align="center" width="100%" height="25px" colspan="3"><a><input type="text"  class="form-control" placeholder="10000000" name="amnt"></a></td>
            </tr>
            <tr>
                <td align="center" colspan="3"><input type="submit" class="sb" placeholder="SUBMIT" ></td>
            </tr>
            <tr><td wight="100%" height="20px" colspan="3"></td></tr>
            
            </form>
        
        </table>
        
    </body>

</html>