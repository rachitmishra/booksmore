
<?php
	// ajax action controller file 
	require("support/functions.php");
	
	$action = $_POST['action'];
	if(isset($_POST['data']))
	$data  = $_POST['data'];
	if(isset($_POST['data2'])){
	$qtt = $_POST['data2'];
	if($_POST['data2']=="")
	$qtt = 1;
	}
		switch ($action) {
			case 'search':
				search_box_ajax($data);
				break;
			
			case 'bookdetails':
				details_generator_ajax($data);
				break;

			case 'getbooks':
				booklist_generator_ajax($data);
				break;

			case 'updatecart':
				cart_increment_ajax( $data, $qtt );
				break;
			case 'showcart':
				show_cart( );
				break;
			default:
				echo "";
				break;
		}
?>