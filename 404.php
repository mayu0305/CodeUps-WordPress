<?php get_header(); ?>

    <main class="main error-404">
        <div class="breadcrumb breadcrumb--404">
            <div class="inner breadcrumb__inner">
                <ul class="breadcrumb__items">
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="./" title="Top" itemprop="item"><span itemprop="name">Top</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <span itemprop="name">404</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </div>
        </div>

        <div class="page-content page-content--404">
            <div class="inner">
                <div class="error-404__area">

                    <h1 class="error-404__title">404</h1>
                    <p class="error-404__text">
                        申し訳ありません。<br>
                        お探しのページが見つかりません。
                    </p>
                    <div class="error-404____link">
                        <a class="link-button link-button--404" href="/">
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