<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta charset="UTF-8">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo TEMPLATEURI; ?>/dist/img/favicon.ico' />
    <title><?php document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body data-action="<?php echo admin_url( 'admin-ajax.php' );?>">

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-81192981-1', 'auto');
    ga('send', 'pageview');

</script>


<?php if (is_page() || is_single() || is_singular() || is_404()) {
    the_post();
}


$cur_slug = pll_current_language('slug');
if($cur_slug=='en'){
    $cur_lang = ' lang_en';
}
?>
<!-- site -->
<div class="site<?php echo $cur_lang; ?>">

    <!-- menu-btn -->
    <span class="menu-btn"></span>
    <!-- /menu-btn -->

    <!-- site__header -->
    <header class="site__header">
        <?php if(is_front_page()){ ?>
            <!-- logo -->
            <h1 class="logo">
                <img src="<?php echo TEMPLATEURI; ?>/dist/img/logo.png" alt="Y Bandel">
            </h1>
            <!-- /logo -->
        <?php } else {?>
        <!-- logo -->
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo TEMPLATEURI; ?>/dist/img/logo.png" alt="Y Bandel">
        </a>
        <!-- /logo -->
        <?php } ?>
        <!-- menu -->
        <nav class="menu">

            <!-- menu__close -->
            <span class="menu__close"></span>
            <!-- /menu__close -->

                <?php
                $locations = get_nav_menu_locations();
                $menu_items = wp_get_nav_menu_items($locations['menu']);

                foreach ((array)$menu_items as $key => $menu_item) {

                    if($menu_item->post_title=='Language switcher'){
                        $lang_l='';
                        $lang_url = $menu_item->url;
                        $lang_l = $menu_item->lang;
                        continue;
                    }

                    if($post->ID==$menu_item->object_id){
                        $active = 'active';
                    } else {
                        $active = '';
                        if($menu_item->object_id==15){
                              if( get_post_type($post->ID)=='project' ){
                                  $active = 'active';
                              }
                        }
                    }
                    ?>

                    <a href="<?php echo $menu_item->url; ?>" class="menu__item <?php echo $active; ?>"><?php echo $menu_item->title; ?></a>

                <?php }; ?>

            <!--lang-switcher-->
            <div class="lang-switcher">
                <?php if($lang_l=='he-IL'){ ?>
                    <span class="active">EN</span>
                    <a href="<?php echo $lang_url;?>">HE</a>
                <?php } else { ?>
                    <span class="active">HE</span>
                    <a href="<?php echo $lang_url;?>">EN</a>
                <?php } ?>

            </div>
            <!--/lang-switcher-->

        </nav>
        <!-- /menu -->


    </header>
    <!-- /site__header -->


