<?php /*Template Name: test*/ ?>

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
<header class="header"> <a href="/rules" class="Rg">[Правила игры]</a> 
  <div class="topmove"></div>
  <a href="/" class="logo">[<span class="skob">[</span>zer00m<span class="skob">]</span>]</a>
  <div id="blInfo" > <span id="r1">Зерум</span> — это квест в реальности, настоящее приключение, требующее смекалки для решения   головоломок и задач, чтобы выбраться из ловушки. </div>
  <div style="clear:both;  "></div>
</header>
<!-- .header--> 


	<main class="content">
		
       <div style="margin-bottom:70px;">
        
        			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail"> 
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

					
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				
			<?php endwhile; ?>
                
        </div>
<div style="display:block;"></div> 

	</main><!-- .content -->

</div><!-- .wrapper -->

<footer class="footer">
  <div class="footcont"> <a href="/sertifikat" >Сертификат</a> | <a href="/viners">Победители</a>
    <div class="Tell"> | <a href="#">Контакты</a></div>
    <div class="adresblock"> Тел.: +7 (985) 210-55-68 <br>
      E-mail: info@zeroom.org <br>
      Адрес: Чистые Пруды, Тургеневская. Мясницкая, 15 <br>
      Вход в арку со львом, и сразу за воротами слева </div>
    <div class="form1">
     
 



<div style="clear:both; height:30px;"></div>




<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter26593590 = new Ya.Metrika({id:26593590,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/26593590" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->





<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55660022-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=eKx8vHxM4X9Xzrpaw3wsKbYYP9bOMvj8n6GQ5ok*7bUD/FLmr6NkxYpRlQ6vI0KGDxiHoqiXpex6KE1HXwlNuOHbmAwlgjOOcXKwgp03YdOuVZcqFE4fhCgTd7zIqv3jievyWJDm*AA0qtqD0AMnDsQHfbqwD2kO9wRxVLeCtSo-';</script>


    </div>
    <?php wp_footer(); ?> 
  </div>
</footer>
</body></html> 
