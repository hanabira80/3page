<!DOCTYPE html>
<html>
<head>
    <title>DREAMCENSE</title>
    <link rel="icon" type="image/png" href="/img/common/favicon.png" sizes="32x32">
    <meta http-equiv="Content-Type" content="charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- font setting -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css">
    <!-- font setting end -->

    <!-- css setting -->
    <link href="./css/reset.css" rel="stylesheet" type="text/css">
    <link href="./css/common.css" rel="stylesheet" type="text/css">
    <!-- css setting end -->

    <!-- js setting -->
    <script src="./js/jquery.js"></script>
    <script src="./js/mq.genie.min.js"></script>
    <!-- js setting end -->
</head>
<body>
    <header>
        <h1 class="logo_box__header">
            <a href="" alt="">
                <img src="./img/logo__header.png" class="logo__header" alt="">
            </a>
        </h1>
        <div class="menu_area">
            <nav class="left_area">
                <ul class="family_site">
                    <li>
                        <a href="" onclick="alert('준비중 입니다.')" alt="">
                            DIOCIAN STUDIO
                        </a>
                    </li>
                    <li>
                        <a href="" onclick="alert('준비중 입니다.')" alt="">
                            FANDIO
                        </a>
                    </li>
                    <li>
                        <a href="" onclick="alert('준비중 입니다.')" alt="">
                            DIOCIAN ＰLAY
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="center_area x_center">
                <ul class="main_menu">
                    <li>
                        <a href="" alt="">
                            MAIN
                        </a>
                    </li>
                    <li>
                        <a href="" alt="">
                            서비스 소개
                        </a>
                    </li>
                    <li>
                        <a href="" alt="">
                            앨범
                        </a>
                    </li>
                    <li>
                        <a href="" alt="">
                            공지사항
                        </a>
                    </li>
                    <li>
                        <a href="" alt="">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="" alt="">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="right_area">
                <ul class="user_menu">
                    <li>
                        <a href="" alt="">
                            로그인
                        </a>
                    </li>
                    <li>
                        <a href="" alt="">
                            회원가입
                        </a>
                    </li>
                    <li>
                        <a href="" alt="">
                            <img src="./img/icon__plus_circle.png" class="icon__plus_circle" alt=""> 앨범 발매 신청
                        </a>
                    </li>
                    <li>
                        <a href="" alt="">
                            Sound Wave 님
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <script>
        function scrollAction() {
            var scrolled = $(window).scrollTop();
            if (0 < scrolled) {
                $('header').addClass('is_active');
            }
            else {
                $('header').removeClass('is_active');
            }

        }
        $(document).ready(function () {
            scrollAction();
        });
        $(window).bind('scroll',function(){
            scrollAction();
        });
    </script>

    <script src="./js/swiper.min.js"></script>
    <link href="./css/swiper.css" rel="stylesheet" type="text/css">
    <link href="./css/main.css" rel="stylesheet" type="text/css">

    <article class="main_slider_box">
        <div class="swiper-container main_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide main_slide_1">
                    <img src="./img/main_slider_test.png" class="bg_img xy_center" alt="">
                    <h3 class="main_tit x_center">
                        one application,<br/>
                        to over 90 countries!
                    </h3>
                    <h4 class="sub_tit x_center">
                        With just one application, you can release your albums to more than<br/>
                        40 channels and 90 countries around the world
                    </h4>
                    <div class="link_btn x_center">
                        <a href="" class="full_link" alt="">
                            앨범 발매 신청 <img src="./img/icon__arrow_link.png" class="icon__arrow_link" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide main_slide_1">
                    <img src="./img/main_slider_test.png" class="bg_img xy_center" alt="">
                    <h3 class="main_tit x_center">
                        one application,<br/>
                        to over 90 countries!
                    </h3>
                    <h4 class="sub_tit x_center">
                        With just one application, you can release your albums to more than<br/>
                        40 channels and 90 countries around the world
                    </h4>
                    <div class="link_btn x_center">
                        <a href="" class="full_link" alt="">
                            앨범 발매 신청 <img src="./img/icon__arrow_link.png" class="icon__arrow_link" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide main_slide_1">
                    <img src="./img/main_slider_test.png" class="bg_img xy_center" alt="">
                    <h3 class="main_tit x_center">
                        one application,<br/>
                        to over 90 countries!
                    </h3>
                    <h4 class="sub_tit x_center">
                        With just one application, you can release your albums to more than<br/>
                        40 channels and 90 countries around the world
                    </h4>
                    <div class="link_btn x_center">
                        <a href="" class="full_link" alt="">
                            앨범 발매 신청 <img src="./img/icon__arrow_link.png" class="icon__arrow_link" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <script>
        var mainSlider = new Swiper ('.main_slider', {
            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
    </script>

    <link href="./css/list__common.css" rel="stylesheet" type="text/css">
    <link href="./css/list__interview.css" rel="stylesheet" type="text/css">
    <article class="list_module list_module__interview">
        <div class="list_tit_box">
            <h3 class="tit">
                DIOCIAN’s Musician Interview
            </h3>
            <button class="btn__more">
                더보기
            </button>
        </div>
        <ul class="list_ctn_box__interview">
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/interview_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            제목 입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/interview_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/interview_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/interview_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/interview_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/interview_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/interview_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/interview_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다. 긴 제목입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                    </div>
                </a>
            </li>

        </ul>
    </article>

    <link href="./css/list__album.css" rel="stylesheet" type="text/css">
    <article class="list_module list_module__bg list_module__album">
        <div class="list_tit_box">
            <h3 class="tit">
                DIOCIAN’s Released albums
            </h3>
            <button class="btn__more">
                더보기
            </button>
        </div>
        <ul class="list_ctn_box__album">
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                        <i class="icon__play xy_center">
                            <img src="./img/icon__play.png" class="res" alt="">
                        </i>
                    </div>
                    <div class="info_box">
                        <div class="tit txt_ellipsis">
                            긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다. 긴 앨범 제목 입니다.
                        </div>
                        <div class="artist txt_ellipsis">
                            긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다. 긴 아티스트 이름입니다.
                        </div>
                        <div class="date">
                            0000.00.00
                        </div>
                        <button class="btn__down">
                            <img src="./img/icon__down.png" class="res" alt="">
                        </button>
                    </div>
                </a>
            </li>
        </ul>
    </article>

    <link href="./css/list__artist.css" rel="stylesheet" type="text/css">
    <article class="list_module list_module__artist">
        <div class="list_tit_box">
            <h3 class="tit">
                Introducing DIOCIAN’s Artist
            </h3>
            <button class="btn__more">
                더보기
            </button>
        </div>
        <ul class="list_ctn_box__artist">
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/album_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="" alt="">
                    <div class="img_box">
                        <img src="./img/artist_test.png" class="res" alt="">
                    </div>
                    <div class="info_box">
                        <div class="artist txt_ellipsis">
                            아티스트 긴 이름입니다.
                        </div>
                        <div class="artist_group txt_ellipsis">
                            아티스트 그룹 긴 이름입니다.
                        </div>
                        <div class="artist_position">
                            Vocalist
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </article>

    <footer>
        <div class="width_inner">
            <div class="logo_box__footer">
                <a href="" alt="">
                    <img src="./img/logo__footer.png" class="logo__footer" alt="">
                </a>
            </div>
            <ul class="footer_info">
                <li>
                    (주)디오션코리아
                </li>
                <li>
                    대표 : 김두환
                </li>
                <li>
                    사업자등록 : 439-81-00129
                </li>
                <li>
                    통신판매업 : 2016-서울서초-1740 <a href="" alt="">[사업자정보확인]</a>
                </li>
            </ul>
            <button class="btn_email">
                help@diocian.com
            </button>
        </div>
    </footer>
</body>
</html>