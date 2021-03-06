<?php
function adp_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');

  //JS

  wp_enqueue_script( 'script9', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script1', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script3', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script4', get_template_directory_uri() . '/assets/js/buscador.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script6', get_template_directory_uri() . '/assets/js/slick.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script7', get_template_directory_uri() . '/assets/js/slick-custom.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script8', get_template_directory_uri() . '/assets/js/uisearch.js', array ( 'jquery' ), 1.1, true);
  }
add_action('wp_enqueue_scripts', 'adp_load_styles_scripts');

//WooCommerce Theme Support

add_action('after_setup_theme', 'woocomerce_support');
// function woocomerce_support() {
//   add_theme_support('woocommerce');
// }
// add_action( 'woocommerce_product_options_general_product_data', 'woocom_general_product_data_custom_field' );

// function woocom_general_product_data_custom_field() {
//   // Create a custom text field
//   // Text Field
//   woocommerce_wp_text_input( array( 'id' => 'Days', 'label' => __( 'Days', 'woocommerce' ), 'placeholder' => 'Numbers Days', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

//   // Text Field
//   woocommerce_wp_text_input( array( 'id' => 'Domestic_tickets', 'label' => __( 'Domestic flight tickets in economic class', 'woocommerce' ), 'placeholder' => 'Domestic flight tickets in economic class', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

//   // Text Field
//   woocommerce_wp_text_input( array( 'id' => 'Alojamiento', 'label' => __( 'Acommodation', 'woocommerce' ), 'placeholder' => 'Alojamiento', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

//   // Text Field
//   woocommerce_wp_text_input( array( 'id' => 'Food', 'label' => __( 'Food', 'woocommerce' ), 'placeholder' => 'Comida', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

//   // Text Field
//   woocommerce_wp_text_input( array( 'id' => 'Lenguage', 'label' => __( 'Lenguage', 'woocommerce' ), 'placeholder' => 'Lenguaje', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

//   // Text Field
//   woocommerce_wp_text_input( array( 'id' => 'Card_medical', 'label' => __( 'Card_medical', 'woocommerce' ), 'placeholder' => 'Card Medical', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

//   // Text Area
//   woocommerce_wp_textarea_input( array( 'id' => 'Itinerary', 'label' => __( 'Itinerary', 'woocommerce' ), 'placeholder' => 'Itinerary', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

//  }
//  add_action( 'woocommerce_process_product_meta', 'woocom_save_general_proddata_custom_field' );

//  function woocom_save_general_proddata_custom_field( $post_id ) {  // Save Text Field
//   $text_field = $_POST['Domestic_tickets']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Domestic_tickets', esc_attr( $text_field ) ); }
//   $text_field = $_POST['Days']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Days', esc_attr( $text_field ) ); }
//   $text_field = $_POST['Alojamiento']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Alojamiento', esc_attr( $text_field ) ); }
//   $text_field = $_POST['Food']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Food', esc_attr( $text_field ) ); }
//   $text_field = $_POST['Lenguage']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Lenguage', esc_attr( $text_field ) ); }
//   $text_field = $_POST['Card_medical']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Card_medical', esc_attr( $text_field ) ); }
//   $text_field = $_POST['Itinerary']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Itinerary', esc_attr( $text_field ) ); }
//  }
// add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 

//quitar las migajas de pan
add_action('wp_enqueue_scripts','mis_Estilos');
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
//unset($fields['billing']['billing_first_name']);
unset($fields['billing']['billing_last_name']);
unset($fields['billing']['billing_company']);
unset($fields['billing']['billing_address_1']);
unset($fields['billing']['billing_address_2']);
unset($fields['billing']['billing_city']);
unset($fields['billing']['billing_postcode']);
unset($fields['billing']['billing_country']);
unset($fields['billing']['billing_state']);
unset($fields['billing']['billing_phone']);
unset($fields['order']['order_comments']);
unset($fields['billing']['billing_address_2']);
unset($fields['billing']['billing_postcode']);
unset($fields['billing']['billing_company']);
//unset($fields['billing']['billing_last_name']);
//unset($fields['billing']['billing_email']);
//unset($fields['billing']['billing_city']);
return $fields;
}