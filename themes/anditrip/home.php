<?php include('header.php'); ?>
<!-- Slider -->
<div class="container-full">
  <div id="carrusel" class="slider">
    <?php $args = array(
      'post_type'      => 'offers',
      'field' => 'slug',
      'order'          => 'DEC',
    );
    $ofertas = new WP_Query($args); ?>
    <?php if ($ofertas->have_posts()) : while( $ofertas->have_posts() ) : $ofertas->the_post(); ?>
      <?php $post_thumbnail_id = get_post_thumbnail_id();
      $url = wp_get_attachment_url( $post_thumbnail_id);
      ?>
      <div class="item-slider">
        <div class="img-slider" style="background-image: url(<?php echo $url; ?>)">
          <div class="container">
            <div class="content-slider">
              <h2 class=""><?php the_title(); ?></h2>
              <a href="<?php the_permalink();?>" class="btn btn-default"><?php echo $view; ?></a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; endif; wp_reset_query(); ?>
  </div>
</div>
<section id="destinations-plans">
<div class="container-full fix ">
  <p class="text-center sub-titulo"><?php echo $description;?></p>
  <div class="container ">
  </div>
  <div class="mejor">
    <div class="destinys ">
      <div class="arrow"><!-- nueva clase para el borde y flecah -->
        <h2 class="text-center separacion titulo-section border-separacion-plans"><?php echo $destinations;?></h2>
        <i class="glyphicon glyphicon-triangle-bottom glyphicon-plans "></i>

      </div>


      <div class="rejilla6">
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
              <div class="destiny medellin">
                <div class="grid">
                  <figure class="effect">
                    <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

                    $image = wp_get_attachment_url($thumbnail_id); ?>
                    <img src="<?php echo $image ?>" alt="img09"/>
                    <figcaption>
                      <h2><span><?php echo $product_category->name; ?></span></h2>
                      <p><?php echo $product_category->description; ?></p>
                      <a href="<?php echo get_term_link( $product_category ) ?>">View more</a>
                    </figcaption>
                  </figure>
                </div>

              </div>
              <?php
            }}}
            ?>
          </div>
        </div>
        <div class="plans container-full">
          <div class="arrow "><!-- nueva clase para el borde y flecah -->
            <h2 class="text-center separacion titulo-section border-separacion-plans "><?php echo $plans;?></h2>
            <i class="glyphicon glyphicon-triangle-bottom glyphicon-plans "></i>
          </div>

          <div class="rejilla9">
            <?php
            $args = array(
              'post_type' => 'product',
              'posts_per_page' => 9,
            );
            $loop = new WP_Query( $args );

            ?>
            <?php while( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <div class="plan">
                <div class="card gris">
                  <div class="card-thumb">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>   
                    </a>
                  </div>
                  <div class="plan-content">
                    <p class="text-center"><?php the_title(); ?></p>
                    <div class="plan-content-price">
                      <span><?php
                      echo $product->get_price_html();
                      // woocommerce_template_loop_add_to_cart( $planes->post, $product );
                      ?>   </span>
                      <?//php the_permalink(); ?>
               
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_query();
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!---Reviews-->
    <div class="reviws">
      <section class="reviews container">

        <div id="reviews" class="text-center padd border-separacion ">
          <i class="glyphicon glyphicon-triangle-bottom glyphicon-reviews"></i>
          <h2 class="separacion separacion_top"><span><?php echo $reviews;?></span></h2>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="col-sm-4  " >
              <div class="reviews">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="center">
                      <img class="member-reviews" src="<?php echo get_template_directory_uri(); ?>/assets/img/member1.jpg">
                      <h3>Andrea piña</h3>
                      <p>Lorem ipsum dolor sit amet</p>
                    </div>
                  </div>
                </div >
              </div>
            </div>
            <div class="col-sm-4  " >
              <div class="panel panel-default">
                <div class ="panel-body">
                  <div class="center">
                    <img class="member-reviews" src="<?php echo get_template_directory_uri(); ?>/assets/img/member2.jpg">
                    <h3>Angela Perez</h3>
                    <p>Lorem ipsum dolor sit amet,</p>
                  </div>
                </div>
                <div class="reviews">
                </div >
              </div>
            </div>
            <div class="col-sm-4  " >
              <div class="reviews">
                <div class="panel panel-default">
                  <div class ="panel-body">
                    <div class="center">
                      <img class="member-reviews" src="<?php echo get_template_directory_uri(); ?>/assets/img/member3.jpg">
                      <h3>Angela Perez</h3>
                      <p>Lorem ipsum dolor sit amet,</p>
                    </div>
                  </div>
                </div >
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- End Reviews -->
    </div>

    <!---Why Colombia-->



    <div class="container">
      <section id="colombia" class="info-single-colombia">
        <div class="text-center padd border-separacion ">
          <i class="glyphicon glyphicon-triangle-bottom glyphicon-reviews"></i>
          <h2 class="separacion separacion_top font-colombia"><span><?php echo $why;?></span></h2>

        </div>
        <p class="text-why"><?php echo $colombia_description;?></p>
        <div class="row">

          <div class="col-sm-12">
            <?php $args = array(
              'post_type'      => 'colombia',
              'field' => 'slug',
              'order'          => 'DEC',
            );
            $colombia = new WP_Query($args); ?>

            <?php if ($colombia->have_posts()) : while( $colombia->have_posts() ) : $colombia->the_post(); ?>
              <div class="col-sm-4  " >
                <div class="info-img">
                  <div class="grid">
                    <figure class="effect-colombia">
                      <?php the_post_thumbnail();  ?>
                      <figcaption>
                        <h2><span><?php the_title(); ?></span></h2>
                        <a href="<?php the_permalink(); ?>">View more</a>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- End Why Colombia -->
    <section class="blog-section">
      <div class="container">
        <div id="blog" class="text-center padd border-separacion ">
          <i class="glyphicon glyphicon-triangle-bottom glyphicon-reviews"></i>
          <h2 class="separacion separacion_top"><span><?php echo $blog;?></span></h2>
        </div>

        <div class="row">
          <?php query_posts('page_per_post=3'); ?>
          <div class="blog-posts">
            <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
              <div class="col-sm-4 " >
                <div class="cards-blog">
                  <div class="card-thumb">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <div class="card-icon">
                      <i class="fa fa-chek"><strong><?php echo $read; ?></strong></i>
                    </div>
                  </div>
                  <div class="blog-content">
                    <div class="entry-header ">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <span class="cetagory">in <strong><?php the_category(); ?></strong></span>
                    </div>
                    <div class="entry-content">
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </section>


        <?php require('footer.php'); ?>