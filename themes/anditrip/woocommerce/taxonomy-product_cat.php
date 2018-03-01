<!-- traducir -->
<?php $currentlang = get_bloginfo('language');
if($currentlang=="en-US"):
    //about
      $about = 'About Us';
      $description_about = 'We are Anditrip, your travel agent, we wanna share with you the amazing culture and experience that Latin America offers. Come with us.';
      $quick_contact = 'Quick Contact';
      $colombia_footer = 'Colombia';
     
?>
<?php else:
  //traducción chino
    //about
      $about = '關於我們';
      $description_about = 'nditrip，您的旅行社，我們想與您分享拉丁美洲提供的驚人文化和體驗。跟我們來。';
      $quick_contact = '快速聯繫';
      $colombia_footer = '哥倫比亞';
 ?>
<?php endif; ?>


<?php get_header(); ?>
<?php if ( is_product_category() ){
    global $wp_query;

    // get the query object
    $cat = $wp_query->get_queried_object();

    // get the thumbnail id using the queried category term_id
    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
		// get the title id using the queried category term_id
		$title = get_woocommerce_term_meta( $cat->term_id, 'title', true );
    // get the image URL
    $image = wp_get_attachment_url( $thumbnail_id );

	}?>
<section class="container-fluid" style="background-image: url('<?php echo $image; ?>');  background-position: center!important;
background-size: cover!important;">
	<article class="container">
		<header class="row destiny-header">
				<!-- <a href="#" class="separacion" style="color: #000;"><?php echo $colombia_footer; ?></a> -->
			<h1><?php echo $cat->name; ?></h1>
		</header>
	</article>
</section>
<div class="destiny-content separacion-top separacion container">
	<div class="sidebar-destiny">
		<div class="widget">
			<div class="widget-one">
				<h3 class="text-center separacion">More destiny</h3>
				<div class="widget-destiny">
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
	<div class="destinys-content">
		<h3 class="text-center separacion">Plans</h3>
		<?php while( have_posts() ) : the_post(); ?>
			<?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
      $url = wp_get_attachment_url( $post_thumbnail_id); ?>
		<div class="card-destinys">
	<div class="card-destinys-content">
<div class="img-plan" style="background-image: url('<?php echo $url; ?>');">

</div>
<div class="plan-destiny">
	<a href="<?php the_permalink(); ?>">
	<h2 class="separacion"><?php echo the_title(); ?></h2>
	<p><?php echo the_content(); ?></p>
</a>
</div>
</div>
<div class="atributes-plan">
		<a href="<?php the_permalink(); ?>" class="text-left"><i class="fa fa-calendar-o"></i> <?php the_field('days_anditrip'); ?></a>
    <?php if (get_post_meta( get_the_ID(), 'Domestic_tickets', true )): ?>
      <a href="#" class="text-left"> <i class="fa fa-plane"></i> Domestic flight tickets </a>
		<?php endif; ?>

    <?php if (get_post_meta( get_the_ID(), 'Alojamiento', true )): ?>
    <a href="<?php the_permalink(); ?>" class="text-left"> <i class="fa fa-building"></i> Hotel </a>
  <?php endif; ?>
    <a href="<?php the_permalink(); ?>" class="text-right"><?php echo $product->get_price_html(); ?></a>
	</div>
</div>
<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
