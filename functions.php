<?php  


function school_files(){

    wp_enqueue_script('main-school-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, microtime(), true); //use '0.0' instead of microtime() on live site
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('school_main_styles', get_stylesheet_uri(), NULL, microtime()); //add NULL, microtime() to remove caching by browser
}
add_action('wp_enqueue_scripts', 'school_files');

function school_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag'); //add title to the page
}
add_action('after_setup_theme', 'school_features');


?>