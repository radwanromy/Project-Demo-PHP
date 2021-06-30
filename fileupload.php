<?php

	$filename = $_FILES['image']['name'];
	$filesize = $_FILES['image']['size'];
	$filetemp = $_FILES['image']['tmp_name'];
	$ext = explode('.', $filename);
	$location = ''.time().'.'.$ext[1];
	
	if(move_uploaded_file($filetemp, $location)){
		echo "done";
	}else{
		echo "error";
	}
?>