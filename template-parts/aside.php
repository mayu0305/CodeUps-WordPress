<aside class="aside blog-content__side">
    <div class="aside__content aside-article">
        <h2 class="aside__content-title">人気記事</h2>
        <div class="aside-article__items">
        <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'meta_value_num',
                'meta_key' => '_custom_meta_views',
                'order' => 'DESC'
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();  ?>

            <a href="<?php the_permalink(); ?>" class="aside-article__item">
                <div class="aside-article__item-text">
                    <time class="aside-article__item-date" datetime="<?php the_time('Y-m-d'); ?>">
                        <?php the_time( get_option( 'date_format' ) ); ?>
                    </time>
                    <h3 class="aside-article__item-title"><?php the_title(); ?></h3>
                </div>
                <figure class="aside-article__item-img">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/noimage.webp" alt="デフォルト画像" decoding="async" loading="lazy">
                    <?php endif ; ?>
                </figure>
            </a>

        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>

        </div><!-- aside-article__items -->
    </div><!-- aside__content aside-article -->

    <div class="aside__content aside-voice">
        <h2 class="aside__content-title">口コミ</h2>
        <ul class="aside-voice__items">
            <?php
                $args = [
                    'post_type' => 'voice',
                    'posts_per_page' => 1,
                    'tax_query' => array(
                            array(
                                'taxonomy' => 'voice_category',
                                'field' => 'slug',
                                'terms' => array('fun', 'license', 'trial'),
                            ),
                        ),
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()): while (have_posts()): the_post();
            ?>
                <li class="aside-voice__item">
                    <div class="aside-voice__item-text">
                        <span class="aside-voice-status">
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
                        <h3 class="aside-voice__title">
                            <?php the_title(); ?>
                        </h3>
                    </div>
                    <figure class="aside-voice__img">
                        <?php $image = get_field('image'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                        <?php endif; ?>
                    </figure>
                </li>
            <?php
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </ul>
        <div class="aside__content-link">
            <a class="link-button" href="/voice/">
                <span class="link-button__text">View more</span>
                <span class="link-button__arrow">
                </span>
            </a>
        </div>
    </div><!-- aside__content aside-voice -->

    <div class="aside__content aside-campaign">
        <h2 class="aside__content-title">キャンペーン</h2>
        <ul class="aside-campaign__items">
            <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = [
                    'post_type' => 'campaign',
                    'posts_per_page' => 2,
                    'tax_query' => array(
                            array(
                                'taxonomy' => 'campaign_category',
                                'field' => 'slug',
                                'terms' => array('fun', 'license', 'trial'),
                            ),
                        ),
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()): while (have_posts()): the_post();
            ?>
            <li class="aside-campaign__item">
                <div class="campaign-card aside-campaign__item-card">
                    <div class="campaign-card__content campaign-card__content--blog">
                        <div class="campaign-card__content-header">
                            <h3 class="campaign-card__content-title campaign-card__content-title--blog">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <!-- <div class="campaign-card__content-body"> -->
                            <span class="campaign-card__content-desc campaign-card__content-desc--blog">
                                全部コミコミ(お一人様)
                            </span>
                            <div class="campaign-card__content-price">
                                <span class="campaign-card__content-price-regular campaign-card__content-price-regular--blog">¥<?php the_field('list-price'); ?></span>
                                <span class="campaign-card__content-price-sale campaign-card__content-price-sale--blog">¥<?php the_field('campaign-price'); ?></span>
                            </div>
                        <!-- </div> -->
                    </div><!-- campaign-card__content-->
                    <figure class="campaign-card__img campaign-card__img--blog">
                        <?php $image = get_field('image'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                        <?php endif; ?>
                    </figure>
                </div><!-- campaign-card-->
            </li>
            <?php
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </ul><!-- aside-campaign__items -->
        <div class="aside__content-link">
            <a class="link-button" href="/campaign/">
                <span class="link-button__text">View more</span>
                <span class="link-button__arrow">
                </span>
            </a>
        </div>
    </div><!-- aside__content aside-campaign -->

    <div class="aside__content aside-archive">
        <h2 class="aside__content-title">アーカイブ</h2>
        <div class="aside-archive__items">
        <?php
                // 年と月別のアーカイブを取得
                $archives = wp_get_archives(array(
                    'type'            => 'monthly',
                    'format'          => 'custom',
                    'before'          => '',
                    'after'           => '',
                    'show_post_count' => false,
                    'echo'            => 0,
                ));

                // 取得したアーカイブを年ごとにグループ化
                $archives_by_year = array();
                preg_match_all('/\d{4}\/\d{2}/', $archives, $matches);
                foreach ($matches[0] as $archive) {
                    $year = substr($archive, 0, 4);
                    $month = substr($archive, 5, 2);
                    $archives_by_year[$year][] = $month;
                }

                // 年ごとにループ
                foreach ($archives_by_year as $year => $months) {
                    echo '<details class="aside-archive__item js-details is-opened" open>';
                    echo '<summary class="js-summary">' . $year . '</summary>';
                    echo '<div class="aside-archive__item-lists">';

                    // 月ごとにループ
                    foreach ($months as $month) {
                        $month_name = date_i18n('F', mktime(0, 0, 0, $month, 1));
                        echo '<a href="' . get_month_link($year, $month) . '" class="aside-archive__item-list">' . $month_name . '</a>';
                    }

                    echo '</div></details>';
                }
            ?>
        </div><!-- aside-archive__items-->
    </div><!-- aside__content aside-archive -->


</aside><!-- aside blog-content__side -->