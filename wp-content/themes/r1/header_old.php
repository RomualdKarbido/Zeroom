<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<link rel="icon" href="http://zeroom.org/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://zeroom.org/favicon.ico" type="image/x-icon" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script> 
	<![endif]-->
<?php wp_head(); ?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>



<script>
//  $(document).ready(function(){
//
//
//
//	//Разворачиваем блок
//    $(".kn1").click(function () {
//		$(".footer").removeClass("footer3").toggleClass("footer2");
//		$(".adresblock").toggleClass("adresblock2").removeClass("adresblock3");
//		$(".form1").toggleClass("form2");
//    });
//	$(".Tell").click(function () {
//		$(".footer").removeClass("footer2").toggleClass("footer3");
//		$(".adresblock").toggleClass("adresblock3").removeClass("adresblock2");
//		$(".form1").removeClass("form2"); 
//    });
// });
 </script>

<!--<link rel="stylesheet" type="text/css" href="/wp-content/themes/r1/home.css">
-->
		
	
		<link rel="stylesheet" href="/wp-content/themes/r1/icarousel/css/icarousel.css" />
		<link rel="stylesheet" href="/wp-content/themes/r1/icarousel/css/demo3.css" />
		
		<script src="/wp-content/themes/r1/icarousel/js/raphael-min.js"></script>
		<script src="/wp-content/themes/r1/icarousel/js/jquery.mousewheel.js"></script>
		<script src="/wp-content/themes/r1/icarousel/js/jquery.easing.1.3.js"></script>

		<script src="/wp-content/themes/r1/icarousel/js/icarousel.packed.js"></script>
        <script src="/wp-content/themes/r1/js/colorbox-master/jquery.colorbox.js"></script>
		
<script>
//Колорбокс
$(document).ready(function(){
	$(".ImgCX").colorbox({rel:'ImgCX'});
});
</script>
<link rel="stylesheet" href="/wp-content/themes/r1/js/colorbox-master/example1/colorbox.css">		

<script src="/wp-content/themes/r1/js/universal-jquery-tabs-script/tabs_cookies.js"></script>
		<script>
			$(document).ready(function(){
				$('#icarousel').iCarousel({
					easing: 'easeInOutQuint',
					slides: 6,
					animationSpeed: 700,
					pauseTime: 20000,
					perspective: 75,
					slidesSpace: 300,
					pauseOnHover: true,
					direction: "ltr",
					timer: "none",
					timerOpacity: 0.5,
					timerDiameter: 220,
					keyboardNav: true,
					mouseWheel: true,
					timerPadding: 3,
					timerStroke: 4,
					timerBarStroke: 0,
					timerColor: "#0F0",
					timerPosition: "bottom-right",
					timerX: 15,
					timerY: 30
				});
			});
		</script> 



  

</head>
<body> 
<div class="wrapper">
<header class="header"> <a href="/rules" class="Rg">[Правила игры]</a> <a href="/join/#r1" class="Sr kn">Записаться</a>
  <div class="topmove"></div>
  <a href="/" class="logo">[<span class="skob">[</span>zer00m<span class="skob">]</span>]</a>
  <div id="blInfo" > Зерум — это квест в реальности, настоящее приключение, требующее смекалки для    решения   головоломок и задач, чтобы выбраться из ловушки. </div>

  <div style="clear:both; "></div>
</header>
<!-- .header--> 