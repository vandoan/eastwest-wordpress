<?php /* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials */ ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class='no-js no-svg'>
	<head>
	<meta charset='<?php bloginfo( 'charset' ); ?>'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='profile' href='http://gmpg.org/xfn/11'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,900i' rel='stylesheet'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id='page' class='site'>

	<header class='bgc-black pb-45 pt-45'>
		<div data-name='inner-cell' class='dis-grid grid-tc-4-6 grid-tc-1-md mw-1020 mx-auto'>
	      	<div id='ew-logo' class='dis-flex mw-1020 mx-auto'>
				<a href='/' itemprop='url' class='site-header__logo-image'>
					<img src='//cdn.shopify.com/s/files/1/2417/2841/files/ewc-white-logo-with-collective_1024x1024.png?v=1519457217'
	                     alt='EastWest Collective'
	                     class='mlr-10 mw-400 wid-100' />
                 </a>      
	      	</div>

	      
		    <nav class='dis-flex ff-jos ml-60'>
		      	<ul class='flex-as-fe color-gold-child-a dis-flex plr-15-child-li'>
				    <li>
				        <a href='/pages/about-us' class='site-nav__link site-nav__link--main'>
				        	who we are
				        </a>
				    </li>
				    
				    <li>
				        <a href='/pages/events' class='site-nav__link site-nav__link--main'>
				        	events
				        </a>
				    </li>
				    
				    <li>
				        <a href='/pages/local-artists' class='site-nav__link site-nav__link--main'>
				        	local artists
				        </a>
				    </li>
				</ul>
		    </nav>
	    </div>      
  	</header>
	 
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class='site-content-contain'>
		<div id='content' class='site-content'>
