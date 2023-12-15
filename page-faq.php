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

    <div class="breadcrumb">
        <div class="inner breadcrumb__inner">
            <ul class="breadcrumb__items">
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="./" title="Top" itemprop="item"><span itemprop="name">Top</span></a>
                    <meta itemprop="position" content="1">
                </li>
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="name">よくある質問</span>
                    <meta itemprop="position" content="2">
                </li>
            </ul>
        </div>
    </div>

    <div class="faq-content page-content">
        <div class="inner inner--narrow">
          <div class="faq-content__items">
            <details class="faq-content__item faq-item js-faqItem">
                <summary class="faq-item__question js-faqQuestion">ここに質問が入ります。</summary>
                <div class="faq-item__answer js-faqAnswer">
                    <p class="faq-item__answer-text">
                        ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                    </p>
                </div>
            </details>
            <details class="faq-content__item faq-item js-faqItem">
                <summary class="faq-item__question js-faqQuestion">ここに質問が入ります。</summary>
                <div class="faq-item__answer js-faqAnswer">
                    <p class="faq-item__answer-text">
                        ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                    </p>
                </div>
            </details>
            <details class="faq-content__item faq-item js-faqItem">
                <summary class="faq-item__question js-faqQuestion">ここに質問が入ります。</summary>
                <div class="faq-item__answer js-faqAnswer">
                    <p class="faq-item__answer-text">
                        ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                    </p>
                </div>
            </details>
            <details class="faq-content__item faq-item js-faqItem">
                <summary class="faq-item__question js-faqQuestion">ここに質問が入ります。</summary>
                <div class="faq-item__answer js-faqAnswer">
                    <p class="faq-item__answer-text">
                        ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                    </p>
                </div>
            </details>
            <details class="faq-content__item faq-item js-faqItem">
                <summary class="faq-item__question js-faqQuestion">ここに質問が入ります。</summary>
                <div class="faq-item__answer js-faqAnswer">
                    <p class="faq-item__answer-text">
                        ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                    </p>
                </div>
            </details>
            <details class="faq-content__item faq-item js-faqItem">
                <summary class="faq-item__question js-faqQuestion">ここに質問が入ります。</summary>
                <div class="faq-item__answer js-faqAnswer">
                    <p class="faq-item__answer-text">
                        ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                    </p>
                </div>
            </details>
            <details class="faq-content__item faq-item js-faqItem">
                <summary class="faq-item__question js-faqQuestion">ここに質問が入ります。</summary>
                <div class="faq-item__answer js-faqAnswer">
                    <p class="faq-item__answer-text">
                        ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります
                    </p>
                </div>
            </details>
          </div>

        </div><!-- inner -->
    </div>

    <?php get_template_part( 'template-parts/section-contact' ); ?>

  </main>

  <?php get_footer(); ?>