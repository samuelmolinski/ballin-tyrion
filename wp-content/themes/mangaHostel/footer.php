				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
						                		
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		
	    <script>
	      function initialize() {
	        var myLatlng = new google.maps.LatLng(-22.912643,-43.182015);
	        var mapOptions = {
	          zoom: 17,
	          center: myLatlng,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

	        var image = new google.maps.MarkerImage(
	          '<?php bloginfo('template_url') ?>/library/images/marker-images/image.png',
	          new google.maps.Size(103,140),
	          new google.maps.Point(0,0),
	          new google.maps.Point(52,140)
	        );

	        var shadow = new google.maps.MarkerImage(
	          '<?php bloginfo('template_url') ?>/library/images/marker-images/shadow.png',
	          new google.maps.Size(175,140),
	          new google.maps.Point(0,0),
	          new google.maps.Point(52,140)
	        );

	        var shape = {
	          coord: [96,1,98,2,99,3,100,4,100,5,100,6,101,7,101,8,101,9,101,10,101,11,101,12,101,13,101,14,101,15,101,16,101,17,101,18,101,19,101,20,101,21,101,22,101,23,101,24,101,25,101,26,101,27,101,28,101,29,101,30,101,31,101,32,101,33,101,34,101,35,101,36,101,37,101,38,101,39,101,40,101,41,101,42,101,43,101,44,101,45,101,46,101,47,101,48,101,49,101,50,101,51,101,52,101,53,101,54,101,55,101,56,101,57,101,58,101,59,101,60,101,61,101,62,101,63,101,64,101,65,101,66,101,67,101,68,101,69,101,70,101,71,101,72,101,73,101,74,101,75,101,76,101,77,101,78,101,79,101,80,101,81,101,82,101,83,101,84,101,85,101,86,101,87,101,88,100,89,100,90,100,91,99,92,99,93,98,94,97,95,96,96,95,97,94,98,93,99,92,100,91,101,90,102,89,103,88,104,87,105,86,106,85,107,84,108,83,109,82,110,81,111,80,112,79,113,78,114,77,115,76,116,75,117,74,118,73,119,72,120,71,121,70,122,69,123,68,124,67,125,66,126,65,127,64,128,63,129,62,130,61,131,60,132,59,133,58,134,57,135,56,136,45,136,44,135,43,134,42,133,41,132,40,131,39,130,38,129,37,128,36,127,35,126,34,125,33,124,32,123,31,122,30,121,29,120,28,119,27,118,26,117,25,116,24,115,23,114,22,113,21,112,20,111,19,110,18,109,17,108,16,107,15,106,14,105,13,104,12,103,11,102,10,101,9,100,8,99,7,98,6,97,5,96,4,95,3,94,2,93,2,92,1,91,1,90,1,89,0,88,0,87,0,86,0,85,0,84,0,83,0,82,0,81,0,80,0,79,0,78,0,77,0,76,0,75,0,74,0,73,0,72,0,71,0,70,0,69,0,68,0,67,0,66,0,65,0,64,0,63,0,62,0,61,0,60,0,59,0,58,0,57,0,56,0,55,0,54,0,53,0,52,0,51,0,50,0,49,0,48,0,47,0,46,0,45,0,44,0,43,0,42,0,41,0,40,0,39,0,38,0,37,0,36,0,35,0,34,0,33,0,32,0,31,0,30,0,29,0,28,0,27,0,26,0,25,0,24,0,23,0,22,0,21,0,20,0,19,0,18,0,17,0,16,0,15,0,14,0,13,0,12,0,11,0,10,0,9,0,8,0,7,1,6,1,5,1,4,2,3,3,2,5,1,96,1],
	          type: 'poly'
	        };

	        var marker = new google.maps.Marker({
	          draggable: false,
	          raiseOnDrag: false,
	          icon: image,
	          shadow: shadow,
	          shape: shape,
	          map: map,
	          position: myLatlng
	        });
	      }
	    </script>

	  <script type="text/javascript">
	    jQuery(window).load(function(){
	    	initPage();
			jQuery('.flexslider.s0').addClass('current');
		    jQuery('.flexslider').flexslider({
		        animation: "slide",
		        start: function(slider){
		        	jQuery('body').removeClass('loading');

		        	var slide = jQuery(slider.slides[slider.currentSlide]);
		        	//log('slider.currentSlide',slider.currentSlide, "link", window.location.origin+window.location.pathname+"#gallery="+jQuery(slider).attr('rel')+"&slide="+slider.currentSlide);

		        	if(slide.parents('.current').length > 0) {
			        	var photoDesc = slide.find('.data .desc');
			        	var photoTitle = slide.find('.data .title');
		        		//log(slide);
		        		//fbf_click(url, picture, description, caption, redirect) 
		        		var location = window.location.origin+window.location.pathname;
		        		var imgSrc = slide.find('.data .src').text();
		        		var fotoDesc = photoDesc.text();
		        		var fotoTitle = photoTitle.text();

		        		//log(location, imgSrc, fotoDesc, fotoTitle);

		        		var fbf_click = 'fbf_click("'+location+'","'+imgSrc+'","'+fotoDesc+'","'+fotoTitle+'","http://www.mangahostelrio.com/autoclose.html");';
		        		var fbs_click = 'fbs_click("'+window.location.origin+window.location.pathname+"#gallery="+jQuery(slider).attr('rel')+"&slide="+slider.currentSlide+'");'
		        		jQuery('.description .wrapper, .gDescription .wrapper').text(photoDesc.text());

		        		jQuery('.descriptionWrapper .facebookLink a').attr('onclick', fbf_click);
		        		//jQuery('.descriptionWrapper .facebookLink a').attr('onclick', fbs_click);
		        		//jQuery('.descriptionWrapper .facebookLink a').attr('onclick','fbs_click("'+window.location.origin+window.location.pathname+"#gallery="+jQuery(slider).attr('rel')+"&slide="+slider.currentSlide+'");');
		        		jQuery('.sliderTitle').text(photoTitle.text());
		        	}
		        },
		        before: function(slider){
		        	var slide = jQuery(slider.slides[slider.currentSlide]);

		        	if(slide.parents('.current').length > 0) {
		        		jQuery('.description .wrapper, .gDescription .wrapper').animate({
							    opacity: 0,
							}, 300, function() {
						});
		        		jQuery('.sliderTitle').animate({
							    opacity: 0,
							}, 300, function() {
						});
		        	}	
		        },
		        after: function (slider) {	        	
		        	var slide = jQuery(slider.slides[slider.currentSlide]);
		        	//log('slider.currentSlide',slider.currentSlide, "link", window.location.origin+window.location.pathname+"#gallery="+jQuery(slider).attr('rel')+"&slide="+slider.currentSlide);

		        	if(slide.parents('.current').length > 0) {
			        	var photoDesc = slide.find('.data .desc');
			        	var photoTitle = slide.find('.data .title');
		        		//log(slide);

		        		
		        		var location = window.location.origin + window.location.pathname;
		        		var imgSrc = slide.find('.data .src').text();
		        		var fotoDesc = photoDesc.text();
		        		var fotoTitle = photoTitle.text();

		        		//log(location, imgSrc, fotoDesc, fotoTitle);

		        		var fbf_click = 'fbf_click("'+location+'","'+imgSrc+'","'+fotoDesc+'","'+fotoTitle+'","http://www.mangahostelrio.com/autoclose.html");';
		        		var fbs_click = 'fbs_click("'+window.location.origin+window.location.pathname+"#gallery="+jQuery(slider).attr('rel')+"&slide="+slider.currentSlide+'");'
		        		jQuery('.description .wrapper, .gDescription .wrapper').text(photoDesc.text());

		        		jQuery('.descriptionWrapper .facebookLink a').attr('onclick', fbf_click);
		        		//jQuery('.descriptionWrapper .facebookLink a').attr('onclick', fbs_click);
		        		//jQuery('.descriptionWrapper .facebookLink a').attr('onclick','fbs_click("'+window.location.origin+window.location.pathname+"#gallery="+jQuery(slider).attr('rel')+"&slide="+slider.currentSlide+'");');

						jQuery('.description .wrapper, .gDescription .wrapper').text(photoDesc.text()).animate({ opacity: 1,},300, function(){});
						jQuery('.descriptionWrapper .facebookLink a').attr('onclick', fbf_click);
		        		jQuery('.sliderTitle').text(photoTitle.text()).animate({ opacity: 1,},300, function(){});

		        	}	
		        }
		    });
			jQuery('.album-h').click(function(){
				jQuery('.album-h').removeClass('cur');
				jQuery(this).addClass('cur');

				var gID = jQuery(this).attr('rel');
				log('clicked: ', gID);
				jQuery('.flexslider.current').removeClass('current');
				jQuery('.flexslider.g'+gID).addClass('current');

				jQuery('.flexslider.g'+gID).data('flexslider').resize();

	        	//var slide = jQuery(slider.slides[slider.currentSlide]);
	        	var slide = jQuery('.flexslider.g'+gID+' .flex-active-slide');

	        	var photoDesc = slide.find('.data .desc');
	        	var photoTitle = slide.find('.data .title');
        		//log(slide);
        		jQuery('.description .wrapper, .gDescription .wrapper').text(photoDesc.text());
        		jQuery('.descriptionWrapper .facebookLink a').attr('onclick','fbs_click("'+window.location.origin+window.location.pathname+"#gallery="+jQuery('.flexslider.current').attr('rel')+"&slide="+jQuery('.flexslider.current').currentSlide+'");');
		        jQuery('.sliderTitle').text(photoTitle.text());
			});

			var count = jQuery('.albums.scrollable .items div').length;
			jQuery('.albums.scrollable .items').css({'width':count*130});

			jQuery('.albums-next').click(function(){
				//log('.albums-next');

				var scrollable = jQuery('.albums.scrollable');
				var items = jQuery('.albums.scrollable .items');

				itemWidth = items.width();
				scrollableWidth = scrollable.width();
				//log("itemWidth", itemWidth);
				//log("scrollableWidth", scrollableWidth);

				ml = parseInt(items.css("margin-left").replace("px", ""));
				//log(itemWidth-scrollableWidth+ml);

				if((items.width()>scrollable.width())&&(0 < itemWidth-scrollableWidth+ml)) {
					ml = ml-130;
					//log('ml', ml);

					items.animate({'margin-left': ml}, 200);
				}
				return false;
			});

			jQuery('.albums-prev').click(function(){
				//log('.albums-prev');

				var scrollable = jQuery('.albums.scrollable');
				var items = jQuery('.albums.scrollable .items');
				itemWidth = items.width();
				scrollableWidth = scrollable.width();
				//log("itemWidth", itemWidth);
				//log("scrollableWidth", scrollableWidth);

				ml = parseInt(items.css("margin-left").replace("px", ""));

				if((items.width()>scrollable.width())&&(ml<0)) {

					//log('ml b:', ml);
					ml = ml+130;
					if (ml > 0) {
						ml = 0; 
					}
					//log('ml a:', ml);

					items.animate({'margin-left': ml}, 200);
				}
				return false;
			}); 

			jQuery(window).resize(function(){
				//log('event: resize');

				jQuery('.descriptionWrapper .description').width(jQuery('.descriptionWrapper').width()- 70);
				jQuery('.cp_acomodacaos').each(function() {
					//var gallery = jQuery('.cp_acomodacaos .gallery').width();
					var gallery = 700;
					//var cp_acomadacaos = jQuery('.cp_acomodacaos').width();
					var cp_acomadacaos = jQuery('#main').width();

					//var desc = inner_content-galleryW-inner_content*.035;
					log('inner_content', inner_content);
					log('cp_acomadacaos', cp_acomadacaos);
					log('galleryWidth', galleryWidth);

					var galleryWidth = cp_acomadacaos-gallery-cp_acomadacaos*.035;
					log('cp_acomadacaos', cp_acomadacaos, 'gallery', gallery, 'cp_acomadacaos-gallery', galleryWidth);
					if(galleryWidth > 240){
						//jQuery('.description').width(galleryWidth);
						jQuery('.gDescription').css({'width': galleryWidth+'px'});
					} else {
						jQuery('.gDescription .hDescription').css({'width': 'auto'});
					}
					

				});

				var galleryW = 700;
				var inner_content = jQuery('#inner-content').width();
				var desc = inner_content-galleryW-inner_content*.035;
				log(desc);

				if(desc > 240) {
					jQuery('article>.description, #main.description').css({'width': desc+'px'});
				} else {
					jQuery('article>.description, #main.description').css({'width': 'auto'});
				}

				if(desc > 240) {
					jQuery('.hDescription').css({'width': desc+'px'});
				} else {
					jQuery('.hDescription').css({'width': 'auto'});
				}

					
				if(jQuery('#inner-content').width() <1000) {
					jQuery('#main.sixcol').addClass('fix700');
					jQuery('.gallery.sixcol').addClass('fix700');
					jQuery('.cap.capright').addClass('no-bg');
					jQuery('.cap.capleft').addClass('no-bg');
					jQuery('.cap.capleft').addClass('no-bg');
					jQuery('.featured2').css({'margin-right;':'20px'});
				} else {
					jQuery('#main.sixcol').removeClass('fix700');
					jQuery('.gallery.sixcol').removeClass('fix700');
					jQuery('.cap.capright').removeClass('no-bg');
					jQuery('.cap.capleft').removeClass('no-bg');
					jQuery('.featured2').css({'margin-right;':'2.762430939%'});
				}
			});

			
	    });
		function fbs_click(u, p) {
			u = encodeURIComponent(u);
			t = encodeURIComponent(document.title);
			if (p==null) {	p='';}
			window.open('http://www.facebook.com/sharer.php?u=' + u + '&t=' + t +' : '+ p, 'Facebook Sharer', 'toolbar=0,status=0,width=650,height=460');
			return false;
		}

		function fbf_click(url, picture, caption, description, redirect){
			/*
				https://www.facebook.com/dialog/feed?
				app_id=458358780877780&
				link=https://developers.facebook.com/docs/reference/dialogs/&
				picture=http://fbrell.com/f8.jpg&
				name=Facebook%20Dialogs&
				caption=Reference%20Documentation&
				description=Using%20Dialogs%20to%20interact%20with%20users.&
				redirect_uri=https://mighty-lowlands-6381.herokuapp.com/ 
			*/

			//url = encodeURIComponent(url);
					  //https://www.facebook.com/dialog/feed?app_id=329266100515781&link=http://mangahostelrio.com/galeras/&picture=http://farm9.static.flickr.com/8329/8367528457_ae0825c80b_b.jpg&caption=O%20come%C3%A7o&description=Participe%20desta%20homenagem%20do%20jornal%20O%20Globo%20a%20S%C3%A3o%20Sebasti%C3%A3o%20e%20a%20todos%20os%20protetores%20do%20Rio%20de%20Janeiro.&redirect_uri=http://www.mangahostelrio.com/autoclose.html
			var link = 'https://www.facebook.com/dialog/feed?app_id=329266100515781&link=' + url +'&picture='+ picture + '&caption='+ encodeURIComponent(caption) + '&description=' + encodeURIComponent(description) +'&redirect_uri='+ redirect;
			
			//var link = 'https://www.facebook.com/dialog/feed?app_id=329266100515781&link=' + url + '&caption='+ encodeURIComponent(caption) +'&picture='+ encodeURIComponent(picture) +'&description='+ encodeURIComponent(description) +'&redirect_uri='+ encodeURIComponent(redirect);
			//https://www.facebook.com/dialog/feed?app_id=329266100515781&link=http%3A%2F%2Fmangahostelrio.com%2Fgaleras%2F&caption=O%20come%C3%A7o&picture=http%3A%2F%2Fmangahostelrio.com%2Fwp-content%2Fthemes%2FmangaHostel%2Fm_toolbox%2Ftimthumb%2Ftimthumb.php%3Fsrc%3Dhttp%3A%2F%2Ffarm9.static.flickr.com%2F8468%2F8368592670_b59c6e9220_b.jpg%26w%3D700%26h%3D450%26zc%3D1&description=%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20&redirect=http%3A%2F%2Fwww.mangahostelrio.com%2Fautoclose.html
			window.open(link, 'Facebook Sharer', 'toolbar=0,status=0,width=650,height=460');
			return false;
			//https://www.facebook.com/dialog/feed?app_id=329266100515781&link=http://mangahostelrio.com/galeras/&picture=http://farm9.static.flickr.com/8329/8367528457_ae0825c80b_b.jpg&caption=O%20come%C3%A7o&redirect_uri=http://www.mangahostelrio.com/autoclose.html
			//https://www.facebook.com/dialog/feed?app_id=329266100515781&link=http://mangahostelrio.com/galeras/&picture=http://farm9.static.flickr.com/8468/8368592670_b59c6e9220_b.jpg&caption=O%20come%C3%A7o&redirect_uri=http://www.mangahostelrio.com/autoclose.html
		}
		function twt_click(u, p) {
			u = encodeURIComponent(u);
			t = encodeURIComponent(document.title);
			if (p==null) {	p='';}
			window.open('http://twitter.com/home?status=Reading:' + t + ' ' + u +' : '+ p, 'Twitter sharer', 'toolbar=0,status=0,width=650,height=460');
			return false;
		}

		function del_click(u, p) {
			u = encodeURIComponent(u);
			t = encodeURIComponent(document.title);
			if (p==null) {	p='';}
			window.open('http://del.icio.us/post?url=' + u + '&title=' + t + p, 'Delicious Sharer', 'toolbar=0,status=0,width=650,height=460');
			return false;
		}

		function dig_click(u, p) {
			u = encodeURIComponent(u);
			t = encodeURIComponent(document.title);
			if (p==null) {	p='';}
			window.open('http://digg.com/submit?phase=2&amp;amp;url=' + u + '&title=' + t + p, 'sharer', 'toolbar=0,status=0,width=650,height=460');
			return false;
		}

		function stu_click(u, p) {
			u = encodeURIComponent(u);
			t = encodeURIComponent(document.title);
			if (p==null) {	p='';}
			window.open('http://www.stumbleupon.com/submit?url=' + u + '&title=' + t + p, 'sharer', 'toolbar=0,status=0,width=650,height=460');
			return false;
		}
		function initPage() {
			//init responsive design in pages.
			var galleryW = 700;
			var cp_acomadacaosW = jQuery('#main').width();
			var galleryWidth = cp_acomadacaosW-galleryW-cp_acomadacaosW*.035;
			var inner_content = jQuery('#inner-content').width();
			var desc = inner_content-galleryW-inner_content*.035;

				log('galleryW', galleryW);
				log('cp_acomadacaosW', cp_acomadacaosW);
				log('galleryWidth', galleryWidth);
				log('inner_content', inner_content);
				log('desc', desc);
				log('inner_content-galleryW', inner_content-galleryW);
				log('inner_content*.035', inner_content*.035);

			var gallery = getHashByName('gallery');
			var slide = getHashByName('slide');
			log('gallery',gallery, jQuery('.album-h[rel='+gallery+']'));


			jQuery('.album-h[rel='+gallery+']').trigger('click').addClass('cur');
			log("jQuery('.album-h[rel='+gallery+']')", jQuery('.album-h[rel='+gallery+']'));

			jQuery('.flexslider.current').flexslider(slide);
			jQuery('.descriptionWrapper .description').width(jQuery('.descriptionWrapper').width()- 70);

			if(galleryWidth > 240) {
				jQuery('.gDescription').css({'width': galleryWidth+'px'});
			} else {
				jQuery('.gDescription').css({'width': 'auto'});
			}

			if(desc > 240) {
				jQuery('.hDescription').css({'width': desc+'px'});
			} else {
				jQuery('.hDescription').css({'width': 'auto'});
			}

			if(desc > 240) {
				jQuery('article>.description, #main.description').css({'width': desc+'px'});
			} else {
				jQuery('article>.description, #main.description').css({'width': 'auto'});
			}

			if(jQuery('#inner-content').width() <1000) {
				jQuery('#main.sixcol').addClass('fix700');
				jQuery('.gallery.sixcol').addClass('fix700');
				jQuery('.cap.capleft').addClass('no-bg');
				jQuery('.cap.capright').addClass('no-bg');
				jQuery('.featured2').css({'margin-right;':'20px'});
			} else {
				jQuery('#main.sixcol').removeClass('fix700');
				jQuery('.gallery.sixcol').removeClass('fix700');
				jQuery('.cap.capleft').removeClass('no-bg');
				jQuery('.cap.capright').removeClass('no-bg');
				jQuery('.featured2').css({'margin-right;':'2.762430939%'});
			}
		}


		function getEventUrl(pid){
			var link = '';
			if(''==window.location.search){
				link = window.location.href + '?pid=' + pid;
			} else {
				link = window.location.href + '&pid=' + pid;
			}
			return link;
		}

		function getHashByName(name) {
		  name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		  var regexS = "[\\?&#]" + name + "=([^&#]*)";
		  var regex = new RegExp(regexS);
		  var results = regex.exec(window.location.hash);
		  //log('getHashByName',results);
		  if(results == null)
		    return "";
		  else
		    return decodeURIComponent(results[1].replace(/\+/g, " "));
		}
	  </script>
	</body>

</html> <!-- end page. what a ride! -->