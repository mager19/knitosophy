<?php

/**
 * TEMPLATE NAME:  About
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

<div class="aboutme__intro flex items-center py-8 lg:py-14">
    <div class="w-screen mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-10/12 mx-auto flex flex-wrap px-4">
                <div class="about__intro w-full md:w-5/12 flex flex-col justify-center">
                    <div class="content"><?php the_field('about_me_intro');  ?></div>
                </div>

                <?php if (have_rows('about_page_images')) : ?>
                    <div class="about__picture w-full md:w-7/12">
                        <div class="about__grid">
                            <?php $counter = 1; ?>
                            <?php while (have_rows('about_page_images')) : the_row(); ?>
                                <div class="item__about__grid item__about__grid<?php echo $counter; ?>">
                                    <?php $image = get_sub_field('about_image'); ?>
                                    <?php knitosophy_get_Image($image); ?>
                                    <?php $counter++; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<div class="aboutme__content">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-10/12 mx-auto px-4">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
