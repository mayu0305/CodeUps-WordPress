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

    <div class="page-content thanks">
        <div class="inner">

          <h2 class="thanks__title">
            お問い合わせ内容を送信完了しました。
          </h2>
          <p class="thanks__text">
            このたびは、お問い合わせ頂き
            <span class="text-block">誠にありがとうございます。</span><br>
            お送り頂きました内容を確認の上、
            <span class="text-block">3営業日以内に折り返し</span>
            <span class="text-block">ご連絡させて頂きます。</span><br>
            また、ご記入頂いたメールアドレスへ、
            <span class="text-block">自動返信の確認メールをお送りしております。</span>
          </p><!-- thanks__text -->

        </div><!-- inner -->
    </div><!-- page-content -->

  </main>

<?php get_footer(); ?>