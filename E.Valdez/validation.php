<?php

session_start();

$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con,'dbfacebook');



		$firstname = $_POST['fname'];
		$lastname =$_POST['lname'];
		$email =$_POST['email'];
		$password =$_POST['password'];
		$date = $_POST['date'];
		$sex =$_POST['sex'];

$s ="SELECT*FROM tblfacebook WHERE email= '$email' && password = '$password'";

$result =mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if ($num == 1) {

	$_SESSION['email'] = $email;
	header('location:welcome1.php');
}else{
	header('location:facebook.php');
}

	


	?>
