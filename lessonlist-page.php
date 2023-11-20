<?php
/*
    Template Name: lesson-list
*/
?>
<?php get_header(); ?>
<section class="lessonlist-fv-top">
    <picture class="lessonlist-fv-top__image">
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/tmp_jpg/sp-resson__header.jpg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/resson-header.jpg" alt="レッスン画像">
    </picture>
    <picture class="lessonlist-fv-top__mask">
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/sp-page-parts__fv-mask.svg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/page-parts__fv-mask.svg" alt="レッスン画像">
    </picture>
    <h1>レッスン一覧</h1>
</section>
<main class="lessonlist container">
    <section class="lessonlist-beginner-course">
        <div class="common-sec-title">
            <h2>ビギナーコース</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <div class="lessonlist-course-frame">
            <div class="lessonlist-course-frame__image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/resson__img.png" alt="レッスン風景">
            </div>
            <div class="lessonlist-course-frame__description">
                <h3 class="lessonlist-course-frame__description-title">
                    ヨガが初めての人におすすめ
                </h3>
                <ul class="lessonlist-course-frame__description-time-and-fee">
                    <li>
                        回数 : 月4回
                    </li>
                    <li>
                        料金 : 5,000円 (税込)
                    </li>
                </ul>
                <h4 class="lessonlist-course-frame__description-feature-title">
                    特徴
                </h4>
                <p class="lessonlist-course-frame__description-feature-detail">
                    ヨガが初めてだという方におすすめです。<br>
                    基礎を中心としたレッスン内容で、呼吸法〜基礎的な姿勢を重点的に行います。<br>
                    週に1回通うことができるので、無理なく継続できるレッスンとなっています！
                </p>
            </div>
        </div>
    </section>
    <section class="lessonlist-standard-course">
        <div class="common-sec-title">
            <h2>スタンダードコース</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <div class="lessonlist-course-frame">
            <div class="lessonlist-course-frame__image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/resson__img.png" alt="レッスン風景">
            </div>
            <div class="lessonlist-course-frame__description">
                <h3 class="lessonlist-course-frame__description-title">
                    ヨガの経験がある方におすすめ
                </h3>
                <ul class="lessonlist-course-frame__description-time-and-fee">
                    <li>
                        回数 : 月8回
                    </li>
                    <li>
                        料金 : 10,000円 (税込)
                    </li>
                </ul>
                <h4 class="lessonlist-course-frame__description-feature-title">
                    特徴
                </h4>
                <p class="lessonlist-course-frame__description-feature-detail">
                    ヨガの経験がある方におすすめです。<br>
                    基礎的な姿勢に加えて、インド式の瞑想や哲学も合わせて行えます。ビギナーじゃ物足りない、アドバンスだとレベルが高すぎると感じている方におすすめ！
                </p>
            </div>
        </div>
    </section>
    <section class="lessonlist-advanced-course">
        <div class="common-sec-title">
            <h2>アドバンスコース</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <div class="lessonlist-course-frame">
            <div class="lessonlist-course-frame__image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/resson__img.png" alt="レッスン風景">
            </div>
            <div class="lessonlist-course-frame__description">
                <h3 class="lessonlist-course-frame__description-title">
                    短期間での体の変化を実感したい方におすすめ
                </h3>
                <ul class="lessonlist-course-frame__description-time-and-fee">
                    <li>
                        回数 : 使い放題
                    </li>
                    <li>
                        料金 : 15,000円 (税込)
                    </li>
                </ul>
                <h4 class="lessonlist-course-frame__description-feature-title">
                    特徴
                </h4>
                <p class="lessonlist-course-frame__description-feature-detail">
                    伝統的なインドのヨガを中心とした、上級者向けのレッスンです。通い放題のため、短期間での体の変化を実感したい方におすすめです。<br>
                    （毎週月曜は定休日のため通うことができません）
                </p>
            </div>
        </div>
    </section>
    <section class="comparison-courses">
        <div class="common-sec-title">
            <h2>コース比較表</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <ul class="lessonlist-comparison-course__list">
            <li class="lessonlist-comparison-course__item">
                <h3>ビギナーコース</h3>
                <h4 class="lessonlist-comparison-course__item-price">5,000円<span> (税込)</span></h4>
                <img src="<?=get_template_directory_uri(); ?>/img/PC/dashed.svg" alt="点線">
                <h4 class="lessonlist-comparison-course__item-time">レッスン回数 : <span class="lessonlist-comparison-course__item-number">4</span>回 / 月</h4>
                <ul>
                    <li>・ヨガマット貸出し</li>
                    <li>・イベント参加</li>
                </ul>
            </li>
            <li class="lessonlist-comparison-course__item">
                <h3>スタンダードコース</h3>
                <h4 class="lessonlist-comparison-course__item-price">10,000円<span> (税込)</span></h4>
                <img src="<?=get_template_directory_uri(); ?>/img/PC/dashed.svg" alt="点線">
                <h4 class="lessonlist-comparison-course__item-time">レッスン回数 : <span class="lessonlist-comparison-course__item-number">8</span>回 / 月</h4>
                <ul>
                    <li>・ヨガマット貸出し</li>
                    <li>・イベント参加</li>
                </ul>
            </li>
            <li class="lessonlist-comparison-course__item">
                <h3>アドバンスコース</h3>
                <h4 class="lessonlist-comparison-course__item-price">15,000円<span> (税込)</span></h4>
                <img src="<?=get_template_directory_uri(); ?>/img/PC/dashed.svg" alt="点線">
                <h4 class="lessonlist-comparison-course__item-time">レッスン回数 : <span class="lessonlist-comparison-course__item-phrase">通い放題</span></h4>
                <ul>
                    <li>・ヨガマット貸出し</li>
                    <li>・水素水サーバー</li>
                    <li>・イベント参加</li>
                </ul>
            </li>
        </ul>
    </section>
    <section class="common-banner">
        <?php include('includes/common-banner.php'); ?>
    </section>
</main>
<?php get_footer(); ?>