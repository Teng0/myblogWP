
<?php
function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'themename', get_template_directory_uri() . '/style.css' );

}

function wpb_adding_scripts() {
 
wp_register_script('my_amazing_script', plugins_url('/jq.js', __FILE__), array('jquery'),'1.1', true);

 
wp_enqueue_script('my_amazing_script');
}
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  



function shapeSpace_include_custom_jquery() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');







function wp_custom_new_menu() {
  register_nav_menu('primary',__( 'მთავარი მენიუ' ));
  register_nav_menu('secondary',__( 'გვერდითი მენიუ' ));
}
add_action( 'init', 'wp_custom_new_menu' );

add_theme_support('post-thumbnails');

function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'homepage-sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'single-sidebar', 'textdomain' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

?>