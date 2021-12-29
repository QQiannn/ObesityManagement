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
      $user_check_query = "SELECT stdEmail FROM student WHERE stdEmail='$stdEmail'";
      $result = mysqli_query($conn, $user_check_query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // count == 0  means email does not exist
      if($count == 0) {
         $query = "INSERT INTO `student` (`stdName`, `stdIC`, `stdClass`, `stdEmail`, `stdPassword`, `stdGender`) VALUES ('$stdName', '$stdIC', '$stdClass', '$stdEmail', '$stdPassword', '$stdGender');";
  	      mysqli_query($conn, $query);
  	      $_SESSION['login_user'] = $stdIC;
  	      echo "<script>alert('Registered successfully!');window.location.href='login.php'</script>";
      }else {
         echo "<script>alert('Email has already existed in the system!');window.location.href='signup.php'</script>";
      }
   }
?>

  <head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>
	<title> Sign Up </title>
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
 
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Playfair Display', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background:;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background:#9095FA;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
 
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
   </head>
<body>
  <div class="wrapper">
    <Center><h2>Sign Up</h2></Center>
    <form action="signup.php" method="POST">
      <div class="input-box">
        <input type="text" name="stdName" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="stdEmail" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="Number" name="stdIC" placeholder="Enter your IC" required>
      </div>
	  <div class="input-box">
        <input type="text" name="stdClass" placeholder="Enter your class" required>
      </div>
	  <div class="input-box">
        <input type="text" name="stdGender"  placeholder="Enter your gender" required>
      </div>
      <div class="input-box">
        <input type="password"  name="stdPassword" placeholder="Create password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" name="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
