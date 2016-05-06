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
                        'value' => array(6000,15000),
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
                            <span class="filter__icon filter__icon_1k"></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">100-1K מ״ר</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">100-1,000 מ״ר</span>
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
                            <span class="filter__icon filter__icon_3k"></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">1K-3K מ״ר</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">1,000-3,000 מ״ר</span>
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
                            <span class="filter__icon filter__icon_6k"></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                                <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">3K-6K מ״ר</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">3,000-6,000 מ״ר</span>
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
                            <span class="filter__icon filter__icon_15k"></span>
                            <!-- /filter__icon -->

                            <!-- filter__value -->
                            <span class="filter__value">

                               <!-- filter__value-mobile -->
                                <span class="filter__value-mobile">6K-15K מ״ר</span>
                                <!-- /filter__value-mobile -->

                                <!-- filter__value-desktop -->
                                <span class="filter__value-desktop">6,000-15,000 מ״ר</span>
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
                            $cur_footage = 'all-works__icon_1k';
                        }
                        elseif($current_icon_footage <= 3000){
                            $cur_footage = 'all-works__icon_3k';
                        }
                        elseif($current_icon_footage <= 6000){
                            $cur_footage = 'all-works__icon_6k';
                        }
                        elseif($current_icon_footage <= 15000){
                            $cur_footage = 'all-works__icon_15k';
                        }
                        else{
                            $cur_footage = 'all-works__icon_15k';
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
                                <span class="all-works__icon <?php echo $cur_footage;?>"></span>
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