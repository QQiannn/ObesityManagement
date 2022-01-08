<?php
	$id=$_GET['bmiID'];
	include('session.php');
	mysqli_query($conn,"delete from `bmi` where bmiID='$id'");
	header('location:history.php');
?>