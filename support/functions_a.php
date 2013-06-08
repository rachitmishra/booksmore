
<?php 
	// all import functions
	require_once("functions_d.php");
	
	function calculate_price( $cart ) {
		$price = 0.0;
		if( is_array($cart) ) {
			@ $conn = db_connect( );
			foreach( $cart as $isbn => $qty ) {
				$query = "select price from books where isbn='".$isbn."'";
				$result = $conn->query($query) or die('Failed .. function_a.php line 11');;
				if( $result ) {
					$item = $result->fetch_object( );
					$item_price = $item->price;
					$price += $item_price*$qty;
				} 
			}
		}		
		return $price;}

	function calculate_items( $cart ) {
		$items = 0;
		if( is_array($cart) ) {
			foreach( $cart as $isbn => $qty ) {
				$items += $qty;
			} 
		}
		return $items; }

	function get_categories( ) {
		$conn = db_connect( );
		$query = "select catid, catname from categories ORDER BY catname";
		$result = @$conn->query($query) or die('Failed .. function_a.php line 35');
		if(!$result) {
			return false;
		}
		$result = result_to_array($result);
		return $result;}

	function get_top_publishers( ){
		$conn = db_connect( );
		$query = "select * from publishers order by ".$type."ASC limit 10";
		if($result) {
			$result = @$con->query($query);
			return false;
		}
	
		$result = result_to_array($result);
		return $result;}

	function result_to_array( $result ) {
		$res_array = array( );
		for($count=0; $row=$result->fetch_assoc( ); $count++) {
			$res_array[$count] = $row;
		}
		return $res_array;}

?>
