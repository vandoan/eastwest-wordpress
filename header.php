<?php /* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials */ ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class='no-js no-svg'>
	<head>
	<meta charset='<?php bloginfo( 'charset' ); ?>'>
	<link rel="shortcut icon" href=http://eastwest.store/wp-content/uploads/2018/06/Artboard_48_2x-100_32x32.jpg" type="image/png">
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
	      	<div id='ew-logo' class='dis-flex mw-1020 mx-auto plr-10-md'>
				<a href='/' itemprop='url' class='site-header__logo-image'>
					<img src='http://eastwestcollective.co/wp-content/uploads/2018/06/ewc-white-logo-with-collective_1024x1024.png'
	                     alt='EastWest Collective'
	                     class='mlr-auto mw-400 wid-100' />
                 </a>      
	      	</div>

	      
		    <nav class='dis-flex ff-jos ml-60'>
		      	<ul class='flex-as-fe color-gold-child-a dis-flex plr-15-child-li'>
				    <li>
				        <a href='/who-we-are' class='site-nav__link site-nav__link--main'>
				        	who we are
				        </a>
				    </li>
				    
				    <li>
				        <a href='/events' class='site-nav__link site-nav__link--main'>
				        	events
				        </a>
				    </li>
				    
				    <li>
				        <a href='/local-artists' class='site-nav__link site-nav__link--main'>
				        	local artists
				        </a>
				    </li>
				</ul>
		    </nav>
	    </div>      
  	</header>
	 
	<?php if (has_category('goods')) : ?> 
		<div class="main bg-bar-pat mar-auto ff-play fs-italic fs-30 pt-15 pb-20 bg-bar-pat bgs-contain bgr-nr">
		    <div class="mw-1020 mar-auto color-gold">good</div>
		</div>
	<?php endif; ?>



	

	<div class='site-content-contain mlr-auto'>
		<div id='content' class='site-content'>
