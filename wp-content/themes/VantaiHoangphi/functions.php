<?php
function hp_scripts_styles() {
    /*   REGISTER ALL JS FOR SITE */
    wp_register_script('hp_jquery', get_stylesheet_directory_uri().'/js/jquery-2.2.4.min.js');
    wp_register_script('hp_bootstrap_js',get_stylesheet_directory_uri().'/js/bootstrap.js');
    wp_register_script('hp_wow_js',get_stylesheet_directory_uri().'/js/wow.js');
    wp_register_script('hp_jquery_validate_js',get_stylesheet_directory_uri().'/js/jquery.validate.min.js');
    wp_register_script('hp_hoverIntent_js',get_stylesheet_directory_uri().'/js/hoverIntent.js');
    wp_register_script('hp_superfish_js',get_stylesheet_directory_uri().'/js/superfish.min.js');
    wp_register_script('hp_owl_js',get_stylesheet_directory_uri().'/js/owl.carousel.js');
    wp_register_script('hp_jquery_mCustomScrollbar_js',get_stylesheet_directory_uri().'/js/jquery.mCustomScrollbar.concat.min.js');
    wp_register_script('hp_jquery_waypoints_js',get_stylesheet_directory_uri().'/js/jquery.waypoints.min.js');
    wp_register_script('hp_jquery_counterup_js',get_stylesheet_directory_uri().'/js/jquery.counterup.min.js');
    wp_register_script('hp_jquery_matchHeight_js',get_stylesheet_directory_uri().'/js/jquery.matchHeight-min.js');
    wp_register_script('hp_imagesloaded_js',get_stylesheet_directory_uri().'/js/imagesloaded.pkgd.min.js');
    wp_register_script('hp_masonry_js',get_stylesheet_directory_uri().'/js/masonry.pkgd.min.js');
    wp_register_script('hp_jquery_easypiechart_js',get_stylesheet_directory_uri().'/js/jquery.easypiechart.min.js');
    wp_register_script('hp_gmaps_js',get_stylesheet_directory_uri().'/js/gmaps.js');
    wp_register_script('hp_jquery_sliderPro_js',get_stylesheet_directory_uri().'/js/jquery.sliderPro.min.js');
    wp_register_script('hp_fix_ie_bootstrap_js',get_stylesheet_directory_uri().'/js/fix-ie-bootstrap.js');
    wp_register_script('hp_custom_js',get_stylesheet_directory_uri().'/js/custom.js');
    wp_register_script('hp_html5shiv_js','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js');
    wp_register_script('hp_respond_js','https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
    wp_register_script('hp_google_map_js', 'http://maps.google.com/maps/api/js?sensor=true');

    /*   REGISTER ALL CSS FOR SITE */
    wp_register_style('hp_font_awesome_css',get_stylesheet_directory_uri().'/css/font-awesome.css');
    wp_register_style('hp_megafish_css',get_stylesheet_directory_uri().'/css/megafish.css');
    wp_register_style('hp_superfish_css',get_stylesheet_directory_uri().'/css/superfish.css');
    wp_register_style('hp_bootstrap_css',get_stylesheet_directory_uri().'/css/bootstrap.css');
    wp_register_style('hp_bootstrap_theme_css',get_stylesheet_directory_uri().'/css/bootstrap-theme.css');
    wp_register_style('hp_owl_carousel_css',get_stylesheet_directory_uri().'/css/owl.carousel.css');
    wp_register_style('hp_owl_theme_css',get_stylesheet_directory_uri().'/css/owl.theme.css');
    wp_register_style('hp_jquery_mCustomScrollbar_css',get_stylesheet_directory_uri().'/css/jquery.mCustomScrollbar.css');
    wp_register_style('hp_themify_css',get_stylesheet_directory_uri().'/css/themify-icons.css');
    wp_register_style('hp_ie7_css',get_stylesheet_directory_uri().'/css/ie7.css');
    wp_register_style('hp_elegant_css',get_stylesheet_directory_uri().'/css/elegant-font.css');
    wp_register_style('hp_ex_font_css',get_stylesheet_directory_uri().'/css/ex-font.css');
    wp_register_style('hp_woocommerce_css',get_stylesheet_directory_uri().'/css/woocommerce.css');
    wp_register_style('hp_slider_pro_css',get_stylesheet_directory_uri().'/css/slider-pro.css');

    /*   CALL ALL CSS AND SCRIPTS FOR SITE */
    wp_enqueue_script('hp_jquery');
    wp_enqueue_script('hp_bootstrap_js');
    wp_enqueue_script('hp_wow_js');
    wp_enqueue_script('hp_jquery_validate_js');
    wp_enqueue_script('hp_hoverIntent_js');
    wp_enqueue_script('hp_superfish_js');
    wp_enqueue_script('hp_owl_js');
    wp_enqueue_script('hp_jquery_mCustomScrollbar_js');
    wp_enqueue_script('hp_jquery_waypoints_js');
    wp_enqueue_script('hp_jquery_counterup_js');
    wp_enqueue_script('hp_jquery_matchHeight_js');
    wp_enqueue_script('hp_imagesloaded_js');
    wp_enqueue_script('hp_masonry_js');
    wp_enqueue_script('hp_jquery_easypiechart_js');
    wp_enqueue_script('hp_gmaps_js');
    wp_enqueue_script('hp_jquery_sliderPro_js');
    wp_enqueue_script('hp_fix_ie_bootstrap_js');
    wp_enqueue_script('hp_custom_js');
    wp_enqueue_script('hp_google_map_js');
    wp_enqueue_script('hp_html5shiv_js');
    wp_enqueue_script('hp_respond_js');

    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('hp_font_awesome_css');
    wp_enqueue_style('hp_megafish_css');
    wp_enqueue_style('hp_superfish_css');
    wp_enqueue_style('hp_bootstrap_css');
    wp_enqueue_style('hp_bootstrap_theme_css');
    wp_enqueue_style('hp_owl_carousel_css');
    wp_enqueue_style('hp_owl_theme_css');
    wp_enqueue_style('hp_jquery_mCustomScrollbar_css');
    wp_enqueue_style('hp_themify_css');
    wp_enqueue_style('hp_ie7_css');
    wp_enqueue_style('hp_elegant_css');
    wp_enqueue_style('hp_ex_font_css');
    wp_enqueue_style('hp_woocommerce_css');
    wp_enqueue_style('hp_slider_pro_css');
}

function hp_primary_menu() {
    register_nav_menus(
      array(
        'primary' => __( 'Primary Menu' )
      )
    );
}

add_action( 'wp_enqueue_scripts', 'hp_scripts_styles' );
add_action( 'init', 'hp_primary_menu' );


