<?php get_header(); ?>

    <main class="main">

    <div class="page-header">
        <div class="page-header__img">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_contact_pc.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_contact_sp.webp" alt="" decoding="async">
            </picture>
        </div>
        <h1 class="page-header__title">Contact</h1>
    </div>

    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <div class="page-content contact">
        <div class="inner inner--narrow">


            <div class="contact__form">
                <?php echo do_shortcode('[contact-form-7 id="88893be" title="form"]'); ?>

            </div><!-- contact__form -->

        </div><!-- inner -->
    </div><!-- page-content -->


    </main>

<?php get_footer(); ?>