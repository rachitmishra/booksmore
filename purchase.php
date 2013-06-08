<?php
	include ('books_fns.php');

	session_start( );

	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$pin = $_POST['pin'];
	$country = $_POST['country'];

	if(($_SESSION['cart']) && ($name) && ($address) && ($city) && ($pin) && ($country)) {
		if(insert_order($_POST) != false ) {
			display_cart($_SESSION['cart'],false,0);
			display_shipping(calculate_shipping_cost ( ));
			display_card_form($name);
			display_button("show-cart.php", "continue-shipping", "Continue Shopping");
		} else {
			echo "<p> Could not store data, Please try again. </p>";
			display_button('checkout.php'),'back','Back');
		}
	} else {
		echo "<p> You did not fill in all the fields, Please try again. </p><hr/>"
		display_button('checkout.php'),'back','Back');
	}

?>