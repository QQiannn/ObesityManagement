<!DOCTYPE html>
<?php
include('session.php');
?>

<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width", initial-scale=1.0>
<title>Home page</title>
<link rel = "shortcut icon" type="image" href="images/icon.png">
<style>
@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<head>
<style>

body{
	background-color:#9095FA;
}

h1{
	font-weight: 700;
	font-family: Playfair Display;
}

.btn{
	margin: 10px;
    border-radius: 25px;
    background-color:#4F54CA;
    border: none;
    padding: 20px 100px;
    text-align: center;
    color: white;
	font-size: 1.2em;
	font-family: Merriweather;
}

.btn-danger{
	margin: 10px;
    border-radius: 25px;
    border: none;
    padding: 20px 100px;
    text-align: center;
    color: white;
	font-size: 1.2em;
	font-family: Merriweather;
	text-decoration: none;
}

.btn:hover{
	background-color:#12166c;
}

.d-grid{
	width: 40%;
}

.topHeader{
	text-align: center;
}

#website-logo{
	width: 280px;
	height: 190px;
}

</style>
</head>
<body>
<br>
<div class="topHeader">
	<img src="images/logo.png" id="website-logo" alt="Website logo">
	<h1>WELCOME </h1>
</div>

<center><div class="d-grid gap-2">
  <a  href="bmi.php" class="btn btn-primary">BMI CALCULATOR</a>
  <a  href="history.php" class="btn btn-primary">HISTORY</a>
  <a  href="workout.php" class="btn btn-primary">WORKOUT</a>
  <a  href="profile.php" class="btn btn-primary">STUDENT PROFILE</a>  
  <a  href="logout.php" class="btn-danger" >LOG OUT</a>
</div></center>
<br>
</body>

</html>