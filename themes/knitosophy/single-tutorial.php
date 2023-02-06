<?php

/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package knitosophy
 */

get_header(); ?>

<!-- Pages hero -->
<?php get_template_part('template-parts/hero', 'pages'); ?>

<div class="content__single__tutorials py-8 lg:py-14">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-10/12 mx-auto info__post px-4">
                <div class="left">
                    <span class='block'>
                        <?php $author = get_the_author();
                        echo $author;
                        ?></span>
                    <span class='block'>
                        <?php $post_date = get_the_date('F j, Y');
                        echo $post_date; ?></span>
                </div>
            </div>
            <div class="w-full lg:w-10/12 mx-auto mt-6 tutorial__content px-4">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>


<div class="last-post pb-14">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <h2 class="px-4">You might also like</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4 others__tutorials pt-4">
                <?php
                $loop = new WP_Query(
                    array(
                        'post_type' => 'tutorial',
                        'posts_per_page' => 3,
                        'post__not_in' => array($post->ID)
                    )
                );
                while ($loop->have_posts()) : $loop->the_post();
                ?>
                    <!-- Item Post -->
                    <?php get_template_part('template-parts/items/item', 'tutorials'); ?>
                    <!-- Item Post -->
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
