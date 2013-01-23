<?php
/*
Template Name: Home - Inicio
*/

get_header(); 

$removeFeatured = array();
$post_type = array('post', 'page');
$featuredPosts = get_featured_posts($post_type, 1);
foreach ($featuredPosts->posts as $k => $v) {
	$removeFeatured[] = $v->ID;
}
//d($removeFeatured);
//d($featuredPosts);
$a = array(
	'posts_per_page' => 1,
	'post_status' => 'publish',
	'post_type' => $post_type,
	'order' => 'DESC',
	'orderby' => 'modified',
	'post__not_in' => $removeFeatured,
);

$featured = array();
$normalObject = new WP_Query($a);
//d($normalObject->posts);

$featuredPost2 = get_featured_posts($post_type, 1, 'enableFeatured2');
						
global $mb_destaque;
if ($featuredPosts->have_posts()) { while ($featuredPosts->have_posts()) { $featuredPosts->the_post();
	//d($post);
	$category = get_the_category($post->ID);
	$firstCategory = $category[0]->cat_name;
	//d($firstCategory);
	$c = get_the_content();
	//get time
	$c = explode('<!-- time -->', $c);
	$ca = explode('</div>', $c[1]);
	$t = explode('-', $ca[0]);

	//get description
	$ca = explode('<!-- description -->', $c[count($c)-1]);
	//$description = get_custom_length($ca[1], 140);
	if('Eventos' == $firstCategory){
		if(4 == strlen($t[2])){
			$link = get_bloginfo("home").'/Eventos/?e_a='.$t[2].'&e_m='.$t[1].'&e_d='.$t[0];
		} else {
			$link = get_bloginfo("home").'/Eventos/?e_a='.$t[0].'&e_m='.$t[1].'&e_d='.$t[2];
		}
	} elseif('Events' == $firstCategory){
		if(4 == strlen($t[2])){
			$link = get_bloginfo("home").'/Events/?e_a='.$t[2].'&e_m='.$t[1].'&e_d='.$t[0];
		} else {
			$link = get_bloginfo("home").'/Events/?e_a='.$t[0].'&e_m='.$t[1].'&e_d='.$t[2];
		}
	} elseif('Dicas' == $firstCategory) {
		$link = get_bloginfo("home").'/Dicas/';
	} elseif('Tips' == $firstCategory) {
		$link = get_bloginfo("home").'/Tips/';
	} else {
		$link = get_permalink();
	}

	$count = count($ca);
	if($count) {
		$description = get_custom_length($ca[$count-1], 150);
	} else {
		$description = '';
	}
?>
			
				    <div id="main" class="tier first clearfix" role="main">

					<article id="post-<?php the_ID(); ?>" <?php post_class(array('clearfix', 'featured', 'first')); ?> role="article"> 
						<div class="bar2"></div>
						<div class="featureImg"><a href="<?php echo $link; ?>" /><?php the_post_image(700, 400);?></a></div>
						<div class="bar"></div>

					    <section class="entry-content">
					    	<img class="bg" src="<?php bloginfo('template_url'); ?>/library/images/layout-featured-description.png">
					    	<div class="frame">
							    <h1 class="page-title"><a href="<?php echo $link; ?>" /><?php the_title(); ?></a></h1>
							    <?php echo $description; ?>
							    <a href="<?php echo $link; ?>" class="btn mais"></a>
					    	</div>					
					    </section> <!-- end article section -->
					    
					</article> <!-- end article -->
					
					    <?php } } else { //: ?>
					
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
					
					    <?php } //endif; ?>
			
				    </div> <!-- end #main -->
				    <!-- <div class="tier"> -->
<?php
	if ($featuredPost2->have_posts()) { while ($featuredPost2->have_posts()) { $featuredPost2->the_post();
		echo '<div class="featured2 first">';
		//d($post);
		$category = get_the_category($post->ID);
		//d($category[0]->cat_name);
		$c = get_the_content();
		if('Eventos' == $category[0]->cat_name){
			//get time
			$c1 = explode('<!-- time -->', $c);
			$ca = explode('</div>', $c1[1]);
			$t = explode('-', $ca[0]);

			if(4 == strlen($t[2])){
				$link = get_bloginfo("home").'/Eventos/?e_a='.$t[2].'&e_m='.$t[1].'&e_d='.$t[0];
			} else {
				$link = get_bloginfo("home").'/Eventos/?e_a='.$t[0].'&e_m='.$t[1].'&e_d='.$t[2];
			}
		} elseif('Events' == $category[0]->cat_name){
			//get time
			$c1 = explode('<!-- time -->', $c);
			$ca = explode('</div>', $c1[1]);
			$t = explode('-', $ca[0]);

			if(4 == strlen($t[2])){
				$link = get_bloginfo("home").'/Events/?e_a='.$t[2].'&e_m='.$t[1].'&e_d='.$t[0];
			} else {
				$link = get_bloginfo("home").'/Events/?e_a='.$t[0].'&e_m='.$t[1].'&e_d='.$t[2];
			}
		} elseif('Dicas' == $category[0]->cat_name) {
			$link = get_bloginfo("home").'/Dicas/';
		} elseif('Tips' == $category[0]->cat_name) {
			$link = get_bloginfo("home").'/Tips/';
		} else {
			$link = get_permalink();
			$other = true;
		}

		$ca = explode('<!-- description -->', $post->post_content);
		$count = count($ca);
		if($count) {
			$description = get_custom_length($ca[$count-1], 150);
		} else {
			$description = '';
		}
		
?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(array('clearfix', 'featured', 'first')); ?> role="article"> 
								<div class="bar2"></div>
								<div class="featureImg"><a href="<?php echo $link; ?>" /><?php the_post_image(252,252);?></a></div>
								<div class="bar"></div>

							    <section class="entry-content">
							    	<!-- <img class="bg" src="<?php bloginfo('template_url'); ?>/library/images/layout-featured-description2.png"> -->
							    	<div class="frame">
									    <h1 class="page-title"><a href="<?php echo $link; ?>" /><?php the_custom_length(get_the_title(), 32); ?></a></h1>
									    <?php echo $description; ?>
									    <a href="<?php echo $link; ?>" class="btn mais"></a>
							    	</div>
							    </section> <!-- end article section -->
							    
							</article> <!-- end article -->

					    </div><?php } } ?>
					    <div id="galleryEvent_wrapper">
						    <div class="gallery_widget">
						    	<img class="gallery_title" src="<?php bloginfo('template_url'); ?>/library/images/flickr-title-pt.png" />
						    								<div class="bar2"></div>
						    	<?php buildFeatured(); ?>
						    </div>
						    <div class="event_widget">
						    	<?php sidebarEventsCalendar();?>
						    </div>
							<img class="rio_ate_o_caroco" src="<?php bloginfo('template_url'); ?>/library/images/rio_ate_o_caroco.png">
						</div>
				    <!-- </div> -->
<?php get_footer(); ?>