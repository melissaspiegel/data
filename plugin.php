<?php
/**
 * Plugin Name:       Blocks Course Plugin
 * Description:       Plugin for blocks course.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Ali Alaa
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       blocks-course
 *
 */

function blocks_course_plugin_enqueue_assets() {

    $asset_file = include(plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

    wp_enqueue_script( 'blocks-course-plugin-script', plugins_url('build/index.js', __FILE__), $asset_file['dependencies'], $asset_file['version']);

}

add_action( 'enqueue_block_editor_assets', 'blocks_course_plugin_enqueue_assets' );