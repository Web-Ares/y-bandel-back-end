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

                <img src="<?php echo TEMPLATEURI; ?>/dist/pic/project-management__pic.jpg" alt="founderImage">

                <!-- project-management__founder-title -->
                <strong class="project-management__founder-title"><?php the_field('main_description_on_page'); ?></strong>
                <!-- /project-management__founder-title -->

            </div>
            <!-- /project-management__founder -->

            <?php if( have_rows('choose_the_type_of_block') ):

                while ( have_rows('choose_the_type_of_block') ) : the_row();
                    $type = get_sub_field('choose_the_type_of_new_block');
                    if($type=='type_a'){
                        $cur_class='project-management__step_A';
                        ?>

                    <?php }
                    if($type=='type_b'){
                        $cur_class='project-management__step_B';
                        ?>

                    <?php }
                    if($type=='type_c'){
                        $cur_class='project-management__step_C';
                        ?>

                    <?php } ?>

                    <!-- project-management__step -->
                    <div class="project-management__step <?php echo $cur_class; ?>">
                        <?php $image = get_sub_field('choose_the_background_image');
                              $letter = get_sub_field('choose_the_sequence_of_letter'); ?>

                        <img src="<?php echo $image; ?>" alt="Image">

                        <h2 class="project-management__title" data-letter="<?php echo $letter;?>">
                            <?php the_sub_field('main_title_for_new_step'); ?>
                        </h2>


                        <?php
                        the_sub_field('list_of_items');
                        the_sub_field('second_list_of_items');
                        ?>


                    </div>
                    <!-- /project-management__step -->

                    <?php

                endwhile;
            endif; ?>



        </div>
        <!-- /project-management -->

    </div>
    <!-- /site__content -->

<?php get_footer(); ?>