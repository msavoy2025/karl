<?php

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
	->set_page_file( 'crbn-theme-options.php' )

	->add_tab( __( 'Case Studies', 'crb' ), array(

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
