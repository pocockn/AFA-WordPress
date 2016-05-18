<?php 

/* Policies */

function policies_register() {
register_post_type( 'services',
    array(
        'labels'                => array(
	    'name'                  => 'Services',
	    'singular_name'         => 'policy',
	    'add_new'               => 'New policy',
	    'add_new_item'          => 'New policy',
	    'edit_item'             => 'Edit policy',
	    'new_item'              => 'Add policy',
	    'view_item'             => 'View policy',
	    'search_items'          => 'Search policies',
	    'not_found'             => 'No policies found',
	    'not_found_in_trash'    => 'No policies found in trash',
            ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'query_var'             => true,
    	'permalink_epmask'      => true,
        'menu_position'         => 4,
        'show_in_menu'          => true,
        'supports' 				=> array( 'title', 'editor',),
        'rewrite'               => array( 'slug' => 'policies', 'with_front' => false ),
        'has_archive'           => true
    )
);
};
add_action('init', 'policies_register');


/* procedures */

function procedures_register() {
register_post_type( 'clients',
    array(
        'labels'                => array(
	    'name'                  => 'Clients',
	    'singular_name'         => 'procedure',
	    'add_new'               => 'New procedure',
	    'add_new_item'          => 'New procedure',
	    'edit_item'             => 'Edit procedure',
	    'new_item'              => 'Add procedure',
	    'view_item'             => 'View procedure',
	    'search_items'          => 'Search procedures',
	    'not_found'             => 'No procedures found',
	    'not_found_in_trash'    => 'No procedures found in trash',
            ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'query_var'             => true,
    	'permalink_epmask'      => true,
        'menu_position'         => 5,
        'show_in_menu'          => true,
        'supports' 				=> array( 'title', 'editor','thumbnail', 'excerpt' ),
        'rewrite'               => array( 'slug' => 'procedures', 'with_front' => false ),
        'has_archive'           => true
    )
);
};
add_action('init', 'procedures_register');



/* principles */

function principles_register() {
register_post_type( 'development',
    array(
        'labels'                => array(
	    'name'                  => 'Development',
	    'singular_name'         => 'principle',
	    'add_new'               => 'New principle',
	    'add_new_item'          => 'New principle',
	    'edit_item'             => 'Edit principle',
	    'new_item'              => 'Add principle',
	    'view_item'             => 'View principle',
	    'search_items'          => 'Search principles',
	    'not_found'             => 'No principles found',
	    'not_found_in_trash'    => 'No principles found in trash',
            ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'query_var'             => true,
    	'permalink_epmask'      => true,
        'menu_position'         => 5,
        'show_in_menu'          => true,
        'supports' 				=> array( 'title', 'editor','thumbnail', 'excerpt' ),
        'rewrite'               => array( 'slug' => 'principles', 'with_front' => false ),
        'has_archive'           => true
    )
);
};
add_action('init', 'principles_register');

/* training */

function training_register() {
register_post_type( 'sectors',
    array(
        'labels'                => array(
	    'name'                  => 'Training',
	    'singular_name'         => 'Training',
	    'add_new'               => 'Add Training Document',
	    'add_new_item'          => 'New Training Document',
	    'edit_item'             => 'Edit Training Document',
	    'new_item'              => 'Add Training Document',
	    'view_item'             => 'View Training Document',
	    'search_items'          => 'Search Training',
	    'not_found'             => 'No documents found',
	    'not_found_in_trash'    => 'No documents found in trash',
            ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'query_var'             => true,
    	'permalink_epmask'      => true,
        'menu_position'         => 5,
        'show_in_menu'          => true,
        'supports' 				=> array( 'title', 'editor','thumbnail', 'excerpt' ),
        'rewrite'               => array( 'slug' => 'training', 'with_front' => false ),
        'taxonomies' => array('category', 'type'),
        'has_archive'           => true
    )
);
};
add_action('init', 'training_register');




 add_action( 'init', 'create_business_tax' );


 function create_business_tax() {
 	register_taxonomy(
 		'clientType',
 		array ('clients','procedures','post'),
 		array(
 			'label' => __( 'Business and Functions' ),
 			'rewrite' => array( 'slug' => 'business' ),
 			'hierarchical' => true,
 		)
 	);

 	}

// add_action( 'init', 'create_geography_tax' );

// function create_geography_tax() {
// 	register_taxonomy(
// 		'geography',
// 		array ('policies','procedures','post'),
// 		array(
// 			'label' => __( 'Geography' ),
// 			'rewrite' => array( 'slug' => 'geography' ),
// 			'hierarchical' => true,
// 		)
// 	);

// 	}
        
// add_action( 'init', 'create_function_tax' );

// function create_function_tax() {
// 	register_taxonomy(
// 		'function',
// 		array ('policies','procedures', 'post'),
// 		array(
// 			'label' => __( 'Business Activity' ),
// 			'rewrite' => array( 'slug' => 'function' ),
// 			'hierarchical' => true,
// 		)
// 	);

// 	}

        
// function reg_tag() {
//          register_taxonomy_for_object_type('post_tag', 'procedures');
//          register_taxonomy_for_object_type('post_tag', 'policies');

// }
// add_action('init', 'reg_tag');


?>
