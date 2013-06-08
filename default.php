<!-- the main home file -->
	<?php 
		require("static/header.phtml");
		require("support/functions.php");
	?>
	<script type="text/javascript">

 		function downloadjs( ) {
 		var element = document.createElement("script");
 		var element2 = document.createElement("script");
 		var element3 = document.createElement("script");
 		element.src = "//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js";
 		element2.src = "scripts/scroller.js";
 		element3.src = "scripts/default.js";
 		document.body.appendChild(element);
 		document.body.appendChild(element2);
 		document.body.appendChild(element3);
 		}

 		if (window.addEventListener)
 		window.addEventListener("load", downloadjs, false);
 		else if (window.attachEvent)
 		window.attachEvent("onload", downloadjs);
 		else window.onload = downloadJSAtOnload;
	</script>

	<!--shadow panel -->
	<div class="ajaxshadow"></div>
	<!-- ajax container -->
      	<div class="ajaxcontainer"></div>
      	<!-- favourite links header -->
 	<section class="panel_h header">
 		<div class="tleft"><h2><?php echo "Categories "; ?></h2></div>
		<div class="tright"><h2>
			<?php
				foreach ($links as $row) {
				 echo " | ";
				 echo "<a href=\"".get_link($row, "link")."\" ajaxify=\"".get_link($row, "ajaxify")."\">".$row."</a>"; 
				}
				?>
			</h2></div>
		</section>
	<!-- sidebar for categories -->
	<aside class="sidebar">
		<ul class="scroller">
			<?php 
			$cat_array = get_categories( );
			if(!is_array($cat_array))
				echo "Error: Can not retrieve data.";
			else
				foreach ($cat_array as $row) {
					echo "<li class=\"categories\" ajaxify=\"getbooks\">";
					echo $row['catname'];
					echo "</li>";
				}
	 		?>
			</ul>
		 </aside>
	<!-- container box -->
	<section class="container">
		<!-- top box -->
		<section class="showcase">
		<div class="panel panel_l"><ul>
					
			</ul> 
			</div>
		<div class="panel panel_r">
			<div class="wrapper">
				<ul class="content_c">
						<?php
							$books = get_books_by_type("isbookofday");
							content_generator($books, false);
							?>
					</ul>
			</div>
			</div>
		</section>
		<!-- most popular and rated box -->
		<section class="rated">
			<div class="panel_j">
			<label>Most Popular & Bestselling books [See all]</label>
			<div class="panel">
				<div class="left"><span class="arrow_l"></span></div>
				<div class="wrapper">
				<ul class="ulco">
					<?php 
						$books = get_books_by_type("bestselling");
						content_generator($books,false);
						?>
					</ul>
				</div>
			<div class="right"><span class="arrow_r"></span></div>
			</div></div>
		</section>
		<!-- newest books box -->
		<section class="newest">
		<div class="panel_j">
			<label>New Arrivals</label>
		<div class="panel">
			<div class="left"><span class="arrow_l"></span></div>
				<div class="wrapper">
				<ul class="ulco">
					<?php
						$books = get_books_by_type("addedon");
						content_generator($books,false);
						?>
					</ul>
				</div>
			<div class="right"><span class="arrow_r"></span></div>
						</div></div>
		</section>
		<!-- editor's choice books box -->
		<section class="editors">
		<div class="panel_j">
			<label>Editor's Picks </label>
		<div class="panel">
			<div class="left"><span class="arrow_l"></span></div>
				<div class="wrapper">
				<ul class="ulco">
					<?php 
						$books = get_books_by_type("iseditorpick");
						content_generator($books,false);
						?>
					</ul>
				</div>
			<div class="right"><span class="arrow_r"></span></div>
			</div></div>
		</section>
		<!-- top publishers of books box -->
		<section class="brands">
			<div class="panel_j">
				<label>Top and Trending Publishers</label>
				<div class="panel panel_t">
				<ul class="ulco">
					</ul>
			</div></div>
		</section>
		<!-- best offers and discounts of books box -->
		<section class="bestoffers">
			<div class="panel_j">
				<label>Best Discounts and Sale Offs </label>
		<div class="panel">
			<div class="left"><span class="arrow_l"></span></div>
				<div class="wrapper">
				<ul class="ulco">
					<?php 
						$books = get_books_by_type("isdiscounted");
						content_generator($books, false);
						?>
					</ul>
				</div>
			<div class="right"><span class="arrow_r"></span></div>
			</div></div>
		</section>
		<!-- share box -->
		<section class="connect">
			<div class="panel_j">
				<label>Connect with Us</label>
		<div class="panel panel_s">
			<div class="wrapper">
				<ul>	
				<li><label>Subscribe for best offers and deals</label></li>		
 				<li><input type="email" class="ema" placeholder="Email" /></li>
 				</ul>
				</div>
			<div class="wrapper_r">
				<label>Like, Tweet, or Read</label>
						<ul>
						<li><img src="images/social/facebook.png" /></li>
						<li><img src="images/social/twitter.png" /></li>
						<li><img src="images/social/youtube.png" /></li>
						<li><img src="images/social/blogger.png" /></li>
						</ul>
					</div>
			</div></div>
		</section>
		
	<!-- favourite categories header -->
	<section class="footer">
		<div class="panel panel_f"> <h2><?php echo "Popular Categories: Horror | Love | Competitive Examination | Cooking | Gardening | Biographies"; ?></h2></div>
		</section>
	
	<?php 
		require("static/footer.phtml") 
	?>
