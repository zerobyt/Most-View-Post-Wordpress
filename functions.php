<?php
	/*
	* //GET THE COUNT VIEWS IN POST 
	*	
	* USE IN THE WP LOOP: get_post_view_count($post->ID);
	* USE IN WP QUERY:
	*	$args    = array(
	*	'numberposts' => 4,
	*	'orderby'     => 'meta_value',
	*	'meta_key'    => 'post_views_count',
	*	'order'       => 'DESC',
	*	'post_type'   => 'post',
	*	'post_status' => 'publish'
	*	);
	*
	* //ADD A VIEW TO THE COUNT
	*	set_post_view($post->ID);
	*/
	function get_post_view_count($postID){
		$count_key = 'post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if(empty($count)){
			delete_post_meta( $postID, $count_key );
			add_post_meta( $postID, $count_key, '0' );
			return 0;
		}
		return $count;
	}
	
	function set_post_view($postID){
		 $count_key = 'post_views_count';
		 $count = (int) get_post_meta( $postID, $count_key, true );
		 if ( $count < 1 ) {
			 delete_post_meta( $postID, $count_key );
			 add_post_meta( $postID, $count_key, '1' );
		 } else {
			 $count++;
			 update_post_meta( $postID, $count_key, (int) $count );
		 }
	}
	
	function show_posts_column_views( $defaults ) {
		$defaults['post_views'] = __( 'Views' );
		return $defaults;
	}
	
	function show_posts_custom_column_views( $column_name, $id ) {
		if ( $column_name === 'post_views' ) {
			echo get_post_view_count( get_the_ID() );
		}
	}
	
	add_filter( 'manage_posts_columns', 'show_posts_column_views' );
	add_action( 'manage_posts_custom_column', 'show_posts_custom_column_views', 5, 2 );