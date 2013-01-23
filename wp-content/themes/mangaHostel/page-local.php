<?php
/*
Template Name: Local
*/
?>

<?php get_header(); ?>
					
				    <div id="main" class="first clearfix" role="main">	

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h1 class="page-title">Até o caroço.</h1>
							    <!-- <p>Perto do centro, centro da diversidade. Do samba ao rock, passando pelo reggae forreado. O preto e branco se misturam e tudo fica colorido e animado.</p> -->
							    <div class="bars"></div>

						    </header> <!-- end article header -->
					
						    <section class="entry-content">
							    <?php the_content(); ?>
							    <div class="bar2"></div>
							    <iframe src="<?php bloginfo('template_url') ?>/4sq.php?url=<?php urlencode(bloginfo('template_url')); ?>" style="width:100%; height:400px;"></iframe>
							    <div class="bar"></div>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
							
						    </footer> <!-- end article footer -->
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					    <?php else : ?>
					
        					<article id="post-not-found" class="hentry clearfix">
        					    <header class="article-header">
        						    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
        						</header>
        					    <section class="entry-content">
        						    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
        						<footer class="article-footer">
        						    <p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
<?php get_footer(); ?>