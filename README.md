# Most-View-Post-Wordpress
<br><br>
<b>GET THE COUNT VIEWS IN POST</b> <br>

<b>USE IN THE WP LOOP:</b> get_post_view_count($post->ID);<br>
<b>USE IN WP QUERY:</b><br>
	$args    = array(<br>
	'numberposts' => 4,<br>
	'orderby'     => 'meta_value',<br>
	'meta_key'    => 'post_views_count',<br>
	'order'       => 'DESC',<br>
	'post_type'   => 'post',<br>
	'post_status' => 'publish'<br>
	);<br>
<br>
<b>ADD A VIEW TO THE COUNT</b> <br>
	set_post_view($post->ID);<br>
