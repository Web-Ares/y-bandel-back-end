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
            <form action="" class="filter">

                <!-- filter__wrap -->
                <div class="filter__wrap">

                    <!-- filter__item -->
                    <div class="filter__item" data-id="1k">

                        <!-- filter__icon -->
                        <div class="filter__icon filter__icon_1k"></div>
                        <!-- /filter__icon -->

                        <!-- filter__value -->
                        <div class="filter__value">

                            <!-- filter__value-mobile -->
                            <span class="filter__value-mobile">100-1K מ״ר</span>
                            <!-- /filter__value-mobile -->

                            <!-- filter__value-desktop -->
                            <span class="filter__value-desktop">100-1,000 מ״ר</span>
                            <!-- /filter__value-desktop -->

                        </div>
                        <!-- /filter__value -->

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item active" data-id="3k">

                        <!-- filter__icon -->
                        <div class="filter__icon filter__icon_3k"></div>
                        <!-- /filter__icon -->

                        <!-- filter__value -->
                        <div class="filter__value">

                            <!-- filter__value-mobile -->
                            <span class="filter__value-mobile">1K-3K מ״ר</span>
                            <!-- /filter__value-mobile -->

                            <!-- filter__value-desktop -->
                            <span class="filter__value-desktop">1,000-3,000 מ״ר</span>
                            <!-- /filter__value-desktop -->

                        </div>
                        <!-- /filter__value -->

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item" data-id="6k">

                        <!-- filter__icon -->
                        <div class="filter__icon filter__icon_6k"></div>
                        <!-- /filter__icon -->

                        <!-- filter__value -->
                        <div class="filter__value">

                            <!-- filter__value-mobile -->
                            <span class="filter__value-mobile">3K-6K מ״ר</span>
                            <!-- /filter__value-mobile -->

                            <!-- filter__value-desktop -->
                            <span class="filter__value-desktop">3,000-6,000 מ״ר</span>
                            <!-- /filter__value-desktop -->

                        </div>
                        <!-- /filter__value -->

                    </div>
                    <!-- /filter__item -->

                    <!-- filter__item -->
                    <div class="filter__item active" data-id="15k">

                        <!-- filter__icon -->
                        <div class="filter__icon filter__icon_15k"></div>
                        <!-- /filter__icon -->

                        <!-- filter__value -->
                        <div class="filter__value">

                            <!-- filter__value-mobile -->
                            <span class="filter__value-mobile">6K-15K מ״ר</span>
                            <!-- /filter__value-mobile -->

                            <!-- filter__value-desktop -->
                            <span class="filter__value-desktop">6,000-15,000 מ״ר</span>
                            <!-- /filter__value-desktop -->

                        </div>
                        <!-- /filter__value -->

                    </div>
                    <!-- /filter__item -->

                </div>
                <!-- /filter__wrap -->

            </form>
            <!-- /filter -->

            <!-- all-works__wrap -->
            <div class="all-works__wrap">

                <?php
                $args = array(
                    'post_type' => 'project',
                    'order' => 'ASC',
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

        </div>
        <!-- /all-works -->

    </div>
    <!-- /site__content -->


<?php get_footer(); ?>