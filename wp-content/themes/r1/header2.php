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
  $(document).ready(function(){

	//Разворачиваем блок
    $(".kn").click(function () {
		$(".footer").removeClass("footer3").toggleClass("footer2");
		$(".adresblock").toggleClass("adresblock2").removeClass("adresblock3"); 
		$(".form1").toggleClass("form2");
    });
	$(".Tell").click(function () {
		$(".footer").removeClass("footer2").toggleClass("footer3");
		$(".adresblock").toggleClass("adresblock3").removeClass("adresblock2");
		$(".form1").removeClass("form2"); 
    });
 });
  </script>
  
<link rel="stylesheet" type="text/css" href="wp-content/themes/r1/home.css">
</head>
<body> 
<div class="wrapper">
<header class="header"> <a href="/rules" class="Rg">[Правила игры]</a> <a href="#" class="Sr kn">Записаться</a>
  <div class="topmove"></div>
  <a href="/" class="logo">[<span class="skob">[</span>zer00m<span class="skob">]</span>]</a>
  <div id="blInfo" > Зерум — это квест в реальности, настоящее приключение, требующее смекалки для    решения   головоломок и задач, чтобы выбраться из ло</div>
  <div style="clear:both; "></div>
</header>
<!-- .header--> 