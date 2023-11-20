<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/style.css">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="<?=get_template_directory_uri(); ?>/js/hamburger.js"></script>
    <title>e-commerce-psuedo-project</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1 class="header__logo">
            <a href="<?=home_url()?>">
                <img src="<?=get_template_directory_uri(); ?>/img/PC/logo.svg" alt="ロゴマーク">
            </a>
        </h1>
        
        <!-- PC -->
        <nav id="header__nav-pc">
            <!-- PCリスト -->
            <ul id="header__nav-pc-list">
                <li class="header__nav-pc-item"><a href="studio-introduction">スタジオのご紹介</a></li>
                <li class="header__nav-pc-item"><a href="lessons-list">レッスン一覧</a></li>
                <li class="header__nav-pc-item"><a href="contact">お問い合わせ</a></li>
                <li class="header__nav-pc-item common-button"><a href="booking#booking__for-reservation">体験会ご予約</a></li>
            </ul>
        </nav>

        <!-- SP -->
        <nav id="header__nav-sp">
            <!-- SP用ボタン -->
            <a href="booking#booking__for-reservation" class="header__sp-button common-button">体験会ご予約</a>
            <!-- toggle -->
            <div id="header__toggle">
                <i></i>
                <i></i>
                <i></i>
            </div>
            <!-- SPリスト -->
            <ul id="header__nav-sp-list">
                <li class="header__nav-sp-item"><a href="studio-introduction">スタジオのご紹介</a></li>
                <li class="header__nav-sp-item"><a href="lessons-list">レッスン一覧</a></li>
                <li class="header__nav-sp-item"><a href="contact">お問い合わせ</a></li>
                <li class="header__nav-sp-item"><a href="booking#booking__for-reservation" class="common-button">体験会ご予約</a></li>
            </ul>
        </nav>
    </header>