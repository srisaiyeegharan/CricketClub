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
						<h2>Match Details</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
						<section>
							<form method="post" action="#">
							<div class="container 100%">
								<div class="row uniform 100%">
									<div class="6u 12u$">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Match ID" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="series_id" id="series_id" value="" placeholder="Series ID" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="series_name" id="series_name" value="" placeholder="Series Name" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="umpire_one_name" id="umpire_one_name" value="" placeholder="First Umpire Name" />
									</div>
									<div class="6u 12u$">
										<input type="text" name="umpire_two_name" id="umpire_two_name" value="" placeholder="Second Umpire Name" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="team_one" id="team_one">
												<option value="">- Team One -</option>
												<option value="1" >Tarneit Team </option>
											</select>
										</div>
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="team_two" id="team_two">
												<option value="">- Team Two -</option>
												<option value="1">Batsman</option>
												<option value="1">Bowler</option>
												<option value="1">Wicket Keeper</option>
												<option value="1">All Rounder</option>
											</select>
										</div>
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="toss" id="toss">
												<option value="">- Toss Winner -</option>
												<option value="1">Batsman</option>
												<option value="1">Bowler</option>
												<option value="1">Wicket Keeper</option>
												<option value="1">All Rounder</option>
											</select>
										</div>
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="venue" id="venue">
												<option value="">- Select Venue -</option>
												<option value="1">Batsman</option>
												<option value="1">Bowler</option>
												<option value="1">Wicket Keeper</option>
												<option value="1">All Rounder</option>
											</select>
										</div>
									</div>
								
									
									<div class="12u$">
										<div class="select-wrapper">
											<select name="match_outcome" id="match_outcome">
												<option value="">- Match Outcome -</option>
												<option value="1" >Win</option>
												<option value="1" >Loss</option>
												<option value="1" >Draw</option>
											</select>
										</div>
									</div>		
									<div class="">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Tarneit Score" />
									</div>
									<div class="">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Tarneit Overs" />
									</div>
									<div class="">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Tarneit Wickets Lost" size="25"/>
									</div>
								</div>
									
								<div class="row uniform 100%">
									
									<div class="">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Oppnonet Score"  />
									</div>

									<div class="">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Opponent Overs"  />
									</div>
									<div class="">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Opponent Wickets Lost" size="25"/>
									</div>
								</div>
								
									

									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Next - Scorecard"  /></li>
											<li><input type="reset" value="Reset" class="special"/></li>
										</ul>
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