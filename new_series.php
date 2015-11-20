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
						<section>
							<form method="post" action="series_successful.php">
							<div class="container 100%">
								<div class="row uniform 100%">
									<div class="6u 12u$">
										<input type="text" name="series_id" id="series_id" value="" placeholder="Series ID" readonly="readonly" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="series_title" id="series_title" value="" placeholder="Series Title" />
									</div>
									<div class="6u 12u$">
										<div class="select-wrapper">
											<select name="game_type" id="game_type">
												<option value="">- Select Game Type -</option>
												<option value="1">ODI</option>
												<option value="1">Test</option>
												<option value="1">T20</option>
											</select>
										</div>
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="series_host" id="series_host" value="" placeholder="Host" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="series_winner" id="series_winner" value="" placeholder="Winner" />
									</div>
									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Create Series"  /></li>
											<li><input type="reset" value="Reset" class="special"/></li>
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