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
                <li class="course-tab__item"><a href="<?php echo esc_url( home_url('/voice/') ); ?>">All</a></li>
                <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'voice_category',
                        'hide_empty' => false,
                    ));

                    if ($terms) {
                    foreach ($terms as $term) {
                        $term_link = esc_url(get_term_link($term));
                        $term_name = esc_html($term->name);
                        $is_active = (is_tax('voice_category', $term->term_id)) ? 'is-active' : '';
                        echo '<li class="course-tab__item ' . $is_active . '"><a href="' . $term_link . '">' . $term_name . '</a></li>';
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

                        <?php $voiceDetail = get_field('voice-detail'); ?>

                        <li class="voice-card voice-cards__item">
                            <div class="voice-card__header">
                                <div class="voice-card__header-text">
                                    <div class="voice-card__header-status">
                                    <span class="voice-card__header-demographic">
                                        <?php if($voiceDetail['v-age']): ?>
                                            <?php echo $voiceDetail['v-age']; ?>
                                        <?php endif; ?>
                                        <?php if($voiceDetail['v-sex']): ?>
                                            (<?php echo $voiceDetail['v-sex']; ?>)
                                            <?php endif; ?>
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
                                <?php $image = $voiceDetail['v-img']; if( !empty($image) ): ?>
                                    <figure class="voice-card__header-img js-scroll">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                                    </figure>
                                <?php endif; ?>
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