<?php
/*
 * Plugin Name: TablePress Quick LaTeX Functionality Plugin
 * Plugin URI: none
 * Description: A plugin that allows users to add Quick LaTeX code to TablePress cells
 * Author: Steel Wagstaff
 * Version: 0.1.0
 * Author URI: https://steelwagstaff.info
 */

//allows Quick LaTeX content to be added to tablepress cells
add_filter( 'tablepress_cell_content', 'quicklatex_parser' );
