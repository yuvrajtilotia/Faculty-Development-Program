<?php

	session_start();
	$c = mysqli_connect('localhost','root');
	if ($c)
		echo "Registration Successful";
	else
		echo "Registration Unsuccessful";

	mysqli_select_db($c, 'registrationinfo');

	$f = $_POST['first'];
	$l = $_POST['last'];
	$e = $_POST['email'];
	$p = $_POST['password'];
	$m = $_POST['mobile'];

	$q = " SELECT * from userdata where EmailID = '$e' ";

	$r = mysqli_query($c, $q);

	$n = mysqli_num_rows($r);

	if($n == 1)
		{
			$_SESSION['username'] = $e;
			header('location:learn.php');
		}
	else
		{
			header('location:login.php');
		}

?>