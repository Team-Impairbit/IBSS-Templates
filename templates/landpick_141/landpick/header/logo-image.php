<?php
$logo  = Landpick_Header_Config::get_logo(); 
$logo_white = Landpick_Header_Config::get_logo(false);
$dimensions = landpick_get_option( 'logo_dimensions', array('width'  => '','height' => '30') );
$sticky_dimensions = landpick_get_option( 'sticky_logo_dimensions', array('width'  => '','height' => '30') );
?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo-white" rel="home"><img src="<?php echo esc_url($logo); ?>"<?php echo (intval($dimensions['width']) != 0)? ' width="'.intval($dimensions['width']).'"' : ''; ?> height="<?php echo intval($dimensions['height']) ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo-black" rel="home"><img src="<?php echo esc_url($logo_white); ?>"<?php echo (intval($sticky_dimensions['width']) != 0)? ' width="'.intval($sticky_dimensions['width']).'"' : ''; ?> height="<?php echo intval($sticky_dimensions['height']) ?>" alt="<?php bloginfo( 'name' ); ?>"></a>