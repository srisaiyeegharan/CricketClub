<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - Store a Role</title>
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
						<h2>Store a Role</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
		<div class="container 100%">
					<div class="row">
					<div class="6u 12u(3)">
						<section>
							<form method="post" action="role_process.php">
							<div class="container 100%">
								<div class="row uniform 100%">
									<div class="6u 12u$">
										<input type="text" name="role_id" id="role_id" value="" placeholder="Role ID"  />
									</div>
									<div class="6u 12u$">
										<input type="text" name="role_name" id="role_name" value="" placeholder="Role Description" />
									</div>				
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Register"  /></li>
											<li><input type="reset" value="Reset" class="special" /></li>
										</ul>
									</div>
								</div>
							</div>
							</form>
						</section>
						</div>
						
					
						<?php 	
						echo"<div class='6u 12u(3)'>";
						echo"<h5>Stored Roles of players: </h5>";
						require_once ("settings.php"); //connection info
						$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
						
						if (!$conn)
						{
							echo "<p>Database connection failure</p>"; // not in production script
						} 
						else 
						{			
						$sql_table_one="role";		
						
						
						echo "<table border='1'>"; 
						echo "<tr><th>Role ID</th><th>Description</th></tr>"; 
						
						$query = "SELECT RoleId, RoleDescription FROM $sql_table_one";
										
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
						echo"</div>"
						?>	
						
			</div>
		</div>

		<!-- Footer -->
			<?php require 'footer.php'; ?>

	</body>
</html>