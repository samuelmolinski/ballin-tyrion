<?php
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>
			
				    <div id="main" class="first clearfix" role="main" > 

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						    <section class="entry-content">
							   	<div class="the_content">
							   		<img src="<?php bloginfo("template_url"); ?>/library/images/layout-contato-heading.png" alt="">
							   		<?php the_content(); ?>
							   	</div>
							   	<div class="map_canvas">
							   		<div class="bar2"></div>
							    	<div id="map_canvas" style="width:535px; height:464px;"></div>
							   		<div class="bar"></div>
							   		<div class="address">
							   			<p>R. do Lavradio, 186 - Centro<br />Rio de Janeiro - RJ, 20230-070<br />TEL: +55 21 3852 5742<br />contato@mangahostelrio.com</p>
							   		</div>
							   	</div>
						    </section> <!-- end article section -->
					
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