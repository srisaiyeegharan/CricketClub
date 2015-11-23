<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - Game Type</title>
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
						<h2>Series has been succesfully created</h2>	
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
						$sql_table_one="series";	
						$sql_table_two="team_series";
						$sql_table_three="team";
				
						echo "<table border='1'>"; 
						echo "<tr><th>Series ID</th><th>Series Type</th><th>Series Title</th><th>Host</th><th>Winner</th><th>Team One</th><th>Team Two</th></tr>"; 
						
						$query = "SELECT SeriesId, SeriesTypeId, SeriesName, SeriesHost, SeriesWinner, TeamName FROM $sql_table_one NATURAL JOIN $sql_table_two NATURAL JOIN $sql_table_three";
										
						$result = mysqli_query($conn, $query);
						if($result){
							$row = mysqli_fetch_assoc($result); 
					
							if($row) 
							{ 
							echo "<tr><td>{$row['SeriesId']}</td>"; 
							echo "<td>{$row['SeriesTypeId']}</td>";
							echo "<td>{$row['SeriesName']}</td>";
							echo "<td>{$row['SeriesHost']}</td>";
							echo "<td>{$row['SeriesWinner']}</td>";
							echo "<td>{$row['TeamName']}</td>";
							$row = mysqli_fetch_assoc($result); 
							echo "<td>{$row['TeamName']}</td></tr>"; 
							} 
							echo "</table>";
						}
						mysqli_close($conn);
						}
						
						?>	
					<div>
					<div class="container 25%">
						<a class="button fit" href="matches.php">Add a scorecard for current series</a>
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