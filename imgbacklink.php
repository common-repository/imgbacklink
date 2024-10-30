<?php
/*
Plugin Name: Image Backlinker
Plugin URI: http://ypraise.com/2011/12/wordpress-plugin-image-backlink-generator/
Description: When people right click on your images to get details a box pops up and proivdes both html link and bb code links options.
Version: 1.1
Author: Kevin Heath
Author URI: http://ypraise.com
License: GPL
*/
/*  Copyright 2010  Kevin Heath  (email : kevin@ypraise.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* set up the javascript call */

function imgbacklink_script() {
   wp_enqueue_script('hl2l',
          plugins_url('/hl2l.js', __FILE__)
     );
}    
 
add_action('wp_enqueue_scripts', 'imgbacklink_script');


/* set up the mouse event for image use */

function imgbacklink($html, $id , $alt, $title){   
 list( $img_src, $width, $height ) = image_downsize($id, $size);     $hwstring = image_hwstring($width, $height); 
$html = '<img src="' . esc_attr($img_src) . '" alt="' . esc_attr($alt) . '" title="' . esc_attr($title).'" '.$hwstring.'class="'.$class.'" . onmouseup="hl2l(event);"  . />';  
return $html; 
} 

add_filter('get_image_tag','imgbacklink',10,5); 


?>