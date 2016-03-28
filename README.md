# Most-View-Post-Wordpress
Get &amp; Set the most view post in Wordpress

GET THE COUNT VIEWS IN POST <br>

USE IN THE WP LOOP: get_post_view_count($post->ID);<br>
USE IN WP QUERY:<br>
	$args    = array(<br>
	'numberposts' => 4,<br>
	'orderby'     => 'meta_value',<br>
	'meta_key'    => 'post_views_count',<br>
	'order'       => 'DESC',<br>
	'post_type'   => 'post',<br>
	'post_status' => 'publish'<br>
	);<br>
<br>
ADD A VIEW TO THE COUNT <br>
	set_post_view($post->ID);<br>
