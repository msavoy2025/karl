<?php
/* Login Page Changes */
function my_login_logo() { ?>
    <style type="text/css">
        body {
          background: #ffffff !important;
        }

        .login form {
          background: #ffffff !important;
          border:none !important;
          box-shadow: none !important;
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/resources/images/logo.svg);
            margin-top:100px;
		        width:436.75px;
		        background-size: contain;
		        background-repeat: no-repeat;
        	  padding-bottom: 30px;
        }

        #login {
            width: 436.75px !important;
            padding: 2% 0 0 !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* Script/CSS addons */
function style_scripts() {
    wp_enqueue_style( 'stylish', get_stylesheet_directory_uri() . '/style.css', false, microtime(), null);
    wp_enqueue_script('main', get_theme_file_uri('/resources/js/karl.js'), array('jquery'), microtime(), false);
    wp_enqueue_script('magic_line', get_theme_file_uri('/resources/js/magicLine.js'), false, 1.0, false);
    wp_enqueue_script('drag', get_theme_file_uri('/resources/js/drag.js'), false, microtime(), false);
}
add_action( 'wp_enqueue_scripts', 'style_scripts' );

// featured image for posts/pages
add_theme_support( 'post-thumbnails' );

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

     $new_filetypes = array();
     $new_filetypes['svg'] = 'image/svg';
     $file_types = array_merge($file_types, $new_filetypes );

     return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

add_filter( 'gform_confirmation_anchor', '__return_false' );

//navigation Header menu

function header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'header_menu' );

//navigation Footer Menu

function footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'footer_menu' );


//carbon fields setup
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function crb_attach_theme_options() {
  # Attach fields
  include_once( 'options/theme-options.php' );
  include_once( 'options/post-meta.php' );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
