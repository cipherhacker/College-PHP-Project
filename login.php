<?php

if(isset($_POST['username']) && isset($_POST['password'])){
$username = $_POST["username"];
$password = $_POST["password"];

$link = mysqli_connect('localhost','root','','sidali');

//Note below table name 
if($_SERVER['HTTP_REFERER']=='http://localhost/sidali/stud_login.html')
{
$result = mysqli_query($link,"select * from student where uname = '$username' and pass ='$password' ")
		or die("Failed to query database");// .mysqli_error());
}
else
{
	$result = mysqli_query($link,"select * from professor where uname = '$username' and pass ='$password' ")
		or die("Failed to query database");// .mysqli_error());
}

$row = mysqli_fetch_array($result);
if($row['uname']==$username && $row['pass']==$password)
{	echo "Login Succesfully!!! Welcome " .$row['uname'];
	if($_SERVER['HTTP_REFERER']=='http://localhost/sidali/stud_login.html')
	{
		setcookie("query","DELETE FROM student WHERE uname='$username'",time() + (10 * 30),"/");
		session_start();
 
		// Storing session data
		$_SESSION["username"] = $username;	
		$_SESSION["password"] = $password;
		
		setcookie("default",$row["standard"],time() + (10 * 30),"/");
		echo "<script>setTimeout(\"location.href = 'homepage.html';\",1500);</script>";
	}
	else
	{
		setcookie("query","DELETE FROM professor WHERE uname='$username'",time() + (10 * 30),"/");
		session_start();
		// Storing session data
		$_SESSION["username"] = $username;	
		$_SESSION["password"] = $password;
		
		setcookie("default",$row["standard"],time() + (10 * 30),"/");
		echo "<script>setTimeout(\"location.href = 'homepage.html';\",1500);</script>";
	}
}
else{
	echo "Incorrect username or password";
	echo "<script>setTimeout(\"location.href = 'portal.html';\",1500);</script>";
}
}
else{
	echo "Failed to login";
	echo "<script>setTimeout(\"location.href = 'portal.html';\",1500);</script>";
}

?>
