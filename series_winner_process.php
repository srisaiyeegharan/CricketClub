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
		$sql_table="series";
		
		
		//check whether the form fields in the register form are set
		if(isset($_POST["series_id"])) 
			{
			$serieswinner= sanitise($_POST["series_winner"]);
			$seriesid= sanitise($_POST["series_id"]);
			}
			
			$query_one = "UPDATE $sql_table SET SeriesWinner = '$serieswinner' WHERE SeriesId = '$seriesid'";
			
			$result_one = mysqli_query($conn, $query_one);
			
			if ($result_one)
			{
				header("location:series_winner.php");
			}
			else 
			{
				echo"<section id='main' class='wrapper'>";
				echo"<div class='container'>";
					echo"<header class='major'>";
						echo"<h4>Please Enter a valid Series and Team ID</h4>";
					echo"</header>";
				echo"<div class='container 25%'>";
				echo"<a class='button fit' href='series_winner.php'>Go Back</a>";
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
	

