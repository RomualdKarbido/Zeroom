<?php get_header(); ?>
	<main class="content">
		
       <div style="margin-bottom:70px;">
        
        			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
							

						<?php
						$title = get_the_title(); 
						
						if ( $title  == 'Победители' ) {?>
							<div style="margin:0 auto; height:10px; width:200px; position:relative;"><div class="win_cown3"></div></div>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            
						<?php }else{ ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
							
                        <?php }?>
						


						
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
<?php get_footer(); ?>



