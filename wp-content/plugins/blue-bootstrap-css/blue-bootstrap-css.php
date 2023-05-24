<?php

/**
 * Plugin Name: Blue Beetle Bootstrap Plugin
 * Description: Adding bootstrap to the plugin
 * Version: 1.0
 * Author: Wandumi Munandi Sichali
 * Author URI: https://www.linkedin.com/in/wandumi-munandi-sichali-a83771133/
 */

function blue_beetle_include_bootstrap()
{

    wp_enqueue_style('blue_beetle_bootrtrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'blue_beetle_include_bootstrap');
