$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
   		e.preventDefault();
   		var target = this.hash,
   		$target = $(target);
   		$('html, body').stop().animate({
    		'scrollTop': $target.offset().top
		}, 500, 'swing', function () {
		    window.location.hash = target;
	   });
	});
	
	
	
	$(".menu").click(function(){
		$(".menu_sel").removeClass("menu_sel");
		$(this).addClass("menu_sel");
	});
	
	
	
	$(window).bind('scroll',function(e){
		parallaxScroll();
    });
  
	function parallaxScroll(){
    	var scrolled = $(window).scrollTop();
		
		if ( 0 <= scrolled  && scrolled < 700) {
    		$(".menu_sel").removeClass("menu_sel");
			$("#menu1").addClass("menu_sel");
	    }
		if (700 <= scrolled && scrolled < 2100) {
    		$(".menu_sel").removeClass("menu_sel");
			$("#menu2").addClass("menu_sel");
	    }
		if (2100 <= scrolled) {
    		$(".menu_sel").removeClass("menu_sel");
			$("#menu3").addClass("menu_sel");
	    }
	};


	$("#lan").click(function(){
		$("#lan_sub").slideToggle();
	});
	/*
	
	if ($(window).width() > 2000) {
		$(window).width() == 2000}	
	*/	
		
	$(".section_in,.section1_slide ").css("width",$(window).width());
	$(window).resize(function(){
		$(".section_in, .section1_slide").css("width",$(window).width());
		$("#section1_slider_inner").css("left", snum*$(window).width()*-1);
	});

	
	var snum = 0;
				
	$("#next_btn").click(function(){
		if (snum == 2){return};
		snum++;
		slider_ani();
	});
		
	$("#prv_btn").click(function(){
		if (snum == 0){return};
		snum--;
		slider_ani();
	});
		
	setTimeout(slider_num, 1000);
	
	function slider_num(){
		 if (snum == 2) {snum = 0;} 
		 else {snum++;};
		 slider_ani();
		 setTimeout(slider_num, 1500);
	}
		
	function slider_ani(){
		$("#section1_slider_inner").stop().animate({
			left:snum*-1*$(window).width()
		});
		
		$(".bull_sel").removeClass("bull_sel");
		$(".bull").eq(snum).addClass("bull_sel");
	}
	
	
	
	$(".section3_title").eq(0).css("display", "block");
	$(".section2_arrow").eq(0).css("display", "block");

	
	$(".section3_thumb").click(function(){
		var tnum = $(this).attr("tnum");
		var colornum = $(this).attr("colornum");

		$(".section3_thumb_sel").removeClass("section3_thumb_sel");
		$(this).addClass("section3_thumb_sel");
	
		$(".section3_title, .section2_arrow").css("display", "none");
		$(".section3_title").eq(tnum).css("display", "block");
		$(".section2_arrow").eq(tnum).css("display", "block");

		$("#section3_in").css("background",colornum)
	});
	
	
	
	$(".section5_theme_ico").eq(0).css("display", "block");
	$(".section5_theme_title").eq(0).css("display", "block");
	
	$(".test_btn").click(function(){
		var pnum = $(this).attr("pnum")
		
		$(".section5_theme_ico, .section5_theme_title").css("display", "none");
		$(".section5_theme_ico").eq(pnum).css("display", "block");
		$(".section5_theme_title").eq(pnum).css("display", "block");
		
	});
	
	
	

	$(".test_btn").click(function(){
		var pnum = $(this).attr("pnum");
		pnum = parseInt(pnum);
		
		$("#section5_phone_slider_inner").css("left", "-243px");
		$("#section5_phone_slide3").css("background", "url(./images/theme_"+(pnum+1)+".jpg)"); 
		$("#section5_phone_slider_inner").stop().animate({
			left: -486
		}, function(){
			$("#section5_phone_slide2").css("background", "url(./images/theme_"+(pnum+1)+".jpg)"); 
		});
	});
	
	
	$(".test_btn1").click(function(){
		var pnum = $(this).attr("pnum");
		pnum = parseInt(pnum);
		
		$("#section5_phone_slider_inner").css("left", "-243px");
		$("#section5_phone_slide1").css("background", "url(./images/theme_"+(pnum+1)+".jpg)"); 
		$("#section5_phone_slider_inner").stop().animate({
			left: 0
		}, function(){
			$("#section5_phone_slide2").css("background", "url(./images/theme_"+(pnum+1)+".jpg)"); 
		});
	});
});

	


