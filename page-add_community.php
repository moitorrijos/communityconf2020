<?php
/*
 * Template Name: Página Agregar Comunidad
 * Description: Página que muestra el formulario para agregar una comunidad.
 * 
 */

acf_form_head();

get_header();

?>

	<div class="main-content">

		<main id="primary" class="site-main add-community">
			
			<?php

				while ( have_posts() ) :

					the_post();

					get_template_part( 'template-parts/content', 'agregar_comunidad' );

				endwhile; // End of the loop.

			?>

		</main><!-- #main -->

</div>

<?php 

get_footer();
