<?php
/*
    Template Name: contact
*/
?>
<?php get_header(); ?>
<section class="contact-fv-top">
    <picture class="contact-fv-top__image">
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/tmp_jpg/sp-contact__header.jpg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/contact-header.jpg" alt="風景画像">
    </picture>
    <picture class="contact-fv-top__mask">
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/sp-page-parts__fv-mask.svg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/page-parts__fv-mask.svg" alt="風景画像">
    </picture>
    <h1>お問い合わせ</h1>
</section>
<main class="contact container">
    <section class="contact-form">
        <div class="common-sec-title">
            <h2>お気軽にお問い合わせください</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <div class="contact-form__body">
        <?php if( have_posts() ):
                while( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
        <?php   endwhile; ?>
        <?php endif; ?>
        </div>
    </section>
    <section class="contact-SMS">
        <div class="common-sec-title">
            <h2>SNSからのお問い合わせも可能です</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <p>
            Instagram公式アカウントフォロー<br>&<br>DMからのお申し込みで<span>10%OFF</span>
        </p>
        <div class="contact-SMS__SMS-body">
            <p>自宅でできる簡単なヨガや哲学を配信中です♪<br>来店の際にInstagramの画面をスタッフにお見せください。</p>
            <div class="contact-SMS__SMS-body-icon-QR">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/icon.png" alt="インスタグラムアイコン">
                <div class="contact-SMS__SMS-body-icon-QR-QRbody">
                    <h3>FOLLOW ME!</h3>
                    <img src="<?=get_template_directory_uri(); ?>/img/PC/QR.svg" alt="QRコード">
                </div>
            </div>
        </div>
    </section>
    <section class="common-banner">
        <?php include('includes/common-banner.php');?>
    </section>
</main>
<?php get_footer(); ?>