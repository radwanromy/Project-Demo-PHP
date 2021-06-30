<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			
			$file = fopen('users.txt', 'r');
			$data = fread($file, filesize('users.txt'));
			$user = explode('|', $data);

			//$data = fgets($file);
			//$user = explode('|', $data);
			//feof($file);

			if(trim($user[1]) == $username && trim($user[3]) == $password){
                    $_SESSION['flag'] = true;
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../View/Dashboard.php');
			}else{
				echo 'invlaid username/password';
			}

		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}
?>