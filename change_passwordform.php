<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
			
<script>

	function validate() {
        var password1 = document.getElementById("password1").value;
        var password2 = document.getElementById("password2").value;
		alert(password1+" "+password2);
        if (password1 != password2) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</head>
<body>
<div id="frm">
	<form action="change_password.php" onSubmit="return validate()" method="post" >
	Changing Password:<br/>
		<p>
			<label>New Password:</label>
			<input type="Password" name="password1">
		</p>
		<p>
			<label>Re-Enter New Password:</label>
			<input type="Password" name="password2">
			<p id="message"></p>
		</p>
		

		<p>
			<input type="submit"  value="Change password">
			<br><br>	
		</p>
	</form>
</div>
</body>
</html>
