<!-- Sign Off User -->

<?php 
	session_start( );
	require_once("support/functions_u.php");
	if(isset($_SESSION['username'])) {
		unset($_SESSION['username']);
		session_destroy( );
		header('Location:default.php');
	}
?>
