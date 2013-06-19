<?php
/*
Plugin Name: Search By Category
Plugin URI: https://github.com/JonathanWolfe/Search-By-Category/
Description: Reconfigures search results to return results based on selected category(ies) of the posts.
Version: 3.0.0
Author: Jon Wolfe
Author URI: https://github.com/JonathanWolfe
*/

class SBC {
    
    $SBC_settings['focus']					= 'In All Categories';
    $SBC_settings['hide_empty']				= '1'; // 1 means true
    $SBC_settings['excluded_cats']			= array();
    $SBC_settings['search_text']			= 'Search For...';
    $SBC_settings['exclude_child']			= '0'; // 0 means false
    $SBC_settings['raw_excluded_cats']		= array();
    $SBC_settings['sbc_style']				= '1';
    $SBC_settings['inall_exclude']          = array();
    
    __init() {
        if( get_option('sbc-options') ) { // already exists
            private var $sbc_settings = get_option('sbc-options');
        }
        else if ( get_option('sbc-settings') ){ // old version
            delete_option('sbc-settings');
            add_option('sbc-options');
        }
        else { // fresh install
            add_option('sbc-options');
        }
    }
    
    

}