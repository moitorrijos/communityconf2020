<?php

function commconf_acf_block_types() {

  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'            => 'home_hero',
      'title'           => __('Sección Inicio', 'communityconf2020'),
      'description'     => __('Sección Principal en la página de Inicio. Este bloque sólo puede ser utilizado una vez.', 'communityconf2020'),
      'render_template' => get_template_directory() . '/template-parts/blocks/home-hero/home-hero.php',
      'enqueue_style'   => get_template_directory_uri() . '/blocks.css',
      'category'        => 'layout',
      'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.867 477.867"><path d="M426.667 68.267H51.2c-28.277 0-51.2 22.923-51.2 51.2V358.4c0 28.277 22.923 51.2 51.2 51.2h375.467c28.277 0 51.2-22.923 51.2-51.2V119.467c0-28.277-22.923-51.2-51.2-51.2zm17.066 197.734l-107.4-107.4c-6.664-6.663-17.468-6.663-24.132 0L170.667 300.134l-56.201-56.201c-6.664-6.663-17.468-6.663-24.132 0l-56.201 56.201V119.467c0-9.426 7.641-17.067 17.067-17.067h375.467c9.426 0 17.067 7.641 17.067 17.067v146.534z"/><circle cx="153.6" cy="187.733" r="51.2"/></svg>',
      'keywords'        => array('hero', 'image', 'home'),
      'post_types'      => array('page'),
      'align'           => 'full',
      'supports'        => array(
        'multiple'  => false,
        'mode'      => false,
        'jsx'       => true
      ),
      'example'         => array(
        'mode'  => 'preview',
        'data'  => array(
          'home_hero_image'       => get_template_directory_uri() . '/images/communityconf-background-1.png',
          'home_hero_title'       => 'Una Experiencia Única Donde se Reunirán Las Comunidades de Tecnología de Panamá',
          'home_hero_description' => '18, 19 y 20 de septiembre de 2020',
          'home_hero_button'      => 'Registrate Aquí'
        )
      )
    ));
  }

}

add_action('acf/init', 'commconf_acf_block_types');