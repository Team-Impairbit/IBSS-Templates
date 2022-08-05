<?php
/**
 * The VC Functions
 */
add_action( 'vc_before_init', 'landpick_portfolio_templates_shortcode_vc' );
function landpick_portfolio_templates_shortcode_vc( $return = false ) {
    $category = landpick_get_terms( 'portfolio_category', 'slug' );
    $category = ( !$category ) ? array( ) : $category;
    $args = array(
         'icon' => 'landpick-icon',
        'name' => esc_html__( 'Portfolio template', 'landpick' ),
        'base' => 'perch_portfolios',
        'class' => 'landpick-vc',
        'category' => esc_html__( 'Landpick', 'landpick' ),
        'description' => esc_html__( 'Show Portfolio item with isotope, grid etc', 'landpick' ),
        'params' => array(             
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Display type', 'landpick' ),
                'param_name' => 'template',
                'value' => array(
                    __('Isotope style 1', 'landpick') => 'portfolio/isotope1.php',
                    __('Isotope style 2', 'landpick') => 'portfolio/isotope2.php',
                    __('Carousel', 'landpick') => 'portfolio/carousel-loop.php',
                ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Show filter', 'landpick' ),
                'param_name' => 'filter',
                'std' => 'yes',
                'value' => array(
                    __('Yes', 'landpick') => 'yes',
                    __('No', 'landpick') => 'no',
                ),
                'dependency' => array(
                     'element' => 'template',
                    'value' => array(
                    	'portfolio/isotope1.php',
                    	'portfolio/isotope2.php',
                    ),
                ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Image size', 'landpick' ),
                'param_name' => 'img_size',
                'value' => array_flip( landpick_get_image_sizes_Arr() ),
                'description' => esc_html__( 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height)). Leave parameter empty to use "thumbnail" by default.', 'landpick' ),
                'std' => 'landpick-400x--nocrop' 
            ),           
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Item spacing', 'landpick' ),
                'param_name' => 'spacing',
                'std' => 'yes',
                'value' => array(
                    __('Yes', 'landpick') => 'yes',
                    __('No', 'landpick') => 'no',
                ),
                'dependency' => array(
                     'element' => 'template',
                    'value' => array(
                    	'portfolio/isotope1.php',
                    	'portfolio/isotope2.php',
                    ),
                ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Link type', 'landpick' ),
                'param_name' => 'link_type',
                'std' => 'popup',
                'value' => array(
                    __('Popup', 'landpick') => 'popup',
                    __('Link', 'landpick') => 'link',
                ),
                'admin_label' => true 
            ),
            array(
                 'type' => 'number',
                'heading' => esc_html__( 'Posts per page', 'landpick' ),
                'param_name' => 'posts_per_page',
                'value' => 9,
                'min' => -1,
                'max' => '100',
                'step' => '1',
                'description' =>  __('Specify number of items that you want to show. Enter -1 to get all items', 'landpick'),
                'admin_label' => true 
            ),
            array(
                 'type' => 'perch_select',
                'multiple' => 'multiple',
                'heading' => esc_html__( 'Select category', 'landpick' ),
                'param_name' => 'tax_term',
                'value' => landpick_get_terms( 'portfolio_category' ),
                'group' => esc_html__('Portfolio settings', 'landpick'),
                'description' => 'Default all category are selected' 
            ),
            array(
                    'type' => 'perch_select',
                    'heading' => esc_html__('Active category', 'landpick'),
                    'param_name' => 'active',
                    'value' =>  array_merge(array('' => 'See All'), $category),
                    'group' => esc_html__('Portfolio settings', 'landpick'),
                     'dependency' => array(
                         'element' => 'template',
                        'value' => array(
                            'portfolio/isotope1.php',
                            'portfolio/isotope2.php',
                        ),
                    ),
                ),           
            array(
                 'type' => 'textfield',
                'heading' => esc_html__( 'Post ID\'s', 'landpick' ),
                'param_name' => 'id',
                'value' => '',
                'description' => 'Enter comma separated ID\'s of the posts that you want to show',
                'group' => esc_html__('Portfolio settings', 'landpick'),
            ),
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Taxonomy term operator', 'landpick' ),
                'param_name' => 'tax_operator',
                'description' => 'IN - posts that have any of selected categories terms<br/>NOT IN - posts that is does not have any of selected terms<br/>AND - posts that have all selected terms',
                'value' => array(
                     'IN' => 'IN',
                    'NOT IN' => 'NOT IN',
                    'AND' => 'AND' 
                ),
                'group' => esc_html__('Portfolio settings', 'landpick'),
            ),
            array(
                 'type' => 'textfield',
                'heading' => esc_html__( 'Authors', 'landpick' ),
                'param_name' => 'author',
                'description' => 'Enter here comma-separated list of author\'s IDs. Example: 1,7,18',
                'group' => esc_html__('Portfolio settings', 'landpick'),
            ),
            array(
                 'type' => 'perch_select',
                'heading' => esc_html__( 'Order', 'landpick' ),
                'param_name' => 'order',
                'description' => 'Posts order',
                'value' => array(
                     'desc' => esc_html__( 'Descending', 'landpick' ),
                    'asc' => esc_html__( 'Ascending', 'landpick' ) 
                ),
                'group' => esc_html__('Portfolio settings', 'landpick'),
            ),
            array(
                 'type' => 'perch_select',
                'heading' => esc_html__( 'Order by', 'landpick' ),
                'param_name' => 'orderby',
                'description' => esc_html__( 'Order posts by', 'landpick' ),
                'selected' => 'date',
                'value' => array(
                     'none' => esc_html__( 'None', 'landpick' ),
                    'id' => esc_html__( 'Post ID', 'landpick' ),
                    'author' => esc_html__( 'Post author', 'landpick' ),
                    'title' => esc_html__( 'Post title', 'landpick' ),
                    'name' => esc_html__( 'Post slug', 'landpick' ),
                    'date' => esc_html__( 'Date', 'landpick' ),
                    'modified' => esc_html__( 'Last modified date', 'landpick' ),
                    'parent' => esc_html__( 'Post parent', 'landpick' ),
                    'rand' => esc_html__( 'Random', 'landpick' ),
                    'comment_count' => esc_html__( 'Comments number', 'landpick' ),
                    'menu_order' => esc_html__( 'Menu order', 'landpick' ),
                    'meta_value' => esc_html__( 'Meta key values', 'landpick' ) 
                ),
                'group' => esc_html__('Portfolio settings', 'landpick'),
            ) 
        ) 
    );

    $args = apply_filters( 'landpick_vc_map_filter', $args, $args['base'] );
    if( $return ) {
        return landpick_vc_get_params_value($args);
    }else{
        vc_map( $args );
    }
}

