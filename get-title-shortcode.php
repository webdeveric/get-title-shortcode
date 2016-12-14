<?php
/*
Plugin Name: Get Title Shortcode
Plugin Group: Shortcodes
Plugin URI: http://phplug.in/
Description: Get the title with <code>[gettitle]</code>
Version: 0.1.0
Author: Eric King
Author URI: http://webdeveric.com/
*/

namespace webdeveric\GetTitleShortcode;

require_once 'src/GetTitle.php';

new GetTitle();
