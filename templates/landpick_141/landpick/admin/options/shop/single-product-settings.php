<?php
function landpick_single_product_options( $metabox = false, $args = array( ) ) {
	$options = array();

	$options = array(
        array(
             'id' => 'single_product_header',
            'label' => __( 'Single product header', 'landpick' ),
            'desc' => '',
            'std' => 'off',
            'type' => 'on-off',
            'section' => 'woo_options' 
        ),
        array(
             'id' => 'product_layout',
            'label' => __( 'Product layout', 'landpick' ),
            'desc' => '',
            'std' => 'rs',
            'type' => 'radio-image',
            'section' => 'woo_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => '',
            'operator' => 'and',
            'choices' => array(
                 array(
                     'value' => 'full',
                    'label' => __( 'Full width', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/full-width.png' 
                ),
                array(
                     'value' => 'ls',
                    'label' => __( 'Left sidebar', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/left-sidebar.png' 
                ),
                array(
                     'value' => 'rs',
                    'label' => __( 'Right sidebar', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/right-sidebar.png' 
                ) 
            ) 
        ),
        array(
            'id'          => 'related_product_single_post_title_tag',
            'label'       => esc_attr__( 'Single products title tag', 'landpick' ),
            'std'         => 'h3',
            'type'        => 'select',           
            'section'     => 'woo_options',
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
            'id'          => 'related_product_single_post_title_tag_size',
            'label'       => esc_attr__( 'Single products title tag size', 'landpick' ),
            'std'         => 'xs',
            'type'        => 'select',           
            'section'     => 'woo_options',
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
             'id' => 'product_layout_sidebar',
            'label' => __( 'Product Sidebar', 'landpick' ),
            'desc' => '',
            'std' => 'sidebar-product',
            'type' => 'sidebar-select',
            'section' => 'woo_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => 'product_layout:not(full)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'single_image_width',
            'label' => __( 'Single Product Image Width', 'landpick' ),
            'desc' => __( 'This size used in single product page.', 'landpick' ),
            'std' => '600',
            'type' => 'numeric-slider',
            'section' => 'woo_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '400,1200,5',
            'class' => '',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'single_image_height',
            'label' => __( 'Single Product Image height', 'landpick' ),
            'desc' => __( 'This size used in single product page.', 'landpick' ),
            'std' => '700',
            'type' => 'numeric-slider',
            'section' => 'woo_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '400,1000,5',
            'class' => '',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'related_product_display',
            'label' => __( 'Related product show in single product', 'landpick' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'woo_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'related_product_title',
            'label' => __( 'Related products title', 'landpick' ),
            'desc' => '',
            'std' => 'Keep Shopping: Related Products',
            'type' => 'text',
            'section' => 'woo_options',
            'condition' => 'related_product_display:is(on)' 
        ),
        array(
             'id' => 'related_product_loop_columns',
            'label' => __( 'Related Products column', 'landpick' ),
            'desc' => '',
            'std' => '3',
            'type' => 'numeric-slider',
            'section' => 'woo_options',
            'min_max_step' => '1,4,1',
            'condition' => 'related_product_display:is(on)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'related_products_per_page',
            'label' => __( 'Related Products display', 'landpick' ),
            'desc' => '',
            'std' => '3',
            'type' => 'numeric-slider',
            'section' => 'woo_options',
            'min_max_step' => '2,12,1',
            'condition' => 'related_product_display:is(on)',
            'operator' => 'and' 
        ),
        
    );
    $options = apply_filters( 'landpick_theme_options', $options, 'blog_options' );

	if($metabox){
        return apply_filters( 'landpick/redux_to_metaboxes', $options);
    }else{
        return $options;
    }
}