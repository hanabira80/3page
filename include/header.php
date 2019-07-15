<!DOCTYPE html>
<html>
<head>
	<title>3PAGE</title>
	<!--link rel="shortcut icon" href="../img/common/favicon.ico"-->
	<link rel="icon" type="image/png" href="/img/common/favicon.png" sizes="32x32">
	<meta http-equiv="Content-Type" content="charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

	<!-- mobile setting -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="theme-color" content="#141414">
	<meta name="msapplication-navbutton-color" content="#141414">
	<meta name="apple-mobile-web-app-status-bar-style" content="#141414">
	<!-- mobile setting end-->

	<!-- cache setting -->
	<meta http-equiv="Cache-Control" content="no-store"/>
	<meta http-equiv="Expires" content="0"/>
	<meta http-equiv="Pragma" content="no-cache"/>
	<!-- cache setting end-->

	<!-- open graph protocol -->
	<meta id="og_type" property="og:type" content="website">
	<meta id="og_title" property="og:title" content="">
	<meta id="og_description" property="og:description" content="">
	<meta id="og_image" property="og:image" content="">
	<meta id="og_url" property="og:url" content="">
	<!-- open graph protocol end -->

	<!--font setting -->
	<!--link href="//cdn.jsdelivr.net/font-nanum/1.0/nanumgothic/nanumgothic.css" rel="stylesheet" type="text/css"-->
	<link href="//cdn.jsdelivr.net/font-nanum/1.0/nanumbarungothic/nanumbarungothiclight.css" rel="stylesheet" type="text/css">
	<!--link href="//cdn.jsdelivr.net/font-nanumsquare/1.0.0/nanumsquare.css" rel="stylesheet" type="text/css"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<!--link href="./css/material-icons/material-icons.css" rel="stylesheet" type="text/css"-->
	<link href="./css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- font setting end-->

	<link href="./css/reset.css" rel="stylesheet" type="text/css">
	<link href="./css/common.css" rel="stylesheet" type="text/css">
	<link href="./css/swiper.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery.js"></script>
	<script src="./js/mq.genie.min.js"></script>
	<script src="./js/ScrollMagic.min.js"></script>
	<script src="./js/swiper.min.js"></script>
</head>

<body class="js-is-limit">

<div class="loader">
	<div class="left-area"></div>
	<div class="right-area"></div>
	<div class="canvas-area sk-cube-grid xy-center">
		<div class="sk-cube sk-cube1"></div>
		<div class="sk-cube sk-cube2"></div>
		<div class="sk-cube sk-cube3"></div>
		<div class="sk-cube sk-cube4"></div>
		<div class="sk-cube sk-cube5"></div>
		<div class="sk-cube sk-cube6"></div>
		<div class="sk-cube sk-cube7"></div>
		<div class="sk-cube sk-cube8"></div>
		<div class="sk-cube sk-cube9"></div>
		<div class="bg">
			<!--<i class="material-icons">&#xE8F6;</i><!---->
			<i class="material-icons">&#xE855;</i>
		</div>
	</div>
</div>

<header>
	<div class="header-bg">
		<div class="scroll-nav">
			<div class="percent js-is-percent"></div>
		</div>
	</div>
	<div class="width-inner">
		<h1 class="header-logo">
			<i class="material-icons">&#xE030;</i>
			<div class="icn-txt">3PAGE</div>
		</h1>

		<div class="header-menu-box">
			<nav class="header-menu">
				<a href="#main" class="div">
					<div class="txt">첫번째 메뉴</div>
					<div class="border"></div>
				</a>
			</nav>
			<nav class="header-menu">
				<a href="#main" class="div">
					<div class="txt">두번째 메뉴</div>
					<div class="border"></div>
				</a>
			</nav>
			<nav class="header-menu">
				<a href="#main" class="div">
					<div class="txt">세번째 메뉴</div>
					<div class="border"></div>
				</a>
			</nav>
			<nav class="header-menu">
				<a href="#main" class="div">
					<div class="txt">네번째 메뉴</div>
					<div class="border"></div>
				</a>
			</nav>
			<nav class="header-menu">
				<a href="#main" class="div">
					<div class="txt">다섯번째 메뉴</div>
					<div class="border"></div>
				</a>
			</nav>
		</div>

		<div class="header-menu-icn y-center">
			<div class="bar bar1"></div>
			<div class="bar bar2"></div>
			<div class="bar bar3"></div>
			<div class="bar bar4"></div>
		</div>
	</div>
</header>

<script>
	$(window).load(function(){
		$(".loader").addClass("js-is-hidden").delay(600).queue(function(){
			$("body").removeClass("js-is-limit").dequeue();
		});
	});

	$(document).ready(function(){
		$(".header-menu-icn").click(function(){
			if ($(this).hasClass("js-is-active")){
				$(this).removeClass("js-is-active");
				$(".header-menu-box").removeClass("js-is-active");				
			}
			else {
				$(this).addClass("js-is-active");
				$(".header-menu-box").addClass("js-is-active");
			}
			//$(this).toggleClass("js-is-active");
		});
	});
</script>