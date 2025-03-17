<style>
#contact{padding: 0 !important;}
#contact img{height:auto;}
#contact section{padding:0}
</style>
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
    <section>
        <h3 class="hidden">Contact</h3>
        <img class="pc" src="/theme/basic/img/contact/contact_pc-min.jpg" alt="컨텍트이미지">
        <img class="mo" src="/theme/basic/img/contact/contact_mo.jpg" alt="컨텍트이미지">
    </section>
</article>

<?php
include_once(G5_THEME_PATH.'/tail.php');