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

                <img src="<?php the_field('main_image'); ?>" alt="founder">

                <!-- about-us__founder-title -->
                <strong class="about-us__founder-title"><?php the_field('founder_field'); ?></strong>
                <!-- /about-us__founder-title -->

                <?php the_field('founder_text'); ?>

            </div>
            <!-- /about-us__founder -->

            <!-- about-us__list -->
            <div class="about-us__list">

                <h2>כל פרויקט מהפרויקטים אותם אנו מובילים מנוהל לאורם של ערכי החברה, המנחים את פועלנו מדי יום:</h2>

                <!-- site__list -->
                <ul class="site__list">
                    <li>הצלחת הפרויקט היא ההצלחה שלנו – אנו מאמינים שהלקוח בחר בנו כי הוא יודע שנשלים עבורו את הפרויקט באופן הטוב ביותר. ולכן, אנו מקפידים לתת לו את השקט והביטחון להמשיך בפעילות שגרתית מתוך ידיעה ברורה שהפרויקט בידיים טובות.</li>
                    <li>האחריות היא שלנו – תפקידנו אינו להיות חלק מהפרויקט, אלא לעמוד בראשו ולהוביל את כל המעורבים במסע להשלמתו. אנו נתמודד עם האתגרים, המכשולים והקשיים שיצוצו בדרך ונרכיב את התצרף הגדול הזה לכדי מוצר מוגמר ואיכותי.</li>
                    <li>הניסיון והמקצועיות הם מעל הכל – ולכן אנו מקפידים על צוות איכותי שמסוגל לתת מענה מלא לכל צורכי הלקוח והפרויקט.</li>
                    <li>בקרה תמידית – אנו מבינים כי בפרויקטים שאנו מנהלים מושקעים משאבים כספיים וארגוניים רבים. לכן, אנו מקפידים לעמוד בתקציב שהוגדר לפרויקט, ולא פחות חשוב מכך בלוחות הזמנים שלו.</li>
                </ul>
                <!-- /site__list -->

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