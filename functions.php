<?php

function pexr_basic_data()
{
    load_textdomain('pexr', get_theme_file_uri('language'));
    add_theme_support('custom-logo', array(
        'height'  => 50,
        'width'   => 175,
    ));

    register_nav_menus(array(
        'main-menu'     =>  __('Main menu', 'pexr'),
    ));
    add_theme_support('post-thumbnails');
    add_image_size('pexr_work_thumb', 700, 450);
    add_image_size('pexr_blog_thumb', 350);
};
add_action('after_setup_theme', 'pexr_basic_data');


// for logo postion set
function pexr_custom_logo($logo)
{

    $logo = str_replace('custom-logo-link', 'logo style-2 mar-3', $logo);
    return $logo;
};
add_filter('get_custom_logo', 'pexr_custom_logo');

function pexr_all_file_enqueue_here()
{
    wp_enqueue_style('bootstrap', get_theme_file_uri('/js/bootstrap/bootstrap.min.css'));
    wp_enqueue_style('pexr-fonts-opensans', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
    wp_enqueue_style('pexr-fonts-roboto', "//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i");
    wp_enqueue_style('pexr-fonts-raleway', "//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
    wp_enqueue_style('pexr-megamenu', get_theme_file_uri('/js/megamenu/stylesheets/screen.css'));
    wp_enqueue_style('pexr-theme-default', get_theme_file_uri('/css/theme-default.css'));
    wp_enqueue_style('pexr-looders', get_theme_file_uri('/js/loaders/stylesheets/screen.css'));
    wp_enqueue_style('pexr-corporate', get_theme_file_uri('/css/corporate.css'));
    wp_enqueue_style('pexr-shortcodes', get_theme_file_uri('/css/shortcodes.css'));   
     wp_enqueue_style('fontawesome', get_theme_file_uri('/fontawsome/css/all.min.css'));
     wp_enqueue_style('font-awesome', get_theme_file_uri('/fonts/font-awesome/css/font-awesome.min.css'));
    wp_enqueue_style('Simple-Line-Icons-Webfont', get_theme_file_uri('/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css'));
    wp_enqueue_style('et-line-font', get_theme_file_uri('/fonts/et-line-font/et-line-font.css'));
    wp_enqueue_style('revolution-slider-settings', get_theme_file_uri('/js/revolution-slider/css/settings.css'));
    wp_enqueue_style('revolution-slider-layers', get_theme_file_uri('/js/revolution-slider/css/layers.css'));
    wp_enqueue_style('revolution-slider-navigation', get_theme_file_uri('/js/revolution-slider/css/navigation.css'));
    wp_enqueue_style('owl-carousel', get_theme_file_uri('/js/owl-carousel/owl.carousel.css'));
    wp_enqueue_style('owl-carousel-theme', get_theme_file_uri('/js/owl-carousel/owl.theme.css'));
    wp_enqueue_style('pexr-cubeportfolio', get_theme_file_uri('/js/cubeportfolio/cubeportfolio.min.css'));
    wp_enqueue_style('pexr-accordion', get_theme_file_uri('/js/accordion/css/smk-accordion.css'));
    wp_enqueue_style('pexr-ytplayer', get_theme_file_uri('/js/ytplayer/ytplayer.css'));
    wp_enqueue_style('pexr-responsive-tabs', get_theme_file_uri('/js/tabs/css/responsive-tabs.css'));
    wp_enqueue_style('pexr-jFlickrFeed', get_theme_file_uri('/js/jFlickrFeed/style.css'));
    wp_enqueue_style('pexr-parallax', get_theme_file_uri('/js/parallax/main.css'));
    wp_enqueue_style('pexr-animations', get_theme_file_uri('/js/animations/css/animations.min.css'));
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());


    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap/bootstrap.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-less', get_theme_file_uri('/js/less/less.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-megamenu', get_theme_file_uri('/js/megamenu/js/main.js'), array('jquery'), true);
    wp_enqueue_script('owl-carousel', get_theme_file_uri('/js/owl-carousel/owl.carousel.js'), array('jquery'), true);
    wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/js/owl-carousel/custom.js'), array('jquery'), true);
    wp_enqueue_script('pexr-ytplayer', get_theme_file_uri('/js/ytplayer/jquery.mb.YTPlayer.js'), array('jquery'), true);
    wp_enqueue_script('pexr-ytplayer-elementvideo', get_theme_file_uri('/js/ytplayer/elementvideo-custom.js'), array('jquery'), true);
    wp_enqueue_script('pexr-ytplayer-play-pause', get_theme_file_uri('/js/ytplayer/play-pause-btn.js'), array('jquery'), true);
    wp_enqueue_script('pexr-cubeportfolio', get_theme_file_uri('/js/cubeportfolio/jquery.cubeportfolio.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-cubeportfolio-main', get_theme_file_uri('/js/cubeportfolio/main-mosaic3.js'), array('jquery'), true);
    wp_enqueue_script('pexr-accordion-smk', get_theme_file_uri('/js/accordion/js/smk-accordion.js'), array('jquery'), true);
    wp_enqueue_script('pexr-responsive-tabs', get_theme_file_uri('/js/tabs/js/responsive-tabs.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-parallax-bacground', get_theme_file_uri('/js/parallax/parallax-background.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-parallax-active', get_theme_file_uri('/js/parallax/parallax-active.js'), array(
        'jquery',
        'pexr-parallax-bacground'
    ), true);
    wp_enqueue_script('revolution-slider', get_theme_file_uri('/js/revolution-slider/js/jquery.themepunch.tools.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-themepunch', get_theme_file_uri('/js/revolution-slider/js/jquery.themepunch.revolution.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-extension', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.actions.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-carousel', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-kenburn', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-layeranimation', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-migration', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.migration.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-navigation', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-parallax', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-slideanims', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js'), array('jquery'), true);
    wp_enqueue_script('revolution-slider-video', get_theme_file_uri('/js/revolution-slider/js/extensions/revolution.extension.video.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-jFlickrFeed', get_theme_file_uri('/js/jFlickrFeed/jflickrfeed.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-animations', get_theme_file_uri('/js/animations/js/animations.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-animations-appear', get_theme_file_uri('/js/animations/js/appear.min.js'), array('jquery'), true);
    wp_enqueue_script('pexr-functions', get_theme_file_uri('/js/functions/functions.js'), array('jquery'), true);
    wp_enqueue_script('pexr-new', get_theme_file_uri('/js/new/the.js'), array('jquery'), true);
};

add_action('wp_enqueue_scripts', 'pexr_all_file_enqueue_here');

function pexr_tag_allow()
{ {
        $allow_tags = array(
            'br'  => array(),
            'strong'=>array(),
        );
        return $allow_tags;
    };
}

// cmb2 icon folder enqueue
function pexr_icon_folder()
{
    return get_template_directory_uri() . '/inc/cmb2-aiconselect'; //Change to correct path.
}

add_filter('sa_cmb2_field_faiconselect_asset_path', 'pexr_icon_folder');


require_once get_template_directory() . "/theme-option/redux-framework.php";
require_once get_template_directory() . "/theme-option/sample/options.php";
require_once get_template_directory() . "/inc/fallback-menu.php";
require_once get_template_directory() . "/inc/pexrr-custom-post.php";
require_once get_template_directory() . "/inc/CMB2/init.php";
require_once get_template_directory() . "/inc/cmb2-aiconselect/iconselect.php";
require_once get_template_directory() . "/inc/CMB2/fileds-option.php";
