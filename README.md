# Most-View-Post-Wordpress
Get &amp; Set the most view post in Wordpress

GET THE COUNT VIEWS IN POST <br>

USE IN THE WP LOOP: get_post_view_count($post->ID);
USE IN WP QUERY:
	$args    = array(
	'numberposts' => 4,
	'orderby'     => 'meta_value',
	'meta_key'    => 'post_views_count',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'post_status' => 'publish'
	);

ADD A VIEW TO THE COUNT 
	set_post_view($post->ID);
