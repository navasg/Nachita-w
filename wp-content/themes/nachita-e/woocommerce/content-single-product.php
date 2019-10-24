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
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<section class="main-products">
    <div class="container padding-top-bottom">
      <div class="row">
        <div class="col-lg-6">
					<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );?>
				</div>		
				<div class="col-lg-6 product-details">
					<h2 class="main-product__title"> <?php the_title(); ?></h2>
					<h3 class="main-product__price"><?php echo $product->get_price_html(); ?></h3>
					<p>
						<?php the_content(); ?>
					</p>
          <div class="quantity">
						<?php woocommerce_template_single_add_to_cart(); ?>
          </div>
        </div>
			</div>
		</div>
	</section>
</div>
<style>
	
	.sidebar-box, .sidebar, #sidebar{
		display: none !important;
	}

	.main-product__title {
		font-size: 2rem;	
	}

	.main-general__button {
		padding: .5rem 1rem;
		background: #fff;
		border: 1px solid #000;
		margin: 0;
	}

	
</style>

<?php do_action( 'woocommerce_after_single_product' ); ?>
