<?php
if(class_exists('PerchVcMap')):
/*
Element Description: VC Title area
*/
 
// Element Class 
class LandpickTeamTemplate extends PerchVcMap {
     
    private $base = 'landpick_team_template';

    private $title = 'Team template';
    
    function __construct() {
        // vc map inits
        add_action( 'init', array( $this, 'vc_mapping' ) );

        // Shortcode filter
        add_filter( $this->base, array( $this, 'landpick_team_template_output' ), 30, 2 ); 
        add_filter( $this->base.'_slide', array( $this, 'landpick_team_template_slide_output' ), 30, 2 ); 
    }

    public function team_template_args(){
        $array = array(
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Display type', 'landpick' ),
                'param_name' => 'template',
                'value' => array(
                     'Default' => 'team/default-loop.php',
                     'Carousel' => 'team/carousel-loop.php',
                ),
                'std' => 'team/default-loop.php',
                'admin_label' => true 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Image size', 'landpick' ),
                'param_name' => 'image_size',
                'value' => array_flip( landpick_get_image_sizes_Arr() ),
                'description' => esc_html__( 'Choose image size', 'landpick' ),
                'std' => 'landpick-800x1000-crop' 
            ),           
            array(
                 'type' => 'number',
                'heading' => esc_html__( 'Team per page', 'landpick' ),
                'param_name' => 'posts_per_page',
                'value' => '4',
                'min' => '-1',
                'max' => '100',
                'step' => '1',
                'description' => 'Specify number of team that you want to show. Enter -1 to get all team',
                'admin_label' => true 
            ),
            array(
                'type' => 'number',
                'heading' => esc_html__( 'Column', 'landpick' ),
                'param_name' => 'column',
                'value' => '3',
                'min' => '2',
                'max' => '4',
                'step' => '1',               
            ),                        
        );

        return $array;
    }

    public function team_query_args(){
        $array = array(
            array(
                 'type' => 'textfield',
                'heading' => esc_html__( 'Post ID\'s', 'landpick' ),
                'param_name' => 'id',
                'value' => '',
                'description' => 'Enter comma separated ID\'s of the team that you want to show',
                'group' => 'Team Settings' 
            ),
            array(
                 'type' => 'perch_select',
                'multiple' => 'multiple',
                'heading' => esc_html__( 'Select category', 'landpick' ),
                'param_name' => 'tax_term',
                'value' => perch_get_terms(),
                'group' => 'Team Settings' 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Taxonomy term operator', 'landpick' ),
                'param_name' => 'tax_operator',
                'description' => 'IN - team that have any of selected categories terms<br/>NOT IN - team that is does not have any of selected terms<br/>AND - team that have all selected terms',
                'value' => array(
                     'IN' => 'IN',
                    'NOT IN' => 'NOT IN',
                    'AND' => 'AND' 
                ),
                'group' => 'Team Settings' 
            ),
            array(
                 'type' => 'textfield',
                'heading' => esc_html__( 'Authors', 'landpick' ),
                'param_name' => 'author',
                'description' => 'Enter here comma-separated list of author\'s IDs. Example: 1,7,18',
                'group' => 'Team Settings' 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Order', 'landpick' ),
                'param_name' => 'order',
                'description' => 'Team order',
                'value' => array_flip( array(
                     'desc' => esc_html__( 'Descending', 'landpick' ),
                    'asc' => esc_html__( 'Ascending', 'landpick' ) 
                ) ),
                'std' => 'desc',
                'group' => 'Team Settings' 
            ),
            array(
                 'type' => 'dropdown',
                'heading' => esc_html__( 'Order by', 'landpick' ),
                'param_name' => 'orderby',
                'description' => 'Order team by',
                'std' => 'date',
                'value' => array_flip( array(
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
                ) ),
                'group' => 'Team Settings' 
            ),
        );

        return $array;
    }

    // Title element mapping
    private function vc_map_args(){        

        $array = self::element_align_args();        
               
               
        $array = array_merge($array, self::team_template_args() );
        $array = array_merge($array, self::team_query_args() );
        $array = array_merge($array, PerchVcMap::element_common_args());
         
        $array = apply_filters( 'perch_modules/vc/'.$this->base , $array);

        return $array;
    } 
     
     
    // Element HTML
    public function landpick_team_template_output( $atts, $content = NULL ) {
        $map_arr = self::vc_mapping(true);
        $args = PerchVcMap::get_vc_element_atts_array($map_arr, $content); 
        // Params extraction
        $atts = shortcode_atts( $args, $atts );
        $atts['post_type'] = 'team';
        $atts['info'] = $atts;
        $wrapper_attributes = perch_modules_shortcode_wrapper_attributes($atts, $this->base );        

        // Used for periodic animation
        PerchVcMap::periodic_animation_start($atts);

        
      
        // Fill $html var with data
        $html ='
        <div '. implode( ' ', $wrapper_attributes ).'>
            '.landpick_posts_template($atts, '','team').'      
        </div>';

        $html_args = array(
            'wrapper_attributes' => $wrapper_attributes,
            'team_template' => landpick_posts_template($atts, '','team'),                   
        ); 

        $html = apply_filters('perch_modules/team_template/output', $html, $html_args, $atts); 

        PerchVcMap::periodic_animation_end();     
         
        return wpb_js_remove_wpautop($html);
         
    }

    public function landpick_team_template_slide_output( $atts, $content = NULL ) {
        $map_arr = self::vc_map_args();
        $args = PerchVcMap::get_vc_element_atts_array($map_arr, $content); 

        // Params extraction
        $atts = shortcode_atts( $args, $atts );

        $html ='<div class="perch-slide-item">';
        $html .= self::landpick_team_template_output($atts);
        $html .='</div>';

        return $html;
    }


    // Element Mapping
    public function vc_mapping( $return = false ) {
        $params = $this->vc_map_args();
        if($return) {
            return $params;  
        }        
       
       $vc_map = array(
                'class' => perch_shortcodes_vc_class(),
                'category' => perch_shortcodes_vc_category(),
                'base' => $this->base,
                'name' => $this->title,                
                'description' => esc_html__('Display name, title, subtitle & content', 'landpick'),                 
                'params' => $params,
                /*'js_view' => 'PerchVcElementPreview',
                'custom_markup' => '<div class="perch_vc_element_container">{{title}}</div>',  
                'admin_enqueue_js' =>   array( PERCH_MODULES_URI. '/assets/js/vc-admin-scripts.js'),    */   
            ); 
        // slide element
        $vc_map_slide = array(
                'class' => perch_shortcodes_vc_class(),
                'category' => perch_shortcodes_vc_category(),
                'base' => $this->base.'_slide',
                'name' => $this->title,                
                'description' => esc_html__('Display title & subtitle', 'landpick'),                 
                'as_child'  => array('only' => 'perch_vc_carousel'),           
                'params' => $params,
                /*'js_view' => 'PerchVcElementPreview',
                'custom_markup' => '<div class="perch_vc_element_container">{{title}}</div>', */       
            );
        
        vc_map( $vc_map );
        vc_map( $vc_map_slide );
        
    }
    
    
     
} // End Element Class 
 
// Element Class Init
new LandpickTeamTemplate();

// Element Class Init
class WPBakeryShortCode_Landpick_team_template extends WPBakeryShortCode {
}
endif;