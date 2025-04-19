<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<div class="custom-archive-wrapper">

	<h1 class="custom-archive-title"><?php woocommerce_page_title(); ?></h1>

	<?php do_action( 'woocommerce_before_main_content' ); ?>

	<?php if ( woocommerce_product_loop() ) : ?>

		<?php do_action( 'woocommerce_before_shop_loop' ); ?>

		<ul class="products">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php wc_get_template_part( 'content', 'product' ); ?>
			<?php endwhile; ?>
		</ul>

		<?php do_action( 'woocommerce_after_shop_loop' ); ?>

	<?php else : ?>
		<?php do_action( 'woocommerce_no_products_found' ); ?>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_main_content' ); ?>

</div>

<?php get_footer( 'shop' ); ?>


<style>
	.custom-archive-wrapper {
	max-width: 1200px;
	margin: 0 auto;
	padding: 2rem;
	background-color: #fdfdfd;
	border-radius: 1rem;
}

.custom-archive-title {
	text-align: center;
	font-size: 2.5rem;
	margin-bottom: 2rem;
	color: #333;
}

form.woocommerce-ordering{
	display: flex;
	justify-content: end;
	margin: 10px;
}
</style>