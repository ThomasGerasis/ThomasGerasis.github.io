<?php
add_action( 'init', 'create_team_taxonomy', 0 );

function create_team_taxonomy() {

// Labels part for the GUI

    $labels = array(
        'name' => _x( 'Team', 'taxonomy general name' ),
        'singular_name' => _x( 'Team', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Teams' ),
        'popular_items' => __( 'Popular Teams' ),
        'all_items' => __( 'All Teams' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Team' ),
        'update_item' => __( 'Update Team' ),
        'add_new_item' => __( 'Add New Team' ),
        'new_item_name' => __( 'New Team Name' ),
        'separate_items_with_commas' => __( 'Separate teams with commas' ),
        'add_or_remove_items' => __( 'Add or remove teams' ),
        'choose_from_most_used' => __( 'Choose from the most used team' ),
        'menu_name' => __( 'Team' ),
    );
// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('Teams', array('players','post'),array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'Teams' ),
    ));

}

function create_tipster_taxonomy() {

// Labels part for the GUI

    $labels = array(
        'name' => _x( 'Tipsters', 'taxonomy general name' ),
        'singular_name' => _x( 'Tipster', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Tipster' ),
        'popular_items' => __( 'Popular Tipsters' ),
        'all_items' => __( 'All Tipsters' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Tipster' ),
        'update_item' => __( 'Update Tipster' ),
        'add_new_item' => __( 'Add New Tipster' ),
        'new_item_name' => __( 'New Tipster Name' ),
        'separate_items_with_commas' => __( 'Separate teams with commas' ),
        'add_or_remove_items' => __( 'Add or remove teams' ),
        'choose_from_most_used' => __( 'Choose from the most used team' ),
        'menu_name' => __( 'Tipsters' ),
    );
// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('tipsters', array('stoiximata'),array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'tipsters' ),
    ));

}
add_action( 'init', 'create_tipster_taxonomy', 0 );

function create_season_taxonomy() {

// Labels part for the GUI

    $labels = array(
        'name' => _x( 'Seasons', 'taxonomy general name' ),
        'singular_name' => _x( 'Season', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Season' ),
        'popular_items' => __( 'Popular Season' ),
        'all_items' => __( 'All Seasons' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Season' ),
        'update_item' => __( 'Update Season' ),
        'add_new_item' => __( 'Add New Season' ),
        'new_item_name' => __( 'New Season Name' ),
        'separate_items_with_commas' => __( 'Separate teams with commas' ),
        'add_or_remove_items' => __( 'Add or remove teams' ),
        'choose_from_most_used' => __( 'Choose from the most used team' ),
        'menu_name' => __( 'Seasons' ),
    );
// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('Seasons', array('stoiximata'),array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'Seasons' ),
    ));

}
add_action( 'init', 'create_season_taxonomy', 0 );



add_action( 'init', 'create_Players_taxonomy', 0 );

function create_Players_taxonomy() {

// Labels part for the GUI

    $labels = array(
        'name' => _x( 'Players', 'taxonomy general name' ),
        'singular_name' => _x( 'Players', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Players' ),
        'popular_items' => __( 'Popular Players' ),
        'all_items' => __( 'All Players' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Players' ),
        'update_item' => __( 'Update Players' ),
        'add_new_item' => __( 'Add New Players' ),
        'new_item_name' => __( 'New Team Players' ),
        'separate_items_with_commas' => __( 'Separate teams with commas' ),
        'add_or_remove_items' => __( 'Add or remove teams' ),
        'choose_from_most_used' => __( 'Choose from the most used team' ),
        'menu_name' => __( 'Players' ),
    );
// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('Players', array('post'),array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'Players' ),
    ));

}



add_action( 'init', 'create_pro_taxonomy', 0 );

function create_pro_taxonomy() {

// Labels part for the GUI

    $labels = array(
        'name' => _x( 'BloggersUsers', 'taxonomy general name' ),
        'singular_name' => _x( 'BloggersUsers', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search BloggersUsers' ),
        'popular_items' => __( 'Popular BloggersUsers' ),
        'all_items' => __( 'All BloggersUsers' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit BloggersUsers' ),
        'update_item' => __( 'Update BloggersUsers' ),
        'add_new_item' => __( 'Add New BloggersUsers' ),
        'new_item_name' => __( 'New Team BloggersUsers' ),
        'separate_items_with_commas' => __( 'Separate teams with commas' ),
        'add_or_remove_items' => __( 'Add or remove BloggersUsers' ),
        'choose_from_most_used' => __( 'Choose from the most used BloggersUsers' ),
        'menu_name' => __( 'Bloggers - Users' ),
    );
// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('bloggerusers', array('post'),array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => 'bloggerusers' ),
    ));

}

function update_custom_terms($post_id) {

    // only update terms if it's a post-type-B post
    if ( 'teams' != get_post_type($post_id)) {
        return;
    }
    // don't create or update terms for system generated posts
    if (get_post_status($post_id) == 'auto-draft') {
        return;
    }
    /*
    * Grab the post title and slug to use as the new
    * or updated term name and slug
    */
    $term_title = get_the_title($post_id);
    $term_slug = get_post( $post_id )->post_name;

    /*
    * Check if a corresponding term already exists by comparing
    * the post ID to all existing term descriptions.
    */
    $existing_terms = get_terms('Teams', array(
            'hide_empty' => false
        )
    );

    foreach($existing_terms as $term) {
        if ($term->description == $post_id) {
            //term already exists, so update it and we're done
            wp_update_term($term->term_id, 'Teams', array(
                    'name' => $term_title,
                    'slug' => $term_slug
                )
            );
            return;
        }
    }
    /*
    * If we didn't find a match above, this is a new post,
    * so create a new term.
    */
    wp_insert_term($term_title, 'Teams', array(
            'slug' => $term_slug,
            'description' => $post_id
        )
    );
}

//run the update function whenever a post is created or edited
add_action('save_post', 'update_custom_terms');



function update_custom_terms_users($post_id) {

    // only update terms if it's a post-type-B post
    if ( 'bloggers' != get_post_type($post_id)) {
        return;
    }
    // don't create or update terms for system generated posts
    if (get_post_status($post_id) == 'auto-draft') {
        return;
    }
    /*
    * Grab the post title and slug to use as the new
    * or updated term name and slug
    */
    $term_title = get_the_title($post_id);
    $term_slug = get_post( $post_id )->post_name;

    /*
    * Check if a corresponding term already exists by comparing
    * the post ID to all existing term descriptions.
    */
    $existing_terms = get_terms('bloggerusers', array(
            'hide_empty' => false
        )
    );

    foreach($existing_terms as $term) {
        if ($term->description == $post_id) {
            //term already exists, so update it and we're done
            wp_update_term($term->term_id, 'bloggerusers', array(
                    'name' => $term_title,
                    'slug' => $term_slug
                )
            );
            return;
        }
    }
    /*
    * If we didn't find a match above, this is a new post,
    * so create a new term.
    */
    wp_insert_term($term_title, 'bloggerusers', array(
            'slug' => $term_slug,
            'description' => $post_id
        )
    );
}

//run the update function whenever a post is created or edited
add_action('save_post', 'update_custom_terms_users');



function update_players_terms($post_id) {

    // only update terms if it's a post-type-B post
    if ( 'players' != get_post_type($post_id)) {
        return;
    }
    // don't create or update terms for system generated posts
    if (get_post_status($post_id) == 'auto-draft') {
        return;
    }
    /*
    * Grab the post title and slug to use as the new
    * or updated term name and slug
    */
    $term_title = get_the_title($post_id);
    $term_slug = get_post( $post_id )->post_name;

    /*
    * Check if a corresponding term already exists by comparing
    * the post ID to all existing term descriptions.
    */
    $existing_terms = get_terms('Players', array(
            'hide_empty' => false
        )
    );

    foreach($existing_terms as $term) {
        if ($term->description == $post_id) {
            //term already exists, so update it and we're done
            wp_update_term($term->term_id, 'Players', array(
                    'name' => $term_title,
                    'slug' => $term_slug
                )
            );
            return;
        }
    }
    /*
    * If we didn't find a match above, this is a new post,
    * so create a new term.
    */
    wp_insert_term($term_title, 'Players', array(
            'slug' => $term_slug,
            'description' => $post_id
        )
    );
}

add_action('save_post', 'update_players_terms');


/**
 * Display a custom taxonomy dropdown in admin
 **/

add_action('restrict_manage_posts', 'nbaholics_filter_players_by_taxonomy');

function nbaholics_filter_players_by_taxonomy() {
    global $typenow;
    global $wpquery;
    $post_type = 'players'; // change to your post type
    $taxonomy  = 'Teams'; // change to your taxonomy
    if ($typenow == $post_type) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] :'';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'hierarchical'    => 1,
            'hide_empty'      => false,
            'value_field' => 'slug'
        ));
    };
}

add_action('restrict_manage_posts', 'nbaholics_filter_posts_by_taxonomy');

function nbaholics_filter_posts_by_taxonomy() {
    global $typenow;
    global $wpquery;
    $post_types = 'post';
    $taxonomy_posts  = 'Teams'; // change to your taxonomy
    if ($typenow == $post_types) {
        $selected  = isset($_GET[$taxonomy_posts]) ? $_GET[$taxonomy_posts] : '';
        $info_taxonomy = get_taxonomy($taxonomy_posts);
        wp_dropdown_categories(array(
            'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
            'taxonomy'        => $taxonomy_posts,
            'name'            => $taxonomy_posts,
            'orderby'         => 'name',
            'selected'        => $selected,
            'hierarchical'    => 1,
            'hide_empty'      => false,
            'value_field' => 'slug'
        ));
    };
}

add_action('restrict_manage_posts', 'nbaholics_filter_posts_by_taxonomy_players');

function nbaholics_filter_posts_by_taxonomy_players() {
    global $typenow;
    global $wpquery;
    $post_types = 'post';
    $taxonomy_posts  = 'Players'; // change to your taxonomy
    if ($typenow == $post_types) {
        $selected  = isset($_GET[$taxonomy_posts]) ? $_GET[$taxonomy_posts] : '';
        $info_taxonomy = get_taxonomy($taxonomy_posts);
        wp_dropdown_categories(array(
            'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
            'taxonomy'        => $taxonomy_posts,
            'name'            => $taxonomy_posts,
            'orderby'         => 'name',
            'selected'        => $selected,
            'hierarchical'    => 1,
            'hide_empty'      => false,
            'value_field' => 'slug'
        ));
    };
}




