<?php
$args = array(
  'post_type' => 'cta',
  'posts_per_page' => -1,
  'meta_query' => array(
    array(
      'key'    => 'cta_relationship',
      'compare'  => 'LIKE',
      'value'    => get_the_ID(),
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
      $background = get_the_post_thumbnail_url();
    } else {
      $class = 'product';
    }
    ?>
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
<?php endwhile;
  wp_reset_postdata();
endif; ?>