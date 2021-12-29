<!DOCTYPE html>
<?php
   include('session.php');
   $sql = "SELECT * FROM bmi WHERE stdIC = (SELECT stdIC FROM student WHERE stdEmail = '$login_session');";
   $records = mysqli_query($conn, $sql);
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>
	<title>HISTORY</title>
	<link rel = "shortcut icon" type="image" href="images/icon.png">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');
	</style>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/4f3d141d14.js" crossorigin="anonymous"></script>
	<link href="history.css" rel = "stylesheet" type="text/css">
</head>
<body>
  <<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <a class="nav-link" href="bmi.php">BMI</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link currpage" href="history.php" >HISTORY</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="workout.php">WORKOUT</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="studentProfile.php"><img src="images/user.png" alt="user icon" id="user-icon"></a>
      </li>
	  
    </ul>
	</div>
	</nav>
	
	
	<div class="abovetable">
		<h1>Student record history</h1>
		<a href="#!" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true" id="editBtn"><i class="fas fa-pen"></i></a>
	</div>
	
	<?php	
	$query = "SELECT * FROM bmi";
	$result = mysqli_query($conn,$query);?>
	
<center><table class="table table-hover">
  <thead>
    <tr>
      <th>No</th>
      <th>Date</th>
      <th>Weight (kg)</th>
	  <th>Height (cm)</th>
      <th>BMI Result</th>
    </tr>
  </thead>
  <tbody>
  <?php 
	$i=0;
	while($row = mysqli_fetch_assoc($records)):
	$i++;
  ?>
    <tr>
      <th scope="row"><?= $i?></th>
      <td><?= $row['dateS']?></td>
      <td><?= $row['stdWeight']?></td>
	  <td><?= $row['stdHeight']?></td>
      <td><?= $row['stdBmiResult']?></td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table></center>
	
</body>

</html>