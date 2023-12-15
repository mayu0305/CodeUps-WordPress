<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_voice_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_voice_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">Voice</h1>
        </div>

        <div class="breadcrumb">
            <div class="inner breadcrumb__inner">
                <ul class="breadcrumb__items">
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="./" title="Top" itemprop="item"><span itemprop="name">Top</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="name">お客様の声</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </div>
        </div>

        <div class="page-content page-voice">
            <div class="inner">
                <div class="page-content__tab course-tab">
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
                    <div id="tab-panel1" class="course-tab__panel js-tab-panel -active" role="tabpanel" tabindex="0" aria-labelledby="tab1">
                        <ul class="page-voice__items voice-cards">
                        <?php
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $args = [
                                'post_type' => 'voice', // カスタム投稿の投稿タイプスラッグ
                                'paged' => $paged, // ページネーションがある場合に必要
                                'posts_per_page' => 6, // 表示件数
                                // カテゴリー(ターム)を指定する場合に書く↓
                                'tax_query' => array(
                                        array(
                                            'taxonomy' => 'item-course', // タクソノミーのスラッグ
                                            'field' => 'slug',
                                            'terms' => array('fun', 'license', 'trial'), // タームのスラッグ（複数指定可能）
                                        ),
                                    ),
                                // カテゴリー(ターム)を指定する場合に書く↑
                            ];
                            $wp_query = new WP_Query($args);
                            if (have_posts()): while (have_posts()): the_post();
                            ?>
                            <li class="voice-card voice-cards__item">
                                <div class="voice-card__header">
                                    <div class="voice-card__header-text">
                                        <div class="voice-card__header-status">
                                            <span class="voice-card__header-demographic">
                                                <?php if( get_field('age') == "10代") : ?>10代
                                                    <?php elseif( get_field('age') == "20代"): ?>20代
                                                    <?php elseif( get_field('age') == "30代"): ?>30代
                                                    <?php elseif( get_field('age') == "40代"): ?>40代
                                                    <?php elseif( get_field('age') == "50代"): ?>50代
                                                    <?php elseif( get_field('age') == "60代"): ?>60代
                                                    <?php elseif( get_field('age') == "70代"): ?>70代
                                                <?php endif; ?>
                                                (
                                                <?php if( get_field('sex') == "女性"): ?>女性
                                                    <?php elseif( get_field('sex') == "男性"): ?>男性
                                                    <?php elseif( get_field('sex') == "未選択"): ?>未選択
                                                    <?php elseif( get_field('sex') == "カップル"): ?>カップル
                                                    <?php elseif( get_field('sex') == "夫婦"): ?>夫婦
                                                <?php endif; ?>
                                                )
                                            </span>
                                            <span class="card-tag">
                                            ライセンス講習
                                            </span>
                                        </div>
                                        <h2 class="voice-card__header-title">
                                            ここにタイトルが入ります。ここにタイトル
                                        </h2>
                                    </div><!--voice-card__header-text -->
                                    <figure class="voice-card__header-img js-scroll">
                                        <?php $image = get_field('image'); if( !empty($image) ): ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                                        <?php endif; ?>
                                        <!-- <img src="assets/images/voice/voice01.webp" alt="ライセンス講習を受けた20代女性の写真" decoding="async" loading="lazy"> -->
                                    </figure>
                                </div><!--voice-card__header -->
                                <div class="voice-card__text">
                                <?php the_content(); ?>
                                </div>
                            </li><!-- voice-card -->

                            <?php endwhile; else: ?>
                            <?php endif ?>
                            <?php wp_reset_postdata(); ?>

                        </ul><!-- page-voice__items voice-cards -->
                    </div>
                    <div id="tab-panel2" class="course-tab__panel js-tab-panel" role="tabpanel" tabindex="0" aria-labelledby="tab2">
                        <ul class="page-voice__items voice-cards">
                            <li class="voice-card voice-cards__item">
                                <div class="voice-card__header">
                                    <div class="voice-card__header-text">
                                        <div class="voice-card__header-status">
                                            <span class="voice-card__header-demographic">
                                            20代(女性)
                                            </span>
                                            <span class="card-tag">
                                            ライセンス講習
                                            </span>
                                        </div>
                                        <h2 class="voice-card__header-title">
                                            ここにタイトルが入ります。ここにタイトル
                                        </h2>
                                    </div><!--voice-card__header-text -->
                                    <figure class="voice-card__header-img js-scroll">
                                        <img src="assets/images/voice/voice01.webp" alt="ライセンス講習を受けた20代女性の写真" decoding="async" loading="lazy">
                                    </figure>
                                </div><!--voice-card__header -->
                                <div class="voice-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。
                                </div>
                            </li><!-- voice-card -->
                            <li class="voice-card voice-cards__item">
                                <div class="voice-card__header">
                                    <div class="voice-card__header-text">
                                        <div class="voice-card__header-status">
                                            <span class="voice-card__header-demographic">
                                                20代(女性)
                                            </span>
                                            <span class="card-tag">
                                                ライセンス講習
                                            </span>
                                        </div>
                                        <h2 class="voice-card__header-title">
                                            ここにタイトルが入ります。ここにタイトル
                                        </h2>
                                    </div><!--voice-card__header-text -->
                                    <figure class="voice-card__header-img js-scroll">
                                        <img src="assets/images/voice/voice06.webp" alt="ライセンス講習コースを受けた20代女性の写真" decoding="async" loading="lazy">
                                    </figure>
                                </div><!--voice-card__header -->
                                <div class="voice-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。
                                </div>
                            </li><!-- voice-card -->
                        </ul><!-- page-voice__items voice-cards -->
                    </div>
                    <div id="tab-panel3" class="course-tab__panel js-tab-panel" role="tabpanel" tabindex="0" aria-labelledby="tab3">
                        <ul class="page-voice__items voice-cards">
                            <li class="voice-card voice-cards__item">
                                <div class="voice-card__header">
                                    <div class="voice-card__header-text">
                                        <div class="voice-card__header-status">
                                            <span class="voice-card__header-demographic">
                                            20代(男性)
                                            </span>
                                            <span class="card-tag">
                                            ファンダイビング
                                            </span>
                                        </div>
                                        <h2 class="voice-card__header-title">
                                            ここにタイトルが入ります。ここにタイトル
                                        </h2>
                                    </div><!--voice-card__header-text -->
                                    <figure class="voice-card__header-img js-scroll">
                                        <img src="assets/images/voice/voice02.webp" alt="ファンダイビングコースを受けた20代男性の写真" decoding="async" loading="lazy">
                                    </figure>
                                </div><!--voice-card__header -->
                                <div class="voice-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。
                                </div>
                            </li><!-- voice-card -->
                            <li class="voice-card voice-cards__item">
                                <div class="voice-card__header">
                                    <div class="voice-card__header-text">
                                        <div class="voice-card__header-status">
                                            <span class="voice-card__header-demographic">
                                                30代(カップル)
                                            </span>
                                            <span class="card-tag">
                                                ファンダイビング
                                            </span>
                                        </div>
                                        <h2 class="voice-card__header-title">
                                            ここにタイトルが入ります。ここにタイトル
                                        </h2>
                                    </div><!--voice-card__header-text -->
                                    <figure class="voice-card__header-img js-scroll">
                                        <img src="assets/images/voice/voice05.webp" alt="ファンダイビングコースを受けた30代カップルの写真" decoding="async" loading="lazy">
                                    </figure>
                                </div><!--voice-card__header -->
                                <div class="voice-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。
                                </div>
                            </li><!-- voice-card -->
                        </ul><!-- page-voice__items voice-cards -->
                    </div>
                    <div id="tab-panel4" class="course-tab__panel js-tab-panel" role="tabpanel" tabindex="0" aria-labelledby="tab4">
                        <ul class="page-voice__items voice-cards">
                            <li class="voice-card voice-cards__item">
                                <div class="voice-card__header">
                                    <div class="voice-card__header-text">
                                        <div class="voice-card__header-status">
                                            <span class="voice-card__header-demographic">
                                                30代(女性)
                                            </span>
                                            <span class="card-tag">
                                                体験ダイビング
                                            </span>
                                        </div>
                                        <h2 class="voice-card__header-title">
                                            ここにタイトルが入ります。ここにタイトル
                                        </h2>
                                    </div><!--voice-card__header-text -->
                                    <figure class="voice-card__header-img js-scroll">
                                        <img src="assets/images/voice/voice03.webp" alt="体験ダイビングコースを受けた30代女性の写真" decoding="async" loading="lazy">
                                    </figure>
                                </div><!--voice-card__header -->
                                <div class="voice-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。
                                </div>
                            </li><!-- voice-card -->
                            <li class="voice-card voice-cards__item">
                                <div class="voice-card__header">
                                    <div class="voice-card__header-text">
                                        <div class="voice-card__header-status">
                                            <span class="voice-card__header-demographic">
                                                20代(女性)
                                            </span>
                                            <span class="card-tag">
                                                体験ダイビング
                                            </span>
                                        </div>
                                        <h2 class="voice-card__header-title">
                                            ここにタイトルが入ります。ここにタイトル
                                        </h2>
                                    </div><!--voice-card__header-text -->
                                    <figure class="voice-card__header-img js-scroll">
                                        <img src="assets/images/voice/voice04.webp" alt="体験ダイビングコースを受けた20代女性の写真" decoding="async" loading="lazy">
                                    </figure>
                                </div><!--voice-card__header -->
                                <div class="voice-card__text">
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                                    ここにテキストが入ります。ここにテキストが入ります。
                                </div>
                            </li><!-- voice-card -->
                        </ul><!-- page-voice__items voice-cards -->
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