<?php

function add_my_scripts() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom/main.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'add_my_scripts');
?>
