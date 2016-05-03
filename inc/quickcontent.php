<?php

function symposium_shortcode( $attr ) {
	ob_start();
	get_template_part( 'quick/pg-sympo' );
	return ob_get_clean();
}
add_shortcode( 'symposium', 'symposium_shortcode' );


function culture_shortcode( $attr ) {
	ob_start();
	get_template_part( 'quick/pg-culture' );
	return ob_get_clean();
}
add_shortcode( 'culture', 'culture_shortcode' );


function events_shortcode( $attr ) {
	ob_start();
	get_template_part( 'quick/pg-events' );
	return ob_get_clean();
}
add_shortcode( 'events', 'events_shortcode' );


// function bein_img($atts, $content = null) {
//     extract(shortcode_atts(array(
//         "source" => ''
//     ), $atts));
//     return '<image class="blockquote">'.$content.'<footer class="blockquote-footer">'.$source.'</blockquote>';
// }
// add_shortcode( 'beimg', 'bein_img' );


function image_shortcode($atts, $content = null) {
    extract( shortcode_atts( array(
    'name' => '',
    'align' => 'left',
    'ext' => 'jpg',
    'path' => '/wp-content/uploads/',
    'url' => ''
    ), $atts ) );
    $file=ABSPATH."$path$name.$ext";
    if (file_exists($file)) {
        $size=getimagesize($file);
        if ($size!==false) $size=$size[3];
        $output = "<img src='".get_option('siteurl')."$path$name.$ext' alt='$name' $size align='$align' class='align$align img-fluid' />";
        if ($url) $output = "<a href='$url' title='$name' target='_blank'>".$output.'</a>';
        return $output;
    }
    else {
        trigger_error("'$path$name.$ext' image not found", E_USER_WARNING);
        return '';
    }
}
add_shortcode('image','image_shortcode');




//   function add_shortcodes() {
//     $shortcodes = array(
//       'embed-responsive', 
//       'well', 
//     );
//     foreach ( $shortcodes as $shortcode ) {
//       $function = 'bs_' . str_replace( '-', '_', $shortcode );
//       add_shortcode( $shortcode, array( $this, $function ) );
      
//     }
//   }



// function bs_embed_responsive( $atts, $content = null ) {
  
// 	$atts = shortcode_atts( array(
//       "ratio"      => false,
//       "xclass"     => false,
//       "data"       => false
// 	), $atts );
//     $class  = 'embed-responsive ';
//     $class .= ( $atts['ratio'] )       ? ' embed-responsive-' . $atts['ratio'] . ' ' : '';
//     $class .= ( $atts['xclass'] )     ? ' ' . $atts['xclass'] : '';
      
//     $embed_class = 'embed-responsive-item';
//     $tag = array('iframe', 'embed', 'video', 'object');
//     $content = do_shortcode($content);
//     $data_props = $this->parse_data_attributes( $atts['data'] );
//     return sprintf(
//       '<div class="%s"%s>%s</div>',
//       esc_attr( trim($class) ),
//       ( $data_props ) ? ' ' . $data_props : '',
//       $this->scrape_dom_element($tag, $content, $embed_class, '', '')
//     );
    
//   };




//   /*--------------------------------------------------------------------------------------
//     *
//     * bs_well
//     *
//     * @author Filip Stefansson
//     * @since 1.0
//     *
//     * Options:
//     *   size: sm = small, lg = large
//     *
//     *-------------------------------------------------------------------------------------*/
//   function bs_well( $atts, $content = null ) {
// 	$atts = shortcode_atts( array(
//       "size"   => false,
//       "xclass" => false,
//       "data"   => false
// 	), $atts );
      
//     $class  = 'well';
//     $class .= ( $atts['size'] )     ? ' well-' . $atts['size'] : '';
//     $class .= ( $atts['xclass'] )   ? ' ' . $atts['xclass'] : '';
    
//     $data_props = $this->parse_data_attributes( $atts['data'] );
      
//     return sprintf( 
//       '<div class="%s"%s>%s</div>',
//       esc_attr( trim($class) ),
//       ( $data_props ) ? ' ' . $data_props : '',
//       do_shortcode( $content )
//     );
//   };