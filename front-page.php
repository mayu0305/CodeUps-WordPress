<?php get_header(); ?>

  <main class="main">
    <div class="fv">
      <div class="fv__img-wrap js-fv-swiper">
        <ul class="swiper-wrapper">
            <li class="swiper-slide fv__img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/index/fv01_pc.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/index/fv01_sp.webp" alt="トップイメージ画像" decoding="async">
              </picture>
            </li>
            <li class="swiper-slide fv__img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/index/fv02_pc.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/index/fv02_sp.webp" alt="トップイメージ画像" decoding="async">
              </picture>
            </li>
            <li class="swiper-slide fv__img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/index/fv03_pc.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/index/fv03_sp.webp" alt="トップイメージ画像" decoding="async">
              </picture>
            </li>
            <li class="swiper-slide fv__img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/index/fv04_pc.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/index/fv04_sp.webp" alt="トップイメージ画像" decoding="async">
              </picture>
            </li>
        </ul>
      </div><!-- fv__img-wrap js-fv-swiper -->
      <div class="fv__text">
        <span class="fv__text-main">DIVING</span>
        <span class="fv__text-sub">into the ocean</span>
      </div><!-- fv__text -->
    </div><!-- fv -->

    <section class="top-campaign top-section top-section--campaign">
      <div class="inner">
        <div class="campaign__inner">
          <div class="section-title">
            <span class="section-title__sub" aria-hidden="true">Campaign</span>
            <h2 class="section-title__main">キャンペーン</h2>
          </div>
          <div class="top-campaign__contents">
            <div class="top-campaign__slider js-campaign-swiper">
              <ul class="swiper-wrapper top-campaign__items">
                  <li class="swiper-slide  top-campaign__item">
                    <div class="campaign-card">
                      <div class="campaign-card__content">
                        <div class="campaign-card__content-header">
                          <span class="card-tag">
                            ライセンス講習
                          </span>
                          <h3 class="campaign-card__content-title">
                            ライセンス取得
                          </h3>
                        </div>
                        <div class="campaign-card__content-body">
                          <span class="campaign-card__content-desc">
                            全部コミコミ(お一人様)
                          </span>
                          <div class="campaign-card__content-price">
                            <span class="campaign-card__content-price-regular">¥56,000</span>
                            <span class="campaign-card__content-price-sale">¥46,000</span>
                          </div>
                        </div>
                      </div><!-- campaign-card__content-->
                      <figure class="campaign-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign01.webp" alt="海中を泳ぐ沢山の熱帯魚の写真" decoding="async" loading="lazy">
                      </figure>
                    </div><!-- campaign-card-->
                  </li>
                  <li class="swiper-slide  top-campaign__item">
                    <div class="campaign-card">
                      <div class="campaign-card__content">
                        <div class="campaign-card__content-header">
                          <span class="card-tag">
                            体験ダイビング
                          </span>
                          <h3 class="campaign-card__content-title">
                            貸切体験ダイビング
                          </h3>
                        </div>
                        <div class="campaign-card__content-body">
                          <span class="campaign-card__content-desc">
                            全部コミコミ(お一人様)
                          </span>
                          <div class="campaign-card__content-price campaign-price">
                            <span class="campaign-card__content-price-regular">¥24,000</span>
                            <span class="campaign-card__content-price-sale">¥18,000</span>
                          </div>
                        </div>
                      </div><!-- campaign-card__content-->
                      <figure class="campaign-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign02.webp" alt="海上に浮かぶ船の写真" decoding="async" loading="lazy">
                      </figure>
                    </div><!-- campaign-card-->
                  </li>
                  <li class="swiper-slide  top-campaign__item">
                    <div class="campaign-card">
                      <div class="campaign-card__content">
                        <div class="campaign-card__content-header">
                          <span class="card-tag">
                            体験ダイビング
                          </span>
                          <h3 class="campaign-card__content-title">
                            ナイトダイビング
                          </h3>
                        </div>
                        <div class="campaign-card__content-body">
                          <span class="campaign-card__content-desc">
                            全部コミコミ(お一人様)
                          </span>
                          <div class="campaign-card__content-price campaign-price">
                            <span class="campaign-card__content-price-regular">¥10,000</span>
                            <span class="campaign-card__content-price-sale">¥8,000</span>
                          </div>
                        </div>
                      </div><!-- campaign-card__content-->
                      <figure class="campaign-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign03.webp" alt="夜の海中を漂うクラゲの写真" decoding="async" loading="lazy">
                      </figure>
                    </div><!-- campaign-card-->
                  </li>
                  <li class="swiper-slide  top-campaign__item">
                    <div class="campaign-card">
                      <div class="campaign-card__content">
                        <div class="campaign-card__content-header">
                          <span class="card-tag">
                            ファンダイビング
                          </span>
                          <h3 class="campaign-card__content-title">
                            貸切ファンダイビング
                          </h3>
                        </div>
                        <div class="campaign-card__content-body">
                          <span class="campaign-card__content-desc">
                            全部コミコミ(お一人様)
                          </span>
                          <div class="campaign-card__content-price campaign-price">
                            <span class="campaign-card__content-price-regular">¥20,000</span>
                            <span class="campaign-card__content-price-sale">¥16,000</span>
                          </div>
                        </div>
                      </div><!-- campaign-card__content-->
                      <figure class="campaign-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign04.webp" alt="ダイビングの講習を受けている写真" decoding="async" loading="lazy">
                      </figure>
                    </div><!-- campaign-card-->
                  </li>
                </ul>
            </div><!-- top-campaign__slider -->
            <div class="top-campaign__button u-desktop">
              <div class="swiper-button-prev top-campaign__button-prev"></div>
              <div class="swiper-button-next top-campaign__button-next"></div>
            </div>
            <div class="top-campaign__link">
              <a class="link-button" href="">
                <span class="link-button__text">View more</span>
                <span class="link-button__arrow">
                </span>
              </a>
            </div>
          </div><!-- top-campaign__contents -->
        </div>
      </div>
    </section><!-- top-campaign -->

    <section class="top-aboutAs top-section">
      <div class="inner">
        <div class="section-title">
          <span class="section-title__sub" aria-hidden="true">About us</span>
          <h2 class="section-title__main">私たちについて</h2>
        </div>
        <div class="top-aboutAs__content aboutAs-intro">
          <div class="aboutAs-intro__img">
            <figure class="aboutAs-intro__img-main">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/about-us02.webp" alt="海中にいる熱帯魚の写真" decoding="async" loading="lazy">
            </figure>
            <figure class="aboutAs-intro__img-sub">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us/about-us01.webp" alt="屋根に置かれたシーサーの写真" decoding="async" loading="lazy">
            </figure>
          </div><!-- aboutAs-intro__img-->
          <div class="aboutAs-intro__text">
            <h3 class="aboutAs-intro__text-title">
              Dive into<br>the Ocean
            </h3>
            <div class="aboutAs-intro__text-wrap">
              <div class="aboutAs-intro__text-desc">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </div>
              <div class="aboutAs-intro__text-link">
                <a class="link-button" href="">
                  <span class="link-button__text">View more</span>
                  <span class="link-button__arrow">
                  </span>
                </a>
              </div>
            </div>
          </div><!-- aboutAs-intro__text -->
        </div><!-- top-aboutAs__content -->
      </div>
    </section><!-- top-aboutAs -->

    <section class="top-info top-section">
      <div class="inner">
        <div class="section-title">
          <span class="section-title__sub" aria-hidden="true">Information</span>
          <h2 class="section-title__main">ダイビング情報</h2>
        </div>
        <div class="top-info__content">
          <div class="top-info__content-text top-info-text">
            <h3 class="top-info-text__title">
              ライセンス講習
            </h3>
            <div class="top-info-text__desc">
              当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
            </div>
            <div class="top-info-text__link">
              <a class="link-button" href="">
                <span class="link-button__text">View more</span>
                <span class="link-button__arrow">
                </span>
              </a>
            </div>
          </div><!-- top-info__content-text top-info-text -->
          <figure class="top-info__content-img js-scroll">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/index/top-information.webp" alt="海の中を泳ぐ熱帯魚の写真" decoding="async" loading="lazy">
          </figure><!-- top-info__content-img -->
        </div><!-- top-information__content -->
      </div>
    </section><!-- top-information -->

    <section class="top-blog">
      <div class="inner">
        <div class="section-title section-title--white">
          <span class="section-title__sub" aria-hidden="true">Blog</span>
          <h2 class="section-title__main">ブログ</h2>
        </div>
        <article class="top-blog__items blog-cards">
          <a href="" class="blog-cards__item blog-card">
            <div class="blog-card__content">
              <time class="blog-card__content-date" datetime="2023-11-17">
                2023.11/17
              </time>
              <h3 class="blog-card__content-title">
                ライセンス取得
              </h3>
              <p class="blog-card__content-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div><!-- blog-card__content -->
            <figure class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-post01.webp" alt="サンゴの写真" decoding="async" loading="lazy">
            </figure>
          </a><!-- blog-card -->
          <a href="" class="blog-cards__item blog-card">
            <div class="blog-card__content">
              <time class="blog-card__content-date" datetime="2023-11-17">
                2023.11/17
              </time>
              <h3 class="blog-card__content-title">
                ウミガメと泳ぐ
              </h3>
              <p class="blog-card__content-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div><!-- blog-card__content -->
            <figure class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-post02.webp" alt="ウミガメの写真" decoding="async" loading="lazy">
            </figure>
          </a><!-- blog-card -->
          <a href="" class="blog-cards__item blog-card">
            <div class="blog-card__content">
              <time class="blog-card__content-date" datetime="2023-11-17">
                2023.11/17
              </time>
              <h3 class="blog-card__content-title">
                カクレクマノミ
              </h3>
              <p class="blog-card__content-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div><!-- blog-card__content -->
            <figure class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-post03.webp" alt="カクレクマノミの写真" decoding="async" loading="lazy">
            </figure>
          </a><!-- blog-card -->
        </article><!-- top-blog__items -->

        <div class="top-blog__link">
          <a class="link-button" href="">
            <span class="link-button__text">View more</span>
            <span class="link-button__arrow">
            </span>
          </a>
        </div>
    </div>
    </section><!-- top-blog -->

    <section class="top-voice top-section">
      <div class="inner">
        <div class="section-title">
          <span class="section-title__sub" aria-hidden="true">Voice</span>
          <h2 class="section-title__main">お客様の声</h2>
        </div>
        <ul class="top-voice__items voice-cards">
          <li class="voice-cards__item voice-card">
            <div class="voice-card__header">
              <div class="voice-card__header-text">
                <div class="voice-card__header-status">
                  <span class="voice-card__header-demographic">
                    20代(女性)
                  </span>
                  <span class="card-tag">
                    ライセンス講習
                  </span>
                </div>
                <h3 class="voice-card__header-title">
                  ここにタイトルが入ります。ここにタイトル
                </h3>
              </div><!--voice-card__header-text -->
              <figure class="voice-card__header-img js-scroll">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice/voice01.webp" alt="ライセンス講習を受けた20代女性の写真" decoding="async" loading="lazy">
              </figure>
            </div><!--voice-card__header -->
            <div class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。
            </div>
          </li><!-- voice-card -->
          <li class="voice-card voice-cards__item">
            <div class="voice-card__header">
              <div class="voice-card__header-text">
                <div class="voice-card__header-status">
                  <span class="voice-card__header-demographic">
                    20代(男性)
                  </span>
                  <span class="card-tag">
                    ファンダイビング
                  </span>
                </div>
                <h3 class="voice-card__header-title">
                  ここにタイトルが入ります。ここにタイトル
                </h3>
              </div><!--voice-card__header-text -->
              <figure class="voice-card__header-img js-scroll">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice/voice02.webp" alt="ファンダイビングコースを受けた20代男性の写真" decoding="async" loading="lazy">
              </figure>
            </div><!--voice-card__header -->
            <div class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。
            </div>
          </li><!-- voice-card -->
        </ul><!-- top-voice__items -->
        <div class="top-voice__link">
          <a class="link-button" href="">
            <span class="link-button__text">View more</span>
            <span class="link-button__arrow">
            </span>
          </a>
        </div>
      </div>
    </section><!-- top-voice -->

    <section class="top-price top-section">
      <div class="inner">
        <div class="section-title">
          <span class="section-title__sub" aria-hidden="true">Price</span>
          <h2 class="section-title__main">料金一覧</h2>
        </div>
        <div class="top-price__contents">
          <ul class="top-price__contents-items top-price-lists">
            <li class="top-price-list">
              <h3 class="top-price-list__title">
                ライセンス講習
              </h3>
              <dl class="top-price-list__items">
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">オープンウォーターダイバーコース</dt>
                  <dd class="top-price-list__item-desc">¥50,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">アドバンスドオープンウォーターコース</dt>
                  <dd class="top-price-list__item-desc">¥60,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">レスキュー＋EFRコース</dt>
                  <dd class="top-price-list__item-desc">¥70,000</dd>
                </div>
              </dl>
            </li>
            <li class="top-price-list">
              <h3 class="top-price-list__title">
                体験ダイビング
              </h3>
              <dl class="top-price-list__items">
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">ビーチ体験ダイビング(半日)</dt>
                  <dd class="top-price-list__item-desc">¥7,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">ビーチ体験ダイビング(1日)</dt>
                  <dd class="top-price-list__item-desc">¥14,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">ボート体験ダイビング(半日)</dt>
                  <dd class="top-price-list__item-desc">¥10,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">ボート体験ダイビング(1日)</dt>
                  <dd class="top-price-list__item-desc">¥18,000</dd>
                </div>
              </dl>
            </li>
            <li class="top-price-list">
              <h3 class="top-price-list__title">
                ファンダイビング
              </h3>
              <dl class="top-price-list__items">
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">ビーチダイビング(2ダイブ)</dt>
                  <dd class="top-price-list__item-desc">¥14,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">ボートダイビング(2ダイブ)</dt>
                  <dd class="top-price-list__item-desc">¥18,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">スペシャルダイビング(2ダイブ)</dt>
                  <dd class="top-price-list__item-desc">¥24,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">ナイトダイビング(1ダイブ)</dt>
                  <dd class="top-price-list__item-desc">¥10,000</dd>
                </div>
              </dl>
            </li>
            <li class="top-price-list">
              <h3 class="top-price-list__title">
                スペシャルダイビング
              </h3>
              <dl class="top-price-list__items">
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">貸切ダイビング(2ダイブ)</dt>
                  <dd class="top-price-list__item-desc">¥24,000</dd>
                </div>
                <div class="top-price-list__item">
                  <dt class="top-price-list__item-term">1日ダイビング(3ダイブ)</dt>
                  <dd class="top-price-list__item-desc">¥32,000</dd>
                </div>
              </dl>
            </li>
          </ul>
          <figure class="top-price__img js-scroll">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/index/top-price_pc.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/index/top-price_sp.webp" alt="海中で泳ぐ魚・ウミガメの写真" decoding="async">
            </picture>
          </figure>
        </div><!-- top-price__contents -->
        <div class="top-price__link">
          <a class="link-button" href="">
            <span class="link-button__text">View more</span>
            <span class="link-button__arrow">
            </span>
          </a>
        </div>
      </div>
    </section><!-- top-price-->

    <?php get_template_part( 'template-parts/section-contact' ); ?>
  </main>

<?php get_footer(); ?>


