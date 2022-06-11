<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login/login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login/login.php");
	}

?>
<html>
<head>
<link rel="shortcut icon" href="1.png" type="image/x-icon">
<title>Habib-Quiz</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/dreem.css">
<link rel="stylesheet" type="text/css" href="css/bg.css">
<script src="css/jq.js"></script>

</head>
<body>
<div class="bgimg w3-text-white">
         <div class="w3-xlarge">
              <div class="w3-dropdown-hover w3-right">
	           <button class="w3-btn w3-red">&nbsp&nbsp&nbsp&nbsp Options &nbsp&nbsp&nbsp&nbsp</button>
			      <div class="w3-dropdown-content w3-bar-block">
			   		<a id="<?php echo $_SESSION['class']; ?>" href="" class="w3-bar-item w3-button w3-deep-purple" >Student Chat</a>
					<a href="https://www.facebook.com/tanvir.zaman.3430" class="w3-button w3-bar-item w3-blue" >KZ Tanvir</a>
			        <a id="<?php echo $_SESSION['class']; ?>" href="class/index.php" class="w3-bar-item w3-button w3-yellow">Admin</a>
					<a href="index.php?logout='1'" class="w3-bar-item w3-button w3-black">Logout</a>
			      </div>
	          </div>
         </div> 
	<div class="w3-container">
		 <h2 class="w3-purple w3-card w3-container w3-animate-zoom" align="center">মুকন্দপুর উচ্চ বিদ্যালয়</h2>
    <div class="w3-container w3-card w3-xlarge">
	    <div class="w3-container w3-center">
        <img src="img/1.png" class="w3-animate-opacity" style="width:60px;height:60px;">
		</div>
			 <!-- Tanvir Zaman logged in user information -->
		<div class="w3-small"> 
         <?php  if (isset($_SESSION['username'])) : ?>
			<p>Student Name: <a class="w3-text-aqua"><?php echo $_SESSION['username']; ?></a></p>
			<p>Student Class&nbsp: <a class="w3-text-aqua"><?php echo $_SESSION['class']; ?></a></p>
            <p>Student Roll&nbsp&nbsp&nbsp: <a class="w3-text-aqua"><?php echo $_SESSION['roll']; ?></a></p>
			
			
			
		<?php endif ?>
		</div>
    </div><br>
    <div class="w3-centered">
      <table id="<?php echo $_SESSION['class']; ?>a" class="w3-animate-left" border="0" width="100%">
	    <tr class="w3-black">
		    <th>Class</th>
		    <th>Subject</th>
		    <th>Exam Link</th>
		</tr>
		<tr class="w3-white">
		<td rowspan="2">Eight</td>
		<td>Bangla</td>
		<td><a class="w3-button w3-deep-purple w3-round" href="class/08/sub1.php">Click here</a></td>
		</tr>
      <tr class="w3-white">
      <!--<td>Ten</td>-->
		<td>English</td>
		<td><a class="w3-button w3-deep-purple w3-round" href="class/08/sub2.php">Click here</a></td>
		</tr>
      
	  </table>
	  
	  
	  <table id="<?php echo $_SESSION['class']; ?>b" class="w3-text-black w3-animate-left" width="100%" border="0">
	    <tr class="w3-black">
		    <th>Class</th>
		    <th>Subject</th>
		    <th>Exam Link</th>
		</tr>
		<tr class="w3-white"">
		<td rowspan="2">Nine</td>
		<td>Bangla</td>
		<td><a class="w3-button w3-deep-purple w3-round" href="class/09/sub1.php">Click here</a></td>
		</tr>
      <tr class="w3-white">
      <!--<td>Ten</td>-->
		<td>English</td>
		<td><a class="w3-button w3-deep-purple w3-round" href="class/09/sub2.php">Click here</a></td>
		</tr>
      
	  </table>
	  
	  
	  <table id="<?php echo $_SESSION['class']; ?>c" class="w3-animate-left" border="0" width="100%">
	    <tr class="w3-black">
		    <th>Class</th>
		    <th>Subject</th>
		    <th>Exam Link</th>
		</tr>
		<tr class="w3-white">
		<td rowspan="2">Ten</td>
		<td>Bangla</td>
		<td><a class="w3-button w3-deep-purple w3-round" href="class/10/sub1.php">Click here</a></td>
		</tr>
      <tr class="w3-white">
      <!--<td>Ten</td>-->
		<td>English</td>
		<td><a class="w3-button w3-deep-purple w3-round" href="class/10/sub2.php">Click here</a></td>
		</tr>
      
	  </table>
	  
    </div>
    <div>
        <p><h4></h4></p>
    </div>
	<!-- Tanvir Zaman notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
			<div class="w3-center" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
</div>
<br><br><br>
<div id="footer" align="center" class="w3-red">KZ Online Web &copy</div>
<script>
$(document).ready(function(){
$("#EIGHTb, #EIGHTc, #NINEa, #NINEc, #TENa, #TENb, #EIGHT, #NINE, #TEN").remove();});
</script>
</body>
</html>