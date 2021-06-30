<?php

	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];

		if($msg == 'null'){
			echo "null value found...";
		}

		if($msg == 'password_error'){
			echo "password must be at least 5 char...";
		}		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
	<body>
	</body>
	<table height = "50px" width = "100%"  border="1">
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
				<form action="../Controller/registrationck.php" method="post"  enctype="multipart/form-data">
				<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" name = "name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="username" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
					<td rowspan="2">Profile Picture </td>
				
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="file" name="image">
					</td>
				
			</tr>			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female" >Female
						<input name="gender" type="radio" value="Other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" name = "day" size="2" />/
						<input type="text" name="month" size="2" />/
						<input type="text" name= "year" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>

					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>
                </form>
			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
		
	</table>
</html>