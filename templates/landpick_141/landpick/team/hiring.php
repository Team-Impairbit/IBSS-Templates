<?php 
$display_team_hiring = landpick_get_option('display_team_hiring', 'on');
$team_hiring_title = landpick_get_option('team_hiring_title', 'We Are Hiring!');
$subtitle = landpick_get_option('team_hiring_subtitle', 'Become part of our team');
$team_hiring_link = landpick_get_option('team_hiring_link', '#');
$hiring_column = landpick_get_option('hiring_column', '3');
if($display_team_hiring == 'on'):
?>
<div class="col-md-6 col-lg-<?php echo esc_attr($hiring_column); ?> animated">
	<div class="team-1">

							
	<a href="<?php echo esc_url($team_hiring_link)?>">													
		
		<!-- Speaker Photo -->
		<div class="hover-overlay"> 
			<img class="img-fluid" src="<?php echo LANDPICK_URI. '/images/team-h.jpg' ?>" width="800" height="1000">
		</div>								
			
		<!-- Speaker Meta -->		
		<div class="team-meta">													
			<h5 class="h5-lg primary-color"><?php echo esc_attr($team_hiring_title)?></h5>
			<p class="grey-color"><?php echo esc_attr($subtitle)?></p>
		</div>	

	</a>														
</div>
</div>
<?php endif; ?>

