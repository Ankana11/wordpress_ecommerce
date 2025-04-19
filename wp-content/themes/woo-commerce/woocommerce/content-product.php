<?php
defined( 'ABSPATH' ) || exit;

global $product;

?>

<li <?php wc_product_class( 'custom-product-card', $product ); ?>>

	<a href="<?php the_permalink(); ?>" class="custom-product-link">
		<?php
		
			do_action( 'woocommerce_before_shop_loop_item_title' );

			
			echo '<h2 class="custom-title">' . get_the_title() . '</h2>';

			
			echo '<div class="custom-price">' . $product->get_price_html() . '</div>';
		?>
	</a>

	<div class="btn"><?php
		
		do_action( 'woocommerce_after_shop_loop_item' );
	?></div>

</li>

<style>
.custom-product-card {
	background: #fff;
	padding: 1rem;
	border: 1px solid #eee;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(0,0,0,0.05);
	transition: 0.3s ease;
	text-align: center;
}
.custom-product-card:hover {
	box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}
.custom-product-link {
	text-decoration: none;
	color: inherit;
	display: block;
}
.custom-title {
	font-size: 20px;
	margin: 0.5rem 0;
	color: #333;
}
.custom-price {
	font-size: 20px;
	color: #27ae60;
	margin-bottom: 0.5rem;
}
.btn{
	background-color: #27ae60 !important;
	color: #ffffff !important;
	font-size: 20px;
	padding: 0.75rem 1.5rem;
	font-size: 1rem;
	border-radius: 0.5rem;
	border: none;
	cursor: pointer;
	transition: background-color 0.3s ease;
}
a.button{
	color: #ffffff!important;
	font-size: 15px;
}
</style>
