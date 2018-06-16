<?php 
	/* The front page template file */
	get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- Header section -->
		<div id='home-hero' class="bgc-black color-white ff-jos">
	      	<div class="mw-1020 letter- mar-auto">
				<!-- Intro text -->   
	        	<div class="pb-100 pt-100 mlr-10 mw-850">
	          		<div class="eyebrow fs-30 fs-italic fs-32 fw-9 ff-play color-gold">hello,</div>
		      		<div class="fs-40 ff-jos lh-48 mt-15">
	            		Our collective is a small group of moonlighting makers based in San&nbsp;Luis&nbsp;Obispo, 
	            		working to bring handmade joy to California's central&nbsp;coast.&nbsp;
	          		</div>
	        	</div>
				<!-- Arrow down image -->
	        	<div class="pb-50 ta-center "> 
	          		<img
			          	class='mw-50 wid-100' 
			          	src="//cdn.shopify.com/s/files/1/2417/2841/files/down-arrow_300x300.png?v=1519461159"
			        />
	        	</div>
	      	</div>
	  	</div>
		<!-- End section- header --!>
	
		<!-- Header bar	-->
		<div class="bg-bar-pat bg-bar-pat bgs-contain hei-36"></div>
	
		<!-- Goods -->
		<div class='mw-1020 mlr-auto'>
			<div class="ff-jos mb-40 mt-55 fs-35 clr-black ta-center fs-45" data-name='shop-header'>Goods</div>
			<?php
				// Query
				$the_query = new WP_Query( 'posts_per_page=-1&post_type=post&tag=good' );

				// Loop
				if ( $the_query->have_posts() ) {
				    echo '<ul class="dis-grid grid-tc-1111">';
				    while ( $the_query->have_posts() ) {
				        $the_query->the_post();
				        // print_r($post); // To dump out all the content.
				        echo '<li class="mar-10">';
				        	echo '<a href="';
				        	echo get_permalink();
				        	echo '">';
				        	echo '<div class="mh-230 over-hid">';
				        	echo the_post_thumbnail('medium');
				        	echo '</div>';
				        	echo '<h3 class="color-mint ff-jos font-15 pr-5 ta-r">';
				        	echo get_the_title(); 
				        	echo '</h3>';
				        	echo '</a>';
				        echo '</li>';
				    }
				    echo '</ul>';
				} else {
				    // o posts found
				}

				wp_reset_postdata(); /* Restore original Post Data */
			?>
		</div>


		<!-- Local Artists -->
		<div class="section bgc-gold">
			<div class="dis-grid grid-tc-11 mx-auto mw-1020 pb-50 pt-50">
	        	<div class="pr-30">
					<div class="hp-artist-img-accent">
	              		<img src="//cdn.shopify.com/s/files/1/2417/2841/files/local-artists-accents_200x200.png?v=1519462918">
	          		</div>
		          	<div class="">
		            	<h4 class="ff-play fs-48 mb-0 fw-9 fs-italic pt-5 color-black">local artists</h4>
		            	<div class="ff-jos fs-27">spring</div>
		            	<div class="rte-setting"><p class=" color-white ff-jos">Every month, we discuss with local artists in the area and learn more about their work and pieces.</p></div>
		        	</div>
	        		<a class="color-black" href="https://eastwestcollective.co/pages/local-artists"><div class="hp-local-button ff-jos mt-25">read more</div></a>
			    </div>

		      	<div class="">
					<div">
		              	<img class="" src="//cdn.shopify.com/s/files/1/2417/2841/files/DSC_2069_1024x1024.JPG?v=1521178944" data-sizes="auto" sizes="442px">
		            </div>             
			    </div>
			</div>
		</div>

		<!-- Part with heart -->
		<div class="">
  			<div class="page-width mw-1020 pb-50 color-black mlr-auto mt-40">
      			<div class="">
        			<div class="ta-center">
						<div class="hp-heart">
              				<img src="https://cdn.shopify.com/s/files/1/2417/2841/files/parts-with-heart-heart.png?v=1519466001">
          				</div>
	          			<div class="color-black">
	            			<h4 class="ff-play fs-30 mb-0 fw-9 fs-italic pt-5">the part with heart</h4>
	              			<div class="rte-setting mt-35"><p class="ff-jos fs-27 color-black">EastWest Collective shares a part of its proceeds <br>with these local nonprofits.</p></div>
	              			<div class="hp-non-profits mt-35">
	                			<div class="non-profit hei-70 img-100 dis-ib img-100 mlr-60"><img src="//cdn.shopify.com/s/files/1/2417/2841/files/Glean_SLO-bw_grande.png?v=1520091090" alt="Glean non-profit"></div>
	                			<div class="non-profit hei-70 img-100 dis-ib img-100 mlr-60"><img src="//cdn.shopify.com/s/files/1/2417/2841/files/woods_humane_society_logo-bw_240da254-7005-4c6d-be8a-673179bb5194_large.png?v=1520103168" alt="Woods Human Society non-profit"></div>
	              			</div>
	          			</div>
	        		</div>
	      		</div>
	  		</div>
		</div>
		
 
	</main>
</div>

<?php
get_footer();
