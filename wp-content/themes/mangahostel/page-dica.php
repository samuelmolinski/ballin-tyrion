<?php
/*
Template Name: Dicas
*/

$args = array(
		'post_type' => 'cp_dicas',
		'post_status' => 'publish',
		'order'=> 'ASC',
	);

$query = new WP_Query($args);
$count = 1;

get_header(); ?>
					<div id="main" class="first clearfix" role="main">
					

					    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 

					    	if(0 == $count% 2) {
					    		$postClasses = array('event-post', 'even');
					    	} else {
					    		$postClasses = array('event-post', 'odd');
					    	}
					    	

					    	global $mb_dicas;
							$mb_dicas->the_meta();
							$meta = $mb_dicas->meta;

				    		$img = get_post_image_src();			    	
				    		if('' == $img) {
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
											<?php if(isset($meta["quando"])){ ?><strong>Quando: </strong><?php echo $meta["quando"] ?><br><?php } ?>
											<?php if(isset($meta["horario"])){ ?><strong>Horário: </strong><?php echo $meta["horario"] ?><br><?php } ?>
											<?php if(isset($meta["aonde"])){ ?><strong>Local: </strong><?php echo $meta["aonde"] ?><br><?php } ?>
											<?php if(isset($meta["mapa"])){ ?><strong>Mapa: </strong><a href="<?php echo $meta["mapa"] ?>" target="_blank">Clique aqui</a><?php } ?>
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
					
					    <?php $count++; endwhile; echo "</div>\n"; ?>	
						
					
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

					    <?php if(function_exists('wp_paginate')) {
						    wp_paginate('range=4&anchor=2&title=');
						} 
						
					?>
			
				    </div> <!-- end #main -->
<?php get_footer(); ?>