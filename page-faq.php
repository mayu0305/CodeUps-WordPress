<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_faq_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_faq_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">FAQ</h1>
        </div>

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

        <div class="faq-content page-content">
            <div class="inner inner--narrow">
                <div class="faq-content__items">
                    <?php
                        $link_group = SCF::get('faq-list');
                        foreach ($link_group as $fields ) {
                    ?>
                        <details class="faq-content__item faq-item js-faqItem">
                            <summary class="faq-item__question js-faqQuestion">
                            <?php echo $fields['question']; ?>
                            </summary>
                            <div class="faq-item__answer js-faqAnswer">
                                <p class="faq-item__answer-text">
                                    <?php echo $fields['answer']; ?>
                                </p>
                            </div>
                        </details>
                    <?php } ?>
                </div>
            </div><!-- inner -->
        </div><!-- faq-content page-content -->

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>