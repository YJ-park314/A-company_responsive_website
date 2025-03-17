<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<article id="newBrand">
    <h2 class="hidden">본문영역</h2>
    <section>
        <h3 class="hidden">신규브랜드・신사업</h3>
        <img class="pc" src="/theme/basic/img/new_pc.jpg" alt="신사업 본문 이미지">
        <img class="mo" src="/theme/basic/img/new_mo.jpg" alt="신사업 본문 이미지" style="margin-top: 50px;">
    </section>
</article>
<?php
include_once(G5_THEME_PATH.'/tail.php');