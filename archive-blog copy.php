<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_blog_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_blog_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">Blog</h1>
        </div>

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

        <div class="blog-content page-content">
            <div class="inner">
                <div class="blog-content__body">
                    <div class="blog-content__main">
                        <article class="blog-content__main-items blog-cards blog-cards--page">
                        <?php
                            $args = array(
                                'post_type' => 'blog',
                                'posts_per_page' => 5,
                                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="blog-card blog-cards__item">
                                        <div class="blog-card__content">
                                            <time class="blog-card__content-date" datetime="<?php the_time('Y-m-d'); ?>">
                                            <?php the_time( get_option( 'date_format' ) ); ?>
                                            </time>
                                            <h2 class="blog-card__content-title">
                                            <?php the_title(); ?>
                                            </h2>
                                            <p class="blog-card__content-text">
                                                <?php
                                                    $content = get_the_content();
                                                    $content = wp_strip_all_tags( $content );
                                                    $content = strip_shortcodes( $content );
                                                    echo $content;
                                                ?>
                                            </p>
                                        </div><!-- blog-card__content -->
                                        <figure class="blog-card__img">
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <?php the_post_thumbnail('full'); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/noimage.webp" alt="デフォルト画像">
                                            <?php endif ; ?>
                                        </figure>
                                    </a><!-- blog-card -->
                                    <?php
                                endwhile;

                                
                                // ページナビゲーションを表示
                                if (function_exists('wp_pagenavi')) {
                                    wp_pagenavi(array('query' => $query));
                                }

                                // ループをリセット
                                wp_reset_postdata();


                            else :
                                echo '投稿がありません。';
                            endif;
                        ?>
                        </article><!-- blog-cards -->
                        <div class="blog-content__page-nav">
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
                    </div>

                    <aside class="aside blog-content__side">
                        <div class="aside__content aside-article">
                            <h2 class="aside__content-title">人気記事</h2>
                            <div class="aside-article__items">
                            <?php
                                $args = array(
                                    'post_type' => 'blog',
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
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/noimage.webp" alt="デフォルト画像">
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
                                <li class="aside-voice__item">
                                    <div class="aside-voice__item-text">
                                        <span class="aside-voice-status">
                                            30代(カップル)
                                        </span>
                                        <h3 class="aside-voice__title">
                                            ここにタイトルが入ります。ここにタイトル
                                        </h3>
                                    </div>
                                    <figure class="aside-voice__img">
                                        <img src="assets/images/blog/blog-voiceimg.webp" alt="30代カップルの写真" decoding="async" loading="lazy">
                                    </figure>
                                </li>
                            </ul>
                            <div class="aside__content-link">
                                <a class="link-button" href="">
                                    <span class="link-button__text">View more</span>
                                    <span class="link-button__arrow">
                                    </span>
                                </a>
                            </div>
                        </div><!-- aside__content aside-voice -->

                        <div class="aside__content aside-campaign">
                            <h2 class="aside__content-title">キャンペーン</h2>
                            <ul class="aside-campaign__items">
                                <li class="aside-campaign__item">
                                    <div class="campaign-card aside-campaign__item-card">
                                        <div class="campaign-card__content campaign-card__content--blog">
                                            <div class="campaign-card__content-header">
                                                <h3 class="campaign-card__content-title campaign-card__content-title--blog">
                                                    ライセンス取得
                                                </h3>
                                            </div>
                                            <!-- <div class="campaign-card__content-body"> -->
                                                <span class="campaign-card__content-desc campaign-card__content-desc--blog">
                                                    全部コミコミ(お一人様)
                                                </span>
                                                <div class="campaign-card__content-price">
                                                    <span class="campaign-card__content-price-regular campaign-card__content-price-regular--blog">¥56,000</span>
                                                    <span class="campaign-card__content-price-sale campaign-card__content-price-sale--blog">¥46,000</span>
                                                </div>
                                            <!-- </div> -->
                                        </div><!-- campaign-card__content-->
                                        <figure class="campaign-card__img campaign-card__img--blog">
                                            <img src="assets/images/campaign/campaign01.webp" alt="海中を泳ぐ沢山の熱帯魚の写真" decoding="async" loading="lazy">
                                        </figure>
                                    </div><!-- campaign-card-->
                                </li>
                                <li class="aside-campaign__item">
                                    <div class="campaign-card aside-campaign__item-card">
                                        <div class="campaign-card__content campaign-card__content--blog">
                                            <div class="campaign-card__content-header">
                                                <h3 class="campaign-card__content-title campaign-card__content-title--blog">
                                                貸切体験ダイビング
                                                </h3>
                                            </div>
                                            <!-- <div class="campaign-card__content-body"> -->
                                                <span class="campaign-card__content-desc campaign-card__content-desc--blog">
                                                全部コミコミ(お一人様)
                                                </span>
                                                <div class="campaign-card__content-price">
                                                <span class="campaign-card__content-price-regular campaign-card__content-price-regular--blog">¥24,000</span>
                                                <span class="campaign-card__content-price-sale campaign-card__content-price-sale--blog">¥18,000</span>
                                                </div>
                                            <!-- </div> -->
                                        </div><!-- campaign-card__content-->
                                        <figure class="campaign-card__img campaign-card__img--blog">
                                        <img src="assets/images/campaign/campaign02.webp" alt="海上に浮かぶ船の写真" decoding="async" loading="lazy">
                                        </figure>
                                    </div><!-- campaign-card-->
                                </li>
                            </ul><!-- aside-campaign__items -->
                            <div class="aside__content-link">
                                <a class="link-button" href="">
                                    <span class="link-button__text">View more</span>
                                    <span class="link-button__arrow">
                                    </span>
                                </a>
                            </div>
                        </div><!-- aside__content aside-campaign -->

                        <div class="aside__content aside-archive">
                            <h2 class="aside__content-title">アーカイブ</h2>
                            <div class="aside-archive__items">
                                <details class="aside-archive__item js-details is-opened" open>
                                    <summary class="js-summary">2023</summary>
                                    <div class="aside-archive__item-lists">
                                        <a href="" class="aside-archive__item-list">
                                            3月
                                        </a>
                                        <a href="" class="aside-archive__item-list">
                                            2月
                                        </a>
                                        <a href="" class="aside-archive__item-list">
                                            1月
                                        </a>
                                    </div>
                                </details>
                                <details class="aside-archive__item js-details">
                                    <summary class="js-summary">2022</summary>
                                    <div class="aside-archive__item-lists">
                                        <a href="" class="aside-archive__item-list">
                                            3月
                                        </a>
                                        <a href="" class="aside-archive__item-list">
                                            2月
                                        </a>
                                        <a href="" class="aside-archive__item-list">
                                            1月
                                        </a>
                                    </div>
                                </details>
                            </div><!-- aside-archive__items-->
                        </div><!-- aside__content aside-archive -->

                    </aside>
                </div>
            </div><!-- inner -->
        </div>


        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>