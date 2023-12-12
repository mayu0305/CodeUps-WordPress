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
                  <a href="./" title="お問い合わせ" itemprop="item"><span itemprop="name">お問い合わせ</span></a>
                  <meta itemprop="position" content="2">
                </li>
                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="name">お問い合わせエラー</span>
                    <meta itemprop="position" content="3">
                </li>
            </ul>
        </div>
    </div>

    <div class="page-content contact">
        <div class="inner inner--narrow">

          <div class="contact__form">
              <form action="" method="post" class="wpcf7-form init" aria-label="コンタクトフォーム" novalidate="novalidate" data-status="init">
                  <ul class="contact__form-error-items">
                    <li class="contact__form-error-item">
                      必須項目が入力されていません。
                      <span class="text-block">入力してください。</span>
                    </li>
                  </ul>
                <dl class="contact__form-items contact__form-items--error">
                      <div class="contact__form-item contact__form-item--error">
                          <dt class="contact__form-item-term">
                              お名前
                              <span>必須</span>
                          </dt>
                          <dd class="contact__form-item-desc">
                              <span>
                                  <input type="text" aria-required="true" aria-invalid="false" placeholder="沖縄　太郎" value name="your-name">
                              </span>
                          </dd>
                      </div><!-- contact__form-item -->
                      <div class="contact__form-item">
                          <dt class="contact__form-item-term">
                              メールアドレス
                              <span>必須</span>
                          </dt>
                          <dd class="contact__form-item-desc">
                              <span>
                                  <input type="text" aria-required="true" aria-invalid="false" placeholder="aaa000@ggmail.com" value name="your-email">
                              </span>
                          </dd>
                      </div><!-- contact__form-item -->
                      <div class="contact__form-item">
                          <dt class="contact__form-item-term">
                              電話番号
                              <span>必須</span>
                          </dt>
                          <dd class="contact__form-item-desc">
                              <span>
                                  <input type="text" aria-required="true" aria-invalid="false" placeholder="000-0000-0000" value name="your-phone">
                              </span>
                          </dd>
                      </div><!-- contact__form-item -->
                      <div class="contact__form-item">
                          <dt class="contact__form-item-term">
                              お問合せ項目
                              <span>必須</span>
                          </dt>
                          <dd class="contact__form-item-desc">
                              <label for="divingCourse">
                                  <input type="checkbox" name="inquiry-item[]" value="ダイビング講習について" id="divingCourse">
                                  <span>ダイビング講習について</span>
                              </label>
                              <label for="fanDiving">
                                  <input type="checkbox" name="inquiry-item[]" value="ファンデイビングについて" id="fanDiving">
                                  <span>ファンデイビングについて</span>
                              </label>
                              <label for="trialDiving">
                                  <input type="checkbox" name="inquiry-item[]" value="体験ダイビングについて" id="trialDiving">
                                  <span>体験ダイビングについて</span>
                              </label>
                          </dd>
                      </div><!-- contact__form-item -->
                      <div class="contact__form-item">
                          <dt class="contact__form-item-term">
                              キャンペーン
                          </dt>
                          <dd class="contact__form-item-desc">
                              <select name="campaign" aria-invalid="false">
                                  <option value="キャンペーン内容を選択">キャンペーン内容を選択</option>
                                  <option value="ライセンス取得">ライセンス取得</option>
                                  <option value="貸切体験ダイビング">貸切体験ダイビング</option>
                                  <option value="ナイトダイビング">ナイトダイビング</option>
                                  <option value="貸切ファンダイビング">貸切ファンダイビング</option>
                              </select>
                          </dd>
                      </div><!-- contact__form-item -->
                      <div class="contact__form-item">
                          <dt class="contact__form-item-term">
                              お問合せ内容
                              <span>必須</span>
                          </dt>
                          <dd class="contact__form-item-desc contact__form-item-desc--textarea">
                              <span>
                                  <textarea aria-required="true" aria-invalid="false" name="your-message" id="" cols="30" rows="16"></textarea>
                              </span>
                          </dd>
                      </div><!-- contact__form-item -->
                  </dl>
                  <div class="contact__form-consent">
                      <span data-name="check">
                          <label for="consent">
                              <input type="checkbox" name="consent" value="同意ボタン" id="consent">
                              <span>個人情報の取り扱いについて同意のうえ
                                <span class="text-block">送信します。</span></span>
                          </label>
                      </span>
                  </div><!-- contact__form-consent -->
                  <div class="contact-form__send">
                    <div class="link-button">
                        <input class="link-button__text link-button__text--send" type="submit" value="send">
                    <span class="link-button__arrow link-button__arrow--send"></span>
                </div>
            </div>
              </form>
          </div>

        </div><!-- inner -->
    </div><!-- page-content -->


  </main>

<?php get_footer(); ?>