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

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

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
                            <?php
                                $link_group = SCF::get('gallery-image__list');
                                foreach ($link_group as $fields ) {
                                ?>
                                <button class="modal-btn gallery-post__grid-item" data-micromodal-trigger="modal-<?php echo $fields['gallery-order']; ?>" aria-label="モーダルボタン">
                                    <img class="gallery-img" src="<?php echo wp_get_attachment_url($fields['gallery-image']); ?>" alt="<?php echo $fields['gallery-alt']; ?>" decoding="async" loading="lazy">
                                </button>
                            <?php } ?>
                        </div>

                        <div class="gallery-post__modal-slide">
                            <?php
                                $link_group = SCF::get('gallery-image__list');
                                foreach ($link_group as $fields ) {
                                ?>
                                <div class="micromodal-slide" id="modal-<?php echo $fields['gallery-order']; ?>" aria-hidden="true">
                                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                                        <div class="modal__container" role="dialog" aria-modal="true">
                                            <img class="gallery-img_lg" src="<?php echo wp_get_attachment_url($fields['gallery-image']); ?>" alt="<?php echo $fields['gallery-alt']; ?>" data-micromodal-close />
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div><!-- gallery-post__modal-slide -->

                    </div><!-- aboutAs-gallery__post gallery-post -->
                </div><!-- inner -->
            </section><!-- aboutAs-gallery -->
        </div><!-- page-content -->

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

  <?php get_footer(); ?>