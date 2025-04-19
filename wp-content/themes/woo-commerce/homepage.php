<?php
//Template Name: Home 

use Sabberworm\CSS\Property\Selector;

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
    <div class="intro-slide" style="background-image: url('<?php echo ($banner_image_url); ?>'); background-size: cover; background-position: center; padding: 100px 0;">
        <div class="container intro-content">
            <div class="row justify-content-end">
                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                    <?php if ($banner_subtitle): ?>
                        <h3 class="intro-subtitle text-third"><?php echo ($banner_subtitle); ?></h3>
                    <?php endif; ?>
                    <?php if ($banner_title_1): ?>
                        <h1 class="intro-title"><?php echo ($banner_title_1); ?></h1>
                    <?php endif; ?>
                    <?php if ($banner_title_2): ?>
                        <h1 class="intro-title"><?php echo ($banner_title_2); ?></h1>
                    <?php endif; ?>

                    

                    <?php if ($banner_button_url && $banner_button_text): ?>
                        <a href="<?php echo esc_url($banner_button_url); ?>" class="btn btn-primary btn-round">
                            <span><?php echo ($banner_button_text); ?></span>
                            <i class="icon-long-arrow-right"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php  }  ?>

                    <div class="mb-4"></div>

                    <?php $explore_popular_mtabox = get_field(selector: 'explore_category_'); ?>
                    <div class="container">
                    <h2 class="title text-center mb-4">Explore Popular Categories</h2>
                    <?php
                $parent_id = 35;

                $args = array(
                    'taxonomy'     => 'product_cat',
                    'child_of'     => $parent_id,
                    'hide_empty'   => false,
                    'hierarchical' => true,
                    'pad_counts'   => true,
                );

                $product_categories = get_terms($args);

                if (!empty($product_categories) && !is_wp_error($product_categories)) {
                    echo '<div class="custom-cat-grid">';
                    foreach ($product_categories as $category) {
                        
                        $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                        $image_url = wp_get_attachment_url($thumbnail_id);
                        $category_link = get_term_link($category);

                        echo '<a href="' . esc_url($category_link) . '" class="cat-box">';
                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" />';
                        }
                        echo '<h3>' . esc_html($category->name) . '</h3>';
                        echo '</a>';
                    }
                    echo '</div>';
                }
                ?>
               </div>

              <div class="mb-4"></div>
                <?php $explore_popular_mtabox = get_field(selector: 'explore_category_');
                $banner1 = $explore_popular_mtabox['banner_image_1'];
                $banner2 = $explore_popular_mtabox['banner_image_2'];
                $banner3 = $explore_popular_mtabox['banner_image_3'];
                ?>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="<?php echo $banner1['url'];?>" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">Smart Offer</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">Save $150 <strong>on Samsung <br>Galaxy Note9</strong></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="<?php echo $banner2['url'];?>" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">Time Deals</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>Bose SoundSport</strong> <br>Time Deal -30%</a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="<?php echo $banner3['url'];?>" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#"><strong>GoPro - Fusion 360</strong> <br>Save $70</a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->


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