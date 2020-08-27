<?php

/**
 * Home Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$home_hero_image = get_field('home_hero_image');
$home_hero_title = get_field('home_hero_title') ? : 'Una Experiencia Única Donde se Reunirán Las Comunidades de Tecnología de Panamá';
$home_hero_description = get_field('home_hero_description') ? : '18, 19 y 20 de septiembre de 2020';
$home_hero_button_text = get_field('home_hero_button_text') ? : 'Regístrate Aquí';
$home_hero_button_link = get_field('home_hero_button_link');

?>

<div class="comm-conf-home-hero" style="background-image: url(<?php echo $home_hero_image['url']; ?>)">
  <div class="inner-container-comm-conf-home-hero">
    <div class="home-hero-comm-conf-text">
      <h1><?php echo $home_hero_title; ?></h1>
      <p><?php echo $home_hero_description; ?></p>
      <a href="<?php echo $home_hero_button_link; ?>" class="hero-button">
        <?php echo $home_hero_button_text; ?>
      </a>
      <InnerBlocks  />
    </div>
  </div>
</div>
