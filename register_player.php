<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - Register Player</title>
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
						<h2>Register Player</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
						<section>
							<form method="post" action="register_player_process.php">
							<div class="container 100%">
								<div class="row uniform 100%">
									<div class="6u 12u$">
										<input type="text" name="player_id" id="player_id" value=""  readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="player_fname" id="player_fname" value="" placeholder="First Name" required="required"/>
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="player_lname" id="player_lname" value="" placeholder="Last Name" required="required" />
									</div>
									<div class="12u$">
									<label for="player_dob">Date of Birth&#42; : <input type="date" name="player_dob" id="player_dob" value="" /></label>
										
									</div>
									<div class="12u$">
										<input type="text" name="player_nationality" id="player_nationality" value="" placeholder="Nationality" />
									</div>
									
									

									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Next"  /></li>
											<li><input type="reset" value="Reset" class="special" /></li>
										</ul>
									</div>
								</div>
							</div>
							</form>
						</section>
						
							
						<?php 	
						
						require_once ("settings.php"); //connection info
						$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
						
						if (!$conn)
						{
							echo "<p>Database connection failure</p>"; // not in production script
						} 
						else 
						{			
						$sql_table_one="player";		
						
						$query = "SELECT PlayerId, PlayerFirstName FROM $sql_table_one  ORDER BY PlayerId DESC LIMIT 1";
										
						$result = mysqli_query($conn, $query);
						if($result){
							$row = mysqli_fetch_assoc($result); 
					
							while($row) 
							{ 
							echo"<div class='6u 12u$'>";
										echo"<input type='text' name='player_id' id='player_ids' value='{$row['PlayerId']}'  readonly='readonly' />";
							echo"</div>";
							$row = mysqli_fetch_assoc($result); 
							} 
							
							
							
						}
						mysqli_close($conn);
						}
						echo"</div>";
						
						
						?>	
						

		<!-- Footer -->
			<?php 
				require 'footer.php'; 
			?>

	</body>
</html>