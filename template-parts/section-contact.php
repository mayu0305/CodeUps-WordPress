<?php if ( is_home() || is_front_page() ) : ?>
    <section class="section-contact top-section">
<?php else: ?>
    <section class="section-contact page-section">
<?php endif; ?>

        <div class="inner">
            <div class="section-contact__content">
            <div class="section-contact__content-info contact-info">
                <div class="contact-info__logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo--green.svg" alt="CodeUps" decoding="async" loading="lazy">
                </div>
                <div class="contact-info__box">
                <address class="contact-info__box-address">
                    <span>沖縄県那覇市1-1</span>
                    <span>TEL:0120-000-0000</span>
                    <span>営業時間:8:30-19:00</span>
                    <span>定休日:毎週火曜日</span>
                </address>
                <div class="contact-info__box-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927266654056!2d127.68999638481154!3d26.222926667928892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1697471956486!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div><!-- contact-info__box-->
            </div><!-- section-contact__content-info contact-info -->
            <div class="section-contact__content-link contact-link">
                <div class="section-title section-title--contact">
                <span class="section-title__sub" aria-hidden="true">Contact</span>
                <h2 class="section-title__main">お問い合わせ</h2>
                </div>
                <p class="contact-link__text">
                ご予約・お問い合わせはコチラ
                </p>
                <div class="contact-link__link">
                    <a class="link-button" href="<?php echo esc_url(home_url('/contact/')); ?>">
                    <span class="link-button__text">Contact us</span>
                    <span class="link-button__arrow">
                    </span>
                    </a>
                </div>
            </div><!-- section-contact__content-link contact-link -->
            </div><!-- section-contact_content -->
        </div>
    </section><!-- section-contact -->