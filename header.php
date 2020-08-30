<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CommunityConf2020
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="branding-navigation">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->
	
			<nav id="site-navigation" class="main-navigation">
				<?php
					$menu_parameters = array(
						'theme_location' 	=> 'menu-1',
						'menu_id'        	=> 'primary-menu',
						'container'       => false,
						'depth'           => 0
					);
					wp_nav_menu( $menu_parameters )
				?>
			</nav><!-- #site-navigation -->

			<button class="mobile-menu">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header><!-- #masthead -->
