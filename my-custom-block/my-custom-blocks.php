<?php
/**
 * Plugin Name:       My Custom Blocks
 * Description:       Doing some awesome customizations yo!
 * Version:           1.0.0
 * Author:            Your Name
 * Author URI:        https://example.com
 */

 // Enqueue our plugin JS
 function my_custom_blocks_enqueue() {
     wp_enqueue_script(
         'my-custom-blocks-script',
         plugins_url( 'my-custom-blocks.js', __FILE__ ),
         array( 'wp-blocks' )
     );
 }
 add_action( 'enqueue_block_editor_assets', 'my_custom_blocks_enqueue' );

 // Enqueue our plugin CSS
function my_custom_blocks_stylesheet() {
    wp_enqueue_style( 'my-custom-blocks', plugins_url( 'my-custom-blocks.css', __FILE__ ) );
}
add_action( 'enqueue_block_assets', 'my_custom_blocks_stylesheet' );
