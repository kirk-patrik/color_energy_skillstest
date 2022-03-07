<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="static template">
    <meta name="keywords" content="keywords_01,keywords_02">
    <meta name="format-detection" content="telephone=no">
    <title><?= isset($pageTitle) ? $pageTitle : 'page-title'; ?></title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- end font -->
    <!-- style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?= resource('css', 'style.css') ?>" />
    <link rel="stylesheet" href="<?= resource('iconfont', 'iconfont.css') ?>" />
    <?= resources('css', isset($headCSS) ? $headCSS : '', true) ?>
    <!-- end style -->
</head>

<body class="page">
    <header class="l-header page__top">
        <div class="l-header__top">
            <h1 class="logo">LOGO</h1>
        </div>
        <div class="l-header__nav">
            <div class="l-wrap">
                <ul class="l-header__nav_menu u-d-n-responsive">
                    <li class="nav_item">
                        <a href="#">4つの特徴</a>
                    </li>
                    <li>
                        <span class="separator">／</span>
                    </li>
                    <li class="nav_item">
                        <a href="#">#疲労感軽減ルーティン </a>
                    </li>
                    <li>
                        <span class="separator">／</span>
                    </li>
                    <li class="nav_item">
                        <a href="#">タイプ別診断</a>
                    </li>
                    <li>
                        <span class="separator">／</span>
                    </li>
                    <li class="nav_item">
                        <a href="#">選べる3タイプ </a>
                    </li>
                    <li>
                        <span class="separator">／</span>
                    </li>
                    <li class="nav_item">
                        <a href="#">Q&A</a>
                    </li>
                    <li>
                        <span class="separator">／</span>
                    </li>
                    <li class="nav_item">
                        <a href="#">お問い合わせ</a>
                    </li>
                </ul>
            </div>
            <ul class="hamburger__menu u-d-n-laptop">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <ul class="l-header__nav_menu l-header__nav_menu-sp">
                <li class="nav_item">
                    <a href="#">4つの特徴</a>
                </li>
                <li class="nav_item">
                    <a href="#">#疲労感軽減ルーティン</a>
                </li>
                <li class="nav_item">
                    <a href="#">タイプ別診断</a>
                </li>
                <li class="nav_item">
                    <a href="#">選べる3タイプ</a>
                </li>
                <li class="nav_item">
                    <a href="#">Q&A</a>
                </li>
                <li class="nav_item">
                    <a href="#">お問い合わせ</a>
                </li>
            </ul>
        </div>
        <div class="l-header__mainVisual">
            <div class="l-header__row">
                <img class="multi-skywater u-d-n-responsive" src="<?= resource('img', 'raw/sect_1-img.png') ?>" alt="">
                <div class="l-header__col">
                    <div class="l-header__col_left">
                        <img src="<?= resource('img', 'raw/mv-bg01.svg'); ?>" alt="">
                    </div>
                    <ul class="slick-dots">
                        <li class="slick-dots-item isActive"></li>
                        <li class="slick-dots-item"></li>
                        <li class="slick-dots-item"></li>
                        <li class="slick-dots-item"></li>
                    </ul>
                </div>
                <div class="l-header__col">
                    <ul class="mv__slider">
                        <li>
                            <img src="<?= resource('img', 'raw/slider-img01.png'); ?>" alt="">
                        </li>
                        <li>
                            <img src="<?= resource('img', 'raw/slider-img02.png'); ?>" alt="">
                        </li>
                        <li>
                            <img src="<?= resource('img', 'raw/slider-img03.png'); ?>" alt="">
                        </li>
                        <li>
                            <img src="<?= resource('img', 'raw/slider-img04.png'); ?>" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="page__center">
        <!-- content start here -->