<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="google-site-verification" content="z6WEo9GZzqz0H4lEPKRusuHrVgjkZo2cK64Pop0EKdA" />

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap_ms.css"/>
	    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/styles.css"/>

		<style scoped>
		@media (max-width: 767px) {
		    .mainNavTop {
		        background-image: url(<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0] ) ?>);
		        background-color: #fff;
		        background-repeat: no-repeat;
		        background-position: top right;
  				background-height: auto 50px;
		    }
		}
		</style>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-22154378-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-22154378-1');
		</script>
		
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		
		<?php wp_head(); ?>

		<!--[if lt IE 9]>
	    <script type="text/javascript">
	        window.location = "http://acuherbxia.com/2005/"
	    </script>
	    <![endif]-->

	</head>
	<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="navbar navbar-default navbar-fixed-top mainNavTop" role="navigation">
	    <div class="container">
	        <div class="navbar-header logoContainer desktopOnly">
	            <a href="//www.drzhu.com">
	            	<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() ) {
						        echo '<img src="'. esc_url( $logo[0] ) .'">';
						} else {
						        echo '<h1 style="font-size:18px">'. get_bloginfo( 'name' ) .'</h1>';
						}
						?>
	            </a>
	        </div>
	        <div class="navbar mainNav">
	            <div class="menuToggle mobileOnly">
	                <div class="toggleContainer">
	                    <a href="#">Menu</a>
	                </div>
	            </div>
	            <?php
				wp_nav_menu( array( 
				    'theme_location' => 'header-menu', 
				    'menu_class' => 'nav navbar-nav', 
				    'container_class' => 'wp-menu-container' ) ); 
				?>
	        </div>
	    </div>
	</div>