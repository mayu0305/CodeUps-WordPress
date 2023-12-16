<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_campaign_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_campaign_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">Campaign</h1>
        </div>

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

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
                            <?php
                                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                $args = [
                                    'post_type' => 'campaign', // カスタム投稿の投稿タイプスラッグ
                                    'paged' => $paged, // ページネーションがある場合に必要
                                    'posts_per_page' => 4, // 表示件数
                                    // カテゴリー(ターム)を指定する場合に書く↓
                                    'tax_query' => array(
                                            array(
                                                'taxonomy' => 'campaign_category', // タクソノミーのスラッグ
                                                'field' => 'slug',
                                                'terms' => array('fun', 'license', 'trial'), // タームのスラッグ（複数指定可能）
                                            ),
                                        ),
                                    // カテゴリー(ターム)を指定する場合に書く↑
                                ];
                                $wp_query = new WP_Query($args);
                                if (have_posts()): while (have_posts()): the_post();
                                ?>

                                <div class="campaign-card campaign-cards__item">
                                    <div class="campaign-card__content campaign-card__content--page">
                                        <div class="campaign-card__content-header">
                                            <span span class="card-tag">
                                                <?php
                                                    $terms = get_the_terms(get_the_ID(), 'campaign_category');

                                                    if ($terms && !is_wp_error($terms)) {
                                                        $category = array_shift($terms);
                                                        echo $category->name;
                                                    }
                                                ?>
                                            </span>
                                            <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                                <?php the_title(); ?>
                                            </h2>
                                        </div>
                                        <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                            全部コミコミ(お一人様)
                                        </span>
                                        <div class="campaign-card__content-price">
                                            <span class="campaign-card__content-price-regular">¥<?php the_field('list-price'); ?></span>
                                            <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥<?php the_field('campaign-price'); ?></span>
                                        </div>
                                        <p class="campaign-card__description u-desktop ">
                                            <?php the_content(); ?>
                                        </p>
                                        <div class="campaign-card__info u-desktop ">
                                            <span class="campaign-card__info-period">
                                            <?php the_field('period'); ?>
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
                                        <?php $image = get_field('image'); if( !empty($image) ): ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                                        <?php endif; ?>
                                    </figure>
                                </div><!-- campaign-card-->

                            <?php endwhile; else: ?>
                            <?php endif ?>
                            <?php wp_reset_postdata(); ?>

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
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign01.webp" alt="海中を泳ぐ沢山の熱帯魚の写真" decoding="async" loading="lazy">
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
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign04.webp" alt="ダイビング講習中の写真" decoding="async" loading="lazy">
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
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign03.webp" alt="夜の海を漂うクラゲの写真" decoding="async" loading="lazy">
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

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>