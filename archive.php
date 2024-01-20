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

                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="blog-card blog-cards__item">
                                    <div class="blog-card__content">
                                        <time class="blog-card__content-date" datetime="<?php the_time('c'); ?>">
                                        <?php the_time('Y/m/d'); ?>
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
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/noimage.webp" alt="デフォルト画像" decoding="async" loading="lazy">
                                        <?php endif ; ?>
                                    </figure>
                                </a><!-- blog-card -->
                            <?php
                                endwhile;
                                endif;
                            ?>

                        </article><!-- blog-cards -->

                        <div class="blog-content__page-nav">
                            <nav class="navigation pagination" aria-label="投稿">
                                <h2 class="screen-reader-text visually-hidden">投稿ナビゲーション</h2>
                                <div class="pagination__links">
                                    <?php wp_pagenavi(); ?>
                                </div>
                            </nav>
                        </div>

                    </div><!-- blog-content__main -->

                    <?php get_template_part( 'template-parts/aside' ); ?>

                </div><!-- blog-content__body -->
            </div><!-- inner -->
        </div><!-- blog-content page-content -->


        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>