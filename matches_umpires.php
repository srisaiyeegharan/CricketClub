<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - New Scorecard</title>
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
						<h2>Match Details - Umpires</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
				<div class="container 100%">
					<div class="row">
					<div class="6u 12u(3)">
						<section>
							<form method="post" action="matches_umpire_process.php">
							<div class="container 100%">
								<div class="row uniform 100%">
									<?php 	
									require_once ("settings.php"); //connection info
									$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
									
									if (!$conn)
									{
										echo "<p>Database connection failure</p>"; // not in production script
									} 
									else 
									{			
									$sql_table_one="matches";		
									
									$query = "SELECT MatchId FROM $sql_table_one  ORDER BY MatchId DESC LIMIT 1";
													
									$result = mysqli_query($conn, $query);
									if($result){
										$row = mysqli_fetch_assoc($result); 
								
										while($row) 
										{ 
										echo"<div class='6u 12u$'>";
													echo"<input type='text' name='match_id' id='match_id' value='{$row['MatchId']}'  readonly='readonly' />";
										echo"</div>";										
										
										$row = mysqli_fetch_assoc($result); 
										} 
									}
									mysqli_close($conn);
									}
									?>
									<div class="6u 12u$">
										<input type="text" name="umpire_id_one" id="umpire_id_one" value="" placeholder="1st Umpire ID" required="required" />
									</div>
								
									<div class="6u 12u$">
										<input type="text" name="umpire_id_two" id="umpire_id_two" value="" placeholder="2nd Umpire ID" required="required"  />
									</div>
								
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Next - Team Scorecard"  /></li>
											<li><input type="reset" value="Reset" class="special"/></li>
										</ul>
									</div>
								</div>
							</div>
							</form>
						</section>
						</div>
						
						<?php 	
						echo"<div class='6u 12u(3)'>";
						echo"<h5>Stored umpires in our Database: </h5>";
						require_once ("settings.php"); //connection info
						$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
						
						if (!$conn)
						{
							echo "<p>Database connection failure</p>"; // not in production script
						} 
						else 
						{			
						$sql_table_one="umpire";		
						
						
						echo "<table border='1'>"; 
						echo "<tr><th>Umpire ID</th><th>First Name</th><th>Last Name</th></tr>"; 
						
						$query = "SELECT UmpireId, UmpireFirstName, UmpireLastName FROM $sql_table_one";
										
						$result = mysqli_query($conn, $query);
						if($result){
							$row = mysqli_fetch_assoc($result); 
					
							while($row) 
							{ 
							echo "<tr><td>{$row['UmpireId']}</td>"; 
							echo "<td>{$row['UmpireFirstName']}</td>"; 
							echo "<td>{$row['UmpireLastName']}</td></tr>";
							$row = mysqli_fetch_assoc($result); 
							} 
							echo "</table>";
						}
						mysqli_close($conn);
						}
						echo"</div>";
						?>	
						</div>
						</div>
		<!-- Footer -->
			<?php 
				require 'footer.php'; 
			?>

	</body>
</html>