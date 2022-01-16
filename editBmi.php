<?php
	$id=$_GET['bmiID'];
	include('session.php');
	$sql = "SELECT * from `bmi` where bmiID='$id';";
	$records = mysqli_query($conn, $sql) or die("Failed to execute query in editBmi.php");
    $row = mysqli_fetch_assoc($records);
	$stdWeight = $row['stdWeight'];
	$stdHeight = $row['stdHeight'];
	$stdBmiResult = $row['stdBmiResult'];
?>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/4f3d141d14.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src = "app.js"></script>
	<style type="text/css" media="screen">
	.calcBtn{
	font-family: inherit;
	margin-top: 10px;
	border: none;
	color: #fff;
	background-image: linear-gradient(120deg,#9095FA, #4F54CA);
	width: 200px;
	padding: 15px;
	border-radius: 30px;
	outline: none;
	cursor: pointer;
	font-size: 20px;	
	}
	
	.calcBtn: hover{
		box-shadow: 1px 1px 10px #341f97;
	}
	
	span, p{
	font-size: 20px;
	}
	
	.inputInfo{
		color: #222f3e;
		text-align: left;
		font-size: 20px;
		font-weight: 200;
		outline: none;
		border: none;
		background: none;
		border-bottom: 1px solid #341f97;
		width: 200px;
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
	<?php 
    $errh = $errw = $errg = "";
    $height = $weight = "";
    $bmipass = "";
    
    if (isset($_POST['calculate'])) {
        if (empty($_POST['height'])) {
            $errh = "<span style='color:#ed4337; font-size:17px; display:block'>Height is requried</span>";
        } else {
            $height = validate($_POST['height']);
        }
    
        if (empty($_POST['weight'])) {
            $errw = "<span style='color:#ed4337; font-size:17px; display:block'>Weight is requried</span>";
        } else {
            $weight = validate($_POST['weight']);
        }

        if (empty($_POST['height'] && $_POST['weight'])) {
            echo "";
        } else {
            $bmi = ($weight / ($height * $height) * 10000);
            $bmipass = $bmi;
        }
    }
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!--Calculator-->
<h2>Check Your BMI</h2>
<form action="bmi.php" method="post">
    <div class="section1">
        <span>Enter Your Height (cm): </span>
        <input type="text" name="height" autocomplete="off" placeholder="Centimeter" value="<?php echo $stdHeight;?>" class="inputInfo"><?php echo $errh; ?>
    </div>
    
    <div class="section2">
        <span>Enter Your weight (kg) : </span>
        <input type="text" name="weight" autocomplete="off" placeholder="Kilogram" value="<?php echo $stdWeight;?>" class="inputInfo"><?php echo $errw; ?>
    </div>    
    <div class="submit"><br>
        <input type="submit" name="calculate" value="Calculate BMI" class="btn btn-danger active calcBtn"><br>
        <input type="submit" name="saveRecord" value="Save record" formaction="insertbmi.php" class="btn btn-primary btn-lg active calcBtn" >
    </div>
    
</form>

<?php
    error_reporting(0);
	?>
	<br>
	<p>Your BMI is: </p>
	<input style="text-align: center;" name="stdbmi" type="text" value="<?PHP echo number_format($bmipass , 2); ?>"/><br>
    <?php
	if (isset($_POST['calculate'])){
        if ($bmipass >= 13.6 && $bmipass <= 18.5) {
			
			echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Underweight. You need to gain weight by eating moderately.</span>";?>
            <?php
        } elseif ($bmipass > 18.5 && $bmipass < 24.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Normal. Healthy BMI</span>";?>
            <?php
        } elseif ($bmipass > 25 && $bmipass < 29.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Excess body weight. Need to reduce excess weight through excerise.</span>";?>
            <?php
        } elseif ($bmipass > 30 && $bmipass < 34.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The first stage of obesity. It is necessary to have a balance diet and exercise.</span>";?>
            <?php
        } elseif ($bmipass > 35 && $bmipass < 39.9) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> The second stage of obesity. Moderate diet and exercise are required.</span>";?>
            <?php
        } elseif ($bmipass >= 40) {
            echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'> Excess fat.<b style='color:#ed4337'> </b>. Need a doctor advice.</span>";?>
            <?php
        }
		$_SESSION['heightval'] = $_POST['height'];
		$_SESSION['weightval'] = $_POST['weight'];
		$_SESSION['bmiresult'] = number_format($bmipass , 2);
    } else {
        echo "";
    }
?>
    </div>
</body>
<?PHP echo $_POST['bmi'] ; ?>
</html>