<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title('|', true, 'left'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

    <div id="container">
    
        <header id="branding" role="banner">
          <div id="inner-header" class="clearfix">
            <div id="site-heading">
                <?php if ( get_theme_mod( 'wp_jurist_logo' ) ) : ?>
                <div id="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'wp_jurist_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></div>
                <?php else : ?>
                <div id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                <?php endif; ?>
            </div>
    
            <nav id="access" role="navigation">
                <h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'wp-jurist' ); ?></h1>
                <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'wp-jurist' ); ?>"><?php _e( 'Skip to content', 'wp-jurist' ); ?></a></div>
                <?php wp_jurist_main_nav(); // Adjust using Menus in Wordpress Admin ?>
            </nav><!-- #access -->
            
    
          </div>
          
        </header><!-- #branding -->
