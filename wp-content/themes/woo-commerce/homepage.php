<?php
//Template Name: Home 
get_header();
?>

<?php
$banner_image = get_field('banner_image');
$banner_image_url = is_array($banner_image) ? $banner_image['url'] : '';

$banner_subtitle = get_field('banner_subtitle');
$banner_title_1 = get_field('banner_title_1');
$banner_title_2 = get_field('banner_title_2');
$banner_button_url = get_field('banner_button_url');
$banner_button_text = get_field('banner_button_text');
?>

<main class="main">
    <?php if($banner_image_url){ ?>

   
<div class="intro-slider-container mb-5">
    <div class="intro-slide" style="background-image: url('<?php echo esc_url($banner_image_url); ?>'); background-size: cover; background-position: center; padding: 100px 0;">
        <div class="container intro-content">
            <div class="row justify-content-end">
                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                    <?php if ($banner_subtitle): ?>
                        <h3 class="intro-subtitle text-third"><?php echo esc_html($banner_subtitle); ?></h3>
                    <?php endif; ?>
                    <?php if ($banner_title_1): ?>
                        <h1 class="intro-title"><?php echo esc_html($banner_title_1); ?></h1>
                    <?php endif; ?>
                    <?php if ($banner_title_2): ?>
                        <h1 class="intro-title"><?php echo esc_html($banner_title_2); ?></h1>
                    <?php endif; ?>

                    

                    <?php if ($banner_button_url && $banner_button_text): ?>
                        <a href="<?php echo esc_url($banner_button_url); ?>" class="btn btn-primary btn-round">
                            <span><?php echo esc_html($banner_button_text); ?></span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  }  ?>



<div class="mb-4"></div><!-- End .mb-4 -->


<div class="mb-3"></div><!-- End .mb-5 -->

<div class="container new-arrivals">
<div class="heading heading-flex mb-3">
    <div class="heading-left">
        <h2 class="title">Products</h2>
    </div>

    
</div><!-- End .heading -->

<div class="tab-content just-action-icons-sm">
<div class="tab-pane p-0 show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
<div class="product-list-wrapper d-flex flex-wrap gap-4">

<?php
$args = array(
'post_type' => 'product',
'posts_per_page' => 10,

);
$loop = new WP_Query($args);
if ($loop->have_posts()) :
while ($loop->have_posts()) : $loop->the_post();
    global $product;
?>
    <div class="product product-2" style="width: calc(20% - 16px);">
        <figure class="product-media">
            
            <a href="<?php the_permalink(); ?>">
                <?php echo $product->get_image('woocommerce_thumbnail'); ?>
            </a>
        </figure>
        <div class="product-body">
            <h3 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="product-price">
            <?php if ($product->is_on_sale()) : ?>
                <span class="old-price" style="text-decoration: line-through; color: #999;">
                    <?php echo wc_price($product->get_regular_price()); ?>
                </span>
                <span class="new-price" style="color: #e60023; margin-left: 8px;">
                    <?php echo wc_price($product->get_sale_price()); ?>
                </span>
            <?php else : ?>
                <span class="price"><?php echo wc_price($product->get_regular_price()); ?></span>
            <?php endif; ?>
        </div>

            
        </div>
    </div>
<?php
endwhile;
wp_reset_postdata();
endif;
?>

</div><!-- End .product-list-wrapper -->
</div><!-- End .tab-pane -->
</div><!-- End .tab-content -->

</div><!-- End .container -->

<div class="mb-6"></div><!-- End .mb-6 -->



        
    
</main><!-- End .main -->

       
<?php
get_footer();
?>