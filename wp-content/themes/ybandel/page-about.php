<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

    <!-- site__content -->
    <div class="site__content">

        <!-- about-us -->
        <div class="about-us">

            <!-- site__page -->
            <span class="site__page">01</span>
            <!-- /site__page -->

            <!-- site__title -->
            <h1 class="site__title"><?php the_title(); ?></h1>
            <!-- /site__title -->

            <!-- about-us__founder -->
            <div class="about-us__founder">

                <img src="<?php echo TEMPLATEURI;?>/dist/pic/about-us__founder.jpg" alt="founder">

                <!-- about-us__founder-title -->
                <strong class="about-us__founder-title"><?php the_field('founder_field'); ?></strong>
                <!-- /about-us__founder-title -->

                <?php the_field('founder_text'); ?>

            </div>
            <!-- /about-us__founder -->

            <!-- about-us__list -->
            <div class="about-us__list">

                <?php the_field('list_about'); ?>

            </div>
            <!-- /about-us__list -->

            <!-- about-us__promo -->
            <div class="about-us__promo"><?php the_field('title_on_the_page_bottom'); ?></div>
            <!-- /about-us__promo -->

        </div>
        <!-- /about-us -->

    </div>
    <!-- /site__content -->


<?php get_footer(); ?>