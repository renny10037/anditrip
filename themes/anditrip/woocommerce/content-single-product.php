<!-- traducir -->
<?php $currentlang = get_bloginfo('language');
if($currentlang=="en-US"):
    //content-sigle-product
      //button
        $button = 'Buy';
      //description
        $description = 'Description';
        //include
          $include = 'include';
          $domestic = 'Domestic flight tickets in economic class';
          $accommodation = 'Accommodation';
          $food = 'Food';
          $language = 'Language';
          $tours = 'Tours';
          $medical = 'Medical assistance card';
      //no include
          $no_include = 'No Include';
      //itinerary
        $itinerary = 'Itinerary Provided';
        $itinerary_provided = 'Itinerary Provided';
      // Important
        $important = 'Important';
      //descargar
        $download = 'Download Itinerary';
    //about
      $about = 'About Us';
      $description_about = 'We are Anditrip, your travel agent, we wanna share with you the amazing culture and experience that Latin America offers. Come with us.';
      $quick_contact = 'Quick Contact';
      $colombia_footer = 'Colombia';
     
?>
<?php else:
  //traducción chino
    //content-sigle-product
      //button
        $button = '在波';
      //description
        $description = '在波在波';
        //include
          $include = '在波哥';
          $domestic = '在波哥大與蒙塞拉特市遊覽';
          $accommodation = '在波哥大與蒙塞拉特市遊覽';
          $food = '大廳大教堂';
          $language = '大廳大教堂';
          $tours = '大廳大教堂';
          $medical = '在波哥大與蒙塞拉特市遊覽';
        //no include
          $no_include = '特市';
      //itinerary
        $itinerary = '大廳大教堂';
        $itinerary_provided = '大廳大教堂';
      // Important
        $important = '大廳大教堂';
      //descargar
        $download = '大廳大教堂';
 
    //about
      $about = '關於我們';
      $description_about = '我們是Anditrip，您的旅行社，我們想與您分享拉丁美洲提供的驚人文化和體驗。跟我們來。';
      $quick_contact = '快速聯繫';
      $colombia_footer = '哥倫比亞';
       
 ?>
<?php endif; ?>
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
 * @see       https://docs.woocommerce.com/document/template-structure/
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}
global $product;
get_header(); ?>

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
 
  </div><!-- .summary -->

      </div>
    </section>
<style>
  .form-plan:focus{
  border-color: rgb(202, 21, 28);
 box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(244, 46, 54, 1);
  }
  .btn-plan:focus {
  color: #333;
  background-color: #FFFFFF;
  border-color: #CA151C;
}
.btn-plan {
  color: #F7F4F4;
  background-color: #CA151C;
  border-color: #CA151C;
   float: left;
   margin-top: 11px;
    box-shadow: 2px 2px 2px #BDBABB;
}

.card-compra{
    margin-top: 60px;
}
.card-compra{
   box-shadow: 2px 1px 2px #D2D2D1;
  height: 14em;
  background: #fff;

}
.card-compra:hover {
  color:  #CA151C;
  background-color: #FFFFFF;
  border-color: #CA151C;
}
.fa-compra{
  margin-right: 11px;
}
</style>

<style>
.button-comprs {
  border-radius: 4px;
  background-color: #ca151c;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: fixed; 
  z-index: 9; 
  right: 0;
  top: 50%;
}

.button-comprs span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button-comprs  span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button-comprs:hover span {
  padding-right: 25px;
}

.button-comprs :hover span:after {
  opacity: 1;
  right: 0;
}
</style>

<div class="button-comprs hidden-lg hidden-md"><span>BUY</span>

</div>



 <div class="destiny-content separacion-top separacion container ">
    <div class="sidebar-destiny card-compra  comprar-plan">
      <div class="widget ">
        <div class="widget-one">
          <h3 class="text-center separacion"><?php echo $button; ?></h3>
          <div class="widget-destiny">
            
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
             <!--  <div class="container content-product">
                <section class="sidebar-product">
                  <div class="sidebar-destiny separacion-top separacion ">
                    <div class="summary entry-summary"> -->

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
        
          </div>
          <div style="margin-top: 100px;">
                    <?php
                    $args = array(
                      'number'     => '$number',
                      'orderby'    => 'title',
                      'order'      => 'ASC',
                      'hide_empty' => '$hide_empty',
                      'include'    => '$ids'
                    );
                    $product_categories = get_terms( 'product_cat', $args );
                    $count = count($product_categories);
                    if ( $count > 0 ){
                      foreach ( $product_categories as $product_category ) {
                        if ( $count < 7 ){
                          ?>
                    <div class="grid">
                      <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

                      $image = wp_get_attachment_url($thumbnail_id); ?>
                   <figure class="effect-colombia separacion">
                     <img src="<?php echo $image ?>" alt="img13"/>
                     <figcaption>
                       <h2 class=""><span><?php echo $product_category->name; ?></span></h2>
                       <a href="<?php echo get_term_link( $product_category ) ?>">View more</a>
                     </figcaption>
                   </figure>
                 </div>
                 <?php
               }}}
               ?>
          </div>
        </div>
      </div>
    </div>
    <section id="fancyTabWidget" class="tabs t-tabs">
      <ul class="nav nav-tabs fancyTabs" role="tablist">
        <li class="tab fancyTab active">
          <!-- <div class="arrow-down"> <div class="arrow-down-inner"></div> </div>   -->
          <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0">
            <h4 class="hidden-x"><?php echo $description; ?></h4></a>
            <div class="whiteBlock"></div>
          </li>
          <li class="tab fancyTab">
            <!--  <div class="arrow-down"><div class="arrow-down-inner"> </div> </div> -->
            <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0"></span><h4 class="hidden-x"><?php echo $itinerary; ?></h4></a>
            <div class="whiteBlock"></div>
          </li>

          <li class="tab fancyTab">
            <!-- <div class="arrow-down"><div class="arrow-down-inner"></div></div> -->
            <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true" data-toggle="tab" tabindex="0"></span><h4 class="hidden-xs"><?php echo $important; ?></h4></a>
            <div class="whiteBlock"></div>
          </li>
        </ul>

        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
          <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
            <div>
              <div class="row">
                <div class="col-md-6">
                  <div class="plan-descripcion include">

                    <h2 class=""><?php echo $include; ?></h2>

                    <div class="border-include"></div>
                    <i class="glyphicon glyphicon-triangle-to arrow-planss"></i>
                    <h3><i class="fa fa-plane"></i><span><?php echo $domestic; ?></span></h3>

                    <p><?php the_field('domestic_include'); ?></p>
                    <h3>
                      <i class="fa fa-building"></i>
                      <span><?php echo $accommodation; ?></span></h3>
                      <p><?php the_field('acommodation_include'); ?></p>
                      <h3><i class="fa fa-cutlery"></i><span><?php echo $food; ?></span></h3>
                      <p></i><?php the_field('food_include'); ?></p>

                      <h3><i class="fa fa-comments-o"></i><span><?php echo $language; ?></span></h3>
                      <p><?php the_field('language_include'); ?></p>.
                      <h3><i class="fa fa-globe"></i><span><?php echo $tours; ?></span></h3>

                      <p><?php the_field('tours_include'); ?></p>

                        <h3><i class="fa fa-user-md"></i><span><?php echo $medical; ?></span></h3>
                        <p><?php the_field('card_medical_include'); ?></p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="plan-descripcion no-includesepar">


                        <h2 class=""><?php echo $no_include; ?></h2>

                        <div class="border-include"></div>
                     

                        </div>
                          <?php the_field('description_no_include'); ?>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane plan-descripcion itinerario fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true" tabindex="0">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class=""><?php echo $itinerary_provided; ?></h2>

                      <div class="border-include"></div>
                      <i class="glyphicon glyphicon-triangle-to arrow-planss-itinerario"></i>
                      <p><?php the_field('iterary_include'); ?></p>
                      <a href="<?php the_field('download');?>" download class="btn btn-default btn-itinerario"><?php echo $download; ?></a>

                    </div>
                  </div>
                </div>
           
              <div class="importante tab-pane  fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true" tabindex="0">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="text-ceter"><?php echo $important; ?></h2>
                    <div class="border-include"></div>
                    <i class="glyphicon glyphicon-triangle-top importante-icon"></i>
                    <p><?php the_field('important_include'); ?></p>

                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <?php require('footer.php'); ?>
