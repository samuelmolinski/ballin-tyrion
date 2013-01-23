<?php
/*
Template Name: Events
*/
if(isset($wp_query->query_vars['pid'])) {
	//post just the single
	get_header('event');	
} else {
	get_header();
}
 ?>
					<div id="main" class="first clearfix" role="main">
					<?php  
						//d($wp_query->query_vars['e_a']); d($wp_query->query_vars['e_m']); d($wp_query->query_vars['e_d']);
						if(isset($wp_query->query_vars['pid'])) {

							$args = array(
								'post_type' => 'post',
								'post_status' => 'publish',
								//'posts_per_page' => -1,
								//'orderby ' => 'title',
								'post__in'=>array($wp_query->query_vars['pid']),
							);
							//inspect($cat);
							$query = new WP_Query($args);

						} elseif(isset($wp_query->query_vars['e_a'])) {
							global $wpdb;

							$sqldate = date('Y-m-d', mktime(0, 0, 0, urldecode($wp_query->query_vars['e_m']), urldecode($wp_query->query_vars['e_d']), urldecode($wp_query->query_vars['e_a'])));
							//d($sqldate);

							$sql = "SELECT *"
							 	. "  FROM `wp_eventscalendar_main`"
							  	. " WHERE `eventStartDate` <= '$sqldate'"
								. "   AND `eventEndDate` >= '$sqldate'"
								. " ORDER BY `eventStartTime`, `eventEndTime`;";
							$results = $wpdb->get_results($sql);

							//d($results);
							$post_array = array();
							foreach ($results as $k => $e) {
								$post_array[] = $e->postID;
							}
							//d($post_array);
							if (!empty($post_array)) {
								$args = array(
									'post_type' => 'post',
									'post_status' => 'publish',
									'category__in' => array(4, 8),
									//'posts_per_page' => -1,
									//'orderby ' => 'title',
									'post__in'=>$post_array,
									'paged' => $paged
								);
							} else {
								$args = array();
							}
							//inspect($cat);
							$query = new WP_Query($args);
							//d($query->posts);
						}

						if($query->post) {
							$count = 0;
							echo "<div class='tierfull clearfix'>\n";
				    	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
				    		if(0 == $count%2){
				    			$postClasses = array('clearfix', 'event-post', 'first');
				    			if(0!=$count) {
								echo "</div>\n";
								echo "<div class='tierfull clearfix'>\n";
				    			}
				    		} else {
				    			$postClasses = array('clearfix', 'event-post');
				    		}	

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
								    <?php the_content(); ?>
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
        						</footer>
        					</article>
					
					    <?php endif; ?>

					    <?php if(function_exists('wp_paginate')) {
						    wp_paginate('range=4&anchor=2&title=');
						} 
							
						} else {

							$args = array(
								'post_type' => 'post',
								'category__in' => array(4, 8),
								//'cat' => '4',
								'post_status' => 'publish',
								//'posts_per_page' => -1,
								//'orderby ' => 'title',
								'paged' => $paged
							);
						
							//inspect($cat);
							$query = new WP_Query($args);
						
						if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); if(0 == $count%2){
				    			$postClasses = array('clearfix', 'event-post', 'first');
				    			if(0!=$count) {
								echo "</div>\n";
								echo "<div class='tierfull clearfix'>\n";
				    			}
				    		} else {
				    			$postClasses = array('clearfix', 'event-post');
				    		}			


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
								    <?php the_content(); ?>

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
        						    <!-- <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1> -->
        						</header>
        					    <section class="entry-content">
        						    <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
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
				    <?php } ?>
<?php get_footer(); ?>