<?php /*Template Name: Book2*/ ?>


<?php get_header(); ?>
	<main class="content">
		
       <div style="margin-bottom:70px;">
        
        			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
<h1 class="entry-title"><?php the_title(); ?></h1
					<div class="entry-content">
                    
                    
<div class="booknew1">
<a href="#" class="eModal-1 img1Book"  >

<div class="booknew_text">
Заводной апельсин
</div>
<div class="booknew_text2">Тут описание</div>
</a>

<a href="#" class="eModal-1 img1Book2"  >
<div class="booknew_text">
СуперМарио
</div>

</a>
</div>
<div style="clear:both; height:10px; font-size:12px; color:#999;"></div>
<p style="text-align:center;">Запишитесь на квест.  После этого нажмите кнопку «оплатить». <br> В случае отсутствия оплаты в течение 14 часов бронирование аннулируется.</p>

<?php the_content(); ?>
</div><!-- .entry-content -->
</article><!-- #post -->

<?php endwhile; ?>
                
        </div>
<div style="display:block;"></div> 

	</main><!-- .content -->

</div><!-- .wrapper -->
<?php get_footer(); ?>





































  
