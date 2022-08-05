<?php
if( class_exists('PerchVcMap') ):


// Element Class 
class LandpickTeamSingle extends PerchVcMap {
     
    private $base = 'landpick_team_single_info';

    private $title = 'Single team info';
    
    function __construct() {
        // vc map inits
        add_action( 'init', array( $this, 'vc_mapping' ) );
        // Shortcode filter
        add_filter( $this->base, array( $this, 'perch_single_team_info_output' ), 30, 2 ); 
        
    }

    // Title element mapping
    private function vc_map_args(){        

    	$array = self::element_align_args();
        $array = array_merge($array, self::landpick_team_single_info_args());
        $array = array_merge($array, PerchVcMap::element_common_args());
         
        $array = apply_filters( 'perch_modules/vc/'.$this->base , $array);
        $array = self::vc_element_default_args($array);

        return $array;
    }    
    
    private function landpick_team_single_info_args(){
        return array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Designation','landpick' ),
                'param_name' => 'designation',
                'value' => 'Founder',
                'edit_field_class' => 'vc_col-sm-4',             
            ),
         array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Title','landpick' ),
                'param_name' => 'title',
                'value' => 'Jonathan Barnes',
                'edit_field_class' => 'vc_col-sm-8',             
            ),
         array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Phone','landpick' ),
                'param_name' => 'phone',
                'value' => '+1 888-456-7895',
                'edit_field_class' => 'vc_col-sm-6',             
            ),
          array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Email','landpick' ),
                'param_name' => 'email',
                'value' => 'info@yourdomain.com',
                'edit_field_class' => 'vc_col-sm-6',             
            ),
          array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Address','landpick' ),
                'param_name' => 'address',
                'value' => '70 W. Madison Street, Ste. 1400 Chicago, IL 60602, United States',            
            ),
          array(
                'type' => 'param_group',
                'heading' => esc_html__( 'Social Links','landpick' ),
                'param_name' => 'social_links',
                'value' => urlencode( json_encode( array(
                      array(
                          'name' => 'facebook',
                          'icon_class' => 'ico-facebook text-center',                  
                          'icon' => 'fab fa-facebook-f',
                          'icon_link' =>'#',
                      ),
                      array(
                          'name' => 'twitter',
                          'icon_class' => 'ico-twitter text-center',                  
                          'icon' => 'fab fa-twitter',
                          'icon_link' =>'#',
                      ),
                      array(
                          'name' => 'linkedin',                   
                          'icon_class' => 'ico-linkedin text-center',                  
                          'icon' => 'fab fa-linkedin-in',
                          'icon_link' =>'#',
                      ),
                  ) ) ),
                  'params' => self::team_social_icon_params()         
            ),
        );
    }
    
    private function team_social_icon_params(){
        return array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Icon class','landpick' ),
                'param_name' => 'icon_class',
                'value' => '',
                'edit_field_class' => 'vc_col-sm-4',
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Icon','landpick' ),
                'param_name' => 'icon',
                'value' => '',
                'edit_field_class' => 'vc_col-sm-4',            
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Icon Link','landpick' ),
                'param_name' => 'icon_link',
                'value' => '', 
                'edit_field_class' => 'vc_col-sm-4',           
            ),
             array(
                'type' => 'textfield',
                'heading' => esc_html__( 'Name','landpick' ),
                'param_name' => 'name',
                'value' => '', 
                'edit_field_class' => 'vc_col-sm-4',
                'admin_label' => true,          
            ),

        );
    }

    // Element HTML
    public function perch_single_team_info_output( $atts, $content = NULL ) {
        $map_arr = self::vc_mapping(true);
        $args = PerchVcMap::get_vc_element_atts_array($map_arr, $content); 
        // Params extraction
        $atts = shortcode_atts( $args, $atts );

        $wrapper_attributes = perch_modules_shortcode_wrapper_attributes($atts, $this->base );

        // Used for periodic animation
        PerchVcMap::periodic_animation_start($atts);

        


        extract($atts);
        $designation_html = ($designation != '')? '<span class="primary-color section-id">'.$designation.'</span>':'';
        $title_html = ($title != '')? '<h3 class="h3-xs">'.$title.'</h3>':'';
        $phone_html = ($phone != '')? '<span>'.$phone.'</span>':'';
        $email_html = ($email != '')? '<span>'.$email.'</span>':'';
        $address_html = ($address != '')? '<span>'.$address.'</span>':'';


        $paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($social_links) : array();
        $social_links = '';
        if( !empty($paramsArr) ){
            foreach ($paramsArr as $key => $value) {
                $icon_class = $icon = $icon_link = $name = '';
                extract($value);
                if( $title != '' ){                    
                    $social_links .= '<li><a class="'.$icon_class.'" href="'.$icon_link.'" title="'.$name.'"><i class="'.$icon.'"></i></a><li>';
                   
                }
            }
        }
        
      
        // Fill $html var with data
        $html ='
            <div '. implode( ' ', $wrapper_attributes ).'>
                '.$designation_html.'
                '.$title_html.'
                <ul class="contact-info blog-category-list clearfix m-bottom-20">
                    <li>
                        <a href="tel:'.$phone.'" title="Phone Number" target="_self">
                            <i class="fa fa-phone"></i>
                            '.$phone_html.'
                        </a>
                    </li>
                    <li>
                        <a href="mailto:'.$email.'" title="Email" target="_self">
                            <i class="fa fa-envelope"></i>
                             '.$email_html.'
                        </a>
                    </li>
                    <li>
                        <a href="#" title="address" target="_self">
                            <i class="fa fa-map-marker"></i>
                            '.$address_html.'
                        </a>
                    </li>
                </ul>
                <ul class="tm-social clearfix">
                    '.$social_links.'
                </ul>
            </div>
        ';

        PerchVcMap::periodic_animation_end();     
         
        return wpb_js_remove_wpautop($html);
         
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
               // 'js_view' => 'PerchVcElementPreview',
                //'custom_markup' => '<div class="perch_vc_element_container">{{title}}</div>',  
                //'admin_enqueue_js' =>   array( PERCH_MODULES_URI. '/assets/js/vc-admin-scripts.js'),       
            ); 
        
        vc_map( $vc_map );
       
        
    }
    private function vc_element_default_args( $args ){
        $default = array(
            'align' => '',            
            'el_class' => 'single-team',       
        );

        $args = landpick_set_default_vc_values($default, $args);   
        
        return $args;    
    }
    
    
     
} // End Element Class 
 
// Element Class Init
new LandpickTeamSingle();
// Element Class Init
class WPBakeryShortCode_Landpick_team_single_info extends WPBakeryShortCode {
}
endif;