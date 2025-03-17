<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 로딩 --> 
<?php include_once(G5_THEME_PATH.'/loader.php'); ?>


<!-- 비주얼 시작 -->
<div class="visual main loader-motion">
    <div class="vis-con">
        <ul class="txt-wrap">
            <li class="">
                <img src="/theme/basic/img/main/vis_brand.svg" alt="Brand img">
                <ul class="rolling-txt">
                    <li>
                        <span>더 큰 도약 더 많은 고객과의 만남을 위한 - 브랜드 전략을 지원합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>더 큰 도약 더 많은 고객과의 만남을 위한 - 브랜드 전략을 지원합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>더 큰 도약 더 많은 고객과의 만남을 위한 - 브랜드 전략을 지원합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>더 큰 도약 더 많은 고객과의 만남을 위한 - 브랜드 전략을 지원합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                    </li>
                </ul>
            </li>
            <li class="">
                <img src="/theme/basic/img/main/vis_uxui.svg" alt="UXUI Web&App">
                <ul class="rolling-txt">
                    <li>
                        <span>모든 순간 모든 곳에서 편안한 친구처럼 - 현명한 조언자가 되어 온라인 세상을 설계합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>모든 순간 모든 곳에서 편안한 친구처럼 - 현명한 조언자가 되어 온라인 세상을 설계합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>모든 순간 모든 곳에서 편안한 친구처럼 - 현명한 조언자가 되어 온라인 세상을 설계합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>모든 순간 모든 곳에서 편안한 친구처럼 - 현명한 조언자가 되어 온라인 세상을 설계합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                    </li>
                </ul>
            </li>
            <li class="none-effect"><img src="/theme/basic/img/main/vis_info.svg" alt="Info data"></li>
            <li class="">
                <img src="/theme/basic/img/main/vis_graphic.svg" alt="graphic">
                <ul class="rolling-txt">
                    <li>
                        <span>DX 가 그리는 새로운 미래 - 모션그래픽 부터 광고디자인까지 채널별 맞춤형 컨텐츠 제작- 디지털 세상을 리딩합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>DX 가 그리는 새로운 미래 - 모션그래픽 부터 광고디자인까지 채널별 맞춤형 컨텐츠 제작- 디지털 세상을 리딩합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>DX 가 그리는 새로운 미래 - 모션그래픽 부터 광고디자인까지 채널별 맞춤형 컨텐츠 제작- 디지털 세상을 리딩합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                    </li>
                </ul>
            </li>
            <li class="mo none-effect ">
                <img src="/theme/basic/img/mobile/main/vis_it.svg" alt="IT-visualization">
            </li>
            <li class="">
                <img src="/theme/basic/img/main/vis_it.svg" alt="IT-dashboard">
                <ul class="rolling-txt">
                    <li>
                        <span>비지니스 목적에 맞춰진 정확한 대시보드 - 데이터 인사이트 시각화- AI / DATA 리딩 브랜드 구축의 독보적 노하우- 기술에 예술을 더합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>비지니스 목적에 맞춰진 정확한 대시보드 - 데이터 인사이트 시각화- AI / DATA 리딩 브랜드 구축의 독보적 노하우- 기술에 예술을 더합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                        <span>비지니스 목적에 맞춰진 정확한 대시보드 - 데이터 인사이트 시각화- AI / DATA 리딩 브랜드 구축의 독보적 노하우- 기술에 예술을 더합니다</span>
                        <span><img src="/theme/basic/img/ico_asterisk.svg" alt=""></span>
                    </li>
                </ul>
            </li>
        </ul>
        <p class=""><span>Creative Design</span></p>
    </div>
    <a href="#" class="sc-down">
        <img src="/theme/basic/img/ico_scrolldown_arrow.svg" alt="스크롤 다운 아이콘">
        <img src="/theme/basic/img/ico_scrolldown_arrow.svg" alt="스크롤 다운 아이콘">
    </a>
</div>
<!-- 비주얼 끝 -->

<!-- 메인 시작 -->
<article id="main">
    <h2 class="hidden">본문영역</h2>
    <!-- 1. what we do 시작 -->
    <!-- ********포트폴리오 게시판 연동 필요 -->
    <section class="what-we-do tab-section">
        <h3>What we do</h3>
        <dl class="subtitle">
            <dt>고객사에 가장 최적화된<br><strong>브랜딩을 제안합니다</strong></dt>
            <dd>디자인과 브랜딩을 향한<br class="mo"> 우리의 전문성과 열정, 진심의 영향력은<br class="mo"> 든든한 믿음과 새로운 기쁨을 전달합니다</dd>
        </dl>
        <ul class="tabs ctgr-tabs">
            <li class="active"><a href="#">All</a></li>
            <li><a href="#">BX</a></li>
            <li><a href="#">UI·UX</a></li>
            <li><a href="#">PUBLIC</a></li>
            <li><a href="#">VOUCHER</a></li>
        </ul>
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <li class="swiper-slide" title="uiux,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/lg mop.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="uiux,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/lg optapex.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="uiux">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985866.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="uiux">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985860.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="uiux,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985739.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="uiux">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985731.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="voucher,uiux,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985855.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="voucher,uiux,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985857.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="voucher,uiux,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985858.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="voucher,uiux,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985733.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="voucher,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985728.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="voucher,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985732.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="voucher,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985730.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985863.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985865.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985869.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985734.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985735.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985738.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985853.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985852.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985737.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="public,bx,uiux">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985862.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="public,bx,uiux">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985861.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="public,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985740.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="public,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985870.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="public,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985864.jpg" alt="">
                    </a>
                </li>
                <li class="swiper-slide" title="public,bx">
                    <a href="#" onclick="return false;">
                        <img src="/theme/basic/img/main_temp/Frame 56985868.jpg" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <!-- <div class="swiper-ctrl">
            <div class="swiper-btn swiper-button-prev"></div>
            <p class="num current-num">01</p>
            <div class="swiper-pagination"></div>
            <p class="num total-num"></p>
            <div class="swiper-btn swiper-button-next"></div>
        </div> -->
        <div class="cstm-pagination">
            <div class="swiper-btn swiper-button-prev"></div>
            <p class="cur-num num">01</p>
            <div class="progress"><span class="inner"></span></div>
            <p class="total-num num"></p>
            <div class="swiper-btn swiper-button-next"></div>
        </div>
        <a href="/bbs/board.php?bo_table=portfolio" class="read-more">Read more<img src="/theme/basic/img/ico_more_arrow.svg" alt="화살표 아이콘"></a>
    </section>
    <!-- what we do 끝 -->

    <!-- 2. clients 시작 -->
    <!-- <section class="clients">
        <h3>Clients</h3>
        <dl class="subtitle">
            <dt>에이프릴마치와 함께한<br><strong>500+ 고객사</strong></dt>
            <dd>지난 10년 동안 500여개의 브랜드와<br class="mo"> 함께하며<br class="pc">쌓아온 노하우를 바탕으로<br class="mo"> 브랜드가 직면한 어려움을 해결해 드립니다.</dd>
        </dl>
        <div class="bnr-wrap">
            <ul class="clients-bnr bnr1">
                <li>
                    <img src="/theme/basic/img/family_logo/1/Group_1.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_2.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_3.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_4.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_5.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_6.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_7.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_8.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_9.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/1/Group_10.svg" alt="패밀리로고">
                </li>
                <li>
                    <img src="/theme/basic/img/family_logo/2/Group_1.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/2/Group_2.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/2/Group_3.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/2/Group_4.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/2/Group_5.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/2/Group_6.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/2/Group_7.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/2/Group_8.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/2/Group_9.svg" alt="패밀리로고">
                </li>
                <li>
                    <img src="/theme/basic/img/family_logo/3/Group_1.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/3/Group_2.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/3/Group_3.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/3/Group_4.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/3/Group_5.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/3/Group_6.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/3/Group_7.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/3/Group_8.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/3/Group_9.svg" alt="패밀리로고">
                </li>
                <li>
                    <img src="/theme/basic/img/family_logo/4/Group_1.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/4/Group_2.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/4/Group_3.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/4/Group_4.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/4/Group_5.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/4/Group_6.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/4/Group_7.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/4/Group_8.svg" alt="패밀리로고">
                    <img src="/theme/basic/img/family_logo/4/Group_9.svg" alt="패밀리로고">
                </li>
            </ul>
        </div>
    </section> -->
    <section class="clients modify"> 
        <h3>Clients</h3>
        <dl class="subtitle">
            <dt>에이프릴마치와 함께한<br><strong>500+ 고객사</strong></dt>
            <dd>지난 10년 동안 500여개의 브랜드와<br class="mo"> 함께하며 <br class="pc">쌓아온 노하우를 바탕으로<br class="mo"> 브랜드가 직면한 어려움을 해결해 드립니다</dd>
        </dl>
        <div class="bnr-wrap">
            <ul class="clients-bnr">
                <li class="pc"><img src="/theme/basic/img/family_logo/1/Group_1.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/1/Group_2.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/1/Group_3.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/1/Group_4.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/1/Group_5.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/1/Group_6.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/1/Group_7.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/1/Group_8.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/2/Group_1.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/2/Group_2.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/2/Group_3.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/2/Group_4.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/2/Group_5.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/2/Group_6.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/2/Group_7.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/3/Group_1.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/3/Group_2.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/3/Group_3.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/3/Group_4.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/3/Group_5.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/3/Group_6.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/3/Group_7.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/3/Group_8.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/4/Group_1.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/4/Group_2.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/4/Group_3.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/4/Group_4.svg" alt="패밀리로고"></li>
                <li><img src="/theme/basic/img/family_logo/4/Group_5.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/4/Group_6.svg" alt="패밀리로고"></li>
                <li class="pc"><img src="/theme/basic/img/family_logo/4/Group_7.svg" alt="패밀리로고"></li>
            </ul>
        </div>
    </section>
    <!-- clients 끝 -->

    <!-- 3. How it works 시작 -->
    <section class="how-it-works">
        <h3 class="hidden">How it works</h3>
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <div class="left">
                        <p>에이프릴마치는</p>
                        <p>당신의</p>
                        <p class="sq-bracket"><span>[</span><img src="/theme/basic/img/main/how_it_works1.jpg" alt="나침반"><span>]</span></p>
                        <p>입니다</p>
                    </div>
                    <div class="right">
                        <p class="subject">How it works</p>
                        <dl class="subtitle">
                            <dt>마케팅의 경쟁력,<br class="mo"> 브랜드의 지속성을<br>모두 담을 수 있는 곳을 찾는다면?</dt>
                            <dd class="line"></dd>
                            <dd>에이프릴마치는<br class="mo"> 마케팅에 직접적으로<br class="pc">도움이 될 수 있는 <br class="mo">디자인의 정확한 방향을 제시합니다</dd>
                        </dl>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="left">
                        <p>에이프릴마치는</p>
                        <p>당신의</p>
                        <p class="sq-bracket"><span>[</span><img src="/theme/basic/img/main/how_it_works2.jpg" alt="길잡이"><span>]</span></p>
                        <p>입니다</p>
                    </div>
                    <div class="right">
                        <p class="subject">How it works</p>
                        <dl class="subtitle">
                            <dt>마케팅과 디자인,<br>어디서부터 어떻게 해야할지<br class="mo"> 잘 모르겠다면?</dt>
                            <dd class="line"></dd>
                            <dd>무엇이 필요한지<br class="mo"> 어떤것을 먼저 시작해야하는지부터<br class="pc"> 함께 고민하는 에이프릴마치가 처음부터 끝까지 지원합니다</dd>
                        </dl>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="left">
                        <p>에이프릴마치는</p>
                        <p>당신의</p>
                        <p class="sq-bracket"><span>[</span><img src="/theme/basic/img/main/how_it_works3.jpg" alt="디딤돌"><span>]</span></p>
                        <p>입니다</p>
                    </div>
                    <div class="right">
                        <p class="subject">How it works</p>
                        <dl class="subtitle">
                            <dt>지금에 안주하지 않고<br>우리의 브랜드가 더 높이<br class="mo"> 도약 할 수 있도록</dt>
                            <dd class="line"></dd>
                            <dd>에이프릴마치의<br class="mo"> 독보적 전문성과 풍부한 경험, 진심의 마음으로<br class="pc">고객 브랜드가 더 높이 도약할 수 있도록 디딤돌이 되어드립니다</dd>
                        </dl>
                    </div>
                </li>
            </ul>
            <div class="btn-wrap mo">
                <div class="swiper-btn swiper-button-prev"></div>
                <div class="swiper-btn swiper-button-next"></div>
            </div>
        </div>
    </section>
    <!-- How it works 끝 -->

    <!-- 4. 롤링배너 시작 -->
    <section class="rolling-bnr">
        <h3 class="hidden">롤링배너</h3>
        <ul class="bnr-list">
            <li>
                <img src="/theme/basic/img/main/rolling_shape.svg" alt="">
                <span>APRILMARCH</span>
                <img src="/theme/basic/img/main/rolling_shape.svg" alt="">
                <span>Marketing & Creative</span>
            </li>
        </ul>
    </section>
    <!-- 롤링배너 끝 -->

    <!-- 5. 사업영역 -->
    <section class="business tab-section">
        <h3 class="hidden">사업영역</h3>
        <div class="wrap">
            <ul class="business-tabs">
                <li class="active tabs">
                    <a href="#">
                        <span class="tab-title">
                            <img src="/theme/basic/img/main/ico_business1.svg" alt="바우처 아이콘">
                            <span>정부지원 바우처 수행사</span>
                        </span>
                        <ul class="business-tags">
                            <li>제조혁신 바우처</li>
                            <li class="mo no-tag">・</li>
                            <li>수출바우처</li>
                            <li class="pc">브랜딩</li>
                            <li class="pc">웹 사이트</li>
                            <li class="pc">편집・홍보물</li>
                        </ul>
                    </a>
                </li>
                <li class="active tab-con">
                    <div class="con-wrap">
                        <p class="subject">정부지원바우처</p>
                        <dl class="subtitle">
                            <dt>제조혁신바우처・수출바우처 수행사</dt>
                            <dd>에이프릴마치는 체계적인 컨설팅과 <br class="mo">전략적인 디자인으로 브랜드를 지원합니다 <br>에이프릴마치에서 국가 지원 사업을 <br class="mo">시작해보세요</dd>
                        </dl>
                        <a href="#" class="read-more" onclick="alert('해당 페이지는 현재 준비중입니다.'); return false;">Read more<img src="/theme/basic/img/ico_more_arrow.svg" alt="화살표 아이콘"></a>
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business1.jpg" alt="정부지원바우처 이미지1"></li>
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business2.jpg" alt="정부지원바우처 이미지2"></li>
                            </ul>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </li>
                <li class="tabs">
                    <a href="#">
                        <span class="tab-title">
                            <img src="/theme/basic/img/main/ico_business2.svg" alt="바우처 아이콘">
                            <span>신사업・신규브랜드</span>
                        </span>
                        <ul class="business-tags">
                            <li class="pc">컨설팅부터 마케팅까지 풀케어</li>
                            <li>브랜딩</li>
                            <li class="mo no-tag">・</li>
                            <li class="pc">웹 사이트</li>
                            <li class="pc">편집・홍보물</li>
                            <li class="mo">컨설팅</li>
                            <li class="mo no-tag">・</li>
                            <li class="mo">마케팅</li>
                            <li class="mo no-tag">・</li>
                            <li class="mo">Full care service</li>
                        </ul>
                    </a>
                </li>
                <li class="tab-con">
                    <div class="con-wrap">
                        <p class="subject">신사업・신규 브랜드</p>
                        <dl class="subtitle">
                            <dt>디자인, 브랜딩, 마케팅 캠페인에 이르는<br><strong>Full Service Creative</strong></dt>
                            <dd>에이프릴마치는 디자인, 브랜딩, <br class="mo">마케팅 캠페인에 이르는<br>Full Service Creative로 고객사를 지원합니다</dd>
                        </dl>
                        <a href="#" class="read-more" onclick="alert('해당 페이지는 현재 준비중입니다.'); return false;">Read more<img src="/theme/basic/img/ico_more_arrow.svg" alt="화살표 아이콘"></a>
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business3.jpg" alt="신사업・신규 브랜드 이미지1"></li>
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business4.jpg" alt="신사업・신규 브랜드 이미지2"></li>
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business5.jpg" alt="신사업・신규 브랜드 이미지3"></li>
                            </ul>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </li>
                <li class="tabs">
                    <a href="#">
                        <span class="tab-title">
                            <img src="/theme/basic/img/main/ico_business3.svg" alt="바우처 아이콘">
                            <span>IT・대시보드</span>
                        </span>
                        <ul class="business-tags">
                            <li>기업별 맞춤형 대시보드</li>
                            <li class="mo no-tag">・</li>
                            <li><span class="mo">웹 </span>운영・분석・결과 대시보드</li>
                            <li class="pc">데이터 시각화</li>
                        </ul>
                    </a>
                </li>
                <li class="tab-con">
                    <div class="con-wrap">
                        <p class="subject">IT 대시보드</p>
                        <dl class="subtitle">
                            <dt>한눈에 알기 쉬운 기업별 맞춤형<br><strong>운영・분석・결과 대시보드</strong></dt>
                            <dd>방대한 데이터와 대시보드 기능을 정돈하여<br>명확한 인사이트 전달을 도울 수 있는 <br class="mo">직관적인 대시보드를 디자인 합니다.</dd>
                        </dl>
                        <a href="/dashboard.php" class="read-more">Read more<img src="/theme/basic/img/ico_more_arrow.svg" alt="화살표 아이콘"></a>
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business6.jpg" alt="IT 대시보드 이미지1"></li>
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business7.jpg" alt="IT 대시보드 이미지2"></li>
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business5.jpg" alt="IT 대시보드 이미지3"></li>
                            </ul>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </li>
                <li class="tabs">
                    <a href="#">
                        <span class="tab-title">
                            <img src="/theme/basic/img/main/ico_business4.svg" alt="바우처 아이콘">
                            <span>공공기관・대학</span>
                        </span>
                        <ul class="business-tags">
                            <li>체계적인 일정 관리</li>
                            <li class="mo no-tag">・</li>
                            <li>표준 준수</li>
                            <li class="pc">브랜딩</li>
                            <li class="pc">웹 사이트</li>
                            <li class="pc">편집・홍보물</li>
                        </ul>
                    </a>
                </li>
                <li class="tab-con">
                    <div class="con-wrap">
                        <p class="subject">공공기관・대학</p>
                        <dl class="subtitle">
                            <dt>10년 연속・공공기관 전문<br><strong>디자인 마케팅 서포터즈</strong></dt>
                            <dd>공공기관 조직 이해도를 기반으로 <br class="mo">인쇄물 디자인, 홍보영상 제작, 지원사업 운영까지<br>폭넓은 영역에서 다양한 결과물로 <br class="mo">든든한 지원을 하고 있습니다</dd>
                        </dl>
                        <a href="#" class="read-more" onclick="alert('해당 페이지는 현재 준비중입니다.'); return false;">Read more<img src="/theme/basic/img/ico_more_arrow.svg" alt="화살표 아이콘"></a>
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business8.jpg" alt="공공기관・대학 이미지1"></li>
                                <li class="swiper-slide"><img src="/theme/basic/img/main/business1.jpg" alt="공공기관・대학 이미지2"></li>
                            </ul>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- 사업영역 끝 -->
    <!-- 6. our purpose 시작 -->
    <section class="our-purpose">
        <h3 class="hidden">Our purpose</h3>
        <ul class="purpose-list">
            <li>
                <div class="motion">
                    <div class="wrap">
                        <img class="temp dpnone" src="/theme/basic/img/main/mot1.svg" alt="">
                        <video autoplay loop muted playsinline -webkit-playsinline class="">
                            <source src="/theme/basic/img/main/mot1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="wrap" style="display: none;">
                        <div class="track track1">
                            <img class="ball1" src="/theme/basic/img/main/ball_check.svg" alt="">
                            <img class="ball2" src="/theme/basic/img/main/ball_normal.svg" alt="">
                            <img class="ball3" src="/theme/basic/img/main/ball_normal.svg" alt="">
                            <img class="ball4" src="/theme/basic/img/main/ball_pink.svg" alt="">
                        </div>
                        <div class="track track2">
                            <img class="sq1" src="/theme/basic/img/main/sq_point.svg" alt="">
                            <img class="sq2" src="/theme/basic/img/main/sq_normal.svg" alt="">
                            <img class="sq3" src="/theme/basic/img/main/sq_black.svg" alt="">
                            <img class="sq4" src="/theme/basic/img/main/sq_point.svg" alt="">
                        </div>
                        <div class="track track3">
                            <img class="sq5 sm" src="/theme/basic/img/main/sq_sm_normal.svg" alt="">
                            <img class="sq6 sm" src="/theme/basic/img/main/sq_sm_black.svg" alt="">
                            <img class="sq7 sm" src="/theme/basic/img/main/sq_sm_black.svg" alt="">
                            <img class="ball5" src="/theme/basic/img/main/ball_flower.svg" alt="">
                            <img class="ball6" src="/theme/basic/img/main/ball_star.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="txt">
                    <p class="num">01</p>
                    <dl>
                        <dt>Brand experience</dt>
                        <dd class="strong">
                            <p>브랜드의 모든 접점에서</p>
                            <p>고객의 공감과 감동을 이끌어 내고자 합니다</p>
                        </dd>
                        <dd>
                            <p>우리는 브랜드 고유의 스토리를 언어화・시각화하여</p>
                            <br class="mo">
                            <p>타당한 논리적 접근으로 유연한 소통의 방식으로 <br class="mo">브랜드스러움을 설계합니다</p>
                        </dd>
                    </dl>
                </div>
            </li>
            <li>
                <div class="txt">
                    <p class="num">02</p>
                    <dl>
                        <dt>Design Innovation</dt>
                        <dd class="strong">
                            <p>급변하는 디지털 환경에서도 모든 순간이</p>
                            <p>만족되는 디자인 경험을 만들고자 합니다</p>
                        </dd>
                        <dd>
                            <p>우리는 디자인과 마케팅 전략을 통합적 관점에서 <br class="mo">접근하여</p>
                            <p>미디어의 특성에 따라 변화하는 <br class="mo">디자인 컨텐츠 개발로</p>
                            <p>시대를 리딩하고 <br class="mo">고객의 마음을 사로잡는 디자인 혁신을 만들겠습니다</p>
                        </dd>
                    </dl>
                </div>
                <div class="motion">
                    <div class="wrap">
                        <img class="temp dpnone" src="/theme/basic/img/main/mot2.svg" alt="">
                        <video autoplay loop muted playsinline -webkit-playsinline class="">
                            <source src="/theme/basic/img/main/mot2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="wrap" style="display: none;">
                        <img class="sq1 lg" src="/theme/basic/img/main/sq_dash.svg" alt="">
                        <img class="sq2 sm" src="/theme/basic/img/main/sq_blue.svg" alt="">
                        <img class="sq3 sm" src="/theme/basic/img/main/sq_black.svg" alt="">
                        <img class="ball1 md" src="/theme/basic/img/main/ball_point.svg" alt="">
                        <img class="ball2" src="/theme/basic/img/main/ball_squeeze.svg" alt="">
                        <img class="sq4" src="/theme/basic/img/main/sq_point.svg" alt="">
                        <img class="sq5" src="/theme/basic/img/main/sq_normal.svg" alt="">
                        <img class="sq6" src="/theme/basic/img/main/sq_check.svg" alt="">
                        <img class="sq7" src="/theme/basic/img/main/sq_black.svg" alt="">
                        <img class="ball3" src="/theme/basic/img/main/ball_normal.svg" alt="">
                        <img class="sq8" src="/theme/basic/img/main/sq_point.svg" alt="">
                    </div>
                </div>
            </li>
            <li>
                <div class="motion">
                    <div class="wrap">
                        <img class="temp dpnone" src="/theme/basic/img/main/mot3.svg" alt="">
                        <video autoplay loop muted playsinline -webkit-playsinline class="">
                            <source src="/theme/basic/img/main/mot3.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="wrap" style="display: none;">
                        <div class="track">
                            <img class="ball1" src="/theme/basic/img/main/ball_normal.svg" alt="">
                            <img class="ball2" src="/theme/basic/img/main/ball_check.svg" alt="">
                            <img class="ball3" src="/theme/basic/img/main/ball_black.svg" alt="">
                            <img class="ball4" src="/theme/basic/img/main/ball_hand.svg" alt="">
                            <img class="sq1 sm" src="/theme/basic/img/main/sq_black.svg" alt="">
                            <img class="ball5" src="/theme/basic/img/main/ball_point2.svg" alt="">
                            <img class="sq2 sm" src="/theme/basic/img/main/sq_normal.svg" alt="">
                            <img class="sq3 sm" src="/theme/basic/img/main/sq_black.svg" alt="">
                            <img class="sq4 sm" src="/theme/basic/img/main/sq_black.svg" alt="">
                            <img class="ball6 sm" src="/theme/basic/img/main/ball_normal.svg" alt="">
                            <img class="ball7 sm" src="/theme/basic/img/main/ball_normal.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="txt">
                    <p class="num">03</p>
                    <dl>
                        <dt>Marketing Consulting</dt>
                        <dd class="strong">
                            <p>고객사가 소비자와 긍정적 관계를 구축하고</p>
                            <p>브랜드 충성도를 굳건히 다지도록 돕고자 합니다</p>
                        </dd>
                        <dd>
                            <p>브랜드 키 비주얼을 활용한 온/오프라인 디자인 제작부터</p><br class="mo">
                            <p>사용자 중심 웹사이트 개발과 온라인 마케팅으로</p><br class="mo">
                            <p>비지니스 성장을 위한 전략적 마케팅을 지원합니다</p>
                        </dd>
                    </dl>
                </div>
            </li>
        </ul>
    </section>
    <!-- our purpose 끝 -->

    <!-- 7. expertise 시작 -->
    <!-- <section class="expertise">
        <div class="wrap">
            <h3>Expertise</h3>
            <ul>
                <li>
                    <div class="left">
                        <p class="num">01</p>
                        <dl>
                            <dt>
                                Brand Concepting
                            </dt>
                            <dd>Brand Strategy</dd>
                            <dd>Customer Experience</dd>
                            <dd>Brand slogan & Visual Identity</dd>
                            <dd>Space Concept</dd>
                        </dl>
                    </div>
                    <div class="right"><img src="/theme/basic/img/main/expertise1.svg" alt="Brand"></div>
                </li>
                <li>
                    <div class="left">
                        <p class="num">02</p>
                        <dl>
                            <dt>Brand Experience Design</dt>
                            <dd>Brand Expereince Design</dd>
                            <dd>Space Design & Experience</dd>
                            <dd>Motion & Sensory Identity</dd>
                            <dd>Brand Behavior System</dd>
                        </dl>
                    </div>
                    <div class="right"><img src="/theme/basic/img/main/expertise2.svg" alt="UXUI Web&App"></div>
                </li>
                <li>
                    <div class="left">
                        <p class="num">03</p>
                        <dl>
                            <dt>Creative & Activation</dt>
                            <dd>Brand Communication</dd>
                            <dd>Branded Contents</dd>
                            <dd>Digital Marketing</dd>
                            <dd>Advertising</dd>
                            <dd>Training & Education</dd>
                        </dl>
                    </div>
                    <div class="right"><img src="/theme/basic/img/main/expertise3.svg" alt="UXUI IT-dashboard"></div>
                </li>
            </ul>
        </div>
    </section> -->
    <section class="expertise test">
        <div class="wrap">
            <h3>Expertise</h3>
            <div class="left">
                <ul class="txt-list">
                    <li>
                        <p class="num">01</p>
                        <dl>
                            <dt>
                                Brand Concepting
                            </dt>
                            <dd>Brand Strategy</dd>
                            <dd>Customer Experience</dd>
                            <dd>Brand slogan & Visual Identity</dd>
                            <dd>Space Concept</dd>
                        </dl>
                    </li>
                    <li>
                        <p class="num">02</p>
                        <dl>
                            <dt>Brand Experience Design</dt>
                            <dd>Brand Expereince Design</dd>
                            <dd>Space Design & Experience</dd>
                            <dd>Motion & Sensory Identity</dd>
                            <dd>Brand Behavior System</dd>
                        </dl>
                    </li>
                    <li>
                        <p class="num">03</p>
                        <dl>
                            <dt>Creative & Activation</dt>
                            <dd>Brand Communication</dd>
                            <dd>Branded Contents</dd>
                            <dd>Digital Marketing</dd>
                            <dd>Advertising</dd>
                            <dd>Training & Education</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="right">
                <ul class="img-list">
                    <li><img src="/theme/basic/img/main/expertise1.svg" alt="Brand"></li>
                    <li><img src="/theme/basic/img/main/expertise2.svg" alt="UXUI Web&App"></li>
                    <li><img src="/theme/basic/img/main/expertise3.svg" alt="UXUI IT-dashboard"></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- expertise 끝 -->

    <!-- 8. aprilmarch keyowrd 시작 -->
    <section class="keyword">
        <h3 class="hidden">Aprilmarch keyowrd</h3>
        <ul class="txt-wrap">
            <li class="left">
                <p>
                    <span class="key-txt">RESEARCH</span>
                    <span class="line-area">
                        <span class="line"><img src="/theme/basic/img/main/keyword_line.png" alt="선 이미지" class="mo"></span>
                    </span>
                    <span class="num">35</span>
                </p>
                <p>
                    <span class="key-txt">PLAN</span>
                    <span class="line-area">
                        <span class="line"><img src="/theme/basic/img/main/keyword_line.png" alt="선 이미지" class="mo"></span>
                    </span>
                    <span class="num">10</span>
                </p>
            </li>
            <li class="center">
                <p>
                    <span class="key-txt">DESIGN</span>
                    <span class="line-area">
                        <span class="line"><img src="/theme/basic/img/main/keyword_line.png" alt="선 이미지" class="mo"></span>
                    </span>
                    <span class="num">80</span>
                </p>
            </li>
            <li class="right">
                <p>
                    <span class="key-txt">DEVELOP</span>
                    <span class="line-area">
                        <span class="line"><img src="/theme/basic/img/main/keyword_line.png" alt="선 이미지" class="mo"></span>
                    </span>
                    <span class="num">15</span>
                </p>
                <p>
                    <span class="key-txt">MANAGE</span>
                    <span class="line-area">
                        <span class="line"><img src="/theme/basic/img/main/keyword_line.png" alt="선 이미지" class="mo"></span>
                    </span>
                    <span class="num">35</span>
                </p>
            </li>
        </ul>
        <ul class="img-wrap">
            <li><img src="/theme/basic/img/main/keyword_bg1.svg" alt="키워드 모션 이미지1"></li>
            <li class="active"><img src="/theme/basic/img/main/keyword_bg2.svg" alt="키워드 모션 이미지2"></li>
            <li class="dom-txt">
                <dl class="subtitle">
                    <dt><img src="/theme/basic/img/main/dom_logo.svg" alt="Aprilmarch marketing creative"></dt>
                    <dd>
                        <p>우리의 전문성과 열정 진심의 영향력은</p>
                        <p>고객사에게는 든든한 믿음을 소비자에게는 <br class="mo">새로운 기쁨을 전달합니다</p>
                        <p><strong>에이프릴마치 M&C는 모든 순간 순간을 <br class="mo">늘 단단한 마음으로 준비하며 최선을 다합니다</strong></p>
                    </dd>
                </dl>
            </li>
        </ul>
    </section>
    <!-- aprilmarch keyowrd 끝 -->
</article>
<!-- 메인 끝 -->

<script src="/theme/basic/js/main.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.php');