<?php


session_start();




?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body style="background: pink;">



<center><h1>Welcome <?php echo $_SESSION['email'];?><br>

<button><a href="facebook.php">Logout</a></center></button></h1>
</body>
</html>