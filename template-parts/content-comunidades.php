<?php

if ( have_rows('comunidades') ) : ?>

  <div class="comunidades">

<?php

  while ( have_rows('comunidades') ) : the_row();
  
    $nombre_de_comunidad = get_sub_field('nombre_de_comunidad');
    $bio_de_la_comunidad = get_sub_field('bio_de_la_comunidad');
    $logo_de_comunidad = get_sub_field('logo_de_comunidad');

    ?>

      <div class="comunidad">
        <div class="comunidad-desc">
          <h2><?php echo $nombre_de_comunidad; ?></h2>
          <p><?php echo $bio_de_la_comunidad; ?></p>
        </div>
        <div class="comunidad-logo">
          <figure>
            <img src="<?php echo $logo_de_comunidad['url']; ?>" alt="<?php echo $logo_de_comunidad['alt']; ?>">
          </figure>
        </div>
      </div>

    <?php

endwhile; ?>

</div>

<?php endif;