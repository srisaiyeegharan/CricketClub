<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>TarneitCricketClub</title>
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
<body>
<?php include 'nav.php'; ?>
<?php
	
	function sanitise($data)   //eliminating unwanted characters using sanitise function
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;		
	}
	
	require_once ("settings.php"); //connection info
	$conn = @mysqli_connect($host,
	$user,
	$pwd,
	$sql_db
	);
	
	if (!$conn)
	{
		echo "<p>Database connection failure</p>"; // not in production script
	} 
	else
	{
		$sql_table="match_team_details";
		
		
		//check whether the form fields in the register form are set
		if(isset($_POST["match_id"])) 
			{
			$matchid= sanitise($_POST["match_id"]);
			$teamoneid= sanitise($_POST["teamone_id"]);
			$teamonescore= sanitise($_POST["teamone_score"]);
			$teamoneovers= sanitise($_POST["teamone_overs"]);
			$teamonewickets= sanitise($_POST["teamone_wickets"]);
			$teamonetoss= sanitise($_POST["teamone_toss"]);
			$teamonewon= sanitise($_POST["teamone_won"]);
			$teamtwoid= sanitise($_POST["teamtwo_id"]);
			$teamtwoscore= sanitise($_POST["teamtwo_score"]);
			$teamtwoovers= sanitise($_POST["teamtwo_overs"]);
			$teamtwowickets= sanitise($_POST["teamtwo_wickets"]);
			$teamtwotoss= sanitise($_POST["teamtwo_toss"]);
			$teamtwowon= sanitise($_POST["teamtwo_won"]);
			}
			
			$query_one = "INSERT INTO $sql_table (MatchId, TeamId, TeamToss, TeamScore, TeamOvers, TeamWickets, TeamWon) VALUES ('$matchid', '$teamoneid','$teamonetoss', '$teamonescore', '$teamoneovers', '$teamonewickets', '$teamonewon')";
			$query_two = "INSERT INTO $sql_table (MatchId, TeamId, TeamToss, TeamScore, TeamOvers, TeamWickets, TeamWon) VALUES ('$matchid', '$teamtwoid','$teamtwotoss', '$teamtwoscore', '$teamtwoovers', '$teamtwowickets', '$teamtwowon')";
			$result_one = mysqli_query($conn, $query_one);
			$result_two = mysqli_query($conn, $query_two);
			if ($result_one && $result_two)
			{
				header("location:matchess_player_details.php");
			}
			else 
			{
				echo"<section id='main' class='wrapper'>";
				echo"<div class='container'>";
					echo"<header class='major'>";
						echo"<h4>Oops! seems like you did not enter something right!</h4>";
					echo"</header>";
				echo"<div class='container 25%'>";
				echo"<a class='button fit' href='matches_team_details.php'>Go Back</a>";
				echo"</div>";
				//header("location:index.php");
			}
			
			
			mysqli_close($conn);
		
	}
	
		
	
?>
</section>
<footer>
</br>
</br>
<?php include 'footer.php'; ?>
</footer>
</body>
</html>
	

