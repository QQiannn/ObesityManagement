<!-- update.php -->
<!-- Update data of update.php to database -->
<?php
include("dbase.php");

extract ($_POST);

//Dapatkan tarikh dan masa masuk
$dateS = date("d-m-Y", time());

$query = "UPDATE bmi SET stdIC = '$stdIC', dateS = '$dateS', stdWeight = '$stdWeight', stdHeight='$stdHeight', stdBmiResult = '$stdBmiResult' WHERE bmiID = '$bmiID'";

$result = mysqli_query($conn, $query) or die("Could not execute query in edit.php");
if ($result){
	echo "<script type = 'text/javascript'>window.location='history.php'</script>";
}
?>