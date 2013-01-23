<?php
/*
Template Name: Gallery
*/
set_time_limit(0);


get_header(); ?>
				    <h1 class="sliderTitle"></h1>
					<div class="flickrGallery sixcol first">
				    	<!-- Place somewhere in the <body> of your page -->
						<div class="bar2"></div>
				    	<?php 
				    		$arr = getFeaturedList();
				    		$count = 0;
				    		//d($arr);
				    		foreach ($arr['list'] as $key => $galleryID) {
				    			//$galleryID = $arr['list'][0];
				    			$fotos = getPhotos($galleryID);
				    			
								echo "<div class='flexslider s$count g$galleryID' rel='$galleryID'>";
								echo '<ul class="slides">';
									foreach ($fotos as $key => $f) {
										//d($f);
									   	echo "<li>";
									   	the_crop_image($f['url'], '&amp;w=700&amp;h=450&amp;zc=1');
									   	echo "<span class='data data-$galleryID'>";
						   				echo "<span class='title'>{$f['photo']['title']}</span>";
						   				echo "<span class='desc'>{$f['photo']['description']}</span>";
						   				echo "<span class='src'>{$f['url']}</span>";
									   	echo "</span>";
									   	echo "</li>\n\r";
									}								  
								echo '</ul>';
								echo '</div>';
								$count ++;
				    		}
				    		//d($fotos); 
				    	?>
						<div class="bar"></div>
						<div class="descriptionWrapper">
							<div class="description"><span class='wrapper'></span></div>
							<div class="facebookLink"><a onclick="fbs_click();"></a></div>
						</div>
				    </div>
				    <div id="main" class="sixcol lastitem clearfix album_widget" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">

						    </header> <!-- end article header -->
					
						    <section class="entry-content">
								<div class="bar2"></div>
						    	<div class="albums clearfix scrollable">
						    		<div class="items">
								    <?php 
								    	
								    	$featured = getFeatured($arr['sets']);
								    	$cc = 0;
								    	$total = count($featured);
								    	echo "<div class='triple'>";
								    	foreach ($featured as $k => $image) {
								    		if((0 == $cc % 3)&&($total != $cc)&&(0 != $cc)){
								    			echo "</div><div class='triple'>";
								    		}
								    		echo $image;
								    		$cc++;
								    	}
								    	echo "</div>";
								    	//d($arr);
								    	
								    ?>
							    	</div>
								</div>
								<div class="bar"></div>
								<div class="bar3"></div>
								<a class="albums-next album-nav" href="#">Next</a><a class="albums-prev album-nav" href="#">Previous</a>
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
				    
<?php get_footer(); ?>