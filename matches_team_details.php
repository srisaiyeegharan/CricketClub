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
						<section>
							<form method="post" action="matches_player_details.php">
							<div class="container 100%">
								<div class="row uniform 100%">
									<div class="6u 12u$">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Match ID" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="teamone_id" id="teamone_id" value="" placeholder="Team One ID" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="teamone_score" id="teamone_score" value="" placeholder="Team Score" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="teamone_overs" id="teamone_overs" value="" placeholder="Team Batted Overs" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="teamone_wickets" id="teamone_wickets" value="" placeholder="Team Wickets Lost" />
									</div>
									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="teamone_toss" id="teamone_toss">
												<option value="">- Toss -</option>
												<option value="1">True</option>
												<option value="1">False</option>
											</select>
										</div>
									</div>
									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="teamone_won" id="teamone_won">
												<option value="">- Win -</option>
												<option value="1">True</option>
												<option value="1">False</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row uniform 150%">
								</div>
								<div class="row uniform 100%">
									<div class="6u 12u$">
										<input type="text" name="match_id" id="match_id" value="" placeholder="Match ID" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="teamtwo_id" id="teamtwo_id" value="" placeholder="Team Two ID" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="teamtwo_score" id="teamtwo_score" value="" placeholder="Team Score" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="teamtwo_overs" id="teamtwo_overs" value="" placeholder="Team Batted Overs" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="teamtwo_wickets" id="teamtwo_wickets" value="" placeholder="Team Wickets Lost" />
									</div>
									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="teamone_toss" id="teamone_toss">
												<option value="">- Toss -</option>
												<option value="1">True</option>
												<option value="1">False</option>
											</select>
										</div>
									</div>
									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="teamone_won" id="teamone_won">
												<option value="">- Win -</option>
												<option value="1">True</option>
												<option value="1">False</option>
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

		<!-- Footer -->
			<?php 
				require 'footer.php'; 
			?>

	</body>
</html>