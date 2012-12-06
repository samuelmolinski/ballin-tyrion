<?php
/*
Template Name: Hostel
*/
?>

<?php get_header(); ?>
					
				    <div id="main" class="tier first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h1 class="page-title">Bem vindo ao Rio.<br />Bem vindo ao Manga Hostel.</h1>

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
				    <div class="gallery tier">
				    	<ul id="slider">
							<?php
						global $mb_page_slider;
						$mb_page_slider->the_meta();
						$meta = $mb_page_slider->meta;
							//d($meta);
						$imgs = $mb_page_slider->meta['docs'];
							//d($imgs);
						if($imgs) { ?>
							<?php 	foreach ($imgs as $img) { ?>
								<li>
									<?php the_crop_image($img['imgurl'], '&amp;w=785&amp;h=460&amp;zc=1',785, 460); ?>
									<div class="bar"></div>
									<div class="description"><?php the_custom_excerpt(160, $img['title']) ?></div>
								</li>
							<?php } ?>
						</ul>
						<?php } else {
								//if no slider, what do we do ?!
								echo "<h2>OMG?!</h2";
							}
						?>
						</ul>
				    </div>
<?php get_footer(); ?>