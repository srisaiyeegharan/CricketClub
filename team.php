<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - Add Team</title>
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
						<h2>Add Team</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
		<div class="container 100%">
					<div class="row">
							<div class="6u 12u(3)">
								<section>
									<form method="post" action="team_process.php">
									<div class="container 100%">
										<div class="row uniform 100%">
											<div class="6u 12u$">
												<input type="text" name="team_id" id="team_id" value="" placeholder="Team ID" readonly="readonly" />
											</div>
											<div class="6u 12u$">
												<input type="text" name="team_name" id="team_name" value="" placeholder="Team Name" required="required"/>									
											</div>
											<div class="6u 12u$(4)">
												<input type="text" name="coach_id" id="coach_id" value="" placeholder="Coach ID" required="required" />
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
						echo"<h5>Available Coaches</h5>";
						require_once ("settings.php"); //connection info
						$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
						
						if (!$conn)
						{
							echo "<p>Database connection failure</p>"; // not in production script
						} 
						else 
						{			
						$sql_table_one="coach";		
						
						
						echo "<table border='1'>"; 
						echo "<tr><th>Coach ID</th><th>First Name</th><th>Last Name</th></tr>"; 
						
						$query = "SELECT CoachId, CoachFirstName, CoachLastName FROM $sql_table_one";
										
						$result = mysqli_query($conn, $query);
						if($result){
							$row = mysqli_fetch_assoc($result); 
					
							while($row) 
							{ 
							echo "<tr><td>{$row['CoachId']}</td>"; 
							echo "<td>{$row['CoachFirstName']}</td>"; 
							echo "<td>{$row['CoachLastName']}</td></tr>"; 
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
			<?php 
				require 'footer.php'; 
			?>

	</body>
</html>