<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="visual sub dashboard test">
    <div class="wrap tit-motion">
        <div class="tit-area">
            <img class="tit" src="/theme/basic/img/dashboard/tit.svg" alt="Dashboard ing Platform">
            <ul class="tag-wrap">
                <li class="tag">Infographic</li>
                <li class="tag">IT</li>
            </ul>
        </div>
        <p class="txt">
            <strong>아무나 할 수 없는 대시보드 디자인<span class="pc"> - </span><br class="mo">누구보다 잘 할 수 있다고 당당히 말합니다</strong>
            <span>예술성을 가진 전략가의 두뇌로 <br class="mo">소비자 인사이트를 읽는</span>
            <span>기획자의 혜안으로 <br class="mo">우리는 대시보드를 디자인합니다</span>
        </p>
    </div>
</div>

<article id="dashboard" class="sub dashboard test">
    <h2 class="hidden">본문영역</h2>
    <section class="data-gui">
        <h3 class="hidden">데이터 시각화</h3>
        <!-- <ul class="circle top-right">
            <li></li>
            <li></li>
        </ul> -->
        <div class="wrap">
            <div class="video-wrap">
                <!-- <img src="/theme/basic/img/dashboard/data_gui_sample.png" alt=""> -->
                <video muted playsinline src="/theme/basic/img/dashboard/data_gui_video.mp4"></video>
                <ul class="motion-area">
                    <li>
                        <span class="pin">
                            <span class="head">01</span>
                            <span class="line"></span>
                        </span>
                        <span class="txt">Navigation</span>
                    </li>
                    <li>
                        <span class="pin">
                            <span class="head">02</span>
                            <span class="line"></span>
                        </span>
                        <span class="txt">Statistical Key Figure</span>
                    </li>
                    <li>
                        <span class="pin">
                            <span class="head">03</span>
                            <span class="line"></span>
                        </span>
                        <span class="txt">Graph</span>
                    </li>
                    <li>
                        <span class="pin">
                            <span class="head">04</span>
                            <span class="line"></span>
                        </span>
                        <span class="txt">Visitor count graph</span>
                    </li>
                </ul>
                <!-- <ul class="frame-name">
                    <li>Data Visualization</li>
                    <li>Text Visualization</li>
                    <li>Background</li>
                </ul> -->
                <img class="frame-bottom" src="/theme/basic/img/dashboard/gui_video_bottom.svg" alt="">
            </div>
            <dl class="subtitle">
                <dt>
                    <p>복잡하고 많은 정보량</p>
                    <br class="mo">
                    <p><strong><span class="underline">직관적인 데이터 시각화</span>로 <br class="mo">보기 쉽고 명확하게.</strong></p>
                </dt>
                <dd class="slogan flex"><span>누구나 이해하며</span><img src="/theme/basic/img/emoji_lightning_color.png" alt=""><span>언제나 편리하게</span></dd>
                <dd>
                    <p>방대한 데이터와 결과를 정돈하여</p>
                    <p>명확한 인사이트의 이해를 도울 수 있는 <br class="mo">직관적인 대시보드 제공</p>
                </dd>
            </dl>
        </div>
        <ul class="circle left-bottom">
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="bg">
            <img src="/theme/basic/img/dashboard/data_gui_bg.png" alt="배경 이미지">
        </div>
    </section>
    <section class="data-simple">
        <h3 class="hidden">간결한 데이터</h3>
        <div class="wrap">
            <dl class="subtitle">
                <dt>
                    <p>Consulting<span class="extra-txt">&</span></p>
                    <p>Infographic</p>
                </dt>
                <dd class="slogan">쉽게 도전하지 못하는 <br class="mo">대시보드 디자인 분야</dd>
                <dd class="flex">
                    <p class="pc"><strong><span class="point">롯데멤버스</span></strong> 데이터리서치 플랫폼 <strong><span class="point">9년 연속</span> 디자인</strong> 수행사</p>
                    <p class="pc">IT선도기업 <strong><span class="point">LG CNS 4년 연속</span> 대시보드 디자인</strong> 수행사</p>
                    <p class="mo">
                        <strong style="display:none"><span class="point">롯데 멤버스</span></strong>
                        <br style="display:none">
                        <strong><span class="point">9년 연속</span></strong>
                    </p>
                    <p class="mo">
                        <strong style="display:none"><span class="point">LG CNS</span></strong>
                        <br style="display:none">
                        <strong><span class="point">4년 연속</span></strong>
                    </p>
                </dd>
                <dd class="flex">
                    <p><img src="/theme/basic/img/dashboard/lotte_members_logo.svg" alt="롯데멤버스 로고"></p>
                    <p><img src="/theme/basic/img/dashboard/lg_cns_logo.svg" alt="LG CNS 로고"></p>
                </dd>
            </dl>
            <div class="center-area">
                <p>국ㆍ내ㆍ유ㆍ일</p>
                <p class="pc">데이터 시각화 전문 디자인 팀이 완성하는</p>
                <p class="mo">데이터 시각화 전문 디자인팀</p>
                <dl class="subtitle">
                    <dt>
                        <p>Dashboard<span class="extra-txt">&</span></p>
                        <p>Full Design Service</p>
                    </dt>
                    <dd class="slogan"><span class="mo-block">인사이트 분석 화면설계</span><span class="pc">ㆍ</span><span class="mo-block">디자인 가이드 개발</span><span class="pc">ㆍ</span><span class="mo-block">인포그래픽</span><span class="pc">ㆍ</span><span class="mo-block">모션그래픽 인터렉션</span><span class="pc">ㆍ개발</span></dd>
                </dl>
            </div>
            <div class="content">
                <div class="video-wrap">
                    <video muted autoplay loop playsinline src="/theme/basic/img/dashboard/data_simple_video1.mp4"></video>
                </div>
                <img class="smaple-img" src="/theme/basic/img/dashboard/data_simple_chart.svg" alt="대시보드 차트 이미지">
            </div>
        </div>
        <div class="sample-video">
            <video muted autoplay loop playsinline src="/theme/basic/img/dashboard/data_simple_video2.mp4"></video>
        </div>
        <div class="bg">
            <img src="/theme/basic/img/dashboard/data_simple_bg.svg" alt="">
        </div>
    </section>
    <section class="data-look">
        <h3 class="hidden">보기편한 데이터</h3>
        <div class="wrap">
            <dl class="subtitle">
                <dt>
                    <p>Look at it<img class="emoji" src="/theme/basic/img/dashboard/emoji_eyes.svg" alt="눈모양 아이콘"></p>
                    <p>without reading the data!</p>
                    <p class="tag">Easy</p>
                    <p class="tag">Convenient</p>
                </dt>
                <dd>
                    <p>데이터를 읽지말고 <img class="emoji" src="/theme/basic/img/dashboard/emoji_eyes.svg" alt="눈모양 아이콘"> 보세요</p>
                    <p>관리자가 쉽고 편한 대시보드 디자인으로</p>
                    <p>복잡한 데이터도 명확하고 간결하게 <br class="mo">중요한 <img class="emoji" src="/theme/basic/img/dashboard/emoji_lightning.svg" alt="번개모양 아이콘"> 인사이트 전달</p>
                </dd>
            </dl>
            <ul class="info-list">
                <li>
                    <video muted autoplay loop playsinline src="/theme/basic/img/dashboard/data_look_video1.mp4"></video>
                    <dl>
                        <dt>인터페이스 컨설팅</dt>
                        <dd>
                            <p>브랜드 & 고객사 맞춤형</p>
                            <p>화면설계 부터 컨텐츠 노출 방법까지</p>
                            <p>그래픽 가이드 설계ㆍ인터랙션 개발</p>
                        </dd>
                    </dl>
                </li>
                <li>
                    <video muted autoplay loop playsinline src="/theme/basic/img/dashboard/data_look_video2.mp4"></video>
                    <dl>
                        <dt>다양한 컴포넌트 개발</dt>
                        <dd>
                            <p>목적별 타겟별 실제 사용시 필요한 요소를</p>
                            <p>손쉽게 구성하고 조작할 수 있는</p>
                            <p>체계적인 컴포넌트 시스템 개발 제공</p>
                        </dd>
                    </dl>
                </li>
                <li>
                    <video muted autoplay loop playsinline src="/theme/basic/img/dashboard/data_look_video3.mp4"></video>
                    <dl>
                        <dt>모든 디바이스 반응형 디자인</dt>
                        <dd>
                            <p>모바일, 태블릿, PC 등<br class="mo"></p>
                            <p>모든 디바이스에서 <br class="mo">최적화 된 결과물</p>
                            <p>사용이 가능하도록 <br class="mo">미디어 특성 분석 후</p>
                            <p>맞춤 디자인 제공</p>
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>
        <div class="bg">
            <img src="/theme/basic/img/dashboard/data_look_bg.svg" alt="">
        </div>
    </section>
    <section class="workflow">
        <h3 class="hidden">체게적인 워크플로우</h3>
        <div class="wrap">
            <dl class="subtitle">
                <dt>
                    <p><span class="point">One<span class="pc">-</span>stop</span></p>
                    <p>Dashboard <span class="pc">Solution</span></p>
                </dt>
                <dd>
                    <p><strong>체계적인 워크플로우로 시작부터 끝까지<span class="pc">!</span></strong></p>
                    <p>데이터 분석ㆍ기획ㆍ설계ㆍUI디자인 <span class="pc">ㆍ</span><br class="mo">프론트 개발까지</p>
                    <p><span>전 과정을 총체적 관리하여 </span><br class="mo"><span>완벽한 결과물을 제공합니다</span></p>
                </dd>
            </dl>
            <ul class="flow-list">
                <li class="active" title="01.">
                    <p>체계적인 기획부터</p>
                    <p>꼼꼼한 화면설계</p>
                </li>
                <li title="02.">
                    <p>사용자, B/O 페이지</p>
                    <p>직관적인 디자인</p>
                </li>
                <li title="03.">
                    <p>프론트 개발까지</p>
                    <p>한 치의 오차없이 완벽하게</p>
                </li>
            </ul>
            <div class="motion-wrap">
                <ul class="flow-motion">
                    <li>
                        <span class="shape"></span>
                        <span class="txt">꼼꼼한 화면설계</span>
                        <span class="txt extra"><span>체계적인 기획</span></span>
                    </li>
                    <li>
                        <span class="shape"></span>
                        <span class="txt">디자인<br>(사용자, B/O)</span>
                    </li>
                    <li>
                        <span class="shape"></span>
                        <span class="txt">개발</span>
                    </li>
                    <li>
                        <span class="shape"></span>
                        <span class="txt">디버깅</span>
                    </li>
                    <li>
                        <span class="shape"></span>
                        <span class="txt">쉽고 편한<br>대시보드 완성!</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 인터뷰 interview -->
    <?php include_once(G5_THEME_PATH.'/component/interview_slide.php'); ?>

    <section class="card-bnr">
        <div class="back-txt">
            <p>국내유일 체계적인<img src="/theme/basic/img/ico_asterisk_black.svg" alt=""><span class="point">데이터 <br class="mo">시각화<img class="reverse" src="/theme/basic/img/rolling_asterisk.svg" alt=""><span class="point">전문 디자인 팀</span> 구성</span><br class="mo"></p>
            <p class="mot mot1"><span class="point">Dashboard</span><img class="reverse" src="/theme/basic/img/rolling_asterisk.svg" alt=""> IT 기업 <br class="mo">맞춤형 Full Design Service<br class="mo"></p>
            <p class="mot mot2">방대한 <span class="point">데이터</span><img src="/theme/basic/img/ico_asterisk_black.svg" alt=""><span class="point">결과 정리</span><img src="/theme/basic/img/ico_asterisk_black.svg" alt=""><span class="point"><br class="mo">화면설계</span> 직관적인 대시보드 제공</p>
        </div>
        <ul class="card-wrap mot mot3">
            <li></li>
            <li></li>
            <li class="front">
                <img class="active" src="/theme/basic/img/dashboard/rolling_card1.png" alt="Dashboard Design">
                <img src="/theme/basic/img/dashboard/rolling_card2.png" alt="UXUI Design">
                <img src="/theme/basic/img/dashboard/rolling_card3.png" alt="Space Design">
                <img src="/theme/basic/img/dashboard/rolling_card4.png" alt="Branding Design">
                <img src="/theme/basic/img/dashboard/rolling_card5.png" alt="Motion Graphic">
                <img src="/theme/basic/img/dashboard/rolling_card6.png" alt="Package Design">
            </li>
        </ul>
    </section>
</article>

<script src="/theme/basic/js/custom.js"></script>
<?php
include_once(G5_THEME_PATH.'/tail.php');