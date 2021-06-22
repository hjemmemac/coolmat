<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- here we use the template_url code and join our css file location on to the end  -->
	<!--<link rel="stylesheet" href="<?php bloginfo('template_url');?>
	/css/custom.css"> -->
	

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


<!--  This is our outer element that takes up the whole width of the page/ dette er den ytterste boksen vår i header designet, det bruker hele bredden av siden vår-->
	<header id="masthead" class="site-header">


<!--  This is our inner box of our design, it takes up 1380 px /
		Dette er den indre boksen i designet vårt, den tar opp 1380 px -->
		<div class="header-inner container">
			
		<div class="site-branding">

			<!-- here we link to the logo from the assets folder
		HUSK!!!!! ' ' rundt destinasjonen til logoen '/assets/coolmat_logo.svg' -->
			<img src=" <?php bloginfo('template_url'); ?>'/assets/coolmat_logo.svg' " 
			class=" logo">

		</div>

		<nav id="site-navigation" class="main-navigation"> 

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
			) ); ?>
		</nav><!-- #site-navigation -->

		<!-- todo:  make it work -->
		<div class="language-select"> 
			KR | EN | NO 
		</div>
			
		
		</div><!-- .site-branding -->
		

	</header><!-- #masthead -->
