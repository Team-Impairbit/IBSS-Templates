<?php
add_filter( 'rwmb_meta_boxes', 'landpick_register_team_settings_meta_boxes' );
function landpick_register_team_settings_meta_boxes( $meta_boxes ) {
	$meta_boxes[] = array (
		'title' => 'Team Settings',
		'id' => 'landpick_team_settings',
		'post_types' => array('team'),
		'context' => 'side',
		'priority' => 'high',
		'fields' => array(
			array (
                'id' => 'subtitle',
                'type' => 'text',
                'name' => 'Subtitle',
                'desc' => 'Optional, Leave blank to avoid.',                               
            ),
		),		
	);
	return $meta_boxes;
}
