<!DOCTYPE html>
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
        <a class="nav-link currpage" href="studentProfile.php"><img src="images/user.png" alt="user icon" id="user-icon"></a>
      </li>
	  
    </ul>
	</div>
	</nav>
	
	<div class="userprofile">
	
		<h1>STUDENT PROFILE</h1>
			
		<p>Name</p>
		<input type="text" class="form-control" placeholder="Student name" id="stdName">
		<p>Gender</p>
		<input type="text" class="form-control" placeholder="Student gender" id="stdGender">
		<p>Class</p>
		<input type="text" class="form-control" placeholder="Student class" id="stdClass">
		<p>Password</p>
		<input type="password" class="form-control" placeholder="Password" id="stdPassword">
		<p>IC/Passport</p>
		<input type="text" class="form-control" placeholder="96xxxx-01-xxxx"id="stdIC">
		<p>E-mail</p>
		<input type="text" class="form-control" placeholder="obesitymanagement@gmail.com" id="stdEmail">
		<p>Phone number</p>
		<input type="text" class="form-control" placeholder="012-12312319" id="stdPhoneNo">
		
		<div class="editProfile">
		<a href="#!" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true" id="editProfileBtn"><p>EDIT</p></a>
		</div>
	</div>
	
</body>

</html>