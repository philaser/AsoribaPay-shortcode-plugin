<?php

/*

Plugin Name: AsoribaPay shortcode plugin

Plugin URI: http://www.fillthislater.com/asoribapay

Description: A plugin that allows you to generate a dynamic AsoribaPay button
Version: 0.1

Author: @Philemon

Author URI:	http://www.fillthislater.com

License: GPLv3

*/

add_action('init','asoribapay');

function asoribapay( $atts ) {
    $a = shortcode_atts( array(
        'button_text' => '',
        'pub_key' => '',
        'amount' => '',
        'tokenize' => '',
        'order_id' => '',
        'product_name' => '',
        'product_description' => '',
        'callback' => '',
        'order_image_url' => '',
        'sharable' => '',
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'phone_number' => ''
    ), $atts );

    return '<span id="asoribaWidget">
        
    <Script src="https://s3.amazonaws.com/asoribapay-widget/widget.js?version=0.6"
            button-text= "' . $atts['button_text'] . '" 
            pub-key= "' . $atts['pub_key'] . '"
            amount= "' . $atts['amount'] . '" 
            tokenize= "' . $atts['tokenize'] . '"
            order-id= "' . $atts['order_id'] . '"
            product-name =  "' . $atts['product_name'] . '"
            product-description =  "' . $atts['product_description'] . '"
            callback =  "' . $atts['callback'] . '"
            order-image-url =  "' . $atts['order_image_url'] . '"
            sharable =  "' . $atts['sharable'] . '"
            first-name =  "' . $atts['first_name'] . '"
            last-name =  "' . $atts['last_name'] . '"
            email =  "' . $atts['email'] . '"
            phone-number = "' . $atts['phone_number'] . '"
                        ></Script>
</span>';
}
add_shortcode( 'asoribapay', 'asoribapay' );



