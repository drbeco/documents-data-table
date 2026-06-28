<?php

/**
 * The main plugin file for Documents Table with Search & Sort.
 *
 * @wordpress-plugin
 * Plugin Name:     Documents Table with Search & Sort
 * Plugin URI:      https://wordpress.org/plugins/documents-data-table/
 * Description:     Provides a shortcode to show a list of your documents in an instantly searchable & sortable table.
 * Version:         1.6
 * Author:          drbeco, luizcordeirosn
 * Author URI:      https://github.com/drbeco/documents-data-table
 * Text Domain:     documents-data-table
 * Domain Path:     /languages
 *
 * Copyright:       Barn2 Media Ltd
 * License:         GNU General Public License v3.0
 * License URI:     https://www.gnu.org/licenses/gpl.html
 */
namespace Barn2\Plugin\Posts_Table_Search_Sort;

// Prevent direct file access
if ( ! defined( '\ABSPATH' ) ) {
    exit;
}

const PLUGIN_VERSION = '1.6';
const PLUGIN_FILE    = __FILE__;

// Autoloader.
require_once plugin_dir_path( __FILE__ ) . 'autoloader.php';

// Helper function to access the shared plugin instance.
function posts_table_search_sort() {
    return Plugin_Factory::create( PLUGIN_FILE, PLUGIN_VERSION );
}

// Load the plugin.
posts_table_search_sort()->register();