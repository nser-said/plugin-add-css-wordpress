<?php

/**
 *   Plugin Name:       plugin add css wordpress
 *  Description:        add faile css
 *  Author:             NASER SAID
 */


 add_action('wp_footer', 'Nea_add_custom_css' );

 function  Nea_add_custom_css(){
    $css_url=esc_url( plugins_url( 'main.js', __FILE__ ));

    echo " <style rel='stylesheet' href='{ $css_url}'></style>";
 }