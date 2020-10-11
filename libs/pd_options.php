<?php



function pd_options() {
    
    register_setting('pd_google_maps_options_group', 'pd_google_maps_options');

}


add_action('admin_init', 'pd_options');

