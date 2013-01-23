<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); 	

					    	$postClasses = array('event-post');

					    	global $mb_dicas;
							$mb_dicas->the_meta();
							$meta = $mb_dicas->meta;

				    		$img = get_post_image_src();			    	
				    		if('' == $img){
				    			$img = get_bloginfo('template_url'). "/library/images/logo-main.png";
				    		}
					    ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class($postClasses); ?> role="article">

					    	<div class="featured-image"><?php the_crop_image($img, '&amp;w=400&amp;h=380&amp;zc=1', ''); ?><div class="bar"></div></div>	
							<div class="cont">
								<header class="article-header">
							
								    <h1 class="page-title"><?php the_title(); ?></h1>

								</header> <!-- end article header -->
						
							    <section class="entry-content">
							    	<div class="details">
										<div class="wrapper-date">
											<div class="bars w100"></div>
										</div>
										<p>
											<?php if($meta["quando"]){ ?><strong>Quando: </strong><?php echo $meta["quando"] ?><br><?php } ?>
											<?php if($meta["horario"]){ ?><strong>Horário: </strong><?php echo $meta["horario"] ?><br><?php } ?>
											<?php if($meta["aonde"]){ ?><strong>Local: </strong><?php echo $meta["aonde"] ?><br><?php } ?>
											<?php if($meta["mapa"]){ ?><strong>Mapa: </strong><a href="<?php echo $meta["mapa"] ?>" target="_blank">Clique aqui</a><?php } ?>
										</p>
									</div>
								    <?php the_custom_excerpt(200); ?>
							    </section> <!-- end article section -->
							
							    <footer class="article-footer socialMediaWraper">
									<a onclick="fbs_click(getEventUrl('<?php echo $post->ID ?>'), '<?php the_title(); ?>')" class='btn fb sm'></a>
									<a onclick="twt_click(getEventUrl('<?php echo $post->ID ?>'), '<?php the_title(); ?>')" class='btn tw sm'></a>
							    </footer> <!-- end article footer -->
							</div>						   
					
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
        						    <p><?php _e("This is the error message in the single-custom_type.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->

<?php get_footer(); ?>
<!-- 
<div id="main" class="first clearfix" role="main">
	<div class="tierfull clearfix">
	    <article id="post-261" class="post-261 post type-post status-publish format-standard hentry category-dicas category-eventos category-sem-categoria clearfix event-post first" role="article">
	    	<div class="featured-image"><img src="http://mangahostelrio.com/wp-content/themes/mangaHostel/m_toolbox/timthumb/timthumb.php?src=http://mangahostelrio.com/wp-content/themes/mangaHostel/library/images/logo-main.png&amp;w=400&amp;h=380&amp;zc=1" class="" alt=""><div class="bar"></div></div>	
			<div class="cont">
				<header class="article-header">
			
				    <h1 class="page-title">Arlindo Cruz + Rogê</h1>

				</header> end article header
		
			    <section class="entry-content">
				    <div class="details">
						<div class="wrapper-date">
						<div class="bars w70"></div>
						<div class="date w30">time30-01-2013</div>
						</div>
						<p><strong>Local: </strong>Circo Voador<br>
						<strong>Mapa: </strong><a href="https://maps.google.com/maps?q=circo+voador&amp;hl=pt-BR&amp;ll=-22.912824,-43.180411&amp;spn=0.014804,0.014248&amp;sll=37.0625,-95.677068&amp;sspn=51.621706,58.359375&amp;hq=circo+voador&amp;t=m&amp;z=16" target="_blanck">Clique aqui</a></p>
					</div>
				</section> end article section
							
			    <footer class="article-footer socialMediaWraper">
					<a onclick="fbs_click(getEventUrl('261'), 'Arlindo Cruz + Rogê')" class="btn fb sm"></a>
					<a onclick="twt_click(getEventUrl('261'), 'Arlindo Cruz + Rogê')" class="btn tw sm"></a>
			    </footer> end article footer
			</div>						   
		</article> end article			
	</div>
	<div class="navigation"></div>				
</div> -->