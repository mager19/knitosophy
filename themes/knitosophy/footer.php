<?php

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package knitosophy
 */
?>

</div>
<!--/ Content Page -->

<?php
if (!is_404()) {
    if (!is_home()) {
        get_template_part('template-parts/cta', 'footer');
    }
}
?>

<!-- Footer -->
<footer class="site-footer bg-gray-100">
    <div class="container mx-auto py-8 lg:py-14">
        <div class="site__footer__content flex flex-wrap px-4 justify-center lg:justify-start">

            <div class="site__footer__logo w-full lg:w-5/12 text-center lg:text-left mb-4 mx-auto lg:mx-0">
                <?php $GETlogo = get_field('logo_site', 'option'); ?>
                <a href="<?php echo esc_url(get_bloginfo('url')); ?>">
                    <?php if ($GETlogo) {
                        knitosophy_get_Image($GETlogo);
                    } else {
                        echo "<h3 class='mb-0'>Logo Brand</h3>";
                    } ?>
                </a>

                <?php
                $rows = get_field('social_icons', 'option');
                if ($rows) { ?>
                    <div class="social__icons flex justify-center lg:justify-start items-center px-2 gap-x-4">
                        <?php
                        foreach ($rows as $row) { ?>
                            <a href="<?php echo $row['social_profile']; ?>" target='_blank'>
                                <div class="icon-<?php echo $row['social_icon']['value']; ?>--d"></div>
                            </a>
                        <?php
                        } ?>
                    </div>
                <?php
                }
                ?>

                <div class="mail__topbar hidden md:block">
                    <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                </div>

            </div>

            <div class="site-footer__top text-center lg:text-left w-full lg:w-7/12 flex flex-wrap justify-center lg:justify-end">

                <?php $otherLinks = get_field('footer_other_links', 'option');
                if ($otherLinks) { ?>
                    <div class="other__links w-full md:w-4/12">
                        <?php echo $otherLinks; ?>
                    </div>
                <?php
                }
                ?>

                <?php $pages = get_field('knitosophy', 'option');
                if ($pages) { ?>
                    <div class="other__links w-full md:w-4/12">
                        <?php echo $pages; ?>
                    </div>
                <?php
                }
                ?>

                <?php $featured = get_field('featured_products_footer', 'option');
                ?>

                <?php if ($featured) : ?>
                    <div class='featuredProducts w-full md:w-4/12'>
                        <h5 class="title">FEATURED PRODUCTS</h5>
                        <?php foreach ($featured as $post) : setup_postdata($post); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>


                <!-- Footer Menu -->
                <div class="footer-menu">
                    <?php if (has_nav_menu('menu-2')) {
                        wp_nav_menu(array('theme_location' => 'menu-2'));
                    } ?>
                </div>
                <!--/Footer Menu-->

            </div>


        </div>
    </div>
</footer>

<!-- bottomBar -->
<div class="bottom__bar bg-secondary h-[30px] items-center text-white font-bold font-inter text-center flex justify-center">
    <div class="container mx-auto">
        <span class='text-center'><?php the_field('copyright', 'option'); ?></span>
    </div>
</div>

<!--/ Footer -->

<div id="modal-custom-1b" class="modalMenu menuModal">
    <div class="modal__header">
        <button data-iziModal-close class="icon-close">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L15 15M1 15L15 1" stroke="#A9E1D3" stroke-width="2" />
            </svg>
        </button>
    </div>

    <div class="modal__content relative">
        <?php
        $GETlogo = get_field('logo_site', 'option'); ?>
        <a href="<?php echo esc_url(get_bloginfo('url')); ?>">
            <figure>
                <?php if ($GETlogo) {
                    knitosophy_get_Image($GETlogo);
                }  ?>
            </figure>
        </a>
        <div class="menuMobileModal flex">
            <!--Menu-->
            <?php
            if (has_nav_menu('menu-1')) { ?>

                <?php
                wp_nav_menu(array('theme_location' => 'menu-1'));
                ?>

            <?php
            }
            ?>
            <!--/Menu-->
        </div>
    </div>

</div>

</div>
<?php wp_footer(); ?>
</body>

</html>