<?php get_header(); ?>

<!-- アクセスをカウント -->

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

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="page-content page-content--blog-post blog-content">
                <div class="inner">
                    <div class="blog-content__body">
                        <div class="blog-content__main blog-content__main--post">
                            <div class="blog-content__main-items post">
                                <div class="post__content">
                                    <time class="blog-card__content-date" datetime="<?php the_time('c'); ?>">
                                        <?php the_time('Y/m/d'); ?>
                                    </time>
                                    <h2 class="post__content-title">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="post__content-body">
                                        <?php the_content(); ?>
                                    </div><!-- post__content-body -->
                                </div><!-- post__content -->
                            </div><!-- blog-content__main-items post -->

                            <div class="blog-content__page-nav blog-content__page-nav--post">
                                <nav class="navigation pagination" aria-label="投稿">
                                    <h2 class="screen-reader-text visually-hidden">投稿ナビゲーション</h2>
                                    <div class="pagination__links">
                                        <?php
                                            $prev = get_previous_post();
                                            $prev_url = $prev ? get_permalink($prev->ID) : false;
                                            $next = get_next_post();
                                            $next_url = $next ? get_permalink($next->ID) : false;
                                        ?>

                                        <?php if($prev): ?>
                                            <a class="previouspostslink" href="<?php echo $prev_url; ?>"></a>
                                        <?php endif; ?>
                                        <?php if($next): ?>
                                        <a class="nextpostslink" href="<?php echo $next_url; ?>"></a>
                                        <?php endif; ?>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <?php get_sidebar(); ?>

                    </div><!-- blog-content__body -->
                </div><!-- inner -->
            </div>

        <?php
            endwhile;
            endif;
        ?>

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>