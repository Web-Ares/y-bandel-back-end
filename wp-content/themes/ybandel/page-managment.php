<?php
/**
 * Template Name: Management Page
 */
get_header(); ?>

    <!-- site__content -->
    <div class="site__content">

        <!-- project-management -->
        <div class="project-management">

            <!-- site__page -->
            <span class="site__page">02</span>
            <!-- /site__page -->

            <!-- site__title -->
            <h1 class="site__title"><?php the_title(); ?></h1>
            <!-- /site__title -->

            <!-- project-management__founder -->
            <div class="project-management__founder">

                <img src="<?php echo TEMPLATEURI;?>/dist/pic/project-management__pic.jpg" alt="founderImage">

                <!-- project-management__founder-title -->
                <strong class="project-management__founder-title"><?php the_field('main_description_on_page'); ?></strong>
                <!-- /project-management__founder-title -->

            </div>
            <!-- /project-management__founder -->

            <!-- project-management__step -->
            <div class="project-management__step project-management__step_A">

                <img src="<?php echo TEMPLATEURI;?>/dist/pic/project-management_pic-A.png" alt="">

                <h2 class="project-management__title" data-letter="A">

                    <?php the_field('main_title_for__step_a',false,false); ?>
                </h2>

                <?php the_field('list_of_items'); ?>

                <?php the_field('second_list_of_items_a'); ?>

            </div>
            <!-- /project-management__step -->

            <!-- project-management__step -->
            <div class="project-management__step project-management__step_B">

                <img src="<?php echo TEMPLATEURI;?>/dist/pic/project-management_pic-B.png" alt="">

                <h2 class="project-management__title" data-letter="B">
                    <?php the_field('main_title_for__step_b',false,false); ?>
                </h2>

                <?php the_field('second_list_of_items_a_copy'); ?>

            </div>
            <!-- /project-management__step -->

            <!-- project-management__step -->
            <div class="project-management__step project-management__step_C">

                <img src="<?php echo TEMPLATEURI;?>/dist/pic/project-management_pic-C.png" alt="">


                <h2 class="project-management__title" data-letter="C">
                    <?php the_field('main_title_for__step_c',false,false); ?>
                </h2>

                <?php the_field('first_list_of_items_c'); ?>

                <?php the_field('second_list_of_items_c'); ?>

            </div>
            <!-- /project-management__step -->



        </div>
        <!-- /project-management -->

    </div>
    <!-- /site__content -->

<?php get_footer(); ?>