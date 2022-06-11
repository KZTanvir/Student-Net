<?php include('server.php') ?>

<html>
<head>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mukundapur High School</title>
	<link rel="stylesheet" type="text/css" href="../css/dreem.css">
	<link rel="stylesheet" type="text/css" href="../css/bg.css">
</head>
<body>
<div class="w3-container"><br>
	<div class="w3-center w3-card w3-pink w3-animate-left">
		<b><h1>Login</h1></b>
	</div>
	<div class="w3-card w3-container">
	<form class="w3-animate-right" method="post" action="login.php"><br>

		<?php include('errors.php'); ?>

		<div>
			<label>Student Name</label>
			<input class="w3-input" type="text" name="username" >
		</div><br>
		<div>
			<label>Class</label>
			<select name="class" class="w3-indigo w3-xlarge w3-btn w3-block">
			<option value="TEN">Ten</option>
			<option value="NINE">Nine</option>
			<option value="EIGHT">Eight</option>
		</select>
		</div><br>
		<div>
			<label>Roll</label>
			<input class="w3-input" type="text" name="roll" >
		</div><br><br>
		<div class="w3-center">
			<button type="submit" class="w3-btn w3-indigo" name="login_user">&nbsp &nbsp &nbsp &nbsp Login &nbsp &nbsp &nbsp &nbsp </button>
		</div>
		<div><br>
		<p>
			Not yet a member? <a class="w3-text-aqua w3-animate-fading" href="register.php">Register</a>
		</p></div>
	</form>
	
</div>
</div>
</body>
</html>