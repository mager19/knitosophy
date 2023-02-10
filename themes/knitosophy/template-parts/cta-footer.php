<?php

if (is_post_type_archive('product')) {
  $page = get_page_by_path('shop');
  $pageId = $page->ID;
} else {
  $pageId = get_the_ID();
}

wp_reset_query();
$args = array(
  'post_type' => 'cta',
  'posts_per_page' => -1,
  'meta_query' => array(
    array(
      'key'    => 'cta_relationship',
      'compare'  => 'LIKE',
      'value'    => $pageId,
    ),
  ),
);
$loop = new WP_Query($args);

if ($loop->have_posts()) :
  while ($loop->have_posts()) : $loop->the_post(); ?>
    <?php
    $style = get_field('cta_style');

    if ($style[0] === 'instagram') {
      $class = 'instagram';
      $background = get_the_post_thumbnail_url(); ?>

      <div class="cta cta__<?php echo $class; ?>" style='background-image: url(<?php echo $background; ?>);'>
        <div class="container mx-auto">
          <div class="flex px-4">
            <div class="about-cta w-full">
              <div>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    } else {
      $class = 'product';
      $background = get_the_post_thumbnail_url();
    ?>

      <div class="cta__<?php echo $class; ?> " style='background-image: url(<?php echo $background; ?>);'>
        <div class="container mx-auto">
          <div class="flex px-4">
            <?php $posts = get_field('select_product_to_show'); ?>
            <?php if ($posts) : ?>
              <div class="w-full">
                <?php foreach ($posts as $post) : setup_postdata($post); ?>
                  <div class="item__cta__product">
                    <h3 class="title"><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words(get_the_content(), '35', ''); ?></p>
                  </div>


                  <a class="btn btn__primary" href="<?php the_permalink(); ?>">View Product</a>

                <?php endforeach;
                wp_reset_postdata(); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

    <?php
    }
    ?>

<?php endwhile;
  wp_reset_postdata();
endif; ?>