<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CommunityConf2020
 */
get_header();

if ( !is_home() && !is_front_page() ) :

?>

	<div class="main-content">

		<main id="primary" class="site-main">
			
			<?php

				endif;

				while ( have_posts() ) :

					the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.

			?>

			<?php if ( !is_home() && !is_front_page() ) :	?>

		</main><!-- #main -->

	<?php endif; ?>

<?php
if ( !is_home() && !is_front_page() ) {

	get_sidebar();

}

if ( !is_home() && !is_front_page() ) :

?>

</div>

<?php 

endif;

get_footer();
