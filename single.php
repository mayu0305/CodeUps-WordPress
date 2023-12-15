<?php get_header(); ?>

<!-- アクセスをカウント -->

    <main class="main">

      <div class="page-header">
          <div class="page-header__img">
              <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_blog_pc.webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_blog_sp.webp" alt="" decoding="async">
              </picture>
          </div>
          <h1 class="page-header__title">Blog</h1>
      </div>

      <div class="breadcrumb">
          <div class="inner breadcrumb__inner">
              <ul class="breadcrumb__items">
                  <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                      <a href="./" title="Top" itemprop="item"><span itemprop="name">Top</span></a>
                      <meta itemprop="position" content="1">
                  </li>
                  <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                      <a href="page-blog.html" title="ブログ一覧" itemprop="item"><span itemprop="name">ブログ一覧</span></a>
                      <meta itemprop="position" content="2">
                  </li>
                  <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                      <span itemprop="name">ブログ詳細</span>
                      <meta itemprop="position" content="3">
                  </li>
              </ul>
          </div>
      </div>

      <div class="page-content page-content--blog-post blog-content">
          <div class="inner">
              <div class="blog-content__body">
                  <div class="blog-content__main blog-content__main--post">
                      <div class="blog-content__main-items post">
                          <div class="post__content">
                              <time class="post__content-date" datetime="<?php the_time('Y-m-d'); ?>">
                              <?php the_time( get_option( 'date_format' ) ); ?>
                              </time>
                              <h2 class="post__content-title">
                                <?php the_title(); ?>
                              </h2>
                              <div class="post__content-body">
                                <?php the_content(); ?>
                              </div><!-- post__content-body -->
                          </div><!-- post__content -->
                      </div><!-- blog-content__main-items post -->
                      <div class="blog-content__page-nav blog-content__page-nav--post">
                          <nav class="navigation pagination" aria-label="投稿">
                              <h2 class="screen-reader-text visually-hidden">投稿ナビゲーション</h2>
                              <div class="pagination__links">
                                  <a class="prev page-numbers page-numbers--blog-post" href=""></a>
                                  <a class="next page-numbers page-numbers--blog-post" href=""></a>
                              </div>
                          </nav>
                      </div>
                  </div>

                  <aside class="aside blog-content__side">
                    <div class="aside__content popular-article">
                        <h2 class="aside__content-title">人気記事</h2>
                        <div class="popular-article__items">
                            <a href="" class="popular-article__item">
                                <div class="popular-article__item-text">
                                    <time class="popular-article__item-date" datetime="2023-11-17">2023.11/17</time>
                                    <h3 class="popular-article__item-title">ライセンス取得</h3>
                                </div>
                                <figure class="popular-article__item-img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-post04.webp" alt="熱帯魚の写真" decoding="async" loading="lazy">
                                </figure>
                            </a>
                            <a href="" class="popular-article__item">
                                <div class="popular-article__item-text">
                                    <time class="popular-article__item-date" datetime="2023-11-17">2023.11/17</time>
                                    <h3 class="popular-article__item-title">ウミガメと泳ぐ</h3>
                                </div>
                                <figure class="popular-article__item-img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-post02.webp" alt="ウミガメの写真" decoding="async" loading="lazy">
                                </figure>
                            </a>
                            <a href="" class="popular-article__item">
                                <div class="popular-article__item-text">
                                    <time class="popular-article__item-date" datetime="2023-11-17">2023.11/17</time>
                                    <h3 class="popular-article__item-title">カクレクマノミ</h3>
                                </div>
                                <figure class="popular-article__item-img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-post03.webp" alt="カクレクマノミの写真" decoding="async" loading="lazy">
                                </figure>
                            </a>
                        </div><!-- popular-article__items -->
                    </div><!-- aside__content popular-article -->

                    <div class="aside__content aside-voice">
                        <h2 class="aside__content-title">口コミ</h2>
                        <ul class="aside-voice__items">
                            <li class="aside-voice__item">
                                <div class="aside-voice__item-text">
                                    <span class="aside-voice-status">
                                        30代(カップル)
                                    </span>
                                    <h3 class="aside-voice__title">
                                        ここにタイトルが入ります。ここにタイトル
                                    </h3>
                                </div>
                                <figure class="aside-voice__img">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-voiceimg.webp" alt="30代カップルの写真" decoding="async" loading="lazy">
                                </figure>
                            </li>
                        </ul>
                        <div class="aside__content-link">
                            <a class="link-button" href="">
                                <span class="link-button__text">View more</span>
                                <span class="link-button__arrow">
                                </span>
                            </a>
                        </div>
                    </div><!-- aside__content aside-voice -->

                    <div class="aside__content aside-campaign">
                        <h2 class="aside__content-title">キャンペーン</h2>
                        <ul class="aside-campaign__items">
                            <li class="aside-campaign__item">
                                <div class="campaign-card aside-campaign__item-card">
                                    <div class="campaign-card__content campaign-card__content--blog">
                                        <div class="campaign-card__content-header">
                                            <h3 class="campaign-card__content-title campaign-card__content-title--blog">
                                                ライセンス取得
                                            </h3>
                                        </div>
                                        <!-- <div class="campaign-card__content-body"> -->
                                            <span class="campaign-card__content-desc campaign-card__content-desc--blog">
                                                全部コミコミ(お一人様)
                                            </span>
                                            <div class="campaign-card__content-price">
                                                <span class="campaign-card__content-price-regular campaign-card__content-price-regular--blog">¥56,000</span>
                                                <span class="campaign-card__content-price-sale campaign-card__content-price-sale--blog">¥46,000</span>
                                            </div>
                                        <!-- </div> -->
                                    </div><!-- campaign-card__content-->
                                    <figure class="campaign-card__img campaign-card__img--blog">
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign01.webp" alt="海中を泳ぐ沢山の熱帯魚の写真" decoding="async" loading="lazy">
                                    </figure>
                                </div><!-- campaign-card-->
                            </li>
                            <li class="aside-campaign__item">
                                <div class="campaign-card aside-campaign__item-card">
                                    <div class="campaign-card__content campaign-card__content--blog">
                                        <div class="campaign-card__content-header">
                                            <h3 class="campaign-card__content-title campaign-card__content-title--blog">
                                            貸切体験ダイビング
                                            </h3>
                                        </div>
                                        <!-- <div class="campaign-card__content-body"> -->
                                            <span class="campaign-card__content-desc campaign-card__content-desc--blog">
                                            全部コミコミ(お一人様)
                                            </span>
                                            <div class="campaign-card__content-price">
                                            <span class="campaign-card__content-price-regular campaign-card__content-price-regular--blog">¥24,000</span>
                                            <span class="campaign-card__content-price-sale campaign-card__content-price-sale--blog">¥18,000</span>
                                            </div>
                                        <!-- </div> -->
                                    </div><!-- campaign-card__content-->
                                    <figure class="campaign-card__img campaign-card__img--blog">
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign02.webp" alt="海上に浮かぶ船の写真" decoding="async" loading="lazy">
                                    </figure>
                                </div><!-- campaign-card-->
                            </li>
                        </ul><!-- aside-campaign__items -->
                        <div class="aside__content-link">
                            <a class="link-button" href="">
                                <span class="link-button__text">View more</span>
                                <span class="link-button__arrow">
                                </span>
                            </a>
                        </div>
                    </div><!-- aside__content aside-campaign -->

                    <div class="aside__content aside-archive">
                        <h2 class="aside__content-title">アーカイブ</h2>
                        <div class="aside-archive__items">
                            <details class="aside-archive__item">
                                <summary>2023</summary>
                                <ul class="aside-archive__item-lists">
                                    <li class="aside-archive__item-list">
                                        <a href="">3月</a>
                                    </li>
                                    <li class="aside-archive__item-list">
                                        <a href="">2月</a>
                                    </li>
                                    <li class="aside-archive__item-list">
                                        <a href="">1月</a>
                                    </li>
                                </ul>
                            </details>
                            <details class="aside-archive__item">
                                <summary>2022</summary>
                                <ul class="aside-archive__item-lists">
                                    <li class="aside-archive__item-list">
                                        <a href="">3月</a>
                                    </li>
                                    <li class="aside-archive__item-list">
                                        <a href="">2月</a>
                                    </li>
                                    <li class="aside-archive__item-list">
                                        <a href="">1月</a>
                                    </li>
                                </ul>
                            </details>
                        </div><!-- aside-archive__items-->
                    </div><!-- aside__content aside-archive -->

                </aside>
              </div>
          </div><!-- inner -->
      </div>


      <?php get_template_part( 'template-parts/section-contact' ); ?>

  </main>

<?php get_footer(); ?>