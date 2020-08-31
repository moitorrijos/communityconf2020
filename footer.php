<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CommunityConf2020
 */
?>

	<footer id="colophon" class="site-footer">
		<div class="footer-widget-area">
			<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php dynamic_sidebar( 'footer-2' ); ?>
			<?php dynamic_sidebar( 'footer-3' ); ?>
			<div class="footer-logo">
				<?php get_template_part('template-parts/footer-logo'); ?>
			</div>
		</div>
		<div class="site-info">
			<?php
			printf( esc_html__( 'Este sitio esta creado con') );
			?>
			<a
				href="<?php echo esc_url( __( 'https://wordpress.org/', 'communityconf2020' ) ); ?>"
				target="_blank"
				rel="nofollow noreferrer"
			>
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'WordPress' ) );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Tema personalizado %1$s creado por %2$s en la Ciudad de Panamá %3$s.', 'communityconf2020' ), '<a href="https://github.com/moitorrijos/communityconf2020.git">CommunityConf2020</a>', '<a href="https://moitorrijos.com">Juan Moises Torrijos</a>', '<span role="img" aria-label="Panama Flag">🇵🇦</span>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
