<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_information_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_information_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">Information</h1>
        </div>

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

        <div class="information-content page-content">
            <div class="inner">
            <div class="information-content__tab information-tab">
                <div class="information-tab__items" role="tablist">
                    <button class="information-tab__item js-infoTab" type="button" role="tab" data-tab="tab1">
                    ライセンス<br class="u-mobile">講習
                    </button>
                    <button class="information-tab__item js-infoTab" type="button" role="tab" data-tab="tab2">
                    ファン<br class="u-mobile">ダイビング
                    </button>
                    <button class="information-tab__item js-infoTab" type="button" role="tab" data-tab="tab3">
                    体験<br class="u-mobile">ダイビング
                    </button>
                </div>
                <div id="tab1" class="information-tab__panel js-infoContent" role="tabpanel">
                    <div class="information-tab__panel-block information-panel-block">
                        <div class="information-panel-block__text">
                            <h2 class="information-panel-block__title">
                                ライセンス講習
                            </h2>
                            <p class="information-panel-block__description">
                                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                            </p>
                        </div>
                        <figure class="information-panel-block__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/information-license.webp" alt="ライセンス講習を受けている人たちの写真" decoding="async" loading="lazy">
                        </figure>
                    </div>
                </div>
                <div id="tab2" class="information-tab__panel js-infoContent" role="tabpanel">
                    <div class="information-tab__panel-block information-panel-block">
                        <div class="information-panel-block__text">
                            <h2 class="information-panel-block__title">
                                ファンダイビング
                            </h2>
                            <p class="information-panel-block__description">
                                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                            </p>
                        </div>
                        <figure class="information-panel-block__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/information-fundiving.webp" alt="海中を泳ぐ熱帯魚の写真" decoding="async" loading="lazy">
                        </figure>
                    </div>
                </div>
                <div id="tab3" class="information-tab__panel js-infoContent" role="tabpanel">
                    <div class="information-tab__panel-block information-panel-block">
                        <div class="information-panel-block__text">
                            <h2 class="information-panel-block__title">
                                体験ダイビング
                            </h2>
                            <p class="information-panel-block__description">
                                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                            </p>
                        </div>
                        <figure class="information-panel-block__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/information-diving.webp" alt="海中を泳ぐ熱帯魚の写真" decoding="async" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
            </div><!-- inner -->
        </div><!-- information-content page-content -->

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>