<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../../login/login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ../../login/login.php");
	}

?>
<html>
<link rel="shortcut icon" href="1.png" type="image/x-icon">
<title>Habib-Quiz</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/dreem.css">
<link rel="stylesheet" href="../../css/bg.css">

<body>
<div class="bgimg">

<div class="w3-container">
<h2 class="w3-purple w3-card w3-animate-left" align="center">Mukundapur High School</h2>
   <div class="w3-container w3-container w3-card w3-xlarge">
	    <div class="w3-container w3-center">
        <img src="../../img/1.png" class="w3-animate-opacity" style="width:80px;height:80px;">
		</div>
			 <!-- Tanvir Zaman logged in user information -->
		<div class=""> 
         <?php  if (isset($_SESSION['username'])) : ?>
			<p>Student Name: <a class="w3-text-aqua"><?php echo $_SESSION['username']; ?></a></p>
			
			
			
		<?php endif ?>
		</div>
    </div>

    <table border="0" width="100%" class="w3-animate-zoom" align="center">
	
     <h2 align="center" class="w3-blue">Quiz List</h2>
      <tr class="w3-purple w3-text-black">
        <th class="w3-large">Bangla</th>
      </tr>
	
      <tr class="w3-grey">
        <td>
		 <ol><br>
			<?php
			include('../database.php');
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='subject10b'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li><hr/>';
						}
			?>
			
	     </ol>	
		</td>
      </tr>
	  
    
	</table>
</div>
<div id="footer" align="center" class="w3-red">MHS Admin Panel</div>
</body>
</html>
