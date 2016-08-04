<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<!-- site__content -->
<div class="site__content">

    <!-- main -->
    <div class="main">

        <!-- main__aside -->
        <aside class="main__aside">

            <!-- main__logo -->
            <div class="main__logo"><img src="<?php echo TEMPLATEURI; ?>/dist/img/logo2.png" width="66" alt="Y Bandel"></div>
            <!-- /main__logo -->

            <!-- main__title -->
            <h2 class="main__title"><?php the_field('main_title_text')?></h2>
            <!-- /main__title -->
            <?php

            $cur_slug = pll_current_language('slug');

            if($cur_slug=='he'){
            $clients = 'בין לקוחותינו';} else {
                $clients = 'Our customers';
            } ?>
            <!-- main__clients -->
            <div class="main__clients">
                <h3 class="main__clients-title"><?php echo $clients; ?></h3>

                <!-- swiper-container -->
                <div class="swiper-container">

                    <!-- swiper-wrapper -->
                    <div class="swiper-wrapper">

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                        <?php
                        $tmp = $post;

                        $posts = get_posts( array(
                            'post_type'  => 'quotes',
                            'posts_per_page' => -1,
                            )
                        );

                        $position = 1;
                        foreach($posts as $post){setup_postdata($post);

                        if(get_field('show_on_home_page')=='show'){
                            if($position!=1 && $position==3){ $position = 1;
                                echo '</div>
                                    <!-- /swiper-slide -->
                                    <!-- swiper-slide -->
                                    <div class="swiper-slide">';
                            }
                            ?>

                                <!-- main__clients-item -->
                                <div class="main__clients-item">
                                    <?php



                                    $client_logo = get_field('choose_the_client');
                                    $thumb_id = '';
                                    $thumb_url = '';
                                    if($client_logo) {
                                        $thumb_id = get_post_thumbnail_id($client_logo);
                                        $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                                    }



                                    $client_descr =  get_field('description_field',false, false); get_the_content();
                                    $client_descr =   get_the_content();
                                    $client_aut =  get_field('autor_field');
                                    $client_comp =  get_field('company_name');

                                    if($position==1){ ?>
                                        <span class="main__clients-pic"><img src="<?php echo $thumb_url; ?>" alt="Microsoft"></span>
                                        <span class="main__clients-description">
                                            <?php echo $client_descr; ?>
                                            <strong><?php echo $client_aut; ?></strong>
                                            <span class="main__clients-author"><?php echo $client_comp; ?></span>
                                        </span>
                                    <?php } else { ?>
                                        <span class="main__clients-description"><?php echo $client_descr; ?>
                                            <strong><?php echo $client_aut; ?></strong>
                                            <span class="main__clients-author"><?php echo $client_comp; ?></span>
                                        </span>
                                        <span class="main__clients-pic"><img src="<?php echo $thumb_url; ?>" alt="Microsoft"></span>
                                   <?php }?>
                                </div>
                                <!-- /main__clients-item -->


                        <?  $position++; }

                        }  ?>


                    </div>
                    <!-- /swiper-slide -->


                        <?php $post = $tmp; ?>


                    </div>
                    <!-- /swiper-wrapper -->

                    <div class="main__clients-pagination"></div>

            </div>
                <!-- /swiper-container -->

            </div>
            <!-- /main__clients -->

        </aside>
        <!-- /main__aside -->

        <!-- main__slider -->
        <div class="main__slider">
            <a href="<?php the_permalink(15); ?>" class="btn btn_2">פרוייקטים נבחרים</a>
            <!-- swiper-container -->
            <div class="swiper-container">

                <!-- swiper-wrapper -->
                <div class="swiper-wrapper">

                    <?php
                    $tmp = $post;

                    $posts = get_posts( array(
                            'post_type'  => 'project',
                            'posts_per_page' => -1,
                        )
                    );


                    foreach($posts as $post){
                        setup_postdata($post);

                        if(get_field('data_for_slide_on_home_page')[0]=='show'){
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                            $position_data_table = get_field('choose_the_position_of_data_table');
                            if($position_data_table=='bottom_left'){
                                $sub_class='swiper-slide_bottom-left';
                            }
                            elseif($position_data_table=='top_right'){
                                $sub_class='swiper-slide_top-right';
                            } else{
                            $sub_class='';
                            }
                            $title_slide = get_the_title();


                            ?>

                            <!-- swiper-slide -->
                            <div class="swiper-slide <?php echo $sub_class;?>">
                                <?php $image_r = get_field('image_for_preview_on_home_page');

                                $link_r = get_field('link', $image_r['ID']);

                                ?>

                                <img src="<?php echo $image_r['url']; ?>" alt="<?php echo $image_r['alt']; ?>">

                                <!-- products-preview -->
                                <div class="products-preview">
                                    <div class="products-preview__title"><?php echo $title_slide;?></div>
                                    <div class="products-preview__square"><span>m<sup>2</sup></span><?php the_field('project_footage'); ?></div>
                                    <div class="products-preview__link">
                                        <a href="<?php the_permalink(); ?>" class="btn btn_2">פרוייקטים נבחרים</a>
                                        <span><?php the_field('desciption_for_preview_on_home_page'); ?></span>
                                    </div>
                                </div>
                                <!-- /products-preview -->
                            </div>
                            <!-- /swiper-slide -->


                            <?php }

                    } ?>



                <?php $post = $tmp; ?>

                </div>
                <!-- /swiper-wrapper -->

                <span class="main__slider-next" title="next"><span></span></span>
                <span class="main__slider-prev" title="prev"><span></span></span>

            </div>
            <!-- /swiper-container -->

        </div>
        <!-- /main__slider -->

    </div>
    <!-- /main -->

</div>
<!-- /site__content -->


<?php get_footer(); ?>
