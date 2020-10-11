<?php

/**
*
* Plugin Name: PD Google Maps
* Description: To jest plugin do dodawania mapy google
* Version: 1.0
* Author: Piotr Deja
*
**/



// Global Options


$pd_google_map = get_option('pd_google_maps_options');


// Load Scripts

require_once( plugin_dir_path(__FILE__) . 'libs/pd_scripts.php');



// Load Admin Content

require_once(plugin_dir_path(__FILE__) . 'libs/pd_content.php');



// Load Options Page

require_once(plugin_dir_path(__FILE__) . 'libs/pd_options.php');



// Output FrontEnd

require_once(plugin_dir_path(__FILE__) . 'libs/functions.php');