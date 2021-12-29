<!DOCTYPE html>
<?php
include("session.php");

   if (isset($_POST['submit'])){
		$dateS = date("d-m-Y", time());
		$ICvalue = "SELECT stdIC FROM student WHERE stdEmail = '$login_session";
	   
      //Receive all input values from the form
	  
      $stdHeight = $_POST['stdHeight'];
	  $stdWeight = $_POST['stdWeight'];
      $stdBmiResult = $_POST['stdBmiResult'];
	  
      //Get current date
		// extract($_POST);

		$query = "INSERT INTO bmi ('stdIC','dateS','stdWeight','stdHeight','stdBmiResult') VALUES('$ICvalue','$dateS','$stdWeight','$stdHeight','$stdBmiResult')";

		if (mysqli_query($conn, $query)){
			echo "<script>alert('successfully added data!') window.location='bmi.php'</script>";
		}
		else{
			echo "<script>alert('successfully not added data!') window.location='bmi.php'</script>";
		}
      
   }
?>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>
	<title>USER</title>
	<link rel = "shortcut icon" type="image" href="images/icon.png">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');
	</style>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/4f3d141d14.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src = "app.js"></script>
<script>
	function myFunction() {
	alert("Your data has been saved ✔");
}
</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" id="website-logo" alt="Website logo"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ms-auto mt-2 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link currpage" href="bmi.php">BMI</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="history.php" >HISTORY</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="workout.php">WORKOUT</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="profile.php"><img src="images/user.png" alt="user icon" id="user-icon"></a>
      </li>
	  
    </ul>
	</div>
	</nav>
	
	<br>
    <div class="container">
        <h1>BMI Calculator</h1>
        <p>Height (in cm)</p>
        <input type="text" name="stdHeight" id="height">

        <p>Weight (in kg)</p>
        <input type="text" name="stdWeight" id="weight">
	
		<div id = "result"></div>
		
		<button id  = "btn">Calculate</button>
		<br>
		<button name="submit" type="submit" value="Submit">Save</button>
    </div>
	
</body>

</html>