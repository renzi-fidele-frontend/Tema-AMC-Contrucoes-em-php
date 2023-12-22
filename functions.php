<?php

function add_css()

{
   wp_register_style('first', get_template_directory_uri() . '/build/css/libs.min.css', array(),'1','all');
   wp_enqueue_style( 'first');

   wp_register_style('lib', get_template_directory_uri() . '/style.css', array(),'1','all');
   wp_enqueue_style( 'lib');

}

function add_scripts() 
{
   wp_register_script('scr1', get_template_directory_uri() . '/build/js/libs.min.js', array('jquery'), '1', true);
   wp_enqueue_script ('scr1');

   wp_register_script('scr2', get_template_directory_uri() . '/build/js/script.min.js', array('jquery'), '1', true);
   wp_enqueue_script ('scr2');

}


add_action('wp_enqueue_scripts', 'add_css');
add_action('wp_enqueue_scripts', 'add_scripts');

;?>