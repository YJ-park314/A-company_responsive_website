<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="visual sub govt">
    <div class="wrap tit-motion">
        <div class="tit-area">
            <img class="tit" src="/theme/basic/img/govt/tit.svg" alt="Goverment Marketing">
            <ul class="tag-wrap">
                <li class="tag bg-none">공공기관</li>
                <li class="tag bg-none">대학</li>
            </ul>
        </div>
        <p class="txt">
            <span class="flex">
                <strong>대학과 공공기관을 가장 잘 이해하는 지원자로서</strong>
                <img class="pc" src="/theme/basic/img/emoji_lightning_color.png" alt="">
                <strong>교육과 공익을 위한 지원에<img class="mo" src="/theme/basic/img/emoji_lightning_color.png" alt=""> 진심을 담겠습니다</strong>
            </span>
            <span>2015년 창업의 시작부터 대학과 공공기관을 <br class="mo">지원하며 성장할 수 있었습니다</span>
            <span>믿고 맡겨 주신 감사함을 잊지 않고<br class="mo"></span> 
            <span>대학ㆍ공공기관 사업의 이해도와 풍부한 경험으로 <br class="mo">더 든든한 지원자가 되도록 하겠습니다</span>
        </p>
    </div>
    <div class="keyword">
        <ul class="txt-wrap">
            <li class="left">
                <p>
                    <span class="key-txt">DESIGN</span>
                    <span class="line-area">
                        <span class="line"></span>
                    </span>
                    <span class="num">20</span>
                </p>
                <p>
                    <span class="key-txt">PLAN</span>
                    <span class="line-area">
                        <span class="line"></span>
                    </span>
                    <span class="num">15</span>
                </p>
            </li>
            <li class="right">
                <p>
                    <span class="key-txt">DEVELOP</span>
                    <span class="line-area">
                        <span class="line"></span>
                    </span>
                    <span class="num">15</span>
                </p>
                <p>
                    <span class="key-txt">MANAGE</span>
                    <span class="line-area">
                        <span class="line"></span>
                    </span>
                    <span class="num">10</span>
                </p>
            </li>
        </ul>
    </div>
</div>

<article id="govt" class="sub">
    <h2 class="hidden">본문영역</h2>
    <section class="support">
        <h3 class="hidden">에이프릴마치 M&C</h3>
        <div class="frame-wrap">
            <div class="frame-area active order1">
                <div class="shape">
                    <div class="fr-top">
                        <span>Aprilmarch</span>
                        <span>Marketing&creative</span>
                        <div class="bg"></div>
                    </div>
                    <div class="fr-body">
                        <div class="inner">
                            <p>our pride</p>
                            <strong>10년 연속 대학 · 공공기관 전문</strong>
                            <p>디자인 마케팅 서포터즈</p>
                            <p>에이프릴마치 M&C</p>
                        </div>
                    </div>
                </div>
                <div class="frame-area order2">
                    <div class="shape">
                        <div class="fr-top">
                            <span>Aprilmarch</span>
                            <span>Marketing&creative</span>
                            <div class="bg"></div>
                        </div>
                        <div class="fr-body"></div>
                    </div>
                    <div class="frame-area order3">
                        <div class="shape">
                            <div class="fr-top">
                                <span>Aprilmarch</span>
                                <span>Marketing&creative</span>
                                <div class="bg"></div>
                            </div>
                            <div class="fr-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <?php 
                $dummy = array(
                    array(
                        'strong' => '10년 연속 ',
                        'span' => 'ㆍ 글로벌 관광 컨텐츠 홍보물 제작',
                        'year' => array("2015", "2025"),
                        'src' => 'songpa.svg',
                        'class' => 'type1',
                    ),
                    array(
                        'strong' => '외국인 투어 컨텐츠 조사 브로슈어 제작',
                        'span' => '',
                        'year' => array("2018", "2019"),
                        'src' => 'junggu.svg',
                        'class' => 'type2',
                    ),
                    array(
                        'strong' => '평생교육원 디자인 ',
                        'span' => '수행사 선정',
                        'year' => array("2024", "2025"),
                        'src' => 'seoul.svg',
                        'class' => 'type1',
                    ),
                    array(
                        'strong' => '3년 연속 ',
                        'span' => 'ㆍ근로자예술제 연간 디자인 /홍보',
                        'year' => array("2021", "2023"),
                        'src' => 'kbs.svg',
                        'class' => 'type3',
                    ),
                    array(
                        'strong' => '2회 연속 ',
                        'span' => 'ㆍ 글로벌 홍보 브로슈어 사업 수행사 선정',
                        'year' => array("2024", "2024"),
                        'src' => 'itp.svg',
                        'class' => 'type2',
                    ),
                    array(
                        'strong' => '국민성과디자인대회 홍보 및 운영 디자인 ',
                        'span' => '',
                        'year' => array("2023", "2023"),
                        'src' => 'kidp.svg',
                        'class' => 'type1',
                    ),
                    array(
                        'strong' => '3년 연속 ',
                        'span' => 'ㆍ인포그래픽 월간 매거진 디자인',
                        'year' => array("2024", "2025"),
                        'src' => 'kmi.svg',
                        'class' => 'type2',
                    ),
                    array(
                        'strong' => '10년 연속 ',
                        'span' => 'ㆍ브랜드 홍보 및 브로슈어 디자인 대행',
                        'year' => array("2015", "2025"),
                        'src' => 'dongguk.svg',
                        'class' => 'type1',
                    ),
                    array(
                        'strong' => '7년 연속 ',
                        'span' => 'ㆍ입시 홍보 자료집 디자인 제작',
                        'year' => array("2018", "2025"),
                        'src' => 'smu.svg',
                        'class' => 'type3',
                    ),
                    array(
                        'strong' => '인포그래픽 온라인 홍보물 디자인 제작 ',
                        'span' => '',
                        'year' => array("2018", "2018"),
                        'src' => 'bogun.svg',
                        'class' => 'type2',
                    ),
                );
                for($i=0; $i<count($dummy); $i++) { ?>
                <li class="swiper-slide <?php echo $dummy[$i]['class'] ?>">
                    <div class="top">
                        <?php for($u=0; $u<count($dummy[$i]['year']); $u++) { ?>
                        <p><?php echo $dummy[$i]['year'][$u] ?></p>
                        <?php } ?>
                        <p>Support</p>
                    </div>
                    <div class="con-wrap">
                        <img class="logo" src="/theme/basic/img/govt/support_logo/<?php echo $dummy[$i]['src'] ?>" alt="">
                        <div class="txt">
                            <strong><?php echo $dummy[$i]['strong'] ?></strong>
                            <span><?php echo $dummy[$i]['span'] ?></span>
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <div class="swiper-pagination mo"></div>
        </div>
        <div class="bg back">
            <img src="/theme/basic/img/govt/support_back_bg.svg" alt="배경이미지1">
        </div>
        <div class="bg front">
            <!-- <img src="/theme/basic/img/govt/support_front_bg.svg" alt="배경이미지2">-->
            <img src="/theme/basic/img/govt/support_bg_front1.svg" alt="배경이미지2">
            <img src="/theme/basic/img/govt/support_bg_front2.svg" alt="배경이미지2">
            <img src="/theme/basic/img/govt/support_bg_front3.svg" alt="배경이미지2">
        </div>
    </section>
    <section class="performance">
        <div class="wrap">
            <div class="left">
                <h3>Our Performance</h3>
                <dl>
                    <dt>
                        <p><strong>대학과 공공기관을 위한</strong></p>
                        <p>최적의 서비스를 제공합니다</p>
                    </dt>
                    <dd>
                        <p>대학과 공공기관의 조직 이해도를 기반으로<br class="mo"></p>
                        <p>인쇄물 디자인, 캠페인 기획, 홍보영상 제작, <br class="mo">글로벌 홍보물 기획 조사까지<br class="mo"></p>
                        <p>폭넓은 영역에서 다양한 결과물로 <br class="mo">든든한 지원을 하고 있습니다</p>
                    </dd>
                </dl>
            </div>
            <div class="right">
                <div class="list-wrap">
                    <div class="track track1">
                        <?php for($i=0; $i<2; $i++) { ?>
                        <ul class="img-list">
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img1_1.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img1_2.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img1_3.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img1_4.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img1_5.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img1_6.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img1_7.jpg" alt=""></li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="track track2">
                        <?php for($i=0; $i<2; $i++) { ?>
                        <ul class="img-list">
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img2_1.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img2_2.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img2_3.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img2_4.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img2_5.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img2_6.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img2_7.jpg" alt=""></li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="track track3">
                        <?php for($i=0; $i<2; $i++) { ?>
                        <ul class="img-list">
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img3_1.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img3_2.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img3_3.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img3_4.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img3_5.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img3_6.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/govt/performance/img3_7.jpg" alt=""></li>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="management">
        <h3 class="hidden">management</h3>
        <dl class="subtitle">
            <dt>
                <p>Total<span class="extra-txt">&amp;</span></p>
                <p><span class="point">Management</span> System</p>
                <p class="tag">Public</p>
                <p class="tag">University</p>
            </dt>
            <dd>
                <p class="slogan">대학ㆍ공공기관 맞춤형 디자인 <img src="/theme/basic/img/emoji_heartbeat_fff.svg" alt=""><span class="pc"> 대학ㆍ공공기관 조직 특수성을 이해하는</span> 운영 노하우</p>
                <p>디자인 실행 업무를 넘어</p>
                <p>대학ㆍ공공기관에서의 <br class="mo">풍부한 수행 경험과 <img src="/theme/basic/img/emoji_asterisk_fff.svg" alt=""> 관리·운영 노하우를 바탕으로<br class="mo"></p>
                <p>모두가 만족할 수 있는 결과물을 창출합니다</p>
            </dd>
        </dl>
        <ul class="key-list">
            <li>
                <div class="top">key 01</div>
                <div>
                    <p>공공기관 특수성 숙지</p>
                    <p><strong>디자인 표현 요구사항에 대한</strong></p>
                    <p class="underline"><strong>유연한 협조와 지원</strong></p>
                </div>
            </li>
            <li>
                <div class="top">key 02</div>
                <div>
                    <p>사업 관리 방안 구축으로 </p>
                    <p><strong>디자인부터 운영까지 완벽하고 안전한</strong></p>
                    <p class="underline"><strong>지원 시스템 구축</strong></p>
                </div>
            </li>
        </ul>
        <ul class="step-list">
            <li>
                <dl>
                    <dt>
                        <p>기획ㆍ취재ㆍ촬영</p>
                        <p>리서치ㆍ제작 ㆍ시공</p>
                    </dt>
                    <dd>
                        <p>디자인 결과물과 함께하는</p>
                        <p>다양한 연관 업무에 대한</p>
                        <p>풍부한 경험으로</p>
                        <p>원스탑 서비스 가능</p>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>
                        <p>라이센스 걱정없는</p>
                        <p>컨텐츠 사용</p>
                    </dt>
                    <dd>
                        <p>이미지 & 폰트</p>
                        <p>글로벌 라이센스 보유</p>
                        <p>안전한 컨텐츠 제공</p>
                        <p>결과물 창출</p>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>
                        <p>제작ㆍ검수</p>
                        <p>교정 교열 지원</p>
                    </dt>
                    <dd>
                        <p>대학ㆍ공공기관 전문 PM 상주하여</p>
                        <p>모든 제작물 사전 점검 절차로</p>
                        <p>이슈 사전 방지</p>
                        <p>프로세스 도입</p>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>
                        <p>정기적</p>
                        <p>보고ㆍ협의</p>
                    </dt>
                    <dd>
                        <p>과업의 진행사항을</p>
                        <p>실시간 스크린 가능하도록</p>
                        <p>정기 보고 체계 및</p>
                        <p>전원 정규직 전담 인원 배정</p>
                    </dd>
                </dl>
            </li>
        </ul>
    </section>
    <section class="process">
        <h3 class="hidden">process</h3>
        <div class="wrap">  
            <dl class="subtitle">
                <dt><img src="/theme/basic/img/govt/process_tit.svg" alt="our process"></dt>
                <dd class="slogan"><span>체계적인 보고 및 관리 시스템</span> <img class="pc" src="/theme/basic/img/emoji_asterisk_fff.svg" alt=""> <span>정확한 일정의 고품질 결과물 제공</span></dd>
                <dd>
                    <p>각 업무별 세분화된 일정 계획 수립과</p>
                    <p>구체적인 TO DO LIST 작성 및 관리를 통하여 <br class="mo">안정된 운영을 하겠습니다</p>
                </dd>
            </dl>
            <div class="mo mo-title"><span>운영관리 방안</span></div>
            <div class="process-wrap">
                <ul class="process-list">
                    <li class="side">
                        <div class="txt">START</div>
                        <div class="pin"></div>
                    </li>
                    <li>
                        <div class="emoji"><img src="/theme/basic/img/govt/emoji_process1.svg" alt=""></div>
                        <div class="txt">운영관리ㆍ계획</div>
                        <div class="mo txt mo-txt">사업 착수 보고</div>
                        <div class="pin"></div>
                    </li>
                    <li>
                        <div class="emoji"><img src="/theme/basic/img/govt/emoji_process2.svg" alt=""></div>
                        <div class="txt">실행 시스템 구축</div>
                        <div class="mo txt mo-txt">사업 TO DO LIST 보고</div>
                        <div class="pin"></div>
                    </li>
                    <li>
                        <div class="emoji"><img src="/theme/basic/img/govt/emoji_process3.svg" alt=""></div>
                        <div class="txt">개별화 디자인</div>
                        <div class="mo txt mo-txt">디자인 시안 협의 디벨롭</div>
                        <div class="pin"></div>
                    </li>
                    <li>
                        <div class="emoji"><img src="/theme/basic/img/govt/emoji_process4.svg" alt=""></div>
                        <div class="txt">디자인 고도화</div>
                        <div class="mo txt mo-txt">제작 시뮬레이션 + CG 작업</div>
                        <div class="pin"></div>
                    </li>
                    <li>
                        <div class="emoji"><img src="/theme/basic/img/govt/emoji_process3.svg" alt=""></div>
                        <div class="txt">제작ㆍ납품ㆍ관리</div>
                        <div class="mo txt mo-txt">교정 교열 검수 + 적시 납품</div>
                        <div class="pin"></div>
                    </li>
                    <li class="side">
                        <div class="txt">complete</div>
                        <div class="pin"></div>
                    </li>
                </ul>
            </div>
            <div class="monthly-wrap">
                <p class="title">월별보고</p>
                <ul class="monthly-list">
                    <li>
                        <p class="txt"><strong>사업착수</strong>보고</p>
                        <p class="plus"><img src="/theme/basic/img/govt/ico_plus.svg" alt="+"></p>
                        <p class="txt">정기적인 <strong>진행 현황 보고</strong></p>
                    </li>
                    <li>
                        <p class="txt"><strong>사업 TO DO LIST 보고</strong></p>
                        <p class="plus"><img src="/theme/basic/img/govt/ico_plus.svg" alt="+"></p>
                        <p class="txt"><strong>과업 방향성</strong> 협의</p>
                    </li>
                    <li>
                        <p class="txt"><strong>디자인 기획안ㆍ시안</strong> 전달</p>
                        <p class="plus"><img src="/theme/basic/img/govt/ico_plus.svg" alt="+"></p>
                        <p class="txt"><strong>의견 협의 디벨롭</strong></p>
                    </li>
                    <li>
                        <p class="txt"><strong>촬영ㆍ답사ㆍ취재 진행</strong></p>
                        <p class="plus"><img src="/theme/basic/img/govt/ico_plus.svg" alt="+"></p>
                        <p class="txt"><strong>CG 작업</strong></p>
                    </li>
                    <li>
                        <p class="txt"><strong>교정 교열 필수 검수</strong></p>
                        <p class="plus"><img src="/theme/basic/img/govt/ico_plus.svg" alt="+"></p>
                        <p class="txt"><strong>안전한 관리로 적시 납품</strong></p>
                    </li>
                </ul>
            </div>
            <div class="how-to-wrap">
                <p class="title">품질 보증 방안</p>
                <div class="mo mo-title"><span>품질 보증 방안</span></div>
                <ul class="how-to-list">
                    <li>
                        <p class="num">1</p>
                        <p class="txt">체계화된 내외부 관리 시스템으로</p>
                        <p class="txt"><strong>실행과 결과에 대한 <span class="underline">명확하고 정확한 운영</span></strong></p>
                    </li>
                    <li>
                        <p class="num">2</p>
                        <p class="txt">업무 별 전담 인력 배정으로</p>
                        <p class="txt"><strong><span class="underline">고품질 결과물 생산</span>과 <span class="underline">실시간 의견 반영</span>에 용이</strong></p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- 인터뷰 interview -->
    <?php include_once(G5_THEME_PATH.'/component/govt_interview_slide.php'); ?>

    <section class="card-bnr">
        <div class="back-txt">
            <p>공공기관 맞춤형 디자인 <span class="point">정부<br class="mo"><img class="reverse" src="/theme/basic/img/rolling_asterisk.svg" alt="">공공기관 풍부한 수행 경험</span></p>
            <p><span class="point">체계적인 관리<img src="/theme/basic/img/ico_asterisk_black.svg" alt="">운영</span>으로 완벽<br class="mo">하고 안전한<img src="/theme/basic/img/ico_asterisk_black.svg" alt="">지원시스템 제공</p>
            <p><span class="point">세분화된 보고 및 관리 시스템</span> <br class="mo">정확한 일정 고품질 결과물 제공</p>
        </div>
        <ul class="card-wrap">
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