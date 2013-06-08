

<?php 
	// all functions to get book data
	require_once("functions_a.php");
	require_once("functions_d.php");

	/* get isbn of book by its data */
	function get_book_isbn( $type, $value ){
		$conn = db_connect( );
		$query = "select isbn from books where ".$type." ='".$value."'";
		$result = @$conn->query($query) or die('Failed .. functions_b.php line 32');
		if(mysqli_num_rows($result)==0){
			return false;
		}
		$resultarray = $result->fetch_array( );
		return $resultarray['isbn'];
	}

	/* returns an array of data of a book by its isbn */
	function get_book_by_isbn( $isbn ) {
		$conn = db_connect( );
		$query = "select * from books where isbn ='".$isbn."'";
		$result = @$conn->query($query)or die('Failed .. functions_b.php line 10');;
		if(mysqli_num_rows($result)==0){
			return false;
		}
		return result_to_array($result);}

	/* returns an array of data of a book by its unique type */
	function get_books_by_type( $type ){
		$result;
		$conn = db_connect( );
		switch( $type ) {

			case "bestselling": case "popularity" : case "addedon":
				$query = "select * from books order by ".$type." desc limit 20"; 
				$result = @$conn->query($query);
				break;
			case "isdiscounted": case "iseditorpick": case "isbookofday": case "isnew":
				$query = "select * from books where ".$type." = 1";
				$result = @$conn->query($query);
				break;
			default: echo "Error: Please retry.";
				break;
		}
		if(mysqli_num_rows($result) == 0 ) {
			echo "Error: no result returned.";
			return false;
		}
		$result = result_to_array($result);
		return $result;}

	/* returns an array of data of a book by its unique type */
	function get_book_by_data( $type, $data ) {
		$conn = db_connect( );
		$query = "select * from books where ".$type." ='".$data."'";
		$result = @$conn->query($query) or die('Failed .. functions_b.php line 21');
		if(mysqli_num_rows($result)==0){
			return false;
		}
		return result_to_array( $result );}

	/* get data about a book by its isbn */
	function get_book_information( $isbn, $data ) {
		$conn = db_connect( );
		$query = "select ".$data." from books where isbn ='".$isbn."'";
		$result = @$conn->query($query) or die('Failed .. functions_b.php line 30');
		if(mysqli_num_rows($result)==0){
			return false;
		}
		$resultarray = $result->fetch_array( );
		return $resultarray[$data];
	}

	/* get book category id by it category name */
	function get_category_id( $category ){
		$conn = db_connect( );
		$query = "select catid from categories where catname ='".$category."'";
		$result = @$conn->query($query) or die('Failed .. functions_b.php line 30');
		if(mysqli_num_rows($result)==0){
			return false;
		}
		$resultarray = $result->fetch_array( );
		return $resultarray['catid'];
	}

?>
