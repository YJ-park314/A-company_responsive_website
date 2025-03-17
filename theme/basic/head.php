<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/head.php');
//     return;
// }

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
<script src="/theme/basic/js/common.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="/theme/basic/css/custom.css">
<link rel="stylesheet" href="/theme/basic/css/media.css">
<link href="https://db.onlinewebfonts.com/c/0f9c349da923afea31fae4db7b8094f0?family=Gotham+Black" rel="stylesheet">
<style>
    @import url("https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard.min.css");
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap');
    @import url('https://fonts.cdnfonts.com/css/satoshi');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Noto+Sans+KR:wght@100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap');
    @import url('https://db.onlinewebfonts.com/c/84693c6ac1f359fe8a4ac49b69f492dd?family=Gotham+Light');
    @import url('https://db.onlinewebfonts.com/c/db33e70bc9dee9fa9ae9737ad83d77ba?family=Gotham-Bold');
    @font-face {
        font-family: 'MaruBuri';
        src: url('https://hangeul.pstatic.net/hangeul_static/webfont/MaruBuri/MaruBuri-Regular.eot');
        src: url('https://hangeul.pstatic.net/hangeul_static/webfont/MaruBuri/MaruBuri-Regular.eot?#iefix') format("embedded-opentype"), url(https://hangeul.pstatic.net/hangeul_static/webfont/MaruBuri/MaruBuri-Regular.woff2) format("woff2"), url(https://hangeul.pstatic.net/hangeul_static/webfont/MaruBuri/MaruBuri-Regular.woff) format("woff"), url(https://hangeul.pstatic.net/hangeul_static/webfont/MaruBuri/MaruBuri-Regular.ttf) format("truetype");
    }
    @font-face {
        font-family: 'NanumSquareNeoLight';
        src: url(https://hangeul.pstatic.net/hangeul_static/webfont/NanumSquareNeo/NanumSquareNeoTTF-aLt.eot);
        src: url(https://hangeul.pstatic.net/hangeul_static/webfont/NanumSquareNeo/NanumSquareNeoTTF-aLt.eot?#iefix) format("embedded-opentype"), url(https://hangeul.pstatic.net/hangeul_static/webfont/NanumSquareNeo/NanumSquareNeoTTF-aLt.woff) format("woff"), url(https://hangeul.pstatic.net/hangeul_static/webfont/NanumSquareNeo/NanumSquareNeoTTF-aLt.ttf) format("truetype");
    }
    @font-face {
        font-family: "Gotham Book";
        src: url("https://db.onlinewebfonts.com/t/924ee4158324c02e3e0d62e54cafd14f.eot");
        src: url("https://db.onlinewebfonts.com/t/924ee4158324c02e3e0d62e54cafd14f.eot?#iefix")format("embedded-opentype"),
        url("https://db.onlinewebfonts.com/t/924ee4158324c02e3e0d62e54cafd14f.woff2")format("woff2"),
        url("https://db.onlinewebfonts.com/t/924ee4158324c02e3e0d62e54cafd14f.woff")format("woff"),
        url("https://db.onlinewebfonts.com/t/924ee4158324c02e3e0d62e54cafd14f.ttf")format("truetype"),
        url("https://db.onlinewebfonts.com/t/924ee4158324c02e3e0d62e54cafd14f.svg#Gotham Book")format("svg");
    }
    @font-face {
        font-family: 'GmarketSansLight';
        src: url('https://fastly.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansLight.woff') format('woff');
        font-weight: 300;
        font-style: normal;
    }
</style>

<!-- 헤더 시작 { -->
<header id="header">
    <h1 class="hidden">에이프릴마치</h1>
    <div class="wrap">
        <nav id="gnb">
            <h2 class="hidden">글로벌네비게이션 영역</h2>
            <div class="pos-end">
                <h3 id="logo"><a href="/"><span class="hidden">홈</span></a></h3>
            </div>
            <div class="center-shape">
            <span class="center-before"><img src="/theme/basic/img/ico_asterisk.svg" alt="해더 아이콘"></span>
                <ul class="menu-list">
                    <li class="pc-first"><h3><a href="/design_service.php">디자인 서비스</a></h3></li>
                    <li class="point-shape pc-last"><h3><a href="/voucher.php">정부지원 바우처</a></h3></li>
                    <li><h3><a href="/dashboard.php">IT<span class="pc"></span><span>・</span>대시보드</a></h3></li>
                    <li><h3><a href="/govt_office.php">대학・공공기관</a></h3></li>
                    <!-- <li><h3><a href="/new_brand.php" onclick="alert('해당 페이지는 현재 준비중입니다.'); return false;">브랜드관리</a></h3></li> -->
                    <li><h3><a href="/bbs/board.php?bo_table=portfolio">포트폴리오</a></h3></li>
                    <li><h3><a href="/about_us.php">About us</a></h3></li>
                    <li class="mo"><h3><a href="/bbs/board.php?bo_table=estimate">Contact</a></h3></li>
                </ul>
                <a href="#" class="mo close-gnb"><span></span></a>
                <img class="mo gnb-logo" src="/theme/basic/img/logo_gnb.svg" alt="에이프릴마치 로고">
            </div>
            <div class="pos-end">
                <h3 class="project-inquiry"><a href="/bbs/board.php?bo_table=estimate">Contact</a></h3>
            </div>
            <a href="#" class="ham-menu open-gnb">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </nav>
    </div>
</header>
<!-- } 헤더 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        