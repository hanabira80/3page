	$(document).ready(function(){
/*
		$("#popup").stop().animate({
			height: 445}, 1000);

  
		$("#popup_close_mark").click(function(){
			$("#popup").stop().animate({
				height: 0}, 1000);
		});
*/
		$("#popup").slideDown("slow");
  
		$("#popup_close_mark").click(function(){
			$("#popup").slideUp("slow");
			});
		
		
		var sn = 0;
		setTimeout(slider_ani, 8000);

		function slider_ani(){
		sn++;
   
		$("#main_up_left_inner").stop().animate({
		left: -574*sn
		}, function(){
   
			if (sn == 6) {
				$("#main_up_left_inner").css("left", "0");
				sn = 0;
			}
			setTimeout(slider_ani, 8000);
			});
		}
		
		
		$(".tabview").eq(0).css("display", "block");
		
		$(".tab").click(function(){
			var s =  $(this).attr("s");
			$(".tab_sel").removeClass("tab_sel");
			$(this).addClass("tab_sel");
			
			$(".tabview").css("display", "none");
			$(".tabview").eq(s).css("display", "block");
		});

		$(".event_ico").mouseenter(function(){
			var b = $(this).attr("b");
			$(".event_img").css("display", "none");
			$(".event_img").eq(b).css("display", "block");
		});
		
		var sb = $(".kind_nav_ico_sel").attr("sb");
		var isMove = false;
		var st = 1;
		
		$("#next").click(function(){
			if (isMove)
				return;
			isMove = true;
			
			st++;
			$("#kind_slider_inner").stop().animate({
				left:st*-910},function(){
					if (st == 5) {
						$("#kind_slider_inner").css("left", "-910px");
						st = 1;
					}
					isMove = false;
			});
			
			$(".kind_nav_ico_sel").removeClass("kind_nav_ico_sel");
			$(".kind_nav_ico").eq(st%4-1).addClass("kind_nav_ico_sel");
			
		});
		
		$("#prev").click(function(){
			if (isMove)
				return;
			isMove = true;
			
			st--;
			$("#kind_slider_inner").stop().animate({
				left:st*-910},function(){
					if (st == 0) {
						$("#kind_slider_inner").css("left", "-3640px");
						st = 4;
					}
					isMove = false;
			});
			
			$(".kind_nav_ico_sel").removeClass("kind_nav_ico_sel");
			$(".kind_nav_ico").eq(st%4-1).addClass("kind_nav_ico_sel");	
			
		});
		
		
		
		
		

/*		
		$(".slider_btn").click(function(){
			var k =  $(this).attr("k");
			$(".slider_btn_sel").removeClass("slider_btn_sel");
			$(this).addClass("slider_btn_sel");
			
		});

*/
/*			

		$(".kind_nav_ico").stop().animate({},
			function(){
			var st =  $(this).attr("st");
			$(".kind_nav_ico_sel").removeClass("kind_nav_ico_sel");
			$(this).addClass("kind_nav_ico_sel");
		});
*/
	});