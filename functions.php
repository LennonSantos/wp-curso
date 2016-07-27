<?php 
	add_theme_support( 'post-thumbnails' );

	function wordpress_pagination() {
        global $wp_query;

        $big = 999999999;

        echo paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages
        ) );
    }
?>