<?php

/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

if (!class_exists('Redux')) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'pexr';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = __DIR__ . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if (is_dir($sample_patterns_path)) {
	$sample_patterns_dir = opendir($sample_patterns_path);

	if ($sample_patterns_dir) {

		// phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
		while (false !== ($sample_patterns_file = readdir($sample_patterns_dir))) {
			if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
				$name              = explode('.', $sample_patterns_file);
				$name              = str_replace('.' . end($name), '', $sample_patterns_file);
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get('Name'),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get('Version'),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__('Theme Options', 'pexr'),

	// The text to appear on the page title.
	'page_title'                => esc_html__('Pexr Theme Options', 'Pexr'),

	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => false,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => $opt_name,

	// Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Allow the panel to open expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 1,

	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => true,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// The time transients will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => true,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// Possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
	'search'                    => true,
);
Redux::set_args($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */
$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__('Theme Information 1', 'pexr'),
		'content' => '<p>' . esc_html__('This is the tab content, HTML is allowed.', 'pexr') . '</p>',
	),
	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__('Theme Information 2', 'pexr'),
		'content' => '<p>' . esc_html__('This is the tab content, HTML is allowed.', 'pexr') . '</p>',
	),
);
Redux::set_help_tab($opt_name, $help_tabs);

// Set the help sidebar.
$content = '<p>' . esc_html__('This is the sidebar content, HTML is allowed.', 'pexr') . '</p>';

Redux::set_help_sidebar($opt_name, $content);

/*
 * <--- END HELP TABS
 */

/*
 * ---> START SECTIONS
 */
// header section area start
Redux::set_section($opt_name, array(
	'title'   => 'Header',
	'desc'    => __('This is Heading Area ', "pexr"),
	'id'      => 'header_all',

));
// header top content area
Redux::set_section($opt_name, array(
	'title'   => 'Header Top',
	'desc'    => __('This is Heading Top Area', 'pexr'),
	'id'      => 'header_top',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'    => 'helpline_text',
			'type'  => 'text',
			'title' => __('Helpline Text Add Here', 'pexr'),
			'default' => __('Customar Care', 'pexr')
		),
		array(
			'id'    => 'helpline_number',
			'type'  => 'text',
			'title' => __('Helpline Number Add Here', 'pexr'),
			'default' => __('(888) 123-4567', 'pexr')
		),
		array(
			'id'    => 'login_link',
			'type'  => 'text',
			'title' => __('Login', 'pexr'),
			'desc'  => __('Please Input Your Login Link', 'pexr'),
			'validate' => 'url',

		),
		array(
			'id'    => 'register_link',
			'type'  => 'text',
			'title' => __('Register', 'pexr'),
			'desc'  => __('Please Input Your Register Link', 'pexr'),
			'validate' => 'url',

		),
	),

));
// Header top social area
Redux::set_section($opt_name, array(
	'title'   => 'Header Top Social',
	'desc'    => __('This is Heading Top Social Area', 'pexr'),
	'id'      => 'header_top_social',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'    => 'pexr-facebook',
			'type'  => 'text',
			'title' => __('Facebook Link', 'pexr'),
			'validate' => 'url',

		),
		array(
			'id'    => 'pexr-twitter',
			'type'  => 'text',
			'title' => __('Twitter Link', 'pexr'),
			'validate' => 'url'
		),
		array(
			'id'    => 'pexr-google',
			'type'  => 'text',
			'title' => __('Google Link', 'pexr'),
			'validate' => 'url'
		),
		array(
			'id'    => 'pexr-linkedin',
			'type'  => 'text',
			'title' => __('Linkedin Link', 'pexr'),
			'validate' => 'url'
		),
	),

));
// header section area end

// SLide section start
Redux::set_section($opt_name, array(
	'title'   => 'Slider Area',
	'desc'    => __('This is Slider Area ', "pexr"),
	'id'      => 'slide_all',
));

// slider area one
Redux::set_section($opt_name, array(
	'title'   => 'Slider One',
	'desc'    => __('This is Slider Area One', "pexr"),
	'id'      => 'slide_one',
	'subsection' => true,
	'fields'  => array(
		array(
			'type'     => 'media',
			'id'       => 'pexr_silder_one_bg',
			'title'    =>  __('Slider One Bacground Image', 'pexr'),
			'desc'    =>  __('Please ADD First Slider Background Image', 'pexr')
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_one_title',
			'title'    =>  __('Slider One Title', 'pexr'),
			'desc'     =>  __('Please ADD First Slider Title', 'pexr'),
			'default'  => __('We Believe Great Design <br/> Make Great Business', "pexr"),
		),
		array(
			'type'     => 'textarea',
			'id'       => 'pexr_silder_one_content',
			'title'    =>  __('Slider One Content', 'pexr'),
			'desc'     =>  __('Please ADD First Slider Content', 'pexr'),
			'default'  => __('Professional creativity clean featured website templates for your business<br />Let’s start an awesome project now!', 'pexr')
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_one_button',
			'title'    =>  __('Slider One Button', 'pexr'),
			'desc'    =>  __('Please ADD First Slider Button Name', 'pexr'),
			'default'  => __('Purchase Now', "pexr"),
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_one_button-link',
			'title'    =>  __('Slider One Button Link', 'pexr'),
			'desc'    =>  __('Please ADD First Slider Button Link', 'pexr'),
			'validate' => 'url'
		),

	)
));
// slider area two
Redux::set_section($opt_name, array(
	'title'   => 'Slider Two',
	'desc'    => __('This is Slider Area One', "pexr"),
	'id'      => 'slide_two',
	'subsection' => true,
	'fields'  => array(
		array(
			'type'     => 'media',
			'id'       => 'pexr_silder_two_bg',
			'title'    =>  __('Slider Two Bacground Image', 'pexr'),
			'desc'    =>  __('Please ADD Seconed Slider Background Image', 'pexr')
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_two_title',
			'title'    =>  __('Slider Two Title', 'pexr'),
			'desc'     =>  __('Please ADD Seconed Slider Title', 'pexr'),
			'default'  => __('We Create Awesome<br /> Website Templates ', "pexr"),
		),
		array(
			'type'     => 'textarea',
			'id'       => 'pexr_silder_two_content',
			'title'    =>  __('Slider Two Content', 'pexr'),
			'desc'     =>  __('Please ADD Seconed Slider Content', 'pexr'),
			'default'  => __('Professional creativity clean featured website templates for your business<br />Let’s start an awesome project now!', 'pexr')
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_two_button',
			'title'    =>  __('Slider Two Button', 'pexr'),
			'desc'    =>  __('Please ADD Seconed Slider Button Name', 'pexr'),
			'default'  => __('Purchase Now', "pexr"),
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_two_button-link',
			'title'    =>  __('Slider Two Button Link', 'pexr'),
			'desc'    =>  __('Please ADD Seconed Slider Button Link', 'pexr'),
			'validate' => 'url'
		),

	)
));
// slider area three
Redux::set_section($opt_name, array(
	'title'   => 'Slider Three',
	'desc'    => __('This is Slider Area Three', "pexr"),
	'id'      => 'slide_three',
	'subsection' => true,
	'fields'  => array(
		array(
			'type'     => 'media',
			'id'       => 'pexr_silder_three_bg',
			'title'    =>  __('Slider Three Bacground Image', 'pexr'),
			'desc'    =>  __('Please ADD Third Slider Background Image', 'pexr')
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_three_title',
			'title'    =>  __('Slider Three Title', 'pexr'),
			'desc'     =>  __('Please ADD Third Slider Title', 'pexr'),
			'default'  => __('We Build Successful <br />Digital Stories for Web', "pexr"),
		),
		array(
			'type'     => 'textarea',
			'id'       => 'pexr_silder_three_content',
			'title'    =>  __('Slider Three Content', 'pexr'),
			'desc'     =>  __('Please ADD Third Slider Content', 'pexr'),
			'default'  => __('Professional creativity clean featured website templates for your business<br />Let’s start an awesome project now!', 'pexr')
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_three_button',
			'title'    =>  __('Slider Three Button', 'pexr'),
			'desc'    =>  __('Please ADD Third Slider Button Name', 'pexr'),
			'default'  => __('Purchase Now', "pexr"),
		),
		array(
			'type'     => 'text',
			'id'       => 'pexr_silder_three_button-link',
			'title'    =>  __('Slider Three Button Link', 'pexr'),
			'desc'    =>  __('Please ADD Third Slider Button Link', 'pexr'),
			'validate' => 'url'
		),

	)
));
// SLide section end

// Advantace area start
Redux::set_section($opt_name, array(
	'title'   => 'Advantace Area',
	'desc'    => __('This is Advantace Area', "pexr"),
	'id'      => 'advantace_area',
));
// advantace area one
Redux::set_section($opt_name, array(
	'title'   => 'Advantace One',
	'desc'    => __('This is Advantace Area one', "pexr"),
	'id'      => 'advantace_one',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'       =>   'advantace_one_title',
			'title'    =>  __('Advantace One Title', 'pexr'),
			'type'     => 'text',
			'desc'     =>  __('Please input here advance one title', 'pexr'),
			'default'  => __('Multiple Designed Powerful Templates', 'pexr'),
		),
		array(
			'id'       =>   'advantace_one_content',
			'title'    =>  __('Advantace One Content', 'pexr'),
			'type'     => 'textarea',
			'desc'     =>  __('Please input here advance one Content', 'pexr'),
			'default'  => __('Default model the and a search many web sites the stilin infancy versions have over the years.', 'pexr'),
		),
	)
));

// advantace area two
Redux::set_section($opt_name, array(
	'title'   => 'Advantace Two',
	'desc'    => __('This is Advantace Area Two', "pexr"),
	'id'      => 'advantace_two',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'       =>   'advantace_two_title',
			'title'    =>  __('Advantace Two Title', 'pexr'),
			'type'     => 'text',
			'desc'     =>  __('Please input here advance Two title', 'pexr'),
			'default'  => __('Tons of Featured Shortcodes', 'pexr'),
		),
		array(
			'id'       =>   'advantace_two_content',
			'title'    =>  __('Advantace Two Content', 'pexr'),
			'type'     => 'textarea',
			'desc'     =>  __('Please input here advance Two Content', 'pexr'),
			'default'  => __('Default model the and a search many web sites the stilin infancy versions have over the years.', 'pexr'),
		),
	)
));
// advantace area three
Redux::set_section($opt_name, array(
	'title'   => 'Advantace Three',
	'desc'    => __('This is Advantace Area three', "pexr"),
	'id'      => 'advantace_three',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'       =>   'advantace_three_title',
			'title'    =>  __('Advantace Three Title', 'pexr'),
			'type'     => 'text',
			'desc'     =>  __('Please input here advance three title', 'pexr'),
			'default'  => __('Can be used for any type of website', 'pexr'),
		),
		array(
			'id'       =>   'advantace_three_content',
			'title'    =>  __('Advantace Three Content', 'pexr'),
			'type'     => 'textarea',
			'desc'     =>  __('Please input here advance three Content', 'pexr'),
			'default'  => __('Default model the and a search many web sites the stilin infancy versions have over the years.', 'pexr'),
		),
	)
));
// advantace area end

// All pexr heading section start
Redux::set_section($opt_name, array(
	'title'   => 'Pexr All Section Heading',
	'desc'    => __('This is All section heading area.', "pexr"),
	'id'      => 'pexr_all-heading',
));

// our Works heading
Redux::set_section($opt_name, array(
	'title'   => 'Our Work section Heading',
	'desc'    => __('This is Work section heading area', "pexr"),
	'id'      => 'pexr_work_heading_area',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'              =>  'pexr_work_heading_title',
			'type'            => 'text',
			'title'           => __('Our Work Heading Title', 'pexr'),
			'default'         => __('Our Works', 'pexr')
		),
		array(
			'id'              =>  'pexr_work_heading_content',
			'type'            => 'textarea',
			'title'           => __('Our Work Heading Content', 'pexr'),
			'default'         => __('There are many alteration in some form or randomised words', 'pexr')
		),
	)
));
// service area heading
Redux::set_section($opt_name, array(
	'title'   => 'What We Do section Heading',
	'desc'    => __('This is We Do section heading area', "pexr"),
	'id'      => 'pexr_wedo_heading_area',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'              =>  'pexr_wedo_heading_title',
			'type'            => 'text',
			'title'           => __('We Do Heading Title', 'pexr'),
			'default'         => __('What We Do?', 'pexr')
		)

	)
));
// Why chhose us area heading
Redux::set_section($opt_name, array(
	'title'   => 'WHY CHOOSE US section Heading',
	'desc'    => __('This is choose section heading area', "pexr"),
	'id'      => 'pexr_choose_heading_area',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'              =>  'pexr_choose_heading_title',
			'type'            => 'text',
			'title'           => __('Why choose us Heading Title', 'pexr'),
			'default'         => __('WHY CHOOSE US?', 'pexr')
		)

	)
));
// All pexr heading section end

// What we do area bottom start
Redux::set_section($opt_name, array(
	'title'   => 'What We Do section Bottom',
	'desc'    => __('This is We Do section Bottom area', "pexr"),
	'id'      => 'pexr_wedo_bottom_area',

	'fields'  => array(
		array(
			'id'              =>  'pexr_wedo_bottom_content',
			'type'            => 'textarea',
			'title'           => __('We Do Bttom Content', 'pexr'),
			'default'         => __('Powerful Packed Designs Clean and Professional Theme DESIGNED FOR ANY WEBSITE!', 'pexr')

		),
		array(
			'id'              =>  'pexr_wedo_bottom_button',
			'type'            => 'text',
			'title'           => __('We Do Bttom Button', 'pexr'),
			'default'         => __('Purchase Now!', 'pexr')
		),
		array(
			'id'              =>  'pexr_wedo_bottom_Button_link',
			'type'            => 'text',
			'title'           => __('We Do Bttom Button Link', 'pexr'),
			'validate'        => 'url'

		),

	)
));
//  What we do area bottom end

// advantace area three
Redux::set_section($opt_name, array(
	'title'   => 'Why Choose Us Content',
	'desc'    => __('Input Your Conent Here', "pexr"),
	'id'      => 'why_choose_us_area',
));
// why choose us area one
Redux::set_section($opt_name, array(
	'title'   => 'Why Choose Us First Content',
	'desc'    => __('This is Choose Us Content One', "pexr"),
	'id'      => 'why_choose-us_one',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'       =>   'choose_us_img_one',
			'title'    =>  __('Why Choose us One image', 'pexr'),
			'type'     => 'media',
			'desc'     =>  __('Please input here image one', 'pexr'),
		),
		array(
			'id'       =>   'choose_us_title_one',
			'title'    =>  __('Why Choose us One Title', 'pexr'),
			'type'     => 'text',
			'desc'     =>  __('Please input here title one', 'pexr'),
			'default'  => __('10 Diffrent Home Page Layouts', 'pexr'),
		),
		array(
			'id'       =>   'choose_us_content_one',
			'title'    =>  __('Why Choose us One Content', 'pexr'),
			'type'     => 'textarea',
			'desc'     =>  __('Please input here Content one', 'pexr'),
			'default'  => __('Lorem Ipsum as model will many web sites still over publishing the years.', 'pexr'),
		),
	)
));
// why choose us area two
Redux::set_section($opt_name, array(
	'title'   => 'Why Choose Us Sconed Content',
	'desc'    => __('This is Choose Us Content two', "pexr"),
	'id'      => 'why_choose-us_two',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'       =>   'choose_us_img_two',
			'title'    =>  __('Why Choose us two image', 'pexr'),
			'type'     => 'media',
			'desc'     =>  __('Please input here image two', 'pexr'),
		),
		array(
			'id'       =>   'choose_us_title_two',
			'title'    =>  __('Why Choose us two Title', 'pexr'),
			'type'     => 'text',
			'desc'     =>  __('Please input here title two', 'pexr'),
			'default'  => __('5 Diffrent Header Menu Styles', 'pexr'),
		),
		array(
			'id'       =>   'choose_us_content_two',
			'title'    =>  __('Why Choose us two Content', 'pexr'),
			'type'     => 'textarea',
			'desc'     =>  __('Please input here Content two', 'pexr'),
			'default'  => __('Lorem Ipsum as model will many web sites still over publishing the years.', 'pexr'),
		),
	)
));
// why choose us area three
Redux::set_section($opt_name, array(
	'title'   => 'Why Choose Us Third Content',
	'desc'    => __('This is Choose Us Content three', "pexr"),
	'id'      => 'why_choose-us_three',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'       =>   'choose_us_img_three',
			'title'    =>  __('Why Choose us three image', 'pexr'),
			'type'     => 'media',
			'desc'     =>  __('Please input here image three', 'pexr'),
		),
		array(
			'id'       =>   'choose_us_title_three',
			'title'    =>  __('Why Choose us three Title', 'pexr'),
			'type'     => 'text',
			'desc'     =>  __('Please input here title three', 'pexr'),
			'default'  => __('Unlimited Useful Shortcodes', 'pexr'),
		),
		array(
			'id'       =>   'choose_us_content_three',
			'title'    =>  __('Why Choose us three Content', 'pexr'),
			'type'     => 'textarea',
			'desc'     =>  __('Please input here Content three', 'pexr'),
			'default'  => __('Lorem Ipsum as model will many web sites still over publishing the years.', 'pexr'),
		),
	)
));
// why choose us area four
Redux::set_section($opt_name, array(
	'title'   => 'Why Choose Us Fourth Content',
	'desc'    => __('This is Choose Us Content four', "pexr"),
	'id'      => 'why_choose_us_four',
	'subsection' => true,
	'fields'  => array(
		array(
			'id'       =>   'choose_us_img_four',
			'title'    =>  __('Why Choose us four image', 'pexr'),
			'type'     => 'media',
			'desc'     =>  __('Please input here image four', 'pexr'),
		),
		array(
			'id'       =>   'choose_us_title_four',
			'title'    =>  __('Why Choose us four Title', 'pexr'),
			'type'     => 'text',
			'desc'     =>  __('Please input here title four', 'pexr'),
			'default'  => __('Setup any website quick & easy', 'pexr'),
		),
		array(
			'id'       =>   'choose_us_content_four',
			'title'    =>  __('Why Choose us four Content', 'pexr'),
			'type'     => 'textarea',
			'desc'     =>  __('Please input here Content four', 'pexr'),
			'default'  => __('Lorem Ipsum as model will many web sites still over publishing the years.', 'pexr'),
		),
	)
));
// Why Choose US  area end

// great features area start
Redux::set_section($opt_name, array(
	'title'            =>  __('Great Features Section', 'pexr'),
	'id'               => 'great_features',
	'fields'           => array(
		array(
			'title'              => __('Section Image', 'pexr'),
			'id'                 => 'great_section_img',
			'type'               => 'media',
			'desc'               => __('Please Wright Your Image For great feature', 'pexr'),

		),
		array(
			'title'              => __('Section Name', 'pexr'),
			'id'                 => 'great_section_name',
			'type'               => 'text',
			'desc'               => __('Please Wright Your name For great feature', 'pexr'),
			'default'            => __('Great Features', 'pexr')
		),
		array(
			'title'              => __('Section Title', 'pexr'),
			'id'                 => 'great_section_title',
			'type'               => 'text',
			'desc'               => __('Please Wright Your Title For great feature', 'pexr'),
			'default'            => __('Easy-to-customize and fully featured designs', 'pexr')
		),
		array(
			'title'              => __('Section Content', 'pexr'),
			'id'                 => 'great_section_content',
			'type'               => 'textarea',
			'desc'               => __('Please Wright Your content For great feature', 'pexr'),
			'default'            => __('Theme includes unique designs inside of one powerful theme You can completely change the look and feel of your site in seconds', 'pexr')
		)
	)
));

// great design area start
Redux::set_section($opt_name, array(
	'title'            =>  __('Great Design Section', 'pexr'),
	'id'               => 'great_design',
	'fields'           => array(

		array(
			'title'              => __('Section Title', 'pexr'),
			'id'                 => 'great_design_name',
			'type'               => 'text',
			'desc'               => __('Please Wright Your Title For great design', 'pexr'),
			'default'            => __('We Believe Great Design Can Make Great Business ', 'pexr')
		),
		array(
			'title'              => __('Section SubTitle', 'pexr'),
			'id'                 => 'great_design_title',
			'type'               => 'text',
			'desc'               => __('Please Wright Your SubTitle For great design', 'pexr'),
			'default'            => __('Looks Great on Tablets and Mobile Devices', 'pexr')
		),
		array(
			'title'              => __('Section Content', 'pexr'),
			'id'                 => 'great_design_content',
			'type'               => 'textarea',
			'desc'               => __('Please Wright Your content For great design', 'pexr'),
			'default'            => __('Theme includes unique designs inside of one powerful theme you can completely change the look and feel of your site in seconds', 'pexr')
		),
		array(
			'title'              => __('Section button', 'pexr'),
			'id'                 => 'great_design_button',
			'type'               => 'text',
			'desc'               => __('Please Wright Your button name', 'pexr'),
			'default'            => __('Purchase Now!', 'pexr')
		),
		array(
			'title'              => __('Section Button Link', 'pexr'),
			'id'                 => 'great_design_button_link',
			'type'               => 'text',
			'desc'               => __('Inter Your Link For This Button', 'pexr'),

		)
	)
));






/*
 * <--- END SECTIONS
 */

/*
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR OTHER CONFIGS MAY OVERRIDE YOUR CODE.
 */

/*
 * --> Action hook examples.
 */

// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 is necessary to include the dynamically generated CSS to be sent to the function.
// add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
//
// Change the arguments after they've been declared, but before the panel is created.
// add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );
//
// Change the default value of a field after it's been set, but before it's been used.
// add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );
//
// Dynamically add a section.
// It can be also used to modify sections/fields.
// add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');
// .
if (!function_exists('compiler_action')) {
	/**
	 * This is a test function that will let you see when the compiler hook occurs.
	 * It only runs if a field's value has changed and compiler=>true is set.
	 *
	 * @param array  $options        Options values.
	 * @param string $css            Compiler selector CSS values  compiler => array( CSS SELECTORS ).
	 * @param array  $changed_values Any values changed since last save.
	 */
	function compiler_action(array $options, string $css, array $changed_values)
	{
		echo '<h1>The compiler hook has run!</h1>';
		echo '<pre>';
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions
		print_r($changed_values); // Values that have changed since the last save.
		// echo '<br/>';
		// print_r($options); //Option values.
		// echo '<br/>';
		// print_r($css); // Compiler selector CSS values compiler => array( CSS SELECTORS ).
		echo '</pre>';
	}
}

if (!function_exists('redux_validate_callback_function')) {
	/**
	 * Custom function for the callback validation referenced above
	 *
	 * @param array $field          Field array.
	 * @param mixed $value          New value.
	 * @param mixed $existing_value Existing value.
	 *
	 * @return array
	 */
	function redux_validate_callback_function(array $field, $value, $existing_value): array
	{
		$error   = false;
		$warning = false;

		// Do your validation.
		if (1 === (int) $value) {
			$error = true;
			$value = $existing_value;
		} elseif (2 === (int) $value) {
			$warning = true;
			$value   = $existing_value;
		}

		$return['value'] = $value;

		if (true === $error) {
			$field['msg']    = 'your custom error message';
			$return['error'] = $field;
		}

		if (true === $warning) {
			$field['msg']      = 'your custom warning message';
			$return['warning'] = $field;
		}

		return $return;
	}
}


if (!function_exists('dynamic_section')) {
	/**
	 * Custom function for filtering the section array.
	 * Good for child themes to override or add to the sections.
	 * Simply include this function in the child themes functions.php file.
	 * NOTE: the defined constants for URLs and directories will NOT be available at this point in a child theme,
	 * so you must use get_template_directory_uri() if you want to use any of the built-in icons.
	 *
	 * @param array $sections Section array.
	 *
	 * @return array
	 */
	function dynamic_section(array $sections): array
	{
		$sections[] = array(
			'title'  => esc_html__('Section via hook', 'your-textdomain-here'),
			'desc'   => '<p class="description">' . esc_html__('This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'your-textdomain-here') . '</p>',
			'icon'   => 'el el-paper-clip',

			// Leave this as a blank section, no options just some intro text set above.
			'fields' => array(),
		);

		return $sections;
	}
}

if (!function_exists('change_arguments')) {
	/**
	 * Filter hook for filtering the args.
	 * Good for child themes to override or add to the args array.
	 * It can also be used in other functions.
	 *
	 * @param array $args Global arguments array.
	 *
	 * @return array
	 */
	function change_arguments(array $args): array
	{
		$args['dev_mode'] = true;

		return $args;
	}
}

if (!function_exists('change_defaults')) {
	/**
	 * Filter hook for filtering the default value of any given field. Very useful in development mode.
	 *
	 * @param array $defaults Default value array.
	 *
	 * @return array
	 */
	function change_defaults(array $defaults): array
	{
		$defaults['str_replace'] = esc_html__('Testing filter hook!', 'your-textdomain-here');

		return $defaults;
	}
}

if (!function_exists('redux_custom_sanitize')) {
	/**
	 * Function to be used if the field sanitizes argument.
	 * Return value MUST be formatted or cleaned text to display.
	 *
	 * @param string $value Value to evaluate or clean.  Required.
	 *
	 * @return string
	 */
	function redux_custom_sanitize(string $value): string
	{
		$return = '';

		foreach (explode(' ', $value) as $w) {
			foreach (str_split($w) as $k => $v) {
				if (($k + 1) % 2 !== 0 && ctype_alpha($v)) {
					$return .= mb_strtoupper($v);
				} else {
					$return .= $v;
				}
			}

			$return .= ' ';
		}

		return $return;
	}
}
