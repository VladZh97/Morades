<?php

add_theme_support( 'title-tag' );

function register_my_menus() {
  register_nav_menus( array(
    'main' => esc_html__( 'Primary' )
  ) );
}
add_action( 'init', 'register_my_menus' );



function include_my_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
  
  }
  
  add_action('wp_enqueue_scripts', 'include_my_scripts');


// ACF Theme setting page
function my_acf_op_init() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_sub_page(array(
      'parent_slug' => 'themes.php',
      'page_title'     => 'Ustawienia motywu',
      'menu_title'     => 'Ustawienia motywu',
      'menu_slug'     => 'theme-setting',
      'position' => '21',
    ));
  }
}
add_action('acf/init', 'my_acf_op_init');


function filter_plugin_updates( $value ) {
  unset( $value->response['advanced-custom-fields-pro/acf.php'] );
  return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );


register_nav_menu('footer','Footer Menu');
add_action('thesis_hook_footer','custom_footer_menu');



// function my_custom_fonts() {
//   echo '<style>
//   #wpwrap .postbox-container {
//       display: none !important;
//     } 
//   </style>';
// }
?>


