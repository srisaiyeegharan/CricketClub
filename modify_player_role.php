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
						<h2>Add Player Role</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
		<div class="container 100%">
					<div class="row">
					<div class="6u 12u(3)">
						<section>
							<form method="post" action="modify_player_role_process.php">
							<div class="container 100%">
								<div class="row uniform 100%">
									<div class="6u 12u$">
												<?php
													require_once ("settings.php"); //connection info
													$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
													
													if (!$conn)
													{
														echo "<p>Database connection failure</p>"; // not in production script
														die();
													}
														$sql_table_one="player";
														$query = "SELECT PlayerId, PlayerFirstName, PlayerLastName  FROM $sql_table_one";

														echo "<select name='player_id'>";											
														$result = mysqli_query($conn, $query);
														echo "<option value='0'>Select Player</option>";
														if($result)
														{
															while($row = mysqli_fetch_assoc($result)) 
															{ 
															echo "<option value='{$row['PlayerId']}'>{$row['PlayerFirstName']}</option>";
															} 
														}	
												?>
											</select>
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
														$sql_table_one="role";
														$query = "SELECT RoleId, RoleDescription  FROM $sql_table_one";

														echo "<select name='player_role_id'>";											
														$result = mysqli_query($conn, $query);
														echo "<option value='0'>Select Player Role</option>";
														if($result)
														{
															while($row = mysqli_fetch_assoc($result)) 
															{ 
															echo "<option value='{$row['RoleId']}'>{$row['RoleDescription']}</option>";
															} 
														}	
												?>
											</select>
											</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Submit"  /></li>
											<li><input type="reset" value="Reset" class="special"/></li>
										</ul>
									</div>
								</div>
							</div>
							</form>
						</section>
						</div>
						
					
						
			</div>
		</div>

		<!-- Footer -->
		
		<?php 
			require 'footer.php'; 
		?>

	</body>
</html>