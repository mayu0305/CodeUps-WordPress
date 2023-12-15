<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_aboutus_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_aboutus_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">About us</h1>
        </div>

        <div class="breadcrumb">
            <div class="inner breadcrumb__inner">
                <ul class="breadcrumb__items">
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="./" title="Top" itemprop="item"><span itemprop="name">Top</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="name">私たちについて</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </div>
        </div>

        <div class="page-content">

            <section class="aboutAs-info">
                <div class="inner">
                    <div class="aboutAs-intro aboutAs-intro--page">
                        <div class="aboutAs-intro__img">
                        <figure class="aboutAs-intro__img-main aboutAs-intro__img-main--page">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/about-us02.webp" alt="海中にいる熱帯魚の写真" decoding="async" loading="lazy">
                        </figure>
                        <figure class="aboutAs-intro__img-sub u-desktop">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/about-us01.webp" alt="屋根に置かれたシーサーの写真" decoding="async" loading="lazy">
                        </figure>
                        </div><!-- aboutAs-intro__img-->
                        <div class="aboutAs-intro__text aboutAs-intro__text--page">
                        <h2 class="aboutAs-intro__text-title aboutAs-intro__text-title--page">
                            Dive into<br>the Ocean
                        </h2>
                        <div class="aboutAs-intro__text-wrap">
                            <div class="aboutAs-intro__text-desc aboutAs-intro__text-desc--page">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                            </div>
                        </div>
                        </div><!-- aboutAs-intro__text -->
                    </div><!-- top-aboutAs__content -->
                </div>
            </section><!-- aboutAs-info -->

            <section class="aboutAs-gallery page-content__section">
                <div class="inner">
                    <div class="section-title">
                      <span class="section-title__sub" aria-hidden="true">Gallery</span>
                      <h2 class="section-title__main">フォト</h2>
                    </div>
                    <div class="aboutAs-gallery__post gallery-post">
                        <div class="gallery-post__grid-items">
                          <button class="modal-btn gallery-post__grid-item" data-micromodal-trigger="modal-1" aria-label="モーダル2のボタン">
                              <img class="gallery-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery01.webp" alt="ギャラリー写真1" decoding="async" loading="lazy">
                          </button>
                          <button class="modal-btn gallery-post__grid-item" data-micromodal-trigger="modal-2" aria-label="モーダル2のボタン">
                              <img class="gallery-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery02.webp" alt="ギャラリー写真2" decoding="async" loading="lazy">
                          </button>
                          <button class="modal-btn gallery-post__grid-item" data-micromodal-trigger="modal-3" aria-label="モーダル3のボタン">
                              <img class="gallery-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery03.webp" alt="ギャラリー写真3" decoding="async" loading="lazy">
                          </button>
                          <button class="modal-btn gallery-post__grid-item" data-micromodal-trigger="modal-4" aria-label="モーダル3のボタン">
                              <img class="gallery-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery04.webp" alt="ギャラリー写真4" decoding="async" loading="lazy">
                          </button>
                          <button class="modal-btn gallery-post__grid-item" data-micromodal-trigger="modal-5" aria-label="モーダル3のボタン">
                              <img class="gallery-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery05.webp" alt="ギャラリー写真5" decoding="async" loading="lazy">
                          </button>
                          <button class="modal-btn gallery-post__grid-item" data-micromodal-trigger="modal-6" aria-label="モーダル3のボタン">
                              <img class="gallery-img" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery06.webp" alt="ギャラリー写真6" decoding="async" loading="lazy">
                          </button>
                      </div>

                        <div class="gallery-post__modal-slide">
                            <div class="micromodal-slide" id="modal-1" aria-hidden="true">
                                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                                    <div class="modal__container" role="dialog" aria-modal="true">
                                        <img class="gallery-img_lg" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery01.webp" alt="ギャラリー写真1" data-micromodal-close />
                                    </div>
                                </div>
                            </div>
                            <div class="micromodal-slide" id="modal-2" aria-hidden="true">
                                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                                    <div class="modal__container" role="dialog" aria-modal="true">
                                        <img class="gallery-img_lg" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery02.webp" alt="ギャラリー写真2" data-micromodal-close />
                                    </div>
                                </div>
                            </div>
                            <div class="micromodal-slide" id="modal-3" aria-hidden="true">
                                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                                    <div class="modal__container" role="dialog" aria-modal="true">
                                        <img class="gallery-img_lg" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery03.webp" alt="ギャラリー写真3" data-micromodal-close />
                                    </div>
                                </div>
                            </div>
                            <div class="micromodal-slide" id="modal-4" aria-hidden="true">
                                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                                    <div class="modal__container" role="dialog" aria-modal="true">
                                        <img class="gallery-img_lg" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery04.webp" alt="ギャラリー写真4" data-micromodal-close />
                                    </div>
                                </div>
                            </div>
                            <div class="micromodal-slide" id="modal-5" aria-hidden="true">
                                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                                    <div class="modal__container" role="dialog" aria-modal="true">
                                        <img class="gallery-img_lg" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery05.webp" alt="ギャラリー写真5" data-micromodal-close />
                                    </div>
                                </div>
                            </div>
                            <div class="micromodal-slide" id="modal-6" aria-hidden="true">
                                <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                                    <div class="modal__container" role="dialog" aria-modal="true">
                                        <img class="gallery-img_lg" src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/aboutus-gallery06.webp" alt="ギャラリー写真6" data-micromodal-close />
                                    </div>
                                </div>
                            </div>
                        </div><!-- gallery-post__modal-slide -->

                    </div><!-- aboutAs-gallery__post gallery-post -->
                </div><!-- inner -->
            </section><!-- aboutAs-gallery -->
        </div><!-- page-content -->

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

  <?php get_footer(); ?>