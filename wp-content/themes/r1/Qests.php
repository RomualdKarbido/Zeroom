<?php /*Template Name: qests*/ ?>
<?php get_header(); ?>
<main class="content">		
<h1 style="margin:0 auto 20px; font-size:20px; ">Квесты от сценаристов из Японии</h1>
<p style="text-align:center; line-height:1.8;"><span style="color:#F00"> Приключение для команды 2-5 человек, где нужно решить загадки, ребусы, найти все ключи и выбраться из закрытого помещения за 60 минут. 
 </span> 
<p style="text-align:center; line-height:1.8;"><span style="color:#R00">Цена со ВСЕЙ команды в выходные и будни после 16.30 - <span style="color:#F00">3000</span> руб. &nbsp;|&nbsp; В будни до 16.30 - <span style="color:#F00">2000</span> руб. 
<div style="clear:both; height:15px;"></div>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
	<?php echo get_post_meta ($post->ID, 'gallery', TRUE)  ?>
    
    <?php the_content(); ?>

	<?php endwhile; ?>
<div style="clear:both; height:20px;"></div> 
</main><!-- .content -->
</div><!-- .wrapper -->
<?php get_footer(); ?>