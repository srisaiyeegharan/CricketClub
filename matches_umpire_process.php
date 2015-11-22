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
		$sql_table="match_umpire";
		
		
		//check whether the form fields in the register form are set
		if(isset($_POST["umpire_id_one"])) 
			{
			$umpireone = sanitise($_POST["umpire_id_one"]);
			$umpiretwo= sanitise($_POST["umpire_id_two"]);
			$umpirethree= sanitise($_POST["umpire_id_three"]);
			$matchid= sanitise($_POST["match_id"]);
			}
			
			$query_one = "INSERT INTO $sql_table (MatchId, UmpireId) VALUES ('$matchid', '$umpireone')";
			$query_two = "INSERT INTO $sql_table (MatchId, UmpireId) VALUES ('$matchid', '$umpiretwo')";
			$query_three = "INSERT INTO $sql_table (MatchId, UmpireId) VALUES ('$matchid', '$umpirethree')";
			$result_one = mysqli_query($conn, $query_one);
		
			if ($result_one)
			{
				$result_two = mysqli_query($conn, $query_two);
				if ($result_two)
				{
					$result_three = mysqli_query($conn, $query_three);
					if (result_three)
					{
						header("location:matches_team_details.php");
					}
					else
					{
						echo"<section id='main' class='wrapper'>";
						echo"<div class='container'>";
						echo"<header class='major'>";
						echo"<h4>Please Enter a valid Umpire ID</h4>";
						echo"</header>";
						echo"<div class='container 25%'>";
						echo"<a class='button fit' href='matches_umpires.php'>Go Back</a>";
						echo"</div>";
					}
					
				}
				else
				{
					echo"<section id='main' class='wrapper'>";
					echo"<div class='container'>";
					echo"<header class='major'>";
					echo"<h4>Please Enter a valid Umpire ID</h4>";
					echo"</header>";
					echo"<div class='container 25%'>";
					echo"<a class='button fit' href='matches_umpires.php'>Go Back</a>";
					echo"</div>";
					
				}
				
			}	
			else 
			{
				echo"<section id='main' class='wrapper'>";
				echo"<div class='container'>";
				echo"<header class='major'>";
				echo"<h4>Please Enter a valid Umpire ID</h4>";
				echo"</header>";
				echo"<div class='container 25%'>";
				echo"<a class='button fit' href='matches_umpires.php'>Go Back</a>";
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
	

