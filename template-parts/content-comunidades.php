<?php

the_title('<h1>', '</h1>'); ?>

<figure class="logo-comunidad-single">
  <?php the_post_thumbnail(); ?>
</figure>

<?php the_field('bio_de_comunidad'); ?>

<?php

  if ( is_user_logged_in() && user_can( get_current_user_id(), 'edit_posts' ) ) {

    acf_form(array(
      'post_title' => true,
      'updated_message' => __("Comunidad Actualizada", 'communityconf2020'),
    ));
    
  }

?>
