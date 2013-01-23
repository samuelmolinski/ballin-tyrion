<?php
/*
Template Name: Acomodações (quarto EN)
*/

$args = array(
		'post_type' => 'cp_acomodacaos',
		//'category_name' => 'suite',
		'category_name' => 'quartos',
		'post_status' => 'publish',
		'order'=> 'ASC',
	);

$query = new WP_Query($args);

get_header(); ?>
					<div id="main" class="first clearfix acomodacoes" role="main">
						<div class="selectRoom">
							<ul>
								<li class='btn ac5 quarto' >Lapa</li>
								<li class='btn ac6 quarto' >Urca</li>
								<li class='btn ac7 quarto' >Copa</li>
								<li class='btn ac8 lastItem' style="margin-right: 71px;">Itaquá</li>
							</ul>
						</div>
						
						<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<div class="gallery">
								<ul class="foto_slider">
								<?php
									global $mb_page_slider;
									$mb_page_slider->the_meta();
									$meta = $mb_page_slider->meta;
										//d($meta);
									$imgs = $mb_page_slider->meta['docs'];
										//d($imgs);
									if($imgs) { ?>
										<?php 	foreach ($imgs as $img) { ?>
											<li><?php the_crop_image($img['imgurl'], '&amp;w=700&amp;h=400&amp;zc=1',700, 400); ?></li>
										<?php } 
									} else {
											//if no slider, what do we do ?!
											echo "<h2>OMG?!</h2";
										}
								?>
								</ul>
								<div class="bar"></div>
							</div>
							<div class="description">
							    <header class="article-header">
								    <h1 class="page-title"><?php the_title(); ?></h1>
								    <div class="spacer"></div>
							    </header> <!-- end article header -->
						
							    <section class="entry-content">
								    <?php the_custom_excerpt(400); //the_content(); ?>
							    </section> <!-- end article section -->
								<a href="http://mangahostelrio.com/reservar/" class='reserve btn'></a>
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
        						    <p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>

					    <?php if(function_exists('wp_paginate')) {
						    wp_paginate('range=4&anchor=2&title=');
						} ?>
			
				    </div> <!-- end #main -->
<?php get_footer(); ?>