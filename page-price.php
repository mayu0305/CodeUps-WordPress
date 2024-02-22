<?php get_header(); ?>

    <main class="main">

        <div class="page-header">
            <div class="page-header__img">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_price_pc.webp">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-header/page-header_price_sp.webp" alt="" decoding="async">
                </picture>
            </div>
            <h1 class="page-header__title">Price</h1>
        </div>

        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

        <div class="price-content page-content">
            <div class="inner inner--narrow">
                <ul class="price-content__items">

                <?php
                    for ($i = 1; $i <= 4; $i++) :
                    $priceItems = SCF::get_option_meta('price-options', "price-item0$i");
                    $programName = SCF::get_option_meta('price-options', "program0$i");

                    // 空でない配列かつ中身が空でない場合
                    if (!empty($priceItems) && !empty(array_filter($priceItems[0]))) :
                ?>

                <li class="price-content__item" id="<?php echo "program0$i"; ?>">
                    <div class="price-content__item-box">
                        <h2 class="price-content__item-title">
                            <?php echo $programName; ?>
                        </h2>
                        <dl class="price-content__item-dlist price-list">
                            <?php foreach ($priceItems as $priceItem) : ?>
                                <?php
                                    $course = $priceItem["course0$i"];
                                    $price = $priceItem["price0$i"];
                                ?>
                                <div class="price-list__item">
                                    <dt class="price-list__item-term">
                                        <?php echo $course; ?>
                                    </dt>
                                    <dd class="price-list__item-desc">
                                        ¥<?php echo $price; ?>
                                    </dd>
                                </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                </li><!-- price-content__item -->

                <?php endif;
                    endfor;
                ?>

                </ul><!-- price-content__items -->
            </div><!-- inner inner--narrow -->
        </div>

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>