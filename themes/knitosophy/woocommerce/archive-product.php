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
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');


get_template_part('template-parts/hero', 'pages');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action('woocommerce_before_main_content');

?>

<?php

if (is_post_type_archive('product')) {

    // The tax query
    $tax_query[] = array(
        'taxonomy' => 'product_visibility',
        'field'    => 'name',
        'terms'    => 'featured',
        'operator' => 'IN', // or 'NOT IN' to exclude feature products
    );

    // The query
    $featuredQuery = new WP_Query(array(
        'post_type'           => 'product',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page'      => 5,

        'order'               => 'DESC',
        'tax_query'           => $tax_query // <===
    ));



    $args = array('post_type' => '', 'posts_per_page' => -1);
    $idsExclude = [];
    $loop = new WP_Query($args);
    if ($featuredQuery->have_posts()) : ?>
        <div class="container mx-auto container__products__featured">
            <div class="flex">
                <div class="w-full px-4 pt-8 lg:pt-14">
                    <h3 class="title">Featured Products</h3>
                </div>
            </div>
            <div class="grid__featured__shop px-4 pt-8">
                <?php $counter = 1; ?>
                <?php
                while ($featuredQuery->have_posts()) : $featuredQuery->the_post(); ?>

                    <div class="w-full grid__featured__item<?php echo $counter; ?>">
                        <div class='products__item mb-4'>
                            <figure>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </figure>
                            <div class="info flex flex-col">
                                <a class='titleProduct inline-block' href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php $price = get_post_meta(get_the_ID(), '_price', true); ?>
                                <span class='product__price inline-block'><?php echo wc_price($price); ?></span>
                                <?php $id = get_the_ID(); ?>

                            </div>
                        </div>
                    </div>
                    <?php
                    array_push($idsExclude, get_the_ID());
                    $counter++;
                    ?>
                <?php endwhile; ?>
                <!-- post navigation -->
            </div>
        </div>
    <?php else : ?>
        <!-- no posts found -->
    <?php endif;
    wp_reset_query();

    /*Get the ids for the 4 first posts and get the id*/
    $excludeArgs = array('fields' => 'ids', 'post_type' => 'product',  'posts_per_page' => 4);

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type' => 'product',
        'paged' => $paged,
        'post__not_in'   => $idsExclude,
    );

    $loop = new WP_Query($args);
    if ($loop->have_posts()) : ?>
        <div class="container mx-auto">
            <div class="product__list grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 px-4 py-8 lg:pb-8">
                <?php
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php get_template_part('template-parts/items/itemProducts'); ?>
                <?php endwhile; ?>
                <!-- post navigation -->
            </div>
        </div>
    <?php else : ?>
        <!-- no posts found -->
    <?php endif; ?>
    <?php wp_reset_query(); ?>

<?php
} else {
?>

    <div class="container mx-auto">
        <div class="items px-4 py-8 lg:pb-8">
            <?php
            if (woocommerce_product_loop()) {

                /**
                 * Hook: woocommerce_before_shop_loop.
                 *
                 * @hooked woocommerce_output_all_notices - 10
                 * @hooked woocommerce_result_count - 20
                 * @hooked woocommerce_catalog_ordering - 30
                 */
                do_action('woocommerce_before_shop_loop');

                woocommerce_product_loop_start();

                if (wc_get_loop_prop('total')) {


                    while (have_posts()) {
                        the_post();

                        /**
                         * Hook: woocommerce_shop_loop.
                         */
                        do_action('woocommerce_shop_loop');

                        wc_get_template_part('content', 'product');
                    }
                }

                woocommerce_product_loop_end();

                /**
                 * Hook: woocommerce_after_shop_loop.
                 *
                 * @hooked woocommerce_pagination - 10
                 */
            }
            ?>
        </div>
    </div>


<?php
}


?>


<div class="container mx-auto">
    <div class="flex flex-wrap">
        <div class="w-full pb-8 lg:pb-14 px-4">
            <?php knitosophy__pagination(); ?>
        </div>
    </div>

</div>

<?php wp_reset_postdata(); ?>


<?php



get_footer('shop');
