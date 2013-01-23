<?php

	require_once('phpFlickr-3.1/phpFlickr.php');
	//Insert your API key
	/*define('flickr_key', "0245f1401ed0995a6b5e4561725a8159");
	define('username', "cabanacriacao");
	define('ownerName', "Cabana Criação");*/
	define('flickr_key', "0245f1401ed0995a6b5e4561725a8159");
	define('username', "mangahostel");
	define('ownerName', "Manga Hostel");
	
	function getPhotoSets(){
		$f = new phpFlickr(flickr_key);
		//$f->enableCache("fs", "cache");
		$result = $f->people_findByUsername(ownerName);
		$nsid = $result["id"];

		/*$photos = $f->people_getPublicPhotos($nsid, NULL, NULL, 21, $page);
		// Some bits for paging
		$pages = $photos['photos']['pages']; // returns total number of pages
		$total = $photos['photos']['total']; // returns how many photos there are in total*/

		$sets = $f->photosets_getList($nsid);
		return $sets['photoset'];
	}
	function getFeaturedList() {		
		$f = new phpFlickr(flickr_key);
		$sets = getPhotoSets();
		$list = array();
		foreach ($sets as $key => $gallery) {
			$list[] = $gallery['id'];
		}
		return array('list'=>$list, 'sets'=>$sets);
	}

	function getFeatured($sets = null) {
		$f = new phpFlickr(flickr_key);
		$count = 1;
		$display =  array();

		if(null == $sets){
			$sets = getPhotoSets();
		}

		foreach ($sets as $k => $gallery) {
			//d($gallery);
			$photo = $f->photos_getInfo($gallery['primary']);
			$photo = $photo['photo'];
			//d($photo);
			$url = $f->buildPhotoURL($photo, "small");
			//d($url);

			if(0 == $count % 2) {
				$display[] = "<div class='album-h' rel='{$gallery['id']}'><div class='mask'></div><img class='fg-img even' src='".get_crop_image($url, "&amp;w=125&amp;h=125&amp;zc=1")."' title='{$photo['title']}' rel='{$gallery['id']}' /></div>";
			} else {
				$display[] = "<div class='album-h' rel='{$gallery['id']}'><div class='mask'></div><img class='fg-img odd' src='".get_crop_image($url, "&amp;w=125&amp;h=125&amp;zc=1")."' title='{$photo['title']}' rel='{$gallery['id']}' /></div>";
			}
			
			$count++;
		}
		return $display;
	}

	function getPhotos($photoSetId){
		$f = new phpFlickr(flickr_key);
		$set = $f->photosets_getPhotos($photoSetId);
		//d($set);
		$fotos = array();
		foreach ($set['photoset']['photo'] as $k => $photo) {
			//d($photo);
			//d($f->photos_getInfo($photo['id']));
			$info = $f->photos_getInfo($photo['id']);
			$fotos[] = array('url'=>$f->buildPhotoURL($photo, "large"),'photo'=>$info['photo']);
		}
		return $fotos;
	}

	function buildFeatured($limit = 6) {
		$f = new phpFlickr(flickr_key);
		$sets = getPhotoSets();
		$count = 1;

		$display = "<div class='featuredGalleries'>";
		foreach ($sets as $k => $gallery) {
			$photo = $f->photos_getInfo($gallery['primary']);
			$photo = $photo['photo'];
			//d($photo);
			$url = $f->buildPhotoURL($photo, "small");
			//d($url);

        	//echo "<a href=\"photo.php?id=$photo[id]\" title=\"View $photo[title]\">";
	 		// this next line uses buildPhotoURL to construct the location of our image 
	    	//echo "<img alt=\"$photo[title]\" ".
            //"src=\"" . $f->buildPhotoURL($photo, "Square") . "\" width=\"75\" height=\"75\" />";
            //&amp;w=800&amp;h=400&amp;zc=1
			if(0 == $count % 2) {
				$display .= "<a href='".get_bloginfo("siteurl")."/galeras/#gallery={$gallery['id']}'><img class='fg-img even' src='".get_crop_image($url, "&amp;w=125&amp;h=125&amp;zc=1")."' title='{$photo['title']}' rel='{$gallery['id']}' /></a>";
			} else {
				$display .= "<a href='".get_bloginfo("siteurl")."/galeras/#gallery={$gallery['id']}'><img class='fg-img odd' src='".get_crop_image($url, "&amp;w=125&amp;h=125&amp;zc=1")."' title='{$photo['title']}' rel='{$gallery['id']}' /></a>";
			}
				
			if($count>=6){
				break;
			}
			$count++;
		}
		$display .= "</div>";
		echo $display;
	}