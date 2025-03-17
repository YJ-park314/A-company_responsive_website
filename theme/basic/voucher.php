<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="visual sub voucher">
    <div class="dom-shape"><div class="inner"></div></div>
    <div class="wrap tit-motion">
        <div class="tit-area">
            <img class="tit" src="/theme/basic/img/voucher/tit.svg" alt="Goverment-Funded Voucher">
            <ul class="tag-wrap">
                <li class="tag bg-none">수출 바우처</li>
                <li class="tag bg-none">제조혁신 바우처</li>
                <li class="tag bg-none">관광기업 바우처</li>
            </ul> 
        </div>
        <p class="txt">
            <span class="flex">
                <strong>정부가 중소 및 중견 기업을 위해 지원하는 </strong>
                <strong><img src="/theme/basic/img/emoji_lightning_color.png" alt=""> 정부 디자인&마케팅 바우처 사업</strong>
            </span>
            <span class="mo-point">에이프릴마치 M&C는<span class="pc"> 한국디자인진흥원 인증 시각디자인 전문회사입니다</span></span>
            <span class="pc">글로벌 대기업과 서울시, KBS 미디어의 업무를 10년간 대행한 디자인 노하우로</span>
            <span class="pc strong">바우처 전담팀을 운영하여 다양한 디자인&마케팅 활동을 One-stop system 지원합니다</span>
            <span class="mo">바우처 전담팀을 운영하여</span>
            <span class="mo">바우처를 통한 다양한 디자인&마케팅 활동을</span>
            <span class="mo">One - stop system 지원합니다</span>
        </p>
    </div>
</div>

<article id="voucher" class="sub">
    <h2 class="hidden">본문영역</h2>
    <section class="what-can-do">
        <div class="subject-wrap">
            <h3>What can we do?</h3>
            <p class="subject"><strong>기업 부담 ZERO</strong></p>
            <p class="subject">바우처 진행 혜택</p>
        </div>
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <?php for($i=0; $i<9; $i++) { ?>
                <li class="swiper-slide">
                    <img class="on" src="/theme/basic/img/voucher/do/do<?php echo $i+1 ?>_active.png" alt="상품 이미지">
                    <img class="off" src="/theme/basic/img/voucher/do/do<?php echo $i+1 ?>.png" alt="상품 이미지">
                </li>
                <?php } ?>
            </ul>
        </div>
        <p>바우처 종류에 따라<br class="mo"> 약 10~20% 상당의 기업 부담금이 발생합니다</p>
    </section>
    <section class="performance">
        <div class="wrap">
            <div class="left">
                <h3>Our Performance</h3>
                <dl>
                    <dt>
                        <p><strong>최대 1억까지 지원 가능한</strong></p>
                        <p>마케팅&디자인 정부 지원금</p>
                    </dt>
                    <dd>
                        <p><strong class="mo-point">정부 바우처 수요기업으로 선정된 기업에게는</strong></p>
                        <p>기업이 필요로 하는 <br class="mo">다양한 마케팅 & 디자인 활동을 <br class="mo"><span class="pc">지원하기 위해</span></p>
                        <p><span class="pc">바우처 형태의</span><span class="mo underline">지원하기 위해 바우처 형태의</span> 자금으로 <br class="mo"><strong class="underline pc">2천만원부터 최대 1억원</strong><strong class="mo">2천만원부터 최대 1억원</strong>까지<br class="mo"></p>
                        <p>제공해 드립니다</p>
                    </dd>
                    <dd class="word-wrap">
                        <div class="inner">
                            <ul class="word-list">
                                <li><p><strong>제조혁신</strong></p><p>바우처</p></li>
                                <li><p><strong>수출</strong></p><p>바우처</p></li>
                                <li><p><strong>관광기업</strong></p><p>바우처</p></li>
                            </ul>
                            <img src="/theme/basic/img/voucher/word_list_img.svg" alt="">
                        </div>
                        <p>정부지원 바우처</p>
                    </dd>
                    <dd class="pc">
                        <p><strong class="underline">신제품 브랜딩ㆍ제품 패키지ㆍ브랜드 웹사이트</strong></p>
                        <p><strong class="underline">글로벌 카탈로그ㆍ제품촬영ㆍ홍보 영상</strong></p>
                        <p>다양한 분야에서 사용할 수 있습니다</p>
                    </dd>
                </dl>
            </div>
            <div class="right">
                <div class="list-wrap">
                    <div class="track track1">
                        <?php for($i=0; $i<2; $i++) { ?>
                        <ul class="img-list">
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img1_1.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img1_2.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img1_3.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img1_4.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img1_5.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img1_6.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img1_7.jpg" alt=""></li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="track track2">
                        <?php for($i=0; $i<2; $i++) { ?>
                        <ul class="img-list">
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img2_1.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img2_2.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img2_3.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img2_4.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img2_5.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img2_6.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img2_7.jpg" alt=""></li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="track track3">
                        <?php for($i=0; $i<2; $i++) { ?>
                        <ul class="img-list">
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img3_1.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img3_2.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img3_3.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img3_4.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img3_5.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img3_6.jpg" alt=""></li>
                            <li class="img-slide"><img src="/theme/basic/img/voucher/performance/img3_7.jpg" alt=""></li>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="mo-summary mo">
                <p><strong class="underline">신제품 브랜딩ㆍ제품 패키지ㆍ브랜드 웹사이트</strong></p>
                <p><strong class="underline">글로벌 카탈로그ㆍ제품촬영ㆍ홍보 영상</strong></p>
                <p>다양한 분야에서 사용할 수 있습니다.</p>
            </div>
        </div>
    </section>
    <section class="voucher-info">
        <h3 class="hidden">voucher info</h3>
        <div class="wrap">
            <div class="summary">
                <p><span class="underline">정부 바우처 사용</span></p>
                <p class="pc">믿을 수 있는 기업을 찾으신다면</p>
                <p><strong>에이프릴마치 M&C<span class="pc">가 함께 하겠습니다</span><span class="mo">와 <br>함께하세요</span></strong></p>
            </div>
            <ul class="step-list">
                <li>
                    <p class="tit">안전성</p>
                    <img src="/theme/basic/img/voucher/step1_logo.svg" alt="로고 이미지">
                    <div>
                        <p class="txt">10년 연속</p>
                        <p class="txt">디자인 업무 대행</p>
                    </div>
                </li>
                <li>
                    <p class="tit">전문성</p>
                    <img src="/theme/basic/img/voucher/step2_logo.svg" alt="로고 이미지">
                    <div>
                        <p class="txt">글로벌 대기업</p>
                        <p class="txt">디자인 업무 대행</p>
                    </div>
                </li>
                <li>
                    <p class="tit">자부심</p>
                    <img src="/theme/basic/img/voucher/step3_logo.svg" alt="로고 이미지">
                    <div>
                        <p class="txt">Since 2015</p>
                        <p class="txt">시각디자인 전문회사</p>
                    </div>
                </li>
            </ul>
            <ul class="key-list">
                <li>
                    <div class="top">KEY 01</div>
                    <div class="summary">
                        <p class="strong pc">필요한 디자인은 많은데...</p>
                        <p>정부지원금이 부족한 기업을 위해 </p>
                    </div>
                    <dl>
                        <dt class="tit-extra">폭·풍·지·원</dt>
                        <dd class="slogan"><p><img src="/theme/basic/img/emoji_party.svg" alt="">파트너 바우처</p><p class="pc"> - </p><p>최대 200만원 지원</p></dd>
                        <dd class="pc">※ 바우처 사업 진행시 자사와 함께 업무 완료한 기업에게 자사에서 지원하는 지원서비스입니다</dd>
                        <dd class="mo">※ 바우처 사업 진행시 자사를 수행사로 선정하여<br>업무 완료시 자사에서 지원하는 디자인 서비스입니다</dd>
                    </dl>
                    <img src="/theme/basic/img/voucher/key_coupon_img.png" alt="쿠폰 이미지">
                    <ul class="guide-list">
                        <li><span>적용 가능 범위</span>로고 디자인, 디자인 시스템, 카드뉴스, 브로슈어, 상세페이지 등 택 1~2개  (모든 품목 인쇄비 별도)</li>
                        <li><span>적용 대상</span>본 바우처는 에이프릴마치 M&C  제조ㆍ수출ㆍ관광 바우처 프로그램 거래 완료된 기업만 사용 가능합니다</li>
                        <li><span>사용방법</span>본 바우처 사용은 에이프릴마치 M&C 전담 PM에게 문의해주세요</li>
                    </ul>
                </li>
                <li>
                    <div class="top">KEY 02</div>
                    <dl>
                        <dt>바우처 전담 TEAM 지원</dt>
                        <dd>
                            <p>바우처 상담부터 디자인 진행, 제작물 <br class="mo">결과 보고서 작성까지<br class="mo"></p>
                            <p>최적화 된 프로세스와 전담 인원 배정으로 <br class="mo">안정적인 지원 보장</p>
                        </dd>
                        <dd class="slogan">One-stop <img src="/theme/basic/img/emoji_lightning_color.png" alt=""> Full service</dd>
                    </dl>
                </li>
            </ul>
        </div>
    </section>
    <section class="process">
        <h3 class="hidden">process</h3>
        <div class="wrap">
            <dl class="subtitle">
                <dt>
                    <p>Voucher <span class="extra-txt">&</span></p>
                    <p>Process</p>
                </dt>
                <dd class="slogan"><span> 바우처 <span class="pc">수요</span>기업 선정 <span class="pc">방법 </span><span class="mo">되기 부터</span><img src="/theme/basic/img/voucher/ico_voucher_asterisk.svg" alt=""></span> <br class="mo"><span>디자인<span class="mo">&마케팅</span> 사업 <span class="mo">무상</span> 지원<span class="pc">금</span> 받는 방법</span></dd>
                <dd>
                    <p>바우처 수요기업 선정 후에는 <br class="mo">에이프릴마치 M&C가 모든 과정을 <br class="mo">리딩하고 지원해드리겠습니다</p>
                    <p><strong>정부 지원 바우처 수요기업 신청<span class="pc"> - </span><br class="mo">지금 바로 지원하세요!</strong></p>
                </dd>
            </dl>
            <div class="voucher-wrap">
                <ul class="voucher-list">
                    <li class="point-shape"><a href="https://www.mssmiv.com/portal/Main" target="_blank">제조혁신 바우처</a></li>
                    <li class="point-shape"><a href="https://www.exportvoucher.com" target="_blank">수출 바우처</a></li>
                    <li class="point-shape"><a href="https://www.tourvoucher.or.kr/index.do" target="_blank">관광기업 바우처</a></li>
                    <li class="point-shape"><a href="https://voucher.kcdf.kr/index.do" target="_blank">전통문화혁신 바우처</a></li>
                </ul>
            </div>
            <div class="process-wrap">
                <ul class="process-list">
                    <li class="side">
                        <div class="txt">START</div>
                        <div class="pin"></div>
                    </li>
                    <li>
                        <div class="txt">Step 1</div>
                        <div class="pin"></div>
                        <img src="/theme/basic/img/voucher/step1.jpg" alt="">
                        <dl>
                            <dt>정부지원 바우처 홈페이지 접속</dt>
                            <dd>
                                <p>바우처 사업에</p>
                                <p>지원하여 무상지원 혜택을 누려보세요</p>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <div class="txt">Step 2</div>
                        <div class="pin"></div>
                        <img src="/theme/basic/img/voucher/step2.jpg" alt="">
                        <dl>
                            <dt>수요기업 신청→ 선정 확정</dt>
                            <dd>
                                <p>해당 바우처 사이트에서</p>
                                <p>수요기업 신청을 하면 심사를 거쳐</p>
                                <p>수요기업으로 선정을 받아요</p>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <div class="txt">Step 3</div>
                        <div class="pin"></div>
                        <img src="/theme/basic/img/voucher/step3.jpg" alt="">
                        <dl>
                            <dt>(주)에이프릴마치 M&C 검색</dt>
                            <dd>
                                <p>바우처 사이트의</p>
                                <p>수행기관 메뉴에서 에이프릴마치M&C</p>
                                <p>검색 후 선택해 주세요</p>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <div class="txt">Step 4</div>
                        <div class="pin"></div>
                        <img src="/theme/basic/img/voucher/step4.jpg" alt="">
                        <dl>
                            <dt>서비스 선택</dt>
                            <dd>
                                <p>에이프릴마치 M&C가 제공하는</p>
                                <p>다양한 디자인 서비스를</p>
                                <p>선택하실 수 있어요</p>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <div class="txt">Step 5</div>
                        <div class="pin"></div>
                        <img src="/theme/basic/img/voucher/step5.jpg" alt="">
                        <dl>
                            <dt>바우처 전담 팀과 사업수행</dt>
                            <dd>
                                <p>에이프릴마치 M&C의</p>
                                <p>바우처 전담 팀의 담당PM 배정으로</p>
                                <p>고품질 결과물을 제공해 드려요</p>
                            </dd>
                        </dl>
                    </li>
                    <li class="last-before">
                        <div class="txt">Step 6</div>
                        <div class="pin"></div>
                        <img src="/theme/basic/img/voucher/step6.jpg" alt="">
                        <dl>
                            <dt>사업수행 및 결과보고</dt>
                            <dd>
                                <p>최종 성과물을 정부기관에</p> 
                                <p>제출하면 사업이 종료됩니다</p>   
                            </dd>
                        </dl>
                    </li>
                    <li class="side">
                        <div class="txt">END</div>
                        <div class="pin"></div>
                    </li>
                    <li class="last">
                        <img class="arrow" src="/theme/basic/img/voucher/process_arrow.svg" alt="">
                        <dl>
                            <dt>파트너 바우처 지원</dt>
                            <dd>
                                <p>에이프릴마치 M&C와</p>
                                <p class="strong">사업 완료한 고객님을 위한 </p>
                                <p class="strong">특별한 혜택</p>
                            </dd>
                        </dl>
                        <img class="coupon" src="/theme/basic/img/voucher/coupon_img.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="service">
        <h3 class="hidden">Voucher Design Service Supported</h3>
        <dl class="subtitle">
            <dt>
                <p><span class="point">Voucher</span><span class="sm-txt"> Supported</span></p>
                <p>Design Services</p>
            </dt>
            <dd>
                <p><span class="point">기업 맞춤형 디자인</span><img src="/theme/basic/img/emoji_asterisk_fff.svg" alt="">온라인&오프라인</p>    
                <p>제한없이 모든 홍보물을 지원합니다</p>
            </dd>
        </dl>
        <ul class="service-list">
            <?php 
            $serviceArr = array(
                array(
                    array(
                        'tags' => array("#로고", "#브로슈어", "#패키지"),
                        'subject' => "브랜딩 + 인쇄 홍보물",
                        'con' => array("브랜드 LOGO부터 마케팅 프로모션을 위한", "홍보물 디자인을 제공합니다"),
                    ),
                    array(
                        'subject' => "브랜드 스토리 + 마케팅 키워드 기획",
                        'con' => array("브랜드의 시장조사와 경쟁사 분석을 통한", "포지셔닝 설정을 기준으로", "차별화 된 브랜드 스토리 제안"),
                    ),
                    array(
                        'subject' => "디자인 + 인쇄ㆍ제작까지 컨설팅",
                        'con' => array("담당 디자이너 지정으로 고품질의", "디자인 제안과 디자인 완료 후", "인쇄 제작 컨설팅 및 협력업체 연결"),
                    ),
                    array(
                        'subject' => "브랜드 스토리 + 마케팅 키워드 기획",
                        'con' => array("제품의 패키지 디자인", "스페셜 굿즈 디자인 키트", "매장의 POSM 등", "다양한 디자인 제작물 지원 가능"),
                    ),
                ),
                array(
                    array(
                        'tags' => array("#웹사이트", "#반응형", "#쇼핑몰"),
                        'subject' => "웹 사이트 + 쇼핑몰",
                        'con' => array("브랜드 사이트 , 쇼핑몰, 프로모션 페이지 등", "웹기획 / UI 디자인 / 개발까지 Full Service"),
                    ),
                    array(
                        'subject' => "컨텐츠 저작권 보호",
                        'con' => array("국내외 이미지, 폰트 기업과", "라이선스 계약을 통해 저작권 분쟁 걱정 없이 제공"),
                    ),
                    array(
                        'subject' => "네이버,다음,구글지도 API 연동",
                        'con' => array("포털사이트 지도 API를 연동하여", "고객사 위치 정보 제공으로 마케팅 지원"),
                    ),
                    array(
                        'subject' => "웹 표준 및 크로스브라우징",
                        'con' => array("다양한 브라우저 환경에서도", "동일하게 노출되어 안정적인 운영 제공"),
                    ),
                ),
                array(
                    array(
                        'tags' => array("#제품촬영", "#홍보영상"),
                        'subject' => "사진 촬영 + 영상 제작",
                        'con' => array("전문 포토그래퍼와 모션그래픽 디자이너가", "트랜디한 컨텐츠를 제공합니다"),
                    ),
                    array(
                        'subject' => "전문 포토그래퍼의 촬영 지원",
                        'con' => array("제품 / 인물 / 현장 촬영 등", "기업의 요구사항 맞춤 촬영 방식으로", "촬영 후 고난이도의 CG 지원"),
                    ),
                    array(
                        'subject' => "촬영부터 편집까지 영상 제작 지원",
                        'con' => array("스토리 보드 기획 / 촬영 / 영상 편집까지", "다양한 목적의 홍보영상 제작 가능"),
                    ),
                    array(
                        'subject' => "3D 모션그래픽",
                        'con' => array("브랜드 홍보를 위한", "3D 모션그래픽 영상 제작으로", "고품질의 마케팅 컨텐츠 지원"),
                    ),
                ),
            );
            for($i=0; $i<count($serviceArr); $i++) {
            ?>
            <li class="<?php if($i == 1) echo 'active' ?> list<?php echo $i+1 ?>">
                <div class="item-fix item">
                    <div class="inner">
                        <div class="top">
                            <img class="emoji" src="/theme/basic/img/voucher/service_emoji<?php echo $i+1 ?>_1.svg" alt="">
                            <ul class="item-tags">
                                <?php for($k=0; $k<count($serviceArr[$i][0]['tags']); $k++) { ?>
                                    <li><?php echo $serviceArr[$i][0]['tags'][$k] ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <dl>
                            <dt><?php echo $serviceArr[$i][0]['subject'] ?></dt>
                            <dd>
                                <?php for($c=0; $c<count($serviceArr[$i][0]['con']); $c++) { ?>
                                    <p><?php echo $serviceArr[$i][0]['con'][$c] ?></p>
                                <?php } ?>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="swiper-container">
                    <ul class="swiper-wrapper">
                        <?php for($u=1; $u<count($serviceArr[$i]); $u++) { ?>
                            <li class="swiper-slide item">
                                <div class="inner">
                                    <img class="emoji" src="/theme/basic/img/voucher/service_emoji<?php echo $i+1 ?>_<?php echo $u+1 ?>.svg" alt="">
                                    <dl>
                                        <dt><?php echo $serviceArr[$i][$u]['subject'] ?></dt>
                                        <dd>
                                            <?php for($c=0; $c<count($serviceArr[$i][$u]['con']); $c++) { ?>
                                                <p><?php echo $serviceArr[$i][$u]['con'][$c] ?></p>
                                            <?php } ?>
                                        </dd>
                                    </dl>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="btn-wrap mo">
                        <div class="swiper-btn swiper-button-prev"></div>
                        <div class="swiper-btn swiper-button-next"></div>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </section>

    <!-- faq 자주 묻는 질문 -->
    <div id="faq2"></div>
    <script>
        $("#faq2").load("<?php echo G5_BBS_URL?>/faq.php?fm_id=1");
    </script>

    <!-- <section class="faq">
        <h3>FAQ</h3>
        <div class="faq-summary">
            <p>바우처 사용에 대해</p>
            <p class="point">더 궁금하신 사항 있으신가요?</p>
        </div>
        <div class="faq-wrap">
            <div class="left">
                <p class="subject-ko">자주 묻는 질문</p>
                <p class="subject-en">FAQ</p>
                <ul class="faq-list">
                    <li class="active">
                        <div class="tit"><a href="#" class="open-faq"><span class="q-shape">Q</span>바우처 사용 가능 범위 초과되면 어떡하나요?</a></div>
                        <div class="con">
                            <p>진행과정에서 필요하다고 판단 될 경우, 바우처 지원금 이외에 별도로 추가 계약을 통해 에이프릴마치 M&C에서 통합 진행이 가능합니다.</p>
                            <p>또한 다수의 바우처 서비스 진행 시 최대 500만원 상당의 지원 혜택을 드리고 있습니다.</p>
                        </div>
                    </li>
                    <li>
                        <div class="tit"><a href="#" class="open-faq"><span class="q-shape">Q</span>에이프릴마치 M&C의 바우처 진행 프로세스가 정확히 어떻게 되나요?</a></div>
                        <div class="con">
                            <p>진행과정에서 필요하다고 판단 될 경우, 바우처 지원금 이외에 별도로 추가 계약을 통해 에이프릴마치 M&C에서 통합 진행이 가능합니다.</p>
                            <p>또한 다수의 바우처 서비스 진행 시 최대 500만원 상당의 지원 혜택을 드리고 있습니다.</p>
                        </div>
                    </li>
                    <li>
                        <div class="tit"><a href="#" class="open-faq"><span class="q-shape">Q</span>제조 혁신 바우처로 받을 수 있는 디자인은 어떤 것이 있나요?</a></div>
                        <div class="con">
                            <p>진행과정에서 필요하다고 판단 될 경우, 바우처 지원금 이외에 별도로 추가 계약을 통해 에이프릴마치 M&C에서 통합 진행이 가능합니다.</p>
                            <p>또한 다수의 바우처 서비스 진행 시 최대 500만원 상당의 지원 혜택을 드리고 있습니다.</p>
                        </div>
                    </li>
                    <li>
                        <div class="tit"><a href="#" class="open-faq"><span class="q-shape">Q</span>수출 바우처로 받을 수 있는 디자인은 어떤 것이 있나요?</a></div>
                        <div class="con">
                            <p>진행과정에서 필요하다고 판단 될 경우, 바우처 지원금 이외에 별도로 추가 계약을 통해 에이프릴마치 M&C에서 통합 진행이 가능합니다.</p>
                            <p>또한 다수의 바우처 서비스 진행 시 최대 500만원 상당의 지원 혜택을 드리고 있습니다.</p>
                        </div>
                    </li>
                    <li>
                        <div class="tit"><a href="#" class="open-faq"><span class="q-shape">Q</span>관광기업 바우처로 받을 수 있는 디자인은 어떤 것이 있나요?</a></div>
                        <div class="con">
                            <p>진행과정에서 필요하다고 판단 될 경우, 바우처 지원금 이외에 별도로 추가 계약을 통해 에이프릴마치 M&C에서 통합 진행이 가능합니다.</p>
                            <p>또한 다수의 바우처 서비스 진행 시 최대 500만원 상당의 지원 혜택을 드리고 있습니다.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right"><img src="/theme/basic/img/voucher/faq_img.jpg" alt="faq이미지"></div>
        </div>
    </section> -->
    
    <!-- 인터뷰 interview -->
    <?php include_once(G5_THEME_PATH.'/component/interview_slide.php'); ?>

    <section class="contact">
        <div class="wrap">
            <h3>contact</h3>
            <dl>
                <dt>Need Help?</dt>
                <dd>
                    <p>정부 바우처로 지원받는 <br class="mo">디자인 서비스에 대한 설명이 필요하시면</p>
                    <p>연락부탁드립니다</p>
                </dd>
            </dl>
            <p class="contact-means">연락문의 | E-mail</p>
            <p class="mail">jjw@aprilmarch.design</p>
        </div>
        <div class="dom-shape"><div class="inner"></div></div>
    </section>
</article>

<script src="/theme/basic/js/custom.js"></script>
<?php
include_once(G5_THEME_PATH.'/tail.php');