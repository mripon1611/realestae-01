<!DOCTYPE html>

<html>

	<head>
		<title>Sign In</title>
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
            .signin{
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
                <td width="50%"><img src="logo3.jpg" width="20%" height="50px"></td>
                <td>
                    <table border="0" width="100%" height="100%">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="20%" align="center"><a href="main.php"><input class="bb" type="button" value="HOME"></a></td>
                            <td width="20%" align="center"><a href="signin.php"><input class="bb" type="button" value="ABOUT US"></a></td>
                            
                            <td width="20%" align="center"><a href="signin.php"><input class="signin" type="button" value="SIGN IN"></a></td>
                            <td width="20%" align="center"><a href="signup.php"><input class="bb" type="button" value="SIGN UP"></a></td>
                            
                        </tr>
                    
                    </table>
                </td>
                
            </tr>
            <tr>
                <td width="100%" height="100px" colspan="2">&nbsp;</td>
            </tr>
            
        </table>
        
        
        
		<form method="post">
            <p><font size=7pt color="lightgreen"><center>Login into landvalley</center></font></p>
			<div align="center">
				<input type="text" class="form-control" placeholder="UserId" name="uname" required=""/>
			</div>
            <br>
			<div align="center">
				<input type="password" class="form-control" placeholder="Password" name="pass" required=""/>
			</div>
			<br/>
			<p><font size=5pt color="darkred"><center>Login as</center></font></p>
			
            <div align="center">
			     <input type="submit" class="form" value="BROKER" name="brur" formaction="checklogin.php?type=broker"/>
			     <input type="submit" class="form" value="USER" name="brur" formaction="checklogin.php?type=user"/>
            </div>    
		</form>
	</body>

</html>