<?php


if(isset($_POST['password1']) && isset($_POST['password2'])){
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];
session_start();
$username = $_SESSION['username'];



if($password1==$password2)
{

	$link = mysqli_connect("localhost","root","","sidali");
	mysqli_select_db($link,"login");

	$result = mysqli_query($link,"select * from student where uname = '$username'")or die(mysqli_error($link));
	if(mysqli_num_rows($result)==1)
	{
		$sql = "UPDATE student SET pass='$password1' WHERE uname='$username'";
		if (mysqli_query($link, $sql)) {
			echo "Password Succesfully Updated for username " .$username;
			echo "<script>setTimeout(\"location.href = 'stud_login.html';\",1500);</script>";
		} else {
			echo "Error updating record: " . mysqli_error($link);
			echo "<script>setTimeout(\"location.href = 'homepage.html';\",1500);</script>";
		}
		
	}
	else
	{
		$result = mysqli_query($link,"select * from professor where uname = '$username'")or die(mysqli_error($link));
		if(mysqli_num_rows($result)==1)
		{
			$sql = "UPDATE professor SET pass='$password1' WHERE uname='$username'";
			if (mysqli_query($link, $sql)) {
				echo "Password Succesfully Updated for username " .$username;
				echo "<script>setTimeout(\"location.href = 'prof_login.html';\",1500);</script>";
			} else {
				echo "Error updating record: " . mysqli_error($link);
				echo "<script>setTimeout(\"location.href = 'homepage.html';\",1500);</script>";
			}
		
		}
		else
		{
			echo "No such record present";
		}
	}
}
else
{
	echo "Please re-enter the password";
}

}
else
{
	echo "Please try again - Empty fields" ;
}



?>
