<?php
/*
Plugin Name: Shortcode Disable
Version: 0.1.0
Plugin URI: http://wordpress.org/extend/plugins/shortcode-disable/
Description: Allows you to set some text inside the shortcode content so that it is shown as text rather than WordPress processing it as a shortcode. 
Author: Fabrizio Lungo
Author URI: http://fabrizio.me.uk/

Copyright 2010 Fabrizio Lungo (email: shortcode-disable@fabrizio.me.uk)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function shortcode_disable($atts, $content) {
	$output		=	"<pre style=\"white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;\" >" . $content . "</pre>";
	return $output;
}

add_shortcode('sd', 'shortcode_disable');
?>