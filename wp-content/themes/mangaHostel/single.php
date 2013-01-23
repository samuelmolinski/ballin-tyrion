<?php get_header(); ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="gallery sixcol first">				    	
						<div class="bar2"></div>
				    	<?php 
				    		$img = get_post_image_src();	
					    	if($img){ ?>
				    			<img src="<?php bloginfo('template_url'); ?>/m_toolbox/timthumb/timthumb.php?src=<?php echo $img; ?>&amp;w=700&amp;zc=0" class="post-img first" alt="Parceiro 01">
					    	<?php }
				    	?>
						<div class="bar"></div>
				    </div>
				    <div id="main" class="description sixcol lastitem clearfix" role="main">
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
								<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

							    <div class="bars"></div>

						    </header> <!-- end article header -->
					
						    <section class="entry-content">
							    <?php the_content(); ?>
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
			
							    <p class="clearfix"><?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?></p>
							
						    </footer> <!-- end article footer -->
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					    <?php else : ?>
				    <div id="main" class="tier lastitem clearfix" role="main">
					
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