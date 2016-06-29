<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

    <!-- site__content -->
    <div class="site__content">

        <!-- contact-us -->
        <div class="contact-us">

            <!-- site__page -->
            <span class="site__page">05</span>
            <!-- /site__page -->

            <!-- site__title -->
            <h1 class="site__title"><?php the_title(); ?></h1>
            <!-- /site__title -->

            <!-- contact-us__title -->
            <h2 class="contact-us__title"><?php the_field('main_text_on_page'); ?></h2>
            <!-- /contact-us__title -->

            <!-- contact-us__wrapper -->
            <div class="contact-us__wrapper">

               <?php $cur_slug = pll_current_language('slug');

                if($cur_slug=='he'){
                    echo do_shortcode('[contact-form-7 id="62" title="Contact Form Hebrew" html_class="site__form"]');
                } else {
                    echo do_shortcode('[contact-form-7 id="571" title="Contact Us English" html_class="site__form"]');
                }?>


                <!-- contact-us__address -->
                <address class="contact-us__address">

                    <!-- contact-us__address-title -->
                    <div class="contact-us__address-title"><?php the_field('address'); ?></div>
                    <!-- /contact-us__address-title -->
                    <?php

                    $cur_slug = pll_current_language('slug');

                    if($cur_slug=='he'){
                        $phone = 'טלפון:';
                        $phone2 = 'נייד:';
                        $fax = 'פקס:';
                        $email = 'דוא״ל:';

                    } else {
                        $phone = 'phone:';
                        $phone2 = 'mobile:';
                        $fax = 'fax:';
                        $email = 'email:';
                    }
                    ?>

                    <dl>
                        <dt><?php echo $phone; ?></dt>
                        <dd><?php the_field('phone'); ?></dd>
                    </dl>
                    <dl>
                        <dt><?php echo $phone2; ?></dt>
                        <dd><?php the_field('phone_2'); ?></dd>
                    </dl>
                    <dl>
                        <dt><?php echo $fax; ?></dt>
                        <dd><?php the_field('fax'); ?></dd>
                    </dl>
                    <dl>
                        <dt><?php echo $email; ?></dt>
                        <dd><?php $email = get_field('e-mail'); ?>
                            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></dd>
                    </dl>

                </address>
                <!-- /contact-us__address -->

            </div>
            <!-- /contact-us__wrapper -->

        </div>
        <!-- /contact-us -->

    </div>
    <!-- /site__content -->


<?php get_footer(); ?>