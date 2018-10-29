<?php
/**
 * Created by PhpStorm.
 * User: sudipta
 * Date: 10/29/2018
 * Time: 11:42 PM
 */

function consult_cs_js(){

    wp_enqueue_style('flaticon',get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0.0', 'all');
  //  wp_enqueue_style('gfonts',consult_fonts_url(), array(), '1.0.0');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'text-animation', get_template_directory_uri() .'/assets/css/text-animation.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'plugin', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'icons', get_template_directory_uri() . '/assets/css/icons.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'plugin-layers', get_template_directory_uri() . '/rs-plugin/css/layers.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'plugin-settings', get_template_directory_uri() . '/rs-plugin/css/settings.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'consult-menu', get_template_directory_uri() . '/assets/css/menu-css.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'consult-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'consult-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );




    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstraps', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'gmaps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD5r4L_do_V8HjQNhtpJ-98vaf92vMhPik');
    wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/assets/js/gmaps.js', array('jquery'), '1.0.0', false );

    wp_enqueue_script( 'jquery-fancybox.', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-magnifi', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'carousel-min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-lettering', get_template_directory_uri() . '/assets/js/jquery.lettering.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery-textillate', get_template_directory_uri() . '/assets/js/jquery.textillate.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/mixitup.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'chart', get_template_directory_uri() . '/assets/js/chart.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'themepunch-tool', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'themepunch-revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'extension-video', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.video.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'extension-slideanims', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'extension-actions', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.actions.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'extension-layeranimation', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'extension-kenburn', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'extension-navigation', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'extension-migration', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.migration.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'extension-parallax', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'consult-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts','consult_cs_js');