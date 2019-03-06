function my_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/stylesheet.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.arctext.js', array( 'jquery' ), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'my_scripts' );