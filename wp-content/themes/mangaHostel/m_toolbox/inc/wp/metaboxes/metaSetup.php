<?php

require_once('MetaBox.php');
require_once('MediaAccess.php');


$wpalchemy_media_access = new WPAlchemy_MediaAccess();

// global styles for the meta boxes
if (is_admin()) wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/library/css/metaboxes.css');

//default required for m_metabox.php
//featured image is seperated to make it easier to sort the query results
$mb_destaque = new WPAlchemy_MetaBox(array
(
	'id' => 'destaque-customMeta',
	'title' => 'Destaque',
	'types' => array('post', 'page'), // added only for pages and to custom post type "events"
	'context' => 'side', // defaults to "normal"
	'priority' => 'high', // defaults to "high"
	'template' => METAPATH . 'meta/destaque-meta.php'
));

$mb_parceiros = new WPAlchemy_MetaBox(array
(
	'id' => 'parceiros-customMeta',
	'title' => 'URL do Parceiro',
	'types' => array('cp_parceiros'), // added only for pages and to custom post type "events"
	'context' => 'normal', // defaults to "normal"
	'priority' => 'high', // defaults to "high"
	'template' => METAPATH . 'meta/parceiros-meta.php'
));

$mb_dicas = new WPAlchemy_MetaBox(array
(
	'id' => 'dicas-customMeta',
	'title' => 'URL do Parceiro',
	'types' => array('cp_dicas'), // added only for pages and to custom post type "events"
	'context' => 'normal', // defaults to "normal"
	'priority' => 'high', // defaults to "high"
	'template' => METAPATH . 'meta/dicas-meta.php'
));

$mb_page_slider = new WPAlchemy_MetaBox(array
(
	'id' => 'slider_meta',
	'title' => 'Page Slider Settings',
	'types' => array('page', 'cp_acomodacaos'), // added only for ablums
	'context' => 'normal', // same as above, defaults to "normal"
	'priority' => 'high', // same as above, defaults to "high"
	'template' => METAPATH . 'meta/slider-meta.php'
));

/* eof */