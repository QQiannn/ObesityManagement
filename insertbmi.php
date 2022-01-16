<?php
	
	include("session.php");
	extract($_POST);
   //Set default time zone to use in Msia
	date_default_timezone_set('Asia/Kuala_Lumpur');
	$dateS = date("Y-m-d");
	
	$query = "INSERT INTO `bmi` (`bmiID`, `stdIC`, `dateS`, `stdWeight`, `stdHeight`, `stdBmiResult`) VALUES (NULL, '$user_check', '$dateS', " . $_SESSION['weightval'] . " , " . $_SESSION['heightval'] . " , " . $_SESSION['bmiresult'] . ");";
	
	$result = mysqli_query($conn, $query) or die("Could not execute query in insertbmi.php");
	if ($result){
		echo "<script type = 'text/javascript'>alert('Data recorded successfully!');window.location='bmi.php'</script>";
	}

?>