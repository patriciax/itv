<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package itv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/Favicon.png" rel="shortcut icon" type="image/png" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css" rel="stylesheet">

  <!-- <link href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css" rel="stylesheet"> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'itv' ); ?></a> -->

<div class="top_nav container">
    <div class="site-branding">
      <?php
      the_custom_logo();
      if ( is_front_page() && is_home() ) :
        ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
      else :
        ?>
        <!-- <a class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
        <?php
      endif;
      $itv_description = get_bloginfo( 'description', 'display' );
      if ( $itv_description || is_customize_preview() ) :
        ?>
        <p class="site-description"><?php echo $itv_description; /* WPCS: xss ok. */ ?></p>
      <?php endif; ?>
    </div><!-- .site-branding -->
    <p> <?php echo get_theme_mod('frase'); ?></p>
  <ul class="main-prenavbar__rrss d-flex align-items-center">
  <div class="content-nav icon-nav">
                <form>
                    <div class="search-wrapper">
                        <input class="search-input" type="text" placeholder="Search" /><i class="fa fa-search"></i>
                    </div>
                </form>
            </div>    <?php if (get_theme_mod('linkedin')!=NULL) {?>
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
    <li>  <a href=""><i class="fa fa-question" aria-hidden="true"></i></a></li>        
  </ul>
</div>
<!-- fixed-top navbar-fixed-js -->

<header class="">
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<div class="main-brand__top">
			
			</div>
			<div class="main-brand__fixed">
			<!-- <div class="main-brand">
				<a class="navbar-brand" href="#">
				<img id="iso" src="assets/img/logo_2@2x.png">
				</a>
			</div> -->
			</div>
			<div class="main-brand brand-responsive">
			<!-- <a class="navbar-brand" href="#">
				<img id="iso" src="assets/img/logo_2@3x.png">
			</a> -->
			<button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas"
				type="button">
				<span class="hamburger-box"></span> 
				<span class="hamburger-inner"></span>
			</button>
			</div>
			<div class="navbar-collapse offcanvas-collapse">
			<div class="menu">
					<?php
					wp_nav_menu( array(
						'menu_class' => 'navbar-nav ',   
						'theme_location' => 'menu-1',
						'container_class' => 'navbar-collapse offcanvas-collapse',
						'menu_id'        => 'primary-menu',
					) );
					?>
			</div>
			</div>
    </div>
    
	</nav>
</header>

	<div id="content" class="site-content">
