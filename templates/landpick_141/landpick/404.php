<?php get_header(); ?>

	
		<?php get_template_part( 'template-parts/content', 'before' );	?>

		<!-- HERO-15
		============================================= -->	
		<div id="error-page" class="error-page-section division mb-30">
			<div class="container">	
				<div class="row">

					<?php
					$title = landpick_get_option( '404_title', 'Oops! It looks like you are lost ...!');
					$img = landpick_get_option( '404_image', '');
					$btn_txt = landpick_get_option( 'button_text', 'Go Back To Home');
					$content = landpick_get_option( '404_content', '');
					?>
					<!-- HERO TEXT -->
					<div class="col-md-10 offset-md-1">
						<div class="hero-txt text-center">
								
							<!-- Image -->
							<img class="img-fluid mb-30" src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($title) ?>">

							<!-- Text -->
							<h4 class="h4-xl mb-30"><?php echo esc_attr($title); ?></h4>
							<?php
							if (!empty($content)) {
								echo do_shortcode($content);
							}
							?>
							<!-- Button -->
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-theme btn-lg btn-arrow">
								<span><?php echo esc_attr($btn_txt); ?></span>
							</a>
							
						</div>
					</div>	<!-- END HERO TEXT -->
					

				</div>	  <!-- End row -->
			</div>	   <!-- End container --> 	
		</div>	<!-- END HERO-15 -->	


	<?php get_template_part( 'template-parts/content', 'after' );	?>
		 			

<?php get_footer(); ?>