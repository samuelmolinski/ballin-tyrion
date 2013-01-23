<?php
/*
Template Name: Parceiros
*/

$args = array(
		'post_type' => 'cp_parceiros',
		//'category_name' => 'suite',
		//'category_name' => 'quartos',
		'post_status' => 'publish',
		'order'=> 'ASC',
	);

$query = new WP_Query($args);
$count = 1;
$ct = count($query->posts);

global $mb_parceiros;
$mb_parceiros->the_meta();
//$meta = $mb_parceiros->meta;
	//d($meta);
$imgs = $mb_page_slider->meta['parceirosURL'];

get_header(); ?>
			
				    <div id="main" class="first clearfix" role="main">

					    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 

							$mb_parceiros->the_meta();
							if(isset($mb_parceiros->meta['parceirosURL'])){
								$url = $mb_parceiros->meta['parceirosURL'];
								$websiteurl =  "<a class='website' href='$url' target='_blank'>$url</a>";
							} else {
								$websiteurl =  "";
							}


				    		$img = get_post_image_src();
				    		//d($img);	    	
				    		if('' == $img){
				    			$img = get_bloginfo('template_url'). "/library/images/logo-main.png";
				    		}
					    ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <article id="post-<?php the_ID(); ?>" <?php post_class(array('clearfix', 'parceiros', 'first')); ?> role="article"> 
								<div class="bar2"></div>
								
							    <section class="entry-content clearfix">
							    	<?php
								    	if($img){ ?>
							    			<img src="<?php bloginfo('template_url'); ?>/m_toolbox/timthumb/timthumb.php?src=<?php echo $img; ?>&amp;w=300&amp;zc=0" class="post-img first fourcol" alt="Parceiro 01">
								    	<?php }
							    	?>
								    <h1 class="page-title"><?php the_custom_length(get_the_title(), 32); ?></h1>
								    <?php the_content(); ?>
							    </section> <!-- end article section -->
							    
								<?php echo $websiteurl; ?>
								<div class="bar"></div>
								<?php if($count != $ct) {
									echo '<div class="barsDiv"></div>';
								} ?>
							    
							</article> <!-- end article -->
					
					    </article> <!-- end article -->
					
					    <?php $count++; endwhile; ?>	
					
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