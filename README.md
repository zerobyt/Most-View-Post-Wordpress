# Most-View-Post-Wordpress
<b>GET THE COUNT VIEWS IN POST</b> <br>
<b>USE IN THE WP LOOP:</b> get_post_view_count($post->ID);<br><br>
<b>USE IN WP QUERY:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;$args    = array(<br>
&nbsp;&nbsp;&nbsp;&nbsp;'numberposts' => 4,<br>
&nbsp;&nbsp;&nbsp;&nbsp;'orderby'     => 'meta_value',<br>
&nbsp;&nbsp;&nbsp;&nbsp;'meta_key'    => 'post_views_count',<br>
&nbsp;&nbsp;&nbsp;&nbsp;'order'       => 'DESC',<br>
&nbsp;&nbsp;&nbsp;&nbsp;'post_type'   => 'post',<br>
&nbsp;&nbsp;&nbsp;&nbsp;'post_status' => 'publish'<br>
&nbsp;&nbsp;&nbsp;&nbsp;);<br>
<br>
<b>ADD A VIEW TO THE COUNT</b> <br>
&nbsp;&nbsp;&nbsp;&nbsp;set_post_view($post->ID);<br>
