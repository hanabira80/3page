$(document).ready(function(){
	
	$(".menu").click(function(){
		$(".menu_sel").removeClass("menu_sel");
		$(this).addClass("menu_sel");
		
	});

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
	
	$(window).bind('scroll',function(e){
     parallaxScroll();
    });
 
 
 
	function parallaxScroll(){
    	var scrolled = $(window).scrollTop();
		

		
		if ( 0 <= scrolled && scrolled <= 500 ) {
			$("#pen").stop().animate({
				left:200-((scrolled)*0.5)
			});
			$("#pen").css("backgroundPosition","0 0");
			$("#pen").css("-webkit-animation","pen1 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu1").addClass("menu_sel");
		}
		if ( 500 <= scrolled && scrolled < 1000 ) {
			$("#pen").stop().animate({
				left:((scrolled-500)*1.2)-50
			});
			$("#pen").css("backgroundPosition","0 0");
			$("#pen").css("-webkit-animation","pen1 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu1").addClass("menu_sel");
		}
		if ( 1000 <= scrolled && scrolled < 1500 ) {
			$("#pen").stop().animate({
				left:((scrolled-1000))+550
			});
			$("#pen").css("backgroundPosition","-70px 0");
			$("#pen").css("-webkit-animation","pen2 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu2").addClass("menu_sel");
		}
		if ( 1500 <= scrolled && scrolled < 2000 ) {
			$("#pen").stop().animate({
				left:1050-((scrolled-1500)*1.2)
			});
			$("#pen").css("backgroundPosition","-70px 0");
			$("#pen").css("-webkit-animation","pen2 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu2").addClass("menu_sel");
		}
		if ( 2000 <= scrolled && scrolled < 4000 ) {
			$("#pen").stop().animate({
				left:100
			});
			$("#pen").css("backgroundPosition","-140px 0");
			$("#pen").css("-webkit-animation","pen3 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu3").addClass("menu_sel");
		}
		
		if ( 4000 <= scrolled && scrolled < 4300 ) {
			$("#pen").stop().animate({
				left:((scrolled-4000)*3)+100
			});
			$("#pen").css("backgroundPosition","-140px 0");
			$("#pen").css("-webkit-animation","pen3 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu3").addClass("menu_sel");
		}
		if ( 4300 <= scrolled && scrolled < 5000 ) {
			$("#pen").stop().animate({
				left:1000
			});
			$("#pen").css("backgroundPosition","-210px 0");
			$("#pen").css("-webkit-animation","pen4 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu4").addClass("menu_sel");
		}
		if ( 5000 <= scrolled && scrolled < 5500 ) {
			$("#pen").stop().animate({
				left:1000-((scrolled-5000)*1.2)
			});
			$("#pen").css("backgroundPosition","-210px 0");
			$("#pen").css("-webkit-animation","pen4 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu4").addClass("menu_sel");
			
		}
		if ( 5500 <= scrolled && scrolled <6000) {
			$("#pen").stop().animate({
				left:400-(scrolled-5500)
			});
			$("#pen").css("backgroundPosition","-280px 0");
			$("#pen").css("-webkit-animation","pen5 infinite 4s");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu5").addClass("menu_sel");
		}
		if ( 6000 <= scrolled) {
			$("#pen").stop().animate({
				left:-700
			});
			$("#pen").css("backgroundPosition","-280px 0");
			$(".menu_sel").removeClass("menu_sel");
			$("#menu5").addClass("menu_sel");
		}
		
		if ( 2100 <= scrolled && scrolled <= 3900) {
			
			var ss =  parseInt (( (scrolled-2000)+100)/100);
			
			for (var i=0  ;  i<=ss; i++) {
				$("#portfolio"+( i) ).stop().animate({
					opacity:1
				}, 100);
			}
			for (var i=ss+1 ;  i<=18; i++) {
				$("#portfolio"+(  i  )).stop().animate({
					opacity:0
				}, 100);
			}
		} 
		else{$(".portfolio").css("opacity","0")
		}
		
		if ( 4000 <= scrolled && scrolled < 4800 ) {
			$(".skill_icon").css("display","block");
			$(".skill_bar").css("display","block");
			$("#skill_txt_ai").addClass("skill_first");
			$("#skill_txt_ps").addClass("skill_second");
			$("#skill_txt_html").addClass("skill_third");
			$("#skill_txt_css").addClass("skill_fourth");

		}
		else {
			$(".skill_icon").css("display","none");
			$(".skill_bar").css("display","none");
			$("#skill_txt_ai").removeClass("skill_first");
			$("#skill_txt_ps").removeClass("skill_second");
			$("#skill_txt_html").removeClass("skill_third");
			$("#skill_txt_css").removeClass("skill_fourth");
			$(".skill_bar").css("backgroundImage","url(./images/skill_point.gif)")
		}
		
		if ( 0 <= scrolled && scrolled <= 1000 ) {
			$("#menu_bg").css("opacity",(scrolled)*0.001)
		}
		else {
			$("#menu_bg").css("opacity",1)
		}
		
		if ( scrolled < 5400 ) {
			$("#contact1_icon").css("backgroundImage","url(./images/contact1_blue.png)")
			$("#contact2_icon").css("backgroundImage","url(./images/contact2_blue.png)")
			$("#contact3_icon").css("backgroundImage","url(./images/contact3_blue.png)")
			$("#contact4_icon").css("backgroundImage","url(./images/contact4_blue.png)")
		}
		if ( 5400 <= scrolled && scrolled < 5500 ) {
			$("#contact1_icon").css("backgroundImage","url(./images/contact1_green.png)")
			$("#contact2_icon").css("backgroundImage","url(./images/contact2_green.png)")
			$("#contact3_icon").css("backgroundImage","url(./images/contact3_green.png)")
			$("#contact4_icon").css("backgroundImage","url(./images/contact4_green.png)")
		}
		if ( 5500 <= scrolled && scrolled < 5600 ) {
			$("#contact1_icon").css("backgroundImage","url(./images/contact1_blue.png)")
			$("#contact2_icon").css("backgroundImage","url(./images/contact2_blue.png)")
			$("#contact3_icon").css("backgroundImage","url(./images/contact3_blue.png)")
			$("#contact4_icon").css("backgroundImage","url(./images/contact4_blue.png)")
		}
		if ( 5600 <= scrolled && scrolled < 5700 ) {
			$("#contact1_icon").css("backgroundImage","url(./images/contact1_red.png)")
			$("#contact2_icon").css("backgroundImage","url(./images/contact2_red.png)")
			$("#contact3_icon").css("backgroundImage","url(./images/contact3_red.png)")
			$("#contact4_icon").css("backgroundImage","url(./images/contact4_red.png)")
		}
		if ( 5700 <= scrolled) {
			$("#contact1_icon").css("backgroundImage","url(./images/contact1_yellow.png)")
			$("#contact2_icon").css("backgroundImage","url(./images/contact2_yellow.png)")
			$("#contact3_icon").css("backgroundImage","url(./images/contact3_yellow.png)")
			$("#contact4_icon").css("backgroundImage","url(./images/contact4_yellow.png)")
		}
		if ( 5400 <= scrolled && scrolled < 6000){
			$("#contact1").stop().animate({
				left:0,
				opacity:1
			},500,function(){
					$("#contact2").stop().animate({
						left:0,
						opacity:1
					},500,function(){
						$("#contact3").stop().animate({
							left:0,
							opacity:1
						},500,function(){
							$("#contact4").stop().animate({
								left:0,
								opacity:1
							},500)
						})
					})
			 })
		}
		else {
			$(".contact").stop().animate({
				left:300,
				opacity:0
				},500)	
		}
		if (0 <= scrolled && scrolled < 700) {
			$("#about_photo1_bg").stop().animate({
				opacity:1
			},500,function(){
					$("#about_photo2_bg").stop().animate({
						opacity:1
					},500,function(){
						$("#about_photo3_bg").stop().animate({
							opacity:1
						},500)
						})

			 })
			
		}
		else {
			$(".about_photo_bg").stop().animate({
				opacity:0
				},500)	
		}
		if ( 900 <= scrolled && scrolled < 1500 ) {
			$("#about_content").stop().animate({
				left:550,
				opacity:1
			});
		}
		else {
			$("#about_content").stop().animate({
				left:1000,
				opacity:0
				})	
		}
	}
	
	
	var loc = 0;
	var dir = 1;
	var speed = 1;

	banner_ani();

	function banner_ani() {
		if (dir < 0) {
		if (loc <= -1950) {
			loc = 0;
		}
		} 
		else {
			if (loc >= 0) {
		 		loc = -1950;
			}
		}

		loc += dir*speed;
		$("#skill_deco1_in").css("top",  loc +"px");
		setTimeout(banner_ani, 10);
		}
		

});	