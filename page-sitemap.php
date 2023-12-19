<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_others_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_others_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">Site MAP</h1>
        </div>

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

      <div class="page-content page-content--sitemap">
          <div class="inner">

              <div class="sitemap-content">
                <?php get_template_part( 'template-parts/nav-menu' ); ?>
              </div>

          </div><!-- inner -->
      </div><!-- page-content -->

      <?php get_template_part( 'template-parts/section-contact' ); ?>

  </main>

<?php get_footer(); ?>