<?php
/**
 * Template Name: All Projects Page
 */
get_header(); ?>

    <!-- site__content -->
    <div class="site__content">

        <!-- all-works -->
        <div class="all-works">

            <!-- site__page -->
            <span class="site__page">03</span>
            <!-- /site__page -->

            <!-- site__title -->
            <h1 class="site__title"><?php the_field('main_title'); ?></h1>
            <!-- /site__title -->

            <!-- all-works__title -->
            <h2 class="all-works__title"><?php the_field('description_text'); ?></h2>
            <!-- /all-works__title -->
            <!-- filter -->
            <form action="#" class="filter">

                <!-- filter__wrap -->
                <div class="filter__wrap">

                    <!-- filter__item -->
                    <div class="filter__item">

                        <input type="checkbox" name="1k" id="1k">

                        <label for="1k">

                            <!-- filter__icon -->
                            <span class="filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M36.17,29.87L24.69,24.05V18a0.3,0.3,0,0,0-.16-0.26L13.08,11.33a0.31,0.31,0,0,0-.31,0,0.3,0.3,0,0,0-.15.26V30.27a0.27,0.27,0,0,0,0,.08,0.3,0.3,0,0,0,0,.12,0.3,0.3,0,0,0,.16.27l11.46,6.44a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.15,0L36.18,30.4A0.3,0.3,0,0,0,36.17,29.87ZM24.08,18.21v5.85L13.24,30V12.11Zm0,6.54V36.38L13.56,30.47Zm0.61,11.62V24.74l10.7,5.42Z"/></svg></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">100-1K ???</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">100-1,000 ???</span>
                                <!-- /filter__value-desktop -->

                            </span>
                            <!-- /filter__value -->

                        </label>

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item">

                        <input type="checkbox" name="3k" id="3k">

                        <label for="3k">

                            <!-- filter__icon -->
                            <span class="filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M35.64,21.8a0.31,0.31,0,0,0-.17-0.26l-7.74-4,7.71-4.37a0.31,0.31,0,0,0,0-.54L24,6.37a0.31,0.31,0,0,0-.29,0L12.12,12.66a0.31,0.31,0,0,0-.16.27,0.3,0.3,0,0,0,.06.18v8.82a0.27,0.27,0,0,0,0,.41v9.57a0.31,0.31,0,0,0,.15.26l11.46,6.94a0.3,0.3,0,0,0,.16,0,0.31,0.31,0,0,0,.31-0.31V28.76l11.4-6.69A0.31,0.31,0,0,0,35.64,21.8ZM23.82,7l10.85,5.95-7.59,4.3-3.25-1.67a0.31,0.31,0,0,0-.29,0l-3,1.66L12.9,12.94Zm-3.3,10.94,3,1.67v8.57l-10.61-6Zm-7.88,3.63V13.49l7.25,4.09Zm11.18-2.48-2.66-1.5,2.54-1.4,2.75,1.41ZM12.64,31.74v-9l10.84,6.16v9.44Zm11.46-3.69V19.64l3-1.7,7.6,3.89Z"/></svg></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">1K-3K ???</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">1,000-3,000 ???</span>
                                <!-- /filter__value-desktop -->

                            </span>
                            <!-- /filter__value -->

                        </label>

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item">

                        <input type="checkbox" name="6k" id="6k">

                        <label for="6k">

                            <!-- filter__icon -->
                            <span class="filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M34.7,14.6a0.29,0.29,0,0,0,0,0,0.31,0.31,0,0,0-.16-0.27l-2.93-1.6,2.68-1.56a0.31,0.31,0,0,0,0-.54L22.63,4.65a0.31,0.31,0,0,0-.29,0L10.88,10.92a0.31,0.31,0,0,0,0,.54L13.6,13l-2.19,1.19a0.29,0.29,0,0,0-.13-0.05,0.31,0.31,0,0,0-.31.31v13.3a0.31,0.31,0,0,0,.16.27l11.44,6.25v6.33a0.31,0.31,0,0,0,.45.27l11.68-6.38a0.31,0.31,0,0,0,.16-0.27V14.85A0.29,0.29,0,0,0,34.7,14.6Zm-23-3.4L22.5,5.27l11,5.62L31,12.35,23.06,8a0.31,0.31,0,0,0-.29,0l-8.54,4.63Zm18.72,1.52-7.89,4.61L14.86,13l8.05-4.37Zm-16.15.64,8.12,4.59a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.15,0L31,13.06l2.77,1.51L22.92,20.7,12,14.57Zm-2.64,14.2V15l11,6.17V33.56Zm11.6,12.52V34.31l0,0a0.29,0.29,0,0,0,0-.31V21.25L34.26,15V34Z"/></svg></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">3K-6K ???</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">3,000-6,000 ???</span>
                                <!-- /filter__value-desktop -->

                            </span>
                            <!-- /filter__value -->

                        </label>

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item">

                        <input type="checkbox" name="15k" id="15k">

                        <label for="15k">

                            <!-- filter__icon -->
                            <span class="filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M37.34,10.76L25.9,4.46a0.3,0.3,0,0,0-.29,0l-17.13,9a0.31,0.31,0,0,0-.13.41h0a0.31,0.31,0,0,0-.15.26V27.51a0.31,0.31,0,0,0,.16.27L20,34.19a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.16,0,0.31,0.31,0,0,0,.15-0.26V33.84L22,32.89V41.7a0.31,0.31,0,0,0,.15.26,0.3,0.3,0,0,0,.3,0l11.62-6.41a0.31,0.31,0,0,0,.16-0.27V15.86a0.31,0.31,0,0,0-.15-0.26,0.3,0.3,0,0,0-.3,0L22.47,21.83l-2.06-1.06v-0.2a0.3,0.3,0,0,0,0-.09l17-9.17A0.31,0.31,0,0,0,37.34,10.76ZM19.79,33.4l-10.9-6,10.9-6v12Zm-11-6.65V14.68l10.95,6ZM33.64,16.38V35.11l-11,6.07V32.53l9.13-5.39a0.31,0.31,0,0,0,0-.54l-8.61-4.43ZM31,26.9l-8.34,4.92V22.6Zm-9-4.61v9.89l-1.61.95V21.46ZM20,20a0.29,0.29,0,0,0-.09.12L8.81,14,25.75,5.08,36.55,11Z"/></svg></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                               <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">6K-15K ???</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">6,000-15,000 ???</span>
                                <!-- /filter__value-desktop -->

                            </span>
                            <!-- /filter__value -->

                        </label>

                    </div>
                    <!-- /filter__item -->

                </div>
                <!-- /filter__wrap -->

                <button type="submit"></button>

            </form>
            <!-- /filter -->
            <!-- filter -->
            <form action="<?php the_permalink(15); ?>" class="filter" method="get">

                <?php
                $filter_1 = $_GET['1k'];
                $filter_2 = $_GET['3k'];
                $filter_3 = $_GET['6k'];
                $filter_4 = $_GET['15k'];

                if($filter_1){
                    $check_flag_1 = 'checked';
                    $range_1 = array(
                        'key' => 'project_footage',
                        'value' => array(100,1000),
                        'compare' => 'BETWEEN',
                        'type' => 'NUMERIC',
                    );
                }
                if($filter_2){
                    $check_flag_2 = 'checked';
                    $range_2 = array(
                        'key' => 'project_footage',
                        'value' => array(1000,3000),
                        'compare' => 'BETWEEN',
                        'type' => 'NUMERIC',
                    );
                }
                if($filter_3){
                    $check_flag_3 = 'checked';
                    $range_3 = array(
                        'key' => 'project_footage',
                        'value' => array(3000,6000),
                        'compare' => 'BETWEEN',
                        'type' => 'NUMERIC',
                    );
                }
                if($filter_4){
                    $check_flag_4 = 'checked';
                    $range_4 = array(
                        'key' => 'project_footage',
                        'value' => array(6000,999999),
                        'compare' => 'BETWEEN',
                        'type' => 'NUMERIC',
                    );
                }
                ?>
                <!-- filter__wrap -->
                <div class="filter__wrap">

                    <!-- filter__item -->
                    <div class="filter__item">

                        <input type="checkbox" id="1k" name="1k" value="1k" <?php echo $check_flag_1; ?>>

                        <label for="1k">


                            <!-- filter__icon -->
                            <span class="filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M36.17,29.87L24.69,24.05V18a0.3,0.3,0,0,0-.16-0.26L13.08,11.33a0.31,0.31,0,0,0-.31,0,0.3,0.3,0,0,0-.15.26V30.27a0.27,0.27,0,0,0,0,.08,0.3,0.3,0,0,0,0,.12,0.3,0.3,0,0,0,.16.27l11.46,6.44a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.15,0L36.18,30.4A0.3,0.3,0,0,0,36.17,29.87ZM24.08,18.21v5.85L13.24,30V12.11Zm0,6.54V36.38L13.56,30.47Zm0.61,11.62V24.74l10.7,5.42Z"/></svg></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">100-1k ???</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">100-1,000 ???</span>
                                <!-- /filter__value-desktop -->

                            </span>
                            <!-- /filter__value -->

                        </label>

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item">

                        <input type="checkbox" id="3k" name="3k" value="3k" <?php echo $check_flag_2; ?>>

                        <label for="3k">

                            <!-- filter__icon -->
                            <span class="filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M35.64,21.8a0.31,0.31,0,0,0-.17-0.26l-7.74-4,7.71-4.37a0.31,0.31,0,0,0,0-.54L24,6.37a0.31,0.31,0,0,0-.29,0L12.12,12.66a0.31,0.31,0,0,0-.16.27,0.3,0.3,0,0,0,.06.18v8.82a0.27,0.27,0,0,0,0,.41v9.57a0.31,0.31,0,0,0,.15.26l11.46,6.94a0.3,0.3,0,0,0,.16,0,0.31,0.31,0,0,0,.31-0.31V28.76l11.4-6.69A0.31,0.31,0,0,0,35.64,21.8ZM23.82,7l10.85,5.95-7.59,4.3-3.25-1.67a0.31,0.31,0,0,0-.29,0l-3,1.66L12.9,12.94Zm-3.3,10.94,3,1.67v8.57l-10.61-6Zm-7.88,3.63V13.49l7.25,4.09Zm11.18-2.48-2.66-1.5,2.54-1.4,2.75,1.41ZM12.64,31.74v-9l10.84,6.16v9.44Zm11.46-3.69V19.64l3-1.7,7.6,3.89Z"/></svg></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">1k-3k ???</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">1,000-3,000 ???</span>
                                <!-- /filter__value-desktop -->

                            </span>
                            <!-- /filter__value -->

                        </label>

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item">

                        <input type="checkbox" id="6k" name="6k" value="6k" <?php echo $check_flag_3; ?>>

                        <label for="6k">

                            <!-- filter__icon -->
                            <span class="filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M34.7,14.6a0.29,0.29,0,0,0,0,0,0.31,0.31,0,0,0-.16-0.27l-2.93-1.6,2.68-1.56a0.31,0.31,0,0,0,0-.54L22.63,4.65a0.31,0.31,0,0,0-.29,0L10.88,10.92a0.31,0.31,0,0,0,0,.54L13.6,13l-2.19,1.19a0.29,0.29,0,0,0-.13-0.05,0.31,0.31,0,0,0-.31.31v13.3a0.31,0.31,0,0,0,.16.27l11.44,6.25v6.33a0.31,0.31,0,0,0,.45.27l11.68-6.38a0.31,0.31,0,0,0,.16-0.27V14.85A0.29,0.29,0,0,0,34.7,14.6Zm-23-3.4L22.5,5.27l11,5.62L31,12.35,23.06,8a0.31,0.31,0,0,0-.29,0l-8.54,4.63Zm18.72,1.52-7.89,4.61L14.86,13l8.05-4.37Zm-16.15.64,8.12,4.59a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.15,0L31,13.06l2.77,1.51L22.92,20.7,12,14.57Zm-2.64,14.2V15l11,6.17V33.56Zm11.6,12.52V34.31l0,0a0.29,0.29,0,0,0,0-.31V21.25L34.26,15V34Z"/></svg></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">3k-6k ???</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">3,000-6,000 ???</span>
                                <!-- /filter__value-desktop -->

                            </span>
                            <!-- /filter__value -->

                        </label>

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item">

                        <input type="checkbox" id="15k" name="15k" value="15k" <?php echo $check_flag_4; ?>>

                        <label for="15k">

                            <!-- filter__icon -->
                            <span class="filter__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M37.34,10.76L25.9,4.46a0.3,0.3,0,0,0-.29,0l-17.13,9a0.31,0.31,0,0,0-.13.41h0a0.31,0.31,0,0,0-.15.26V27.51a0.31,0.31,0,0,0,.16.27L20,34.19a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.16,0,0.31,0.31,0,0,0,.15-0.26V33.84L22,32.89V41.7a0.31,0.31,0,0,0,.15.26,0.3,0.3,0,0,0,.3,0l11.62-6.41a0.31,0.31,0,0,0,.16-0.27V15.86a0.31,0.31,0,0,0-.15-0.26,0.3,0.3,0,0,0-.3,0L22.47,21.83l-2.06-1.06v-0.2a0.3,0.3,0,0,0,0-.09l17-9.17A0.31,0.31,0,0,0,37.34,10.76ZM19.79,33.4l-10.9-6,10.9-6v12Zm-11-6.65V14.68l10.95,6ZM33.64,16.38V35.11l-11,6.07V32.53l9.13-5.39a0.31,0.31,0,0,0,0-.54l-8.61-4.43ZM31,26.9l-8.34,4.92V22.6Zm-9-4.61v9.89l-1.61.95V21.46ZM20,20a0.29,0.29,0,0,0-.09.12L8.81,14,25.75,5.08,36.55,11Z"/></svg></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                               <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">6,000 ?"? ????</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">6,000 ?"? ????</span>
                                <!-- /filter__value-desktop -->

                            </span>
                            <!-- /filter__value -->

                        </label>

                    </div>
                    <!-- /filter__item -->

                </div>
                <!-- /filter__wrap -->

                <button type="submit"></button>

            </form>
            <!-- /filter -->

            <!-- all-works__wrap -->
            <div class="all-works__wrap">

                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'paged' => $paged,
                    'post_type' => 'project',
                    'posts_per_page' => 6,

                    'meta_query' => array(
                        'relation' => 'OR',
                        $range_1,
                        $range_2,
                        $range_3,
                        $range_4,
                    ),
                );
                $projects = new WP_query ( $args );

                if ( $projects->have_posts() ) {

                    while ( $projects->have_posts()) :

                        $projects->the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                        $current_icon_footage = get_field('project_footage');
                        if($current_icon_footage <= 1000){
                            $cur_footage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M36.17,29.87L24.69,24.05V18a0.3,0.3,0,0,0-.16-0.26L13.08,11.33a0.31,0.31,0,0,0-.31,0,0.3,0.3,0,0,0-.15.26V30.27a0.27,0.27,0,0,0,0,.08,0.3,0.3,0,0,0,0,.12,0.3,0.3,0,0,0,.16.27l11.46,6.44a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.15,0L36.18,30.4A0.3,0.3,0,0,0,36.17,29.87ZM24.08,18.21v5.85L13.24,30V12.11Zm0,6.54V36.38L13.56,30.47Zm0.61,11.62V24.74l10.7,5.42Z"/></svg>';
                        }
                        elseif($current_icon_footage <= 3000){
                            $cur_footage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M35.64,21.8a0.31,0.31,0,0,0-.17-0.26l-7.74-4,7.71-4.37a0.31,0.31,0,0,0,0-.54L24,6.37a0.31,0.31,0,0,0-.29,0L12.12,12.66a0.31,0.31,0,0,0-.16.27,0.3,0.3,0,0,0,.06.18v8.82a0.27,0.27,0,0,0,0,.41v9.57a0.31,0.31,0,0,0,.15.26l11.46,6.94a0.3,0.3,0,0,0,.16,0,0.31,0.31,0,0,0,.31-0.31V28.76l11.4-6.69A0.31,0.31,0,0,0,35.64,21.8ZM23.82,7l10.85,5.95-7.59,4.3-3.25-1.67a0.31,0.31,0,0,0-.29,0l-3,1.66L12.9,12.94Zm-3.3,10.94,3,1.67v8.57l-10.61-6Zm-7.88,3.63V13.49l7.25,4.09Zm11.18-2.48-2.66-1.5,2.54-1.4,2.75,1.41ZM12.64,31.74v-9l10.84,6.16v9.44Zm11.46-3.69V19.64l3-1.7,7.6,3.89Z"/></svg>';
                        }
                        elseif($current_icon_footage <= 6000){
                            $cur_footage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M34.7,14.6a0.29,0.29,0,0,0,0,0,0.31,0.31,0,0,0-.16-0.27l-2.93-1.6,2.68-1.56a0.31,0.31,0,0,0,0-.54L22.63,4.65a0.31,0.31,0,0,0-.29,0L10.88,10.92a0.31,0.31,0,0,0,0,.54L13.6,13l-2.19,1.19a0.29,0.29,0,0,0-.13-0.05,0.31,0.31,0,0,0-.31.31v13.3a0.31,0.31,0,0,0,.16.27l11.44,6.25v6.33a0.31,0.31,0,0,0,.45.27l11.68-6.38a0.31,0.31,0,0,0,.16-0.27V14.85A0.29,0.29,0,0,0,34.7,14.6Zm-23-3.4L22.5,5.27l11,5.62L31,12.35,23.06,8a0.31,0.31,0,0,0-.29,0l-8.54,4.63Zm18.72,1.52-7.89,4.61L14.86,13l8.05-4.37Zm-16.15.64,8.12,4.59a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.15,0L31,13.06l2.77,1.51L22.92,20.7,12,14.57Zm-2.64,14.2V15l11,6.17V33.56Zm11.6,12.52V34.31l0,0a0.29,0.29,0,0,0,0-.31V21.25L34.26,15V34Z"/></svg>';
                        }
                        elseif($current_icon_footage > 6000){
                            $cur_footage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M37.34,10.76L25.9,4.46a0.3,0.3,0,0,0-.29,0l-17.13,9a0.31,0.31,0,0,0-.13.41h0a0.31,0.31,0,0,0-.15.26V27.51a0.31,0.31,0,0,0,.16.27L20,34.19a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.16,0,0.31,0.31,0,0,0,.15-0.26V33.84L22,32.89V41.7a0.31,0.31,0,0,0,.15.26,0.3,0.3,0,0,0,.3,0l11.62-6.41a0.31,0.31,0,0,0,.16-0.27V15.86a0.31,0.31,0,0,0-.15-0.26,0.3,0.3,0,0,0-.3,0L22.47,21.83l-2.06-1.06v-0.2a0.3,0.3,0,0,0,0-.09l17-9.17A0.31,0.31,0,0,0,37.34,10.76ZM19.79,33.4l-10.9-6,10.9-6v12Zm-11-6.65V14.68l10.95,6ZM33.64,16.38V35.11l-11,6.07V32.53l9.13-5.39a0.31,0.31,0,0,0,0-.54l-8.61-4.43ZM31,26.9l-8.34,4.92V22.6Zm-9-4.61v9.89l-1.61.95V21.46ZM20,20a0.29,0.29,0,0,0-.09.12L8.81,14,25.75,5.08,36.55,11Z"/></svg>';
                        }
                        ?>

                        <!-- all-works__item -->
                        <div class="all-works__item">

                            <!-- all-works__pic -->
                            <div class="all-works__pic" style="background-image: url('<?php echo $thumb_url; ?>')"></div>
                            <!-- /all-works__pic -->

                            <!-- all-works__footer -->
                            <div class="all-works__footer">

                                <!-- all-works__name -->
                                <span class="all-works__name"><?php the_title();?></span>
                                <!-- /all-works__name -->

                                <!-- all-works__icon -->
                                <span class="all-works__icon"><?php echo $cur_footage;?></span>
                                <!-- /all-works__icon -->

                                <!-- all-works__square -->
                                <span class="all-works__square"><?php the_field('project_footage'); ?><span>m<span>2</span></span></span>
                                <!-- /all-works__square -->

                                <!-- btn -->
                                <a href="<?php the_permalink(); ?>" class="btn btn_2"></a>
                                <!-- /btn -->

                            </div>
                            <!-- /all-works__footer -->

                        </div>
                        <!-- /all-works__item -->


                    <?php endwhile;
                }
                rewind_posts(); ?>

            </div>
            <!-- /all-works__wrap -->

            <?php echo 'Pagination'.theme_pagination(); ?>
        </div>
        <!-- /all-works -->

    </div>
    <!-- /site__content -->

<?php get_footer(); ?>