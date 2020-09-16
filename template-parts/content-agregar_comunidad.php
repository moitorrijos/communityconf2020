<?php

  acf_form(
    array(
      'post_id' => 'new_post',
      'new_post' => true,
      'updated_message' => "La comunidad se ha colocado en cola para ser creada. Contacta al administrador del sitio para que le de de alta. Gracias por tu colaboración.",
      'new_post'      => array(
        'post_type'     => 'comunidades',
        'post_status'   => 'draft'
      ),
      'post_title' => true,
      'submit_value' => __("Agregar Comunidad", 'acf'),
    ) 
  );