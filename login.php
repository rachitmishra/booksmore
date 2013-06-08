<!-- Sign In User -->
<?php 
	session_start( );
	require_once("support/functions_d.php");
	require_once("support/functions_u.php");
	$username = $_POST['username'];
	$password =  $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);

	if(!isset($username) && ($password))
	 	echo "<span class=\"errormessages\"> username or password not supplied. </span>";

	if(verify_user($username, $password)){
		$_SESSION['username']=$username;
		$userid = get_userid( $_SESSION['username'] );
		header("Location:default.php?user=".$userid);
	}
	else {
	include("static/login.phtml");
	include("static/loginbox.phtml");		
	include("static/footer.phtml");
	}
?>