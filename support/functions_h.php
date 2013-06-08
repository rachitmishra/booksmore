<?php
	/* functions_h.php contains all functions to generate the homepage */
	require_once('functions_d.php');
	require_once('functions_b.php');
	require_once('functions_a.php');

	/* this function generates individual content-box for a book by recieving book data in array format and type if it is featured */
	function content_generator( $books, $type ) {
		if( !is_array($books) ) 
			echo '<span class="tx">Failed to get data.</span>';
			else foreach( $books as $row) { 
			echo '<li class="content">';
			$imagepath = str_replace(" ", "_", $row['title'] );
			echo '<img src="images/covers/'.$imagepath.'.jpg"/>
			<span class="social">
				<ul>
					<li><span class="like"></span></li>
					<li><span class="tweet"></span></li>
					<li><span class="love"></span></li>
					<li><span class="share"></span></li>
				</ul></span>';
			if($type)
			echo '<p class="describe">"'.$row['description'].'"</p><a class="more" ajaxify="bookdetails">More ...</a>';
			echo '<ul class="dt">
				<li class="title" ajaxify="bookdetails">'.$row['title'].'</li>
				<li span class="at">By :</li><li class="author" ajaxify="authordetails">'.$row['author'].'</li>
				<li class="price">Price: Rs.'.$row['price'].'</ul></li>';
			/* if($type)
			echo '<span class="price3"> Today\'s Best Price:'.$row['bestprice'].'</span></li>';
			echo'<li>
				<li class="price"><input type="submit" class="price"  value="Price: Rs.'.$row['price'].'"</li>
			</ul></li>*';*/
			 } }?>
	
	<?php

	/* this function generates details panel for a book by recieving book name */ 
	function details_generator_ajax($name) {
		$books = get_book_by_data("title",$name);
		if(is_array($books)) {
		foreach( $books as $row ) { 
		echo '  <!Doctype html> <html><head>
			<meta http-equiv="Content-type" content="text/html" charset="utf-8" language="en" />
			<link rel="stylesheet" href="styles/bookstyler.css"/>
			<script type="text/javascript">
			$(".close").click(function( ) {$(".ajaxshadow").hide( );$(".ajaxcontainer").hide( ); } );
			$("#addcart").click(function(event){event.preventDefault( );
			var action =$(this).attr("ajaxify");
			var data =$(".isbns").text( );
			var data2 =$(\'input[name*="quantity"]\').val();
			$.post("actions.php",{action:action,data:data,data2:data2},function(data){ 
				$.post("actions.php",{action:\'showcart\'}, function(data) { $(".cartbox2").html(data);});
				$(".ajaxshadow").hide( );$(".ajaxcontainer").hide( );
				$(".counter").html(data);
				$(".carttotal").html(data);});});
			</script>
			</head>
			<body><section class="container_d"><a class="close" title="Close"></a>
		           <div class="wrapper_t"><div class="wrapper_b panel2">
			<div class="images">
			<img src="images/covers/'.str_replace(" ", "_",$row['title']).'.jpg" />
			</div>
			<div class="informations panel2">
			<ul class="uli">
			<li><label class="isbns">'.$row['isbn'].'</label></li>
			<li><label class="title2">'.$row['title'].'</label></li>
			<li><label class="label">By </label><label class="author2">'.$row['author'].'</label></li>
			<li><label class="label">Publisher </label><label class="publisher">'.$row['publisher'].'</label></li>
			<li><label class="label">in year </label><label class="year2">'.$row['year'].'</label></li></ul>
			</div></div>
			<div class="summary panel2"><p>'.$row['description'].'</p></div>
			<div class="buybox panel2">
				<form name="updatetocart" action="checkout.php" method="post">
				<ul class="uli">
				<li><label for="quantity" class="label">How Many: </label><input type="text" placeholder="0" name="quantity"/></li>
				<li><input type="submit" value="Add to Cart" id="addcart"  ajaxify="updatecart" class="buttons"/>
				<input type="submit" id="checkout" value="Checkout" class="buttons" /></li>
				<li><input type="hidden" value="'.$row['isbn'].'" name="isbn" /></li>
				</ul>
				</form>
				</div></div>
			<aside class="container_l">
			<div class="suggestions"></div>
			<div class="history"></div>
			</aside>
			<div class="reviews"></div></section></body></html>';
			}
		}
		else echo 'Failed .. function_h.php Line 67';
	}

	/* this function generates the top header links */
	function get_link($name, $data) {
		$conn = db_connect( );
		$query = "select ".$data." from links where name ='".$name."'";
		$result = @$conn->query( $query ) or die('Failed ..'.$conn->error);
		$resultarray = $result->fetch_array( );
		return $resultarray[$data];
	 }
	
	/* this function generates books related to a category */
	function booklist_generator_ajax($category) {
		$catid = get_category_id( $category );
		$books = get_book_by_data("catid", $catid);
		echo '<!Doctype html>
			<html><head>
			<meta http-equiv="Content-type" content="text/html" charset="utf-8" language="en" />
			<link rel="stylesheet" href="styles/bookstyler.css"/>
			<script type="text/javascript">
			$(".close").click(function( ) {$(".ajaxshadow").hide( );$(".ajaxcontainer").hide( ); } );
			$("#addcart").click(function(event){event.preventDefault( );
			var action =$(this).attr("ajaxify");
			var data =$(".isbns").text( );
			var data2 =$(\'input[name*="quantity"]\').val();
			$.post("actions.php",{action:action,data:data,data2:data2},function(data){ 
				$.post("actions.php",{action:\'showcart\'}, function(data) { $(".cartbox2").html(data);});
				$(".ajaxshadow").hide( );$(".ajaxcontainer").hide( );
				$(".counter").html(data);
				$(".carttotal").html(data);});});
			</script>
			</head>
			<body><section class="container_d"><a class="close"></a>
		           <div class="wrapper_s"><ul>';
		           content_generator($books, false);
		           echo '</ul></div></section></body></html>';
	} 

	function get_shipping_address( $username ){
			$customer = get_customer_information( get_userid( $username ) );
			foreach ($customer as $row ) {
				echo '   <ul class="df">
					<li><label class="sh sj">To, </label></li>
					<li><label class="sh sj">'.$row['name'].'</label></li>
					<li><label class="sh sj">'.$row['address'].'</label></li>
					<li><label class="sh sj">'.$row['city'].'</label></li>
					<li><label class="sh sj">'.$row['state'].'</label></li>
					<li><label class="sh sj">'.$row['country'].'</label></li>
					<li><label class="sh sj">'.$row['pin'].'</label></li>
					<li><button class="sb ca">Change your Shipping Address</button></li></ul>';
			}
	}

?>
			