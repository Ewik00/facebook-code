<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
</head>
<body style="background-color: #f7f7f7"><header style="position: fixed; left: 0px; background-color: #3d5b99; width: 100%; height: 90px; top: 0; -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25); z-index: 7;">
	<div style="position: fixed; left: 150px; top: 10px">
	<img src="fb.png" height="70px" width="200px"></div>

	<form method="POST" action="validation.php">
<div style="left: 800px; height: 60px; position: fixed; top: 25px; color: white; font-family: verdana; font-size: 12px;">
		Email or Phone <br>
		<input type="Email" name="email" placeholder="Email"><br>
		keep me logged in<br></div>
		<div style="left: 990px; height: 60px; position: fixed; top: 25px; color: white; font-family: verdana; font-size: 12px;" >
		Password<br>
		<input type="Password" name="password" placeholder="password" ><br>
		Forgotten your password?</div>

	<div style="position: fixed;left: 1170px; top: 40px; background: #5b7bc0;color: white; cursor: pointer; height: 22px; width: 50px"><input type="submit" name="submit" value="login" style="background:#5b7bc0; height: 22px; width: 50px; cursor: pointer; color: white; z-index: 20;"></div>

	<div style="position: fixed; left: 170px; top: 150px; font-family: verdana; font-size: 20px; color: #142170; height: 75px; width: 550px">
		<b>Facebook helps you connect and share with the<br>people in your life.</b></div></form>

<div style="position: fixed;left: 800px; top:  130px; font-family: verdana; font-size: 30px; color: #000; font-weight: bold; height: 75px; width: 500px;">
	Create an Account</div>


<div style="position: fixed;top: 220px; left: 170px; width: 200px; height: 100px"><img src="world.png" width="550px" height="200px"></div>

<div style="position: fixed; left: 805px; top: 175px; font-family: verdana; font-size: 20px; color: #142170; width: 450px; height: 495px">It's  free and always will be</div>

<div style="left: 800px; height: 60px; position: fixed; top: 25px; color: white; font-family: verdana; font-size: 12px;">

	<form method="POST" action="facebook.php">
	
	<label><input type="text" name="fname" placeholder="First Name" style="position: fixed; width: 200px; height: 40px; border-radius: 5px 5px 5px 5px; background: white; padding: 10px; font-size: 18px;margin-top: 8px; border-width: 1px; border-style: solid; border-color: gray; top: 210px"></label>
	<label><input type="text" name="lname" placeholder="Last Name" style="position: fixed; width: 200px; height: 40px; border-radius: 5px 5px 5px 5px; background: white; padding: 10px; font-size: 18px;margin-top: 8px; border-width: 1px; border-style: solid; border-color: gray; top: 210px; right: 120px"></label><br>
	<label><input type="text" name="email" placeholder="Email or Phone Number" style="position: fixed; width: 423px; height: 40px; border-radius: 5px 5px 5px 5px; background: white; padding: 10px; font-size: 18px;margin-top: 8px; border-width: 1px; border-style: solid; border-color: gray; top: 280px; "></label><br>
	<label><input type="password" name="password" placeholder="Password" style="position: fixed; width: 423px; height: 40px; border-radius: 5px 5px 5px 5px; background: white; padding: 10px; font-size: 18px;margin-top: 8px; border-width: 1px; border-style: solid; border-color: gray; top: 350px;"></label><br>
	
	<input type="date" name="date" style="position: fixed; width: 423px; height: 40px; border-radius: 5px 5px 5px 5px; background: white; padding: 10px; font-size: 18px;margin-top: 8px; border-width: 1px; border-style: solid; border-color: gray; top: 420px;"></div>
	
	<div style="left: 800px; height: 60px; position: fixed; top: 500px; color: black; font-family: verdana; font-size: 15px;">Gender<br>

		<input type="radio" name="sex">Female<input type="radio" name="sex">Male<input type="radio" name="sex">Custom<br><br>

		<input type="submit" name="submit" value="Create an Account" style="width: 250px; height: 40px;background: green;font-family: verdana;color: white; border-radius: 5px 5px 5px 5px; border-width: 1px; border-style: solid; border-color: gray; cursor: pointer;outline: none;"></div>

<div style="left: 800px; height: 60px; position: fixed; top: 585px; color: black; font-family: verdana; font-size: 15px;">

<?php 
/*
	$servername ="localhost";
	$username ="root";
	$password ="";
	$databasename ="dbfacebook";

	$connect =mysqli_connect ($servername,$username,$password,$databasename);

	if (isset($_POST['submit'])) {

		$firstname = $_POST['fname'];
		$lastname =$_POST['lname'];
		$email =$_POST['email'];
		$password =$_POST['password'];
		$date = $_POST['date'];
		$sex =$_POST['sex'];

		$insert ="INSERT INTO tblfacebook(fname,lname,email,password,date,sex)VALUES('$firstname','$lastname','$email','$password','$date','$sex')";
		$query = mysqli_query($connect,$insert);

		echo "<br>";

		if ($query == TRUE) {
			echo "<strong>Successfully Registered</strong>";
			}
			else{
				echo "<strong>Unsuccesfully Registered</strong>";

		}

	}

	?> */





$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con,'dbfacebook');
if (isset($_POST['submit'])) {

		$firstname = $_POST['fname'];
		$lastname =$_POST['lname'];
		$email =$_POST['email'];
		$password =$_POST['password'];
		$date = $_POST['date'];
		$sex = $_POST['sex'];

$s = "SELECT * FROM tblfacebook WHERE email = '$email'";

$result =mysqli_query($con, $s);
$num = mysqli_num_rows($result);



if ($num == 1) {

	echo "<h1>Email Already Taken</h1>";
}else{
	$insert= "INSERT INTO tblfacebook(fname,lname,email,password,date,sex) VALUES ('$firstname','$lastname','$email','$password','$date','$sex')";
	mysqli_query($con,$insert);
	echo "<h1>Succesfully Registered</h1>";
}
}

	


	?></div></form></div></header></body></html>



