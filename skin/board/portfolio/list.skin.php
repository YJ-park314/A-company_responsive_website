<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once("_common.php");

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>


<div class="visual sub portfolio">
    <div class="wrap"> 
        <div class="tit-area"> 
            <span class="hidden">Welcome to</span>
            <p class="tag">Design</p>
            <span class="hidden">portfolio</span>
            <img src="/theme/basic/img/portfolio_tit.svg" alt="">
        </div>
        <p class="txt left">
            <span>Brand Fit - Brand Fly</span>
            <span>Creative Design</span>
        </p>
        <p class="txt right"><img src="/theme/basic/img/portfolio_tit_since.svg" alt="Since 2015"></p>
        <ul class="circle-emoji">
            <li class="fill"></li>
            <li></li> 
        </ul>
    </div>
</div>

<!-- 게시판 목록 시작 { -->
<article id="portfolio" style="width:<?php echo $width; ?>">
    <h2 class="hidden">본문영역</h2>
    
    <?php if ($is_category) { ?>
    <nav class="ctgr-nav">
        <h3 class="hidden"><?php echo $board['bo_subject'] ?> 카테고리</h3>
        <div class="wrap">
            <ul class="ctgr-list">
                <?php echo $category_option ?>
            </ul>
        </div>
    </nav>
    <?php } ?>

    <form name="fboardlist"  id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="crgr2" value="<?php echo $ctgr2 ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">
    <section>
        <h3 class="hidden">포트폴리오 리스트</h3>
        <div class="wrap">
            <!-- 리스트 시작 -->
            <ul class="list">
                <?php for ($i=0; $i<count($list); $i++) {
        
                    $classes = array();
                    
                    $classes[] = 'gall_li';
                    $classes[] = 'col-gn-'.$bo_gallery_cols;
        
                    if( $i && ($i % $bo_gallery_cols == 0) ){
                        $classes[] = 'box_clear';
                    }
        
                    if( $wr_id && $wr_id == $list[$i]['wr_id'] ){
                        $classes[] = 'gall_now';
                    }
        
                    $line_height_style = ($board['bo_gallery_height'] > 0) ? 'line-height:'.$board['bo_gallery_height'].'px' : '';
                 ?>
                <li class="<?php echo implode(' ', $classes); ?>">
                    <div class="gall_box">
                        <div class="gall_con">
                            <div class="gall_img" style="<?php if ($board['bo_gallery_height'] > 0) echo 'height:'.$board['bo_gallery_height'].'px;max-height:'.$board['bo_gallery_height'].'px'; ?>">
                                <a href="#" class="open-pop" onclick="openPop(event, <? echo $list[$i]['wr_id']; ?>, '<?php echo $bo_table; ?>');">
                                <?php 
                                $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
    
                                if($thumb['src']) {
                                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                                } else {
                                    $img_content = '<span class="no_image" style="'.$line_height_style.'">no image</span>';
                                }
    
                                echo run_replace('thumb_image_tag', $img_content, $thumb);
                                ?>
                                </a>
                            </div>
                            <div class="gall_text_href">
                                <!-- <?php if ($is_category && $list[$i]['ca_name']) { ?> -->
                                <!-- <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a> -->
                                <?php } ?>
                                <!-- <a href="<?php echo $list[$i]['href'] ?>" class="list-info"> -->
                                <a href="#" class="list-info open-pop" onclick="openPop(event, <? echo $list[$i]['wr_id']; ?>, '<?php echo $bo_table; ?>');">
                                    <p class="subject"><?php echo $list[$i]['subject'] ?></p>
                                    <p class="con"><?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 68, '..'); ?></p>
                                    <?php
                                    ?>
                                 </a>
                            </div>
                        </div>
                    </div>
                </li>
                <?php } ?>
                <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
            </ul>
            <!-- 리스트 끝 -->
        </div>

        <!-- 팝업 -->
        <div class="popup">
            <div class="inner">
                <p class="subject"></p>
                <p class="con"></p>
                <div class="img-wrap">
                    <!-- 큰 이미지 -->
                    <div class="img-view"></div>
                    <!-- 우측 작은 이미지 -->
                    <ul class="img-preview-list"></ul>
                    <!-- 이전, 다음버튼 -->
                    <a href="#" class="img-btn prev"></a>
                    <a href="#" class="img-btn next"></a>
                </div>
            </div>
            <a href="#" class="close-pop">
                <span></span>
            </a>
            <!-- 수정, 삭제 버튼 -->
            <?php if ($is_admin == 'super' || $is_auth) {  ?>
            <ul class="modify-btn-wrap"></ul>
            <?php }  ?>
        </div>

        <!-- 페이지네이션 -->
        <?php echo $write_pages; ?>
        <!-- 페이지네이션 끝 -->
    </section>
    
    
    <!-- 글쓰기 -->
    <?php if ($is_admin == 'super' || $is_auth) {  ?>
    <a href="<?php echo $write_href ?>" class="admin-write-btn">
        <span class="shape">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <p>글쓰기</p>
        </span>
    </a>
    <?php }  ?>
    </form>
</article>

<script src="/theme/basic/js/custom.js"></script>

<?php if($is_checkbox) { ?>
<noscript>
    <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>
<?php if ($is_checkbox) { ?>
<script>
    function all_checked(sw) {
        var f = document.fboardlist;

        for (var i=0; i<f.length; i++) {
            if (f.elements[i].name == "chk_wr_id[]")
                f.elements[i].checked = sw;
        }
    }

    function fboardlist_submit(f) {
        var chk_count = 0;

        for (var i=0; i<f.length; i++) {
            if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
                chk_count++;
        }

        if (!chk_count) {
            alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
            return false;
        }

        if(document.pressed == "선택복사") {
            select_copy("copy");
            return;
        }

        if(document.pressed == "선택이동") {
            select_copy("move");
            return;
        }

        if(document.pressed == "선택삭제") {
            if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
                return false;

            f.removeAttribute("target");
            f.action = g5_bbs_url+"/board_list_update.php";
        }

        return true;
    }

    // 선택한 게시물 복사 및 이동
    function select_copy(sw) {
        var f = document.fboardlist;

        if (sw == 'copy')
            str = "복사";
        else
            str = "이동";

        var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

        f.sw.value = sw;
        f.target = "move";
        f.action = g5_bbs_url+"/move.php";
        f.submit();
    }

    // 게시판 리스트 관리자 옵션
    jQuery(function($){
        $(".btn_more_opt.is_list_btn").on("click", function(e) {
            e.stopPropagation();
            $(".more_opt.is_list_btn").toggle();
        });
        $(document).on("click", function (e) {
            if(!$(e.target).closest('.is_list_btn').length) {
                $(".more_opt.is_list_btn").hide();
            }
        });
    });
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
