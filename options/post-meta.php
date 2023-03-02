<?php

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

$link_target_options = array(
	'_self'  => 'the same window',
	'_blank' => 'a new tab'
);

//Front Page Intro
Container::make( 'post_meta', __( 'Intro', 'crb' ) )
	->where( 'post_type', '=', 'page' )
	//->or_where( 'post_template', '=', 'templates/contact.php' )
	//->or_where( 'post_template', '=', 'templates/story.php' )
	->add_fields( array(
		Field::make( 'rich_text', 'intro_title', __( 'Title', 'crb' ) )
      ->set_width(33),
	) );

//Subheader Section -- Speaking & Consulting Page
Container::make( 'post_meta', __( 'Subheader Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/speaking.php' )
	->or_where( 'post_template', '=', 'templates/consulting.php')
	->add_fields( array(
		Field::make( 'text', 'speaking_title', __( 'Title', 'crb' ) )
		 ->set_width(50),
	  Field::make( 'rich_text', 'speaking_text', __( 'Text', 'crb' ) )
	 	 ->set_width(50),
		Field::make( 'complex', 'crb_speaking', __( 'Subheader List', 'crb' ) )
		 ->set_width( 100 )
		 ->set_layout( 'tabbed-vertical' )
		 ->setup_labels( array(
		 	'singular_name' => __( 's_list', 'crb' ),
		 	'plural_name'   => __( 's_lists', 'crb' ),
		 ) )
		 ->add_fields( array(
		 	 Field::make( 'text', 's_list_text', __( 'Subheader List Item', 'crb' ) )
		 	 	->set_width( 100 ),
		 ) )
		 	 	->set_header_template( '<%- s_list_text %>' ),
	 ) );

//Subheader Section -- Workshops & Impact Page
Container::make( 'post_meta', __( 'Subheader Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/workshops.php' )
	->or_where( 'post_template', '=', 'templates/impact.php')
	->add_fields( array(
		Field::make( 'image', 'sub_bg', __( 'Background Image', 'crb') )
			->set_width(100),
		Field::make( 'text', 'sub_title', __( 'Title', 'crb' ) )
		 ->set_width(50),
	  Field::make( 'rich_text', 'sub_text', __( 'Text', 'crb' ) )
	 	 ->set_width(50),
		Field::make( 'text', 'sub_mission', __( 'Mission', 'crb' ) )
			->set_width(50),
	 ) );

//Subheader Section -- Engage Page
Container::make( 'post_meta', __( 'Subheader Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/engage.php' )
	->add_fields( array(
		Field::make( 'text', 'engage_subtitle', __( 'Subtitle', 'crb' ) )
		 ->set_width(50),
	  Field::make( 'text', 'engage_text', __( 'Text', 'crb' ) )
	 	 ->set_width(50),

	 ) );

//Text Flow Slider Section
Container::make( 'post_meta', __( 'Text Slider Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		 Field::make( 'text', 'flow_section_text_left', __( 'Left Block Text', 'crb' ) )
		 	->set_width(50),
		 Field::make( 'text', 'flow_section_text_right', __( 'Right Block Text', 'crb' ) )
			->set_width(50),
		 Field::make( 'complex', 'crb_flow', __( 'Flow', 'crb' ) )
		 	->set_width( 100 )
		 	->set_layout( 'tabbed-vertical' )
		 	->setup_labels( array(
		 		'singular_name' => __( 'Flow', 'crb' ),
		 		'plural_name'   => __( 'Flows', 'crb' ),
		 	) )
		 	->add_fields( array(
		 		Field::make( 'text', 'flow_text', __( 'Text', 'crb' ) )
		 			->set_width( 100 ),
		 	  ) )
		 	->set_header_template( '<%- flow_text %>' ),
		) );


//Counter Section
Container::make( 'post_meta', __( 'Counter Section', 'crb' ) )
	 ->where( 'post_template', '=', 'templates/front-page.php' )
	 ->add_fields( array(
	   Field::make( 'image', 'counter_image', __( 'Personal Image', 'crb') )
	  	->set_width(50),
		 Field::make( 'text', 'counter_title', __( 'Title', 'crb' ) )
			->set_width(50),
	   Field::make( 'text', 'counter_books', __( 'Books Authored', 'crb' ) )
	  	->set_width(33),
		 Field::make( 'text', 'counter_travel', __( 'Continents Traveled', 'crb' ) )
 	  	->set_width(33),
		 Field::make( 'text', 'counter_years', __( 'Years in Change Leadership', 'crb' ) )
			->set_width(33),
	  ) );


//Video Section
Container::make( 'post_meta', __( 'Video Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'oembed', 'video_embed', __( 'Video URL', 'crb') )
			->set_width(100),
		Field::make( 'image', 'video_bg', __( 'Video Background Image', 'crb') )
			->set_width(33),
		Field::make( 'text', 'video_text', __( 'Video Text', 'crb' ) )
	    ->set_width(33),
		Field::make( 'text', 'video_playbtn', __( 'Video Play Btn Text', 'crb' ) )
		  ->set_width(33),
	) );

//Solutions Section
Container::make( 'post_meta', __( 'Solutions Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'text', 'solution_header', __( 'Header', 'crb' ) )
      ->set_width(100),
		Field::make( 'complex', 'crb_solutions', __( 'Solutions', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'Solution', 'crb' ),
				'plural_name'   => __( 'Solutions', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'text', 'solution_text', __( 'Text', 'crb' ) )
					->set_width( 100 )
			) )
			->set_header_template( '<%- solution_text %>' ),
	) );

//Empower Section
Container::make( 'post_meta', __( 'Empower Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'image', 'empower_bg', __( 'Background Image', 'crb') )
			->set_width(33),
		Field::make( 'text', 'empower_tagline', __( 'Tagline', 'crb' ) )
			->set_width(33),
		Field::make( 'text', 'empower_mission', __( 'mission', 'crb' ) )
	    ->set_width(33),
		Field::make( 'text', 'empower_text', __( 'Description', 'crb' ) )
		  ->set_width(33),
	) );

//Transformation Section
Container::make( 'post_meta', __( 'Transformation Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(
		Field::make( 'image', 'transform_bg', __( 'Image', 'crb') )
			->set_width(33),
		Field::make( 'image', 'transform_logo', __( 'Logo', 'crb') )
			->set_width(33),
		Field::make( 'text', 'transform_title', __( 'Title', 'crb' ) )
			->set_width(33),
		Field::make( 'text', 'transform_sub', __( 'Subtitle', 'crb' ) )
		   ->set_width(33),
		Field::make( 'text', 'transform_block1', __( 'Left Block Text', 'crb' ) )
			 ->set_width(33),
		Field::make( 'text', 'transform_block2', __( 'Right Block Text', 'crb' ) )
		 	 ->set_width(33),
		Field::make( 'text', 'transform_btn', __( 'Button Text', 'crb' ) )
	 		 ->set_width(33),
	) );

//Case Studies Section
/*Container::make( 'post_meta', __( 'Case Studies Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->or_where( 'post_template', '=', 'templates/impact.php' )
	->add_fields( array(
		Field::make( 'image', 'adapt_bg', __( 'Background', 'crb') )
			->set_width(33),
		Field::make( 'text', 'adapt_title', __( 'Title', 'crb' ) )
	    ->set_width(50),
		Field::make( 'text', 'adapt_sub', __( 'Subtitle', 'crb' ) )
		  ->set_width(50),
		Field::make( 'text', 'adapt_text', __( 'Description', 'crb' ) )
		  ->set_width(100),
		Field::make( 'complex', 'crb_studies', __( 'Case Studies', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'Study', 'crb' ),
				'plural_name'   => __( 'Studies', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'text', 'case_title', __( 'Title', 'crb' ) )
					->set_width( 100 ),
				Field::make( 'text', 'case_text', __( 'Description', 'crb' ) )
					->set_width( 100 ),
				Field::make( 'image', 'case_image', __( 'Image', 'crb') )
					->set_width(33),
				Field::make( 'text', 'case_link', __( 'PDF Link', 'crb' ) )
				  ->help_text( __( 'Add PDF to media and then use the URL it creates for it here.', 'crb' ) )
					->set_width( 100 ),
			) )
			->set_header_template( '<%- case_title %>' ),
	) );
*/
//Testimonials Section
Container::make( 'post_meta', __( 'Testimonials Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->add_fields( array(

			Field::make( 'text', 'testimonial_title', __( 'Title', 'crb' ) )
		    ->set_width(50),

			Field::make( 'complex', 'crb_affiliates', __( 'Affiliates', 'crb' ) )
				->set_width( 100 )
				->set_layout( 'tabbed-vertical' )
				->setup_labels( array(
					'singular_name' => __( 'Affiliate', 'crb' ),
					'plural_name'   => __( 'Affiliates', 'crb' ),
				) )
				->add_fields( array(
					Field::make( 'text', 'affiliate_title', __( 'Title', 'crb' ) )
						->set_width( 100 ),
					Field::make( 'image', 'affiliate_image', __( 'Image', 'crb') )
						->set_width(33),
				) )
				->set_header_template( '<%- affiliate_title %>' ),

			Field::make( 'complex', 'crb_testimonials', __( 'Testimonials', 'crb' ) )
				->set_width( 100 )
				->set_layout( 'tabbed-vertical' )
				->setup_labels( array(
					'singular_name' => __( 'Testimonial', 'crb' ),
					'plural_name'   => __( 'Testimonials', 'crb' ),
				) )
				->add_fields( array(
					Field::make( 'text', 'testimonial_name', __( 'Name', 'crb' ) )
						->set_width( 100 ),
					Field::make( 'text', 'testimonial_role', __( 'Position', 'crb' ) )
						->set_width( 100 ),
					Field::make( 'rich_text', 'testimonial_text', __( 'Description', 'crb' ) )
						->set_width( 100 ),
					) )
					->set_header_template( '<%- testimonial_name %>' ),
	 ) );

//Video Section -- Speaking Page
Container::make( 'post_meta', __( 'Video Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/speaking.php' )
	->add_fields( array(
		Field::make( 'oembed', 'speaking_video_embed', __( 'Video URL', 'crb') )
			->set_width(100),
		Field::make( 'image', 'speaking_video_bg', __( 'Video Background Image', 'crb') )
			->set_width(33),
		Field::make( 'text', 'speaking_video_playbtn', __( 'Video Play Btn Text', 'crb' ) )
			->set_width(33),
	 ) );

//Innovative Section
Container::make( 'post_meta', __( 'Innovative Techniques Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/speaking.php' )
	->add_fields( array(
	 	Field::make( 'text', 'innovative_title', __( 'Title', 'crb' ) )
	 	 ->set_width(100),
	 	Field::make( 'text', 'innovative_section1_title', __( 'Section 1 Title', 'crb' ) )
	 	 ->set_width(50),
	  Field::make( 'text', 'innovative_section1_text', __( 'Section 1 Text', 'crb' ) )
	   ->set_width(50),
	 	Field::make( 'text', 'innovative_section2_title', __( 'Section 2 Title', 'crb' ) )
	 	 ->set_width(50),
	 	Field::make( 'text', 'innovative_section2_text', __( 'Section 2 Text', 'crb' ) )
	 	 ->set_width(50),
	 	Field::make( 'text', 'innovative_section3_title', __( 'Section 3 Title', 'crb' ) )
	 	 ->set_width(50),
	 	Field::make( 'text', 'innovative_section3_text', __( 'Section 3 Text', 'crb' ) )
	 	 ->set_width(50),
	 	Field::make( 'text', 'innovative_section4_title', __( 'Section 4 Title', 'crb' ) )
	 	 ->set_width(50),
	 	Field::make( 'rich_text', 'innovative_section4_text', __( 'Section 4 Text', 'crb' ) )
	 	 ->set_width(50),
	 	Field::make( 'image', 'innovative_img', __( 'Image', 'crb') )
	 	 ->set_width(33),
	 ) );

//Topics Section
Container::make( 'post_meta', __( 'Topics Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/speaking.php' )
	->add_fields( array(
	 	Field::make( 'text', 'topic_section_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'topic_section1_title', __( 'Section 1 Title', 'crb' ) )
		 	->set_width(50),
		Field::make( 'text', 'topic_section1_text', __( 'Section 1 Text', 'crb' ) )
			->set_width(50),
		Field::make( 'text', 'topic_section2_title', __( 'Section 2 Title', 'crb' ) )
			->set_width(50),
		Field::make( 'text', 'topic_section2_text', __( 'Section 2 Text', 'crb' ) )
			->set_width(50),
		Field::make( 'text', 'topic_section3_title', __( 'Section 3 Title', 'crb' ) )
			->set_width(50),
		Field::make( 'text', 'topic_section3_text', __( 'Section 3 Text', 'crb' ) )
			->set_width(50),
		Field::make( 'complex', 'crb_topics', __( 'Topic Videos', 'crb' ) )
	 		->set_width( 100 )
	 		->set_layout( 'tabbed-vertical' )
	 		->setup_labels( array(
	 			'singular_name' => __( 'Topic', 'crb' ),
	 			'plural_name'   => __( 'Topics', 'crb' ),
	 		) )
	 		->add_fields( array(
				Field::make( 'image', 'topic_bg', __( 'Image', 'crb') )
					->set_width(33),
	 			Field::make( 'text', 'topic_title', __( 'Title', 'crb' ) )
	 				->set_width( 100 ),
				Field::make( 'oembed', 'topic_video_embed', __( 'Video URL', 'crb') )
					->set_width(100),
	 		) )
	 				->set_header_template( '<%- topic_title %>' ),
	 	 ) );

//Manifesto Section
Container::make( 'post_meta', __( 'Manifesto Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/manifesto.php' )
	->add_fields( array(

		 Field::make( 'complex', 'crb_manifesto', __( 'Manifesto', 'crb' ) )
		 	->set_width( 100 )
		 	->set_layout( 'tabbed-vertical' )
		 	->setup_labels( array(
		 	 	'singular_name' => __( 'Manifesto', 'crb' ),
		 	 	'plural_name'   => __( 'Manifestos', 'crb' ),
		 	 ) )
		 	->add_fields( array(
		 		Field::make( 'image', 'manifesto_img', __( 'Image', 'crb') )
		 			->set_width(33),
		 	 	Field::make( 'text', 'manifesto_text', __( 'Text', 'crb' ) )
		 	 		->set_width( 100 ),
		 	 	) )

	 ) );

//Future Section
Container::make( 'post_meta', __( 'Future Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/consulting.php' )
	->add_fields( array(
		Field::make( 'image', 'future_img', __( 'Background Image', 'crb') )
			->set_width(100),
	 	Field::make( 'text', 'future_title', __( 'Title', 'crb' ) )
	 	 	->set_width(50),
	 	Field::make( 'rich_text', 'future_text', __( 'Text', 'crb' ) )
	 	 	->set_width(50),
	 ) );

//Shape Section
Container::make( 'post_meta', __( 'Shape Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/consulting.php' )
	->add_fields( array(
	 	Field::make( 'image', 'shape_logo', __( 'Logo Image', 'crb') )
	 		->set_width(50),
	 	Field::make( 'rich_text', 'shape_mission', __( 'Mission', 'crb' ) )
	 	 	->set_width(50),
		Field::make( 'image', 'shape_img', __( 'Image', 'crb') )
	 	 	->set_width(100),
		Field::make( 'text', 'shape_title', __( 'Title', 'crb' ) )
	 	 	->set_width(50),
		Field::make( 'rich_text', 'shape_text', __( 'Text', 'crb' ) )
	 	 	->set_width(50),
	 ) );

//Vision Section
Container::make( 'post_meta', __( 'Vision Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/workshops.php' )
	->add_fields( array(
	 	Field::make( 'text', 'vision_title', __( 'Title', 'crb' ) )
	 	 ->set_width(100),
	  Field::make( 'oembed', 'vision_section1_img', __( 'Section 1 Video', 'crb') )
	 	 ->set_width(33),
	 	Field::make( 'text', 'vision_section1_title', __( 'Section 1 Title', 'crb' ) )
	 	 ->set_width(33),
	  Field::make( 'text', 'vision_section1_text', __( 'Section 1 Text', 'crb' ) )
	   ->set_width(33),
		Field::make( 'oembed', 'vision_section2_img', __( 'Section 2 Video', 'crb') )
 	 	 ->set_width(33),
	 	Field::make( 'text', 'vision_section2_title', __( 'Section 2 Title', 'crb' ) )
	 	 ->set_width(33),
	 	Field::make( 'text', 'vision_section2_text', __( 'Section 2 Text', 'crb' ) )
	 	 ->set_width(33),
		Field::make( 'oembed', 'vision_section3_img', __( 'Section 3 Video', 'crb') )
 	 	 ->set_width(33),
	 	Field::make( 'text', 'vision_section3_title', __( 'Section 3 Title', 'crb' ) )
	 	 ->set_width(33),
	 	Field::make( 'text', 'vision_section3_text', __( 'Section 3 Text', 'crb' ) )
	 	 ->set_width(33),
	 ) );

//Workshops Section
Container::make( 'post_meta', __( 'Workshops Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/workshops.php' )
	->add_fields( array(
	 	Field::make( 'text', 'workshop_section_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'workshop_subtitle', __( 'Subtitle', 'crb' ) )
		 	->set_width(50),
		Field::make( 'text', 'workshop_mission', __( 'Mission', 'crb' ) )
			->set_width(50),

		Field::make( 'complex', 'crb_workshops', __( 'Workshops', 'crb' ) )
	 		->set_width( 100 )
	 		->set_layout( 'tabbed-vertical' )
	 		->setup_labels( array(
	 			'singular_name' => __( 'Workshop', 'crb' ),
	 			'plural_name'   => __( 'Workshops', 'crb' ),
	 		) )
	 		->add_fields( array(
	 			Field::make( 'text', 'workshop_title', __( 'Title', 'crb' ) )
	 				->set_width( 100 ),
				Field::make( 'text', 'workshop_text', __( 'Text', 'crb' ) )
					->set_width( 100 ),
				Field::make( 'text', 'workshop_media', __( 'Workshop Media', 'crb') )
		 	 	 ->set_width(100),
	 		) )
	 				->set_header_template( '<%- workshop_title %>' ),
	  ) );


//Business & Manufacturing Section
Container::make( 'post_meta', __( 'Business & Manufacturing Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/impact.php' )
	->add_fields( array(
	 	Field::make( 'text', 'bm_section_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'bm_subtitle', __( 'Subtitle', 'crb' ) )
		 	->set_width(50),

		Field::make( 'complex', 'crb_bm_images', __( 'Business & Manufacturing Images', 'crb' ) )
	 		->set_width( 100 )
	 		->set_layout( 'tabbed-vertical' )
	 		->setup_labels( array(
	 			'singular_name' => __( 'BM_img', 'crb' ),
	 			'plural_name'   => __( 'BM_imgs', 'crb' ),
	 		) )
	 		->add_fields( array(
	 			Field::make( 'text', 'bm_title', __( 'Title', 'crb' ) )
	 				->set_width( 100 ),
				Field::make( 'image', 'bm_img', __( 'Image', 'crb') )
		 	 	 ->set_width(100),
	 		) )
	 				->set_header_template( '<%- bm_title %>' ),

		Field::make( 'complex', 'crb_bm_list', __( 'Business & Manufacturing List', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'BM_list', 'crb' ),
				'plural_name'   => __( 'BM_lists', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'text', 'bm_list_title', __( 'Title', 'crb' ) )
					->set_width( 100 ),
			) )
					->set_header_template( '<%- bm_list_title %>' ),
	  ) );

//Healthcare Industry Section
Container::make( 'post_meta', __( 'Healthcare Industry Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/impact.php' )
	->add_fields( array(
	 	Field::make( 'text', 'hc_section_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'hc_subtitle', __( 'Subtitle', 'crb' ) )
		 	->set_width(50),

		Field::make( 'complex', 'crb_hc_images', __( 'Healthcare Industry Images', 'crb' ) )
	 		->set_width( 100 )
	 		->set_layout( 'tabbed-vertical' )
	 		->setup_labels( array(
	 			'singular_name' => __( 'HC_img', 'crb' ),
	 			'plural_name'   => __( 'HC_imgs', 'crb' ),
	 		) )
	 		->add_fields( array(
	 			Field::make( 'text', 'hc_title', __( 'Title', 'crb' ) )
	 				->set_width( 100 ),
				Field::make( 'image', 'hc_img', __( 'Image', 'crb') )
		 	 	 ->set_width(100),
	 		) )
	 				->set_header_template( '<%- hc_title %>' ),

		Field::make( 'complex', 'crb_hc_list', __( 'Healthcare Industry List', 'crb' ) )
			->set_width( 100 )
			->set_layout( 'tabbed-vertical' )
			->setup_labels( array(
				'singular_name' => __( 'HC_list', 'crb' ),
				'plural_name'   => __( 'HC_lists', 'crb' ),
			) )
			->add_fields( array(
				Field::make( 'text', 'hc_list_title', __( 'Title', 'crb' ) )
					->set_width( 100 ),
			) )
					->set_header_template( '<%- hc_list_title %>' ),
	  ) );

//IT Section
Container::make( 'post_meta', __( 'Information Technology Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/impact.php' )
	->add_fields( array(
	 	Field::make( 'text', 'it_section_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'it_subtitle', __( 'Subtitle', 'crb' ) )
		 	->set_width(50),

		Field::make( 'complex', 'crb_it_images', __( 'Information Technology Images', 'crb' ) )
	 		->set_width( 100 )
	 		->set_layout( 'tabbed-vertical' )
	 		->setup_labels( array(
	 			'singular_name' => __( 'IT_img', 'crb' ),
	 			'plural_name'   => __( 'IT_imgs', 'crb' ),
	 		) )
	 		->add_fields( array(
	 			Field::make( 'text', 'it_title', __( 'Title', 'crb' ) )
	 				->set_width( 100 ),
				Field::make( 'image', 'it_img', __( 'Image', 'crb') )
		 	 	 ->set_width(100),
	 		) )
	 				->set_header_template( '<%- it_title %>' ),

	  ) );

//Non-Profits Section
Container::make( 'post_meta', __( 'Non-Profits Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/impact.php' )
	->add_fields( array(
	 	Field::make( 'text', 'np_section_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'np_subtitle', __( 'Subtitle', 'crb' ) )
		 	->set_width(50),

		Field::make( 'complex', 'crb_np_images', __( 'Non-Profit Images', 'crb' ) )
	 		->set_width( 100 )
	 		->set_layout( 'tabbed-vertical' )
	 		->setup_labels( array(
	 			'singular_name' => __( 'NP_img', 'crb' ),
	 			'plural_name'   => __( 'NP_imgs', 'crb' ),
	 		) )
	 		->add_fields( array(
	 			Field::make( 'text', 'np_title', __( 'Title', 'crb' ) )
	 				->set_width( 100 ),
				Field::make( 'image', 'np_img', __( 'Image', 'crb') )
		 	 	 ->set_width(100),
	 		) )
	 				->set_header_template( '<%- np_title %>' ),

	  ) );

//Retail & Grocery Section
Container::make( 'post_meta', __( 'Retail & Grocery Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/impact.php' )
	->add_fields( array(
	 	Field::make( 'text', 'rg_section_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'rg_subtitle', __( 'Subtitle', 'crb' ) )
		 	->set_width(50),

		Field::make( 'complex', 'crb_rg_images', __( 'Retail & Grocery Images', 'crb' ) )
	 		->set_width( 100 )
	 		->set_layout( 'tabbed-vertical' )
	 		->setup_labels( array(
	 			'singular_name' => __( 'rg_img', 'crb' ),
	 			'plural_name'   => __( 'rg_imgs', 'crb' ),
	 		) )
	 		->add_fields( array(
	 			Field::make( 'text', 'rg_title', __( 'Title', 'crb' ) )
	 				->set_width( 100 ),
				Field::make( 'image', 'rg_img', __( 'Image', 'crb') )
		 	 	 ->set_width(100),
	 		) )
	 				->set_header_template( '<%- rg_title %>' ),

	  ) );

//Engage Calendly Section
Container::make( 'post_meta', __( 'Calendly Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/engage.php' )
	->add_fields( array(
		Field::make( 'image', 'calendly_bg', __( 'Background Image', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'calendly_section_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
		Field::make( 'text', 'calendly_subtitle', __( 'Subtitle', 'crb' ) )
		 	->set_width(100),
		Field::make( 'text', 'calendly_email', __( 'Email', 'crb' ) )
		 	->set_width(100),
		Field::make( 'text', 'calendly_phone', __( 'Phone', 'crb' ) )
		 	->set_width(100),
		Field::make( 'rich_text', 'calendly_script', __( 'Calendly Script', 'crb' ) )
			->set_width(100),
	  ) );

//CTA Section
Container::make( 'post_meta', __( 'Schedule Section', 'crb' ) )
	->where( 'post_template', '=', 'templates/front-page.php' )
	->or_where( 'post_template', '=', 'templates/consulting.php' )
	->or_where( 'post_template', '=', 'templates/speaking.php' )
	->or_where( 'post_template', '=', 'templates/workshops.php' )
	->or_where( 'post_template', '=', 'templates/impact.php' )
	->add_fields( array(
	 	Field::make( 'text', 'schedule_title', __( 'Title', 'crb' ) )
	 		->set_width(100),
	  Field::make( 'text', 'schedule_sub', __( 'Subtitle', 'crb' ) )
	 		->set_width(100),
	 ) );

 //Subheader Section -- Blog Page
 Container::make( 'post_meta', __( 'Subheader Section', 'crb' ) )
 	->where( 'post_template', '=', 'templates/blog.php' )
 	->add_fields( array(
 		Field::make( 'text', 'blog_subtitle', __( 'Subtitle', 'crb' ) )
 		 ->set_width(50),
 	  Field::make( 'text', 'blog_text', __( 'Text', 'crb' ) )
 	 	 ->set_width(50),

 	 ) );
