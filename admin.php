<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - Admin</title>
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
						<h2>Club Management</h2>
						
					</header>

					<div class="container 50%">
					<div class="row">
								<div class="6u 12u(3)">
									<h4>Add to TCC</h4>
									<a class="button fit" href="team.php">Add Team</a>
									<a class="button fit" href="venue.php">Add Venue</a>
									<a class="button fit" href="role.php">Add Role</a>
									<a class="button fit" href="game_type.php">Add Game Type</a>
								</div>
								<div class="6u 12u(3)">
									<h4>Register</h4>
									<a class="button fit" href="register_player.php">Register Player</a>
									<a class="button fit" href="register_umpire.php">Register Umpire</a>
									<a class="button fit" href="register_coach.php">Register Coach</a>
								</div>
								</div>
								<div class="row">
								<div class="6u 12u(3)">
									<h4>Create</h4>
									<a class="button fit" href="new_series.php">Create Series</a>
									<a class="button fit" href="series.php">Create Scorecard</a>
								</div>
								<div class="6u 12u(3)">
									<h4>Modify</h4>
									<a class="button fit" href="new_series.php">Enter Series Winner</a>
								</div>
								</div>
							</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<?php 
				require 'footer.php'; 
			?>

	</body>
</html>