
<?php



the_title('<h1>', '</h1>');

the_post_thumbnail();

acf_form(array(
  'post_title' => true,
  'updated_message' => __("Comunidad Actualizada", 'communityconf2020'),
));

?>
