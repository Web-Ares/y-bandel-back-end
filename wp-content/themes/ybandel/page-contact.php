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
            <h1 class="site__title">צור קשר</h1>
            <!-- /site__title -->

            <!-- contact-us__title -->
            <h2 class="contact-us__title">אם הפרויקט הבא בפתח ואתה רוצה להבטיח את הצלחתו, אנו מזמינים אותך להשאיר פרטים וליהנות מראש שקט ומשקט נפשי.<span> נציגנו יחזור אליך בהקדם.</span></h2>
            <!-- /contact-us__title -->

            <!-- contact-us__wrapper -->
            <div class="contact-us__wrapper">

                <?php echo do_shortcode('[contact-form-7 id="62" title="Contact Form" html_class="site__form"]');?>

                <!-- contact-us__address -->
                <address class="contact-us__address">

                    <!-- contact-us__address-title -->
                    <div class="contact-us__address-title"><?php the_field('address'); ?></div>
                    <!-- /contact-us__address-title -->

                    <dl>
                        <dt>טלפון:</dt>
                        <dd><?php the_field('phone'); ?></dd>
                    </dl>
                    <dl>
                        <dt>נייד:</dt>
                        <dd><?php the_field('phone_2'); ?></dd>
                    </dl>
                    <dl>
                        <dt>פקס:</dt>
                        <dd><?php the_field('fax'); ?></dd>
                    </dl>
                    <dl>
                        <dt>דוא״ל:</dt>
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