<?php
    $tmplate_dir_file = get_template_directory().'/includes/voice-data.php';
    include($tmplate_dir_file);
    $tmplate_dir_file_arr_cnt = count($voices);
?>

<?php get_header(); ?>
<section class="booking-fv-top">
    <picture class="booking-fv-top__image">
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/tmp_jpg/sp-trial__header.jpg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/trial-header.jpg" alt="体験会画像">
    </picture>
    <picture class="booking-fv-top__mask">
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/sp-page-parts__fv-mask.svg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/page-parts__fv-mask.svg" alt="体験会画像">
    </picture>
    <h1>無料体験会開催中！</h1>
</section>
<main class="booking container">
    <section class="booking-introduction">
        <div class="common-standard-frame-rev">
            <div class="common-standard-frame__image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/trial__img01.png" alt="説明用1">
            </div>
            <div class="common-standard-frame__description">
                <h3>はじめてでも大丈夫<br>手ぶらでヨガを修行しよう</h3>
                <p>
                    ホットヨガでは、手ぶらで体験会に参加できるような環境が整っています。無料体験会では、30分間のホットヨガを少人数で体験します。
                </p>
            </div>
        </div>
    </section>
    <section class="booking-flow">
        <div class="common-sec-title">
            <h2>体験会の流れ</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <div class="booking-flow__flow-unit">
            <div class="booking-flow__flow-unit-image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/trial__img01.png" alt="説明用1">
            </div>
            <div class="booking-flow__flow-unit-description-number">
                1
            </div>
            <div class="booking-flow__flow-unit-description-body">
                <h3>無料体験会を予約</h3>
                <p>WEBサイトの<a href="#" class="booking-flow__link">体験会予約フォーム</a>から予約する</p>
            </div>
        </div>
        <div class="booking-flow__flow-unit">
            <div class="booking-flow__flow-unit-image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/trial__img01.png" alt="説明用1">
            </div>
            <div class="booking-flow__flow-unit-description-number">
                2
            </div>
            <div class="booking-flow__flow-unit-description-body">
                <h3>手ぶらで来店</h3>
                <p>松山駅から徒歩5分の場所にあるスタジオに来店<br>※開始30分前にご来店ください</p>
            </div>
        </div>
        <div class="booking-flow__flow-unit">
            <div class="booking-flow__flow-unit-image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/trial__img01.png" alt="説明用1">
            </div>
            <div class="booking-flow__flow-unit-description-number">
                3
            </div>
            <div class="booking-flow__flow-unit-description-body">
                <h3>ヨガを体験</h3>
                <p>30分間のホットヨガを少人数で体験します</p>
            </div>
        </div>
        <div class="booking-flow__flow-unit">
            <div class="booking-flow__flow-unit-image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/trial__img01.png" alt="説明用1">
            </div>
            <div class="booking-flow__flow-unit-description-number">
                4
            </div>
            <div class="booking-flow__flow-unit-description-body">
                <h3>アンケートの回答</h3>
                <p>体験会終了後、アンケートに回答していただきます※3分で回答いただけます</p>
            </div>
        </div>
    </section>
    <section class="booking__trial-scene">
        <?php include('includes/free-trial-booking.php');?>
    </section>
    <section class="booking__voice">
        <div class="common-sec-title">
            <h2>生徒さんの声</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <!-- 配列から取り出し -->
        <?php if($tmplate_dir_file_arr_cnt > 0): ?>
            <?php foreach($voices as $voice): ?>
                <div class="common-free-voice__body">
                    <div class="common-free-voice__body-faceimg">
                        <img src="<?=$voice['img'];?>" alt="ユーザー画像">
                    </div>
                    <div class="common-free-voice__body-description">
                        <h4><?=$voice['name'];?>さん / <?=$voice['age'];?>代<?=$voice['sex'];?></h4>
                        <p><?=$voice['content'];?></p>
                    </div>
                </div>                
            <?php endforeach;?>
        <?php endif;?>
    </section>
    <section class="common-access-map">
        <?php include('includes/common-access-map.php');?>
    </section>
    <section class="booking__reservation" id="booking__for-reservation">
        <div class="common-sec-title">
            <h2>体験会ご予約はこちらから</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <p>ご希望の時間帯を選択してください</p>
        <div class="booking__reservation-body">
        <?php if( have_posts() ):
                while( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
        <?php   endwhile; ?>
        <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>