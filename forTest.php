<!DOCTYPE html>

<html>

	<head>
		<title>For Test</title>
        <link rel="icon" href="bg.png">
        <style>
            *{	margin: 0;
				padding: 0;
			}
			body{
				background-color: lightblue;
				background-size: cover;
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
		<table border="0" width="100%" height="62px">
            <tr>
                <td><a href="#"><input type="button" value="HOME"></a>
		            <a href="#"><input type="button" value="PROFILE"></a>
		            <a href="#"><input type="button" value="REQUEST"></a>
                    <a href="#"><input type="button" value="MESSAGE"></a>
                </td>
                <td align="right"><a href="#"><input type="button" value="Log out"></a></td>
            </tr>
            <?php 
                $var=1;
                while($var<=10){
            ?>
            <tr>
                <td colspan="2"><font size=5pt color="#AA0000"><center><?php echo" <h2>$var.</h2>";?></center></td>
            </tr>
            <tr>
                <td align="center"><h3>Land Details:</h3>
                    <table border="0" width="100%" height="62px">
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Region Name:</td>
                            <td>Badda</td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Space:</td>
                            <td>12.5</td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">RS Number:</td>
                            <td>123</td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">CS Number:</td>
                            <td>57</td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Price:</td>
                            <td>1238 tk</td>
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
                            <td>Ripon</td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Address:</td>
                            <td>Mirpur</td>
                        </tr>
                        <tr><td width="50%"> &nbsp;</td>
                            <td width="10%" align="left">Contact:</td>
                            <td>+8801521432232</td>
                        </tr>
                        <tr><td width="50%">&nbsp; </td>
                            <td width="10%" align="left">Email:</td>
                            <td>ar.ripon1611@gmail.com</td>
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