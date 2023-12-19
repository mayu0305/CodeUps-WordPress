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

                <?php
                $taxonomy_slug = 'campaign_category';
                $post_type_slug = 'campaign';
                $terms = get_terms($taxonomy_slug);
                ?>

                <div class="js-tabGroup course-tab__items">
                    <button class="course-tab__item js-cTab is-active">All</button>
                    <?php foreach ($terms as $value) : ?>
                        <button class="course-tab__item js-cTab">
                                <?php echo esc_html($value->name); ?>
                        </button>
                    <?php endforeach; ?>
                </div>


                <div class="js-panelGroup course-tab__panel-wrap">
                    <div class="course-tab__panel js-cPanel is-active" id="cPanel-1">
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
                                            <span class="campaign-card__content-price-regular">¥<?php the_field('list-price'); ?></span>
                                            <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥<?php the_field('campaign-price'); ?></span>
                                        </div>
                                        <div class="campaign-card__description u-desktop ">
                                            <?php the_content(); ?>
                                        </div>
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
                            <?php endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div><!-- course-tab__panel -->

                    <?php foreach ($terms as $key => $value) : ?>
                        <?php
                        $term_slug = $value->slug;
                        $args = array(
                            'post_type' => $post_type_slug,
                            $taxonomy_slug => $term_slug,
                            'posts_per_page' => -1,
                            'order' => 'DESC',
                            'orderby' => 'date',
                            'post_status' => 'publish'
                        );
                        $myquery = new WP_Query($args);
                        ?>

                        <div class="course-tab__panel js-cPanel" id="cPanel-<?php echo $key + 2; ?>">
                            <div class="campaign-cards">
                                <?php
                                    if ($myquery->have_posts()) : ?>
                                <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>

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
                                            <span class="campaign-card__content-price-regular">¥<?php the_field('list-price'); ?></span>
                                            <span class="campaign-card__content-price-sale campaign-card__content-price-sale--page">¥<?php the_field('campaign-price'); ?></span>
                                        </div>
                                        <div class="campaign-card__description u-desktop ">
                                            <?php the_content(); ?>
                                        </div>
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
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </div><!-- campaign-cards -->
                        </div><!-- course-tab__panel -->
                    <?php endforeach; ?>
                </div><!-- js-panelGroup course-tab__panel-wrap -->


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