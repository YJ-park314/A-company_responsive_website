<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$real_count = (is_array($list) && $list) ? count($list) : 0;
$cur_count = $real_count;
?>

<!-- 기존코드 -->
<!-- <div class="lat">
    <h2 class="lat_title"><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>
    <ul>
    <?php for ($i=0; $i<$real_count; $i++) {  ?>
        <li class="basic_li">
            <?php
            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];

            echo "</a>";
			
			if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i><span class=\"sound_only\">인기글</span></span>";
			if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            echo $list[$i]['icon_reply']." ";
           	if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

            if ($list[$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\"><span class=\"sound_only\">댓글</span>".$list[$i]['comment_cnt']."</span>";

            ?>
            <div class="lt_info">
				<span class="lt_nick"><?php echo $list[$i]['name'] ?></span>
            	<span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span>              
            </div>
        </li>
    <?php }  ?>
    <?php if ($real_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>
</div> -->

<!-- 실제 코드 -->
<article id="main">
    <section class="what-we-do tab-section">
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <?php if($real_count < 20) $cur_count = 20; // 게시물이 20개보다 적을 때 20까지 늘려줌 ?>
                <?php $u=0; ?>
                <?php for ($i=0; $i<$cur_count; $i++) {  ?>
                <?php 
                    if($u >= $real_count) $u = 0;
                    else $u+=1; 
                ?>
                <li class="swiper-slide slide1">
                    <a href="#" onclick="return false;">
                        <p class="top">BEST PARTNERS</p>
                        <p><?php echo $list[$u]['ca_name']; ?></p>
                        <dl>
                            <dd><?php echo $list[$u]['subject']; ?></dd>
                            <dd><?php echo $list[$u]['wr_content']; ?></dd>
                            <dd><?php echo $list[$u]['wr_1']; ?></dd>
                        </dl>
                        <span class="arrow"></span>
                    </a>
                </li>
                <?php }  ?>
                <?php if ($real_count == 0) { //게시물이 없을 때?>
                <?php for($i=0; $i<20; $i++) { // 더미 20개 출력  ?>
                <li class="swiper-slide slide1">
                    <a href="#" onclick="return false;">1</a>
                </li>
                <?php }  ?>
                <?php }  ?>
            </ul>
        </div>
        <div class="swiper-ctrl">
            <div class="swiper-btn swiper-button-prev"></div>
            <p class="num current-num">01</p>
            <div class="swiper-pagination"></div>
            <p class="num total-num"></p>
            <div class="swiper-btn swiper-button-next"></div>
        </div>
        <a href="#" class="read-more">Read more<img src="/theme/basic/img/ico_more_arrow.svg" alt="화살표 아이콘"></a>
    </section>
</article>

<script src="/theme/basic/js/main.js"></script>
