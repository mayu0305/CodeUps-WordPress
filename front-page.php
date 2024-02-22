<?php get_header(); ?>

  <main class="main">
    <div class="fv">
      <div class="fv__img-wrap js-fv-swiper">
        <ul class="swiper-wrapper">
            <li class="swiper-slide fv__img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_field('fv-image_pc01')['url']; ?>">
                <img src="<?php echo get_field('fv-image_sp01')['url']; ?>" alt="<?php echo get_field('fv-image_sp01')['alt']; ?>" decoding="async">
              </picture>
            </li>
            <li class="swiper-slide fv__img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_field('fv-image_pc02')['url']; ?>">
                <img src="<?php echo get_field('fv-image_sp02')['url']; ?>" alt="<?php echo get_field('fv-image_sp02')['alt']; ?>" decoding="async">
              </picture>
            </li>
            <li class="swiper-slide fv__img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_field('fv-image_pc03')['url']; ?>">
                <img src="<?php echo get_field('fv-image_sp03')['url']; ?>" alt="<?php echo get_field('fv-image_sp03')['alt']; ?>" decoding="async">
              </picture>
            </li>
            <li class="swiper-slide fv__img">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_field('fv-image_pc04')['url']; ?>">
                <img src="<?php echo get_field('fv-image_sp04')['url']; ?>" alt="<?php echo get_field('fv-image_sp04')['alt']; ?>" decoding="async">
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
                <?php
                  $args = array(
                      'post_type' => 'campaign',
                      'post_status' => 'publish',
                      'order' => 'DESC'
                  );
                  $the_query = new WP_Query($args);
                  $taxonomy_slug = 'campaign_category';
                  $post_type_slug = 'campaign';
                  $terms = get_terms($taxonomy_slug);
                  if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();  ?>

                  <li class="swiper-slide  top-campaign__item">
                    <div class="campaign-card">
                      <div class="campaign-card__content">
                        <div class="campaign-card__content-header">
                          <span class="card-tag">
                          <?php
                              $cterms = get_the_terms(get_the_ID(), $taxonomy_slug);
                              if ($cterms && !is_wp_error($cterms)) :
                                  foreach ($cterms as $term) :
                                      echo esc_html($term->name);
                                  endforeach;
                              endif;
                              ?>
                          </span>
                          <h3 class="campaign-card__content-title">
                            <?php the_title(); ?>
                          </h3>
                        </div>
                        <div class="campaign-card__content-body">
                          <span class="campaign-card__content-desc">
                            全部コミコミ(お一人様)
                          </span>
                          <div class="campaign-card__content-price">
                            <span class="campaign-card__content-price-regular">¥<?php the_field('list-price'); ?></span>
                            <span class="campaign-card__content-price-sale">¥<?php the_field('campaign-price'); ?></span>
                          </div>
                        </div>
                      </div><!-- campaign-card__content-->
                      <figure class="campaign-card__img">
                        <?php $image = get_field('image'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                        <?php endif; ?>
                      </figure>
                    </div><!-- campaign-card-->
                  </li>
                <?php
                  endwhile;
                  endif;
                  wp_reset_postdata();
                ?>
                </ul>
            </div><!-- top-campaign__slider -->
            <div class="top-campaign__button u-desktop">
              <div class="swiper-button-prev top-campaign__button-prev"></div>
              <div class="swiper-button-next top-campaign__button-next"></div>
            </div>
            <div class="top-campaign__link">
              <a class="link-button" href="<?php echo esc_url( home_url() ); ?>/campaign/">
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
                <a class="link-button" href="<?php echo esc_url( home_url() ); ?>/aboutus/">
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
              <a class="link-button" href="<?php echo esc_url( home_url() ); ?>/information/">
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
          <?php
              $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'posts_per_page' => 3,
                  'order' => 'DESC'
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();  ?>

              <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                <div class="blog-card__content">
                  <time class="blog-card__content-date" datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time( get_option( 'date_format' ) ); ?>
                  </time>
                  <h3 class="blog-card__content-title">
                    <?php echo get_the_title(); ?>
                  </h3>
                  <p class="blog-card__content-text">
                    <?php
                        $content = get_the_content();
                        $content = wp_strip_all_tags( $content );
                        $content = strip_shortcodes( $content );
                        $content = wp_trim_words( $content, 90, '…' ); // 文字制限
                        echo $content;
                    ?>
                  </p>
                </div><!-- blog-card__content -->
                <figure class="blog-card__img">
                  <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail('full'); ?>
                      <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/noimage.webp" alt="デフォルト画像" decoding="async" loading="lazy">
                  <?php endif ; ?>
                </figure>
              </a><!-- blog-card -->
          <?php
              endwhile;
              endif;
              wp_reset_postdata();
          ?>
        </article><!-- top-blog__items -->

        <div class="top-blog__link">
          <a class="link-button" href="<?php echo esc_url( home_url() ); ?>/blog/">
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
          <?php
            $args = array(
                'post_type' => 'voice',
                'post_status' => 'publish',
                'posts_per_page' => 2,
                'order' => 'DESC'
            );
            $the_query = new WP_Query($args);
            $taxonomy_slug = 'voice_category';
            $post_type_slug = 'voice';
            $terms = get_terms($taxonomy_slug);
            if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();  ?>

            <li class="voice-cards__item voice-card">
              <div class="voice-card__header">
                <div class="voice-card__header-text">
                  <div class="voice-card__header-status">
                    <span class="voice-card__header-demographic">
                    <?php if( get_field('age') == "10代") : ?>10代
                          <?php elseif( get_field('age') == "20代"): ?>20代
                          <?php elseif( get_field('age') == "30代"): ?>30代
                          <?php elseif( get_field('age') == "40代"): ?>40代
                          <?php elseif( get_field('age') == "50代"): ?>50代
                          <?php elseif( get_field('age') == "60代"): ?>60代
                          <?php elseif( get_field('age') == "70代"): ?>70代
                      <?php endif; ?>
                      (
                      <?php if( get_field('sex') == "女性"): ?>女性
                          <?php elseif( get_field('sex') == "男性"): ?>男性
                          <?php elseif( get_field('sex') == "未選択"): ?>未選択
                          <?php elseif( get_field('sex') == "カップル"): ?>カップル
                          <?php elseif( get_field('sex') == "夫婦"): ?>夫婦
                      <?php endif; ?>
                      )
                    </span>
                    <span class="card-tag">
                    <?php
                        $cterms = get_the_terms(get_the_ID(), $taxonomy_slug);
                        if ($cterms && !is_wp_error($cterms)) :
                            foreach ($cterms as $term) :
                                echo esc_html($term->name);
                            endforeach;
                        endif;
                        ?>
                    </span>
                  </div>
                  <h3 class="voice-card__header-title">
                    <!-- <?php the_title(); ?> -->
                    <?php echo wp_trim_words( get_the_title(), 19, '…' ); ?>
                  </h3>
                </div><!--voice-card__header-text -->
                <figure class="voice-card__header-img js-scroll">
                  <?php $image = get_field('image'); if( !empty($image) ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                  <?php endif; ?>
                </figure>
              </div><!--voice-card__header -->
              <div class="voice-card__text">
                <?php echo wp_trim_words( get_the_content(), 165, '…' ); ?>
              </div>
            </li><!-- voice-card -->
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>

        </ul><!-- top-voice__items -->
        <div class="top-voice__link">
          <a class="link-button" href="<?php echo esc_url( home_url() ); ?>/voice/">
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

          <?php
            for ($i = 1; $i <= 4; $i++) :
              $priceItems = SCF::get_option_meta('price-options', "price-item0$i");
              $programName = SCF::get_option_meta('price-options', "program0$i");

            // 空でない配列かつ中身が空でない場合
            if (!empty($priceItems) && !empty(array_filter($priceItems[0]))) :
          ?>

          <li class="top-price-list">
              <h3 class="top-price-list__title">
                <?php echo $programName; ?>
              </h3>
              <dl class="top-price-list__items">
                <?php foreach ($priceItems as $priceItem) : ?>
                  <?php
                    $course = $priceItem["course0$i"];
                    $price = $priceItem["price0$i"];
                  ?>

                  <div class="top-price-list__item">
                    <dt class="top-price-list__item-term">
                      <?php echo $course; ?>
                    </dt>
                    <dd class="top-price-list__item-desc">
                      ¥<?php echo $price; ?>
                    </dd>
                  </div>

                <?php endforeach; ?>
              </dl>
          </li>

          <?php endif;
            endfor;
          ?>

          </ul>
          <figure class="top-price__img js-scroll">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/index/top-price_pc.webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/index/top-price_sp.webp" alt="海中で泳ぐ魚・ウミガメの写真" decoding="async">
            </picture>
          </figure>
        </div><!-- top-price__contents -->
        <div class="top-price__link">
          <a class="link-button" href="<?php echo esc_url( home_url() ); ?>/price/">
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