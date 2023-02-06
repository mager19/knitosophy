<?php

/**
 * TEMPLATE NAME:  Tutorials
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package knitosophy
 */

get_header(); ?>

<!-- Pages hero -->
<?php get_template_part('template-parts/hero', 'pages'); ?>

<?php
$offsetArray = [];
?>

<div class="latest__products py-8 lg:py-14 ">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="latest__products__left px-4 w-full lg:w-1/2">
                <?php
                $args = array('post_type' => 'tutorial', 'posts_per_page' => 1);
                $loop = new WP_Query($args);
                if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="item__tutorials">
                            <?php the_post_thumbnail(); ?>
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
                            <p><?php echo wp_trim_words(get_the_content(), '32', '...'); ?></p>

                            <?php
                            $term_obj_list = get_the_terms($post->ID, 'tutorial_category');
                            $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                            if ($term_obj_list) { ?>
                                <div class="items__category">
                                    <?php
                                    foreach ($term_obj_list as $item) { ?>
                                        <span><a href="<?php echo esc_url(get_bloginfo('url')); ?>/tutorial_category/<?php echo $item->slug; ?>/"><?php echo $item->name; ?></a></span>
                                    <?php
                                    }

                                    ?>
                                </div>
                            <?php
                            }
                            ?>

                        </div>


                        <?php array_push($offsetArray, $post->ID); ?>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else : ?>
                    <!-- no posts found -->
                <?php endif; ?>
            </div>
            <div class="latest__products__right w-full mt-8 lg:w-1/2 px-4 lg:mt-0">
                <?php
                $args = array('post_type' => 'tutorial', 'posts_per_page' => 3, 'offset' => 1);
                $loop = new WP_Query($args);
                if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="item__products__featured flex flex-wrap">
                            <div class="image lg:w-5/12">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content lg:w-7/12 lg:pl-4 mt-4 lg:mt-0">
                                <div class="author__date mb-2">
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
                                <p><?php echo wp_trim_words(get_the_content(), '20', '...'); ?></p>

                                <?php
                                $term_obj_list = get_the_terms($post->ID, 'tutorial_category');
                                $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                                if ($term_obj_list) { ?>
                                    <div class="items__category">
                                        <?php
                                        $flag = 1;
                                        foreach ($term_obj_list as $item) {
                                            if ($flag < 3) { ?>
                                                <span><a href="<?php echo esc_url(get_bloginfo('url')); ?>/tutorial_category/<?php echo $item->slug; ?>/"><?php echo $item->name; ?></a></span>
                                        <?php
                                            }

                                            $flag++;
                                        }

                                        ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php array_push($offsetArray, $post->ID); ?>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else : ?>
                    <!-- no posts found -->
                <?php endif; ?>
            </div>
        </div>

        <?php
        $args = array('post_type' => 'tutorial', 'posts_per_page' => -1, 'post__not_in' => $offsetArray);
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-8\ py-8 lg:py-14 others__tutorials px-4">
                <?php
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php get_template_part('template-parts/items/item', 'tutorials'); ?>
                <?php endwhile; ?>
            </div>
            <!-- post navigation -->
        <?php else : ?>
            <!-- no posts found -->
        <?php endif; ?>



    </div>
</div>



<?php
get_footer();
