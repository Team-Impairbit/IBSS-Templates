<?php $subtitle = get_post_meta( get_the_ID(), 'subtitle', true ); ?>

<div class="team-1">															

<!-- Link -->								
	<a href="<?php the_permalink() ?>">													
		
		<!-- Speaker Photo -->
		<div class="hover-overlay"> 
			<?php the_post_thumbnail( 'landpick-700x800-crop', array('class' => 'img-fluid') ) ?>
		</div>								
			
		<!-- Speaker Meta -->		
		<div class="team-meta">													
			<h5 class="h5-lg primary-color"><?php the_title(); ?></h5>
			<p class="grey-color"><?php echo esc_attr($subtitle) ?></p>
		</div>	

	</a>
														
</div>								

