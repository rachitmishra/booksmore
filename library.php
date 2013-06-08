<!-- the main home file -->
	<?php 
		require("static/library.phtml");
		require("support/functions.php");
	?>
	<!--shadow panel -->
	<div class="ajaxshadow"></div>
	<!-- ajax container -->
      	<div class="ajaxcontainer"></div>

	<!-- sidebar for categories -->
	<aside class="sidebar">
		<ul>
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
			echo "<span class=\"more-cat categories\">More..</span>";
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
			<label>Featured</label> 
				<ul class="content_c">
						<?php
							$books = get_books_by_type("isbookofday");
							content_generator($books, false);
							?>
					</ul>
			</div>
			</div>
		</section>

		<!-- newest books box -->
		<section class="newest">
		<div class="panel_j">
			<label>New Additions</label>
		<div class="panel">
			<span class="arrow_l"></span>
				<div class="wrapper">
				<ul class="ulco">
					<?php
						$books = get_books_by_type("addedon");
						content_generator($books,false);
						?>
					</ul>
				</div>
			<span class="arrow_r"></span>
						</div></div>
		</section>
		<!-- editor's choice books box -->
		<section class="editors">
		<div class="panel_j">
			<label>Editor's Picks </label>
		<div class="panel">
			<span class="arrow_l"></span>
				<div class="wrapper">
				<ul class="ulco">
					<?php 
						$books = get_books_by_type("iseditorpick");
						content_generator($books,false);
						?>
					</ul>
				</div>
			<span class="arrow_r"></span>
			</div></div>
		</section>
		
		<!-- share box -->
		<section class="connect">
			<div class="panel_j">
				<label>We will notify you about offers and updates</label>
		<div class="panel panel_s">
			<div class="wrapper">
				<ul>			
 				<li><input type="email" class="ema" placeholder="Your Email Address" /></li>
 				</ul>
				</div>
			<div class="wrapper_r">
				<label>Connect, Just tweet, or See</label>
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
		</section>
	
	<?php 
		require("static/footer.php") 
	?>
