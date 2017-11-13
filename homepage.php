<html>
<head>
	<title>LearNandPractise</title>
	<style type="text/css">
*{
	background-color: blue;
}

footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: black;
}

header{
	color:white;
}

	#square {
	width: 100px;
	height: 100px;
	background: #EDEDEC;
}
		#01{
			margin:auto;
		}
		.container-fluid {
			background-color:#222222;
			color:#FFFFEF;
		}
		.sidenav{
			background-color:#EDEDEC;
			color:#FFFFEF;
		}

	</style>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<center>
			<br><br>
			<div id=01>
			<img src="https://goo.gl/eMWgaa">
			<h2>LearNandPractise<?php echo "hiiiiiii"; ?>
</h2>
			<hr width=18%>
			<h4>All in 1 education site</h4>
		</div>
	</center>
</header>

<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LearNandPractise</a>
    </div>
   <div class="center-block">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Exam TimeTable</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="change_passwordform.php">Change Password</a></li>
      <li><a href="remove.php">Remove Account</a></li>
      <li><a href="sessionend.php">Sign Out</a></li>
    </ul>
</div>
    <form class="navbar-form navbar-right">
       <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
    </form>
  </div>
</nav>	
    </div>
  </div>
</form>
</nav>
<!--33333333333333333333333333-->
<div class="w3-row">
  <div class="w3-col m2 w3-dark-gray w3-center">
    <button class="w3-button w3-ripple w3-block w3-black" id="display">Chapters</button>
    <button class="w3-button w3-ripple w3-block w3-black">Subjects</button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b1">1.
Mathematics</button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b2">2.English
</button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b3">3.Science
</button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b4">4.History
    </button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b5">5.Geography</button>
    <br>
  <div class="w3-col m8 w3-black w3-block w3-center">
  	<center>
  		<table cellspacing="50px">
  			<tr>
  				<td>
  					<div id=square></div>
  				</td>
  				<td>
  					<div id=square></div>
  				</td>
  				<td>
  					<div id=square></div>
  				</td>
  			</tr>
  		</table>

</center>    
  </div>

  <div class="w3-col m2 w3-dark-gray w3-center">
    <button class="w3-button w3-ripple w3-block w3-black">Subjects</button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b1">1.
Mathematics</button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b2">2.English
</button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b3">3.Science
</button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b4">4.History
    </button>
    <br>
    <button class="w3-button w3-ripple w3-block w3-pale-yellow" id="b5">5.Geography</button>
    <br>
  </div>
	<br>



<footer class="container-fluid text-center">
  <h3>© 2023 by Aliraza Lakhani and Siddharth Mishra</h3>
  <br>
</footer>
</body>
</html>