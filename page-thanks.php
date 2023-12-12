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

    <div class="breadcrumb">
        <div class="inner breadcrumb__inner">
            <ul class="breadcrumb__items">
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="./" title="Top" itemprop="item"><span itemprop="name">Top</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                  <a href=".contact.html" title="お問い合わせ" itemprop="item"><span itemprop="name">お問い合わせ</span></a>
                  <meta itemprop="position" content="2">
              </li>
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="name">送信完了</span>
                    <meta itemprop="position" content="3">
                </li>
            </ul>
        </div>
    </div>

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