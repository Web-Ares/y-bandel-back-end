<?php get_header(); ?>

    <!-- site__content -->
    <div class="site__content" xmlns="http://www.w3.org/1999/html">

        <!-- project -->
        <div class="project">

            <!-- project__slider -->
            <div class="project__slider">

                <h2 class="project__title">פרוייקטים נבחרים</h2>

                <!-- swiper-container -->
                <div class="swiper-container">

                    <!-- swiper-wrapper -->
                    <div class="swiper-wrapper">
                        <?php if( have_rows('project_preview_block') ):

                        while ( have_rows('project_preview_block') ) : the_row();
                            $type = get_sub_field('type_of_preview');
                    if($type=='full'){ ?>

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php the_sub_field('one_picture'); ?>')"></div>
                        </div>
                        <!-- /swiper-slide -->

                   <?php } if($type=='two_1'){ ?>
                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php the_sub_field('first_image_in_block'); ?>')"></div>
                        </div>
                        <!-- /swiper-slide -->
                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php the_sub_field('second_image_in_block'); ?>')"></div>
                        </div>
                        <!-- /swiper-slide -->
                    <?php } if($type=='two_2'){ ?>
                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php the_sub_field('first_image'); ?>')"></div>
                        </div>
                        <!-- /swiper-slide -->
                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php the_sub_field('second_image'); ?>')"></div>
                        </div>
                        <!-- /swiper-slide -->
                    <?php } ?>


                            <?php

                        endwhile;
                        endif; ?>


                    </div>
                    <!-- /swiper-wrapper -->

                    <span class="project__slider-next" title="next"></span>
                    <span class="project__slider-prev" title="prev"></span>

                </div>
                <!-- /swiper-container -->

            </div>
            <!-- /project__slider -->

            <!-- project__wrap -->
            <aside class="project__wrap">

                <!-- project__logo -->
                <h1 class="project__logo"><img src="<?php the_field('clients_logo'); ?>" alt="Leverate"></h1>
                <!-- /project__logo -->


<!--                <span class="site__page">03</span>-->


                <!-- project__info -->
                <div class="project__info">
                   <?php  $current_icon_footage = get_field('project_footage');
                    if($current_icon_footage <= 1000){
                    $cur_footage = 'all-works__icon_1k';
                        $range = array(0,1000);
                    }
                    elseif($current_icon_footage <= 3000){
                    $cur_footage = 'all-works__icon_3k';
                        $range = array(1000,3000);
                    }
                    elseif($current_icon_footage <= 6000){
                    $cur_footage = 'all-works__icon_6k';
                        $range = array(3000,6000);
                    }
                    elseif($current_icon_footage <= 15000){
                    $cur_footage = 'all-works__icon_15k';
                        $range = array(6000,15000);
                    }
                    else{
                    $cur_footage = 'all-works__icon_15k';
                        $range = array(6000,9999999);
                    }
                    $title = get_the_title();
                    $cur_id = get_the_ID();
                   ?>
                    
                    <div class="project__info-column">
                        <div class="project__info-row">
                            <span class="project__info-title">שם הפרוייקט</span>
                            <strong><?php echo $title; ?></strong>
                        </div>
                        <div class="project__info-row">
                            <span class="project__info-title">תיאור הפרוייקט</span>
                            <?php the_field('project_description'); ?>
                        </div>
                        <div class="project__info-row project__info-row_half">
                            <span class="project__info-title">אדריכלv</span>
                            <?php the_field('project_architect'); ?>
                        </div>
                        <div class="project__info-row project__info-row_half">
                            <span class="project__info-title">תחום עיסוק</span>
                            <?php the_field('project__occupation'); ?>
                        </div>
                        <div class="project__info-row">
                            <span class="project__info-title">מיקום</span>
                            <?php the_field('project_location'); ?>
                        </div>
                    </div>

                    <div class="project__info-column">
                        <div class="project__info-row project__info-row_square">

                            שטח
                            <p><?php the_field('project_footage'); ?><span>m<sup>2</sup></span></p>

                        </div>
                        <div class="project__info-row project__info-row_pic">
                            <img src="<?php echo TEMPLATEURI;?>/dist/pic/product-info_pic1.png" alt="<?php echo $title; ?>">
                        </div>
                    </div>

                </div>
                <!-- /project__info -->

                <h2 class="project__title">האתגר</h2>

                <p><?php the_field('the_project_objective_text'); ?></p>

                <h2 class="project__title">פרוייקטים דומים    </h2>
                <!-- project__like -->
                <div class="project__like">
                <?php
                $arg = array(
                'post_type'  => 'project',
                'posts_per_page' => 3,
                'post__not_in' => array($cur_id),
                'meta_query' => array(
                    array(
                        'key' => 'project_footage',
                        'value' => $range,
                        'compare' => 'BETWEEN',
                        'type' => 'NUMERIC',
                    ),
                ),
                );
                $like = new WP_Query( $arg );

                if( $like->have_posts() ) :

                while( $like->have_posts() ) : $like->the_post();
                     $like_title = get_the_title();
                    ?>

                    <div class="project__like-row">
                        <div class="project__like-column"><?php echo $like_title; ?></div>
                        <div class="project__like-column"><img src="<?php echo TEMPLATEURI;?>/dist/pic/project_scheme3.png" alt="<?php echo $like_title; ?>"></div>
                        <div class="project__like-column"><?php the_field('project_footage'); ?><span>m<sup>2</sup></span></div>
                        <div class="project__like-column"><a href="<?php the_permalink(); ?>" class="btn btn_2"></a></div>
                    </div>

               <?php endwhile;
                endif;
                wp_reset_postdata();
               ?>
                </div>
                <!-- /project__like -->

            </aside>
            <!-- /project__wrap -->

            <!-- project__pic -->
            <div class="project__pic">

                <?php if( have_rows('project_preview_block') ):

                    while ( have_rows('project_preview_block') ) : the_row();
                        $type = get_sub_field('type_of_preview');
                        if($type=='full'){ ?>
                            <!-- project__pic-wrap -->
                            <div class="project__pic-wrap">
                                <!-- project__pic-item -->
                                <span class="project__pic-item" style="background-image: url('<?php the_sub_field('one_picture'); ?>')">
                                    <span><?php the_sub_field('one_picture_descr'); ?></span>
                                </span>
                                <!-- /project__pic-item -->
                            </div>
                            <!-- /project__pic-wrap -->
                        <?php }
                        if($type=='two_1'){?>
                            <!-- project__pic-wrap -->
                            <div class="project__pic-wrap project__pic-wrap_type2">
                                <!-- project__pic-item -->
                                <span class="project__pic-item" style="background-image: url('<?php the_sub_field('first_image_in_block'); ?>')">
                                    <span><?php the_sub_field('first_image_in_block_descr'); ?></span>
                                </span>
                                <!-- /project__pic-item -->
                                <!-- project__pic-item -->
                                <span class="project__pic-item" style="background-image: url('<?php the_sub_field('second_image_in_block'); ?>')">
                                    <span><?php the_sub_field('second_image_in_block_descr'); ?></span>
                                </span>
                                <!-- /project__pic-item -->
                            </div>
                            <!-- /project__pic-wrap -->
                        <?php }
                        if($type=='two_2'){ ?>
                            <!-- project__pic-wrap -->
                            <div class="project__pic-wrap project__pic-wrap_type3">
                                <!-- project__pic-item -->
                                <span class="project__pic-item" style="background-image: url('<?php the_sub_field('first_image'); ?>')">
                                    <span><?php the_sub_field('first_image_descr'); ?></span>
                                </span>
                                <!-- /project__pic-item -->
                                <!-- project__pic-item -->
                                <span class="project__pic-item" style="background-image: url('<?php the_sub_field('second_image'); ?>')">
                                    <span><?php the_sub_field('second_image_descr'); ?></span>
                                </span>
                                <!-- /project__pic-item -->
                            </div>
                            <!-- /project__pic-wrap -->
                        <?php } ?>


                        <?php

                    endwhile;
                endif; ?>

            </div>
            <!-- /project__pic -->

        </div>
        <!-- /project -->

    </div>
    <!-- /site__content -->


<?php get_footer(); ?>