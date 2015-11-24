<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub - Team One Scorecard</title>
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
						<h2>Match Details - Player Performance</h2>
					</header>
				</div>
			</section>
			
		<!-- Form -->
						<section>
							<form method="post" action="matches_player_details_process.php">
							<div class="container 100%">
								<div class="row uniform 50%">
								
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
													echo"<input type='hidden' name='match_id' id='match_id' value='{$row['MatchId']}'  readonly='readonly' />";
										echo"</div>";										
										
										$row = mysqli_fetch_assoc($result); 
										} 
									}
									mysqli_close($conn);
									}
									?>
									
									
									<div class="6u 12u$">
												<?php
													require_once ("settings.php"); //connection info
													$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
													
													if (!$conn)
													{
														echo "<p>Database connection failure</p>"; // not in production script
														die();
													}
														$sql_table_one="matches";		
									
															$query_one = "SELECT MatchId FROM $sql_table_one  ORDER BY MatchId DESC LIMIT 1";
																			
															$result = mysqli_query($conn, $query_one);
															if($result){
																$row = mysqli_fetch_assoc($result); 
														
																while($row) 
																{ 
															
																	$query = "SELECT TeamId, TeamName FROM matches m NATURAL JOIN series s NATURAL JOIN team_series ts NATURAL JOIN team t WHERE m.MatchId = '{$row['MatchId']}';";

																	echo "<select name='team_id'>";											
																	$result = mysqli_query($conn, $query);
																	echo "<option value='0'>Select Team</option>";
																	if($result)
																	{
																		while($row = mysqli_fetch_assoc($result)) 
																			{ 
																			echo "<option value='{$row['TeamId']}'>{$row['TeamName']}</option>";
																			} 
																	}	
																
																			
																
																$row = mysqli_fetch_assoc($result); 
																} 
															}
														
													
												?>
									</select>
									</div>
								
									
									
									
									<!-- Player 1 --> 
									
									</hr>
									</br>
									<div class="">
									<select name="teamone_toss" id="pos1" required = "required">
												<option value="">- Batting Position -</option>
												<option value="1">Batting Position: 1</option>
												<option value="2">Batting Position: 2</option>
												<option value="3">Batting Position: 3</option>
												<option value="4">Batting Position: 4</option>
												<option value="5">Batting Position: 5</option>
												<option value="6">Batting Position: 6</option>
												<option value="7">Batting Position: 7</option>
												<option value="8">Batting Position: 8</option>
												<option value="9">Batting Position: 9</option>
												<option value="10">Batting Position: 10</option>
												<option value="11">Batting Position: 11</option>
												<option value="12">Batting Position: 12</option>
											
												
											</select>
											</div>
									
									<div class="">
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

														echo "<select name='player_one_id'>";											
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
									
									<div class="">
										<input type="text" name="player_one_score" id="player_one_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_one_balls" id="player_one_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_one_overs" id="player_one_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_one_bowled" id="player_one_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									
									
									<!-- Team Two 
									
									<div class="6u 12u$">
										<input type="text" name="2team_id" id="team_id" value="" placeholder="Team ID" readonly="readonly" />
									</div>
									-->
									
									<!-- Player 1
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="2pos1" id="pos1" value="" placeholder="Batting Position: 1" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="2player_one_id" id="player_one_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="2player_one_score" id="player_one_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="2player_one_balls" id="player_one_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="2player_one_overs" id="player_one_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="2player_one_bowled" id="player_one_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									 Player 2 
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos2" id="pos2" value="" placeholder="Batting Position: 2" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_2_id" id="player_2_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_2_score" id="player_2_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_2_balls" id="player_2_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_2_overs" id="player_2_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_2_bowled" id="player_2_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									Player 3
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos3" id="pos3" value="" placeholder="Batting Position: 3" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_3_id" id="player_3_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_3_score" id="player_3_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_3_balls" id="player_3_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_3_overs" id="player_3_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_3_bowled" id="player_3_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									Player 4  
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos4" id="pos4" value="" placeholder="Batting Position: 4" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_4_id" id="player_4_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_4_score" id="player_4_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_4_balls" id="player_4_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_4_overs" id="player_4_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_4_bowled" id="player_4_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									 Player 5  
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos5" id="pos5" value="" placeholder="Batting Position: 5" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_5_id" id="player_5_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_5_score" id="player_5_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_5_balls" id="player_5_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_5_overs" id="player_5_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_5_bowled" id="player_5_bowled" value="" placeholder="Wickets Taken"/>
									</div>

									
									Player 6 
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos6" id="pos6" value="" placeholder="Batting Position: 6" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_6_id" id="player_6_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_6_score" id="player_6_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_6_balls" id="player_6_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_6_overs" id="player_6_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_6_bowled" id="player_6_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									Player 7
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos7" id="pos7" value="" placeholder="Batting Position: 7" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_7_id" id="player_7_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_7_score" id="player_7_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_7_balls" id="player_7_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_7_overs" id="player_7_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_7_bowled" id="player_7_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									Player 8
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos8" id="pos8" value="" placeholder="Batting Position: 8" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_8_id" id="player_8_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_8_score" id="player_8_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_8_balls" id="player_8_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_8_overs" id="player_8_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_8_bowled" id="player_8_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									Player 9 
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos9" id="pos9" value="" placeholder="Batting Position: 9" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_9_id" id="player_9_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_9_score" id="player_9_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_9_balls" id="player_9_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_9_overs" id="player_9_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_9_bowled" id="player_9_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									
									Player 10
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos10" id="pos10" value="" placeholder="Batting Position: 10" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_10_id" id="player_10_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_10_score" id="player_10_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_10_balls" id="player_10_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_10_overs" id="player_10_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_10_bowled" id="player_10_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									
									Player 11 
									
									</hr>
									</br>
									<div class="">
										<input type="text" name="pos11" id="pos11" value="" placeholder="Batting Position: 11" readonly="readonly" />
									</div>
									<div class="">
										<input type="text" name="player_11_id" id="player_11_id" value="" placeholder="player ID"/>
									</div>
									<div class="">
										<input type="text" name="player_11_score" id="player_11_score" value="" placeholder="Runs"/>
									</div>
									<div class="">
										<input type="text" name="player_11_balls" id="player_11_balls" value="" placeholder="Balls Faced"/>
									</div>
									<div class="">
										<input type="text" name="player_11_overs" id="player_11_overs" value="" placeholder="Overs Bowled"/>
									</div>
									<div class="">
										<input type="text" name="player_11_bowled" id="player_11_bowled" value="" placeholder="Wickets Taken"/>
									</div>
									
									
									<!-- submit -->
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Complete"  /></li>
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