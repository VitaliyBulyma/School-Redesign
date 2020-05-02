<?php  


function school_files(){

    wp_enqueue_script('main-school-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, microtime(), true); //use '0.0' instead of microtime() on live site
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('school_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'school_files');

?>