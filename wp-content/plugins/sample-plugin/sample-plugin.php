<?php
/*
Plugin Name: Sample Plugin
Plugin URI: https://www.bc.fi
Description: This print out the hello world message in login page
Version: 0.1.0
Author: The sample plugin Team
Author URI: http://health-check-team.example.com
Text Domain: health-check
Domain Path: /languages

This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

add_action('login_head', 'dip_hello_world');
add_action('login_head', 'dip_remove_shake_js');

function dip_hello_world(){
    echo 'hello world';
}
/**
 * remove wp_shake_js from the login page
 * to disable shaking animation of login panel
 */
function dip_remove_shake_js(){
    remove_action( 'login_head', 'wp_shake_js', 12 );
}

add_action('login_head', 'take_out_trash'); // default priority value is 10, even when its not define
add_action('login_head', 'feed_the_cat', 10);
add_action('login_head', 'do_groceries', 10);
add_action('login_head', 'make_breakfast', 7);

function dip_take_out_trash(){
    remove_action( 'login_head', 'take_out_trash');
}

add_filter('login_headerurl', 'dip_modify_headerurl');
/**
 * return the replacement headerurl
 */
function dip_modify_headerurl(){
    return 'www.bc.fi';
}

add_filter('login_errors', 'dip_modify_error_message');
/**
 * modify the error message so that it wouldn't review
 * confidential info by mistake
 */
function dip_modify_error_message(){
    return ' you can always come back later';
}


add_action('login_enqueue_scripts', 'dip_modify_stylesheet_loginpage');

function dip_modify_stylesheet_loginpage(){
    wp_enqueue_style('inject-custom-style', plugin_dir_url(__file__) . 'css/custom-stylesheet.css');
}