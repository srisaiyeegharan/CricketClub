<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - Player</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Navigation -->
			<?php require 'nav.php'; ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Role has been succesfully created</h2>
					</header>
					<?php 	
						
						require_once ("settings.php"); //connection info
						$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
						
						if (!$conn)
						{
							echo "<p>Database connection failure</p>"; // not in production script
						} 
						else 
						{			
						$sql_table="role";		
				
						echo "<table border='1'>"; 
						echo "<tr><th>Role Code</th><th>Role Description</th></tr>"; 
						
						$query = "SELECT RoleId, RoleDescription FROM $sql_table ";
										
						$result = mysqli_query($conn, $query);
						if($result){
							$row = mysqli_fetch_assoc($result); 
					
							while($row) 
							{ 
							echo "<tr><td>{$row['RoleId']}</td>"; 
							echo "<td>{$row['RoleDescription']}</td></tr>"; 
							$row = mysqli_fetch_assoc($result); 
							} 
							echo "</table>";
						}
						mysqli_close($conn);
						}
						
						?>	
					<div>
					<div class="container 25%">
						<a class="button fit" href="admin.php">Club Management</a>
					</div>
					</div>
			</section>

		<!-- Footer -->
			<?php 
				require 'footer.php'; 
			?>

	</body>
</html>