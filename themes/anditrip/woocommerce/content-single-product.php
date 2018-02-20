<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
<?php
$args = array(
  'post_type' => 'product',
);
$loop = new WP_Query( $args );

?>
<?php if( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
  <?php $post_thumbnail_id = get_post_thumbnail_id();
  $url = wp_get_attachment_url( $post_thumbnail_id);
  ?>
  <section id="plan-page" class="container-fluid" style="background-image: url('<?php echo $url; ?>'); background-position: center!important;
    background-size: cover!important;">
    <article class="container">
      <header class="row destiny-header container" style="display:flex;">
        <h1><?php the_title(); ?></h1>
        <h1 href="#" class="page_price"><?php echo $product->get_price_html();?></h1>
      </header>
    </article>
  </section>
  <?php
  /**
   * woocommerce_before_single_product hook.
   *
   * @hooked wc_print_notices - 10
   */
   do_action( 'woocommerce_before_single_product_sumary' );

   if ( post_password_required() ) {
    echo get_the_password_form();
    return;
   }
?>
  <div class="container content-product">
    <section class="sidebar-product">
      <div class="sidebar-destiny separacion-top separacion ">
        <div class="summary entry-summary">

		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>

	</div><!-- .summary -->

      </div>
    </section>
    <section id="fancyTabWidget" class="tabs t-tabs">
      <ul class="nav nav-tabs fancyTabs" role="tablist">
        <li class="tab fancyTab active">
          <!-- <div class="arrow-down"> <div class="arrow-down-inner"></div> </div>   -->
          <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0">
            <h4 class="hidden-x">Description</h4></a>
            <div class="whiteBlock"></div>
          </li>
          <li class="tab fancyTab">
            <!--  <div class="arrow-down"><div class="arrow-down-inner"> </div> </div> -->
            <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0"></span><h4 class="hidden-x">Itinerary</h4></a>
            <div class="whiteBlock"></div>
          </li>

          <li class="tab fancyTab">
            <!-- <div class="arrow-down"><div class="arrow-down-inner"></div></div> -->
            <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true" data-toggle="tab" tabindex="0"></span><h4 class="hidden-xs">Important</h4></a>
            <div class="whiteBlock"></div>
          </li>
        </ul>

        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
          <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
            <div>
              <div class="row">
                <div class="col-md-6">
                  <div class="plan-descripcion include">

                    <h2 class="">Includes</h2>

                    <div class="border-include"></div>
                    <i class="glyphicon glyphicon-triangle-top arrow-planss"></i>
                    <h3><i class="fa fa-plane"></i><span>Domestic flight tickets in economic class</span></h3>

                    <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i><?php echo get_post_meta( get_the_ID(), 'Domestic_tickets', true ); ?></p>
                    <h3>
                      <i class="fa fa-building"></i>
                      <span>Accommodation</span></h3>
                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i><?php echo get_post_meta( get_the_ID(), 'Alojamiento', true ); ?></p>
                      <h3><i class="fa fa-cutlery"></i><span>Food</span></h3>
                      <p><i class="icono-gly glyphicon glyphicon-chevron-right plan-descripcion-icon"></i><?php echo get_post_meta( get_the_ID(), 'Food', true ); ?></p>

                      <h3><i class="fa fa-comments-o"></i><span>Lenguage</span></h3>
                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i><?php echo get_post_meta( get_the_ID(), 'Lenguage', true ); ?></p>.
                      <h3><i class="fa fa-globe"></i><span>Tours</span></h3>

                      <p>
                        <i class="icono-gly glyphicon glyphicon-chevron-right"></i>
                        Catedral de salp
                      </p>
                      <p>
                        <i class="icono-gly glyphicon glyphicon-chevron-right"></i>
                        City tour en Bogotà con monserrate</p>
                        <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Stop at Boyacá Bridge and tasting of arepa boyacense
                        </p>
                        <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Stop at Ráquira and Chiquinquirá</p>
                        <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Coffee experience in San Alberto</p>
                        <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Tour to Filandia, Cocora and Salento</p>
                        <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>City tour through Cartagena, regular service.</p>
                        <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Tour to the Rosario Islands in Majagua Island.</p>

                        <h3><i class="fa fa-user-md"></i><span>Medical assistance card</span></h3>
                        <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i> <?php echo get_post_meta( get_the_ID(), 'Card_medical', true ); ?></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="plan-descripcion no-includesepar">


                        <h2 class="">Does not includes</h2>

                        <div class="border-include"></div>
                        <i class="glyphicon glyphicon-triangle-top arrow-planss"></i>
                        <h4><i class="fa fa-ticket icon-off"></i><span>
                          International air ticket</span></h4>

                          <h4><i class="fa fa-usd icon-off"></i><span>Cartagena Port tax 7 Usd approx.</span></h4>
                          <h4><i class="fa fa-building icon-off"></i><span>Volunteer hotel insurance to pay at the hotel.</span></h4>


                          <h4><i class="fa fa-cutlery icon-off"></i><span>Feeding not described</span></h4>

                          <h4><i class="fa fa-comments-o icon-off"></i><span>Suggested activities are not included in the program price</span></h4>

                          <h4><i class="fa fa-money icon-off"></i><span>Not stipulated or personal expenses and tips</span></h4>

                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane plan-descripcion itinerario fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true" tabindex="0">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="">Itinerary Provided</h2>

                      <div class="border-include"></div>
                      <i class="glyphicon glyphicon-triangle-top arrow-planss-itinerario"></i>
                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i><?php echo get_post_meta( get_the_ID(), 'Itinerary', true ); ?></p>
                      <a href="#" class="btn btn-default btn-itinerario">Download Itinerary</a>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <div class="importante tab-pane  fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true" tabindex="0">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-ceter">Important</h2>
                    <div class="border-include"></div>
                    <i class="glyphicon glyphicon-triangle-top importante-icon"></i>
                    <p> <i class="icono-gly glyphicon glyphicon-chevron-right"></i>
                      Rates do not include 19% VAT (Residents outside of Colombia and foreigners enjoy exemption from taxes as established in decree 2646 of 2013 that regulates the article) To enjoy this exemption at the time of check-in in hotels must present a stamped passport, otherwise they must pay the tax at the hotel.</p>

                      <p> <i class="icono-gly glyphicon glyphicon-chevron-right"></i>Hotel hours: Check In 3:00 p.m. - Check out 1:00 p.m.</p>


                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Children: Rate applies to sharing a bed with their parents and the child's consumption at the hotel is paid. If you want a separate bed, you must cancel the adult rate. Maximum 2 children per room.</p>

                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Infants: They only pay Medical insurance 3 USD / day + air tickets from 2 years old.</p>
                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Planned hotels: Take into account at the time of booking, in case of not having availability in the hotels provided, the reservation will be confirmed in hotels of similar category.</p>

                    </div>
                    <div class="col-md-6">
                      <div>

                      </div>
                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Children: Rate applies to sharing a bed with their parents and the child's consumption at the hotel is paid. If you want a separate bed, you must cancel the adult rate. Maximum 2 children per room.</p>
                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Infants: They only pay Medical insurance 3 USD / day + air tickets from 2 years old.
                      </p>
                      <p><i class="icono-gly glyphicon glyphicon-chevron-right"></i>Planned hotels: Take into account at the time of booking, in case of not having availability in the hotels provided, the reservation will be confirmed in hotels of similar category.</p>

                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <?php get_footer(); ?>
