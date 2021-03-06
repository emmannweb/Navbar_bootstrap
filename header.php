<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-bootstrap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light nav-bg-color ">
 	   <div class="container">


				<div class="site-branding navbar-brand">
											<!--   output the custom logo when site title and site description is not active-->
							<?php
							if( get_custom_logo() ) {
									the_custom_logo();
							} elseif ( is_front_page() || is_home() ) { ?>

									<h1 class="site-title">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
									</h1>
									<?php
									$description = get_bloginfo( 'description', 'display' );
							} else {?>

									<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
									$description = get_bloginfo( 'description', 'display' );
							}

							if ( ( isset($description) && $description) || is_customize_preview() ) {
									?>
									<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
									<?php
							}
							?>
					</div><!-- .site-branding -->

			         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarheader" aria-controls="navbarheader" aria-expanded="false" aria-label="Toggle navigation">
			           <span class="navbar-toggler-icon"></span>
			         </button>

             <?php
              wp_nav_menu( array(
           	'theme_location'  => 'menu-1',
           	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
           	'container'       => 'div',
           	'container_class' => 'collapse navbar-collapse',
           	'container_id'    => 'navbarheader',
           	'menu_class'      => 'navbar-nav ml-auto',
           	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
           	'walker'          => new WP_Bootstrap_Navwalker(),
             ) );
             ?>
 		 	 	</div>
    </nav>


	</header><!-- #masthead -->

	<div id="content" class="site-content container pt-50">
