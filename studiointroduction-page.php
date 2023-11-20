<?php
/*
    Template Name: studio-introduction
*/
?>

<?php get_header(); ?>
<section class="studiointroduction-fv-top">
    <picture class="studiointroduction-fv-top__image">
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/tmp_jpg/sp-studio__header.jpg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/studio-header.jpg" alt="レッスン画像">
    </picture>
    <picture class="studiointroduction-fv-top__mask">
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/sp-page-parts__fv-mask.svg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/page-parts__fv-mask.svg" alt="レッスン画像">
    </picture>
    <h1>スタジオ</h1>
</section>
<main class="studiointroduction container">
    <section class="studiointroduction-studio-intro">
        <?php include('includes/studio-intro.php');?>
    </section>
    <section class="common-access-map">
        <?php include('includes/common-access-map.php');?>
    </section>
    <section class="common-banner">
        <?php include('includes/common-banner.php');?>
    </section>
</main>
<?php get_footer(); ?>