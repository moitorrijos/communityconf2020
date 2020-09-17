<?php

function get_agenda_tabs( $dia, $dia_largo, $dia_corto, $mes_largo, $mes_corto, $dia_dia ) {

	if ( have_rows( $dia ) ) : ?>

	 <button
    type="button"
    id="lengueta-<?php echo $dia; ?>"
    class="lengueta <?php if ( $dia === 'dia_1' ) { echo 'lengueta-activa'; } ?>"
  >

		 <?php while ( have_rows( $dia ) ) : the_row(); ?>

			 <h3>
        <span class="long-month">
          <?php the_sub_field($dia_largo); ?>
        </span>
        <span class="short-month">
          <?php the_sub_field($dia_corto); ?>
        </span>
      </h3>

			 <h4 class="numero-dia"><?php the_sub_field($dia_dia); ?></h4>
       <h4 class="nombre-mes">
        <span class="long-month">
          <?php the_sub_field($mes_largo); ?>
        </span>
        <span class="short-month">
          <?php the_sub_field($mes_corto); ?>
        </span>
      </h4>

		 <?php endwhile; ?>

	 </button>

 <?php endif;
 
}

function get_agenda_content( $seccion_agenda_dia ) {

  if ( have_rows( $seccion_agenda_dia ) ) : ?>

  <div
    id="<?php echo $seccion_agenda_dia; ?>"
    class="agenda <?php if ( $seccion_agenda_dia === 'seccion_agenda_dia_1' ) echo 'agenda-activa'; ?>"
  >

  <?php while ( have_rows( $seccion_agenda_dia ) ) : the_row(); ?>

    <?php if ( have_rows('datos_de_agenda') ) : ?>

      <?php while ( have_rows('datos_de_agenda') ) : the_row(); ?>

      <?php
        $hora_inicio = get_sub_field('hora_inicio');
        $hora_final = get_sub_field('hora_final');              
        $comunidad = get_sub_field('comunidad');
        $seccion = get_sub_field('seccion');
        $titulo_de_charla = get_field('titulo_de_charla', (int)$comunidad );
        $nombre_de_comunidad = get_the_title( (int)$comunidad );
        $descripcion_de_charla = get_field('descripcion_de_charla', (int)$comunidad );
        $correo_de_ponente = get_field('correo_de_ponente', (int)$comunidad );              
        $correo_de_moderador = get_field('correo_de_moderador', (int)$comunidad );
      ?>

      <div class="datos-de-agenda">

        <div class="ponente-moderador">

          <?php

            if ( $correo_de_ponente ) {

              echo get_avatar( $correo_de_ponente );

            }

            if ( $correo_de_moderador ) {
              
              echo get_avatar( $correo_de_moderador );

            }
            
          ?>
        
        </div>

        <div class="datos-charla">

          <div class="horario">
          
            <p>

              <?php echo $hora_inicio; ?>

              -

              <?php echo $hora_final; ?>

            </p>
          
          </div>

          <h2>

            <?php

              if ( $seccion ) {

                echo $seccion;

              } elseif($titulo_de_charla) {

                echo $nombre_de_comunidad . ': ';
                
                echo $titulo_de_charla;
                
              } else {

                echo $nombre_de_comunidad . ': ';

                echo 'Por Anunciar';

              }

            ?>

          </h2>
          
          <?php if ( !$seccion ) : ?>

            <p>
            
              <?php

                if ( $descripcion_de_charla ) {

                  echo $descripcion_de_charla;

                } else {

                  echo 'Por Anunciar';

                }
              
              ?>
            
            </p>

          <?php endif; ?>
        
        </div>

      </div>

  <?php

  endwhile; endif; ?>

  </div>
  
<?php endwhile; endif;
  
}