<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

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

<?php get_footer( 'shop' ); ?>


