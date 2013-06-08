<!-- Sign In User -->
<?php 
	@ session_start( );
	$login = false;
	$display = "unactivepanel";
	require("static/checkout.phtml");
	require("support/functions.php");
	if(isset($_SESSION['username'])) {
		$login = true;
	}
?>

<section id="container">
	<section id="showcase" class="super-panels spa">
		<div class="panel panel_l">Order Summary</div>
		<div class="panel panelb">
			<div class="cartpanel">
				<div class="carthead">
					<ul>
					<li class="ch st" >Book</li>
					<li class="ch sc">Quantity </li>
					<li class="ch sc">Price</li>
					</ul>
					</div>
				<div class="cartbox2">
					<div class="cartcontent">
					<?php 	require_once("support/functions_c.php");
						 show_cart( ) ?>
						</div>
					</div>
				</div>
			</div>
		<div class="panel panel_t">Total <span class="low">Rs.<?php print( $_SESSION['totalprice'] ); ?></span>
				</div>
		<div class="panel panel_co"><span class="low"><input id="checkout" type="button" value="Continue to Checkout" class="sb ct" /></span>
				</div>
		</section>
	<section id="showcase" class="super-panels spb">
		<div class="panel panel_l">Checkout | <span id="tx"><?php if($login) echo 'Shipping'; else echo 'Login'; ?></span></div>
		<div class="panel">
		<div id="tabs">
		<ul>
		<li id="one" class="<?php if($login) echo 'unactivetab'; else echo 'activetab'; ?>"><a>1</a></li>
		<li id="two" class="<?php if($login) echo 'activetab'; else echo 'unactivetab'; ?>"><a>2</a></li>
		<li id="three" class="unactivetab"><a>3</a></li>
		<li id="four" class="unactivetab"><a>4</a></li>
		</ul>
		</div></div>



		<section id="tab-contents" class="panel">

		<section class="panels <?php if($login) echo 'unactivepanel'; else echo 'activepanel'; ?>"  id="signin">
			<div class="title">Enter your email or Login</div>
			<div class="wp2" >
				<ul>
				<li><input type="email" placeholder="Enter your email address" required/></li>
				<li class="isa">*Email will only be used for sending you order information.</li>
				<fieldset><legend class="orb"> Or</legend>
				<li><input type="button" value="Sign In to booksmore" class="sb si llb" /></li></fieldset>
				<fieldset><legend class="orb"> Or</legend>
				<li>
					<div class="box1 fc">Facebook</div>
					<div class="box1 tw">Twitter</div>
					<div class="box1 gg">Google</div>
					<div class="box1 oi">Open Id</div>
				</li></fieldset>

				</ul>
			</div>
		</section>
		<section class="panels <?php if($login) echo 'activepanel'; else echo 'unactivepanel'; ?>" id="shipping">
			<div class="title">Enter the shipping details</div>
			<div class="shipping tx">
				<?php
					$shipper = "show";
					if(isset($_SESSION['username'])){
					$shipper = "hide";
					get_shipping_address( $_SESSION['username']);
					}
					echo '<div class="'.$shipper.'"><ul>
					<li><label class="sh sl">To,</label></li>
					<li><label class="sh">Name</label><input type="text" name="name" placeholder="Name of Reciept" /></li>
					<li><label class="sh">Address</label><input type="text" name="address" placeholder="Address of shipping" /></li>
					<li><label class="sh">City</label><input type="text" name="city" placeholder="City" /></li>
					<li><label class="sh">State</label><input type="text" name="state" placeholder="State" /></li>
					<li><label class="sh">Country</label><input type="text" name="country" placeholder="Country" /></li>
					<li><label class="sh">Pin </label><input type="number" name="pin" placeholder="Pin Code" /></li></ul>';
					?>

					
				</div>
		</section>
		<section class="panels <?php echo $display ?>" id="confirmorder">
			<div class="title">Final check</div>
				<div class="cartpanel">
				<div class="carthead">
					<ul>
					<li class="ch st" >Book</li>
					<li class="ch sc">Quantity </li>
					<li class="ch sc">Price</li>
					</ul>
					</div>
				<div class="cartbox2">
					<div class="cartcontent">
					<?php 	require_once("support/functions_c.php");
						 show_cart( ) ?>
						</div>
					</div>
				</div>
			</section>
		<section class="panels <?php echo $display ?>" id="payment">
			<div class="title">Choose a Payment method</div>
			<div class="payment tx">
				<ul class="shl">
					<form action="processpayment.php" method="post">
					<li class="sm"><input name="payment" type="radio" value="cashondel" /> Cash On Delivery</li>
					<li class="sm"><input name="payment" type="radio" value="debitcard"/> Debit Card</li>
					<li class="sm"><input name="payment" type="radio" value="creditcard"/> Credit Card</li>	
					<li class="sm"><input name="payment" type="radio" value="netbank" /> Net Banking</li>
					<li class="sm"><input name="payment" type="radio" value="paypal" /> Paypal</li>
					</form>
				</ul>
				</div>
			</section>
		</section>
		<div class="panel panel_s"><span class="low"><input id="continue" type="button" value="Continue" class="sb ct" ajaxify="<?php if($login) echo "login"; else echo "shipping"; ?>" /></span>
				</div>
		<div class="panel panel_q"><span>Promise of Secure Shopping and Transactions <img src="images/padlock.png" /></span>
				</div>
		</section>
		<?php
			require("static/footer.phtml"); ?>
</section>