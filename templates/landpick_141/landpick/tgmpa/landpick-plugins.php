<?php
require_once get_template_directory() . '/tgmpa/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'landpick_register_required_plugins' );

if( !function_exists('landpick_register_required_plugins') ):
function landpick_register_required_plugins( ) {
    $plugins = array(
        array(
             'name' => __( 'Visual Composer', 'landpick' ), // The plugin name.
            'slug' => 'js_composer', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/js_composer-6.7.0.zip', // The plugin source.
            'required' => true,
            'version' => '6.7.0',
            'force_activation' => false, 
            'force_deactivation' => false, 
            'external_url' => '', 
            'is_callable' => '' 
        ),       
        array(
             'name' => __( 'Landpick modules', 'landpick' ), // The plugin name.
            'slug' => 'perch_modules', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/perch_modules.zip', // The plugin source.
            'required' => true,
            'version' => '1.1.8',
            'force_activation' => false,
            'force_deactivation' => false 
        ),        
        array(
             'name' => __( 'Landpick post likes & view count', 'landpick' ), // The plugin name.
            'slug' => 'perch-post-like-view', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/perch-post-like-view.zip', // The plugin source.
            'required' => true,
            'version' => '1.0',
            'force_activation' => false,
            'force_deactivation' => false 
        ), 
        array(
             'name' => __( 'Envato market', 'landpick' ), // The plugin name.
            'slug' => 'envato-market', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/envato-market.zip', // The plugin source.
            'required' => true,
            'version' => '2.0.3',
            'force_activation' => false,
            'force_deactivation' => false 
        ),
        array(
             'name' => __( 'Contact Form 7', 'landpick' ),
            'slug' => 'contact-form-7',
            'required' => true 
        ),
        array(
             'name' => __( 'Breadcrumb NavXT', 'landpick' ),
            'slug' => 'breadcrumb-navxt',
            'required' => true 
        ),
        array(
             'name' => __( 'Email Subscription', 'landpick' ),
            'slug' => 'email-subscribers',
            'required' => true 
        ),
        
        array(
             'name' => __( 'One Click Demo Import', 'landpick' ),
            'slug' => 'one-click-demo-import',
            'required' => false 
        ),
        
        array(
            'name' => esc_attr__( 'Control Block Patterns', 'landpick' ),
            'slug' => 'control-block-patterns',
            'required' => false 
        ),
    );
    $config  = array(
         'id' => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', 
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message' => '' // Message to output right before the plugins table.
    );
    tgmpa( $plugins, $config );
}

endif;

add_filter( 'ocdi/register_plugins', 'landpick_ocdi_register_plugins');
function landpick_ocdi_register_plugins(){
     return array( 
          array(
               'name' => __( 'Visual Composer', 'landpick' ), // The plugin name.
               'slug' => 'js_composer', // The plugin slug (typically the folder name).
               'source' => get_template_directory() . '/tgmpa/plugins/js_composer-6.7.0.zip', // The plugin source.
               'required' => true,
               'preselected' => true
          ),       
          array(
               'name' => __( 'Landpick modules', 'landpick' ), // The plugin name.
               'slug' => 'perch_modules', // The plugin slug (typically the folder name).
               'source' => get_template_directory() . '/tgmpa/plugins/perch_modules.zip', // The plugin source.
               'required' => true,
               'preselected' => true
          ),   
          
          array(
               'name' => esc_attr__( 'Contact Form 7', 'landpick' ),
               'slug' => 'contact-form-7',
               'required' => true,
               'preselected' => true 
          ),
          array(
               'name' => esc_attr__( 'Breadcrumb NavXT', 'landpick' ),
               'slug' => 'breadcrumb-navxt',
               'required' => true,
               'preselected' => true
          ),                          

          array(
               'name' => esc_attr__( 'Woocommerce', 'landpick' ),
               'slug' => 'woocommerce',
               'required' => false 
          ),

          array(
               'name' => esc_attr__( 'Woocommerce quick view', 'landpick' ),
               'slug' => 'yith-woocommerce-quick-view',
               'required' => false 
          ),
          array(
               'name' => esc_attr__( 'Woocommerce wishlist', 'landpick' ),
               'slug' => 'yith-woocommerce-wishlist',
               'required' => false 
          ),          
     );
}