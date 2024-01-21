<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: https://ogp.me/ns#">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
<?php  wp_head(); ?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7E2J6GNNMG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7E2J6GNNMG');
</script>
</head>
<body>
  <header class="header js-header">
    <div class="header__content">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url()); ?>/">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo--white.svg" alt="CodeUps" decoding="async">
        </a>
      </h1>
      <nav class="header__nav  u-desktop">
        <ul class="header__nav-items">
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/campaign/">キャンペーン
              <span aria-hidden="true">Campaign</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/aboutus/">私たちについて
              <span aria-hidden="true">About us</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/information/">ダイビング情報
              <span aria-hidden="true">Information</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/blog/">ブログ
              <span aria-hidden="true">Blog</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/voice/">お客様の声
              <span aria-hidden="true">Voice</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/price/">料金一覧
              <span aria-hidden="true">Price</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/faq/">よくある質問
              <span aria-hidden="true">FAQ</span>
            </a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/contact/">お問合せ
              <span aria-hidden="true">Contact</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="header__nav-sp js-drawer-menu" id="global-nav">
        <div class="inner">
          <?php get_template_part( 'template-parts/nav-menu' ); ?>
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