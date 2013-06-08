<?php
	@ session_start( );
	require_once('functions_b.php');
	function cart_increment_ajax($data, $qtt) {
		$_SESSION['count']+=$qtt;
		set_cart( $data, $qtt );
		echo $_SESSION['count'];
	}

	function initialise_cart( ) {
		if(!isset($_SESSION['cart'])) {
			$_SESSION['cart'] =array( );
			$_SESSION['totalprice'] = 0;
		}
	}

	function set_cart( $isbn, $count )  {
		initialise_cart( );
		if (!isset($_SESSION['cart'][$isbn]))
       			 $_SESSION['cart'][$isbn]=$count;
    		else
    		    $_SESSION['cart'][$isbn]+=$count;

    		$_SESSION['totalprice']+= calculate_total_price ( $_SESSION['cart'] );

	}

	function calculate_total_price ( $book ) {
		foreach ($book as $isbn => $value) {
				$price = get_book_information($isbn,"price");
				$totalprice = $price*$value;
			}
		return $totalprice;
	}

	function show_cart( ) {
		initialise_cart( );
		if(!$_SESSION['cart']){
			echo '<div class="cartcontent"><ul>
					<li class="cme">Your cart is empty.</li>
					</ul></div>';
			}
		if(is_array($_SESSION['cart']))	{
			$cart = $_SESSION['cart'];
			foreach ($cart as $isbn => $value) {
				$title = get_book_information($isbn,"title");
				$price = get_book_information($isbn, "price");
				echo '<div class="cartcontent">
					<ul>
					<li class="cm st">'.$title.'</li>
					<li class="cm sc">'.$value.'</li>
					<li class="cm sc">'.$price.'</li>
					</ul></div>';
				}
				echo '<div class="cartfoot">	
					<ul>
					<li class="cf st">Total</li>
					<li class="cf sc cto">'.$_SESSION['count'].'</li>
					<li class="cf sc csu">'.$_SESSION['totalprice'].'</li></ul>
					<form action="checkout.php" method="post"><input type="submit" value="Checkout" class="cb sb" /></form></div>';
		}
	}

	function updatetotal( ){
		return $_SESSION['totalprice'];
	}

	?>