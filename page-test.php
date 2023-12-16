<?php get_header(); ?>
    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="assets/images/page-header/page-header_campaign_pc.webp">
                    <img src="assets/images/page-header/page-header_campaign_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">Campaign</h1>
        </div>

        <div class="breadcrumb">
            <div class="inner breadcrumb__inner">
                <ul class="breadcrumb__items">
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="./" title="Top" itemprop="item"><span itemprop="name">Top</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="name">キャンペーン</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </div>
        </div>

    <div class="campaign-content page-content">
        <div class="inner">
            <div class="course-tab campaign-content__tab">
                <div class="course-tab__items" role="tablist" aria-labelledby="tablist-label">
                    <button class="course-tab__item -active js-tab" type="button" role="tab" id="tab1" aria-controls="tab-panel1"
                        aria-selected="true">ALL</button>
                    <button class="course-tab__item js-tab" type="button" role="tab" id="tab2" aria-controls="tab-panel2" aria-selected="false"
                        tabindex="-1">ライセンス講習</button>
                    <button class="course-tab__item js-tab" type="button" role="tab" id="tab3" aria-controls="tab-panel3" aria-selected="false"
                        tabindex="-1">ファンダイビング</button>
                    <button class="course-tab__item js-tab" type="button" role="tab" id="tab4" aria-controls="tab-panel4" aria-selected="false"
                    tabindex="-1">体験ダイビング</button>
                </div>
                <div id="tab-panel1" class="course-tab__panel course-tab__panel--campaign js-tab-panel -active" role="tabpanel" tabindex="0" aria-labelledby="tab1">
                    <div class="campaign-cards">
                        <div class="campaign-card campaign-cards__item">
                            <div class="campaign-card__content campaign-card__content--page">
                                <div class="campaign-card__content-header">
                                    <span span class="card-tag">
                                        ライセンス講習
                                    </span>
                                    <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                        ライセンス取得
                                    </h2>
                                </div>
                                <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                    全部コミコミ(お一人様)
                                </span>
                                <div class="campaign-card__content-price">
                                    <span class="campaign-card__content-price-regular">¥56,000</span>
                                    <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥46,000</span>
                                </div>
                                <p class="campaign-card__description u-desktop ">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                                <div class="campaign-card__info u-desktop ">
                                    <span class="campaign-card__info-period">
                                        2023/6/1-9/30
                                    </span>
                                    <span class="campaign-card__info-guid">
                                        ご予約・お問い合わせはコチラ
                                    </span>
                                    <div class="campaign-card__info-link">
                                        <a class="link-button" href="page-contact.html">
                                            <span class="link-button__text">Contact us</span>
                                            <span class="link-button__arrow">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- campaign-card__content-->
                            <figure class="campaign-card__img">
                                <img src="assets/images/campaign/campaign01.webp" alt="海中を泳ぐ沢山の熱帯魚の写真" decoding="async" loading="lazy">
                            </figure>
                        </div><!-- campaign-card-->
                        <div class="campaign-cards__item campaign-card">
                            <div class="campaign-card__content campaign-card__content--page">
                                <div class="campaign-card__content-header">
                                    <span span class="card-tag">
                                        体験ダイビング
                                    </span>
                                    <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                        貸切体験ダイビング
                                    </h2>
                                </div>
                                <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                    全部コミコミ(お一人様)
                                </span>
                                <div class="campaign-card__content-price">
                                    <span class="campaign-card__content-price-regular">¥24,000</span>
                                    <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥18,000</span>
                                </div>
                                <p class="campaign-card__description u-desktop ">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                                <div class="campaign-card__info u-desktop ">
                                    <span class="campaign-card__info-period">
                                        2023/6/1-9/30
                                    </span>
                                    <span class="campaign-card__info-guid">
                                        ご予約・お問い合わせはコチラ
                                    </span>
                                    <div class="campaign-card__info-link">
                                        <a class="link-button" href="page-contact.html">
                                            <span class="link-button__text">Contact us</span>
                                            <span class="link-button__arrow">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- campaign-card__content-->
                            <figure class="campaign-card__img">
                                <img src="assets/images/campaign/campaign02.webp" alt="海岸近くの海に浮かぶ小型ボートの写真" decoding="async" loading="lazy">
                            </figure>
                        </div><!-- campaign-card-->
                        <div class="campaign-card campaign-cards__item">
                            <div class="campaign-card__content campaign-card__content--page">
                                <div class="campaign-card__content-header">
                                    <span span class="card-tag">
                                        体験ダイビング
                                    </span>
                                    <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                        ナイトダイビング
                                    </h2>
                                </div>
                                <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                    全部コミコミ(お一人様)
                                </span>
                                <div class="campaign-card__content-price">
                                    <span class="campaign-card__content-price-regular">¥10,000</span>
                                    <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥8,000</span>
                                </div>
                                <p class="campaign-card__description u-desktop ">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                                <div class="campaign-card__info u-desktop ">
                                    <span class="campaign-card__info-period">
                                        2023/6/1-9/30
                                    </span>
                                    <span class="campaign-card__info-guid">
                                        ご予約・お問い合わせはコチラ
                                    </span>
                                    <div class="campaign-card__info-link">
                                        <a class="link-button" href="page-contact.html">
                                            <span class="link-button__text">Contact us</span>
                                            <span class="link-button__arrow">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- campaign-card__content-->
                            <figure class="campaign-card__img">
                                <img src="assets/images/campaign/campaign03.webp" alt="夜の海を漂うクラゲの写真" decoding="async" loading="lazy">
                            </figure>
                        </div><!-- campaign-card-->
                        <div class="campaign-card campaign-cards__item">
                            <div class="campaign-card__content campaign-card__content--page">
                                <div class="campaign-card__content-header">
                                    <span span class="card-tag">
                                        ファンダイビング
                                    </span>
                                    <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                        貸切ファンダイビング
                                    </h2>
                                </div>
                                <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                    全部コミコミ(お一人様)
                                </span>
                                <div class="campaign-card__content-price">
                                    <span class="campaign-card__content-price-regular">¥20,000</span>
                                    <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥16,000</span>
                                </div>
                                <p class="campaign-card__description u-desktop ">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                                <div class="campaign-card__info u-desktop ">
                                    <span class="campaign-card__info-period">
                                        2023/6/1-9/30
                                    </span>
                                    <span class="campaign-card__info-guid">
                                        ご予約・お問い合わせはコチラ
                                    </span>
                                    <div class="campaign-card__info-link">
                                        <a class="link-button" href="page-contact.html">
                                            <span class="link-button__text">Contact us</span>
                                            <span class="link-button__arrow">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- campaign-card__content-->
                            <figure class="campaign-card__img">
                                <img src="assets/images/campaign/campaign04.webp" alt="ダイビング講習中の写真" decoding="async" loading="lazy">
                            </figure>
                        </div><!-- campaign-card-->
                    </div><!-- campaign-cards -->
                </div>
                <div id="tab-panel2" class="course-tab__panel js-tab-panel" role="tabpanel" tabindex="0" aria-labelledby="tab2">
                    <div class="campaign-cards">
                        <div class="campaign-card campaign-cards__item">
                            <div class="campaign-card__content campaign-card__content--page">
                                <div class="campaign-card__content-header">
                                    <span span class="card-tag">
                                        ライセンス講習
                                    </span>
                                    <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                        ライセンス取得
                                    </h2>
                                </div>
                                <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                    全部コミコミ(お一人様)
                                </span>
                                <div class="campaign-card__content-price">
                                    <span class="campaign-card__content-price-regular">¥56,000</span>
                                    <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥46,000</span>
                                </div>
                                <p class="campaign-card__description u-desktop ">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                                <div class="campaign-card__info u-desktop ">
                                    <span class="campaign-card__info-period">
                                        2023/6/1-9/30
                                    </span>
                                    <span class="campaign-card__info-guid">
                                        ご予約・お問い合わせはコチラ
                                    </span>
                                    <div class="campaign-card__info-link">
                                        <a class="link-button" href="page-contact.html">
                                            <span class="link-button__text">Contact us</span>
                                            <span class="link-button__arrow">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- campaign-card__content-->
                            <figure class="campaign-card__img">
                                <img src="assets/images/campaign/campaign01.webp" alt="海中を泳ぐ沢山の熱帯魚の写真" decoding="async" loading="lazy">
                            </figure>
                        </div><!-- campaign-card-->
                    </div>
                </div>
                <div id="tab-panel3" class="course-tab__panel js-tab-panel" role="tabpanel" tabindex="0" aria-labelledby="tab3">
                    <div class="campaign-cards">
                        <div class="campaign-card campaign-cards__item">
                            <div class="campaign-card__content campaign-card__content--page">
                                <div class="campaign-card__content-header">
                                    <span span class="card-tag">
                                        ファンダイビング
                                    </span>
                                    <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                        貸切ファンダイビング
                                    </h2>
                                </div>
                                <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                    全部コミコミ(お一人様)
                                </span>
                                <div class="campaign-card__content-price">
                                    <span class="campaign-card__content-price-regular">¥20,000</span>
                                    <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥16,000</span>
                                </div>
                                <p class="campaign-card__description u-desktop ">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                                <div class="campaign-card__info u-desktop ">
                                    <span class="campaign-card__info-period">
                                        2023/6/1-9/30
                                    </span>
                                    <span class="campaign-card__info-guid">
                                        ご予約・お問い合わせはコチラ
                                    </span>
                                    <div class="campaign-card__info-link">
                                        <a class="link-button" href="page-contact.html">
                                            <span class="link-button__text">Contact us</span>
                                            <span class="link-button__arrow">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- campaign-card__content-->
                            <figure class="campaign-card__img">
                                <img src="assets/images/campaign/campaign04.webp" alt="ダイビング講習中の写真" decoding="async" loading="lazy">
                            </figure>
                        </div><!-- campaign-card-->
                    </div>
                </div>
                <div id="tab-panel4" class="course-tab__panel js-tab-panel" role="tabpanel" tabindex="0" aria-labelledby="tab4">
                    <div class="campaign-cards">
                        <div class="campaign-card campaign-cards__item">
                            <div class="campaign-card__content campaign-card__content--page">
                                <div class="campaign-card__content-header">
                                    <span span class="card-tag">
                                        体験ダイビング
                                    </span>
                                    <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                        ナイトダイビング
                                    </h2>
                                </div>
                                <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                    全部コミコミ(お一人様)
                                </span>
                                <div class="campaign-card__content-price">
                                    <span class="campaign-card__content-price-regular">¥10,000</span>
                                    <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥8,000</span>
                                </div>
                                <p class="campaign-card__description u-desktop ">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                </p>
                                <div class="campaign-card__info u-desktop ">
                                    <span class="campaign-card__info-period">
                                        2023/6/1-9/30
                                    </span>
                                    <span class="campaign-card__info-guid">
                                        ご予約・お問い合わせはコチラ
                                    </span>
                                    <div class="campaign-card__info-link">
                                        <a class="link-button" href="page-contact.html">
                                            <span class="link-button__text">Contact us</span>
                                            <span class="link-button__arrow">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- campaign-card__content-->
                            <figure class="campaign-card__img">
                                <img src="assets/images/campaign/campaign03.webp" alt="夜の海を漂うクラゲの写真" decoding="async" loading="lazy">
                            </figure>
                        </div><!-- campaign-card-->
                    </div>
                </div>
            </div><!-- course-tab -->

            <div class="campaign-content__page-nav">
                <nav class="navigation pagination" aria-label="投稿">
                    <h2 class="screen-reader-text visually-hidden">投稿ナビゲーション</h2>
                    <div class="pagination__links">
                        <a class="prev page-numbers" href=""></a>
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="">2</a>
                        <a class="page-numbers" href="">3</a>
                        <a class="page-numbers" href="">4</a>
                        <a class="page-numbers page-numbers--pc-only" href="">5</a>
                        <a class="page-numbers page-numbers--pc-only" href="">6</a>
                        <a class="next page-numbers" href=""></a>
                    </div>
                </nav>
            </div>

        </div><!-- inner -->
    </div>

    <section class="section-contact page-section">
        <div class="inner">
            <div class="section-contact__content">
                <div class="section-contact__content-info contact-info">
                <div class="contact-info__logo">
                    <img src="assets/images/common/logo--green.svg" alt="CodeUps" decoding="async" loading="lazy">
                </div>
                <div class="contact-info__box">
                    <address class="contact-info__box-address">
                    <span>沖縄県那覇市1-1</span>
                    <span>TEL:0120-000-0000</span>
                    <span>営業時間:8:30-19:00</span>
                    <span>定休日:毎週火曜日</span>
                    </address>
                    <div class="contact-info__box-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927266654056!2d127.68999638481154!3d26.222926667928892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1697471956486!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div><!-- contact-info__box-->
                </div><!-- section-contact__content-info contact-info -->
                <div class="section-contact__content-link contact-link">
                <div class="section-title section-title--contact">
                    <span class="section-title__sub" aria-hidden="true">Contact</span>
                    <h2 class="section-title__main section-title__main--contact">お問い合わせ</h2>
                </div>
                <p class="contact-link__text">
                    ご予約・お問い合わせはコチラ
                </p>
                <div class="contact-link__link">
                    <a class="link-button" href="">
                        <span class="link-button__text">Contact us</span>
                        <span class="link-button__arrow">
                        </span>
                    </a>
                </div>
                </div><!-- section-contact__content-link contact-link -->
            </div><!-- section-contact_content -->
        </div>
    </section><!-- section-contact -->

    </main>

    <footer class="footer">
        <a href="#" class="to-top">
            <img src="assets/images/common/to-top.svg" alt="トップへ戻るボタン" decoding="async" loading="lazy">
        </a>
        <div class="inner">
            <div class="footer__upper">
            <div class="footer__upper-logo">
            <img src="assets/images/common/logo--white.svg" alt="CodeUps" decoding="async" loading="lazy">
            </div>
            <div class="footer__upper-sns">
                <a href="" target="_blank">
                <img src="assets/images/common/icon-facebook.svg" alt="facebookリンク" decoding="async" loading="lazy">
                </a>
                <a href="" target="_blank">
                <img src="assets/images/common/icon-Instagram.svg" alt="Instagramリンク" decoding="async" loading="lazy">
                </a>
            </div>
            </div>
        <div class="footer__lower">
            <nav class="footer__lower-nav nav-menu">
                <div class="nav-menu__half">
                <div class="nav-menu__quarter">
                <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                    <a href="">キャンペーン</a>
                    </li>
                    <li class="nav-menu__item sub-menu">
                    <ul class="sub-menu__items">
                        <li class="sub-menu__item">
                        <a href="">ライセンス取得</a>
                        </li>
                        <li class="sub-menu__item">
                        <a href="">貸切体験ダイビング</a>
                        </li>
                        <li class="sub-menu__item">
                            <a href="">ナイトダイビング</a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="">私たちについて</a>
                    </li>
                </ul>
                </div><!-- nav-menu__quarter -->
                <div class="nav-menu__quarter">
                    <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                    <a href="">ダイビング情報</a>
                    </li>
                    <li class="nav-menu__item sub-menu">
                        <ul class="sub-menu__items">
                        <li class="sub-menu__item">
                        <a href="">ライセンス講習</a>
                        </li>
                        <li class="sub-menu__item">
                            <a href="">体験ダイビング</a>
                        </li>
                        <li class="sub-menu__item">
                        <a href="">ファンダイビング</a>
                        </li>
                    </ul>
                    </li>
                    <li class="nav-menu__item">
                    <a href="">ブログ</a>
                    </li>
                </ul>
                </div><!-- nav-menu__quarter -->
                </div><!-- nav-menu__half -->
                <div class="nav-menu__half">
                <div class="nav-menu__quarter">
                <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                        <a href="">お客様の声</a>
                    </li>
                    <li class="nav-menu__item">
                    <a href="">料金一覧</a>
                    </li>
                    <li class="nav-menu__item sub-menu">
                    <ul class="sub-menu__items">
                        <li class="sub-menu__item">
                            <a href="">ライセンス講習</a>
                        </li>
                        <li class="sub-menu__item">
                        <a href="">体験ダイビング</a>
                        </li>
                        <li class="sub-menu__item">
                        <a href="">ファンダイビング</a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div><!-- nav-menu__quarter -->
                <div class="nav-menu__quarter">
                    <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                        <a href="">よくある質問</a>
                    </li>
                    <li class="nav-menu__item">
                    <a href="">プライバシー<span class="text-block">ポリシー</span></a>
                    </li>
                    <li class="nav-menu__item">
                    <a href="">利用規約</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="">サイトマップ</a>
                    </li>
                    <li class="nav-menu__item">
                    <a href="">お問い合わせ</a>
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
</body>

</html>