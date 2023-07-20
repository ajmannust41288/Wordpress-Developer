<?php
/**
 * Web Startup Agency functions and definitions
 *
 * @package Web Startup Agency
 */

if ( ! function_exists( 'web_startup_agency_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function web_startup_agency_setup() {
	global $web_startup_agency_content_width;
	if ( ! isset( $web_startup_agency_content_width ) )
		$web_startup_agency_content_width = 680;

	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles');
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_editor_style( 'editor-style.css' );
}
endif; // smallbiz_startup_setup
add_action( 'after_setup_theme', 'web_startup_agency_setup' );

function web_startup_agency_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'web-startup-agency' ),
		'description'   => __( 'Appears on blog page sidebar', 'web-startup-agency' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'web-startup-agency' ),
		'description'   => __( 'Appears on footer', 'web-startup-agency' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-1 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'web-startup-agency' ),
		'description'   => __( 'Appears on footer', 'web-startup-agency' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-2 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'web-startup-agency' ),
		'description'   => __( 'Appears on footer', 'web-startup-agency' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'web-startup-agency' ),
		'description'   => __( 'Appears on footer', 'web-startup-agency' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'web_startup_agency_widgets_init' );

add_action( 'wp_enqueue_scripts', 'web_startup_agency_enqueue_styles' );

function web_startup_agency_enqueue_styles() {
    $parenthandle = 'web-startup-agency-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, esc_url(get_template_directory_uri()) . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'web-startup-agency-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );

}

// customizer css
function web_startup_agency_enqueue_customizer_css() {
    wp_enqueue_style( 'web_startup_agency-customizer-css', get_stylesheet_directory_uri() . '/css/customize-controls.css' );
}
add_action( 'customize_controls_print_styles', 'web_startup_agency_enqueue_customizer_css' );

// script 
function web_startup_agency_scripts() {

    wp_enqueue_script( 'owl.carousel-js', esc_url(get_theme_file_uri()). '/js/owl.carousel.js', array('jquery') );
    wp_enqueue_script( 'theme-js', esc_url(get_theme_file_uri()). '/js/theme.js', array('jquery') );
	wp_enqueue_style( 'owl.carousel-css', esc_url(get_theme_file_uri())."/css/owl.carousel.css" );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$headings_font = esc_html(get_theme_mod('web-startup-agency_headings_fonts'));
	$body_font = esc_html(get_theme_mod('web-startup-agency_body_fonts'));

	if( $headings_font ) {
		wp_enqueue_style( 'web-startup-agency-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );
	} else {
		wp_enqueue_style( 'web-startup-agency-poppins', '//fonts.googleapis.com/css?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800');
	}
	if( $body_font ) {
		wp_enqueue_style( 'web-startup-agency-poppins', '//fonts.googleapis.com/css?family='. $body_font );
	} else {
		wp_enqueue_style( 'web-startup-agency-source-body', '//fonts.googleapis.com/css?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800');
	}
}
add_action( 'wp_enqueue_scripts', 'web_startup_agency_scripts' );

add_action( 'customize_register', 'web_startup_agency_customize_register', 11 );

function web_startup_agency_customize_register() {
	global $wp_customize;

	$wp_customize->remove_section( 'smallbiz_startup_one_cols_section' );
	$wp_customize->remove_section( 'upgrade_premium' );

	// upgrade to pro
	$wp_customize->add_setting(
		'pro_info_buttons',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'web_startup_agency_sanitize_text',
		)
	);
	$wp_customize->add_control(
		new web_startup_agency_Pro_Button_Customize_Control(
			$wp_customize,
			'pro_info_buttons',
			array(
				'section' => 'web_upgrade_premium',
			)
		)
	);
	
}

// Customizer Section
function web_startup_agency_customizer ( $wp_customize ) {

	// Home Category Dropdown Section
	$wp_customize->add_section('web_startup_agency_one_cols_section',array(
		'title'	=> __('Manage Slider Section','web-startup-agency'),
		'description'	=> __('Select Category from the Dropdowns for slider, Also use the given image dimension (1600 x 600).','web-startup-agency'),
		'priority'	=> null,
		'panel' => 'smallbiz_startup_panel_area'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'web_startup_agency_pageboxes', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new web_startup_agency_Category_Dropdown_Custom_Control( $wp_customize, 'web_startup_agency_pageboxes', array(
		'section' => 'web_startup_agency_one_cols_section',
		'settings'   => 'web_startup_agency_pageboxes',
	) ) );
	
	//Hide Section
	$wp_customize->add_setting('web_startup_agency_hide_categorysec',array(
		'default' => false,
		'sanitize_callback' => 'smallbiz_startup_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'web_startup_agency_hide_categorysec', array(
	   'settings' => 'web_startup_agency_hide_categorysec',
	   'section'   => 'web_startup_agency_one_cols_section',
	   'label'     => __('Check To Enable This Section','web-startup-agency'),
	   'type'      => 'checkbox'
	));

}

add_action( 'customize_register', 'web_startup_agency_customizer' );


function web_startup_agency_remove_my_action() {
    remove_action( 'admin_menu','smallbiz_startup_theme_info_menu_link' );
    remove_action( 'after_switch_theme','smallbiz_startup_options' );
}
add_action( 'init', 'web_startup_agency_remove_my_action');


// upgrade to pro
function web_startup_agency_upgrade_pro_options( $wp_customize ) {

	$wp_customize->add_section(
		'web_upgrade_premium',
		array(
			'title'    => __( 'About Web Startup Agency', 'web-startup-agency' ),
			'priority' => 1,
		)
	);

	class web_startup_agency_Pro_Button_Customize_Control extends WP_Customize_Control {
		public $type = 'upgrade_premium';

		function render_content() {
			?>
			<div class="pro_info">
				<ul>
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( web_startup_agency_PREMIUM_PAGE ); ?>" target="_blank"><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade Pro', 'web-startup-agency' ); ?> </a></li>
				</ul>
			</div>
			<?php
		}
	}

	}
add_action( 'customize_register', 'web_startup_agency_upgrade_pro_options' );

if ( ! defined( 'web_startup_agency_PREMIUM_PAGE' ) ) {
define('web_startup_agency_PREMIUM_PAGE',__('https://www.theclassictemplates.com/wp-themes/startup-company-wordpress-theme/','web-startup-agency'));
}


get_template_part('/inc/select/category-dropdown-custom-control');