<?php

	$password = $_COOKIE["pass"];
	$newpassword = $_COOKIE["newpass"];
	$name = $_COOKIE["fullName"];
	

	$uname = $_COOKIE["userName"];

	$gender = $_COOKIE["gender"];

	$email = $_COOKIE["emailid"];

	$mobile = $_COOKIE["no"];

	$standard = $_COOKIE["std"];
	if($_SERVER['HTTP_REFERER']=='http://localhost/sidali/stud_registration.php')
	{
		if($password==$newpassword)
		{

			$link = mysqli_connect("localhost","root","");
			mysqli_select_db($link,"sidali");

			$result = mysqli_query($link,"INSERT INTO student VALUES ('$name','$uname','$gender','$standard','$email','$mobile','$password')");
					

				if($result)
				{
					echo "Registered Succesfully!!! ";
					echo "<script>setTimeout(\"location.href = 'portal.html';\",1500);</script>";
				}
				else{
					echo "Failed to register";
					echo "<script>setTimeout(\"location.href = 'portal.html';\",1500);</script>";
				}
		}
	}
	else
	{
		if($password==$newpassword)
		{

			$link = mysqli_connect("localhost","root","");
			mysqli_select_db($link,"sidali");

			$result = mysqli_query($link,"INSERT INTO professor VALUES ('$name','$uname','$gender','$standard','$email','$mobile','$password')");
					

				if($result)
				{
					echo "Registered Succesfully!!! ";
					echo "<script>setTimeout(\"location.href = 'portal.html';\",1500);</script>";
				}
				else{
					echo "Failed to register";
					echo "<script>setTimeout(\"location.href = 'portal.html';\",1500);</script>";
				}
		}
	}





?>