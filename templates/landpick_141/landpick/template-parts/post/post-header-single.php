<div class="sblog-post-txt">
	<p class="post-meta theme-color"><?php landpick_entry_meta(); ?></p>
	
	<?php the_title(landpick_post_title_before(), landpick_post_title_after()); ?><!-- Post Title -->

	<?php
	$args = array(
		'wrapclass' => 'share-social-icons clearfix mb-40',
		'before' => '<div class="post-share-list">',
		'after' => '</div><!-- POST SHARE ICONS -->',
	);
	landpick_social_share(true, $args);
	?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	
</div><!-- BLOG POST TEXT -->


