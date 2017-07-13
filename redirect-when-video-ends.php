<?php
/*
Plugin Name: Redirect when Video Ends
Plugin URI: https://wordpress.org/plugins/redirect-when-video-ends/
Description: A shortcode that allows you to embed an HTML5 video and redirect the page when the video is over
Version: 1.1
Author: Ethan Luis McDonough
Author URI: http://www.ethanmcdonough.com/
License: GPLv2 or later
Text Domain: redirect-when-video-ends
*/

function redOnVidFinish($atts) {
   $a = shortcode_atts(
           array(
              "controls" => "no", 
              "autoplay" => "no", 
              "muted" => "no", 
              "src" => "",
              "link" => "",
              "target" => "_self", 
              "poster" => "",
              "class" => "",
              "id" => ""
           ), 
           $atts
      );
   
   $src = ($a['src'] != "") ? "src=\"" . $a['src'] ."\" " : "";
   $poster = ($a['poster'] != "") ? "poster=\"" . $a['poster'] ."\" " : "";
   $class = ($a['class'] != "") ? "class=\"" . $a['class'] ."\" " : "";
   $id = ($a['id'] != "") ? "id=\"" . $a['id'] ."\" " : "";
   $autoplay = ($a['autoplay'] == "no") ? "" : "autoplay ";
   $muted = ($a['muted'] == "no") ? "" : "muted ";
   $controls = ($a['controls'] == "no") ? "" : "controls ";
   $target = $a['target'];
   $link = ($a['autoplay'] != "") ? "onended=\"window.open('" . $a['link']. "', '" . $target . "');\"" : "";


   return "<video " . $muted . $autoplay . $controls . $src . $poster . $link . $class . $id . "></video>";
}

add_shortcode( 'redirvid', 'redOnVidFinish' );
