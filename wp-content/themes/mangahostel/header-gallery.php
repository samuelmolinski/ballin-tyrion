<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">

		<?php 
    		$arr = getFeaturedList();
    		$count = 0;
    		
    		//d($fotos); 
    		if(isset($_GET['slide']) && isset($_GET['gallery'])){
    			$slide = $_GET['slide'];
    			$fotos = getPhotos($_GET['gallery']));
				$img = $fotos[$slide]['url'];
    		} elseif (isset($_GET['gallery'])) {
    			$fotos = getPhotos($_GET['gallery']);
				$img = $fotos[0]['url'];
    		} else {
    			$img = get_bloginfo('template_url'). "/library/images/logo-main.png";
    		}
    	?>

		<meta property="og:url" content="<?php echo currentURI(); ?>"/>
		<meta property="og:image" content="<?php echo $img; ?>"/>
		<meta property="og:title" content="<?php echo $p->post_title; ?>"/>
		<meta property="og:site_name" content="Manga Hostel"/>
		<meta property="og:type" content="website"/>
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<!-- <meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
   		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
   		<!-- <script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script> -->
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-37262742-1']);
		  _gaq.push(['_setDomainName', 'mangahostelrio.com']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<?php get_sidebar(); ?>
			
			<div id="content" class="wrap">

				<header class="header" role="banner">
				
					<div id="inner-header" class="wrap clearfix">							
						
						<nav role="navigation" class="clearfix">
							<span class="menucap mcleft"></span><span class="menucap mcright"></span>
							<?php bones_main_nav(); ?>
							<?php bones_main_sub_nav(); ?>
						</nav>
					
					</div> <!-- end #inner-header -->
				
				</header> <!-- end header -->

				<div id="inner-content" class="clearfix">
					<?php //d(get_bloginfo("language")); ?>
    