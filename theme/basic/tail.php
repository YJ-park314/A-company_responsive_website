<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<!-- fixed 버튼, sns버튼 -->
<div class="sns-btn-wrap">
    <a href="#" class="list-open">
        <img src="/theme/basic/img/ico_plus.svg" alt="">
        <span class="hidden">sns 목록 보기 버튼</span>
    </a>
    <ul>
        <li><a target="_blank" href="https://www.instagram.com/aprilmarch_m.c/"><img src="/theme/basic/img/logo_instagram.svg" alt="인스타그램 로고"></a></li>
        <li><a target="_blank" href="https://blog.naver.com/aprilmarch_"><img src="/theme/basic/img/logo_blog.svg" alt="블로그 로고"></a></li>
        <li><a target="_blank" href="https://www.youtube.com/@aprilmarch_M.C"><img src="/theme/basic/img/logo_youtube.svg" alt="유튜브 로고"></a></li>
        <li><a target="_blank" href="#" onclick="alert('준비중인 메뉴입니다.'); return false;"><img src="/theme/basic/img/logo_kakao.svg" alt="카카오 로고"></a></li>
        <li><a target="_blank" href="#" onclick="alert('준비중인 메뉴입니다.'); return false;"><img src="/theme/basic/img/logo_doc_down.svg" alt="회사소개서 로고"></a></li>
    </ul>
    <div class="bg mo"></div>
</div>

<footer id="footer">
    <div class="ft-logo"><span class="hidden">에프릴마치 marketing creative</span></div>
    <div class="bottom">
        <p class="addr"><strong>HEAD OFFICE</strong>SEOUL, SONGPA-GU, SONGPA-DAERO 167, <br class="mo">TERRA TOWER BUILDING A</p>
        <p class="addr"><strong>BRANCH</strong>INCHEON, YEONSU-GU, <br class="mo">CONVENSIA-DAERO 81 , DREAM CITY 5F</p>
        <p class="connect">
            <a href="tel:02-6929-0990">T. 02-6929-0990</a>
            <a href="mailto:jjw@aprilmarch.design">E. jjw@aprilmarch.design</a>
        </p>
    </div>
    <a href="#" id="top"><span class="hidden">맨위로 이동</span></a>
</footer>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");