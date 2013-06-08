
<?php
	require_once("functions_d.php");
	require_once("functions_a.php");

	function verify_user( $username, $password ) {
		$conn = db_connect( );
		$query = "select * from userlogin where username='".$username."' and password='".$password."'";
		$result = @$conn->query($query) or die('Failed ..'.$conn->error);
		if(mysqli_num_rows($result)==0) {
			return false;
		}
		return true;	}

	function get_userid( $username ) {
		$conn = db_connect( );
		$query = "select userid from userlogin where username='".$username."'";
		$result = $conn->query( $query );
		if(mysqli_num_rows($result)==0) {
			echo "Not found. Please retry.";
			return false;
		}
		$resultarray = $result->fetch_array( );
		return $resultarray['userid'];
	}

	function get_user( $data, $userid ) {
		$conn = db_connect( );
		$query = "select ".$data." from userlogin where userid='".$userid."'";
		$result = $conn->query( $query );
		if(mysqli_num_rows($result)==0) {
			echo "Not found. Please retry.";
			return false;
		}
		return result_to_array($result);
	}

	function get_customer_information( $userid ){
		$conn = db_connect( );
		$query = "select * from customers where customerid='".$userid."'";
		$result = $conn->query( $query );
		if(mysqli_num_rows($result)==0) {
			echo "Not found. Please retry.";
			return false;
		}
		return result_to_array($result);
	}
?>
