<?php
	include('session.php');
	mysqli_query($conn,"delete from `bmi` where stdIC = '$login_session';");
	mysqli_query($conn,"delete from `student` where stdIC = '$login_session';");
	echo "<script>alert('Successfully deleted account!');window.location.href='login.php'</script>";
?>