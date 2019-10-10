<?php
/*
* Plugin Name: K1r1ndey
* Plugin URI: https://
* Description: Плагин будет добавлять бордеры для всех картинок
* Version: 1.3.2
* Author: Kotmonstr
* Author URI: https://m******
* License: GPLv2 or later
*/
function image_scripts() {
    wp_enqueue_style( 'image-css', plugin_dir_url( __FILE__ ) . 'css/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'image_scripts',999 );