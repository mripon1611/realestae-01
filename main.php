

<!DOCTYPE html>

<html>

	<head>
		<title>Land Valley</title>
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
			h3{
				color: red;
				text-align: center;
			}
			h1{
				color: red;
				text-align: center;
			}	
			
		</style>
	</head>

	<body>	
		<table border="0" width="100%" height="666px">
            <tr height="10px"> 
                <td width="50%"><img src="logo3.jpg" width="20%" height="50px"></td>
                <td>
                    <table border="0" width="100%" height="100%">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="20%" align="center"><a href="main.php"><input class="home" type="button" value="HOME"></a></td>
                            <td width="20%" align="center"><a href="#"><input class="bb" type="button" value="ABOUT US"></a></td>
                            
                            <td width="20%" align="center"><a href="signin.php"><input class="bb" type="button" value="SIGN IN"></a></td>
                            <td width="20%" align="center"><a href="signup.php"><input class="bb" type="button" value="SIGN UP"></a></td>
                            
                        </tr>
                    
                    </table>
                </td>
                
            </tr>
            <tr>
                <td align="center" colspan="3"><font size="10pt" color="sienna">Welcome to RealEstate Project Management!!</font></td>
            </tr>
        </table>
		
	</body>

</html>