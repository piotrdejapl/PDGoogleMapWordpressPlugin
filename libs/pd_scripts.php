<?php





function pd_scripts_js() {
    
    wp_enqueue_script('pd_script', plugins_url() . '/pd-google-maps/js/pd_scripts.js', array(), true);
    wp_enqueue_style('pd_style', plugins_url() . '/pd-google-maps/css/pd_google_maps_front.css');    
}

add_action('wp_enqueue_scripts', 'pd_scripts_js');




function pd_scripts_css() {
    
    wp_enqueue_style('pd_style', plugins_url() . '/pd-google-maps/css/pd_google_maps.css');
}

add_action('admin_enqueue_scripts', 'pd_scripts_css');