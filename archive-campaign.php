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

            <ul class="course-tab__items">
                <li class="course-tab__item is-active"><a href="<?php echo esc_url( home_url('/campaign/') ); ?>">All</a></li>
                <?php
                    $terms = get_terms(array(
                        'taxonomy' => 'campaign_category',
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
                $taxonomy_slug = 'campaign_category';
                $post_type_slug = 'campaign';
                $terms = get_terms($taxonomy_slug);
            ?>

            <div class="course-tab__panel-wrap">
                <div class="campaign-cards">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                        <div class="campaign-card campaign-cards__item">
                            <div class="campaign-card__content campaign-card__content--page">
                                <div class="campaign-card__content-header">
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
                                    <h2 class="campaign-card__content-title campaign-card__content-title--page">
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                                <span class="campaign-card__content-desc campaign-card__content-desc--page">
                                    全部コミコミ(お一人様)
                                </span>
                                <div class="campaign-card__content-price">
                                    <?php if(get_field('list-price')): ?>
                                        <span class="campaign-card__content-price-regular">¥<?php the_field('list-price'); ?></span>
                                    <?php endif; ?>
                                    <?php if(get_field('campaign-price')): ?>
                                        <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥<?php the_field('campaign-price'); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="campaign-card__description u-desktop ">
                                    <?php the_content(); ?>
                                </div>
                                <div class="campaign-card__info u-desktop ">
                                    <?php if(get_field('period')): ?>
                                        <span class="campaign-card__info-period">
                                            <?php the_field('period'); ?>
                                        </span>
                                    <?php endif; ?>
                                    <span class="campaign-card__info-guid">
                                        ご予約・お問い合わせはコチラ
                                    </span>
                                    <div class="campaign-card__info-link">
                                        <a class="link-button" href="<?php echo esc_url(home_url('/contact/')); ?>">
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
                    <?php endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                </div><!-- campaign-cards -->
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