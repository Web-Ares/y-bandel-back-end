<!-- site__footer -->
<footer class="site__footer">
    <?php
    $cur_slug = pll_current_language('slug');
    if($cur_slug=='en'){
        $footer = 'All rights reserved ©Y.Bandel Projects Management';
    } else{
        $footer = 'בנדל ניהול פרויקטים בניה   סנדאות 11 הרצליה פיתוח  036470984';
    }


    ?>
    <span><?php echo $footer; ?></span>

    <a href="http://expiria.me/">Design & development by EXPIRIA</a>

</footer>
<!-- /site__footer -->

</div>
<!-- /site -->
<?php wp_footer(); ?>
</body>
</html>