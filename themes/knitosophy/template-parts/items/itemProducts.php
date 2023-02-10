<div class='products__item mb-4'>
    <figure>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </figure>
    <div class="info flex flex-col">
        <a class='titleProduct inline-block' href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php $price = get_post_meta(get_the_ID(), '_price', true); ?>
        <span class='product__price inline-block'><?php echo wc_price($price); ?></span>
        <?php $id = get_the_ID(); ?>

        <a href='?add-to-cart=<?php echo $id; ?>' data-quantity="1" class="add_to_cart_button button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $id; ?>">
            Add To Cart
        </a>
    </div>
</div>