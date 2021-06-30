<?php
    session_start();
	if(isset($_COOKIE['flag'])){
       
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard Page</title>
    </head>
	<body>


	<table height = "50px" width = "100%"  border="1">
		<tr height = "100px">
<td colspan="2" > <section align="right">
				 <h1>Logged in as <a href="profile.html"> Radwan Romy </a><a href="logout.php">| Logout</a> </h1>
			</section>
			<img src="../Image/Capturcsdfcsde.JPG" width="280" height="150" />
			</td>
		</tr>
		<tr height = "150px">
		<th >
		    Account
		</th>
		<th rowspan="2">
		<h1>Welcome home!    <?=$_SESSION['user']['name'] ?> </h1>  
	<a href="../controller/logout.php">logout</a>

		</th>
		<tr>
			<td>
				<a href="../View/Registration.php"><u>. Register Employee</u></a><br>
				<a href="../View/addRoom.php"><u>. Add Room</u></a><br>
              <a href="../View/HA_Customer_Regi.php"><u>.Customer Registration</u></a><br>
              <a href="../View/H_Checkout.php"><u>. Customer Check Out</u></a><br>
               <a href="../View/profile.php"><u>. View Profile</u></a><br>
               <a href="../View/edit_profile.php"><u>. Edit Profile</u></a><br>
               <a href="../View/picture.php"><u>. Change Profile Picture</u></a><br>
               <a href="../View/change_password.html"><u>. Change Password</u></a><br>
               <a href="../View/logout.php"><u>. Logout</u></a><br>
               <a href="../View/Forgot_password.html"><u>. Forgot Password</u></a><br>
                <br>
			</td>
		</tr>
		<tr>
		    <td align="center" colspan="2">
            
		        Copyright(C) 2017
		    </td>
		</tr>
	</table>
	</body> 
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>