<?php
function landpick_portfolio_options( $options = array( ) ) {
    $options = array(        
         array(
             'id' => 'portfolio_archive',
            'label' => 'Landpick Archive page',
            'desc' => sprintf( __( 'If archive page is not working, then save again <a href="%s" target="_blank">permalink settings</a>, For best performance use Pretty permalink(Example: Post name, Day and name etc)', 'landpick' ), admin_url( 'options-permalink.php' ) ),
            'std' => '',
            'type' => 'page-select',
            'section' => 'portfolio_options',
            'rows' => '' 
        ),

        array(
             'id' => 'portfolio_single_layout',
            'label' => esc_attr__( 'Single portfolio layout', 'landpick' ),
            'desc' => '',
            'std' => 'full',
            'type' => 'radio-image',
            'section' => 'portfolio_options',
            'operator' => 'and',
            'choices' => array(
                 array(
                     'value' => 'full',
                    'label' => esc_attr__( 'Full width', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/full-width.png' 
                ),
                array(
                     'value' => 'ls',
                    'label' => esc_attr__( 'Left sidebar', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/left-sidebar.png' 
                ),
                array(
                     'value' => 'rs',
                    'label' => esc_attr__( 'Right sidebar', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/right-sidebar.png' 
                ) 
            ) 
        ),
        array(
            'id'          => 'portfolio_single_post_title_tag',
            'label'       => esc_attr__( 'Single post title tag', 'landpick' ),
            'std'         => 'h3',
            'type'        => 'select',           
            'section'     => 'portfolio_options',
            'operator'    => 'and',
            'choices'     => array(                 
              array(
                'value'       => 'h1',
                'label'       => esc_attr__( 'H1', 'landpick' ),
              ),
              array(
                'value'       => 'h2',
                'label'       => esc_attr__( 'H2', 'landpick' ),
              ),
              array(
                'value'       => 'h3',
                'label'       => esc_attr__( 'H3', 'landpick' ),
              ),
              array(
                'value'       => 'h4',
                'label'       => esc_attr__( 'H4', 'landpick' ),
              ),
              array(
                'value'       => 'h5',
                'label'       => esc_attr__( 'H5', 'landpick' ),
              ),
              array(
                'value'       => 'h6',
                'label'       => esc_attr__( 'H6', 'landpick' ),
              )
            )
        ),
        array(
            'id'          => 'portfolio_single_post_title_tag_size',
            'label'       => esc_attr__( 'Single post title tag size', 'landpick' ),
            'std'         => 'xs',
            'type'        => 'select',           
            'section'     => 'portfolio_options',
            'operator'    => 'and',
            'choices'     => array(                 
              array(
                'value'       => '',
                'label'       => esc_attr__( 'Initial', 'landpick' ),
              ),
              array(
                'value'       => 'xl',
                'label'       => esc_attr__( 'Extra large', 'landpick' ),
              ),
              array(
                'value'       => 'lg',
                'label'       => esc_attr__( 'Large', 'landpick' ),
              ),
              array(
                'value'       => 'md',
                'label'       => esc_attr__( 'Medium', 'landpick' ),
              ),
              array(
                'value'       => 'sm',
                'label'       => esc_attr__( 'Small', 'landpick' ),
              ),
              array(
                'value'       => 'xs',
                'label'       => esc_attr__( 'Extra small', 'landpick' ),
              )
            )
        ),
        array(
             'id' => 'img_meta',
            'label' => __( 'Meta style', 'nextapp' ),
            'desc' => '',
            'std' => 'category',
            'type' => 'select',
            'section' => 'portfolio_options',
            'choices' => array(
                array( 'label' => 'Date',  'value' => 'date' ),
                array( 'label' => 'Category',  'value' => 'category' ),
            )
        ),
        array(
             'id' => 'portfolio_single_layout_sidebar',
            'label' => esc_attr__( 'Single portfolio Sidebar', 'landpick' ),
            'desc' => '',
            'std' => '',
            'type' => 'sidebar-select',
            'section' => 'portfolio_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => 'portfolio_single_layout:not(full)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'display_single_related_portfolio',
            'label' => esc_attr__( 'Related gallery', 'landpick' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'portfolio_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'related_portfolio_title',
            'label' => esc_attr__( 'Related portfolio title', 'landpick' ),
            'desc' => '',
            'std' => 'Related portfolio',
            'type' => 'text',
            'section' => 'portfolio_options',
            'condition' => 'display_single_related_portfolio:is(on)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'related_portfolio',
            'label' => esc_attr__( 'Related portfolio display', 'landpick' ),
            'min_max_step' => '-1,20,1',
            'std' => 3,
            'type' => 'numeric-slider',
            'section' => 'portfolio_options',
            'condition' => 'display_single_related_portfolio:is(on)',
            'operator' => 'and' 
        ),            
        
    );
    return apply_filters( 'landpick_theme_options', $options, 'portfolio_options' );
}
