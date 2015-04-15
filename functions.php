<?php
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function wpb_adding_scripts() {
wp_register_script('custom_script', get_template_directory_uri() . '/js/custom.js', array('jquery'),'1.1', true);
wp_enqueue_script('custom_script');
}
 
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' )

?>