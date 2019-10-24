<section class="main-products">
  <div class="container padding-top-bottom">
    <h2 class="main-general__title">
      Nuestros Productos
    </h2>
    <div class="d-flex justify-content-center">
      <p class="main-general__subtitle">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente
        repellendus quibusdam Lorem ipsum dolor sit amet consectetur,
        adipisicing elit.
      </p>
    </div>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li>
        <a aria-controls="pills-home" aria-selected="true" class="nav-link active" data-toggle="pill" href="#pills-home"
          id="pills-home-tab" role="tab">Teens</a>
      </li>
      <li>
        <a aria-controls="pills-profile" aria-selected="false" class="nav-link" data-toggle="pill" href="#pills-profile"
          id="pills-profile-tab" role="tab">Natural</a>
      </li>
    </ul>
    <div class="tab-content wow animated fadeInUp" id="pills-tabContent" style="visibility: visible;">
      <div aria-labelledby="pills-home-tab" class="tab-pane fade show active" id="pills-home" role="tabpanel">

        <div class="row">
      <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 4 ); 
        
         
        ?>
          <?php $loop = new WP_Query('post_type=product&product_cat=teens'); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div class="col-lg-3 col-md-6">
            <div class="main-product__card">
              <a href="<?php the_permalink(); ?>">
              <div class="main-product__img">
                <img alt="" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                <?php if (get_field( 'huincha' ) == 1 ): ?>
                  <p class="main-product__sale"> <?php the_field( 'nombre' ); ?> </p>
                <?php else: ?>
                    
                <?php endif; ?>
              </div>
              <div class="main-product__body">
                <div class="main-product__title">
                <?php the_title(); ?>

                </div>
                <p class="main-product__price">                       

                <?php echo $product->get_price_html(); ?>
                </p>
                <ul class="main-product__colors">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <a href="<?php the_permalink(); ?>">
                  Ver Producto
                </a>
              </div>
              </a>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
      <div aria-labelledby="pills-profile-tab" class="tab-pane fade" id="pills-profile" role="tabpanel">
        <div class="row">
        <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 4 ); ?>
          <?php $loop = new WP_Query('post_type=product&product_cat=natural'); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div class="col-lg-3 col-md-6">

            <div class="main-product__card">
              <a href="<?php the_permalink(); ?>">
              <div class="main-product__img">
                <img alt="" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                <?php if (get_field( 'huincha' ) == 1 ): ?>
				          <p class="main-product__sale"> <?php the_field( 'nombre' ); ?> </p>
                <?php else: ?>
                    
                <?php endif; ?>
              </div>
              <div class="main-product__body">
                <div class="main-product__title">
                <?php the_title(); ?>

                </div>
                <p class="main-product__price">                       

                <?php echo $product->get_price_html(); ?>
                </p>
                <ul class="main-product__colors">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <a href="<?php the_permalink(); ?>">
                  Ver Producto
                </a>
              </div>
              </a>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
      <!-- <div aria-labelledby="pills-contact-tab" class="tab-pane fade" id="pills-contact" role="tabpanel">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="main-product__card">
              <div class="main-product__img">
                <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/product3.jpg" />
                <span class="main-product__sale">
                  Sale
                </span>
              </div>
              <div class="main-product__body">
                <div class="main-product__title">
                  Lorem Ipsum
                </div>
                <p class="main-product__price">
                  $ 200
                </p>
                <ul class="main-product__colors">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <a href="">
                  Ver Producto
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="main-product__card">
              <div class="main-product__img">
                <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/product2.jpg" />
                <span class="main-product__sale">
                  Sale
                </span>
              </div>
              <div class="main-product__body">
                <div class="main-product__title">
                  Lorem Ipsum
                </div>
                <p class="main-product__price">
                  $ 200
                </p>
                <ul class="main-product__colors">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <a href="">
                  Ver Producto
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="main-product__card">
              <div class="main-product__img">
                <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/product.jpg" />
                <span class="main-product__sale">
                  Sale
                </span>
              </div>
              <div class="main-product__body">
                <div class="main-product__title">
                  Lorem Ipsum
                </div>
                <p class="main-product__price">
                  $ 200
                </p>
                <ul class="main-product__colors">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <a href="">
                  Ver Producto
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="main-product__card">
              <div class="main-product__img">
                <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/product2.jpg" />
                <span class="main-product__sale">
                  Sale
                </span>
              </div>
              <div class="main-product__body">
                <div class="main-product__title">
                  Lorem Ipsum
                </div>
                <p class="main-product__price">
                  $ 200
                </p>
                <ul class="main-product__colors">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <a href="">
                  Ver Producto
                </a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>