<?php

/**
 *   Plugin Name:       plugin add css wordpress
 *  Description:        add faile css
 *  Author:             NASER SAID
 */


 add_action('wp_heed', 'Nea_add_custom_css' );

 function  Nea_add_custom_css(){
    $css_url= esc_url( plugins_url( 'css/style.css', __FILE__ ));

    echo "<style rel='stylesheet' href='{$css_url}'></style>";
 }