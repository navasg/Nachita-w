<?php get_header(); ?>


<div class="container padding-top-bottom">
		<h2 class="main-general__title">
      Nuestros Productos
    </h2>
    <div class="row">
    <?php $args = array( 'post_type' => 'product' ); ?>
      <?php while ( have_posts() ) : the_post(); global $product; ?>
			<div class="col-lg-3 col-md-6">
            <div class="main-product__card">
              <div class="main-product__img">
                <img alt="" src="<?php echo get_the_post_thumbnail_url(); ?>" />
                <span class="main-product__sale">
                  Sale
                </span>
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
            </div>
          </div>
      <?php endwhile; ?>  
    </div>
  </div>

<?php get_footer(); ?>

