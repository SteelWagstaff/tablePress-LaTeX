<?php
/*
 * Plugin Name: TablePress Quick LaTeX Functionality Plugin
 * Plugin URI: none
 * Description: A plugin that allows users to add Quick LaTeX code to TablePress cells
 * Author: Steel Wagstaff
 * Version: 0.1.1
 * Author URI: https://steelwagstaff.info
 */

//allows Quick LaTeX content to be added to tablepress cells
if ( ! function_exists( 'is_plugin_active_for_network' ) ) {
    require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
}
 
if ( is_plugin_active_for_network( 'plugin-directory/plugin-file.php' ) ) {
  add_filter( 'tablepress_cell_content', 'quicklatex_parser' );
}

else if ( is_plugin_active( 'wp-quicklatex/wp-quicklatex.php' ) ) {  
  add_filter( 'tablepress_cell_content', 'quicklatex_parser' );
} 
