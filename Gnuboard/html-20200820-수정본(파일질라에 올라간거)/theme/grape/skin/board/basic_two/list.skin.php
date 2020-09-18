

<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 2;

if ($is_checkbox) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<?php // 게시판 관리의 상단 내용
if (G5_IS_MOBILE) {
    echo '<div class="bo_top_img">';
    // 모바일의 경우 설정을 따르지 않는다.
    echo html_purifier(stripslashes($board['bo_mobile_content_head']));
     echo '</div>';

} 
?>


<div id="wrapper">

    <div id="container">
    <?php if (!defined("_INDEX_")) { ?><h2 id="container_title1" class="top" title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></h2><?php } ?>






<div id="bo_list_total" class="pc_view">
    <span>전체 <?php echo number_format($total_count) ?>건</span>
    <?php echo $page ?> 페이지
</div>

<div id="nav">
    <div class="nav_wr"><a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> </a><span><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']); ?></span></div>
</div>
<?php if ($is_category) { ?>
<nav id="bo_cate">
    <h2><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?> 카테고리</h2>
    <ul id="bo_cate_ul">
        <?php echo $category_option ?>
    </ul>
</nav>
<?php } ?>

<div id="bo_list">
    
    <!-- <fieldset id="bo_sch">
        <legend>게시물 검색</legend>

        <form name="fsearch" method="get">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sop" value="and">
        <label for="sfl" class="sound_only">검색대상</label>
        <select name="sfl" id="sfl">
            <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
            <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
            <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
            <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
            <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
            <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
            <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
        </select>
        <input name="stx" value="<?php echo stripslashes($stx) ?>" placeholder="검색어(필수)" required id="stx" class="sch_input" size="15" maxlength="20">
        <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i> <span class="sound_only">검색</span></button>
        </form>
    </fieldset>


    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value=""> -->



    <style>
        


.tab-wrapper {
  margin: 60px auto;
  width: 100%;
  /* max-width:500px; */
}

.tab-menu li {
  position:relative;
  background-color: #fff;
  color:#bcbcbc;
  display: inline-block;
  padding: 20px 40px;
  opacity: 0.8;
  cursor:pointer;
  z-index:0;
}

.tab-menu li:hover {
  color:#464646;
}

.tab-menu li.active {
  color:#464646;
  opacity: 1;
}

.tab-menu li.active:hover {
  color:#464646;
}

.tab-content>div {
  background-color: #fff;
  box-sizing:border-box;
  width: 100%;
  /* padding: 50px;    */
  min-height:200px;
}

.line {
  position:absolute;
  width: 0;
  height: 7px;
  background-color: #274554;
  top: 0;
  left: 0;
}
.tab-menu{
    margin: 0 auto;
    width: 531px;
}



    </style>


<div class="tab-wrapper">
  
        <ul class="tab-menu margin:0 auto !important;">
          <li class="active">여드름/흉터 클리닉</li>
          <li>아토피 클리닉</li>
          <li>보톡스/필러 클리닉</li>
        </ul>
        
        <div class="tab-content">
            <div>
        <img src="<?php echo G5_THEME_URL ?>/img/3696582357_SoqErPOm_20190523_EB8DB8ED8380ED94BCEBB680EAB3BC_ED8380EC9DB4ED8B80_EC97ACEB939CEBA684_EC9E84ECA784EC9584.jpg" alt="" style="width:100%">
          <div style="max-width:1200px; margin:0 auto;">
          
          
          <h1  class="h1h1" style="font-size:30px; color: #274554; letter-spacing:5px; text-align:center; margin-top:20px; padding:1% 0; color: rgb(97, 97, 97);">여드름 청춘의 꽃이 아닌 흉터가 남는 질환입니다.</h1>
          
          <h1 style="font-size:30px; margin-top:50px; color:#434343;">여드름 치료가 필요하신 분</h1>
          <img src="<?php echo G5_THEME_URL ?>/img/432.jpg" alt="" style="width:100%; display:block; margin:0 auto !important; margin-top:50px !important;">

          <div class="quot">
					<p class="block-quot" style="margin:50px auto; text-align:center; font-size:20px; line-height:30px; padding: 0 30px 0 0; color: rgb(97, 97, 97);">
                    <img src="<?php echo G5_THEME_URL ?>/img/quot-mark-1.png" alt="" style="display:inline-block;">
                    <span>
							개인의 피부상태에 따른 피부과 전문의와의 상담 후<br>
							최선의 선택으로 치료하는 것이 중요합니다.
                        </span>
                        <img src="<?php echo G5_THEME_URL ?>/img/quot-mark-2.png" alt="" style="display:inline-block;">
					</p>
          </div>

          <h1 style="font-size:30px; color:#434343;">시술과정</h1>
          <img src="<?php echo G5_THEME_URL ?>/img/444.jpg" alt="" style="width:100%; display:block; margin:0 auto !important;">


          </div>
          </div>


          <div>
          <img src="<?php echo G5_THEME_URL ?>/img/3696582357_NaEyG0W6_20190619_EB8DB8ED8380ED94BCEBB680EAB3BC_ED8380EC9DB4ED8B80_EC9584ED86A0ED94BC_EC9E84ECA784EC9584.jpg" alt="" style="width:100%">
          </div>


          <div>
          <img src="<?php echo G5_THEME_URL ?>/img/3696582357_khWg7TXM_20190617_EB8DB8ED8380ED94BCEBB680EAB3BC_ED8380EC9DB4ED8B80_EBB3B4ED86A1EC8AA4ED9584EB9FAC_EBB095EB8BA4EC869C.jpg" alt="" style="width:100%">
          </div>


        </div><!-- //tab-content -->
        
      </div><!-- //tab-wrapper -->
      
      
      

      
      <script>
          $(document).ready(function() {
  
  var $wrapper = $('.tab-wrapper'),
      $allTabs = $wrapper.find('.tab-content > div'),
      $tabMenu = $wrapper.find('.tab-menu li'),
      $line = $('<div class="line"></div>').appendTo($tabMenu);
  
  $allTabs.not(':first-of-type').hide();  
  $tabMenu.filter(':first-of-type').find(':first').width('100%')
  
  $tabMenu.each(function(i) {
    $(this).attr('data-tab', 'tab'+i);
  });
  
  $allTabs.each(function(i) {
    $(this).attr('data-tab', 'tab'+i);
  });
  
  $tabMenu.on('click', function() {
    
    var dataTab = $(this).data('tab'),
        $getWrapper = $(this).closest($wrapper);
    
    $getWrapper.find($tabMenu).removeClass('active');
    $(this).addClass('active');
    
    $getWrapper.find('.line').width(0);
    $(this).find($line).animate({'width':'100%'}, 'fast');
    $getWrapper.find($allTabs).hide();
    $getWrapper.find($allTabs).filter('[data-tab='+dataTab+']').show();
  });

});//end ready
      </script>

      <?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages; ?>


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
</script>
<?php } ?>
<!-- 게시판 목록 끝 -->
