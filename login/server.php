<?php 
	session_start();

	// variable declaration
	$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('sql203.byethost.com', 'b8_26063965', 'Tanvir3430', 'b8_26063965_tn');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$class = mysqli_real_escape_string($db, $_POST['class']);
		$roll_1 = mysqli_real_escape_string($db, $_POST['roll_1']);
		$roll_2 = mysqli_real_escape_string($db, $_POST['roll_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
		    array_push($errors, "Username is required"); 
		}
		if (empty($roll_1)) { 
		    array_push($errors, "Roll number is required"); 
		}
		if (empty($class)) {
			array_push($errors, "Class is required");
		}

		if ($roll_1 != $roll_2) {
			array_push($errors, "The two Roll numbers do not match");
		}

		// user reg system if there is no error
		if (count($errors) == 0) {
			$roll = $roll_1;//$roll = md5($roll_1);//encrypting the roll before saving in the database
			$query = "INSERT INTO users (username, class, roll) 
					  VALUES('$username', '$class', '$roll')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['class'] = $class;
			$_SESSION['roll'] = $roll;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../index.php');
		}

	}

	// ... 

	// user login sys
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$class = mysqli_real_escape_string($db, $_POST['class']);
		$roll = mysqli_real_escape_string($db, $_POST['roll']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($roll)) {
			array_push($errors, "Password is required");
		}
		if (empty($class)) {
			array_push($errors, "Class is required");
		}

		if (count($errors) == 0) {
			$roll = $roll;
			$query = "SELECT * FROM users WHERE username='$username' AND class='$class' AND roll='$roll'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['class'] = $class;
				$_SESSION['roll'] = $roll;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>