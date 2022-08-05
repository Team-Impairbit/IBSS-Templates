<?php
if( class_exists('WPCF7_ContactFormTemplate') ):
class Landpick_ContactFormTemplate extends WPCF7_ContactFormTemplate { 
	function __construct(){
      add_action( 'wpcf7_init', array( __CLASS__, 'add_form_tag_admin_edit_link' ) );
		  add_filter( 'wpcf7_default_template', array( __CLASS__, 'custom_form' ), 10, 2 );
	}
 
 
  public static function custom_form($template, $prop) { 
    if ( $prop == 'form' ) {
      $template = '<div class="form-holder"><div  class="row contact-form"><div id="input-name" class="col-lg-6">[text* your-name class:form-control class:name placeholder "Your Name"]</div><div id="input-email" class="col-lg-6">[email* your-email class:form-control class:email placeholder "Email Address"]</div><div id="input-subject" class="col-lg-12">[select* your-subject id:inlineFormCustomSelect1 class:custom-select class:subject class:valid "This question is about..." "Registering/Authorising" "Using Application" "Troubleshooting" "Backup/Restore" "Other"]</div><div id="input-message" class="col-lg-12 input-message">[textarea* your-message class:form-control class:message placeholder "Your Message...."]</div><div class="col-lg-12 form-btn"><button type="submit" class="btn btn-lg btn-preset white-color submit btn-arrow wpcf7-form-control wpcf7-submit">Send Message</button></div><div class="col-lg-12 contact-form-msg">[response]</div></div></div>[editlink]'; 
    }
 
      return $template; 
  } 


  public static function add_form_tag_admin_edit_link() {
      wpcf7_add_form_tag( 'editlink', 'landpick_admin_edit_link_form_tag_handler', array( 'name-attr' => false ) );
  }

  
} 

new Landpick_ContactFormTemplate();
endif;

function landpick_admin_edit_link_form_tag_handler( $tag ) {
     if( current_user_can( 'administrator' ) ){
          $wpcf7 = WPCF7_ContactForm::get_current(); 
          $id = $wpcf7->id();
          $form_edit_link = admin_url( 'admin.php?page=wpcf7&post='.intval($id).'&action=edit' );
          $mail_edit_link = admin_url( 'admin.php?page=wpcf7&post='.intval($id).'&action=edit&active-tab=1' );

          $html = '<div class="cf7-edit-link small">';  
          $html .= sprintf(' <a target="_blank" href="%s">%s</a>', esc_url($form_edit_link), esc_attr__('Edit contact form', 'landpick'));        
          $html .= sprintf(', <a target="_blank" href="%s">%s</a>', esc_url($mail_edit_link), esc_attr__('Check Mail settings', 'landpick'));
          $html .= '</div>';      

          return $html;
      }
}