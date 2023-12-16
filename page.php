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

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

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