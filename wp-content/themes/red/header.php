<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="meumodal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Receba E-mails com novidades</h4>
      </div>
      <div class="modal-body">
      <p> Para se cadastrar, preencha os campos abaixo: </p>
        <div class="form-modal">
        	<?php echo do_shortcode( '[contact-form-7 id="33" title="Formulário de contato 1"]' ); ?>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<header id="header" role="banner">
	<div class="banner">
	<div class="container-banner">
		<?php

			$id_banner = get_field('imagem_banner', 'option');
			$image_banner = wp_get_attachment_image_src($id_banner, $size = 'full');
			$alt = get_post_meta($id_banner, '_wp_attachment_image_alt', true);
			if ($image_banner) {	

			echo 	'<img class="img-responsive" src="'.$image_banner[0].'" alt="'.$alt.'">';	
		?>
		<?php }else{ ?>
			<img class="img-responsive" src="<?php echo get_template_directory_uri().'/assets/images/banner1.jpg'; ?>">
		<?php } ?>
	</div>
		<div class="container">
			<div class="page-header hidden-xs site-title-home">
				<?php if ( is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php else : ?>
					<div class="site-title h1">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</div>
					<div class="site-description h2">
						<?php bloginfo( 'description' ); ?>
					</div>
				<?php endif ?>

				<?php
					$header_image = get_header_image();
					if ( ! empty( $header_image ) ) :
				?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="img-responsive" src="<?php echo esc_url( $header_image ); ?>" height="<?php esc_attr_e( $header_image->height ); ?>" width="<?php esc_attr_e( $header_image->width ); ?>" alt="" />
					</a>
				<?php endif; ?>
			</div><!-- .site-header-->

			<div id="main-navigation" class="navbar navbar-default menu-top">
				<div class="navbar-header">
					<div class="logo-header hidden-md hidden-lg visible-xs-*">
						<img class="img-responsive" src="<?php echo get_template_directory_uri().'/assets/images/logo.svg'; ?>">
					</div>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<nav class="collapse navbar-collapse navbar-main-navigation barra-menu" role="navigation">
					<div class="col-sm-3 col-xs-3 col-md-3 logo-topo hidden-xs">
						<img class="img-responsive" src="<?php echo get_template_directory_uri().'/assets/images/logo.svg'; ?>">
					</div>
					<div class="col-sm-9 col-xs-9 col-md-9 menu-topo">
					<div class="rede-social">
						<ul class="list-inline">
						<?php
								$facebook = get_field('facebook_link', 'option');
								$linkedin = get_field('linkedin_link', 'option');
							?>
							<li>
								<a href="#" alt="Busca" title="Busca"> <img src="<?php echo get_template_directory_uri().'/assets/images/lupa.png'; ?>"> </a>
 							</li>
							<li>
								<a href="<?php echo $facebook; ?>" target="_blank" alt="Facebook" title="Facebook"> <img src="<?php echo get_template_directory_uri().'/assets/images/face.png'; ?>"> </a>
 							</li>
 							<li>
								<a href="<?php echo $linkedin; ?>" target="_blank" alt="Linkedin" title="Linkedin"> <img src="<?php echo get_template_directory_uri().'/assets/images/linkedin.png'; ?>"> </a>
 							</li>
 							<li>
								<a href="#" class="language" alt="Idioma" title="Idioma"> en </a>
 							</li>
						</ul>
					</div>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav list-inline',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
					</div>
				</nav><!-- .navbar-collapse -->

			</div><!-- #main-navigation-->

		</div><!-- .container-->
	</div>	<!-- .banner-->
	</header><!-- #header -->

	<div id="wrapper" class="container">
		<div class="row">