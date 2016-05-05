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
            <div class="main__logo"><img src="<?php echo TEMPLATEURI; ?>/dist/img/logo2.png" width="54" alt="Y Bandel"></div>
            <!-- /main__logo -->

            <!-- main__title -->
            <h2 class="main__title"><?php the_field('main_title_text')?></h2>
            <!-- /main__title -->

            <!-- main__clients -->
            <div class="main__clients">
                <h3 class="main__clients-title">Ч‘Ч™Чџ ЧњЧ§Ч•Ч—Ч•ЧЄЧ™Ч Ч•</h3>

                <!-- swiper-container -->
                <div class="swiper-container">

                    <!-- swiper-wrapper -->
                    <div class="swiper-wrapper">

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                        <?php
                        $tmp = $post;

                        $posts = get_posts( array(
                            'post_type'  => 'clients',
                            'posts_per_page' => -1,
                            )
                        );

                        $position = 1;
                        foreach($posts as $post){setup_postdata($post);

                            if(get_field('show_on_home_page')[0]=='show'){

                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url = wp_get_attachment_image_src($thumb_id,'full')[0];
                            if($position!=1 && $position==3){ $position = 1;
                                echo '</div>
                                    <!-- /swiper-slide -->
                                    <!-- swiper-slide -->
                                    <div class="swiper-slide">';
                            }
                            ?>

                                <!-- main__clients-item -->
                                <div class="main__clients-item">
                                    <?php if($position==1){ ?>
                                        <span class="main__clients-pic"><img src="<?php echo $thumb_url; ?>" alt="Microsoft"></span>
                                        <span class="main__clients-description"><?php the_field('description_field'); ?></span>
                                    <?php } else { ?>
                                        <span class="main__clients-description"><?php the_field('description_field'); ?></span>
                                        <span class="main__clients-pic"><img src="<?php echo $thumb_url; ?>" alt="Microsoft"></span>
                                   <?php }?>
                                </div>
                                <!-- /main__clients-item -->


                        <?  $position++; }

                        } ?>


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

            <!-- swiper-container -->
            <div class="swiper-container">

                <!-- swiper-wrapper -->
                <div class="swiper-wrapper">

                    <!-- swiper-slide -->
                    <div class="swiper-slide">
                        <img src="<?php echo TEMPLATEURI; ?>/dist/pic/main-slider1.png" alt="">

                        <!-- products-preview -->
                        <div class="products-preview">
                            <div class="products-preview__title">Ч§Ч‘Ч•Ч¦Ч•ЧЄ ЧћЧ™Ч§ЧЁЧ•ЧЎЧ•Ч¤Ч�</div>
                            <div class="products-preview__square"><span>m<sup>2</sup></span> 5000</div>
                            <div class="products-preview__link">
                                <a href="#" class="btn btn_2">Ч¤ЧЁЧ•Ч™Ч™Ч§Ч�Ч™Чќ Ч Ч‘Ч—ЧЁЧ™Чќ</a>
                                <span>Ч Ч™Ч”Ч•Чњ Ч¤ЧЁЧ•Ч™Ч§Ч� Ч‘Ч™Ч Ч•Ч™ ЧўЧ‘Ч•ЧЁ Ч§Ч‘Ч•Ч¦ЧЄ ЧћЧ™Ч§ЧЁЧ•ЧЎЧ•Ч¤Ч� Ч”Ч›Ч•ЧњЧњ ЧЄЧ§ЧЁЧ•ЧЄ Ч—Ч©Ч•Ч¤Ч•ЧЄ, Ч’ЧЁЧ¤Ч™Ч§Ч” Ч™Ч™Ч—Ч•Ч“Ч™ЧЄ, ЧђЧњЧћЧ Ч�Ч™Чќ ЧђЧ§Ч•ЧЎЧ�Ч™Ч™Чќ ЧћЧ•ЧЁЧ›Ч‘Ч™Чќ Ч•ЧћЧўЧЁЧ›Ч•ЧЄ Ч�Ч›Ч Ч•ЧњЧ•Ч’Ч™Ч•ЧЄ Ч—Ч“Ч©Ч Ч™Ч•ЧЄ.</span>
                            </div>
                        </div>
                        <!-- /products-preview -->
                    </div>
                    <!-- /swiper-slide -->

                    <!-- swiper-slide -->
                    <div class="swiper-slide swiper-slide_bottom-left">
                        <img src="<?php echo TEMPLATEURI; ?>/dist/pic/main-slider2.png" alt="">

                        <!-- products-preview -->
                        <div class="products-preview">
                            <div class="products-preview__title">Ч§Ч‘Ч•Ч¦Ч•ЧЄ ЧћЧ™Ч§ЧЁЧ•ЧЎЧ•Ч¤Ч�</div>
                            <div class="products-preview__square"><span>m<sup>2</sup></span> 4000</div>
                            <div class="products-preview__link">
                                <a href="#" class="btn btn_2">Ч¤ЧЁЧ•Ч™Ч™Ч§Ч�Ч™Чќ Ч Ч‘Ч—ЧЁЧ™Чќ</a>
                                <span>Ч Ч™Ч”Ч•Чњ Ч¤ЧЁЧ•Ч™Ч§Ч� Ч‘Ч™Ч Ч•Ч™ ЧўЧ‘Ч•ЧЁ Ч§Ч‘Ч•Ч¦ЧЄ ЧћЧ™Ч§ЧЁЧ•ЧЎЧ•Ч¤Ч� Ч”Ч›Ч•ЧњЧњ ЧЄЧ§ЧЁЧ•ЧЄ Ч—Ч©Ч•Ч¤Ч•ЧЄ, Ч’ЧЁЧ¤Ч™Ч§Ч” Ч™Ч™Ч—Ч•Ч“Ч™ЧЄ, ЧђЧњЧћЧ Ч�Ч™Чќ ЧђЧ§Ч•ЧЎЧ�Ч™Ч™Чќ ЧћЧ•ЧЁЧ›Ч‘Ч™Чќ Ч•ЧћЧўЧЁЧ›Ч•ЧЄ Ч�Ч›Ч Ч•ЧњЧ•Ч’Ч™Ч•ЧЄ Ч—Ч“Ч©Ч Ч™Ч•ЧЄ.</span>
                            </div>
                        </div>
                        <!-- /products-preview -->
                    </div>
                    <!-- /swiper-slide -->

                    <!-- swiper-slide -->
                    <div class="swiper-slide swiper-slide_top-right">
                        <img src="<?php echo TEMPLATEURI; ?>/dist/pic/main-slider3.png" alt="">

                        <!-- products-preview -->
                        <div class="products-preview">
                            <div class="products-preview__title">Ч§Ч‘Ч•Ч¦Ч•ЧЄ ЧћЧ™Ч§ЧЁЧ•ЧЎЧ•Ч¤Ч�</div>
                            <div class="products-preview__square"><span>m<sup>2</sup></span> 3000</div>
                            <div class="products-preview__link">
                                <a href="#" class="btn btn_2">Ч¤ЧЁЧ•Ч™Ч™Ч§Ч�Ч™Чќ Ч Ч‘Ч—ЧЁЧ™Чќ</a>
                                <span>Ч Ч™Ч”Ч•Чњ Ч¤ЧЁЧ•Ч™Ч§Ч� Ч‘Ч™Ч Ч•Ч™ ЧўЧ‘Ч•ЧЁ Ч§Ч‘Ч•Ч¦ЧЄ ЧћЧ™Ч§ЧЁЧ•ЧЎЧ•Ч¤Ч� Ч”Ч›Ч•ЧњЧњ ЧЄЧ§ЧЁЧ•ЧЄ Ч—Ч©Ч•Ч¤Ч•ЧЄ, Ч’ЧЁЧ¤Ч™Ч§Ч” Ч™Ч™Ч—Ч•Ч“Ч™ЧЄ, ЧђЧњЧћЧ Ч�Ч™Чќ ЧђЧ§Ч•ЧЎЧ�Ч™Ч™Чќ ЧћЧ•ЧЁЧ›Ч‘Ч™Чќ Ч•ЧћЧўЧЁЧ›Ч•ЧЄ Ч�Ч›Ч Ч•ЧњЧ•Ч’Ч™Ч•ЧЄ Ч—Ч“Ч©Ч Ч™Ч•ЧЄ.</span>
                            </div>
                        </div>
                        <!-- /products-preview -->
                    </div>
                    <!-- /swiper-slide -->

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
