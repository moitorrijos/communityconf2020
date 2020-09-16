<?php

$args = array(
  'post_type'       => 'comunidades',
  'post_status'     => 'publish',
  'posts_per_page'  => -1,
  'order'           => 'ASC',
  
);

$comunidades = new WP_Query( $args );

  if ( $comunidades->have_posts() ) :

?>

<div class="ponentes">

    <?php while ( $comunidades->have_posts() ) : $comunidades->the_post(); ?>

      <?php

        $correo_de_ponente = get_field('correo_de_ponente');
        $nombre_de_ponente = get_field('nombre_de_ponente');
        $correo_de_moderador = get_field('correo_de_moderador');
        $nombre_de_moderador = get_field('nombre_de_moderador');
        $nombre_de_comunidad = get_the_title( get_the_ID() );
        $bio_de_comunidad = get_field('bio_de_comunidad');

        $icono_redes = array(
          'facebook' => get_template_directory_uri() . '/images/icons/facebook.svg',
          'twitter' => get_template_directory_uri() . '/images/icons/twitter.svg',
          'instagram' => get_template_directory_uri() . '/images/icons/instagram.svg',
          'linkedin' => get_template_directory_uri() . '/images/icons/linkedin.svg',
          'youtube' => get_template_directory_uri() . '/images/icons/youtube.svg',
          'website' => get_template_directory_uri() . '/images/icons/website.svg',
        );

      ?>
    
      <div class="ponente">

        <h2><?php echo $nombre_de_comunidad; ?></h2>
      
        <div class="avatars-ponentes">
        
          <div class="avatar-nombre-redes">
            
            <div class="avatar-nombre">
              <?php echo get_avatar($correo_de_ponente, 150); ?>
              <p>
                <?php echo $nombre_de_ponente; ?>
              </p>
            </div>

            <?php if ( have_rows('redes_sociales_de_ponente') ) : ?>
              <div class="redes">
                <?php while ( have_rows('redes_sociales_de_ponente') ) : the_row(); ?>
                  <a href="<?php the_sub_field('url_red_social'); ?>">
                    <?php 
                      $icono = array_filter($icono_redes, function($icono){
                        $red_social = get_sub_field('red_social');
                        return $icono === $red_social;
                      }, ARRAY_FILTER_USE_KEY);
                      $icono = array_values($icono);
                      $icono = $icono[0];
                    ?>
                      <img src="<?php echo $icono; ?>" alt="<?php echo 'Logo de ' . get_sub_field('red_social'); ?>">              
                  </a>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

          </div>

          <div class="avatar-nombre-redes">
            <div class="avatar-nombre">
              <?php echo get_avatar($correo_de_moderador, 150); ?>
              <p>
                <?php echo $nombre_de_moderador; ?>
              </p>
            </div>

            <?php if ( have_rows('redes_sociales_de_moderador') ) : ?>
              <div class="redes">
                <?php while ( have_rows('redes_sociales_de_moderador') ) : the_row(); ?>
                  <a href="<?php the_sub_field('url_red_social'); ?>">
                    <?php 
                      $icono = array_filter($icono_redes, function($icono){
                        $red_social = get_sub_field('red_social');
                        return $icono === $red_social;
                      }, ARRAY_FILTER_USE_KEY);
                      $icono = array_values($icono);
                      $icono = $icono[0];
                    ?>
                      <img src="<?php echo $icono; ?>" alt="<?php echo 'Logo de ' . get_sub_field('red_social'); ?>">              
                  </a>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

          </div>
        
        </div>
      
      </div>
    
    <?php endwhile; ?>

</div>

<?php endif; ?>