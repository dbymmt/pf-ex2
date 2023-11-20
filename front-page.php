<?php
    $tmplate_dir_file = get_template_directory().'/includes/voice-data.php';
    include($tmplate_dir_file);
    $tmplate_dir_file_arr_cnt = count($voices);
?>

<?php get_header() ?>
<!-- start fv -->
<section class="fp-fv">
    <picture>
        <source media="(max-width: 767px)" srcset="<?=get_template_directory_uri(); ?>/img/SP/tmp_jpg/front-sp-fv.jpg">
        <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/front-pc-fv.jpg" alt="フロントFV画像">
    </picture>
    <div class="fp-fv__phrases">
        <h2>新しい自分と出会える<br>松山初の少人数制ヨガ</h2>
        <p>
            少人数制だから、挫折せずに楽しく続けられる。<br>
            アットホームなスタジオ、そして、本場インドで培ったヨガを<br>
            ここ松山で。
        </p>
    </div>
</section>
<!-- end fv -->
<main class="fp container">
    <!-- start common-banner -->
    <section class="common-banner">
        <?php include('includes/common-banner.php');?>
    </section>
    <!-- end common-banner -->
    <!-- start fp-welcome -->
    <section class="fp-welcome">
        <div class="common-sec-title">
            <h2>ヨガスタジオ「ホットコア」へようこそ</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <div class="common-standard-frame-rev">
            <div class="common-standard-frame__image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/front-about__img01.png" alt="説明用1">
            </div>
            <div class="common-standard-frame__description">
                <h3>本場インドのヨガを、ここ松山で。</h3>
                <p>
                    ホットコアは、本場インドのヨガを学んだインストラクターによる、少人数制レッスンが受けれる松山唯一のスタジオです。
                    のびのびとした空間で体も心もリラックスさせ、
                    日常から解放された60分間を楽しみましょう。
                </p>
            </div>
        </div>
        <div class="common-standard-frame">
            <div class="common-standard-frame__image">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/front-about__img02.png" alt="説明用1">
            </div>
            <div class="common-standard-frame__description">
                <h3>スタッフ、お客様を近くに感じれる</h3>
                <p>
                    少人数制だからスタッフ、お客様同士の距離が近い。<br>
                    一人では通うのが不安というあなた。<br>
                    一緒に頑張る仲間を探せる環境がここにあります。<br>
                    お客様、一人一人とのコミュニケーションを大切した、<br>
                    アットホームな空間でお待ちしております。
                </p>
            </div>
        </div>
    </section>
    <!-- end fp-welcome -->
    <!-- start fp-studio-intro -->
    <section class="fp-studio-intro">
        <?php include('includes/studio-intro.php');?>
    </section>    
    <!-- end fp-studio-intro -->
    <!-- start fp-instructor-intro -->
    <section class="fp-instructor-introduction">
        <div class="common-sec-title">
            <h2>ホットコアのインストラクター</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <div class="fp-instructor-introduction__body">
            <div class="fp-instructor-introduction__main-description">
                <h3>指導経験豊富な女性インストラクターが指導</h3>
                <p>インストラクターは全員女性。ヨガレッスンの指導経験豊富なメンバーです。インストラクターの紹介。</p>
            </div>
            <ul class="fp-instructor-introduction__list">
                <li class="fp-instructor-introduction__item">
                    <ul class="fp-instructor-introduction__upper">
                        <li class="fp-instructor-introduction__image">
                            <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/front-instructor.png" alt="インストラクター写真">
                        </li>
                        <li class="fp-instructor-introduction__profile">
                            <h4>YUKO<img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/icon_edited.png" alt="インスタアイコン"></h4>
                            <ul>
                                <li>・E-RYT 500 資格保持者</li>
                                <li>・YIC インド中央政府公認資格</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="fp-instructor-introduction__lower">
                        <p>
                            小学生〜高校まで水泳部として活動していたが、怪我が原因で離れる。そこで、ヨガと出会い本場で学びたいと思い、インドへ渡る。ヨガの本場インドで学んだのち、ホットコアのスタジオを開く。
                        </p>
                    </div>
                </li>
                <li class="fp-instructor-introduction__item">
                    <ul class="fp-instructor-introduction__upper">
                        <li class="fp-instructor-introduction__image">
                            <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/front-instructor.png" alt="インストラクター写真">
                        </li>
                        <li class="fp-instructor-introduction__profile">
                            <h4>ERI<img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/icon_edited.png" alt="インスタアイコン"></h4>
                            <ul>
                                <li>・E-RYT 200資格保持者</li>
                                <li>・NPO法人日本YOGA盟の<br>ティーチャーインストラクター</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="fp-instructor-introduction__lower">
                        <p>
                            ストレスが原因で体調を崩したことをきっかけでヨガを始める。ヨガを学んだことで、心も体もどんどんと良くなることを実感。<br>YUKOと意気投合しホットコアにジョイン。
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- end fp-instructor-intro -->
    <!-- start fp-lesson-list -->
    <section class="fp-lesson-list">
        <div class="common-sec-title">
            <h2>ホットコアのコース</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <ul class="fp-lesson-list__list">
            <li class="fp-lesson-list__item">
                <div class="fp-lesson-list__item-image">
                    <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/front-course.png" alt="ヨガ風景">
                </div>
                <div class="fp-lesson-list__item-description">
                    <h4>ビギナーコース</h4>
                    <p>週１回のレッスンコース。<br>ヨガが初めてだという方におすすめ!</p>
                </div>
            </li>
            <li class="fp-lesson-list__item">
                <div class="fp-lesson-list__item-image">
                    <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/front-course.png" alt="ヨガ風景">
                </div>
                <div class="fp-lesson-list__item-description">
                    <h4>スタンダードコース</h4>
                    <p>月8回のレッスンコース。<br>ヨガの経験がある方におすすめ!</p>
                </div>
            </li>
            <li class="fp-lesson-list__item">
                <div class="fp-lesson-list__item-image">
                    <img src="<?=get_template_directory_uri(); ?>/img/PC/tmp_imgs/front-course.png" alt="ヨガ風景">
                </div>
                <div class="fp-lesson-list__item-description">
                    <h4>アドバンスコース</h4>
                    <p>通い放題のレッスンコース。<br>短期間での体の変化を実感したい方におすすめ!</p>
                </div>
            </li>
        </ul>
        <div class="fp-lesson-list__to-lesson-list">
            <a href="lessons-list" class="fp-lesson-list__lesson-list-button common-button">
                コースを詳しく見てみる
            </a>
        </div>
    </section>
    <!-- end fp-lesson-list -->
    <!-- start common-free-trial -->
    <section class="fp-common-free-trial">
        <?php include('includes/free-trial.php');?>
    </section>
    <!-- end common-free-trial -->
    <!-- start common-voice -->
    <section class="common-free-voice">
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
    <!-- end common-free-voice -->
    <!-- start common-access-map -->
    <section class="common-access-map">
        <?php include('includes/common-access-map.php');?>
    </section>
    <!-- end common-access-map -->
    <!-- start fp-contact -->
    <section class="fp-contact">
        <div class="common-sec-title sp-fp-contact">
            <h2>無料体験会のお申し込み<br>ご相談はお気軽にお問合せください</h2>
            <img src="<?=get_template_directory_uri(); ?>/img/PC/orange-line.svg" alt="波線">
        </div>
        <div class="fp-contact__to-contact">
            <a href="contact" class="fp-contact__to-contact-button common-button">
                お問い合わせ
            </a>
        </div>
    </section>
    <!-- end fp-contact -->
</main>
<?php get_footer() ?>