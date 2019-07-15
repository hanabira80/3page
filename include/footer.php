<footer>
	<div class="width-inner">
		<div class="footer-logo">
			<img src="./img/footer-logo.png" class="res">
		</div>
		<div class="footer-info-box">
			<div class="footer-info">상호 : 3PAGE</div>
			<div class="footer-info">대표자 : 3PAGE</div>
			<div class="footer-info">사업자등록 : 000-00-00000</div>
			<div class="footer-info-spt"></div>
			<div class="footer-info">TEL : 000-0000-0000</div>
			<div class="footer-info">주소 : 서울특별시 서초구 서초대로</div>
		</div>
		<div class="footer-copy">
			COPYRIGHT©2017 3PAGE. ALL RIGHT RESERVED
		</div>
	</div>
</footer>

<script>
	
	function parallaxScroll(){
		var winHeight = $(window).height();
    	var scrolled = $(window).scrollTop();
		var totalHeight = $("body").height();
		var footerHeight = $("footer").height();
		//var adjust = $(window).height()*0.2;
		rate = scrolled/(totalHeight - winHeight);
		//console.log(totalHeight - (winHeight*2)  + footerHeight);
		//console.log(totalHeight);
		//console.log(winHeight);
		//console.log(scrolled);
		if ( 10 > scrolled ) {
			$("header").removeClass("js-is-fix");
			$("header .scroll-nav").removeClass("js-is-active");
		}
		if ( 10 <= scrolled ) {
			$("header").addClass("js-is-fix");
			$("header .scroll-nav").addClass("js-is-active");
			//$("header .scroll-nav .percent").addClass("js-is-percent");
			/*$("header .scroll-nav .percent").stop().animate({
				"transform":"scale3d("+rate+",1,1)"
			},300);*/
			$("header .scroll-nav .percent").css("transform","scale3d("+rate+",1,1)");
		}
		if (0 <= scrolled && winHeight >= scrolled) {
			$(".type-full-page .full-page-bg").css("background-position","50% "+ scrolled/7*-1 +"px");
			$(".type-full-page .full-page-overlay").css("background","rgba(0,0,0,"+ scrolled/winHeight*0.8 +")")
		}
		if (totalHeight - winHeight - 40 <= scrolled) {
			$("footer .footer-logo").addClass("js-is-active");
		}
		else {
			$("footer .footer-logo").removeClass("js-is-active")
		}
	}

	$(document).ready(function(){
		$(window).bind('scroll',function(e){
			parallaxScroll();
		});
		$(window).resize(function(){
			parallaxScroll();
		});
	});
</script>

<? include($_homepage_root."/include/modal.php");?>
<? include($_homepage_root."/include/marketing_script.php");?>

<div id="temp" style="width:100px; height:100px; background:#444; display:none; position:fixed; z-index:900000; left:100px; bottom:100px; text-align:center; line-height:50px; color:#fff; cursor:pointer;" video_value="PdJa997mCUY"></div>

<script>
	//$(".temp").click(function(){
		//alert();
		/*

		if($(this).hasClass("active")) {
			$(this).removeClass("active");
			$('html, body').removeClass("js_is_fixed");
			$('body').scrollTop(kk);
		}
		else {
			kk = $('body').scrollTop();
			$(this).addClass("active");
			$('html, body').addClass("js_is_fixed");
		}
		*/
		
	//});
	
		$(".scroll-block").bind("mousewheel DOMMouseScroll", function ( e ) {
			var e0 = e.originalEvent,
				delta = e0.wheelDelta || -e0.detail;
			this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
			e.preventDefault();
		});
		/*
		window.blockMenuHeaderScroll = false;
		$(window).on('touchstart', function(e)
		{
			if ($(e.target).closest('#mobileMenuHeader').length == 1)
			{
				blockMenuHeaderScroll = true;
			}
		});
		$(window).on('touchend', function()
		{
			blockMenuHeaderScroll = false;
		});
		$(window).on('touchmove', function(e)
		{
			if (blockMenuHeaderScroll)
			{
				e.preventDefault();
			}
		});
		*/
</script>

</body>
</html>