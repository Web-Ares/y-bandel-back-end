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
                <?php    $client_logo = get_field('choose_the_client');
                $thumb_id = '';
                $thumb_url = '';
                if($client_logo) {
                    $thumb_id = get_post_thumbnail_id($client_logo);
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                }?>
                <!-- project__logo -->
                <h1 class="project__logo"><img src="<?php echo $thumb_url; ?>" alt="<?php the_title($client_logo); ?>"></h1>
                <!-- /project__logo -->


<!--                <span class="site__page">03</span>-->


                <!-- project__info -->
                <div class="project__info">
                   <?php  $current_icon_footage = get_field('project_footage');
                    if($current_icon_footage <= 1000){
                        $cur_footage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M36.17,29.87L24.69,24.05V18a0.3,0.3,0,0,0-.16-0.26L13.08,11.33a0.31,0.31,0,0,0-.31,0,0.3,0.3,0,0,0-.15.26V30.27a0.27,0.27,0,0,0,0,.08,0.3,0.3,0,0,0,0,.12,0.3,0.3,0,0,0,.16.27l11.46,6.44a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.15,0L36.18,30.4A0.3,0.3,0,0,0,36.17,29.87ZM24.08,18.21v5.85L13.24,30V12.11Zm0,6.54V36.38L13.56,30.47Zm0.61,11.62V24.74l10.7,5.42Z"/></svg>';
                        $range = array(0,1000);
                    }
                    elseif($current_icon_footage <= 3000){
                        $cur_footage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M35.64,21.8a0.31,0.31,0,0,0-.17-0.26l-7.74-4,7.71-4.37a0.31,0.31,0,0,0,0-.54L24,6.37a0.31,0.31,0,0,0-.29,0L12.12,12.66a0.31,0.31,0,0,0-.16.27,0.3,0.3,0,0,0,.06.18v8.82a0.27,0.27,0,0,0,0,.41v9.57a0.31,0.31,0,0,0,.15.26l11.46,6.94a0.3,0.3,0,0,0,.16,0,0.31,0.31,0,0,0,.31-0.31V28.76l11.4-6.69A0.31,0.31,0,0,0,35.64,21.8ZM23.82,7l10.85,5.95-7.59,4.3-3.25-1.67a0.31,0.31,0,0,0-.29,0l-3,1.66L12.9,12.94Zm-3.3,10.94,3,1.67v8.57l-10.61-6Zm-7.88,3.63V13.49l7.25,4.09Zm11.18-2.48-2.66-1.5,2.54-1.4,2.75,1.41ZM12.64,31.74v-9l10.84,6.16v9.44Zm11.46-3.69V19.64l3-1.7,7.6,3.89Z"/></svg>';
                        $range = array(1000,3000);
                    }
                    elseif($current_icon_footage <= 6000){
                        $cur_footage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M34.7,14.6a0.29,0.29,0,0,0,0,0,0.31,0.31,0,0,0-.16-0.27l-2.93-1.6,2.68-1.56a0.31,0.31,0,0,0,0-.54L22.63,4.65a0.31,0.31,0,0,0-.29,0L10.88,10.92a0.31,0.31,0,0,0,0,.54L13.6,13l-2.19,1.19a0.29,0.29,0,0,0-.13-0.05,0.31,0.31,0,0,0-.31.31v13.3a0.31,0.31,0,0,0,.16.27l11.44,6.25v6.33a0.31,0.31,0,0,0,.45.27l11.68-6.38a0.31,0.31,0,0,0,.16-0.27V14.85A0.29,0.29,0,0,0,34.7,14.6Zm-23-3.4L22.5,5.27l11,5.62L31,12.35,23.06,8a0.31,0.31,0,0,0-.29,0l-8.54,4.63Zm18.72,1.52-7.89,4.61L14.86,13l8.05-4.37Zm-16.15.64,8.12,4.59a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.15,0L31,13.06l2.77,1.51L22.92,20.7,12,14.57Zm-2.64,14.2V15l11,6.17V33.56Zm11.6,12.52V34.31l0,0a0.29,0.29,0,0,0,0-.31V21.25L34.26,15V34Z"/></svg>';
                        $range = array(3000,6000);
                    }
                    elseif($current_icon_footage > 6000){
                        $cur_footage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 46"><path class="cls-1" d="M37.34,10.76L25.9,4.46a0.3,0.3,0,0,0-.29,0l-17.13,9a0.31,0.31,0,0,0-.13.41h0a0.31,0.31,0,0,0-.15.26V27.51a0.31,0.31,0,0,0,.16.27L20,34.19a0.31,0.31,0,0,0,.15,0,0.3,0.3,0,0,0,.16,0,0.31,0.31,0,0,0,.15-0.26V33.84L22,32.89V41.7a0.31,0.31,0,0,0,.15.26,0.3,0.3,0,0,0,.3,0l11.62-6.41a0.31,0.31,0,0,0,.16-0.27V15.86a0.31,0.31,0,0,0-.15-0.26,0.3,0.3,0,0,0-.3,0L22.47,21.83l-2.06-1.06v-0.2a0.3,0.3,0,0,0,0-.09l17-9.17A0.31,0.31,0,0,0,37.34,10.76ZM19.79,33.4l-10.9-6,10.9-6v12Zm-11-6.65V14.68l10.95,6ZM33.64,16.38V35.11l-11,6.07V32.53l9.13-5.39a0.31,0.31,0,0,0,0-.54l-8.61-4.43ZM31,26.9l-8.34,4.92V22.6Zm-9-4.61v9.89l-1.61.95V21.46ZM20,20a0.29,0.29,0,0,0-.09.12L8.81,14,25.75,5.08,36.55,11Z"/></svg>';
                        $range = array(6000,999999);
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
                            <span class="project__info-title">אדריכל</span>
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
                            <?php echo $cur_footage; ?>
                        </div>
                    </div>

                </div>
                <!-- /project__info -->

                <h2 class="project__title">האתגר</h2>

                <p><?php the_field('the_project_objective_text'); ?></p>


                <!--project__same-->
                <div class="project__same">

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
                    <?php  $current_icon_footage = get_field('project_footage');
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
                    $title = get_the_title();
                    $cur_id = get_the_ID();
                    ?>
                    <div class="project__like-row">
                        <div class="project__like-column"><?php echo $like_title; ?></div>
                        <div class="project__like-column"><?php echo $cur_footage; ?></div>
                        <div class="project__like-column"><?php the_field('project_footage'); ?><span>m<sup>2</sup></span></div>
                        <div class="project__like-column"><a href="<?php the_permalink(); ?>" class="btn btn_2"></a></div>
                    </div>

               <?php endwhile;
                endif;
                wp_reset_postdata();
               ?>
                </div>
                    <!-- /project__like -->

                </div>
                <!--/project__same-->

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