
<?php
	session_start();

	if(isset($_POST['submit'])){
        $name       = $_POST['name'];
		$username  = $_REQUEST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$gender     = $_POST['gender'];
		$day        = $_POST['day'];
		$month      = $_POST['month'];
		$year       = $_POST['year'];
       
       
       $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $filetemp = $_FILES['image']['tmp_name'];
        $ext = explode('.', $filename);
        $location = '../images/'.time().'.'.$ext[1];

        if(move_uploaded_file($filetemp, $location)){
            echo "done";
        }else{
            echo "error";
        } 

		if($name != '' && $username != '' && $password != '' && $email != '' && $gender !='' && $day != '' && $month != '' && $year != ''  ){
			
			if(strlen($password) > 5){
                $user=$name."|".$username."|".$email."|".$password."|".$gender."|".$day."|".$month."|".$year;
				$_SESSION['user'] = $user;
                $file = fopen('users.txt', 'w');
				fwrite($file, $user);
				fclose($file);
				header('location: ../View/login.php');
			}else{
				header('location: ../View/Registration.php?msg=password_error');
			}
		}else{
			header('location: ../View/Registration.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}
