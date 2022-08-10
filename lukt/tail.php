<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft" class="">

    <div id="ft_wr">

        <div class="ft_icon">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
        
        <div class="ft_logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/ft_logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <div id="ft_company" class="ft_cnt">
        	<!-- <a href="https://lukt.co.kr" target="blank">공식 홈페이지</a> -->
	        <p class="ft_info">
                <a href="https://lukt.co.kr" target="blank">공식 홈페이지</a>
			</p>
	    </div>

        <div id="ft_link" class="ft_cnt">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">입점제안</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">광고/제휴문의</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a>
            <a href="<?php echo get_device_change_url(); ?>">개인정보처리방침</a>
        </div>

    </div>

    <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/img/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
    <div id="ft_copy">Copyright &copy; <b>LUKT</b> All rights reserved.</div>

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");