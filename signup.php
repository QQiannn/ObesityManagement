<!DOCTYPE html>
<html>

<?php
    include("dbase.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        //Receive all input values from the form
	    $stdName = mysqli_real_escape_string($conn,$_POST['stdName']);
        $stdEmail = mysqli_real_escape_string($conn,$_POST['stdEmail']);
	    $stdIC = mysqli_real_escape_string($conn,$_POST['stdIC']);
        $stdClass = mysqli_real_escape_string($conn,$_POST['stdClass']);
        $stdGender = mysqli_real_escape_string($conn,$_POST['stdGender']);
        $stdPassword = mysqli_real_escape_string($conn,$_POST['stdPassword']);
      
        //Check if field is empty
        if (empty($_POST['stdName']) || empty($_POST['stdEmail']) || empty($_POST['stdIC']) || empty($_POST['stdClass']) || empty($_POST['stdGender']) || empty($_POST['stdPassword'])) {
           $error = "Please fill on all field!";
           echo "<script>alert('$error');window.location.href='signup.php'</script>";
        }
 
        //Check if email is already existed
        $user_check_query = "SELECT stdIC FROM student WHERE stdIC='$stdIC'";
        $result = mysqli_query($conn, $user_check_query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
      
        // count == 0  means email does not exist
        if($count == 0) {
            $query = "INSERT INTO `student` (`stdName`, `stdIC`, `stdClass`, `stdEmail`, `stdPassword`, `stdGender`) VALUES ('$stdName', '$stdIC', '$stdClass', '$stdEmail', '$stdPassword', '$stdGender');";
  	        mysqli_query($conn, $query);
  	        $_SESSION['login_user'] = $stdEmail;
  	        echo "<script>alert('Registered successfully!');window.location.href='login.php'</script>";
        }else {
            echo "<script>alert('Student already exists in the system!');window.location.href='signup.php'</script>";
        }
    }
?>

  <head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>
	<title>SIGN UP</title>
	<link rel = "shortcut icon" type="image" href="images/icon.png">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');
	</style>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/4f3d141d14.js" crossorigin="anonymous"></script>
	<link href="history.css" rel = "stylesheet" type="text/css">
  <style>
 
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Poppins", Merriweather;
	}
  body{
		margin: 0;
		padding: 0;
		background: #9095FA;
		height: 100%;
	}
	
	.center{
		position: absolute;
		top: 70%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 600px;
		background: white;
		border-radius: 10px;
		box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
		padding: 10px 0 20px 0;
	}
	
	.center h1{
		text-align: center;
		padding: 20px 0;
		border-bottom: 1px solid silver;
	}
	
	.center form{
		padding: 0 40px;
		box-sizing: border-box;
	}
	
	form .txt_field{
		position: relative;
		border-bottom: 2px solid #adadad;
		margin: 10px 0;
	}
	
	label{
		padding-top: 10px;
	}
	
	.txt_field input{
		width: 100%;
		padding: 0 5px;
		height: 20px;
		font-size: 16px;
		border: none;
		background: none;
		outline: none;
	}
	
	.txt_field label{
		position: absolute;
		top: 50%;
		left: 5px;
		color: #adadad;
		transform: translateY(-50%);
		font-size: 16px;
		pointer-events: none;
		transition: .5s;
	}
	
	.txt_field span::before{
		content: '';
		position: absolute;
		top: 40px;
		left: 0;
		width: 0%;
		height: 2px;
		background: #2691d9;
		transition: .5s;
	}	
	
	.txt_field input:focus ~ label,
	.txt_field input:valid ~ label{
		top: -5px;
		color: #2691d9;
	}
	
	.txt_field input:focus ~ span::before,
	.txt_field input:valid ~ span::before{
		width: 100%;
	}
	
	input[type="submit"]{
		width: 100%;
		height: 50px;
		border: 1px solid;
		background: #2691d9;
		border-radius: 25px;
		font-size: 1.3em;
		color: #fff;
		font-weight: 700;
		cursor: pointer;
		outline: none;
	}
	
	input[type="submit"]:hover{
		border-color: #2691d9;
		transition: .5s;
	}
	
	.signup_link{
		margin: 30px 0;
		text-align: center;
		font-size: 1.0em;
		color: #666666;
	}
	
	.signup_link a{
		color: #2691d9;
		text-decoration: none;
	}
	
	.button{
		width: 60%;
	}
	
	.signup_link a:hover{
		text-decoration: underline;
	}

	select {
		-webkit-writing-mode: horizontal-tb !important;
		font-size: 1.3em;
		color: -internal-light-dark(black, white);
		box-sizing: border-box;
		align-items: center;
		background-color: #fff
		cursor: default;
		margin: 0em;
		border: 1.5px solid #C7BEBE;
		border-radius: 0.3em;
	}

	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	/* Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
   </head>
<body>
  <div class="center">
    <Center><h2>Sign Up</h2></Center>
    <form action="signup.php" method="POST">
	<label>Name</label>
      <div class="txt_field">
        <input type="text" name="stdName" placeholder="Enter your name" required>
      </div>
	  <label for="email">Email</label>
      <div class="txt_field">
        <input type="email" name="stdEmail" placeholder="Enter your email" required id="email">
      </div>
	  <label>IC/Passport</label>
      <div class="txt_field">
        <input type="Number" name="stdIC" placeholder="Example: 940119051928" required>
      </div>
	  
	  <label>Create a password</label>
      <div class="txt_field">
        <input type="password"  name="stdPassword" placeholder="Create password" required id="password">
      </div>
	  
	  <div class="form-group">
	  <label>Select your gender</label><br>
	  <input type="radio" name="stdGender" value="Male"/>Male
	  <br>
	  <input type="radio" name="stdGender" value="Female"/>Female
	  </div>
	  
	  <div class="form-group">
	  <label>Select your class</label><br>
	  <select name="stdClass">
		<option value="C12">C12</option>
		<option value="C13">C13</option>
	  </select><br>
	  </div>
	  
	  
	  
	  <br>
	  
	  	  
      <center><div class="button">
        <input type="Submit" name="submit" value="Register Now">
      </div></center><br>
      <div class="text">
        <span class="signup_link"><center>Already have an account? <a href="login.php">Login</a></center></span>
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
