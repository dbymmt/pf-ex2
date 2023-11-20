<footer>
    <section class="footer-wave">
        <picture>
            <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/sp-footer__deco.svg">
            <img src="<?=get_template_directory_uri(); ?>/img/PC/footer__item.svg" alt="波">
        </picture>
    </section>
    <section class="footer-main">
        <ul class="footer-main__directions">
            <li class="footer-main__directions-img">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/footer__logo.svg" alt="test_img">
            </li>
            <li class="footer-main__directions-direction">
                <p>〒000-0000 愛媛県松山市=================<br>089-1234-5678</p>
                <ul class="footer-main__directions-list">
                    <li class="footer-main__directions-item">
                        <a href="studio-introduction">スタジオのご紹介</a>
                    </li>
                    <li class="footer-main__directions-item">
                        <a href="lessons-list">レッスン一覧</a>
                    </li>
                    <li class="footer-main__directions-item">
                        <a href="contact">お問い合わせ</a>
                    </li>
                    <li class="footer-main__directions-item">
                        <a href="booking#booking__for-reservation">体験会ご予約</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="footer-main__footer">
            <p>copyright &copy; hot core</p>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>