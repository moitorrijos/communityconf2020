<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CommunityConf2020
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( !is_home() && !is_front_page() ) : ?>

		<header class="entry-header">

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		</header><!-- .entry-header -->

	<?php endif; ?>

	<?php communityconf2020_post_thumbnail(); ?>

	<?php

		the_content();

		/**
		 * Despliega el Repetidor para la página de Comunidades
		 */
			if ( get_the_ID() === 69 ) {

				get_template_part( 'template-parts/content', 'agenda' );

			} elseif ( get_the_ID() === 73 ) {

				get_template_part(  'template-parts/content', 'speakers' );
				
			} elseif ( get_the_ID() === 97 ) {
				
				get_template_part( 'template-parts/content', 'comunidades_locales' );

			} 

	?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				if ( !is_home() && !is_front_page() ) {
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'communityconf2020' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						),
						'<span class="edit-link">',
						'</span>'
					);
				}
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
