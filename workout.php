<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>
	<title>WORKOUT</title>
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
        <a class="nav-link currpage" href="workout.php">WORKOUT</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="studentProfile.php"><img src="images/user.png" alt="user icon" id="user-icon"></a>
      </li>
	  
    </ul>
	</div>
	</nav>
	
	<div class="workouts">
	
		<div class="row">
			<h1>Fitness is a lifestyle.</h1>
			<center><img src="images/exercise2.png" id="headerimg"></center>
		</div>
		
		<div class="row">
			<h1>CARDIO</h1>
			<center><h4>Cardiovascular exercise - cardio in short - is exercise that benefits the heart and blood vessels.</h4></center>
		<div class="col-sm-4">
			<video width="420" height="340" autoplay loop muted>
				<source src="videos/jogging.mp4" type="video/mp4" />
			</video>
			<h5>Jogging</h5>
			</div>
			<div class="col-sm-5">
				<video width="420" height="340" autoplay loop muted>
					<source src="videos/swimming.mp4" type="video/mp4" />
				</video>
				<h5>Swimming</h5>
			</div>
			<div class="col-sm-3">
				<video width="420" height="340" autoplay loop muted>
					<source src="videos/jump_rope.mp4" type="video/mp4" />
				</video>
				<h5>Jump rope</h5>
			</div>
		</div>
		
		<div class="row">
			<h1>STRENGTH TRAINING</h1>
			<center><h4>Strength training workout builds and maintain the body muscles.</h4></center>
			<div class="col-sm-4">
				<center><img class="workoutimg" src="images/plank.jpg"></center>
				<h5>Plank</h5>
				<img src="images/row.jpg">
				<h5>Rows</h5>
			</div>
			
			<div class="col-sm-4">
				<img class="workoutimg" id="deadlift" src="images/deadlift.jpg">
				<h5>Deadlift</h5>
				
				<img class="workoutimg" src="images/pushup.jpg">
				<h5>Push ups</h5>
			</div>
			
			
			<div class="col-sm-4">
				<img class="workoutimg" src="images/squat.jpg">
				<h5>Squats</h5>
			</div>
			
		</div>
	
		<div class="row">
			<h1>STRETCHING</h1>
			<center><h4>Stretching before a workout prevents injuries.</h4></center>
			<center><h4>Stretching also improves flexibility, improves posture and reduces muscle tension.</h4></center>
			<center><h4>Hold each position for 20 to 30 seconds each side.</h4></center>
			<div class="col-sm-4">
				<center><img class="workoutimg" src="images/sidelunge.jpg"></center>
				<h5>Side lunge</h5>
				
				<center><img src="images/standing.jpg" id="standing"></center>
				<h5>Standing quad stretch</h5>
			</div>
			
			<div class="col-sm-4">
				<img src="images/calfstretch.png">
				<h5>Calf stretch</h5>
				
				<center><img src="images/butterfly.jpg"></center>
				<h5>Butterfly stretch</h5>
			</div>
			
			
			<div class="col-sm-4">
				<img class="workoutimg" src="images/shoulderstretch.jpg">
				<h5>Shoulder stretch</h5>
				<img class="workoutimg" src="images/cobra.jpg">
				<h5>Cobra</h5>
			</div>
			
			<div class="col-sm-3">
				
			</div>
			
		</div>
		
	</div>
	
	<br>
	
	<section class="mainpage-footer">
		<button onclick="topFunction()" id="toTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
	</section>
	
	
	
	<!-- JavaScript for button -->
	<script>
		//Get the button:
		mybutton = document.getElementById("toTopBtn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0; // For Safari
		  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
	</script>
	
	
	
</body>



</html>