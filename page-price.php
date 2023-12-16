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
                    <li class="price-content__item" id="priceLlicense">
                        <div class="price-content__item-box">
                            <h2 class="price-content__item-title">
                                ライセンス講習
                            </h2>
                            <dl class="price-content__item-dlist price-list">
                                <?php
                                    $link_group = SCF::get('license');
                                    foreach ($link_group as $fields ) {
                                ?>
                                    <div class="price-list__item">
                                        <dt class="price-list__item-term">
                                            <?php echo $fields['license-course']; ?>
                                        </dt>
                                        <dd class="price-list__item-desc">
                                            <?php echo $fields['license-price']; ?>
                                        </dd>
                                    </div>
                                <?php } ?>
                            </dl>
                        </div>
                    </li><!-- price-content__item -->
                    <li class="price-content__item" id="price-Experience">
                        <div class="price-content__item-box">
                            <h2 class="price-content__item-title">
                                体験ダイビング
                            </h2>
                            <dl class="price-content__item-dlist price-list">
                                <?php
                                    $link_group = SCF::get('trial');
                                    foreach ($link_group as $fields ) {
                                ?>
                                    <div class="price-list__item">
                                        <dt class="price-list__item-term">
                                            <?php echo $fields['trial-course']; ?>
                                        </dt>
                                        <dd class="price-list__item-desc">
                                            <?php echo $fields['trial-price']; ?>
                                        </dd>
                                    </div>
                                <?php } ?>
                            </dl>
                        </div>
                    </li><!-- price-content__item -->
                    <li class="price-content__item" id="priceFan">
                        <div class="price-content__item-box">
                            <h2 class="price-content__item-title">
                                ファンダイビング
                            </h2>
                            <dl class="price-content__item-dlist price-list">
                                <?php
                                    $link_group = SCF::get('fun');
                                    foreach ($link_group as $fields ) {
                                ?>
                                    <div class="price-list__item">
                                        <dt class="price-list__item-term">
                                            <?php echo $fields['fun-course']; ?>
                                        </dt>
                                        <dd class="price-list__item-desc">
                                            <?php echo $fields['fun-price']; ?>
                                        </dd>
                                    </div>
                                <?php } ?>
                            </dl>
                        </div>
                    </li><!-- price-content__item -->
                    <li class="price-content__item" id="priceSpecial">
                        <div class="price-content__item-box">
                            <h2 class="price-content__item-title">
                                スペシャルダイビング
                            </h2>
                            <dl class="price-content__item-dlist price-list">
                                <?php
                                        $link_group = SCF::get('special');
                                        foreach ($link_group as $fields ) {
                                    ?>
                                        <div class="price-list__item">
                                            <dt class="price-list__item-term">
                                                <?php echo $fields['special-course']; ?>
                                            </dt>
                                            <dd class="price-list__item-desc">
                                                <?php echo $fields['special-price']; ?>
                                            </dd>
                                        </div>
                                    <?php } ?>
                            </dl>
                        </div>
                    </li><!-- price-content__item -->
                </ul><!-- price-content__items -->
            </div><!-- inner inner--narrow -->
        </div>

        <?php get_template_part( 'template-parts/section-contact' ); ?>

    </main>

<?php get_footer(); ?>