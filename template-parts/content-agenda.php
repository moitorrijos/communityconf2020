<?php

$lenguetas = get_field('lenguetas');

if ( $lenguetas ) :

  ?>
  
    <div class="lenguetas">
    
      <?php if ( have_rows( 'lenguetas' ) ) : ?>

        <?php

          while ( have_rows( 'lenguetas' ) ) : the_row();
        
            get_agenda_tabs(
              'dia_1',
              'nombre_largo_de_dia_1',
              'nombre_corto_de_dia_1',
              'mes_largo_dia_1',
              'mes_corto_dia_1',
              'dia_dia_1'
            );

            get_agenda_tabs(
              'dia_2',
              'nombre_largo_de_dia_2',
              'nombre_corto_de_dia_2',
              'mes_largo_dia_2',
               'mes_corto_dia_2',
               'dia_dia_2'
            );

            get_agenda_tabs(
              'dia_3',
              'nombre_largo_de_dia_3',
              'nombre_corto_de_dia_3',
              'mes_largo_dia_3',
              'mes_corto_dia_3',
              'dia_dia_3'
            );
          
          endwhile; endif;
          
        ?>
    
    </div>

    <?php get_agenda_content( 'seccion_agenda_dia_1' ); ?>

    <?php get_agenda_content( 'seccion_agenda_dia_2' ); ?>

    <?php get_agenda_content( 'seccion_agenda_dia_3' ); ?>

  <?php endif; 