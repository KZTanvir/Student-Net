<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login/login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ../login/login.php");
	}

?>
<html>
<head>
<title>TN Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "../css/dreem.css" type = "text/css"/>
<link rel = "stylesheet" href = "../bootstrap/css/bootstrap.min.css" type = "text/css"/>
<link rel="stylesheet" href="../css/bgs.css">
</head>
<body>
<div> 
     


        <div class="w3-center w3-xlarge">
           <p><a href="../index.php" class="w3-button w3-display-topleft w3-indigo" >&nbsp &nbsp BACK &nbsp &nbsp </a></p>
              <div class="w3-dropdown-hover w3-right">
	           <button class="w3-btn w3-red">&nbsp&nbsp&nbsp&nbsp Options &nbsp&nbsp&nbsp&nbsp</button>
			      <div class="w3-dropdown-content w3-bar-block">
			   		<a href="/chat" class="w3-bar-item w3-button w3-deep-purple" >Student Chat</a>
                    <a href="https://forms.google.com" class="w3-bar-item w3-button w3-yellow">G-Forms</a>
			        
					<a href="index.php?logout='1'" class="w3-bar-item w3-button w3-red">Logout</a>
			      </div>
	          </div>
         </div>
	<div class="w3-container w3-center">
	<div class="w3-center">		
	   <h1 class="w3-purple w3-card w3-animate-left">Teacher Panel</h1>

	</div>
	
	<div class="w3-animate-zoom w3-card">
		<form action="post.php" method="post">
		
		<p class="w3-xlarge">Subject Name:
		<select name="position" class="w3-xlarge w3-btn w3-indigo">
		    
			<option value="subject8a">Bangla (Class08)</option>
			<option value="subject9a">Bangla (Class09)</option>
			<option value="subject10a">Bangla (Class10)</option>
			
			<option value="subject8b">English (Class08)</option>
			<option value="subject9b">English (Class09)</option>
			<option value="subject10b">English (Class10)</option>
			
			<option value="next8">RESULT (Class08)</option>
			<option value="next9">RESULT (Class09)</option>
			<option value="next10">RESULT (Class10)</option>
			
		</select><br/><br/><br/></p>
		<p class="w3-large">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Paste Youre Quiz here: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
		<textarea type="text" name="message" rows="4" cols="25" class="form-control"></textarea><br><br>
		<input type="submit" class="w3-btn w3-blue w3-round" value="&nbsp&nbsp&nbsp Send &nbsp&nbsp"><br>&nbsp
		</p>
		</form>
	</div>
	<div class="w3-center w3-xlarge">
			 <!-- Tanvir Zaman logged in user information -->
      <?php  if (isset($_SESSION['username'])) : ?>
			<p>Admin Name: <a class="w3-text-light-blue"><?php echo $_SESSION['username']; ?></a></p><br>
			
		<?php endif ?>
    </div><br><br><br>
	

</div>
<?php include('database.php'); ?>
    <table width="100%" align="center">
     <h2 align="center" class="w3-blue">Quiz List (class8)</h2>
      <tr class="w3-purple w3-text-black">
        <th>Bangla</th>
        <th>English</th>
        <th>Publish Date</th>
      </tr>
	
      <tr class="w3-light-green">
        <td>
		
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='subject8a'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
		
		</td>
        <td><div id="content">
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='subject8b'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
        <td><div id="content">
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='next8'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
      </tr>
	  
    
	
	</table>
	<table width="100%" align="center">
     <h2 align="center" class="w3-blue">Quiz List (class9)</h2>
      <tr class="w3-purple w3-text-black">
        <th>Bangla</th>
        <th>English</th>
        <th>Publish Date</th>
      </tr>
	
      <tr class="w3-light-green">
        <td>
		
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='subject9a'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
		
		</td>
        <td><div id="content">
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='subject9b'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
        <td><div id="content">
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='next9'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
      </tr>
	  
    
	</table>
	<table width="100%" align="center">
     <h2 align="center" class="w3-blue">Quiz List (class10)</h2>
      <tr class="w3-purple w3-text-black">
        <th>Bangla</th>
        <th>English</th>
        <th>Publish Date</th>
      </tr>
	
      <tr class="w3-light-green">
        <td>
		
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='subject10a'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
		
		</td>
        <td><div id="content">
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='subject10b'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
        <td><div id="content">
			<?php
			
			$result = mysql_query("SELECT * FROM noticemsg WHERE position='next10'");
					while($row = mysql_fetch_array($result))
						{
							echo '<li><a class="w3-text-amber">Question:'.$row['message'].'<br>';
						    echo '<a class="w3-small"><i>'.'Date:';
							echo formatDate($row['date']);
							echo '</i></a></li>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
      </tr>
	  
    
	</table>

<div id="footer" class="w3-red w3-large" align="center"><a href="https://www.facebook.com/tanvir.zaman.3430" >About TN2020</a></div>

</div>
</body>
</html>
