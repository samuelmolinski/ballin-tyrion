<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/


// let's create the function for the custom type
function cp_dicas() { 
	// creating (registering) the custom type 
	register_post_type( 'cp_dicas', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Dicas', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Dica', 'bonestheme'), /* This is the individual type */
			'all_items' => __('Todos Dicas', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Adicionar Novo', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Adicionar Novo Dicas', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Editar', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Editar Dicas', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('Tipo de Novo Dicas', 'bonestheme'), /* New Display Title */
			'view_item' => __('View Dicas', 'bonestheme'), /* View Display Title */
			'search_items' => __('Busca Dicas', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nada foi encontrado no banco de dados.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nada foi encontrado no lixo.', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example custom post type', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'dicas', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'cp_dicas', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'cp_dicas');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'cp_dicas');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'cp_dicas');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'cp_dicas_cat', 
    	array('cp_dicas'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array( 
    			'name' => __( 'Categorias de Dicas', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Categorias de Dicas', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Bucsa Categoria de Dicas', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'Tudo Categorias', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Categoria Pai', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Categoria Pai:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Editar Categoria', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Atualizar Categoria', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Adicionar uma Nova Categoria', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'Nome da Nova Categoria', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'dicas-categorias' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'cp_dicas_tag', 
    	array('cp_dicas'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Tag de Dicas', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Tag de Dicas', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Busca Tags', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'Todos Tags', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Tag Pai', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Tag Pai:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Editar Tag', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Adicionar Novo Tag', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Adicionar Novo Tag', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'Nome da Nova Tag', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */
	

?>