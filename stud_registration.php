<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<style type="text/css">
	
	body{
		background-color: black;
	}
</style>
</head>
<body>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

<?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $comment = $website = "";
         $flag = 0;
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["userName"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["userName"]);
			   $flag++;
            }
            
            if (empty($_POST["emailid"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["emailid"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
			   $flag++;
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
			   $flag++;
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
		 
		 if($flag==3)
		 {
			 setcookie("userName", $name, time() + (86400 * 30), "/");
setcookie("gender", $gender, time() + (86400 * 30), "/");
setcookie("emailid", $email, time() + (86400 * 30), "/");
setcookie("no", $_POST["no"], time() + (86400 * 30), "/");
setcookie("std", $_POST["std"], time() + (86400 * 30), "/");
setcookie("pass", $_POST["pass"], time() + (86400 * 30), "/");
setcookie("newpass", $_POST["newpass"], time() + (86400 * 30), "/");
setcookie("fullName", $_POST["fullName"], time() + (86400 * 30), "/");
		 header('Location:register.php');
		}
      ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Sign-Up For Students!</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <span class="anchor" id="formLogin"></span>
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Registration</h3>
                        </div>
                        <div class="card-body">
                            <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                <div class="form-group">
                                    <label for="uname1">Full name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name = "fullName" id="uname1" placeholder="Enter your full name">				<?php echo "<strong>$nameErr</strong>"?>

                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" id="pwd1" name="userName" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label></br><?php echo "<strong>$genderErr</strong>"?>
                                    <label>Male</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio"  id="pwd1" name="gender" value="male"></br>
                                    <label>Female</label>&nbsp&nbsp&nbsp&nbsp<input type="radio" id="pwd1" name="gender" value="female">
                                </div>
                                <div class="form-group">
                                    <label>Standard</label>
	                                    <select name="std">
										<option value="X-SSC"/>X-SSC</option/>
										<option value="X-ICSE"/>X-ICSE</option/>
										<option value="HSC-Maharashtra"/>HSC-Maharashtra</option/>
										</select/><br/><br/>
                                </div>
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" id="pwd1" placeholder="Email ID" name="emailid"><?php echo "<strong>$emailErr</strong>"?>
                                </div>
                                <div class="form-group">
                                    <label>Mobile No</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" id="pwd1" placeholder="Mobile Number" name="no">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" placeholder="password" name="pass">
                                </div>
                                <div class="form-group">
                                    <label>Reenter Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" placeholder="Confirm Password" name="newpass">
                                </div>
                                <center><input type="submit" class="btn btn-success btn-lg float-right" value="Register"></center>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
</body>
