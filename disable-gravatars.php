<?php

/*
Plugin Name: Disable Gravatars
Plugin URI: https://github.com/tswartz-vertax/disable-gravatars
Description: Disable all gravitars called with the get_avatar function
Version: 1.0.0
Author: Taylor Swartz
Author URI: https://github.com/tswartz-vertax/
License: GPL2
*/

add_filter('get_avatar', function() { return false; }, 1, 2);