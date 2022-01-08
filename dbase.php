<!-- dbase.php -->
<!-- To connect between php scripting and database -->

<?php
define("DATABASE_HOST","localhost:3307");
define("DATABASE_USER","root");

//To establish a connection to database and save in $connect
$conn = mysqli_connect(DATABASE_HOST, DATABASE_USER);

//If connection failed then display mysql error
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//To select one particular database to be used
mysqli_select_db($conn,"studentrecord") or die("Could not open student records database");

//Set default time zone to use in Msia
date_default_timezone_set('Asia/Kuala_Lumpur');
?>
