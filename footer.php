
    <?php if( is_404() ) : ?>
        <footer class="footer footer--404">
    <?php elseif ( is_page( array('14','16','18') ) ) :?>
        <footer class="footer footer--contact">
    <?php else: ?>
        <footer class="footer">
    <?php endif; ?>

        <a href="#" class="to-top">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/to-top.svg" alt="トップへ戻るボタン" decoding="async" loading="lazy">
        </a>
        <div class="inner">
        <div class="footer__upper">
            <div class="footer__upper-logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo--white.svg" alt="CodeUps" decoding="async" loading="lazy">
            </div>
            <div class="footer__upper-sns">
                <a href="" target="_blank">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-facebook.svg" alt="facebookリンク" decoding="async" loading="lazy">
                </a>
                <a href="" target="_blank">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-Instagram.svg" alt="Instagramリンク" decoding="async" loading="lazy">
                </a>
            </div>
        </div>
        <div class="footer__lower">
            <nav class="footer__lower-nav nav-menu">
                <div class="nav-menu__half">
                    <div class="nav-menu__quarter">
                        <ul class="nav-menu__items">
                            <li class="nav-menu__item">
                            <a href="page-campaign.html">キャンペーン</a>
                            </li>
                            <li class="nav-menu__item sub-menu">
                            <ul class="sub-menu__items">
                                <li class="sub-menu__item">
                                    <a href="page-campaign.html">ライセンス取得</a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="page-campaign.html">ファンダイビング</a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="page-campaign.html">体験ダイビング</a>
                                </li>
                            </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="page-aboutus.html">私たちについて</a>
                            </li>
                        </ul>
                    </div><!-- nav-menu__quarter -->
                    <div class="nav-menu__quarter">
                        <ul class="nav-menu__items">
                            <li class="nav-menu__item">
                                <a href="page-information.html">ダイビング情報</a>
                            </li>
                            <li class="nav-menu__item sub-menu">
                                <ul class="nav-menu__items">
                                <li class="sub-menu__item">
                                    <a href="page-information.html?tab=tab1">ライセンス講習</a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="page-information.html?tab=tab2">ファンダイビング</a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="page-information.html?tab=tab3">体験ダイビング</a>
                                </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="page-blog.html">ブログ</a>
                            </li>
                        </ul>
                    </div><!-- nav-menu__quarter -->
                </div><!-- nav-menu__half -->
                <div class="nav-menu__half">
                    <div class="nav-menu__quarter">
                        <ul class="nav-menu__items">
                            <li class="nav-menu__item">
                                <a href="page-voice.html">お客様の声</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="page-price.html">料金一覧</a>
                            </li>
                            <li class="nav-menu__item sub-menu">
                                <ul class="sub-menu__items">
                                <li class="sub-menu__item">
                                    <a href="page-price.html#priceLlicense">ライセンス講習</a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="page-price.html#price-Experience">体験ダイビング</a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="page-price.html#priceFan">ファンダイビング</a>
                                </li>
                                <li class="sub-menu__item">
                                    <a href="page-price.html#priceSpecial">スペシャルダイビング</a>
                                </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- nav-menu__quarter -->
                    <div class="nav-menu__quarter">
                        <ul class="nav-menu__items">
                            <li class="nav-menu__item">
                                <a href="page-faq.html">よくある質問</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="page-privacy-policy.html">プライバシー<span class="text-block">ポリシー</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="page-terms-ofservice.html">利用規約</a>
                            </li>
                            <li class="nav-menu__item nav-menu__item">
                                <a href="page-sitemap.html">サイトマップ</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="page-contact.html">お問い合わせ</a>
                            </li>
                        </ul>
                    </div><!-- nav-menu__quarter -->
                </div><!-- nav-menu__half -->
            </nav>
        </div>
        <div class="footer__copy">
            Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.
        </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>