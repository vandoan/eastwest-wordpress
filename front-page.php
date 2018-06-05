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
	          <div class="eyebrow fs-30 fs-i fs-32 fw-9 ff-play color-gold">hello,</div>
		      <div class="fs-40 ff-jos lh-48 mt-15">
	            Our collective is a small group of moonlighting makers based in San&nbsp;Luis&nbsp;Obispo, 
	            working to bring handmade joy to California's central&nbsp;coast.&nbsp;
	          </div>
	        </div>
	<!-- Arrow down image -->
	        <div class="pb-50 ta-center "> 
	          <img
	          	class='mw-50 wid-100' 
	          	src="//cdn.shopify.com/s/files/1/2417/2841/files/down-arrow_300x300.png?v=1519461159">
	        </div>

	      </div>
	  	</div>
	<!-- End section- header --!>
	
	<!-- Header bar	-->
	<div class="bg-bar-pat bg-bar-pat bgs-contain hei-36"></div>
	
	<div class='mw-1020 mar-auto'>

		<?php
			// Query
			$the_query = new WP_Query( 'posts_per_page=-1&post_type=post&tag=goods' );

			// Loop
			if ( $the_query->have_posts() ) {
			    echo '<ul class="dis-grid grid-tc-1111">';
			    while ( $the_query->have_posts() ) {
			        $the_query->the_post();
			        // print_r($post); // To dump out all the content.
			        echo '<li>';
			        	echo the_post_thumbnail();
			        	echo get_the_title();
			        echo '</li>';
			    }
			    echo '</ul>';
			} else {
			    // o posts found
			}

			wp_reset_postdata(); /* Restore original Post Data */
		?>
		

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.
		/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */

			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.
	?>
	</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
