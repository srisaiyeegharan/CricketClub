<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - New Series</title>
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
						<h2>Create New Series</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
		<div class="container 100%">
					<div class="row">
					<div class="6u 12u(3)">
						<section>
							<form method="post" action="new_series_process.php">
							<div class="container 100%">
								<div class="row uniform 100%">
									<div class="6u 12u$">
										<input type="text" name="series_id" id="series_id" value="" placeholder="Series ID" readonly="readonly" />
									</div>
									<div class="6u 12u$">
										<input type="text" name="series_title" id="series_title" value="" placeholder="Series Title" required="required" />
									</div>
									<div class="6u 12u$">
												<?php
													require_once ("settings.php"); //connection info
													$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
													
													if (!$conn)
													{
														echo "<p>Database connection failure</p>"; // not in production script
														die();
													}
														$sql_table_one="series_type";
														$query = "SELECT SeriesTypeId, SeriesTypeName FROM $sql_table_one";

														echo "<select name='series_game_type'>";											
														$result = mysqli_query($conn, $query);
														echo "<option value='0'>Select Series Type</option>";
														if($result)
														{
															while($row = mysqli_fetch_assoc($result)) 
															{ 
															echo "<option value='{$row['SeriesTypeId']}'>{$row['SeriesTypeId']}</option>";
															} 
														}	
												?>
											</select>
											</div>
									<div class="6u 12u$">
										<input type="text" name="series_host" id="series_host" value="" placeholder="Host" required="required"/>
									</div>
									<div class="6u 12u$">
										<input type="text" name="series_winner" id="series_winner" value="" placeholder="Winner" />
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Next - Teams"  /></li>
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
						echo"<h5>Type of Games available: </h5>";
						require_once ("settings.php"); //connection info
						$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
						
						if (!$conn)
						{
							echo "<p>Database connection failure</p>"; // not in production script
						} 
						else 
						{			
						$sql_table_one="series_type";		
						
						
						echo "<table border='1'>"; 
						echo "<tr><th>Game ID</th><th>Game Name</th></tr>"; 
						
						$query = "SELECT SeriesTypeId, SeriesTypeName FROM $sql_table_one";
										
						$result = mysqli_query($conn, $query);
						if($result){
							$row = mysqli_fetch_assoc($result); 
					
							while($row) 
							{ 
							echo "<tr><td>{$row['SeriesTypeId']}</td>"; 
							echo "<td>{$row['SeriesTypeName']}</td></tr>"; 
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