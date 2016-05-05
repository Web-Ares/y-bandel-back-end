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

                <?php echo do_shortcode('[contact-form-7 id="62" title="Contact Form" html_class="site__form form-validation"]');?>

                <!-- contact-us__address -->
                <address class="contact-us__address">

                    <!-- contact-us__address-title -->
                    <div class="contact-us__address-title">רמב"ם 85, רעננה</div>
                    <!-- /contact-us__address-title -->

                    <dl>
                        <dt>טלפון:</dt>
                        <dd>03.6470984</dd>
                    </dl>
                    <dl>
                        <dt>נייד:</dt>
                        <dd>054.4840704</dd>
                    </dl>
                    <dl>
                        <dt>פקס:</dt>
                        <dd>03.6470987</dd>
                    </dl>
                    <dl>
                        <dt>דוא״ל:</dt>
                        <dd><a href="mailto:yigal@ybpm.co.il">yigal@ybpm.co.il</a></dd>
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