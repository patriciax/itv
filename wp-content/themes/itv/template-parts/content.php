<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package itv
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				itv_posted_on();
				itv_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php itv_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'itv' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'itv' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
  <div class="content_shape--footer">
	<div class="shape_bottom"></div>
 </div>


	<div class="row">
    <div class="col-lg-4">
      <div class="content__footer">
      <h3>Itvcitaprevia.es</h3>
          <p>Contacto@itvcitaprevia.es</p>
          <span>
          Siguenos:
          <div class="">
            <ul class="main-prenavbar__rrss d-flex align-items-center">
              <?php if (get_theme_mod('linkedin')!=NULL) {?>
              <li>
                <a href="<?php echo get_theme_mod('linkedin'); ?>" target="_blank">
                <i class="fa fa-facebook-f" aria-hidden="true"></i>
                </a>
              </li>
              <?php } ?> 
              <?php if (get_theme_mod('facebook')!=NULL) {?>
              <li>
                <a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
              <?php } ?>  
            </ul>
          </div>
          </span>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="content__footer">
      <h3>Pedir cita</h3>
      <a class="btn__buscador btn__buscador--lorem" href="#">Pide tu cita previa</a>
      </div>
   

    </div>

    <div class="col-lg-4">
      <ul>
        <li><a href="#">Itv</a></li>
        <li><a href="">FAQS</a></li>
        <li><a href="">Aviso legal y cookies</a></li>
      </ul>
    </div>
	</div>

		<?php itv_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
