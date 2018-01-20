<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Getting_Ready_For_Gutenberg
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="4hIq2crMizf6b-u3ZeNnxFOMBm3MpH4kG_MBSxwQ0rI" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<hr class="blue-band">

	<div class="container">

		<!-- header element starts -->
		<header>
			<h1><?php echo bloginfo( 'name' );?></h1>
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => 'ul' ) ); ?>
			</nav>
		</header>
		<!-- header element ends -->

	</div>
