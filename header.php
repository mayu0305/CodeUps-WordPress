<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
<?php  wp_head(); ?>
</head>
<body>
  <header class="header js-header">
    <div class="header__content">
      <h1 class="header__logo">
        <a href="https://lien-create.com/new-codeups/">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo--white.svg" alt="CodeUps" decoding="async">
        </a>
      </h1>
      <nav class="header__nav  u-desktop">
        <ul class="header__nav-items">
          <li class="header__nav-item">
            <a href="page-campaign.html">キャンペーン
              <span aria-hidden="true">Campaign</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="page-aboutus.html">私たちについて
              <span aria-hidden="true">About us</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="page-information.html">ダイビング情報
              <span aria-hidden="true">Information</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="page-blog.html">ブログ
              <span aria-hidden="true">Blog</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="page-voice.html">お客様の声
              <span aria-hidden="true">Voice</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="page-price.html">料金一覧
              <span aria-hidden="true">Price</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="page-faq.html">よくある質問
              <span aria-hidden="true">FAQ</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="page-contact.html">お問合せ
              <span aria-hidden="true">Contact</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="header__nav-sp js-drawer-menu" id="global-nav">
        <div class="inner">
          <nav class="nav-menu">
            <div class="nav-menu__half">
              <div class="nav-menu__quarter">
                <ul class="nav-menu__items">
                  <li class="nav-menu__item">
                    <a href="page-campaign.html">キャンペーン</a>
                  </li>
                  <li class="nav-menu__item sub-menu">
                    <ul class="sub-menu__items">
                      <li class="sub-menu__item">
                        <a href="page-campaign.html">ライセンス取得</a>
                      </li>
                      <li class="sub-menu__item">
                        <a href="page-campaign.html">ファンダイビング</a>
                      </li>
                      <li class="sub-menu__item">
                        <a href="page-campaign.html">体験ダイビング</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-aboutus.html">私たちについて</a>
                  </li>
                </ul>
              </div><!-- nav-menu__quarter -->
              <div class="nav-menu__quarter">
                <ul class="nav-menu__items">
                  <li class="nav-menu__item">
                    <a href="page-information.html">ダイビング情報</a>
                  </li>
                  <li class="nav-menu__item sub-menu">
                    <ul class="sub-menu__items">
                      <li class="sub-menu__item">
                        <a href="page-information.html?tab=tab1">ライセンス講習</a>
                      </li>
                      <li class="sub-menu__item">
                        <a href="page-information.html?tab=tab2">ファンダイビング</a>
                      </li>
                      <li class="sub-menu__item">
                        <a href="page-information.html?tab=tab3">体験ダイビング</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-blog.html">ブログ</a>
                  </li>
                </ul>
              </div><!-- nav-menu__quarter -->
            </div><!-- nav-menu__half -->
            <div class="nav-menu__half">
              <div class="nav-menu__quarter">
                <ul class="nav-menu__items">
                  <li class="nav-menu__item">
                    <a href="page-voice.html">お客様の声</a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-price.html">料金一覧</a>
                  </li>
                  <li class="nav-menu__item sub-menu">
                    <ul class="sub-menu__items">
                      <li class="sub-menu__item">
                        <a href="page-price.html#priceLlicense">ライセンス講習</a>
                      </li>
                      <li class="sub-menu__item">
                        <a href="page-price.html#price-Experience">体験ダイビング</a>
                      </li>
                      <li class="sub-menu__item">
                        <a href="page-price.html#priceFan">ファンダイビング</a>
                      </li>
                      <li class="sub-menu__item">
                        <a href="page-price.html#priceSpecial">スペシャルダイビング</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div><!-- nav-menu__quarter -->
              <div class="nav-menu__quarter">
                <ul class="nav-menu__items">
                  <li class="nav-menu__item">
                    <a href="page-faq.html">よくある質問</a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-privacy-policy.html">プライバシー<span class="text-block">ポリシー</span></a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-terms-ofservice.html">利用規約</a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-sitemap.html">サイトマップ</a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-contact.html">お問い合わせ</a>
                  </li>
                </ul>
              </div><!-- nav-menu__quarter -->
            </div><!-- nav-menu__half -->
          </nav>
        </div>
      </div>

      <button type="button" id="MenuButton" class="js-drawer-open drower-button" aria-controls="global-nav" aria-expanded="false">
        <span class="drower-button__line">
          <span class="visually-hidden">
            メニューを開閉するボタン
          </span>
        </span>
      </button>
    </div>

  </header>