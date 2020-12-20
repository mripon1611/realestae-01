<!DOCTYPE html>

<html>

	<head>
		<title>Sign Up</title>
		<link rel="icon" href="logo.jpg">
		
		<style>
			*{	margin: 0;
				padding: 0;
			}
			body{
				background-image: url("Nat.jpg");
				background-repeat: no-repeat;
				background-size: cover;
			}
            .signup{
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
            .form{
                background-color: transparent;
                border-bottom-color: white;
                color: orange;
            }
            .form:hover{
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
        
        <table border="0" width="100%" height="50px">
            <tr height="10px"> 
                <td width="50%"><img src="logo3.jpg" height="50px"></td>
                <td>
                    <table border="0" width="100%" height="100%">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="20%" align="center"><a href="main.php"><input class="bb" type="button" value="HOME"></a></td>
                            <td width="20%" align="center"><a href="signin.php"><input class="bb" type="button" value="ABOUT US"></a></td>
                            
                            <td width="20%" align="center"><a href="signin.php"><input class="bb" type="button" value="SIGN IN"></a></td>
                            <td width="20%" align="center"><a href="signup.php"><input class="signup" type="button" value="SIGN UP"></a></td>
                            
                        </tr>
                    
                    </table>
                </td>
                
            </tr>
            <tr>
                <td width="100%" height="20px" colspan="2">&nbsp;</td>
            </tr>
            
        </table>
        
		<p><font size=7pt color="lightgreen"><center>Create an account</center></font></p>
		<form action="UserSignupDetails.php" method="post">
			<div align="center">
				<input type="text"  class="form-control" placeholder="User Name" name="user_id" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="password" class="form-control" placeholder="Password" name="user_password" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="User Full Name" name="user_name" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="Address" name="user_address" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="email" class="form-control" placeholder="Email" name="user_email" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="text" class="form-control" placeholder="Phone Number" name="user_phone_number" required=""/>
			</div>
            <br>
            <div align="center">
                <input class="form" type="submit" value="Submit">
            </div>
			

		</form>
            
	</body>

</html>