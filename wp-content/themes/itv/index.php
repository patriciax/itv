<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package itv
 */

get_header();
?>

<?php
    get_template_part( 'template-parts/banner', get_post_type() );
  get_template_part( 'template-parts/cita', get_post_type() );
  get_template_part( 'template-parts/cita-previa', get_post_type() );
  get_template_part( 'template-parts/parallax', get_post_type() );
  get_template_part( 'template-parts/call-service', get_post_type() );
  get_template_part( 'template-parts/servicios', get_post_type() );
  get_template_part( 'template-parts/buscador', get_post_type() );
  get_template_part( 'template-parts/section', get_post_type() );
  get_template_part( 'template-parts/consultas-populares', get_post_type() );
  get_template_part( 'template-parts/blog', get_post_type() );
  get_template_part( 'template-parts/content', get_post_type() );


?>



<?php
// get_sidebar();
get_footer();
