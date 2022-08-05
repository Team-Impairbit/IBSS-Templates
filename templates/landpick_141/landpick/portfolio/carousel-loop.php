<?php if ( $posts->have_posts() ): extract($posts->info); 	
	$size = $img_size;
	$portfolio_id = (($spacing) && ($spacing == 'yes'))? 'gallery-3' : 'gallery-1';
	?>	

	<!-- GALLERY IMAGES HOLDER -->	
	<div class="row">	
		<div class="col">
			<div class="owl-carousel images-carousel hover-primary">
	
			<?php 
			$count = 0;
			while ( $posts->have_posts() ) : $posts->the_post(); ?>
				<?php $img_meta = landpick_get_option('img_meta','category')?>
					<!-- IMAGE #1 -->
				  	<div class="gallery-item gallery-photo">
						<div class="hover-overlay">
							<?php if($link_type == 'link'):?> <a href="<?php the_permalink()?>">
							<?php endif; ?>
							
								<?php if( has_post_thumbnail() ): ?>
									<!-- Gallery Image -->
									<img class="img-fluid" src="<?php the_post_thumbnail_url( $size ); ?>" alt="<?php the_title_attribute(); ?>" />
								<?php endif; ?>
								<div class="item-overlay"></div>
								<!-- Image Zoom -->
								 <!-- Image Meta -->
							    <div class="event-img-meta white-color">
							        <h5 class="h5-md noto-font-900 upcase"><?php the_title(); ?></h5>
							        <?php if($img_meta == 'category'): ?>
							        	<?php echo landpick_get_the_term_list(get_the_ID(),'portfolio_category','<p class="noto-font-500 primary-color">',',','</p>',true) ?>
							        	<?php elseif($img_meta == 'date'): ?>     
		        							<p class="noto-font-500 primary-color"><?php echo get_the_date();?></p> 
		        					<?php endif; ?>    
							         
							    </div>
						    <?php if($link_type == 'link'):?></a><?php endif;?>						
						</div>
						<?php if($link_type == 'popup'): ?>
							<div class="image-zoom icon-xl white-color"><div class="search-icon">
								<a class="image-link" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>"><span class="fas fa-search-plus"></span></a></div>
							</div><!-- Image Zoom -->
						<?php endif;?>	
					</div>	<!-- END IMAGE #1 -->
			<?php endwhile; ?>	
			</div>	
		</div>							
	</div>		<!-- END PORTFOLIO IMAGES HOLDER -->
<?php

	// Posts not found
	else :
		echo '<h4>' . __( 'Portfolio not found', 'landpick' ) . '</h4>';
	endif;
?>