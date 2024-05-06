<?php get_header(); ?>

    <main class="main error-404">

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

        <div class="page-content page-content--404">
            <div class="inner">
                <div class="error-404__area">

                    <h1 class="error-404__title">404</h1>
                    <p class="error-404__text">
                        申し訳ありません。<br>
                        お探しのページが見つかりません。
                    </p>
                    <div class="error-404____link">
                        <a class="link-button link-button--404" href="<?php echo esc_url( home_url('/') ); ?>">
                            <span class="link-button__text">Page TOP</span>
                            <span class="link-button__arrow link-button__arrow--white link-button__arrow--404">
                            </span>
                        </a>
                    </div>
                </div>

            </div><!-- inner -->
        </div><!-- page-content -->

    </main>

<?php get_footer(); ?>