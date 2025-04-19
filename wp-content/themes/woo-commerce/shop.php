<?php
//Template Name: Shop page
get_header();
?>

<main class="shop-main">
    <?php echo do_shortcode(content: '[products columns="4"]')?>
</main>

<?php get_footer(); ?>