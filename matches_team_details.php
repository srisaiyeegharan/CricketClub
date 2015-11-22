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
						<h2>Match Details - Team Scorecard</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
		<div class="container 100%">
					<div class="row">
					<div class="6u 12u(3)">
						<section>
							<form method="post" action="matches_team_details_process.php">
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
										<input type="text" name="teamone_id" id="teamone_id" value="" placeholder="Team One ID"  />
									</div>
									<div class="6u 12u$">
										<input type="text" name="teamone_score" id="teamone_score" value="" placeholder="Team Score" />
									</div>
									<div class="6u 12u$">
										<input type="text" name="teamone_overs" id="teamone_overs" value="" placeholder="Team Batted Overs" />
									</div>
									<div class="6u 12u$">
										<input type="text" name="teamone_wickets" id="teamone_wickets" value="" placeholder="Team Wickets Lost" />
									</div>
									<div class="6u 12u$">
										<div class="select-wrapper">
											<select name="teamone_toss" id="teamone_toss">
												<option value="">- Toss -</option>
												<option value="Won">Toss - Win</option>
												<option value="Lost">Toss - Lost</option>
											</select>
										</div>
									</div>
									<div class="6u 12u$">
										<div class="select-wrapper">
											<select name="teamone_won" id="teamone_won">
												<option value="">- Outcome -</option>
												<option value="Won">Outcome - Win</option>
												<option value="Lost">Outcome - Lost</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row uniform 150%">
								</div>
								<div class="row uniform 100%">
									<div class="6u 12u$">
										
									</div>
									<div class="6u 12u$">
										<input type="text" name="teamtwo_id" id="teamtwo_id" value="" placeholder="Team Two ID" />
									</div>
									<div class="6u 12u$">
										<input type="text" name="teamtwo_score" id="teamtwo_score" value="" placeholder="Team Score" />
									</div>
									<div class="6u 12u$">
										<input type="text" name="teamtwo_overs" id="teamtwo_overs" value="" placeholder="Team Batted Overs" />
									</div>
									<div class="6u 12u$)">
										<input type="text" name="teamtwo_wickets" id="teamtwo_wickets" value="" placeholder="Team Wickets Lost" />
									</div>
									<div class="6u 12u$">
										<div class="select-wrapper">
											<select name="teamtwo_toss" id="teamtwo_toss">
												<option value="">- Toss -</option>
												<option value="Won">Toss - Win</option>
												<option value="Lost">Toss - Lost</option>
											</select>
										</div>
									</div>
									<div class="6u 12u$">
										<div class="select-wrapper">
											<select name="teamtwo_won" id="teamtwo_won">
												<option value="">- Outcome -</option>
												<option value="Won">Outcome - Win</option>
												<option value="Lost">Outcome - Lost</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row uniform 100%">
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Next - Players Scorecard"  /></li>
											<li><input type="reset" value="Reset" class="special"/></li>
										</ul>
									</div>
									
								</div>
							</form>
						</section>
						</div>
						
						<?php 	
						echo"<div class='6u 12u(3)'>";
						echo"<h5>Available teams to select from </h5>";
						require_once ("settings.php"); //connection info
						$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
						
						if (!$conn)
						{
							echo "<p>Database connection failure</p>"; // not in production script
						} 
						else 
						{			
						$sql_table_one="team";		
						
						
						echo "<table border='1'>"; 
						echo "<tr><th>Team ID</th><th>Team Name</th></tr>"; 
						
						$query = "SELECT TeamId, TeamName FROM $sql_table_one";
										
						$result = mysqli_query($conn, $query);
						if($result){
							$row = mysqli_fetch_assoc($result); 
					
							while($row) 
							{ 
							echo "<tr><td>{$row['TeamId']}</td>"; 
							echo "<td>{$row['TeamName']}</td></tr>";
							$row = mysqli_fetch_assoc($result); 
							} 
							echo "</table>";
						}
						mysqli_close($conn);
						}
						echo"</div>"
						?>	

		<!-- Footer -->
			<?php 
				require 'footer.php'; 
			?>

	</body>
</html>