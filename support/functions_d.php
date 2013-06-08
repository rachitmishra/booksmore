
<?php
	// database functions 
	$status;
	function db_connect( ) {
		$host = "localhost";
		$dbname = "books_db";
		$dbuser = "books_user";
		$dbpassword = "password";
		//$host="mysql10.000webhost.com";
		//$dbname = "a9211879_books";
		//$dbuser = "a9211879_twntee";
		//$dbpassword = "rm1rocks";

		$status = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		if( mysqli_connect_errno( ) )
		echo "Error: could not connect to database.";
		return $status;
	}

	function db_disconnect( ) {
		$status->close( );
	}
	
?>