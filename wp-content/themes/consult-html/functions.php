<?php
/**
 * Created by PhpStorm.
 * User: sudipta
 * Date: 10/29/2018
 * Time: 11:43 PM
 */
require_once(get_template_directory().'/inc/enqueue.php');

function theam_setup(){
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'header_menu' => 'header menu'
    ) );
}

add_action('after_setup_theme','theam_setup');

function notice(){
    register_post_type('my_notice',
    array(
        'labels'=>array(
            'name'=> 'Notice',
            'singular_name'=> 'Notice'
        ),
        'public'=>true,
        'has_archive'=>true,
        'supports'=>array('title','editor','thumbnail')
    )
    );
}


add_action('init','notice');
