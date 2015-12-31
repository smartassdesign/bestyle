<?php

function symposium_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-symposium' );
    return ob_get_clean();
}
add_shortcode( 'symposium', 'symposium_shortcode' );
