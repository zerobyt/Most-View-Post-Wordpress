# Most-View-Post-Wordpress
<br><br>
<b>GET THE COUNT VIEWS IN POST</b> <br>

<b>USE IN THE WP LOOP:</b> get_post_view_count($post->ID);<br><br>
<b>USE IN WP QUERY:</b><br>
&nbsp;	$args    = array(<br>
&nbsp;	'numberposts' => 4,<br>
&nbsp;	'orderby'     => 'meta_value',<br>
&nbsp;	'meta_key'    => 'post_views_count',<br>
&nbsp;	'order'       => 'DESC',<br>
&nbsp;	'post_type'   => 'post',<br>
&nbsp;	'post_status' => 'publish'<br>
&nbsp;	);<br>
<br>
<b>ADD A VIEW TO THE COUNT</b> <br>
&nbsp;	set_post_view($post->ID);<br>
