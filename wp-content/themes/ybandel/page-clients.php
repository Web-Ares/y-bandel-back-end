<?php
/**
 * Template Name: Clients Page
 */
get_header(); ?>

    <!-- site__content -->
    <div class="site__content">

        <!-- clients -->
        <div class="clients">

            <!-- site__page -->
            <span class="site__page">04</span>
            <!-- /site__page -->

            <!-- site__title -->
            <h1 class="site__title"><?php the_title();?></h1>
            <!-- /site__title -->

            <!-- clients__founder -->
            <div class="clients__founder">

                <img src="<?php echo TEMPLATEURI; ?>/dist/pic/clients__pic.jpg" alt="clients">

                <!-- clients__founder-title -->
                <strong class="clients__founder-title"><?php the_field('main_text_on_page'); ?></strong>
                <!-- /clients__founder-title -->

                <p><?php the_field('description_text'); ?></p>

            </div>
            <!-- /clients__founder -->

            <!-- clients__list -->
            <div class="clients__list">

                <?php
                $tmp = $post;

                $posts = get_posts( array(
                        'post_type'  => 'project',
                        'posts_per_page' => -1,
                    )
                );

                $count = 0;
                foreach($posts as $post){setup_postdata($post);
                    $client_logo = get_field('clients_logo');

                ?>

                    <!-- clients__item -->
                    <div class="clients__item"><img src="<?php echo $client_logo; ?>" alt="<?php echo $post->name; ?>"></div>
                    <!-- /clients__item -->

                <?php $count++; } ?>

            </div>
            <!-- /clients__list -->

        </div>
        <!-- /clients -->

    </div>
    <!-- /site__content -->


<?php get_footer(); ?>