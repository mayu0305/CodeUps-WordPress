<?php
/*
 * Template Name: 固定ページのテンプレート
 */
?>

<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_others_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_others_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">
                <?php if( is_page('12') ) : ?>
                    Privacy Policy
                <?php elseif ( is_page('10') ) :?>
                    Terms of Service
                <?php else: ?>
                <?php endif; ?>
            </h1>
        </div>

        <div class="breadcrumb">
            <div class="inner breadcrumb__inner">
                <ul class="breadcrumb__items">
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="./" title="Top" itemprop="item"><span itemprop="name">Top</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="name">プライバシーポリシー</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </div>
        </div>

        <div class="page-content">
            <div class="inner inner--policy-terms">
                <h2 class="policy-terms__title">
                    <?php the_title(); ?>
                </h2>
                <div class="policy-terms__body">
                    <?php the_content(); ?>
                </div>
            </div><!-- inner -->
        </div><!-- page-content -->

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>