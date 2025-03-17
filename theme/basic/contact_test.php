<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php'); 
    return;
}

include_once(G5_THEME_PATH.'/head.php'); 
?>

<article id="contact">
    <h2 class="hidden">본문영역</h2>
    <section class="form-mail">
        <h3 class="hidden">메일문의 작성 폼</h3>
        <div class="wrap"> 
            <div class="left">  
                <dl class="subtitle">
                    <dt>Contact</dt>
                    <dd class="slogan"><strong>함께 고민하는</strong> 든든한 지원자가 되겠습니다</dd>
                    <dd><p class="tit">E-mail</p> jjw@aprilmarch.design</dd>
                    <dd><p class="tit">Tell</p> 02.6929.0990</dd>
                </dl>
                <div class="point-shape"><a href="#"><span><span class="pc">예상</span>견적 확인</span></a></div>
            </div>
            <div class="right">
                <dl class="mo"> 
                    <dt>문의하기</dt>
                    <dd>문의 남겨주시면 빠르게 답변 드리겠습니다</dd>
                </dl>
                <form action="" method="post">
                    <input type="text" placeholder="회사명">
                    <input type="text" placeholder="연락 받으실 번호">
                    <input type="text" placeholder="E-mail">
                    <input type="text" placeholder="담당자명">
                    <input type="text" placeholder="정부지원 바우처 진행 여부(ex. 예, 아니오)">
                    <div class="text-wrap">
                        <textarea name="" id="" placeholder="내용일 입력해주세요 (2000자)"></textarea>
                    </div>
                    <button>SEND</button>
                </form>
            </div>
        </div>
    </section> 

    <section id="estimate">
        <div class="top-area">
            <dl class="subtitle">
                <dt><strong>예상 견적</strong>을 확인해보세요</dt>
                <dd>해당 견적은 참고용이며 상담 후 프로젝트 규모 및 조건에 따라 최종 견적을 협의합니다</dd>
            </dl>
        </div>
        <div class="wrap">
            <!-- js로 estimate 게시판 불러옴 -->
        </div>
    </section>
</article>

<script>
    $("#estimate .wrap").load("<?php echo G5_BBS_URL?>/board.php?bo_table=estimate&sca=브랜딩_%23로고%2B브랜드+홍보+디자인", function () {
        $(this).find('#header').remove();
        $(this).find('#footer').remove();
    });
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');