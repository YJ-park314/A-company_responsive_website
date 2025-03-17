<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

// 카테고리 목록 별도로 가져옴
$sql = "SELECT bo_category_list FROM g5_board WHERE bo_table = 'estimate'";
$row = sql_fetch($sql);
$categories = explode('|', $row['bo_category_list']);
// $ctgr_encode = explode('&', http_build_query($categories));

// for($c=0; $c<count($ctgr_encode); $c++) {
//     $split = explode("=", $ctgr_encode[$c]);
//     $ctgr_encode[$c] = $split[1];
// }

// 카테고리 없이 진입시 || 잘못된 카테고리로 진입시 첫 번째 카테고리로 이동
if(!isset($_GET['sfl']) || $_GET['sfl'] == '' || !isset($_GET['stx']) || $_GET['stx'] == '') { // || !in_array(urlencode($_GET['sca']), $ctgr_encode)
    goto_url('/bbs/board.php?bo_table='.$bo_table.'&sfl=ca_name&stx='.$categories[0]);
}
?>
<!-- 게시판 목록 시작 { -->
<article id="bo_gall" class="estimate">
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
                <div class="point-shape to-list"><a href="#"><span><span class="pc">예상</span>견적 확인</span></a></div>
            </div>
            <div class="right">
                <dl class="mo"> 
                    <dt>문의하기</dt>
                    <dd>문의 남겨주시면 빠르게 답변 드리겠습니다</dd>
                </dl>
                <form action="send_email.php" method="post">
                    <input type="text" name="company" placeholder="회사명" required>
                    <input type="text" name="phone" placeholder="연락 받으실 번호" required>
                    <input type="text" name="email" placeholder="E-mail" required>
                    <input type="text" name="name" placeholder="담당자명" required>
                    <input type="text" name="voucher" placeholder="정부지원사업 여부 (ex. 바우처, 디자인 지원사업 등)" required>
                    <div class="text-wrap">
                        <textarea name="content" id="" placeholder="내용을 입력해주세요 (2000자)"></textarea>
                    </div>
                    <button>SEND</button>
                </form>
            </div>
        </div>
    </section>

    <section id="estimateList" class="estimate-list">
        <div class="top-area">
            <dl class="subtitle">
                <dt><strong>예상 견적</strong>을 확인해보세요</dt>
                <dd>해당 견적은 참고용이며 <br class="mo">상담 후 프로젝트 규모 및 조건에 따라 <br class="mo">최종 견적을 협의합니다</dd>
            </dl>
        </div>

        <div class="wrap">
            <!-- 카테고리 -->
            <div class="ctgr-wrap">
                <dl class="list-subtitle pc">
                    <dt>프로젝트 유형</dt>
                    <dd>필요하신 업무 유형을 선택해보세요</dd>
                </dl>
                <div class="list-area">
                    <ul class="ctgr-classify">
                        <li class="<?php if(!isset($_GET['tab']) || $_GET['tab'] == '1') echo 'active'; ?>"><a href="#">BX</a></li>
                        <li class="<?php if($_GET['tab'] == '2') echo 'active'; ?>"><a href="#">UXUI</a></li>
                        <li class="<?php if($_GET['tab'] == '3') echo 'active'; ?>"><a href="#">Media Design</a></li>
                    </ul>
                    <ul id="bo_cate">
                        <?php
                            $val = 0;
                        ?>
                        <li class="<?php if(!isset($_GET['tab']) || $_GET['tab'] == '1') echo 'active'; ?>">
                            <ul class="opt-list">
                                <?php for($i=$val; $i<=4; $i++) { ?>
                                    <li class="item <?php if($_GET['stx'] == $categories[$i]) echo 'active' ?>"><a href="/bbs/board.php?bo_table=<?php echo $bo_table.'&sfl=ca_name&stx='.trim($categories[$i]); ?>&tab=1#estimateList"><?php echo $categories[$i]; ?></a></li>
                                <?php $val = $i; 
                                } ?>
                            </ul>
                        </li>
                        <li class="<?php if($_GET['tab'] == '2') echo 'active'; ?>">
                            <ul class="opt-list">
                                <?php for($i=$val + 1; $i<=6; $i++) { ?>
                                    <li class="item <?php if($_GET['stx'] == $categories[$i]) echo 'active' ?>"><a href="/bbs/board.php?bo_table=<?php echo $bo_table.'&sfl=ca_name&stx='.trim($categories[$i]); ?>&tab=2#estimateList"><?php echo $categories[$i]; ?></a></li>
                                <?php $val = $i;
                                } ?>
                            </ul>
                        </li>
                        <li class="<?php if($_GET['tab'] == '3') echo 'active'; ?>">
                            <ul class="opt-list">
                                <?php for($i=$val + 1; $i<count($categories); $i++) { ?>
                                    <li class="item <?php if($_GET['stx'] == $categories[$i]) echo 'active' ?>"><a href="/bbs/board.php?bo_table=<?php echo $bo_table.'&sfl=ca_name&stx='.trim($categories[$i]); ?>&tab=3#estimateList"><?php echo $categories[$i]; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li> 
                    </ul>
                </div>
            </div>

            <form name="fboardlist"  id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
                <input type="hidden" name="sw" value="">
                
                <!-- 게시판 페이지 정보 및 버튼 시작 { -->
                <div id="bo_btn_top">
                    <ul class="btn_bo_user">
                        <?php if ($write_href) { ?>
                            <li>
                                <a href="<?php echo $write_href ?>" class="cd-btn">견적 추가하기</a>
                            </li>
                        <?php } ?>
                        <?php if ($is_admin == 'super' || $is_auth) {  ?>
                            <li>
                                <?php if ($is_checkbox) { ?>    
                                    <button type="submit" name="btn_submit" class="cd-btn" value="선택삭제" onclick="document.pressed=this.value">선택삭제</button>
                                <?php } ?>
                            </li>
                        <?php }  ?>
                    </ul>
                </div>
                <!-- } 게시판 페이지 정보 및 버튼 끝 -->

                <div class="summary pc"><strong>실제 진행된 프로젝트 견적 정보를</strong> 참고해보세요</div>
                
                <!-- 리스트 시작 -->
                <ul id="gall_ul" class="gall_row">
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
                        $update_href = './write.php?w=u&amp;bo_table='.$bo_table.'&amp;wr_id='.$list[$i]['wr_id'].'&amp;page='.$page.$qstr;
                    ?>
                    <li class="<?php echo implode(' ', $classes); ?>">
                        <div class="gall_box">
                            <div class="gall_chk chk_box">
                                <?php if ($is_checkbox) { ?>
                                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                                <label for="chk_wr_id_<?php echo $i ?>">
                                    <span></span>
                                    <b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                                </label>
                                
                                <?php } ?>
                                <span class="sound_only">
                                    <?php
                                    if ($wr_id == $list[$i]['wr_id'])
                                        echo "<span class=\"bo_current\">열람중</span>";
                                    else
                                        echo $list[$i]['num'];
                                    ?>
                                </span>
                            </div>

                            <?php if($write_href) {
                                echo '<div class="gall_update"><a href="'.$update_href.'">수정</a></div>';
                            } ?>

                            <div class="gall_con">
                                <div class="gall_img">
                                    <?php
                                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
                                        $files = get_file($bo_table, $list[$i]['wr_id']);
                                        $mo_thumb = $files[1]['path'].'/'.$files[1]['file'];
                                        $pc_class = $files[1]['path'] == '' ? '' : 'pc';
                    
                                        if($thumb['src']) {
                                            $img_content = '<img src="'.$thumb['src'].'" class="'.$pc_class
                                            .'" alt="'.$thumb['alt'].'" >';
                                            // mo 썸네일 파일이 있다면
                                            if($files[1]['path']) {
                                                $img_content .= '<img src="'.$mo_thumb.'" class="mo" alt="모바일 썸네일">';
                                            }
                                        } else {
                                            $img_content = '<span class="no_image" style="'.$line_height_style.'">no image</span>';
                                        }
                
                                        echo run_replace('thumb_image_tag', $img_content, $thumb);
                                    ?>
                                </div>
                                <div class="center">
                                    <span class="subject"><?php echo $list[$i]['subject'] ?></span>
                                    <span class="con">
                                        <?php echo $list[$i]['wr_content']; ?>
                                    </span>
                                    <ul class="keywords">
                                        <?php
                                            // 키워드 최대 6개 까지
                                            for($k=1; $k<=6; $k++) { 
                                                if($list[$i]['wr_'.$k.''] != '') {
                                                    // 괄호안에 내용이 있을 때
                                                    // if (preg_match("/\((.*?)\)/", $list[$i]['wr_'.$k.''], $matches)) {
                                                    //     $inside_text = $matches[1];
                                                    //     $full_con = str_replace("(" . $inside_text . ")", "<span class='sm'>" . $inside_text . "</span>", $list[$i]['wr_'.$k.'']);    
                                                    // } else {
                                                    // $full_con = '<li>'.$list[$i]['wr_'.$k.''].'</li>';
                                                    // }
                                                    
                                                    $full_con = '<li>'.$list[$i]['wr_'.$k.''].'</li>';
                                                    echo $full_con;
                                                }
                                            }
                                        ?>
                                    </ul>
                                    <?php if($list[$i]['wr_9'] != '') echo '<span class="paging pc">About '.$list[$i]['wr_9'].'P</span>'; ?>
                                </div>
                                <div class="bottom">
                                    <span class="price"><span class="pc" style="display: inline;">프로젝트 비용 </span>약 <strong><?php echo $list[$i]['wr_7']; ?></strong> 원</span>
                                    <span class="time">약 <?php echo $list[$i]['wr_8']; ?></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                    <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
                </ul>

                <!-- 페이지 -->
                <?php // echo $write_pages; ?>
                <!-- 페이지 -->
            </form>
            <div class="btn-wrap">
                <p class="mo">프로젝트 문의하기</p>
                <div class="point-shape to-form"><a href="#">문의하기</a></div>
            </div>
        </div>
    </section>
</article>

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

<script src="/theme/basic/js/custom.js"></script>
<!-- } 게시판 목록 끝 -->
