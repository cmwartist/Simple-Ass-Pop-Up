<?php
/**
* Plugin Name: Wong's Simple Ass Pop Up
* Plugin URI: https://genmagency.com
* Description: This plugin is being built because other plugins are overly complicated and cost money to do something simple, dammit.
* Version: 0.2
* Author: Chris Wong
* Author URI: https://lstreetstudio.com
*/

add_action( 'wp_enqueue_scripts', 'spu_add_scripts' );
add_action('wp_footer', 'addSimplePopUp');

//enqueue script and style
function spu_add_scripts() {
    wp_enqueue_script('spu_script' , plugins_url('simple-pop-up-script.js', __FILE__), array( 'jquery' ));
    wp_enqueue_style('spu_style' , plugins_url('simple-pop-up-style.css', __FILE__));
}

//spit out html
function addSimplePopUp(){
    if(is_front_page):
    ?>
    <!-- Do html sturff -->
    <div id="simple-pop-up" class="hidden">
        <p class="simple-pop-up-close">x</p>
        <a class="simple-pop-up-link" href="sms://+14053764466?body=I%27d%20like%20a%20free%20inspection!%20Please%20contact%20me.">Send us a text!</a>
    </div>

    <?php endif;
}

