<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) { 
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}  

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="visual sub voucher design-service">
    <div class="dom-shape"><div class="inner"></div></div>
    <div class="wrap tit-motion">
        <div class="tit-area">
            <img class="tit" src="/theme/basic/img/design_service/tit.svg" alt="DESIGN FULL SERVICE BRAND">
        </div>
        <p class="txt">
            <span class="flex">
                <strong>First Impression </strong>
                <img src="/theme/basic/img/emoji_shooting_star.svg" alt="">
                <strong>첫ㆍ인ㆍ상</strong>
            </span>
            <span>브랜드를 처음 만났을 때, <br class="mo">그 만남이 느낌이 무엇이냐에 따라</span><br class="mo">
            <span>비즈니스의 성공 여부가 결정될 수도 있습니다</span><br class="mo">
            <span><span class="pc">우리는 실력으로ㆍ디자인으로ㆍ</span><span class="mo" style="font-weight:300">실력으로ㆍ디자인으로</span>그동안 만나보지 못했던 정성으로 <br class="mo">브랜드의 모든 순간을 만들어 갑니다</span>
        </p>
    </div>
</div>

<article id="designService" class="sub">
    <h2 class="hidden">본문영역</h2>
    <section class="work-detail">
        <h3 class="hidden">작업물 소개</h3>
        <?php
        $workArr = array(
            array(
                'title' => '롯데멤버스',
                'content' => 
                    "<span class='pc'>롯데멤버스의 라임은 리서치 서비스입니다<br></span>
                    라임은 소비자 트렌드와 시장 데이터를 <br class='mo'>효과적으로 분석하고 <br class='mo'>예측하는 전문 리서치 서비스 플랫폼입니다<br>
                    우리는 라임 서비스의 브랜드 개발부터 웹구축과 <br class='mo'>온라인 마케팅 전 과정을 함께 <span class='pc'>하였으며 자사의 데이터 시각화 전문성으로 트렌드 리포트 발행을 지속적으로 지원하고 있습니다</span><span class='mo'>하였습니다</span>",
                'during' => '2015 - 2025',
                'item' => array( 
                    array(
                        "subject" => '데이터 시각화 + 인포그래픽',
                        "content" =>
                            "라임의 리서치 인사이트 결과를<br>
                            명확한 시각화 설계와 심미적 요소를 적용하여<br>
                            복잡한 데이터를 한눈에 이해할 수 있도록 직관적으로 표현",
                    ),
                    array(
                        "subject" => '온라인 마케팅 컨텐츠 디자인',
                        "content" =>
                            "고객 DB 확보와 지속적인 서베이 참여 독려를 목표로<br> 
                            매월 트렌디한 주제의 카드뉴스 기획/제작/배포 진행과<br>
                            정기적인 온라인 이벤트와 GDN 광고 제작",
                    ),
                    array(
                        "subject" => '전시 프로모션 홍보 디자인',
                        "content" =>
                            "데이터 컨퍼런스ㆍ롯데 그룹사 행사ㆍ마케팅 프로모션 등<br>
                            미디어를 넘어 공간디자인과 굿즈 디자인까지<br>
                            라임서비스의 모든 접점에서 브랜드 관리 지원",
                    ),
                ),
            ),
            array(
                'title' => 'LG CNS MOP',
                'content' => 
                    "MOP는 LG CNS의 AI 광고 마케팅 플랫폼입니다<br>
                    우리는  AI 및 수학적 최적화 기술을 적용한<br class='mo'>브랜드로서의 정체성과 기술력을 전달하는 데 집중하며<br>
                    MOP의 브랜드 개발부터 웹사이트 구축, 대시보드 개발, <br class='mo'>브랜드 홍보 영상 등 홍보 콘텐츠 지원,  <br class='mo'>컨퍼런스 공간 디자인과 굿즈 제작까지<br>
                    MOP 브랜드의 미디어 홍보와  <br class='mo'>고객과의 모든 접점을 지원·관리하였습니다",
                'during' => '2020 - 2024',
                'item' => array(
                    array(
                        "subject" => '브랜딩',
                        "content" =>
                            "모듈형 패턴과 기술적 텍스처를 시각화하여 광고 기술의 역동성과<br>
                            정밀성을 표현한 로고 시스템 개발, 다양한 채널에서<br>
                            일관성 있게 활용할 수 있는 디자인 모티브 제작",
                    ),
                    array(
                        "subject" => '반응형 웹사이트 구축 + 대시보드 개발',
                        "content" =>
                            "기술력과 데이터 기반 광고 효율을 명확하게 전달할 수 있도록<br>
                            반응형 웹사이트 개발하고 유저 사용성을 분석, 최적의 플로어<br>
                            설계 제안하며 대시보드 디자인 총괄 개발",
                    ),
                    array(
                        "subject" => '홍보 마케팅 컨텐츠 개발',
                        "content" =>
                            "개발 스토리 영상, 기술력 홍보 영상, 유저 편익 홍보 영상<br>
                            3편의 시리즈 홍보 영상 제작과 광고 컨텐츠 디자인,<br>
                            컨퍼런스 방문객의 관심과 몰입을 유도하기 위한  POSM 개발",
                    ),
                ),
            ),
            array(
                'title' => 'K-tiful',
                'content' => 
                    "케이티풀은 전통 무형문화재 보존과 <br class='mo'>전승을 위한 비영리 단체입니다<br>
                    우리는 단체의 철학과 가치를 담아내는 브랜딩과 <br class='mo'>디자인 시스템을 개발하고, 굿즈 제작과 더불어<br>
                    글로벌 환경에서 프로그램 예약과 <br class='mo'>제품 구매, 강의 시청이 가능한 <br class='mo'>대규모 반응형 웹사이트를 구축했습니다",
                'during' => 'August 2024 - 2025',
                'item' => array(
                    array(
                        "subject" => '브랜딩',
                        "content" =>
                            "확장형 로고 디자인으로 색상, 폰트, 그래픽 요소를 체계적으로<br>
                            개발하고 인쇄물, 디지털 콘텐츠, 공간 디자인 등 다양한 접점에서<br>
                            적용이 가능한 모듈형 디자인 시스템 구축",
                    ),
                    array(
                        "subject" => '전시ㆍ굿즈',
                        "content" =>
                            "무형 유산 보존의 가치를 담아내고자 하는 단체의 철학과<br> 
                            현대적 감성이 어우러진 굿즈 제작과 국가유산센터의 공간<br>
                            디자인은 글로벌 관광객들의 유입과 긍정적 바이럴 생성 리딩",
                    ),
                    array(
                        "subject" => '반응형 웹사이트 구축',
                        "content" =>
                            "우리 무형 문화의 가치를 전하고 외국인들의 지속적 방문을<br>
                            유도하기 위한 문화 체험 프로그램 예약, 문화 상품의 쇼핑,<br>
                            문화재 스토리로의 유입 기능을 구현한 글로벌 웹사이트 개발",
                    ),
                ),
            ),
            array(
                'title' => '동국대학교',
                'content' => 
                    "동국대학교의 교육 철학과 비전을 담아낸 <br class='mo'>홍보 디자인 지원을 통하여<br>
                    우리는 지난 10년간 대학의 브랜드 이미지를 <br class='mo'>강화하는데 기여하였습니다<br>
                    또한 변화하는 미디어 환경에 맞추어 <br class='mo'>홍보 콘텐츠를 지속적으로 발전시키고 있습니다",
                'during' => '2015 - 2025',
                'item' => array(
                    array(
                        "subject" => '브랜딩',
                        "content" =>
                            "건학 이념과 교육 철학을 기반으로 한<br>
                            브랜드 관리를 통해 대학의 정체성을 확립하고, 구성원들의<br>
                            소속감과 자부심을 높이며, 대외적으로 긍정적인 이미지를 구축",
                    ),
                    array(
                        "subject" => '타겟별 홍보 브로슈어',
                        "content" =>
                            "동문, 입시생, 재학생, 교수 등을 대상으로 한<br>
                            홍보 콘텐츠를 제작할 때, 각 대상의 특성에 맞는 메시지를<br>
                            전달하면서도 동국대학교만의 고유한 아이덴티티를 유지",
                    ),
                    array(
                        "subject" => '홍보 영상 + 모션그래픽',
                        "content" =>
                            "동국대학교의 120년 전통과 재학생들의 역동적인 에너지를<br>
                            담아낸 홍보 영상은 생생한 스토리 기획과 현장 및 인물 촬영,<br>
                            모션 그래픽을 결합한 편집 기법을 통해 완성도 높은 콘텐츠 개발",
                    ),
                ),
            ),
            array(
                'title' => '스킨밸런스',
                'content' => 
                    "컵바이컵은 새롭게 론칭한 친환경 종이컵 브랜드입니다<br>
                    우리는 친환경 메시지를 고객과 함께 공감하는 것을 <br class='mo'>목표로<br class='pc'>
                    브랜딩부터 캐릭터 개발, 패키지 디자인, <br class='mo'>모션 그래픽을 활용한 디지털 영상까지 <br class='mo'>통합적인 브랜딩 콘텐츠를 지원하였습니다",
                'during' => '2024 - 2025',
                'item' => array(
                    array(
                        "subject" => '브랜딩ㆍ패키지 디자인',
                        "content" =>
                            "브랜드 핵심 가치인 지속 가능성, 자연의 이미지를 담은 로고와<br>
                            디자인 시스템을 개발하고, 시스템 가이드를 적용하여 브랜드<br>
                            캐릭터 및 패키지 디자인을 제작",
                    ),
                    array(
                        "subject" => '3D 모션그래픽',
                        "content" =>
                            "자연의 상징성을 담은 3D 캐릭터를 통해<br> 
                            브랜드 스토리텔링을 강화하고 이를 활용한 모션그래픽 영상을<br>
                            제작하여 온라인 홍보 활동을 적극적 지원",
                    ),
                    array(
                        "subject" => '반응형 자사몰 구축',
                        "content" =>
                            "다양한 인터랙션과 3D 애니메이션을 활용하여<br> 
                            브랜드 스토리를 기반으로 구축된 쇼핑몰은 모바일, 태블릿,<br>
                            웹 등 다양한 디바이스에 최적화된 화면을 제공",
                    ),
                ),
            ),
            array(
                'title' => '그래이츠',
                'content' => 
                    "글로벌 식품 제조기업 그래이츠에서 론칭한 <br class='mo'>라이벌은 프리미엄 블렌딩 ‘꿀' 브랜드입니다<br>
                    우리는 네이밍부터 브랜딩, 패키지 디자인, <br class='mo'>제품 촬영, 쇼핑몰 사이트, 글로벌 브로슈어까지<br>
                    라이벌의 초기 마케팅 툴 구축을 지원하며 <br class='mo'>희망찬 발걸음 함께 하고 있습니다",
                'during' => '2024 - 2025',
                'item' => array(
                    array(
                        "subject" => '브랜딩',
                        "content" =>
                            "상품의 시장조사와 타깃 분석을 시작으로  브랜드 네이밍부터<br>
                            로고, 캐릭터, 브랜드 스토리, 디자인 시스템 가이드까지<br>
                            아우르는 브랜딩 풀-서비스를 지원",
                    ),
                    array(
                        "subject" => '패키지 디자인 + 고난이도 연출 촬영',
                        "content" =>
                            "트렌디한 제품용기 선정과 특수 가공 라벨, 친환경 패키지 소재를<br>
                            사용하여 프리미엄 상품 이미지를 강조, 고난이도 연출 촬영과<br>
                            CG 기술로 완성된 제품 키비주얼 제작으로 온라인 판매 지원",
                    ),
                    array(
                        "subject" => '반응형 자사몰 구축',
                        "content" =>
                            "브랜드 스토리와 프리미엄 상품의 특징을 한눈에 확인할 수 있는<br>
                            카테고리 분류 및 제품 탐색 최적화를 통해 기능적 편의성을<br>
                            구현한 쇼핑몰 구축",
                    ),
                ),
            ),
        );
        ?>
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <?php for($i=0; $i<(count($workArr) * 1); $i++) { ?>
                    <li class="swiper-slide pc-width">
                        <img src="/theme/basic/img/design_service/work_detail/slide<?php echo ($i % count($workArr)) + 1; ?>_on.png" alt="슬라이드 이미지" class="on">
                        <img src="/theme/basic/img/design_service/work_detail/slide<?php echo ($i % count($workArr)) + 1; ?>.png" alt="슬라이드 이미지" class="off">
                    </li>
                <?php } ?>
            </ul>
            <div class="swiper-pagination"></div>
            <div class="btn-wrap">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <ul class="content-list">
            <?php for($i=0; $i<(count($workArr) * 1); $i++) { ?>
            <li class="<?php if($i == 0) echo 'active'; ?>">
                <div class="tit-area">
                    <p class="tit"><?php echo $workArr[$i % count($workArr)]['title']; ?></p>
                    <img src="/theme/basic/img/design_service/work_detail/logo<?php echo ($i % count($workArr)) + 1; ?>.svg" alt="로고">
                </div>
                <div class="summary"><?php echo $workArr[$i % count($workArr)]['content']; ?></div>
                <div class="during"><?php echo $workArr[$i % count($workArr)]['during']; ?></div>
                <ul class="item-list">
                    <?php for($u=0; $u<count($workArr[($i % count($workArr))]['item']); $u++) { ?>
                    <li>
                        <p class="num">0<?php echo $u+1; ?></p>
                        <img src="/theme/basic/img/design_service/work_detail/ico<?php echo $u+1; ?>.svg" class="ico" alt="아이콘">
                        <p class="subject"><?php echo $workArr[$i % count($workArr)]['item'][$u]['subject']; ?></p>
                        <div class="con"><?php echo $workArr[$i % count($workArr)]['item'][$u]['content']; ?></div>
                    </li> 
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </section>
 
    <section class="design-team">
        <div class="wrap">
            <dl class="subtitle">
                <dt>
                    <p><span class="point">From A to Z</span></p>
                    <p>Leave everything <br class="mo">to us</p>
                    <p class="tag">Easy</p>
                    <p class="tag">Convenient</p>
                </dt>
                <dd>
                    <p class="slogan"><span class="pc">처음부터 끝까지 </span>고객사만의 <img src="/theme/basic/img/emoji_fire.svg" alt=""> 디자인팀이 되어드리겠습니다</p>
                    <p>단순히 멋진 디자인을 넘어서<br class="mo"></p>
                    <p>비즈니스 목표를 실현할 수 있는 <br class="mo">전략적 디자인 <img src="/theme/basic/img/dashboard/emoji_lightning.svg" alt=""> <span class="pc">서포트를</span><span class="mo">솔루션을</span> 제공합니다</p>
                </dd>
            </dl>
            <ul class="team-list">
                <?php 
                $taemArr = array(
                    array(
                        "team" => "브랜드 풀서비스 전담팀",
                        "item" => array(
                            array("브랜드 로고 및 스토리", "fill"),
                            array("반응형 웹사이트", "fill"),
                            array("모든 미디어 홍보물 지원", "black"),
                            array("프로모션 운영 관리", ""),
                            array("캠페인 컨설팅", ""),
                            array("디자인 시스템 가이드", ""),
                        ),
                    ),
                    array( 
                        "team" => "공공기관 디자인 전담팀",
                        "item" => array(
                            array("완벽한  운영 · 관리", "black"),
                            array("공공기관 맞춤형 디자인", "fill"),
                            array("단위별 보고 시스템", "fill"),
                            array("담당 PM의 유연한 소통", ""),
                            array("검수 검열을 통한 안전성", ""),
                            array("디자인 시스템 가이드", "")
                        ),
                    ),
                    array(
                        "team" => "바우처지원 전담팀",
                        "item" => array(
                            array("다양한 홍보물 지원 가능", "fill"),
                            array("200만원 서비스 추가 지원", "fill"),
                            array("반응형 웹사이트", "black"),
                            array("로고부터 패키지디자인", ""),
                            array("고난이도 제품 촬영", ""),
                            array("디자인 시스템 가이드", "")
                        ),
                    ),
                    array(
                        "team" => "대시보드 디자인 전담팀",
                        "item" => array(
                            array("IT·AI 독보적 노하우", "fill"),
                            array("화면설계부터 리딩", "black"),
                            array("대시보드 전문 디자이너", "black"),
                            array("구조화 최적화 디자인", ""),
                            array("입증된 전문성", ""),
                            array("디자인 시스템 가이드", "")
                        ),
                    ),
                    array(
                        "team" => "제품ㆍ영상 촬영 전담팀",
                        "item" => array(
                            array("촬영기획 + 스타일링", "black"),
                            array("전문 스타일리스트 투입", "fill"),
                            array("입증된 촬영 전문성", "fill"),
                            array("고난이도 CG 지원", ""),
                            array("감각적인 결과물", ""),
                            array("디자인 시스템 가이드", "")
                        ),
                    ),
                    array(
                        "team" => "인포그래픽ㆍPPT 전담팀",
                        "item" => array(
                            array("독보적 노하우 · 래퍼런스", "fill"),
                            array("데이터 분석부터 리딩", "black"),
                            array("빅데이터 인포그래픽 10년", "fill"),
                            array("IT  인포그래픽 4년", ""),
                            array("금융권  인포그래픽 3년", ""),
                            array("디자인 시스템 가이드", "")
                        ),
                    ),
                );
            
                for($i=0; $i<count($taemArr); $i++) {
                ?>
                <li>
                    <img src="/theme/basic/img/design_service/emoji_team<?php echo $i+1; ?>.svg" alt="" class="emoji">
                    <p class="team"><?php echo $taemArr[$i]['team']; ?></p>
                    <ul class="team-item-list">
                        <?php for($u=0; $u<count($taemArr[$i]['item']); $u++) { ?>
                            <li class="<?php echo $taemArr[$i]['item'][$u][1] ?>"><?php echo $taemArr[$i]['item'][$u][0]; ?></li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </div>
        <img src="/theme/basic/img/design_service/team_bg.jpg" alt="백그라운드 이미지" class="bg pc">
        <img src="/theme/basic/img/dashboard/data_look_bg.svg" alt="백그라운드 이미지" class="bg mo">
    </section>

    <section class="full-service"> 
        <h3 class="hidden">Design Full Service</h3>
        <div class="wrap">
            <dl class="subtitle">
                <dt>
                    <img src="/theme/basic/img/design_service/full_service_tit.svg" alt="our work">
                    <div class="tag">Perfectly</div>
                </dt>
                <dd>브랜드 가치를 극대화하는 <img src="/theme/basic/img/voucher/ico_voucher_asterisk.svg" alt="">  디자인 서비스</dd>
            </dl>
            <ul class="service-list">
                <?php 
                $fullArr = array(
                    array(
                        "subject" => array("브랜딩", "로고"),
                        "summary" => "LogoㆍBranding",
                    ),
                    array(
                        "subject" => array("패키지", "디자인"),
                        "summary" => "Package Design",
                    ),
                    array(
                        "subject" => array("브로슈어", "디자인"),
                        "summary" => "Brochure Design",
                    ),
                    array(
                        "subject" => array("광고", "포스터"),
                        "summary" => "Ads Poster",
                    ),
                    array(
                        "subject" => array("인포그래픽", "PPT"),
                        "summary" => "InfographicㆍPPT",
                    ),
                    array(
                        "subject" => array("웹", "디자인ㆍ개발"),
                        "summary" => "Web Design",
                    ),
                    array(
                        "subject" => array("대시보드", "디자인"),
                        "summary" => "Dashboard Design",
                    ),
                    array(
                        "subject" => array("촬영", "CG"),
                        "summary" => "PhotographyㆍCG",
                    ),
                    array(
                        "subject" => array("모션그래픽", "홍보영상"),
                        "summary" => "Motion GraphicㆍVideo",
                    ),
                    array(
                        "subject" => array("전시ㆍ행사", "디자인"),
                        "summary" => "Exhibition Design",
                    ),
                );

                for($i=0; $i<count($fullArr); $i++) { ?>
                <li>
                    <p class="num"><?php if($i < 9) echo '0' ?><?php echo $i+1; ?></p>
                    <div class="ico-wrap">
                        <img src="/theme/basic/img/design_service/ico_full<?php echo $i+1; ?>.svg" alt="">
                    </div>
                    <div class="subject">
                        <?php for($u=0; $u<count($fullArr[$i]['subject']); $u++) { ?>
                            <p><?php echo $fullArr[$i]['subject'][$u] ?></p>
                        <?php } ?>
                    </div>
                    <p class="summary"><?php echo $fullArr[$i]['summary']; ?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
    </section>

    <section class="our-work">
        <h3 class="hidden">our work</h3>
        <div class="wrap">
            <dl class="subtitle">
                <dt><img src="/theme/basic/img/design_service/our_work_tit.svg" alt="our work"></dt>
                <dd>디자인으로 만든 변화, 포트폴리오에서 확인해보세요</dd>
            </dl>
        </div>
        <div class="work-bnr-wrap">
            <ul class="work-bnr">
                <li>
                    <?php for($i=0; $i<12; $i++) { ?>
                        <img src="/theme/basic/img/design_service/our_work_slide/work1_<?php echo $i+1; ?>.jpg" alt="포트폴리오 이미지 그룹1 <?php echo $i+1; ?>번째">
                    <?php } ?>
                </li>
                <li>
                    <?php for($i=0; $i<12; $i++) { ?>
                        <img src="/theme/basic/img/design_service/our_work_slide/work1_<?php echo $i+1; ?>.jpg" alt="포트폴리오 이미지 그룹1 <?php echo $i+1; ?>번째">
                    <?php } ?>
                </li>
            </ul>
            <ul class="work-bnr">
                <li>
                    <?php for($i=0; $i<12; $i++) { ?>
                        <img src="/theme/basic/img/design_service/our_work_slide/work2_<?php echo $i+1; ?>.jpg" alt="포트폴리오 이미지 그룹2 <?php echo $i+1; ?>번째">
                    <?php } ?>
                </li>
                <li>
                    <?php for($i=0; $i<12; $i++) { ?>
                        <img src="/theme/basic/img/design_service/our_work_slide/work2_<?php echo $i+1; ?>.jpg" alt="포트폴리오 이미지 그룹2 <?php echo $i+1; ?>번째">
                    <?php } ?>
                </li>
            </ul>
        </div>
        <ul class="btn-wrap">
            <li class="point-shape"><a href="/bbs/board.php?bo_table=portfolio">포트폴리오 보러가기</a></li> 
            <li class="point-shape"><a href="/bbs/board.php?bo_table=estimate&sfl=ca_name&stx=%EB%B8%8C%EB%9E%9C%EB%94%A9_E%EB%A1%9C%EA%B3%A0%20%EB%B8%8C%EB%9E%9C%EB%93%9C_%ED%99%8D%EB%B3%B4_%EB%94%94%EC%9E%90%EC%9D%B8#estimateList">예상 견적 확인하기</a></li> 
        </ul>
    </section>

    <section class="family">
        <h3 class="hidden">clients</h3>
        <div class="bnr-wrap">
            <ul class="clients-bnr">
                <li><img src="/theme/basic/img/family_logo/pc_group.svg" alt="클라이언트 로고 이미지"></li>
                <li><img src="/theme/basic/img/family_logo/pc_group.svg" alt="클라이언트 로고 이미지"></li>
            </ul>
        </div>
    </section>
</article>

<script src="/theme/basic/js/custom.js"></script>
<?php
include_once(G5_THEME_PATH.'/tail.php');