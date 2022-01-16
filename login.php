<!DOCTYPE html>
<?php
	include("dbase.php");
    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message

    if (isset($_POST['submit'])) {
        if (empty($_POST['ic']) || empty($_POST['password'])) {
        $error = "Please fill in all field!";
        echo "<script>alert('$error');window.location.href='login.php'</script>";
        }
    else{
        // Define $username and $password
        $ic = $_POST['ic'];
        $password = $_POST['password'];
        // mysqli_connect() function opens a new connection to the MySQL server.
        $conn = mysqli_connect("localhost:3307", "root", "", "studentrecord");
        // SQL query to fetch information of registered users and finds user match.
        $query = "SELECT stdIC, stdPassword from student where stdIC='$ic' AND stdPassword='$password' LIMIT 1";
        // To protect MySQL injection for Security purpose
        $stmt = mysqli_query($conn, $query);
        if(mysqli_num_rows($stmt) == 1) {
        $_SESSION['login_user'] = $ic; // Initializing Session
			header("location: index.php"); // Redirecting To Profile Page
        } else {
            $error = "IC or Password is invalid";
            echo "<script>alert('$error');window.location.href='login.php'</script>";
        }
        mysqli_close($conn); // Closing Connection
    }
}
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale=1.0>
	<title>LOGIN</title>
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
<!DOCTYPE html>
<html>
  <head>
  <style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", Merriweather;
}
  body{
  margin: 0;
  padding: 0;
  background: #9095FA;
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
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
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
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
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
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
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}

</style>
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
		height: 100vh;
		overflow: hidden;
	}
	
	.center{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 400px;
		background: white;
		border-radius: 10px;
		box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
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
		margin: 30px 0;
	}
	
	.txt_field input{
		width: 100%;
		padding: 0 5px;
		height: 40px;
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
	
	.pass{
	    margin: -5px 0 20px 5px;
	    color: #a6a6a6;
	    cursor: pointer;
	}
	
	.pass:hover{
	    text-decoration: underline;
	}
	
	input[type="submit"]{
		width: 100%;
		height: 50px;
		border: 1px solid;
		background: #2691d9;
		border-radius: 25px;
		font-size: 18px;
		color: #e9f4fb;
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
		font-size: 16px;
		color: #666666;
	}
	
	.signup_link a{
		color: #2691d9;
		text-decoration: none;
	}
	
	.signup_link a:hover{
		text-decoration: underline;
	}

</style>
    <meta charset="utf-8">
    <title>Login Form</title>
    
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        
        <div class="txt_field">
          <input type="text" name="ic" id="in_ic">
          <span></span>
          <label for="in_ic">IC/Passport</label>
        </div>
       
       <div class="txt_field">
          <input type="password" name="password" id="in_password">
          <span></span>
          <label for="in_password">Password</label>
        </div>
        
        <input type="submit" name="submit" value="Login">
          <br>
          Not a member? <a href="signup.php">Signup</a>
		  <br>
        </div>
      </form>
    </div>

  </body>
</html>
</body>
</html>