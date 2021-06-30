<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
	<body>
	

	<table height = "50px" width = "100%"  border="0">
		<tr>
			<td> <section align ="right"><h2>
			<img src="../Image/Capturcsdfcsde.JPG" width="160" height="90" align ="left"/>
				<a href = "Hotel_System_Home.html">Home</a>|
				<a href = "Login.php">Login</a>|
				<a href="Registration.php"> Registration </a> </h2>
			</section>
			</td>
		</tr>
		<tr height = "150px">
			<td>
					<form action="../Controller/logcheck.php" method="POST">
				<fieldset>
					<legend><h2>Login</h2></legend>
					Username : <input type = "text" name="username" value=""><br><br>
					Password  :  <input type = "password" name="password" value=""><br><br> 
					<input type = "submit" name="submit" value="submit"> <a href="Forgot_password.html">Forgot Password?</a>				
					</fieldset>
                </form>
                <br>
			</td>
		</tr>
		<tr>
		    <td align="center">
             <h3 style="color: orangered">Are You In The Wrong Place? No Porblem.</h3>
                <a href="../Home.php" > <h2>[Visit Our Website As a Guest]</h2></a>
		    </td>
		</tr>
	</table>
	</body>
</html>