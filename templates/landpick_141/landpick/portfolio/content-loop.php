<?php $img_meta = landpick_get_option('img_meta', 'category'); ?>
<div class="hover-overlay">
	<!-- Project Link -->
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute() ?>">

	    <!-- Image -->
	    <?php the_post_thumbnail( 'landpick-400x400-crop', array('class' => 'img-fluid') ) ?>
	    <div class="item-overlay"></div>                
	    
	    <!-- Image Meta -->
	    <div class="event-img-meta white-color">
	        <h5 class="h5-md noto-font-900 upcase"><?php the_title(); ?></h5>       
	        <?php if($img_meta == 'category'): ?>
				<?php echo landpick_get_the_term_list( get_the_ID(), 'portfolio_category', '<p class="primary-color noto-font-500">', ', ', '</p>', true ) ?>
			<?php elseif($img_meta == 'date'): ?>     
				<p class="noto-font-500 primary-color"><?php echo get_the_date();?></p> 
			<?php endif; ?>                                     
	    </div>
	</a> 

</div>