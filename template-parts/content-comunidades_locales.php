<?php

  $args = array(
    'post_type'       => 'comunidades',
    'post_status'     => 'publish',
    'posts_per_page'  => 20,
    'order'           => 'ASC',
  );

  $comunidades = new WP_Query( $args );

  if ( $comunidades->have_posts() ) :

?>

  <div class="comunidades">

<?php

  while ( $comunidades->have_posts() ) : $comunidades->the_post();
  
  $bio_de_comunidad = get_field('bio_de_comunidad');

  $logo_de_comunidad = get_field('logo_de_comunidad');

    ?>

      <div class="comunidad">

        <div class="comunidad-desc">

          <h2><?php the_title(); ?></h2>
          
          <?php echo $bio_de_comunidad; ?>

          <a href="<?php echo get_permalink(); ?>">
            <?php echo __('Conocer más de esta comunidad'); ?>
          </a>

        </div>

        <figure class="comunidad-logo">

          <?php the_post_thumbnail(); ?>

        </figure>

      </div>

    <?php

endwhile; ?>

</div>

<?php endif;