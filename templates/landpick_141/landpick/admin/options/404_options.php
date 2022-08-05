<?php
function landpick_404_options( $options = array( ) ) {
    $options = array(
          array(
             'id' => '404_image',
            'label' => esc_attr__( 'Image', 'landpick' ),
            'desc' => '',
            'std' => LANDPICK_URI . '/images/404-error.jpg',
            'type' => 'upload',
            'section' => '404_options',
            'condition' => '',
            'operator' => 'and' 
        ),         
        array(
             'id' => '404_title',
            'label' => esc_attr__( 'Title', 'landpick' ),
            'std' => 'Oops! It looks like you are lost ...!',
            'type' => 'text',
            'section' => '404_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => '404_content',
            'label' => esc_attr__( '404 Content', 'landpick' ),
            'desc' => '',
            'std' => '',
            'type' => 'textarea',
            'section' => '404_options',
            'condition' => '',
            'operator' => 'and' 
        ),
         array(
             'id' => 'button_text',
            'label' => esc_attr__( 'Button Text', 'landpick' ),
            'std' => 'Go Back To Home',
            'type' => 'text',
            'section' => '404_options',
            'condition' => '',
            'operator' => 'and' 
        ), 
    );
    return apply_filters( 'landpick_theme_options', $options, '404_options' );
}
?>