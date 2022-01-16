<!DOCTYPE html>
<?php 
	include('session.php');
   $sql = "SELECT * FROM student WHERE stdIC = '$login_session';";
   $records = mysqli_query($conn, $sql) or die("Failed to execute query in editProfile.php");
   $row = mysqli_fetch_assoc($records);
   $stdName = $row['stdName'];
   $stdGender = $row['stdGender'];
   $stdClass = $row['stdClass'];
   $stdPassword = $row['stdPassword'];
   $stdIC = $row['stdIC'];
   $stdEmail = $row['stdEmail'];
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
	<link href="history.css" rel = "stylesheet" type="text/css">
	<style type="text/css" media="screen">
	
	#saveProfileBtn{
		margin-top: 25px;
		color: #fff;
		background-color: #4F54CA;
		border-color: #DDDFFD;
		padding: 0.8rem 0.8rem;
		font-size: 1.3rem;
		border-radius: 0.5rem;
		font-weight: 700;
	}
	
	#resetBtn{
		margin-top: 25px;
		color: #fff;
		padding: 0.8rem 0.8rem;
		font-size: 1.3rem;
		border-radius: 0.5rem;
		font-weight: 700;
	}
	
	.right{
		text-align:right;
	}
	
	.texts{
		font-size: 1.2em;
	}
	
	</style>
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
        <a class="nav-link" href="bmi.php">BMI</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="history.php" >HISTORY</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="workout.php">WORKOUT</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link currpage" href="profile.php"><img src="images/user.png" alt="user icon" id="user-icon"></a>
      </li>
	  
    </ul>
	</div>
	</nav>
	
	<div class="userprofile">
	
		<h1>STUDENT PROFILE</h1>
			
		<form method="post" action="update.php">
		<p>Name</p>
		<input type="text" class="form-control" placeholder="Student name" name="stdName" value="<?php echo $stdName; ?>" required>
		<p>Gender</p>
		<span class="texts">
			<input type="radio" name="stdGender" <?=$row['stdGender']=="Male" ? "checked" : ""?> value="Male">Male
			<br>
			<input type="radio" name="stdGender" <?=$row['stdGender']=="Female" ? "checked" : ""?> value="Female">Female
		</span>
	  <p>Class</p>
	  <span class="texts">
		<select name="stdClass">
		<option value="C12" <?=$row['stdClass']=="C12" ? "selected" : ""?>>C12</option>
		<option value="C13" <?=$row['stdClass']=="C13" ? "selected" : ""?>>C13</option>
	  </select><br>
		</span>
		<p>Password</p>
		<input type="text" class="form-control" placeholder="Password" name="stdPassword" value="<?php echo $stdPassword; ?>" required>
		<p>IC/Passport</p>
		<input type="text" class="form-control" name="stdIC" value="<?php echo $stdIC; ?>" disabled>
		<p>E-mail</p>
		<input type="email" class="form-control" placeholder="obesitymanagement@gmail.com" name="stdEmail" value="<?php echo $stdEmail; ?>" id="email" required>
		
		<div class="saveProfile right">
		<input type="submit" value="SAVE" class="btn btn-primary btn-lg active" id="saveProfileBtn" >
		<input type = "reset" value="RESET" class="btn btn-danger active" id = "resetBtn" >
		
		</div>
		</form>
	</div>
	
	<!-- JavaScript for form -->
	<script>
		const email = document.getElementById('email');
		function isEmail(email) {
			return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
		}
	</script>
</body>

</html>