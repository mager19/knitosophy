<?php

/**
 * TEMPLATE NAME:  Contact
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

<div class="contact__page px-4 py-8 lg:py-14">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="contact__left w-full md:w-8/12 mx-auto lg:w-1/2">
                <?php $email = get_field('email', 'option'); ?>
                <h3 class="title"><a href="mailto:<?php echo $email; ?>">Quick Contact</a> </h3>
                <span>OR</span>
                <h3 class="title">Send a Message</h3>
                <?php the_content(); ?>
            </div>
            <div class="contact__right w-full lg:w-1/2 pt-8 lg:pt-0 lg:pl-4">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
