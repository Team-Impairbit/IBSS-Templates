<?php if ( $posts->have_posts() ): extract($posts->info); 	
	$size = $img_size;
	$portfolio_id = (($spacing) && ($spacing == 'yes'))? 'gallery-3' : 'gallery-1';
	?>
	<div id="<?php echo esc_attr($portfolio_id) ?>" class="gallery-section">
	<?php 
	$args = array(
	    'hide_empty' => false,
	);

	if($tax_term != '') $args['include'] = $tax_term;

	$terms = get_terms( 'portfolio_category', $args );
	if( !empty($terms) && ( $filter == 'yes' ) ):
	?>
	<!--   PORTFOLIO  -->
	<div class="row">
		<div class="col-md-12 text-center">
			<div class="gallery-filter mb-60" data-active="<?php echo esc_attr($active) ?>">
			
					<button class="noto-font-700 is-checked" data-filter="*"><?php printf(_x('%s', 'All text', 'landpick'), landpick_get_option('portfolio_all_text', 'See All')); ?></button>
					<?php 
					foreach ($terms as $key => $value) {
						echo '<button class="noto-font-700'.(($value->slug == $active)? ' is-checked' : '').'" data-filter=".'.esc_attr($value->slug).'">
						'.esc_attr($value->name).'</button>';
					} 
					?>
				
			</div>	
		</div>	
	</div>	
	<?php endif; ?>	

	<!-- GALLERY IMAGES HOLDER -->	
	<div class="row">	
		<div class="col-md-12 gallery-items-list">
			<div class="masonry-wrap grid-loaded">
	
			<?php  
			$count = 0;
			while ( $posts->have_posts() ) : $posts->the_post(); ?>
				<?php $img_meta = landpick_get_option('img_meta','category')?>
					<!-- IMAGE #1 -->
				  	<div class="gallery-item<?php echo landpick_get_the_term_list( get_the_ID(), 'portfolio_category', ' ', ' ', '', false ) ?>">
						<div class="hover-overlay">
						<?php if($link_type == 'link'):?> <a href="<?php the_permalink()?>">
						<?php endif;?> 
							
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
	        							<?php echo landpick_get_the_term_list( get_the_ID(), 'portfolio_category', '<p class="primary-color noto-font-500">', ', ', '</p>', true ) ?>
	        						<?php elseif($img_meta == 'date'): ?>     
	        							<p class="noto-font-500 primary-color"><?php echo get_the_date();?></p> 
	        						<?php endif; ?>                                  
						    </div>
						<?php if($link_type == 'link'):?></a><?php endif; ?>						
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
