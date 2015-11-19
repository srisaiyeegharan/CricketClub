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

	<!-- Header -->
			<header id="header">
				<h1><a href="index.html">TarneitCricketClub</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="generic.html">Generic</a></li>
						<li><a href="elements.html">Elements</a></li>
						<li><a href="#" class="button special">Sign In</a></li>
					</ul>
				</nav>
			</header>

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
							<form method="post" action="#">
							<div class="container 100%">
								<div class="row uniform 100%">
									<div class="6u 12u$">
										<input type="text" name="player_id" id="player_id" value="" placeholder="Player ID" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="player_fname" id="player_fname" value="" placeholder="First Name" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="player_lname" id="player_lname" value="" placeholder="Last Name" />
									</div>
									<div class="12u$">

										<input type="date" name="player_dob" id="player_dob" value=""  />
									</div>
									<div class="12u$">
										<input type="text" name="player_nationality" id="player_nationality" value="" placeholder="Nationality" />
									</div>
									
									<div class="12u$">
										<div class="select-wrapper">
											<select name="role" id="player_role">
												<option value="">- Select Role -</option>
												<option value="1">Batsman</option>
												<option value="1">Bowler</option>
												<option value="1">Wicket Keeper</option>
												<option value="1">All Rounder</option>
											</select>
										</div>
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

		<!-- Footer -->
			<?php 
				require 'footer.php'; 
			?>

	</body>
</html>