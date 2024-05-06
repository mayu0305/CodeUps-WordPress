<?php
        $footer_class = 'footer';
        if (is_404()) {
            $footer_class .= ' footer--404';
        } elseif (is_page(array('contact', 'thanks'))) {
            $footer_class .= ' footer--contact';
        }
    ?>
    <footer class="<?php echo $footer_class; ?>">

        <a href="#top" class="to-top">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/to-top.svg" alt="トップへ戻るボタン" decoding="async" loading="lazy">
        </a>
        <div class="inner">
        <div class="footer__upper">
            <div class="footer__upper-logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo--white.svg" alt="CodeUps" decoding="async" loading="lazy">
            </div>
            <div class="footer__upper-sns">
                <a href="https://www.facebook.com/liencreate0502" target="_blank">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-facebook.svg" alt="facebookリンク" decoding="async" loading="lazy">
                </a>
                <a href="https://www.instagram.com/lien.create/" target="_blank">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-Instagram.svg" alt="Instagramリンク" decoding="async" loading="lazy">
                </a>
            </div>
        </div>
        <div class="footer__lower">
            <?php get_template_part( 'template-parts/nav-menu' ); ?>
        </div>
        <div class="footer__copy">
            Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.
        </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>