<?php
function landpick_team_options( $options = array( ) ) {
    $options = array( 
        array(
             'id' => 'team_archive',
            'label' => 'Team Archive page',
            'desc' => sprintf( __( 'If archive page is not working, then save again <a href="%s" target="_blank">permalink settings</a>, For best performance use Pretty permalink(Example: Post name, Day and name etc)', 'landpick' ), admin_url( 'options-permalink.php' ) ),
            'std' => ( get_post_status( get_option( 'team_archive_id' ) ) == 'publish' ) ? get_option( 'team_archive_id' ) : '',
            'type' => 'page-select',
            'section' => 'team_options',
            'rows' => '' 
        ),
        array(
             'id' => 'display_team_hiring',
            'label' => esc_attr__( 'Display Team hiring', 'landpick' ),
            'desc' => '',
            'std' => 'on',
            'type' => 'on-off',
            'section' => 'team_options',
            'condition' => '',
            'operator' => 'and' 
        ),
        array(
             'id' => 'hiring_column',
            'label' => __( 'Hiring Column style', 'landpick' ),
            'desc' => '',
            'std' => '3',
            'type' => 'select',
            'condition' => 'display_team_hiring:is(on)',
            'section' => 'team_options',
            'choices' => array(
                array( 'label' => 'Column 2',  'value' => '2' ),
                array( 'label' => 'Column 3',  'value' => '3' ),
                array( 'label' => 'Column 4',  'value' => '4' ),
                array( 'label' => 'Column 5',  'value' => '5' ),
                array( 'label' => 'Column 6',  'value' => '6' ),
            )
        ),
        array(
             'id' => 'team_hiring_title',
            'label' => esc_attr__( 'Team hiring title', 'landpick' ),
            'desc' => '',
            'std' => 'We Are Hiring!',
            'type' => 'text',
            'section' => 'team_options',
            'condition' => 'display_team_hiring:is(on)',
            'operator' => 'and' 
        ),        
        array(
             'id' => 'team_hiring_subtitle',
            'label' => esc_attr__( 'Team hiring link text', 'landpick' ),
            'desc' => '',
            'std' => 'Become part of our team',
            'type' => 'text',
            'section' => 'team_options',
            'condition' => 'display_team_hiring:is(on)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'team_hiring_link',
            'label' => esc_attr__( 'Team hiring link', 'landpick' ),
            'desc' => '',
            'std' => '#',
            'type' => 'text',
            'section' => 'team_options',
            'condition' => 'display_team_hiring:is(on)',
            'operator' => 'and' 
        ),
        array(
             'id' => 'team_single_layout',
            'label' => esc_attr__( 'Single Team layout', 'landpick' ),
            'desc' => '',
            'std' => 'full',
            'type' => 'radio-image',
            'section' => 'team_options',
            'operator' => 'and',
            'choices' => array(
                 array(
                     'value' => 'full',
                    'label' => esc_attr__( 'Full width', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/full-width.png' 
                ),
                array(
                     'value' => 'ls',
                    'label' => esc_attr__( 'Left sidebar', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/left-sidebar.png' 
                ),
                array(
                     'value' => 'rs',
                    'label' => esc_attr__( 'Right sidebar', 'landpick' ),
                    'src' => LANDPICK_URI . '/admin/assets/images/layout/right-sidebar.png' 
                ) 
            ) 
        ),
        array(
             'id' => 'team_single_layout_sidebar',
            'label' => esc_attr__( 'Single Team Sidebar', 'landpick' ),
            'desc' => '',
            'std' => '',
            'type' => 'sidebar-select',
            'section' => 'team_options',
            'rows' => '',
            'post_type' => '',
            'taxonomy' => '',
            'min_max_step' => '',
            'class' => '',
            'condition' => 'team_single_layout:not(full)',
            'operator' => 'and' 
        ),        
    );
    return apply_filters( 'landpick_theme_options', $options, 'team_options' );
}