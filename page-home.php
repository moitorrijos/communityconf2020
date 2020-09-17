<?php
/**
 * Template Name: Página de Inicio
 * Description: Página que muestra la página de Inicio
 */

get_header();

?>

<div class="comconf-home-hero">
  <div class="comconf-home-hero-inner-container">
    <div class="comconf-home-hero-text">
      <p>Del 18 al 20 de Septiembre de 2020</p>
      <h1>La Conferencia de las Comunidades de Tecnología de Panamá</h1>
      <div class="comconf-description">
        <div class="comconf-desc">
          <h2>3</h2>
          <p class="small">Días</p>
        </div>
        <div class="comconf-desc">
          <h2>14</h2>
          <p class="small">Ponencias</p>
        </div>
        <div class="comconf-desc">
          <h2>2</h2>
          <p class="small">Paneles</p>
        </div>
      </div>
      <div class="comconf-buttons">
        <a href="https://liveskill.io/booking?productId=5f36a9693b5d290e79b7c09d&username=eduardo-snape&time=4%3A00pm&date=2020-7-27" class="hero-button-primary">Regístrate</a>
        <a href="<?php echo get_permalink( 69 ); ?>" class="hero-button-secondary">Agenda</a>
      </div>
    </div>
  </div>
</div>

<div class="home-page">

    <h3 class="centered" >Nuestros Socios</h3>

    <div class="nuestros-socios">
    
      <div class="socio liveskill">
        <a href="https://liveskill.io/" title="Liveskill Logo">
          <?php get_template_part('template-parts/liveskill_logo'); ?>
        </a>
        <p>Video Conferencia en Vivio</p>
      </div>

      <div class="socio global-internet">
        <a href="https://globalinternet.com.pa/" title="Global Internet Logo">
          <?php get_template_part('template-parts/global_logo'); ?>
        </a>
        <p>Hospedaje Web, Mail y Dominio</p>
      </div>

      <div class="socio moitorrijos">
        <a href="https://moitorrijos.com/">
          <?php get_template_part('template-parts/moitorrijos_logo'); ?>
        </a>
        <p>Diseño y Desarrollo Web</p>
      </div>
    
    </div>

    <div class="home-page-comunidades">
    
      <div class="home-page-comunidades-text">
        <h3>Comunidades</h3>
        <p>Contaremos con la participación de distintas comunidades de Panamá. Podremos conocer más de ellas y así formar parte de estas.</p>
        <a href="<?php echo get_permalink( 97 ); ?>" class="button secondary">Conócelas aquí</a>
      </div>

      <div class="home-page-comunidades-image">
        <?php
          $args = array(
            'post_type'       => 'comunidades',
            'post_status'     => 'publish',
            'posts_per_page'  => 10,
            'order'           => 'ASC',
          );
        
          $comunidades = new WP_Query( $args );
        
          if ( $comunidades->have_posts() ) : while ( $comunidades->have_posts() ) : $comunidades->the_post(); ?>

          <figure class="comunidad-logo">

            <?php the_post_thumbnail(); ?>

          </figure>

          <?php endwhile; endif; ?>

      </div>
    
    </div>

    <div class="home-page-speakers">
    
      <div class="home-page-speakers-gravatars">
      
        <?php
          $speakers_args = array(
            'post_type'       => 'comunidades',
            'post_status'     => 'publish',
            'posts_per_page'  => 5,
            'order'           => 'ASC',
          );

          $speakers = new WP_Query($speakers_args);

          if ( $speakers->have_posts() ) : while ( $speakers->have_posts() ) : $speakers->the_post();

          $correo_de_ponente = get_field('correo_de_ponente');

        ?>

          <figure class="gravatar-ponentes">

            <?php echo get_avatar($correo_de_ponente, 150); ?>

          </figure>

          <?php endwhile; endif; ?>
      
      </div>

      <div class="home-page-speakers-text">
      
          <h3>Ponentes</h3>

          <p>Tendremos la participación de expertos quienes nos presentarán sus comunidades y hablarán de temas muy interesantes.</p>

          <a href="<?php echo get_permalink( 73 ); ?>" class="button secondary">Conócelos aquí</a>
      
      </div>
    
    </div>

</div>

<?php get_footer(); ?>