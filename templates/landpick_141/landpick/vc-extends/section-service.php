<?php
add_action( 'vc_load_default_templates_action','landpick_service_sections_for_vc' ); // Hook in
function landpick_service_sections_for_vc() {
	$templates = array();

	$templates['Section: Service 02'] = '[vc_section bg_class="bg-lightgrey" parallax_image_attachment="inherit" el_id="services-2"][vc_row parallax_image_attachment="inherit"][vc_column][perch_section_title title="What Makes LandPick Different" title_font_container="tag:h3|size:md|text_color:Default|text_underline:none|" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius ullam libero" subtitle_font_container="tag:p|size:md|text_color:Default|text_underline:none|"][/vc_column][/vc_row][vc_row parallax_image_attachment="inherit"][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-074-web" title="Web Design Interface" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-078-tag" title="Brand Design Identity" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-016-game" title="Web Development" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-024-search" title="SEO &amp; SMM Services" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-098-analysis" title="Digital Marketing" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][/vc_row][/vc_section]';

	$templates['Section: Service 02 With Lightgrey'] = '[vc_section bg_class="bg-lightgrey" parallax_image_attachment="inherit" el_id="services-2"][vc_row parallax_image_attachment="inherit"][vc_column][perch_section_title title="What Makes LandPick Different" title_font_container="tag:h3|size:md|text_color:Default|text_underline:none|" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius ullam libero" subtitle_font_container="tag:p|size:md|text_color:Default|text_underline:none|"][/vc_column][/vc_row][vc_row parallax_image_attachment="inherit"][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-074-web" title="Web Design Interface" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-078-tag" title="Brand Design Identity" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-016-game" title="Web Development" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-024-search" title="SEO &amp; SMM Services" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_flaticon="flaticon-098-analysis" title="Digital Marketing" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][/vc_row][/vc_section]';

	$templates['Section: Service 02 With Left Alignment'] = '[vc_section parallax_image_attachment="inherit" el_id="services-2"][vc_row parallax_image_attachment="inherit"][vc_column][perch_section_title title="What Makes LandPick Different" title_font_container="tag:h3|size:md|text_color:Default|text_underline:none|" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius ullam libero" subtitle_font_container="tag:p|size:md|text_color:Default|text_underline:none|"][/vc_column][/vc_row][vc_row parallax_image_attachment="inherit"][vc_column width="1/3"][perch_feature_box display_as="sbox-2" icon_flaticon="flaticon-074-web" title="Web Design Interface" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" icon_flaticon="flaticon-078-tag" title="Brand Design Identity" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][vc_column width="1/3"][perch_feature_box display_as="sbox-2" icon_flaticon="flaticon-016-game" title="Web Development" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" icon_flaticon="flaticon-024-search" title="SEO & SMM Services" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][vc_column width="1/3"][perch_feature_box display_as="sbox-2" icon_flaticon="flaticon-098-analysis" title="Digital Marketing" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][/vc_row][/vc_section]';

	$templates['Section: Service 02 With Image'] = '[vc_section parallax_image_attachment="inherit" el_id="services-2"][vc_row parallax_image_attachment="inherit"][vc_column][perch_section_title title="What Makes LandPick Different" title_font_container="tag:h3|size:md|text_color:Default|text_underline:none|" subtitle="Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius ullam libero" subtitle_font_container="tag:p|size:md|text_color:Default|text_underline:none|"][/vc_column][/vc_row][vc_row parallax_image_attachment="inherit"][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_type="image" icon_image="'.get_template_directory_uri().'/images/icons/e-learning.png" img_icon_size="100" title="Extremely Flexible" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" icon_type="image" icon_image="'.get_template_directory_uri().'/images/icons/settings.png" img_icon_size="100" title="Easy To Customize" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_type="image" icon_image="'.get_template_directory_uri().'/images/icons/responsive.png" img_icon_size="100" title="Responsive Layouts" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" icon_type="image" icon_image="'.get_template_directory_uri().'/images/icons/analysis.png" img_icon_size="100" title="SEO Optimized" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][vc_column width="1/3"][perch_feature_box display_as="sbox-2" align="text-center" icon_type="image" icon_image="'.get_template_directory_uri().'/images/icons/contract.png" img_icon_size="100" title="Organized Code" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][perch_feature_box display_as="sbox-2" align="text-center" icon_type="image" icon_image="'.get_template_directory_uri().'/images/icons/user.png" img_icon_size="100" title="Premium Support" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor impedit felis magna dolor vitae"][/vc_column][/vc_row][/vc_section]';

	$templates['Section: Service 03'] = '[vc_section parallax_image_attachment="inherit" el_id="services-3"][vc_row parallax_image_attachment="inherit"][vc_column][perch_section_title title="Everyone Wants To Be Unique" title_font_container="tag:h3|size:md|text_color:Default|text_underline:none|" subtitle_font_container="tag:p|size:md|text_color:Default|text_underline:none|"][/vc_column][/vc_row][vc_row parallax_image_attachment="inherit"][vc_column width="6/12"][vc_row_inner parallax_image_attachment="inherit"][vc_column_inner width="1/2"][perch_feature_box display_as="sbox-3" icon_flaticon="flaticon-055-adventure" icon_color="lightblue-color" title="Quick Access" subtitle="Semper lacus cursus porta, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor felis"][perch_feature_box display_as="sbox-3" icon_flaticon="flaticon-045-clipboard" icon_color="lightblue-color" title="Clear Report" subtitle="Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor felis"][/vc_column_inner][vc_column_inner width="1/2"][perch_feature_box display_as="sbox-3" icon_flaticon="flaticon-095-email" icon_color="lightblue-color" title="Mailer Engine" subtitle="Feugiat primis ultrice semper lacus cursus porta, in ligula risus auctor tempus feugiat dolor felis"][perch_feature_box display_as="sbox-3" icon_flaticon="flaticon-085-lock" icon_color="lightblue-color" subtitle="Semper lacus cursus porta, feugiat primis ultrice in ligula risus auctor tempus feugiat dolor felis"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="5/12"][perch_image el_class="services-img"][/vc_column][/vc_row][/vc_section]';	


	
	foreach ($templates as $key => $template) {
		$data               = array(); 
	    $data['name']       = esc_attr($key); // Assign name for your custom template
	    $data['weight']     = 0; 
	    $data['image_path'] = '';
	    $data['custom_class'] = ''; // CSS class name
	    $data['content']    = $template;

	    vc_add_default_templates( $data );
	}
      

}


