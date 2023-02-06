<div class="item__tutorials">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    <div class="author__date">
        <?php
        $author = get_the_author();
        echo $author;
        ?> -
        <?php $post_date = get_the_date('F j, Y');
        echo $post_date; ?>
    </div>


    <h3 class="title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
    <p><?php echo wp_trim_words(get_the_content(), '22', '...'); ?></p>

    <?php
    $term_obj_list = get_the_terms($post->ID, 'tutorial_category');
    $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
    if ($term_obj_list) { ?>
        <div class="items__category">
            <?php
            $flag = 1;
            foreach ($term_obj_list as $item) {
                if ($flag < 3) {
            ?>

                    <span><a href="<?php echo esc_url(get_bloginfo('url')); ?>/tutorial_category/<?php echo $item->slug; ?>/"><?php echo $item->name; ?></a></span>

            <?php }
                $flag++;
            }

            ?>
        </div>
    <?php
    }
    ?>

</div>