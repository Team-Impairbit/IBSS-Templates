<?php
function landpick_backtotop_options( $metabox = false, $options = array() ){
	$old_options = array(        
        array(
             'id' => 'backtotop',
            'title' => __( 'Back to top Display','landpick' ),
            'desc' => esc_attr__( 'Display in scroll Up back to top','landpick' ),
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'landpick_backtotop_options' 
        ),
	);

	// Filter for option tree to redux options
    $modyfied_option = apply_filters( 'landpick_theme_options', $old_options, 'footer_options' );
    $options = array_merge( $options, $modyfied_option );

    if($metabox){
        return apply_filters( 'landpick/redux_to_metaboxes', $options);
    }else{
        return $options;
    }
}