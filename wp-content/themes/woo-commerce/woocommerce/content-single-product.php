<?php
defined( 'ABSPATH' ) || exit;
global $product;

do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}
?>
<h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, ipsum.</h2>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<div class="custom-single-product-wrapper">
		
		<div class="custom-gallery">
			<?php do_action( 'woocommerce_before_single_product_summary' ); ?>
		</div>

		<div class="custom-summary">
	<?php do_action( 'woocommerce_single_product_summary' ); ?>

	<div class="custom-description">
	<h2>Description</h2>
		<?php echo apply_filters( 'the_content', $product->get_description() ); ?>
	</div>
</div>


	</div>

	<?php

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
?>

<?php do_action( 'woocommerce_after_single_product_summary' ); ?>


</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>



<style>
.custom-single-product-wrapper {
	display: flex;
	flex-wrap: wrap;
	gap: 2rem;
	align-items: flex-start;
	justify-content: center;
	background: #fff;
	padding: 2rem;
	border-radius: 1rem;
	box-shadow: 0 0 20px rgba(0,0,0,0.08);
	margin: 2rem auto;
	max-width: 1200px;
}

.custom-gallery {
	width: 48%;
	background-color: #fafafa;
	padding: 1rem;
	border-radius: 0.75rem;
	box-shadow: inset 0 0 10px rgba(0,0,0,0.03);
}

.custom-summary {
	width: 48%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	background-color: #fdfdfd;
	padding: 1.5rem;
	border-radius: 0.75rem;
	box-shadow: inset 0 0 10px rgba(0,0,0,0.03);
}

.woocommerce-product-gallery__image img {
	display: block !important;
	width: 100% !important;
	height: auto !important;
	border-radius: 0.5rem;
	box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.woocommerce-product-gallery {
	opacity: 1 !important;
}

.custom-summary h1.product_title {
	font-size: 2rem;
	margin-bottom: 0.5rem;
	color: #222;
}

.woocommerce-Price-amount {
	color: #27ae60;
	font-size: 1.5rem;
	font-weight: bold;
}

.woocommerce-product-details__short-description {
	margin: 1rem 0;
	color: #555;
	line-height: 1.6;
}

.single_add_to_cart_button {
	background-color: #27ae60 !important;
	color: #fff !important;
	padding: 0.75rem 1.5rem;
	font-size: 1rem;
	border-radius: 0.5rem;
	border: none;
	cursor: pointer;
	transition: background-color 0.3s ease;
	margin-top: 10px;
}

.single_add_to_cart_button:hover {
	background-color: #219150 !important;
}

@media screen and (max-width: 768px) {
	.custom-single-product-wrapper {
		flex-direction: column;
		padding: 1rem;
	}

	.custom-gallery,
	.custom-summary {
		width: 100%;
	}
}

.entry-title{
	margin: 2px;
}

.custom-description {
	margin-top: 2rem;
	padding-top: 1.5rem;
	border-top: 1px solid #eee;
	font-size: 1rem;
	line-height: 1.8;
	color: #444;
}

.custom-description h2 {
	font-size: 3rem;
	margin-bottom: 1rem;
	color: #222;
}

</style>
