<section class="main-featured">
    <div class="container padding-top-bottom">
      <h2 class="main-general__title">
        Productos Destacados
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__subtitle">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente repellendus quibusdam Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
      </div>
      <div class="main-featured__container wow animated fadeIn" style="visibility: visible;">

      <?php $args = array( 'post_type'=> 'product',
          'posts_per_page' => 3); ?>
        <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ): $loop->the_post(); global $product; if (get_field('producto_destacado')): ?>
        <!-- <div class="main-featured__item" style="background-image: url(&#39;//cdn.shopify.com/s/files/1/0072/0417/5981/files/Banner-570-x-260--1.png?v=1563597854&#39;)">
          <div class="main-featured__mask">
            <div class="main-featured__title">
              Table Shiner Moving
            </div>
            <p class="main-featured__price">
              $ 300
            </p>
            <a href="">
              Ver Producto
              </a>
          </div>
        </div> -->
        <!-- <div class="main-featured__item" style="background-image: url(&#39;<?php echo get_template_directory_uri(); ?>/assets/img/featured.jpg&#39;)">
          <div class="main-featured__mask">
            <div class="main-featured__title">
              Table Shiner Moving
            </div>
            <p class="main-featured__price">
              $ 300
            </p>
            <a href="">
          Ver Producto
          </a>
          </div>
        </div> -->


        <div class="main-featured__item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
        <a href="<?php the_permalink(); ?>">
        <div class="main-featured__mask">
            <div class="main-featured__title">
            <?php the_title(); ?>
            </div>
            <p class="main-featured__price">
            <?php echo $product->get_price_html(); ?>
            </p>
            <!-- <a href="<?php the_permalink(); ?>">              
              Ver Producto
            </a> -->
          </div>
          </a>  
        </div>
        <?php endif; endwhile; ?>
      </div>
    </div>
  </section>