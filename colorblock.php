<?php
/**
 * Plugin Name: Color Block
 * Plugin URI: https://www.example.com
 * Description: Insert a color block image
 * Version: 0.1
 * Text Domain: colorblock
 * Author: David Gostin
 * Author URI: https://www.example.com
 */

function colorblock($atts) {

	extract(shortcode_atts(array(
	'width'=>800, 
	'height'=>10,
	'r'=>128,
	'g'=>128,
	'b'=>128
	), $atts));


	$image_url = plugins_url() . '/colorblock/image.php';

	$content = '<img src="' . $image_url . "?width=$width&height=$height&r=$r&g=$g&b=$b" . '" />';

	return $content;

}

add_shortcode('cb', 'colorblock');