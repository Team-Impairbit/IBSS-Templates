<?php
$category_title = get_post_meta( get_the_ID(), 'category_title', true );
?>                        
   
<?php if( $category_title != '' ): ?>                               
	<h5 class="h5-xs"><?php echo esc_attr($category_title) ?></h5>
<?php endif; ?>
	<?php echo landpick_get_the_term_list( get_the_ID(), 'portfolio_category', '<span class="'.landpick_default_color().'-color section-id">', ', ', '</span>', true ) ?>

