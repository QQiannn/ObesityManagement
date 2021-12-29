<!-- update.php -->
<!-- Update data of update.php to database -->
<?php
include("session.php");

extract ($_POST);

$query = "UPDATE student SET stdName = '$stdName', stdClass = '$stdClass', stdEmail = '$stdEmail', stdPassword='$stdPassword', stdGender = '$stdGender' WHERE stdIC = (SELECT stdIC FROM student WHERE stdEmail = '$login_session');";

$result = mysqli_query($conn, $query) or die("Could not execute query in update.php");
if ($result){
	echo "<script type = 'text/javascript'>window.location='history.php'</script>";
}

header('Location: profile.php?status=success');
?>