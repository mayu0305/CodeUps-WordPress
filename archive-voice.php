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

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

        <div class="page-content page-voice">
            <div class="inner">

            <ul class="course-tab__items">
                <li class="course-tab__item is-active"><a href="<?php echo esc_url( home_url() ); ?>/campaign/">All</a></li>
                <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'voice_category',
                        'hide_empty' => false,
                    ));

                    if ($terms) {
                    foreach ($terms as $term) {
                        $term_link = esc_url(get_term_link($term));
                        $term_name = esc_html($term->name);
                        echo '<li class="course-tab__item"><a href="' . $term_link . '">' . $term_name . '</a></li>';
                    }
                }
                ?>
            </ul>

            <?php
                $taxonomy_slug = 'voice_category';
                $post_type_slug = 'voice';
                $terms = get_terms($taxonomy_slug);
            ?>

            <div class="course-tab__panel-wrap">
                <ul class="page-voice__items voice-cards">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
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
                                        <span span class="card-tag">
                                            <?php
                                                $cterms = get_the_terms(get_the_ID(), $taxonomy_slug);
                                                if ($cterms && !is_wp_error($cterms)) :
                                                    foreach ($cterms as $term) :
                                                        echo esc_html($term->name);
                                                    endforeach;
                                                endif;
                                                ?>
                                        </span>
                                    </div>
                                    <h2 class="voice-card__header-title">
                                        <?php echo wp_trim_words( get_the_title(), 19, '…' ); ?>
                                    </h2>
                                </div><!--voice-card__header-text -->
                                <figure class="voice-card__header-img js-scroll">
                                    <?php $image = get_field('image'); if( !empty($image) ): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                                    <?php endif; ?>
                                </figure>
                            </div><!--voice-card__header -->
                            <div class="voice-card__text">
                                <?php echo wp_trim_words( get_the_content(), 165, '…' ); ?>
                            </div>
                        </li><!-- voice-card -->

                    <?php
                        endwhile;
                        endif;
                    ?>

                </ul><!-- page-voice__items voice-cards -->
            </div><!-- course-tab__panel-wrap -->

                <div class="campaign-content__page-nav">
                    <nav class="navigation pagination" aria-label="投稿">
                        <h2 class="screen-reader-text visually-hidden">投稿ナビゲーション</h2>
                        <div class="pagination__links">
                            <?php wp_pagenavi(); ?>
                        </div>
                    </nav>
                </div>

            </div><!-- inner -->
        </div>

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>