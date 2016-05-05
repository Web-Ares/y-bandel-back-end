<?php get_header(); ?>

    <!-- site__content -->
    <div class="site__content">

        <!-- project -->
        <div class="project">

            <!-- project__slider -->
            <div class="project__slider">

                <h2 class="project__title">Ч¤ЧЁЧ•Ч™Ч™Ч§Ч�Ч™Чќ Ч Ч‘Ч—ЧЁЧ™Чќ</h2>

                <!-- swiper-container -->
                <div class="swiper-container">

                    <!-- swiper-wrapper -->
                    <div class="swiper-wrapper">

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic1.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic2.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic3.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic4.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic5.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic6.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic7.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic8.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

                        <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="project__slider-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic9.jpg')"></div>
                        </div>
                        <!-- /swiper-slide -->

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
                    }?>
                    
                    <div class="project__info-column">
                        <div class="project__info-row">
                            <span class="project__info-title">Ч©Чќ Ч”Ч¤ЧЁЧ•Ч™Ч™Ч§Ч�</span>
                            <strong><?php the_title(); ?></strong>
                        </div>
                        <div class="project__info-row">
                            <span class="project__info-title">ЧЄЧ™ЧђЧ•ЧЁ Ч”Ч¤ЧЁЧ•Ч™Ч™Ч§Ч�</span>
                            <?php the_field('project_description'); ?>
                        </div>
                        <div class="project__info-row project__info-row_half">
                            <span class="project__info-title">ЧђЧ“ЧЁЧ™Ч›Чњv</span>
                            <?php the_field('project_architect'); ?>
                        </div>
                        <div class="project__info-row project__info-row_half">
                            <span class="project__info-title">ЧЄЧ—Ч•Чќ ЧўЧ™ЧЎЧ•Ч§</span><?php the_field('project__occupation'); ?>
                        </div>
                        <div class="project__info-row">
                            <span class="project__info-title">ЧћЧ™Ч§Ч•Чќ</span><?php the_field('project_location'); ?>
                        </div>
                    </div>

                    <div class="project__info-column">
                        <div class="project__info-row project__info-row_square">

                            Ч©Ч�Ч—
                            <p><?php the_field('project_footage'); ?><span>m<sup>2</sup></span></p>

                        </div>
                        <div class="project__info-row project__info-row_pic">
                            <img src="<?php echo TEMPLATEURI;?>/dist/pic/product-info_pic1.png" alt="">
                        </div>
                    </div>

                </div>
                <!-- /project__info -->

                <h2 class="project__title">Ч”ЧђЧЄЧ’ЧЁ</h2>

                <p><?php the_field('the_project_objective_text'); ?></p>

                <h2 class="project__title">Ч¤ЧЁЧ•Ч™Ч™Ч§Ч�Ч™Чќ Ч“Ч•ЧћЧ™Чќ    </h2>

                <!-- project__like -->
                <div class="project__like">
                    <div class="project__like-row">
                        <div class="project__like-column">ЧђЧ“ЧњЧЁ Ч—Ч•ЧћЧЎЧ§Ч™</div>
                        <div class="project__like-column"><img src="<?php echo TEMPLATEURI;?>/dist/pic/project_scheme1.png" alt=""></div>
                        <div class="project__like-column">6,000<span>m<sup>2</sup></span></div>
                        <div class="project__like-column"><a href="#" class="btn btn_2"></a></div>
                    </div>
                    <div class="project__like-row">
                        <div class="project__like-column">Ч’ЧЁЧ�Ч ЧЁ</div>
                        <div class="project__like-column"><img src="<?php echo TEMPLATEURI;?>/dist/pic/project_scheme2.png" alt=""></div>
                        <div class="project__like-column">4,00<span>m<sup>2</sup></span></div>
                        <div class="project__like-column"><a href="#" class="btn btn_2"></a></div>
                    </div>
                    <div class="project__like-row">
                        <div class="project__like-column">Ч§Ч Ч“Ч” Ч™Ч©ЧЁЧђЧњ</div>
                        <div class="project__like-column"><img src="<?php echo TEMPLATEURI;?>/dist/pic/project_scheme3.png" alt=""></div>
                        <div class="project__like-column">1,500<span>m<sup>2</sup></span></div>
                        <div class="project__like-column"><a href="#" class="btn btn_2"></a></div>
                    </div>
                </div>
                <!-- /project__like -->

            </aside>
            <!-- /project__wrap -->

            <!-- project__pic -->
            <div class="project__pic">

                <!-- project__pic-wrap -->
                <div class="project__pic-wrap">
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic1.jpg')">
                        <span>ЧћЧЎЧ“ЧЁЧ•Чџ Ч¤Ч Ч™ЧћЧ™: Ч“Ч’Ч© ЧўЧњ Ч¦Ч‘Чў Ч•ЧђЧ•ЧЁ</span>
                    </a>
                    <!-- /project__pic-item -->
                </div>
                <!-- /project__pic-wrap -->

                <!-- project__pic-wrap -->
                <div class="project__pic-wrap project__pic-wrap_type2">
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic3.jpg')">
                        <span>ЧћЧЎЧ“ЧЁЧ•Чџ Ч¤Ч Ч™ЧћЧ™: Ч“Ч’Ч© ЧўЧњ Ч¦Ч‘Чў Ч•ЧђЧ•ЧЁ</span>
                    </a>
                    <!-- /project__pic-item -->
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic2.jpg')">
                        <span>text</span>
                    </a>
                    <!-- /project__pic-item -->
                </div>
                <!-- /project__pic-wrap -->

                <!-- project__pic-wrap -->
                <div class="project__pic-wrap project__pic-wrap_type3">
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic5.jpg')">
                        <span>ЧћЧЎЧ“ЧЁЧ•Чџ Ч¤Ч Ч™ЧћЧ™: Ч“Ч’Ч© ЧўЧњ Ч¦Ч‘Чў Ч•ЧђЧ•ЧЁ</span>
                    </a>
                    <!-- /project__pic-item -->
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic4.jpg')">
                        <span>ЧћЧЎЧ“ЧЁЧ•Чџ Ч¤Ч Ч™ЧћЧ™: Ч“Ч’Ч© ЧўЧњ Ч¦Ч‘Чў Ч•ЧђЧ•ЧЁ</span>
                    </a>
                    <!-- /project__pic-item -->
                </div>
                <!-- /project__pic-wrap -->

                <!-- project__pic-wrap -->
                <div class="project__pic-wrap">
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic6.jpg')"></a>
                    <!-- /project__pic-item -->
                </div>
                <!-- /project__pic-wrap -->

                <!-- project__pic-wrap -->
                <div class="project__pic-wrap project__pic-wrap_type2">
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic8.jpg')">
                        <span>text</span>
                    </a>
                    <!-- /project__pic-item -->
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic7.jpg')">
                        <span>ЧћЧЎЧ“ЧЁЧ•Чџ Ч¤Ч Ч™ЧћЧ™: Ч“Ч’Ч© ЧўЧњ Ч¦Ч‘Чў Ч•ЧђЧ•ЧЁ</span>
                    </a>
                    <!-- /project__pic-item -->
                </div>
                <!-- /project__pic-wrap -->

                <!-- project__pic-wrap -->
                <div class="project__pic-wrap">
                    <!-- project__pic-item -->
                    <a href="#" class="project__pic-item" style="background-image: url('<?php echo TEMPLATEURI;?>/dist/pic/project-pic9.jpg')">
                        <span>ЧћЧЎЧ“ЧЁЧ•Чџ Ч¤Ч Ч™ЧћЧ™: Ч“Ч’Ч© ЧўЧњ Ч¦Ч‘Чў Ч•ЧђЧ•ЧЁ</span>
                    </a>
                    <!-- /project__pic-item -->
                </div>
                <!-- /project__pic-wrap -->

            </div>
            <!-- /project__pic -->

        </div>
        <!-- /project -->

    </div>
    <!-- /site__content -->


<?php get_footer(); ?>